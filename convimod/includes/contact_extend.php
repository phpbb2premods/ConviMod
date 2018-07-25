<?php
/***************************************************************************
 *                            contact_extend.php
 *                            ------------------
 *	Version:	9.5.0
 *	Begin:		Tuesday, Dec 06, 2006
 *   	Copyright:	(C) 2006-08, Marcus
 *	E-mail:		marcus@phobbia.net
 *	$id:		06:39 31/05/2008
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if(!defined('IN_PHPBB'))
{
	die('Hacking Attempt');
}

if(($contact_config['contact_thankyou'] == 1) && (!$userdata['session_logged_in']))
{
	return;
}
else
{
	if($email == $lang['Empty'])
	{
		return;
	}
	else
	{
		//
		// Prune expired emails (24hr anti-spam)
		//
		$time = time();
		$sql = "DELETE FROM " . CONTACT_EMAILS_TABLE . "
			WHERE lasttime <= '$time'";
		$result = $db->sql_query($sql);

		if(!$db->sql_query($sql))
		{
			message_die(GENERAL_ERROR, 'Failed to update emails', '', __LINE__, __FILE__, $sql);
		}

		//
		// Store new Sender e-mail with limit (3 max)
		//
		$sql = "SELECT * 
			FROM " . CONTACT_EMAILS_TABLE . "
			WHERE email = '$email'";
		$result = $db->sql_query($sql);

		if(!$db->sql_query($sql))
		{
			message_die(CRITICAL_ERROR, 'Could not query email information', '', __LINE__, __FILE__, $sql);
		}
		$row = $db->sql_fetchrow($result);

		if(empty($row['email']))
		{
			$lasttime = time() + intval(24 * 60) * intval(60);
			$initial = 1;
			$sql = "INSERT INTO " . CONTACT_EMAILS_TABLE . " (email, sent, lasttime)
				VALUES ('" . str_replace("\'", "''", $email) . "', $initial, $lasttime)";
			if(!$db->sql_query($sql))
			{
				message_die(CRITICAL_ERROR, 'Could not update email information', '', __LINE__, __FILE__, $sql);
			}
		}
		else
		{
			if($row['sent'] >= 3)
			{
				//
				// Maximum "Thank You" e-mails sent is
				// 3 per 24 hours to prevent spam abuse
				//
				$limit = TRUE;
			}
			else
			{
				$sql = "UPDATE " . CONTACT_EMAILS_TABLE . "
					SET sent = sent + 1
					WHERE email = '$email'";
				if(!$db->sql_query($sql))
				{
					message_die(CRITICAL_ERROR, 'Could not update email information', '', __LINE__, __FILE__, $sql);
				}
			}
		}

		if(!$limit)
		{
			$html_chars_match	= array('/&gt;/', '/&lt;/', '/&quot;/', '/&amp;/');
			$html_chars_replace	= array('>', '<', '"', '&');

			//
			// Send a "Thank You" e-mail to the sender
			//
			$emailer = new emailer($board_config['smtp_delivery']);
			$emailer->from($board_config['board_email']);
			$emailer->replyto($board_config['board_email']);

			$email_headers  = 'X-AntiAbuse: Board Servername - ' . $board_config['server_name'] . "\n";
			$email_headers .= 'X-AntiAbuse: User ID - ' . $userdata['user_id'] . "\n";
			$email_headers .= 'X-AntiAbuse: Username - ' . $userdata['username'] . "\n";
			$email_headers .= 'X-AntiAbuse: User IP - ' . decode_ip($user_ip) . "\n";

			empty($email) ? $emailer->email_address() : $emailer->email_address($email);

			$emailer->extra_headers($email_headers);
			$emailer->use_template('contact_thanks', $userdata['user_lang']);
			$emailer->set_subject($subject);

			$emailer->assign_vars(array(
				'COMMENTS' => preg_replace($html_chars_match, $html_chars_replace, substr(str_replace("\'", "'", $comments), 0, strlen($comments))),
				'EMAIL_SIG' => (!empty($board_config['board_email_sig'])) ? str_replace('<br />', "\n", $board_config['board_email_sig']) : '',
				'SITENAME' => $board_config['sitename'])
			);

			$emailer->send();
			$emailer->reset();
		}
	}
}

?>