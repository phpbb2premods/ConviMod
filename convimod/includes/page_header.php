<?php
/***************************************************************************
 *                              page_header.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: page_header.php,v 1.106.2.25 2005/10/30 15:17:14 acydburn Exp $
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

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

define('HEADER_INC', TRUE);

//
// gzip_compression
//
$do_gzip_compress = FALSE;
if ( $board_config['gzip_compress'] )
{
	$phpver = phpversion();

	$useragent = (isset($HTTP_SERVER_VARS['HTTP_USER_AGENT'])) ? $HTTP_SERVER_VARS['HTTP_USER_AGENT'] : getenv('HTTP_USER_AGENT');

	if ( $phpver >= '4.0.4pl1' && ( strstr($useragent,'compatible') || strstr($useragent,'Gecko') ) )
	{
		if ( extension_loaded('zlib') )
		{
			ob_start('ob_gzhandler');
		}
	}
	else if ( $phpver > '4.0' )
	{
		if ( strstr($HTTP_SERVER_VARS['HTTP_ACCEPT_ENCODING'], 'gzip') )
		{
			if ( extension_loaded('zlib') )
			{
				$do_gzip_compress = TRUE;
				ob_start();
				ob_implicit_flush(0);

				header('Content-Encoding: gzip');
			}
		}
	}
}

//-- mod : admin link in header ------------------------------------------------
//-- add
if ( $userdata['user_level'] == ADMIN )
{
	$u_admin_link = 'admin/index.' . $phpEx . '?sid=' . $userdata['session_id'];
	$l_admin_link = $lang['Admin_panel'];
	$u_banlist = 'banlist.'.$phpEx;
	$l_banlist = $lang['Banlist'];
	$template->assign_block_vars('switch_admin_link', array());
}
else
{
	$u_admin_link = '';
	$l_admin_link = '';
	$u_banlist = '';
	$l_banlist = '';
}
//-- fin mod : admin link in header --------------------------------------------

//
// Parse and show the overall header.
//
$template->set_filenames(array(
	'overall_header' => ( empty($gen_simple_header) ) ? 'overall_header.tpl' : 'simple_header.tpl')
);

//
// Generate logged in/logged out status
//
if ( $userdata['session_logged_in'] )
{
	$u_login_logout = 'login.'.$phpEx.'?logout=true&amp;sid=' . $userdata['session_id'];
	$l_login_logout = $lang['Logout'] . ' [ ' . $userdata['username'] . ' ]';
}
else
{
	$u_login_logout = 'login.'.$phpEx;
	$l_login_logout = $lang['Login'];
}

//MOD Keep_unread
$t = $userdata['session_logged_in'] ? $userdata['user_lastvisit'] :	$board_config['guest_lastvisit'];
$s_last_visit = create_date($board_config['default_dateformat'], $t, $board_config['board_timezone']);
//END MOD Keep_unread

//
// Get basic (usernames + totals) online
// situation
//
$logged_visible_online = 0;
$logged_hidden_online = 0;
$guests_online = 0;
$online_userlist = '';
$l_online_users = '';

if (defined('SHOW_ONLINE'))
{

	$user_forum_sql = ( !empty($forum_id) ) ? "AND s.session_page = " . intval($forum_id) : '';
//-- mod : Bot Indexing Mod ---------------------------------------------------
//-- here we added
//	, s.is_robot
//-- add
	$sql = "SELECT u.username, u.user_id, u.user_allow_viewonline, u.user_level, s.session_logged_in, s.session_ip, s.is_robot
		FROM ".USERS_TABLE." u, ".SESSIONS_TABLE." s
		WHERE u.user_id = s.session_user_id
			AND s.session_time >= ".( time() - 300 ) . "
			$user_forum_sql
		ORDER BY u.username ASC, s.session_ip ASC";
//-- fin mod : Bot Indexing Mod ------------------------------------------------
//-- mod : rank color system ---------------------------------------------------
//-- add
	$sql = str_replace('SELECT ', 'SELECT u.user_color, u.user_group_id, ', $sql);
//-- fin mod : rank color system -----------------------------------------------
	if( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not obtain user/online information', '', __LINE__, __FILE__, $sql);
	}

	$userlist_ary = array();
	$userlist_visible = array();

	$prev_user_id = 0;
	$prev_user_ip = $prev_session_ip = '';
//-- mod : Bot Indexing Mod -----------------------------------------------------
//-- add
	$prev_is_robot = '';
//-- fin mod : Bot Indexing Mod -------------------------------------------------

	while( $row = $db->sql_fetchrow($result) )
	{
		// User is logged in and therefor not a guest
		if ( $row['session_logged_in'] )
		{
			// Skip multiple sessions for one user
			if ( $row['user_id'] != $prev_user_id )
			{
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
				$style_color = '';
				if ( $row['user_level'] == ADMIN )
				{
					$row['username'] = '<b>' . $row['username'] . '</b>';
					$style_color = 'style="color:#' . $theme['fontcolor3'] . '"';
				}
				else if ( $row['user_level'] == MOD )
				{
					$row['username'] = '<b>' . $row['username'] . '</b>';
					$style_color = 'style="color:#' . $theme['fontcolor2'] . '"';
				}
MOD-*/
//-- add
				$style_color = $rcs->get_colors($row);
