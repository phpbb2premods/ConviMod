<?php
/***************************************************************************
 *                               admin_forumauth_list.php
 *                            -------------------
 *   copyright            : (C) Antony Bailey & Freakin' Booty ;-P
 *   email                : antony_bailey@lycos.co.uk
 *
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

define('IN_PHPBB', 1);

if( !empty($setmodules) )
{
	$filename = basename(__FILE__);
	$module['Forums']['Permissions List'] = $filename;

	return;
}


//
// Load default header
//
$no_page_header = TRUE;
$phpbb_root_path = './../';
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

//
// Start program - define vars
//
// start mod clone posts (and end mod too)...added references to 'auth_cloneposts'
// below in the definitions of $forum_auth_fields and in $field_names
$forum_auth_fields = array('auth_view', 'auth_read', 'auth_post', 'auth_reply', 'auth_edit', 'auth_delete', 'auth_cloneposts', 'auth_sticky', 'auth_announce', 'auth_global_announce', 'auth_vote', 'auth_pollcreate', 'auth_attachments', 'auth_download');

$field_names = array(
	'auth_view' => $lang['View'],
	'auth_read' => $lang['Read'],
	'auth_post' => $lang['Post'],
	'auth_reply' => $lang['Reply'],
	'auth_edit' => $lang['Edit'],
	'auth_delete' => $lang['Delete'],
//-- mod : Clone Post ---------------------------------------------------------
//-- add
	'auth_cloneposts' => $lang['Cloneposts'],
//-- fin mod : Clone Post -----------------------------------------------------
	'auth_sticky' => $lang['Sticky'],
	'auth_announce' => $lang['Announce'],
	'auth_global_announce' => $lang['Global_Announce'],
	'auth_vote' => $lang['Vote'],
	'auth_pollcreate' => $lang['Pollcreate'],
//-- mod : attachment mod ------------------------------------------------------
//-- add
	'auth_download' => $lang['Auth_download'],
	'auth_attachments' => $lang['Auth_attach'],
//-- fin mod : attachment mod --------------------------------------------------
);

$forum_auth_levels = array('ALL', 'REG', 'PRIVATE', 'MOD', 'ADMIN');
$forum_auth_const = array(AUTH_ALL, AUTH_REG, AUTH_ACL, AUTH_MOD, AUTH_ADMIN);


//
// Get required information, for all forums
//
$sql = "SELECT f.*
		FROM " . FORUMS_TABLE . " f, " . CATEGORIES_TABLE . " c
		WHERE c.cat_id = f.cat_id
		ORDER BY c.cat_order ASC, f.forum_order ASC";
if( !$result = $db->sql_query($sql) )
{
	message_die(GENERAL_ERROR, 'Couldn\'t obtain forum list', '', __LINE__, __FILE__, $sql);
}

$forum_rows = $db->sql_fetchrowset($result);
$db->sql_freeresult($result);


//
// Start program proper
//
if( $HTTP_POST_VARS['submit'] )
{
	for( $i = 0; $i < count($forum_rows); $i++ )
	{
		$sql = '';
		$forum_id = $forum_rows[$i]['forum_id'];

		for( $j = 0; $j < count($forum_auth_fields); $j++ )
		{
			$value = $HTTP_POST_VARS[$forum_auth_fields[$j]][$forum_id];

			if ( $forum_auth_fields[$j] == 'auth_vote' )
			{
				if ( $HTTP_POST_VARS['auth_vote'][$forum_id] == AUTH_ALL )
				{
					$value = AUTH_REG;
				}
			}

			$sql .= ( ( $sql != '' ) ? ', ' : '' ) . $forum_auth_fields[$j] . ' = ' . $value;
		}

		$sql = "UPDATE " . FORUMS_TABLE . " SET $sql WHERE forum_id = $forum_id";
		if( !$db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, 'Couldn\'t update forum permissions', '', __LINE__, __FILE__, $sql);
		}
	}

	$template->assign_vars(array(
		'META' => '<meta http-equiv="refresh" content="3; url=' . append_sid("admin_forumauth_list.$phpEx") . '" />'
		)
	);
	$message = $lang['Forum_auth_updated'] . '<br /><br />' . sprintf($lang['Click_return_forumauth'],  '<a href="' . append_sid("admin_forumauth_list.$phpEx") . '">', '</a>');
	message_die(GENERAL_MESSAGE, $message);
}


//
// Default page
//
$colspan = count($forum_auth_fields) + 1;

//
// Output the authorisation details
//
$template->set_filenames(array(
	'body' => 'admin/auth_forum_list_body.tpl'
	)
);

$template->assign_vars(array(
	'L_FORUM_LIST' => $lang['forum_list'],
	'L_SUBMIT' => $lang['Submit'],
	'L_RESET' => $lang['Reset'],

	'COLSPAN' => $colspan,

	'S_FORM_ACTION' => append_sid("admin_forumauth_list.$phpEx")
	)
);

for( $i = 0; $i < count($forum_auth_fields); $i++ )
{
	$template->assign_block_vars('forum_auth_titles', array(
		'CELL_TITLE' => $field_names[$forum_auth_fields[$i]]
		)
	);
}

for ($i=0; $i<count($forum_rows); $i++)
{
	$temp_url = append_sid("admin_forumauth.$phpEx?" . POST_FORUM_URL . '=' . $forum_rows[$i]['forum_id']);
	$s_forum = '<a href="' . $temp_url . '">' . $forum_rows[$i]['forum_name'] . '</a>';

	$template->assign_block_vars('forum_row', array(
		'ROW_CLASS' => ( !($i % 2) ) ? 'row1' : 'row2',

		'S_FORUM' => $s_forum
		)
	);

	for( $j = 0; $j < count($forum_auth_fields); $j++ )
	{
		$custom_auth[$j] = '&nbsp;<select name="' . $forum_auth_fields[$j] . '[' . $forum_rows[$i]['forum_id'] . ']">';

		for( $k = 0; $k < count($forum_auth_levels); $k++ )
		{
			$selected = ( $forum_rows[$i][$forum_auth_fields[$j]] == $forum_auth_const[$k] ) ? ' selected="selected"' : '';
			$custom_auth[$j] .= '<option value="' . $forum_auth_const[$k] . '"' . $selected . '>' . $lang['Forum_' . $forum_auth_levels[$k]] . '</option>';
		}
		$custom_auth[$j] .= '</select>&nbsp;';

		$cell_title = $field_names[$forum_auth_fields[$j]];

		$template->assign_block_vars('forum_row.forum_auth_data', array(
			'S_AUTH_LEVELS_SELECT' => $custom_auth[$j]
			)
		);
	}
}

include('./page_header_admin.'.$phpEx);

$template->pparse('body');

include('./page_footer_admin.'.$phpEx);

?>