//-- fin mod : rank color system -----------------------------------------------

				if ( $row['user_allow_viewonline'] )
				{
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
					$user_online_link = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '"' . $style_color . '>' . $row['username'] . '</a>';
MOD-*/
//-- add
					$user_online_link = '<a href="' . $get->url('userlist', array('mode' => 'viewprofile', POST_USERS_URL => $row['user_id']), true) . '"' . $style_color . '>' . $row['username'] . '</a>';
//-- fin mod : rank color system -----------------------------------------------
					$logged_visible_online++;
				}
				else
				{
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
					$user_online_link = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '"' . $style_color . '><i>' . $row['username'] . '</i></a>';
MOD-*/
//-- add
					$user_online_link = '<a href="' . $get->url('userlist', array('mode' => 'viewprofile', POST_USERS_URL => $row['user_id']), true) . '"' . $style_color . '><i>' . $row['username'] . '</i></a>';
//-- fin mod : rank color system -----------------------------------------------
					$logged_hidden_online++;
				}

				if ( $row['user_allow_viewonline'] || $userdata['user_level'] == ADMIN )
				{
					$online_userlist .= ( $online_userlist != '' ) ? ', ' . $user_online_link : $user_online_link;
				}
			}

			$prev_user_id = $row['user_id'];
		}
		else
		{
			// Skip multiple sessions for one user
			if ( $row['session_ip'] != $prev_session_ip )
			{
//-- mod Bot Indexing Mod
//-- replace
/* MODs
				$guests_online++;
			}
		}
		$prev_session_ip = $row['session_ip'];
MODs */
				$guests_online++;

				if (($row['is_robot'] != '0') && ($row['is_robot'] != $prev_is_robot))
				{
				
				
				
			        if ( strpos ($online_userlist,$row['is_robot']) == FALSE )
   {
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
					$row['is_robot'] = '<span style="color:#' . $theme['body_link'] . '"><b>' . $row['is_robot'] . '</b></span>';
MOD-*/
//-- add
					$row['is_robot'] = '<span style="color:#' . $theme['rcs_botcolor'] . '"><b>' . $row['is_robot'] . '</b></span>';
//-- fin mod : rank color system -----------------------------------------------
     $online_userlist = $row['is_robot'] . (($online_userlist!='') ? ', ' : '') . $online_userlist;
   } 
					
					}	
			
			}
			
		}
        $prev_is_robot = $row['is_robot'];
       $prev_session_ip = $row['session_ip'];
//-- fin mod : Bot Indexing Mod ------------------------------------------------
	}
	$db->sql_freeresult($result);

	if ( empty($online_userlist) )
	{
		$online_userlist = $lang['None'];
	}
	$online_userlist = ( ( isset($forum_id) ) ? $lang['Browsing_forum'] : $lang['Registered_users'] ) . ' ' . $online_userlist;

	$total_online_users = $logged_visible_online + $logged_hidden_online + $guests_online;

	if ( $total_online_users > $board_config['record_online_users'])
	{
		$board_config['record_online_users'] = $total_online_users;
		$board_config['record_online_date'] = time();

		$sql = "UPDATE " . CONFIG_TABLE . "
			SET config_value = '$total_online_users'
			WHERE config_name = 'record_online_users'";
		if ( !$db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, 'Could not update online user record (nr of users)', '', __LINE__, __FILE__, $sql);
		}

		$sql = "UPDATE " . CONFIG_TABLE . "
			SET config_value = '" . $board_config['record_online_date'] . "'
			WHERE config_name = 'record_online_date'";
		if ( !$db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, 'Could not update online user record (date)', '', __LINE__, __FILE__, $sql);
		}
	}

	if ( $total_online_users == 0 )
	{
		$l_t_user_s = $lang['Online_users_zero_total'];
	}
	else if ( $total_online_users == 1 )
	{
		$l_t_user_s = $lang['Online_user_total'];
	}
	else
	{
		$l_t_user_s = $lang['Online_users_total'];
	}

	if ( $logged_visible_online == 0 )
	{
		$l_r_user_s = $lang['Reg_users_zero_total'];
	}
	else if ( $logged_visible_online == 1 )
	{
		$l_r_user_s = $lang['Reg_user_total'];
	}
	else
	{
		$l_r_user_s = $lang['Reg_users_total'];
	}

	if ( $logged_hidden_online == 0 )
	{
		$l_h_user_s = $lang['Hidden_users_zero_total'];
	}
	else if ( $logged_hidden_online == 1 )
	{
		$l_h_user_s = $lang['Hidden_user_total'];
	}
	else
	{
		$l_h_user_s = $lang['Hidden_users_total'];
	}

	if ( $guests_online == 0 )
	{
		$l_g_user_s = $lang['Guest_users_zero_total'];
	}
	else if ( $guests_online == 1 )
	{
		$l_g_user_s = $lang['Guest_user_total'];
	}
	else
	{
		$l_g_user_s = $lang['Guest_users_total'];
	}

	$l_online_users = sprintf($l_t_user_s, $total_online_users);
	$l_online_users .= sprintf($l_r_user_s, $logged_visible_online);
	$l_online_users .= sprintf($l_h_user_s, $logged_hidden_online);
	$l_online_users .= sprintf($l_g_user_s, $guests_online);
}

//
// Obtain number of new private messages
// if user is logged in
//
if ( ($userdata['session_logged_in']) && (empty($gen_simple_header)) )
{
	if ( $userdata['user_new_privmsg'] )
	{
		$l_message_new = ( $userdata['user_new_privmsg'] == 1 ) ? $lang['New_pm'] : $lang['New_pms'];
		$l_privmsgs_text = sprintf($l_message_new, $userdata['user_new_privmsg']);

		if ( $userdata['user_last_privmsg'] > $userdata['user_lastvisit'] )
		{
			$sql = "UPDATE " . USERS_TABLE . "
				SET user_last_privmsg = " . $userdata['user_lastvisit'] . "
				WHERE user_id = " . $userdata['user_id'];
			if ( !$db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, 'Could not update private message new/read time for user', '', __LINE__, __FILE__, $sql);
			}

			$s_privmsg_new = 1;
			$icon_pm = $images['pm_new_msg'];
		}
		else
		{
			$s_privmsg_new = 0;
			$icon_pm = $images['pm_new_msg'];
		}
	}
//-- mod : New then Unread PMs after login --------------------------------------
//-- replace
/* -MOD
	else
	{
		$l_privmsgs_text = $lang['No_new_pm'];

		$s_privmsg_new = 0;
		$icon_pm = $images['pm_no_new_msg'];
	}

	if ( $userdata['user_unread_privmsg'] )
	{
		$l_message_unread = ( $userdata['user_unread_privmsg'] == 1 ) ? $lang['Unread_pm'] : $lang['Unread_pms'];
		$l_privmsgs_text_unread = sprintf($l_message_unread, $userdata['user_unread_privmsg']);
	}
	else
	{
		$l_privmsgs_text_unread = $lang['No_unread_pm'];
	}
}
else
{
	$icon_pm = $images['pm_no_new_msg'];
	$l_privmsgs_text = $lang['Login_check_pm'];
	$l_privmsgs_text_unread = '';
	$s_privmsg_new = 0;
}
-MOD */
//-- add
	else
	{
	if ( $userdata['user_unread_privmsg'] )
	{
		$l_message_unread = ( $userdata['user_unread_privmsg'] == 1 ) ? $lang['Unread_pm'] : $lang['Unread_pms'];
		$l_privmsgs_text = sprintf($l_message_unread, $userdata['user_unread_privmsg']);
		$s_privmsg_new = 0;
		$icon_pm = $images['pm_new_msg'];	
	}
	else
	{
		$l_privmsgs_text = $lang['No_unread_pm'];
		$s_privmsg_new = 0;
		$icon_pm = $images['pm_no_new_msg'];

	}
	}
	}
else
{
	$icon_pm = $images['pm_no_new_msg'];
	$l_privmsgs_text = $lang['Login_check_pm'];
	$s_privmsg_new = 0;
}
//-- fin mod : New then Uread PMs after login --------------------------------------------------------------

//
// Generate HTML required for Mozilla Navigation bar
//
if (!isset($nav_links))
{
	$nav_links = array();
}

//-- mod : rank color system ---------------------------------------------------
//-- add
$nav_links = empty($nav_links) ? array() : array_merge($nav_links, array(
	'author' => array(
		'url' => $get->url('userlist', '', true),
		'title' => $lang['Memberlist'],
	),
));
//-- fin mod : rank color system -----------------------------------------------

$nav_links_html = '';
$nav_link_proto = '<link rel="%s" href="%s" title="%s" />' . "\n";
while( list($nav_item, $nav_array) = @each($nav_links) )
{
	if ( !empty($nav_array['url']) )
	{
		$nav_links_html .= sprintf($nav_link_proto, $nav_item, append_sid($nav_array['url']), $nav_array['title']);
	}
	else
	{
		// We have a nested array, used for items like <link rel='chapter'> that can occur more than once.
		while( list(,$nested_array) = each($nav_array) )
		{
			$nav_links_html .= sprintf($nav_link_proto, $nav_item, $nested_array['url'], $nested_array['title']);
		}
	}
}

// Format Timezone. We are unable to use array_pop here, because of PHP3 compatibility
//-- mod : date format evolved -------------------------------------------------
//-- delete
/*-MOD
$l_timezone = explode('.', $board_config['board_timezone']);
$l_timezone = (count($l_timezone) > 1 && $l_timezone[count($l_timezone)-1] != 0) ? $lang[sprintf('%.1f', $board_config['board_timezone'])] : $lang[number_format($board_config['board_timezone'])];
MOD-*/
//-- add
$tz = strval(doubleval($board_config['board_timezone']));
$l_timezone = $lang['tz'][$tz];
//-- fin mod : date format evolved ---------------------------------------------

//
// RSS Button URL
//
if(isset($HTTP_GET_VARS[POST_FORUM_URL]))
{
        $rss_url = "rss.".$phpEx."?".POST_FORUM_URL."=".$HTTP_GET_VARS[POST_FORUM_URL];
        $l_rss = $board_config['sitename']." ".$lang['rss_forum'];
}
else if(isset($HTTP_GET_VARS[POST_TOPIC_URL]))
{
        $rss_url = "rss.".$phpEx."?".POST_TOPIC_URL."=".$HTTP_GET_VARS[POST_TOPIC_URL];
        $l_rss = $board_config['sitename']." ".$lang['rss_topic'];
}
else if(isset($HTTP_GET_VARS[POST_POST_URL]))
{
        $rss_url = "rss.".$phpEx."?".POST_POST_URL."=".$HTTP_GET_VARS[POST_POST_URL];
        $l_rss = $board_config['sitename']." ".$lang['rss_topic'];
}
else
{
        $rss_url = "rss.".$phpEx."";
        $l_rss = $board_config['sitename']." ".$lang['rss_latest'];
}

//
// The following assigns all _common_ variables that may be used at any point
// in a template.
//
//START MOD Keep_unread_2
// check to see if we are supposed to toggle unread link from "View your unread posts" to "You have no unread posts" depending on whether 
// there are unread posts (on large boards people may want to skip that toggle by defining $toggle_unreads_link as false 
// in index.php to save query time)
if ($toggle_unreads_link)
{
	// only run a new list_new_unreads check if we haven't already done that by the time we get here (if we're coming from index.php this will already have been done in index.php)
	if ( !isset($new_unreads) )
	{
		$new_unreads = (list_new_unreads($forum_unreads, $toggle_unreads_link)) ? true : false;
	}
}
else
{
	// if we get here, we are not supposed to toggle the unread link so we'll just set the link to read "View your unread posts" in all cases
	$new_unreads = true;
}
//END MOD Keep_unread_2
$template->assign_vars(array(
	'SITENAME' => $board_config['sitename'],
	'SITE_DESCRIPTION' => $board_config['site_desc'],
//-- mod : Adjustable board width -----------------------------------------------
//-- add
	'FORUM_WIDTH' => $board_config['forum_width'],
//-- fin mod : Adjustable board width -------------------------------------------
	'PAGE_TITLE' => $page_title,
	'LAST_VISIT_DATE' => sprintf($lang['You_last_visit'], $s_last_visit),
	'CURRENT_TIME' => sprintf($lang['Current_time'], create_date($board_config['default_dateformat'], time(), $board_config['board_timezone'])),
	'TOTAL_USERS_ONLINE' => $l_online_users,
	'LOGGED_IN_USER_LIST' => $online_userlist,
	'RECORD_USERS' => sprintf($lang['Record_online_users'], $board_config['record_online_users'], create_date($board_config['default_dateformat'], $board_config['record_online_date'], $board_config['board_timezone'])),
	'PRIVATE_MESSAGE_INFO' => $l_privmsgs_text,
	'PRIVATE_MESSAGE_INFO_UNREAD' => $l_privmsgs_text_unread,
	'PRIVATE_MESSAGE_NEW_FLAG' => $s_privmsg_new,

	// RSS Mod
        'U_RSS' => $rss_url,
        'L_RSS' => $l_rss,
        'RSS_IMAGE' => $images['icon_rss'],

	'PRIVMSG_IMG' => $icon_pm,

	'L_USERNAME' => $lang['Username'],
	'L_PASSWORD' => $lang['Password'],
	'L_LOGIN_LOGOUT' => $l_login_logout,

//-- mod : admin link in header ------------------------------------------------
//-- add
	'L_ADMIN_LINK' => $l_admin_link,
//-- fin mod : admin link in header --------------------------------------------

	'L_BANLIST' => $l_banlist,

	'L_LOGIN' => $lang['Login'],
	'L_LOG_ME_IN' => $lang['Log_me_in'],
	'L_AUTO_LOGIN' => $lang['Log_me_in'],
	'L_INDEX' => sprintf($lang['Forum_Index'], $board_config['sitename']),
	'L_REGISTER' => $lang['Register'],
	'L_PROFILE' => $lang['Profile'],
	'L_SEARCH' => $lang['Search'],
	'L_PRIVATEMSGS' => $lang['Private_Messages'],
	'L_WHO_IS_ONLINE' => $lang['Who_is_Online'],
	'L_MEMBERLIST' => $lang['Memberlist'],
	'L_FAQ' => $lang['FAQ'],
	'L_USERGROUPS' => $lang['Usergroups'],
	'L_SEARCH_NEW' => ($new_unreads) ? $lang['View_unread_posts'] : $lang['No_unread_posts'],
	'L_SEARCH_UNANSWERED' => $lang['Search_unanswered'],
	'L_SEARCH_SELF' => $lang['Search_your_posts'],
	'L_WHOSONLINE_ADMIN' => sprintf($lang['Admin_online_color'], '<span style="color:#' . $theme['fontcolor3'] . '">', '</span>'),
	'L_WHOSONLINE_MOD' => sprintf($lang['Mod_online_color'], '<span style="color:#' . $theme['fontcolor2'] . '">', '</span>'),

//-- mod : Contact Form --------------------------------------------------------
//-- add
	'L_CONTACT_FORM' => $lang['Contact_form'],
//-- fin mod : Contact Form ----------------------------------------------------

//-- mod : resize posted images based on max width -----------------------------
//-- add
	'L_RMW_IMAGE_TITLE' => $lang['rmw_image_title'],
	'IMAGES_MAX_SIZE' => $board_config['images_max_size'],
//-- fin mod : resize posted images based on max width -------------------------

	'U_SEARCH_UNANSWERED' => append_sid('search.'.$phpEx.'?search_id=unanswered'),
	'U_SEARCH_SELF' => append_sid('search.'.$phpEx.'?search_id=egosearch'),
	'U_SEARCH_NEW' => append_sid('search.'.$phpEx.'?search_id=newposts'),
	'U_INDEX' => append_sid('index.'.$phpEx),
	'U_REGISTER' => append_sid('profile.'.$phpEx.'?mode=register'),
	'U_PROFILE' => append_sid('profile.'.$phpEx.'?mode=editprofile'),
	'U_PRIVATEMSGS' => append_sid('privmsg.'.$phpEx.'?folder=inbox'),
	'U_PRIVATEMSGS_POPUP' => append_sid('privmsg.'.$phpEx.'?mode=newpm'),
	'U_SEARCH' => append_sid('search.'.$phpEx),
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
	'U_MEMBERLIST' => append_sid('memberlist.'.$phpEx),
MOD-*/
//-- add
	'U_MEMBERLIST' => $get->url('userlist', '', true),
//-- fin mod : rank color system -----------------------------------------------
	'U_MODCP' => append_sid('modcp.'.$phpEx),
	'U_FAQ' => append_sid('faq.'.$phpEx),
	'U_VIEWONLINE' => append_sid('viewonline.'.$phpEx),
	'U_LOGIN_LOGOUT' => append_sid($u_login_logout),
	'U_GROUP_CP' => append_sid('groupcp.'.$phpEx),

//-- mod : Contact Form --------------------------------------------------------
//-- add
	'U_CONTACT_FORM' => append_sid('contact.'.$phpEx),
//-- fin mod : Contact Form ----------------------------------------------------

//-- mod : admin link in header ------------------------------------------------
//-- add
	'U_ADMIN_LINK' => append_sid($u_admin_link),
//-- fin mod : admin link in header --------------------------------------------

	'U_BANLIST' => append_sid('banlist.'.$phpEx),

	'S_CONTENT_DIRECTION' => $lang['DIRECTION'],
	'S_CONTENT_ENCODING' => $lang['ENCODING'],
	'S_CONTENT_DIR_LEFT' => $lang['LEFT'],
	'S_CONTENT_DIR_RIGHT' => $lang['RIGHT'],
	'S_TIMEZONE' => sprintf($lang['All_times'], $l_timezone),
	'S_LOGIN_ACTION' => append_sid('login.'.$phpEx),

//-- mod : bbcode box reloaded -------------------------------------------------
//-- add
	'BBC_BOX_SHEET' => $images['bbc_box_sheet'],
//-- fin mod : bbcode box reloaded ---------------------------------------------

//-- mod : rank color system ---------------------------------------------------
//-- add
	'T_TEMPLATE_NAME' => $theme['template_name'],
//-- fin mod : rank color system -----------------------------------------------

	'T_HEAD_STYLESHEET' => $theme['head_stylesheet'],
	'T_BODY_BACKGROUND' => $theme['body_background'],
	'T_BODY_BGCOLOR' => '#'.$theme['body_bgcolor'],
	'T_BODY_TEXT' => '#'.$theme['body_text'],
	'T_BODY_LINK' => '#'.$theme['body_link'],
	'T_BODY_VLINK' => '#'.$theme['body_vlink'],
	'T_BODY_ALINK' => '#'.$theme['body_alink'],
	'T_BODY_HLINK' => '#'.$theme['body_hlink'],
	'T_TR_COLOR1' => '#'.$theme['tr_color1'],
	'T_TR_COLOR2' => '#'.$theme['tr_color2'],
	'T_TR_COLOR3' => '#'.$theme['tr_color3'],
	'T_TR_CLASS1' => $theme['tr_class1'],
	'T_TR_CLASS2' => $theme['tr_class2'],
	'T_TR_CLASS3' => $theme['tr_class3'],
	'T_TH_COLOR1' => '#'.$theme['th_color1'],
	'T_TH_COLOR2' => '#'.$theme['th_color2'],
	'T_TH_COLOR3' => '#'.$theme['th_color3'],
	'T_TH_CLASS1' => $theme['th_class1'],
	'T_TH_CLASS2' => $theme['th_class2'],
	'T_TH_CLASS3' => $theme['th_class3'],
	'T_TD_COLOR1' => '#'.$theme['td_color1'],
	'T_TD_COLOR2' => '#'.$theme['td_color2'],
	'T_TD_COLOR3' => '#'.$theme['td_color3'],
	'T_TD_CLASS1' => $theme['td_class1'],
	'T_TD_CLASS2' => $theme['td_class2'],
	'T_TD_CLASS3' => $theme['td_class3'],
	'T_FONTFACE1' => $theme['fontface1'],
	'T_FONTFACE2' => $theme['fontface2'],
	'T_FONTFACE3' => $theme['fontface3'],
	'T_FONTSIZE1' => $theme['fontsize1'],
	'T_FONTSIZE2' => $theme['fontsize2'],
	'T_FONTSIZE3' => $theme['fontsize3'],
	'T_FONTCOLOR1' => '#'.$theme['fontcolor1'],
	'T_FONTCOLOR2' => '#'.$theme['fontcolor2'],
	'T_FONTCOLOR3' => '#'.$theme['fontcolor3'],
	'T_SPAN_CLASS1' => $theme['span_class1'],
	'T_SPAN_CLASS2' => $theme['span_class2'],
	'T_SPAN_CLASS3' => $theme['span_class3'],

	'NAV_LINKS' => $nav_links_html)
);

//
// Login box?
//
if ( !$userdata['session_logged_in'] )
{
	$template->assign_block_vars('switch_user_logged_out', array());
	//
	// Allow autologin?
	//
	if (!isset($board_config['allow_autologin']) || $board_config['allow_autologin'] )
	{
		$template->assign_block_vars('switch_allow_autologin', array());
		$template->assign_block_vars('switch_user_logged_out.switch_allow_autologin', array());
	}
}
else
{
	$template->assign_block_vars('switch_user_logged_in', array());

	if ( !empty($userdata['user_popup_pm']) )
	{
		$template->assign_block_vars('switch_enable_pm_popup', array());
	}
}

//-- mod : Advanced Board Disable ----------------------------------------------------
//-- add
//
// Show board disabled note
//
if (defined('BOARD_DISABLE'))
{
	$disable_message = (!empty($board_config['board_disable_msg'])) ? htmlspecialchars($board_config['board_disable_msg']) : $lang['Board_disable'];
	$template->assign_block_vars('board_disable', array(
		'MSG' => str_replace("\n", '<br />', $disable_message))
	);
}
//-- fin mod : Advanced Board Disable ------------------------------------------------

//START MOD Keep_unread_2
if($new_unreads) $template->assign_block_vars('switch_exists_unread_posts', array() );
else $template->assign_block_vars('switch_no_unread_posts', array() );
//END MOD Keep_unread_2
// Add no-cache control for cookies if they are set
//$c_no_cache = (isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_sid']) || isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_data'])) ? 'no-cache="set-cookie", ' : '';

// Work around for "current" Apache 2 + PHP module which seems to not
// cope with private cache control setting
if (!empty($HTTP_SERVER_VARS['SERVER_SOFTWARE']) && strstr($HTTP_SERVER_VARS['SERVER_SOFTWARE'], 'Apache/2'))
{
	header ('Cache-Control: no-cache, pre-check=0, post-check=0');
}
else
{
	header ('Cache-Control: private, pre-check=0, post-check=0, max-age=0');
}
header ('Expires: 0');
header ('Pragma: no-cache');

$template->pparse('overall_header');

?>
