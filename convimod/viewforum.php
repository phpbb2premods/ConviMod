<?php
//-- mod : Announce background color ---------------------------------------------------------------
/***************************************************************************
 *                               viewforum.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: viewforum.php,v 1.139.2.13 2006/12/16 13:11:25 acydburn Exp $
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

define('IN_PHPBB', true);
$phpbb_root_path = './';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//-- mod : quick title edition -------------------------------------------------
//-- add
include($get->url('includes/class_attributes'));
//-- fin mod : quick title edition ---------------------------------------------

//
// Start initial var setup
//
if ( isset($HTTP_GET_VARS[POST_FORUM_URL]) || isset($HTTP_POST_VARS[POST_FORUM_URL]) )
{
	$forum_id = ( isset($HTTP_GET_VARS[POST_FORUM_URL]) ) ? intval($HTTP_GET_VARS[POST_FORUM_URL]) : intval($HTTP_POST_VARS[POST_FORUM_URL]);
}
else if ( isset($HTTP_GET_VARS['forum']))
{
	$forum_id = intval($HTTP_GET_VARS['forum']);
}
else
{
	$forum_id = '';
}

$start = ( isset($HTTP_GET_VARS['start']) ) ? intval($HTTP_GET_VARS['start']) : 0;
$start = ($start < 0) ? 0 : $start;

if ( isset($HTTP_GET_VARS['mark']) || isset($HTTP_POST_VARS['mark']) )
{
	$mark_read = (isset($HTTP_POST_VARS['mark'])) ? $HTTP_POST_VARS['mark'] : $HTTP_GET_VARS['mark'];
}
else
{
	$mark_read = '';
}
//
// End initial var setup
//

//
// Check if the user has actually sent a forum ID with his/her request
// If not give them a nice error page.
//
if ( !empty($forum_id) )
{
	$sql = "SELECT *
		FROM " . FORUMS_TABLE . "
		WHERE forum_id = $forum_id";
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not obtain forums information', '', __LINE__, __FILE__, $sql);
	}
}
else
{
	message_die(GENERAL_MESSAGE, 'Forum_not_exist');
}

//
// If the query doesn't return any rows this isn't a valid forum. Inform
// the user.
//
if ( !($forum_row = $db->sql_fetchrow($result)) )
{
	message_die(GENERAL_MESSAGE, 'Forum_not_exist');
}

//
// Start session management
//
$userdata = session_pagestart($user_ip, $forum_id);
init_userprefs($userdata);
//
// End session management
//

//START MOD Keep_unread_2 * set $toggle_unreads_link so that later on the script knows wheter to run the extra queries to toggle view unread link text depending on whether or not there are unread posts 
$toggle_unreads_link = true;
//END MOD Keep_unread

//
// Start auth check
//
$is_auth = array();
$is_auth = auth(AUTH_ALL, $forum_id, $userdata, $forum_row);

if ( !$is_auth['auth_read'] || !$is_auth['auth_view'] )
{
	if ( !$userdata['session_logged_in'] )
	{
		$redirect = POST_FORUM_URL . "=$forum_id" . ( ( isset($start) ) ? "&start=$start" : '' );
		redirect(append_sid("login.$phpEx?redirect=viewforum.$phpEx&$redirect", true));
	}
	//
	// The user is not authed to read this forum ...
	//
	$message = ( !$is_auth['auth_view'] ) ? $lang['Forum_not_exist'] : sprintf($lang['Sorry_auth_read'], $is_auth['auth_read_type']);

	message_die(GENERAL_MESSAGE, $message);
}
//
// End of auth check
//

if ( $mark_read == 'topics' )
{
	// Begin Simple Subforums MOD
	$mark_list = ( isset($HTTP_GET_VARS['mark_list']) ) ? explode(',', $HTTP_GET_VARS['mark_list']) : array($forum_id);
	$old_forum_id = $forum_id;
	// End Simple Subforums MOD
	//START MOD Keep_unread_2
	//
	//Mark this forum as read
	$board_config['tracking_forums'][$forum_id] = time(); //right now
	$list_topics = implode(',', array_keys($board_config['tracking_unreads'])); //all tracking topic_id's
	if ($list_topics)
	{ //Get all the topics that are in this forum
		$sql = "SELECT topic_id
			FROM " . TOPICS_TABLE . "
			WHERE topic_id IN ($list_topics)
			AND forum_id = $forum_id AND topic_moved_id = 0";
		if ( !$result = $db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, 'Could not access topics', '', __LINE__, __FILE__, $sql);
		}
		while ( $row = $db->sql_fetchrow($result) ) //Clean them
		{
			$id = $row['topic_id'];
			if ( isset($board_config['tracking_unreads'][$id]) )	unset($board_config['tracking_unreads'][$id]);
		}
	}
	write_cookies($userdata); //Save
	//END MOD Keep_unread_2

	//Message
	// Begin Simple Subforums MOD
		if( $set_cookie )
		{
			setcookie($board_config['cookie_name'] . '_f', serialize($tracking_forums), 0, $board_config['cookie_path'], $board_config['cookie_domain'], $board_config['cookie_secure']);
		}
		$forum_id = $old_forum_id;
		// End Simple Subforums MOD
	$template->assign_vars(array(
		'META' => '<meta http-equiv="refresh" content="3;url=' . append_sid("index.$phpEx") . '">')
		);
	$message = $lang['Topics_marked_read'] . '<br /><br />' . sprintf($lang['Click_return_forum'], '<a href="' . append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id") . '">', '</a> ');
	$message .= '<br /><br />' . sprintf($lang['Click_return_index'], '<a href="' . append_sid("index.$phpEx") . '">', '</a> ');
	message_die(GENERAL_MESSAGE, $message);
}
//
// End handle marking posts
//

//START MOD Keep_unread_2
//$tracking_topics = ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_t']) ) ? unserialize($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_t']) : '';
//$tracking_forums = ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f']) ) ? unserialize($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f']) : '';
//END MOD Keep_unread_2

//
// Do the forum Prune
//
if ( $is_auth['auth_mod'] && $board_config['prune_enable'] )
{
	if ( $forum_row['prune_next'] < time() && $forum_row['prune_enable'] )
	{
		include($phpbb_root_path . 'includes/prune.'.$phpEx);
		require($phpbb_root_path . 'includes/functions_admin.'.$phpEx);
		auto_prune($forum_id);
	}
}
//
// End of forum prune
//

//
// Obtain list of moderators of each forum
// First users, then groups ... broken into two queries
//
$sql = "SELECT u.user_id, u.username 
	FROM " . AUTH_ACCESS_TABLE . " aa, " . USER_GROUP_TABLE . " ug, " . GROUPS_TABLE . " g, " . USERS_TABLE . " u
	WHERE aa.forum_id = $forum_id 
		AND aa.auth_mod = " . TRUE . " 
		AND g.group_single_user = 1
		AND ug.group_id = aa.group_id 
		AND g.group_id = aa.group_id 
		AND u.user_id = ug.user_id 
	GROUP BY u.user_id, u.username  
	ORDER BY u.user_id";
//-- mod : rank color system ---------------------------------------------------
//-- add
$sql = str_replace('SELECT ', 'SELECT u.user_level, u.user_color, u.user_group_id, ', $sql);
//-- fin mod : rank color system -----------------------------------------------
if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not query forum moderator information', '', __LINE__, __FILE__, $sql);
}

$moderators = array();
while( $row = $db->sql_fetchrow($result) )
{
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
	$moderators[] = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '">' . $row['username'] . '</a>';
MOD-*/
//-- add
	$style_color = $rcs->get_colors($row);
	$moderators[] = '<a href="' . $get->url('userlist', array('mode' => 'viewprofile', POST_USERS_URL => $row['user_id']), true) . '"' . $style_color . '>' . $row['username'] . '</a>';
//-- fin mod : rank color system -----------------------------------------------
}

$sql = "SELECT g.group_id, g.group_name 
	FROM " . AUTH_ACCESS_TABLE . " aa, " . USER_GROUP_TABLE . " ug, " . GROUPS_TABLE . " g 
	WHERE aa.forum_id = $forum_id
		AND aa.auth_mod = " . TRUE . " 
		AND g.group_single_user = 0
		AND g.group_type <> ". GROUP_HIDDEN ."
		AND ug.group_id = aa.group_id 
		AND g.group_id = aa.group_id 
	GROUP BY g.group_id, g.group_name  
	ORDER BY g.group_id";
if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not query forum moderator information', '', __LINE__, __FILE__, $sql);
}

while( $row = $db->sql_fetchrow($result) )
{
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
	$moderators[] = '<a href="' . append_sid("groupcp.$phpEx?" . POST_GROUPS_URL . "=" . $row['group_id']) . '">' . $row['group_name'] . '</a>';
MOD-*/
//-- add
	$style_color = $rcs->get_group_class($row['group_id']);
	$moderators[] = '<a href="' . $get->url('groupcp', array(POST_GROUPS_URL => $row['group_id']), true) . '"' . $style_color . '>' . $row['group_name'] . '</a>';
//-- fin mod : rank color system -----------------------------------------------
}
	
$l_moderators = ( count($moderators) == 1 ) ? $lang['Moderator'] : $lang['Moderators'];
$forum_moderators = ( count($moderators) ) ? implode(', ', $moderators) : $lang['None'];
unset($moderators);

//
// Generate a 'Show topics in previous x days' select box. If the topicsdays var is sent
// then get it's value, find the number of topics with dates newer than it (to properly
// handle pagination) and alter the main query
//
$previous_days = array(0, 1, 7, 14, 30, 90, 180, 364);
$previous_days_text = array($lang['All_Topics'], $lang['1_Day'], $lang['7_Days'], $lang['2_Weeks'], $lang['1_Month'], $lang['3_Months'], $lang['6_Months'], $lang['1_Year']);

if ( !empty($HTTP_POST_VARS['topicdays']) || !empty($HTTP_GET_VARS['topicdays']) )
{
	$topic_days = ( !empty($HTTP_POST_VARS['topicdays']) ) ? intval($HTTP_POST_VARS['topicdays']) : intval($HTTP_GET_VARS['topicdays']);
	$min_topic_time = time() - ($topic_days * 86400);

	$sql = "SELECT COUNT(t.topic_id) AS forum_topics 
		FROM " . TOPICS_TABLE . " t, " . POSTS_TABLE . " p 
		WHERE t.forum_id = $forum_id 
			AND p.post_id = t.topic_last_post_id
			AND p.post_time >= $min_topic_time"; 

	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not obtain limited topics count information', '', __LINE__, __FILE__, $sql);
	}
	$row = $db->sql_fetchrow($result);

	$topics_count = ( $row['forum_topics'] ) ? $row['forum_topics'] : 1;
	$limit_topics_time = "AND p.post_time >= $min_topic_time";

	if ( !empty($HTTP_POST_VARS['topicdays']) )
	{
		$start = 0;
	}
}
else
{
	$topics_count = ( $forum_row['forum_topics'] ) ? $forum_row['forum_topics'] : 1;

	$limit_topics_time = '';
	$topic_days = 0;
}

$select_topic_days = '<select name="topicdays">';
for($i = 0; $i < count($previous_days); $i++)
{
	$selected = ($topic_days == $previous_days[$i]) ? ' selected="selected"' : '';
	$select_topic_days .= '<option value="' . $previous_days[$i] . '"' . $selected . '>' . $previous_days_text[$i] . '</option>';
}
$select_topic_days .= '</select>';


//
// All announcement data, this keeps announcements
// on each viewforum page ...
//
$sql = "SELECT t.*, u.username, u.user_id, u2.username as user2, u2.user_id as id2, p.post_time, p.post_username, f.forum_name, f.forum_id
	FROM " . TOPICS_TABLE . " t, " . USERS_TABLE . " u, " . POSTS_TABLE . " p, " . USERS_TABLE . " u2, " . FORUMS_TABLE . " f
	WHERE (t.forum_id = $forum_id OR t.topic_type = " . POST_GLOBAL_ANNOUNCE . ") 
		AND t.topic_poster = u.user_id
		AND p.post_id = t.topic_last_post_id
		AND p.poster_id = u2.user_id
		AND (t.topic_type = " . POST_ANNOUNCE . " OR t.topic_type = " . POST_GLOBAL_ANNOUNCE . ") 
		AND f.forum_id = t.forum_id 
	ORDER BY t.topic_type DESC, t.topic_last_post_id DESC";
//-- mod : rank color system ---------------------------------------------------
//-- add
$sql = str_replace(', u.user_id', ', u.user_id, u.user_level, u.user_color, u.user_group_id', $sql);
$sql = str_replace(', u2.user_id as id2', ', u2.user_id as id2, u2.user_level as level2, u2.user_color as color2, u2.user_group_id as group_id2', $sql);
//-- fin mod : rank color system -----------------------------------------------
if ( !($result = $db->sql_query($sql)) )
{
   message_die(GENERAL_ERROR, 'Could not obtain topic information', '', __LINE__, __FILE__, $sql);
}

$topic_rowset = array();
$total_announcements = 0;
while( $row = $db->sql_fetchrow($result) )
{
	$is_auth = auth(AUTH_READ, $row['forum_id'], $userdata, $forum_topic_data);

	if( $is_auth['auth_read'] )
	{
		$topic_rowset[] = $row;
		$total_announcements++;
	}
}

$db->sql_freeresult($result);

//
// Grab all the basic data (all topics except announcements)
// for this forum
//
$sql = "SELECT t.*, u.username, u.user_id, u2.username as user2, u2.user_id as id2, p.post_username, p2.post_username AS post_username2, p2.post_time 
	FROM " . TOPICS_TABLE . " t, " . USERS_TABLE . " u, " . POSTS_TABLE . " p, " . POSTS_TABLE . " p2, " . USERS_TABLE . " u2
	WHERE t.forum_id = $forum_id
		AND t.topic_poster = u.user_id
		AND p.post_id = t.topic_first_post_id
		AND p2.post_id = t.topic_last_post_id
		AND u2.user_id = p2.poster_id 
		AND t.topic_type <> " . POST_ANNOUNCE . "
		AND t.topic_type <> " . POST_GLOBAL_ANNOUNCE . "  
		$limit_topics_time
	ORDER BY t.topic_type DESC, t.topic_last_post_id DESC 
	LIMIT $start, ".$board_config['topics_per_page'];
//-- mod : rank color system ---------------------------------------------------
//-- add
$sql = str_replace(', u.user_id', ', u.user_id, u.user_level, u.user_color, u.user_group_id', $sql);
$sql = str_replace(', u2.user_id as id2', ', u2.user_id as id2, u2.user_level as level2, u2.user_color as color2, u2.user_group_id as group_id2', $sql);
//-- fin mod : rank color system -----------------------------------------------
if ( !($result = $db->sql_query($sql)) )
{
   message_die(GENERAL_ERROR, 'Could not obtain topic information', '', __LINE__, __FILE__, $sql);
}

$total_topics = 0;
while( $row = $db->sql_fetchrow($result) )
{
	$topic_rowset[] = $row;
	$total_topics++;
}

$db->sql_freeresult($result);

//
// Total topics ...
//
$total_topics += $total_announcements;

//
// Define censored word matches
//
$orig_word = array();
$replacement_word = array();
obtain_word_list($orig_word, $replacement_word);

//
// Post URL generation for templating vars
//
$template->assign_vars(array(
	'L_DISPLAY_TOPICS' => $lang['Display_topics'],

	'U_POST_NEW_TOPIC' => append_sid("posting.$phpEx?mode=newtopic&amp;" . POST_FORUM_URL . "=$forum_id"),

	'S_SELECT_TOPIC_DAYS' => $select_topic_days,
	'S_POST_DAYS_ACTION' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=" . $forum_id . "&amp;start=$start"))
);

//
// User authorisation levels output
//
$s_auth_can = ( ( $is_auth['auth_post'] ) ? $lang['Rules_post_can'] : $lang['Rules_post_cannot'] ) . '<br />';
$s_auth_can .= ( ( $is_auth['auth_reply'] ) ? $lang['Rules_reply_can'] : $lang['Rules_reply_cannot'] ) . '<br />';
$s_auth_can .= ( ( $is_auth['auth_edit'] ) ? $lang['Rules_edit_can'] : $lang['Rules_edit_cannot'] ) . '<br />';
$s_auth_can .= ( ( $is_auth['auth_delete'] ) ? $lang['Rules_delete_can'] : $lang['Rules_delete_cannot'] ) . '<br />';
$s_auth_can .= ( ( $is_auth['auth_vote'] ) ? $lang['Rules_vote_can'] : $lang['Rules_vote_cannot'] ) . '<br />';

attach_build_auth_levels($is_auth, $s_auth_can);

if ( $is_auth['auth_mod'] )
{
	$s_auth_can .= sprintf($lang['Rules_moderate'], "<a href=\"modcp.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;start=" . $start . "&amp;sid=" . $userdata['session_id'] . '">', '</a>');
}

//
// Mozilla navigation bar
//
$nav_links['up'] = array(
	'url' => append_sid('index.'.$phpEx),
	'title' => sprintf($lang['Forum_Index'], $board_config['sitename'])
);

//
// Dump out the page header and load viewforum template
//
define('SHOW_ONLINE', true);
//-- mod : lo-fi --------------------------------------------------------------
//-- delete
/*-MOD
$page_title = $lang['View_forum'] . ' - ' . $forum_row['forum_name'];
MOD-*/
//-- add
$page_title = $forum_row['forum_name'];
//-- fin mod : lo-fi -----------------------------------------------------------
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

//-- mod : rank color system ---------------------------------------------------
//-- add
	$rcs->display_legend();
	$newest_color = $rcs->get_colors($newest_userdata);
//-- fin mod : rank color system -----------------------------------------------

$template->set_filenames(array(
//-- mod : forum as category ---------------------------------------------------
//-- delete
/*-MOD
   'body' => 'viewforum_body.tpl')
MOD-*/
//-- add
   'body' => ( $forum_row['forum_as_category'] ) ? 'forum_as_category_body.tpl' : 'viewforum_body.tpl' )
//-- fin mod : forum as category -----------------------------------------------
);
// Begin Simple Subforums MOD
$all_forums = array();
make_jumpbox_ref('viewforum.'.$phpEx, $forum_id, $all_forums);
// End Simple Subforums MOD

$template->assign_vars(array(
	'FORUM_ID' => $forum_id,
	'FORUM_NAME' => $forum_row['forum_name'],
	'FORUM_ICON_IMG' => ($forum_row['forum_icon']) ? '<img src="' . $phpbb_root_path . $forum_row['forum_icon'] . '" alt="'.$forum_row['forum_name'].'" title="'.$forum_row['forum_name'].'" border="0" />&nbsp;' : '',	// Forum Icon Mod
	'MODERATORS' => $forum_moderators,
//-- mod : Advanced Users Viewing Forum --------------------------------------
//-- add
	'TOTAL_ONLINE' => $total_online_users,
//--fin mod : Advanced Users Viewing Forum -----------------------------------
	'POST_IMG' => ( $forum_row['forum_status'] == FORUM_LOCKED ) ? $images['post_locked'] : $images['post_new'],

	'FOLDER_IMG' => $images['folder'],
	'FOLDER_NEW_IMG' => $images['folder_new'],
	'FOLDER_HOT_IMG' => $images['folder_hot'],
	'FOLDER_HOT_NEW_IMG' => $images['folder_hot_new'],
	'FOLDER_LOCKED_IMG' => $images['folder_locked'],
	'FOLDER_LOCKED_NEW_IMG' => $images['folder_locked_new'],
	'FOLDER_STICKY_IMG' => $images['folder_sticky'],
	'FOLDER_STICKY_NEW_IMG' => $images['folder_sticky_new'],
	'FOLDER_ANNOUNCE_IMG' => $images['folder_announce'],
	'FOLDER_ANNOUNCE_NEW_IMG' => $images['folder_announce_new'],

	'FOLDER_GLOBAL_ANNOUNCE_IMG' => $images['folder_global_announce'],
	'FOLDER_GLOBAL_ANNOUNCE_NEW_IMG' => $images['folder_global_announce_new'],

	'L_TOPICS' => $lang['Topics'],
	'L_REPLIES' => $lang['Replies'],
	'L_VIEWS' => $lang['Views'],
	'L_POSTS' => $lang['Posts'],
	'L_LASTPOST' => $lang['Last_Post'], 
	'L_MODERATOR' => $l_moderators, 
	'L_MARK_TOPICS_READ' => $lang['Mark_all_topics'], 
	'L_POST_NEW_TOPIC' => ( $forum_row['forum_status'] == FORUM_LOCKED ) ? $lang['Forum_locked'] : $lang['Post_new_topic'], 
	'L_NO_NEW_POSTS' => $lang['No_new_posts'],
	'L_NEW_POSTS' => $lang['New_posts'],
	'L_NO_NEW_POSTS_LOCKED' => $lang['No_new_posts_locked'], 
	'L_NEW_POSTS_LOCKED' => $lang['New_posts_locked'], 
	'L_NO_NEW_POSTS_HOT' => $lang['No_new_posts_hot'],
	'L_NEW_POSTS_HOT' => $lang['New_posts_hot'],
	'L_GLOBAL_ANNOUNCEMENT' => $lang['Post_Global_Announcement'],
	'L_ANNOUNCEMENT' => $lang['Post_Announcement'], 
	'L_STICKY' => $lang['Post_Sticky'], 
	'L_POSTED' => $lang['Posted'],
	'L_JOINED' => $lang['Joined'],
	'L_AUTHOR' => $lang['Author'],

//-- mod : Advanced Users Viewing Forum ----------------------------------------------
//-- add
	'L_USERS_VIEWING_FORUM' => $lang['Users_viewing_forum'],
	'L_LEGEND' => $lang['Legend'],
//-- fin mod :  Advanced Users Viewing Forum -----------------------------------------

	'S_AUTH_LIST' => $s_auth_can, 

	'U_VIEW_FORUM' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL ."=$forum_id"),

	'U_MARK_READ' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;mark=topics"))
);
// Begin Simple Subforums MOD
if( $forum_row['forum_parent'] )
{
	$parent_id = $forum_row['forum_parent'];
	for( $i = 0; $i < count($all_forums); $i++ )
	{
		if( $all_forums[$i]['forum_id'] == $parent_id )
		{
			$template->assign_vars(array(
				'PARENT_FORUM'			=> 1,
				'U_VIEW_PARENT_FORUM'	=> append_sid("viewforum.$phpEx?" . POST_FORUM_URL .'=' . $all_forums[$i]['forum_id']),
				'PARENT_FORUM_NAME'		=> $all_forums[$i]['forum_name'],
				));
		}
	}
}
else
{
	$sub_list = array();
	for( $i = 0; $i < count($all_forums); $i++ )
	{
		if( $all_forums[$i]['forum_parent'] == $forum_id )
		{
			$sub_list[] = $all_forums[$i]['forum_id'];
		}
	}
	if( count($sub_list) )
	{
		$sub_list[] = $forum_id;
		$template->vars['U_MARK_READ'] .= '&amp;mark_list=' . implode(',', $sub_list);
	}
}
// assign additional variables for subforums mod
$template->assign_vars(array(
	'NUM_TOPICS' => $forum_row['forum_topics'],
	'CAN_POST' => $is_auth['auth_post'] ? 1 : 0,
	'L_FORUM' => $lang['Forum'],
	));

// End Simple Subforums MOD
//
// End header
//

//
// Okay, lets dump out the page ...
//
if( $total_topics )
{
// crewstyle's mod : Simple Split Topic Type
	$sujet = 1;
	$sticky = 1;
	$annonce = 1;
	$annonce_globale = 1;
// crewstyle's mod : Simple Split Topic Type
	for($i = 0; $i < $total_topics; $i++)
	{
		$topic_id = $topic_rowset[$i]['topic_id'];

		$topic_title = ( count($orig_word) ) ? preg_replace($orig_word, $replacement_word, $topic_rowset[$i]['topic_title']) : $topic_rowset[$i]['topic_title'];

//-- mod : post description ----------------------------------------------------
//-- add
		$topic_sub_title = !empty($topic_rowset[$i]['topic_sub_title']) ? ( count($orig_word) ? preg_replace($orig_word, $replacement_word, $topic_rowset[$i]['topic_sub_title']) : $topic_rowset[$i]['topic_sub_title'] ) : '';
//-- fin mod : post description ------------------------------------------------

//-- mod : quick title edition -------------------------------------------------
//-- add
		$qte->attr($topic_title, $topic_rowset[$i]['topic_attribute']);
//-- fin mod : quick title edition ---------------------------------------------

		$replies = $topic_rowset[$i]['topic_replies'];

		$topic_type = $topic_rowset[$i]['topic_type'];

		$global_link = '';
		if( $topic_type == POST_GLOBAL_ANNOUNCE )
		{
//-- mod : convimod ------------------------------------------------
//-- delete
/*-MOD
			$topic_type = $lang['Topic_Global_Announcement'] . ' ';
MOD-*/
//-- add
			$topic_type = '<img src="' . $images['Topic_Global_Announcement'] . '" border="0" alt="' . $lang['Topic_Global_Announcement_img'] . '" title="' . $lang['Topic_Global_Announcement_img'] . '" />' . ' ';
//-- fin mod : convimod --------------------------------------------
			$announce_color_topic_type1 = 'col1_global_announce';
			$announce_color_topic_type2 = 'col2_global_announce';
			$announce_color_topic_type3 = 'col3_global_announce';

			if( $topic_rowset[$i]['forum_id'] != $forum_id )
			{
				$global_link = '[ <a href="' . append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=" . $topic_rowset[$i]['forum_id']) . '">' . $topic_rowset[$i]['forum_name'] . '</a> ]';
				$topics_count++;
			}
		}
		else if( $topic_type == POST_ANNOUNCE )
		{
//-- mod : convimod ------------------------------------------------
//-- delete
/*-MOD
			$topic_type = $lang['Topic_Announcement'] . ' ';
MOD-*/
			$topic_type = '<img src="' . $images['Topic_Announcement'] . '" border="0" alt="' . $lang['Topic_Announcement_img'] . '" title="' . $lang['Topic_Announcement_img'] . '" />' . ' ';
//-- fin mod : convimod --------------------------------------------
			$announce_color_topic_type1 = 'col1_announce';
			$announce_color_topic_type2 = 'col2_announce';
			$announce_color_topic_type3 = 'col3_announce';
		}
		else if( $topic_type == POST_STICKY )
		{
//-- mod : convimod ------------------------------------------------
//-- delete
/*-MOD
			$topic_type = $lang['Topic_Sticky'] . ' ';
MOD-*/
			$topic_type = '<img src="' . $images['Topic_Sticky'] . '" border="0" alt="' . $lang['Topic_Sticky_img'] . '" title="' . $lang['Topic_Sticky_img'] . '" />' . ' ';
//-- fin mod : convimod --------------------------------------------
			$announce_color_topic_type1 = 'col1_sticky';
			$announce_color_topic_type2 = 'col2_sticky';
			$announce_color_topic_type3 = 'col3_sticky';
		}
		else
		{
			$topic_type = '';
			$announce_color_topic_type1 = 'row1';
			$announce_color_topic_type2 = 'row2';
			$announce_color_topic_type3 = 'row3';		
		}

		if( $topic_rowset[$i]['topic_vote'] )
		{
//-- mod : topic poll indicator ------------------------------------------------
//-- delete
/*-MOD
			$topic_type .= $lang['Topic_Poll'] . ' ';
MOD-*/
//-- add
			$topic_type .= '<img src="' . $images['Topic_Poll'] . '" border="0" alt="' . $lang['Topic_Poll'] . '" title="' . $lang['Topic_Poll'] . '" />' . ' ';
//-- fin mod : topic poll indicator --------------------------------------------
		}
		
		if( $topic_rowset[$i]['topic_status'] == TOPIC_MOVED )
		{
//-- mod : convimod ------------------------------------------------
//-- delete
/*-MOD
			$topic_type = $lang['Topic_Moved'] . ' ';
MOD-*/
			$topic_type = '<img src="' . $images['Topic_Moved'] . '" border="0" alt="' . $lang['Topic_Moved_img'] . '" title="' . $lang['Topic_Moved_img'] . '" />' . ' ';
//-- fin mod : convimod --------------------------------------------
			$topic_id = $topic_rowset[$i]['topic_moved_id'];

			$folder_image =  $images['folder'];
			$folder_alt = $lang['Topics_Moved'];
			$newest_post_img = '';
		}
		else
		{
			if( $topic_rowset[$i]['topic_type'] == POST_GLOBAL_ANNOUNCE )
			{
				$folder = $images['folder_global_announce'];
				$folder_new = $images['folder_global_announce_new'];
			}
			else if( $topic_rowset[$i]['topic_type'] == POST_ANNOUNCE )
			{
				$folder = $images['folder_announce'];
				$folder_new = $images['folder_announce_new'];
			}
			else if( $topic_rowset[$i]['topic_type'] == POST_STICKY )
			{
				$folder = $images['folder_sticky'];
				$folder_new = $images['folder_sticky_new'];
			}
			else if( $topic_rowset[$i]['topic_status'] == TOPIC_LOCKED )
			{
				$folder = $images['folder_locked'];
				$folder_new = $images['folder_locked_new'];
//-- mod : Strike out topic title on lock ---------------------------------------------
//-- add
				$topic_title = "<strike>" . $topic_title . "</strike>";
//-- fin mod : Strike out topic title on lock -----------------------------------------
			}
			else
			{
				if($replies >= $board_config['hot_threshold'])
				{
					$folder = $images['folder_hot'];
					$folder_new = $images['folder_hot_new'];
				}
				else
				{
					$folder = $images['folder'];
					$folder_new = $images['folder_new'];
				}
			}

			//START MOD Keep_unread_2
			if( $topic_rowset[$i]['post_time'] > topic_last_read($forum_id, $topic_id) )
			{
				$folder_image = $folder_new;
				$folder_alt = $lang['New_posts'];
				$newest_post_img = '<a href="' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id&amp;view=newest") . '"><img src="' . $images['icon_newest_reply'] . '" alt="' . $lang['View_newest_post'] . '" title="' . $lang['View_newest_post'] . '" border="0" /></a> ';
			}
			else
			{
				$folder_image = $folder;
				$folder_alt = ( $topic_rowset[$i]['topic_status'] == TOPIC_LOCKED ) ? $lang['Topic_locked'] : $lang['No_new_posts'];
				$newest_post_img = '';
			}
			//END MOD Keep_unread_2
		}

		if( ( $replies + 1 ) > $board_config['posts_per_page'] )
		{
			$total_pages = ceil( ( $replies + 1 ) / $board_config['posts_per_page'] );
			$goto_page = ' [ <img src="' . $images['icon_gotopost'] . '" alt="' . $lang['Goto_page'] . '" title="' . $lang['Goto_page'] . '" />' . $lang['Goto_page'] . ': ';

			$times = 1;
			for($j = 0; $j < $replies + 1; $j += $board_config['posts_per_page'])
			{
				$goto_page .= '<a href="' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=" . $topic_id . "&amp;start=$j") . '">' . $times . '</a>';
				if( $times == 1 && $total_pages > 4 )
				{
					$goto_page .= ' ... ';
					$times = $total_pages - 3;
					$j += ( $total_pages - 4 ) * $board_config['posts_per_page'];
				}
				else if ( $times < $total_pages )
				{
					$goto_page .= ', ';
				}
				$times++;
			}
			$goto_page .= ' ] ';
		}
		else
		{
			$goto_page = '';
		}
		
		$view_topic_url = append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . "=$topic_id");

//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
		$topic_author = ( $topic_rowset[$i]['user_id'] != ANONYMOUS ) ? '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '=' . $topic_rowset[$i]['user_id']) . '">' : '';
MOD-*/
//-- add
		$topic_author_color = $rcs->get_colors($topic_rowset[$i]);
		$topic_author = ($topic_rowset[$i]['user_id'] != ANONYMOUS) ? '<a href="' . $get->url('userlist', array('mode' => 'viewprofile', POST_USERS_URL => $topic_rowset[$i]['user_id']), true) . '"' . $topic_author_color . '>' : '';
//-- fin mod : rank color system -----------------------------------------------
		$topic_author .= ( $topic_rowset[$i]['user_id'] != ANONYMOUS ) ? $topic_rowset[$i]['username'] : ( ( $topic_rowset[$i]['post_username'] != '' ) ? $topic_rowset[$i]['post_username'] : $lang['Guest'] );

		$topic_author .= ( $topic_rowset[$i]['user_id'] != ANONYMOUS ) ? '</a>' : '';

		$first_post_time = create_date($board_config['default_dateformat'], $topic_rowset[$i]['topic_time'], $board_config['board_timezone']);

		$last_post_time = create_date($board_config['default_dateformat'], $topic_rowset[$i]['post_time'], $board_config['board_timezone']);

//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
		$last_post_author = ( $topic_rowset[$i]['id2'] == ANONYMOUS ) ? ( ($topic_rowset[$i]['post_username2'] != '' ) ? $topic_rowset[$i]['post_username2'] . ' ' : $lang['Guest'] . ' ' ) : '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '='  . $topic_rowset[$i]['id2']) . '">' . $topic_rowset[$i]['user2'] . '</a>';
MOD-*/
//-- add
		$last_post_author_color = $rcs->get_colors($topic_rowset[$i], '', false, 'group_id2', 'color2', 'level2');
		$last_post_author = ($topic_rowset[$i]['id2'] == ANONYMOUS) ? (($topic_rowset[$i]['post_username2'] != '') ? $topic_rowset[$i]['post_username2'] : $lang['Guest']) : '<a href="' . $get->url('userlist', array('mode' => 'viewprofile', POST_USERS_URL => $topic_rowset[$i]['id2']), true) . '"' . $last_post_author_color . '>' . $topic_rowset[$i]['user2'] . '</a>';
//-- fin mod : rank color system -----------------------------------------------

		$last_post_url = '<a href="' . append_sid("viewtopic.$phpEx?"  . POST_POST_URL . '=' . $topic_rowset[$i]['topic_last_post_id']) . '#' . $topic_rowset[$i]['topic_last_post_id'] . '"><img src="' . $images['icon_latest_reply'] . '" alt="' . $lang['View_latest_post'] . '" title="' . $lang['View_latest_post'] . '" border="0" /></a>';

		$views = $topic_rowset[$i]['topic_views'];
		
		$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
		$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

		$template->assign_block_vars('topicrow', array(
			'ROW_COLOR' => $row_color,
			'ROW_CLASS' => $row_class,
			'FORUM_ID' => $forum_id,
			'TOPIC_ID' => $topic_id,
			'TOPIC_FOLDER_IMG' => $folder_image, 
			'TOPIC_AUTHOR' => $topic_author, 
			'GOTO_PAGE' => $goto_page,
			'GLOBAL_LINK' => $global_link,
			'REPLIES' => $replies,
//-- mod : Who Posted ------------------------------------------------------------
//-- add
			'U_WHO_POSTED' => append_sid( "posting.$phpEx?mode=who_posted&" . POST_TOPIC_URL . "=$topic_id" ),
//-- fin mod : Who Posted --------------------------------------------------------
			'NEWEST_POST_IMG' => $newest_post_img,
			'TOPIC_ATTACHMENT_IMG' => topic_attachment_image($topic_rowset[$i]['topic_attachment']), 
			'TOPIC_TITLE' => $topic_title,
			'TOPIC_TYPE' => $topic_type,
			'announce_color_topic_type1' => $announce_color_topic_type1,
			'announce_color_topic_type2' => $announce_color_topic_type2,
			'announce_color_topic_type3' => $announce_color_topic_type3,
			'VIEWS' => $views,
			'FIRST_POST_TIME' => $first_post_time, 
			'LAST_POST_TIME' => $last_post_time, 
			'LAST_POST_AUTHOR' => $last_post_author, 
			'LAST_POST_IMG' => $last_post_url, 

			'L_TOPIC_FOLDER_ALT' => $folder_alt, 

			'U_VIEW_TOPIC' => $view_topic_url)
		);
//-- mod : post description ----------------------------------------------------
//-- add
		display_sub_title('topicrow', $topic_sub_title, $board_config['sub_title_length']);
//-- fin mod : post description ------------------------------------------------
// crewstyle's mod : Simple Split Topic Type
		if( $board_config['simple_split_topic_type'] )
		{
			$split_type = '';
			if( ($annonce_globale==1) || ($annonce==1) || ($sticky==1) || ($sujet==1) )
			{
				if( ($topic_rowset[$i]['topic_type']==POST_GLOBAL_ANNOUNCE) && ($annonce_globale==1) )
				{
					$split_type = $lang['Topic_Global_Announcement'];
					$annonce_globale=0;
				}
				else if( ($topic_rowset[$i]['topic_type']==POST_ANNOUNCE) && ($annonce==1) )
				{
					$split_type = $lang['Topic_Announcement'];
					$annonce=0;
				}
				else if( ($topic_rowset[$i]['topic_type']==POST_STICKY) && ($sticky==1) )
				{
					$split_type = $lang['Topic_Sticky'];
					$sticky=0;
				}
				else if( ($topic_rowset[$i]['topic_type']==POST_NORMAL) && ($sujet==1) )
				{
					$split_type = '<b>' . $lang['Topics'] . ' :</b>';
					$sujet=0;
				}
			}

			if( $split_type!='' )
			{
				$template->assign_block_vars('topicrow.switch_post', array(
					'SPLIT_TYPE' => $split_type
				));
			}
		}
// crewstyle's mod : Simple Split Topic Type
	}

	$topics_count -= $total_announcements;

	$template->assign_vars(array(
		'PAGINATION' => generate_pagination("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id&amp;topicdays=$topic_days", $topics_count, $board_config['topics_per_page'], $start),
		'PAGE_NUMBER' => sprintf($lang['Page_of'], ( floor( $start / $board_config['topics_per_page'] ) + 1 ), ceil( $topics_count / $board_config['topics_per_page'] )), 

		'L_GOTO_PAGE' => $lang['Goto_page'])
	);
}
else
{
	//
	// No topics
	//
	$no_topics_msg = ( $forum_row['forum_status'] == FORUM_LOCKED ) ? $lang['Forum_locked'] : $lang['No_topics_post_one'];
	$template->assign_vars(array(
		'L_NO_TOPICS' => $no_topics_msg)
	);

	$template->assign_block_vars('switch_no_topics', array() );

}

// Begin Simple Subforums MOD
switch(SQL_LAYER)
{
	default:
//-- mod : Last post topic on index mod -------------------------------------------------
//-- delete
/*-MOD
		$sql = "SELECT f.*, p.post_time, p.post_username, u.username, u.user_id
			FROM (( " . FORUMS_TABLE . " f
			LEFT JOIN " . POSTS_TABLE . " p ON p.post_id = f.forum_last_post_id )
			LEFT JOIN " . USERS_TABLE . " u ON u.user_id = p.poster_id )
			WHERE f.forum_parent = '{$forum_id}'
			ORDER BY f.cat_id, f.forum_order";
MOD-*/
//-- add
		$sql = 'SELECT f.*, p.post_time, p.post_username, u.username, u.user_id, t.topic_title, t.topic_id 
			FROM ((( ' . FORUMS_TABLE . ' f
			LEFT JOIN ' . POSTS_TABLE . ' p ON p.post_id = f.forum_last_post_id )
			LEFT JOIN ' . TOPICS_TABLE . ' t ON t.topic_id = p.topic_id )  
			LEFT JOIN ' . USERS_TABLE . " u ON u.user_id = p.poster_id )
			WHERE f.forum_parent = '{$forum_id}'
			ORDER BY f.cat_id, f.forum_order";
//-- fin mod : Last post topic on index mod ---------------------------------------------
		break;
}
//-- mod : rank color system ---------------------------------------------------
//-- add
$sql = str_replace(', u.user_id', ', u.user_id, u.user_level, u.user_color, u.user_group_id', $sql);
//-- fin mod : rank color system -----------------------------------------------
if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not query subforums information', '', __LINE__, __FILE__, $sql);
}

$subforum_data = array();
while( $row = $db->sql_fetchrow($result) )
{
	$subforum_data[] = $row;
}
$db->sql_freeresult($result);

if ( ($total_forums = count($subforum_data)) > 0 )
{
	//
	// Find which forums are visible for this user
	//
	$is_auth_ary = array();
	$is_auth_ary = auth(AUTH_VIEW, AUTH_LIST_ALL, $userdata, $subforum_data);

	$display_forums = false;
	for( $j = 0; $j < $total_forums; $j++ )
	{
		if ( $is_auth_ary[$subforum_data[$j]['forum_id']]['auth_view'] )
		{
			$display_forums = true;
		}
	}
	
	if( !$display_forums )
	{
		$total_forums = 0;
	}
}

if( $total_forums )
{
	$template->assign_var('HAS_SUBFORUMS', 1);
	$template->assign_block_vars('catrow', array(
		'CAT_ID'	=> $forum_id,
		'CAT_DESC'	=> $forum_row['forum_name'],
		'U_VIEWCAT' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL ."=$forum_id"),
		));

	 //MOD Keep_unread_2 * Get new_unreads list and forum_unread flags, save cookies etc. 
   $new_unreads = list_new_unreads($forum_unreads); 
	//
	// Obtain list of moderators of each forum
	// First users, then groups ... broken into two queries
	//
	$subforum_moderators = array();
	$sql = "SELECT aa.forum_id, u.user_id, u.username 
		FROM " . AUTH_ACCESS_TABLE . " aa, " . USER_GROUP_TABLE . " ug, " . GROUPS_TABLE . " g, " . USERS_TABLE . " u
		WHERE aa.auth_mod = " . TRUE . " 
			AND g.group_single_user = 1 
			AND ug.group_id = aa.group_id 
			AND g.group_id = aa.group_id 
			AND u.user_id = ug.user_id 
		GROUP BY u.user_id, u.username, aa.forum_id 
		ORDER BY aa.forum_id, u.user_id";
//-- mod : rank color system ---------------------------------------------------
//-- add
	$sql = str_replace(', u.user_id', ', u.user_id, u.user_level, u.user_color, u.user_group_id', $sql);
//-- fin mod : rank color system -----------------------------------------------
	if ( !($result = $db->sql_query($sql, false, true)) )
	{
		message_die(GENERAL_ERROR, 'Could not query forum moderator information', '', __LINE__, __FILE__, $sql);
	}

	while( $row = $db->sql_fetchrow($result) )
	{
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
		$subforum_moderators[$row['forum_id']][] = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '">' . $row['username'] . '</a>';
MOD-*/
//-- add
		$style_color = $rcs->get_colors($row);
		$subforum_moderators[$row['forum_id']][] = '<a href="' . append_sid('profile.' . $phpEx . '?mode=viewprofile&amp;' . POST_USERS_URL . '=' . $row['user_id']) . '" alt="' . $lang['Read_profile'] . '" title="' . $lang['Read_profile'] . '" ' . $style_color . '>' . $row['username'] . '</a>';
//-- fin mod : rank color system -----------------------------------------------
	}
	$db->sql_freeresult($result);
	
	$sql = "SELECT aa.forum_id, g.group_id, g.group_name 
		FROM " . AUTH_ACCESS_TABLE . " aa, " . USER_GROUP_TABLE . " ug, " . GROUPS_TABLE . " g 
		WHERE aa.auth_mod = " . TRUE . " 
			AND g.group_single_user = 0 
			AND g.group_type <> " . GROUP_HIDDEN . "
			AND ug.group_id = aa.group_id 
			AND g.group_id = aa.group_id 
		GROUP BY g.group_id, g.group_name, aa.forum_id 
		ORDER BY aa.forum_id, g.group_id";
	if ( !($result = $db->sql_query($sql, false, true)) )
	{
		message_die(GENERAL_ERROR, 'Could not query forum moderator information', '', __LINE__, __FILE__, $sql);
	}

	while( $row = $db->sql_fetchrow($result) )
	{
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
		$subforum_moderators[$row['forum_id']][] = '<a href="' . append_sid("groupcp.$phpEx?" . POST_GROUPS_URL . "=" . $row['group_id']) . '">' . 	$row['group_name'] . '</a>';
MOD-*/
//-- add
		$style_color = $rcs->get_group_class($row['group_id']);
		$subforum_moderators[$row['forum_id']][] = '<a href="' . append_sid('groupcp.' . $phpEx . '?' . POST_GROUPS_URL . '=' . $row['group_id']) . '"' . $style_color . '>' . $row['group_name'] . '</a>';
//-- fin mod : rank color system -----------------------------------------------
	}
	$db->sql_freeresult($result);

	// show subforums
	for( $j = 0; $j < $total_forums; $j++ )
	{
		$subforum_id = $subforum_data[$j]['forum_id'];

		if ( $is_auth_ary[$subforum_id]['auth_view'] )
		{
			$unread_topics = false;
			if ( $subforum_data[$j]['forum_status'] == FORUM_LOCKED )
			{
				$folder_image = $images['forum_locked']; 
				$folder_alt = $lang['Forum_locked'];
			}
			else 
         { 
                     //MOD Keep_Unread_2 * Forum_unread flags set earlier 
                     $unread_topics = $forum_unreads[$subforum_id]; 
//-- mod : forumtitle as weblink -----------------------------------------------
//-- delete
/*-MOD
				$folder_image = ( $unread_topics ) ? $images['forum_new'] : $images['forum'];
				$folder_alt = ( $unread_topics ) ? $lang['New_posts'] : $lang['No_new_posts'];
MOD-*/
//-- add
				if( $subforum_data[$j]['title_is_link'] )
				{
					$folder_alt = $lang['Forum_is_a_link'];
					$folder_image = $images['forum_link'];
				}
				else if( $unread_topics )
				{
					$folder_alt = $lang['New_posts'];
					$folder_image = $images['forum_new'];
				}
				else
				{
					$folder_alt = $lang['No_new_posts'];
					$folder_image = $images['forum'];
				}
//-- fin mod : forumtitle as weblink -------------------------------------------
         } 

			$posts = $subforum_data[$j]['forum_posts'];
			$topics = $subforum_data[$j]['forum_topics'];
			$icon = $subforum_data[$j]['forum_icon'];	// Forum Icon Mod

			if ( $subforum_data[$j]['forum_last_post_id'] )
			{
//-- mod : Last post topic on index mod -------------------------------------------------
//-- add
				if (strlen($forum_data[$j]['topic_title']) > $board_config['last_topic_title_length'])
				{
					$last_post = '<a href="' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . '=' . $subforum_data[$j]['topic_id']) . '" title="' . $subforum_data[$j]['topic_title'] . '">' . substr($subforum_data[$j]['topic_title'], 0, $board_config['last_topic_title_length']) . '...</a><br />';
				}
				else
				{ 
					$last_post = '<a href="' . append_sid("viewtopic.$phpEx?" . POST_TOPIC_URL . '=' . $subforum_data[$j]['topic_id']) . '" title="' . $subforum_data[$j]['topic_title'] . '">' . $subforum_data[$j]['topic_title'] . '</a><br />';
				}
//-- fin mod : Last post topic on index mod ---------------------------------------------

				$last_post_time = create_date($board_config['default_dateformat'], $subforum_data[$j]['post_time'], $board_config['board_timezone']);

//-- mod : Last post topic on index mod -------------------------------------------------
//-- delete
/*-MOD
				$last_post = $last_post_time . '<br />';
MOD-*/
//-- add
				$last_post .= '<span class="date-general">' . $last_post_time . '</span><br />';
//-- fin mod : Last post topic on index mod ---------------------------------------------

//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
				$last_post .= ( $subforum_data[$j]['user_id'] == ANONYMOUS ) ? ( ($subforum_data[$j]['post_username'] != '' ) ? $subforum_data[$j]['post_username'] . ' ' : $lang['Guest'] . ' ' ) : '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '='  . $subforum_data[$j]['user_id']) . '">' . $subforum_data[$j]['username'] . '</a> ';
MOD-*/
//-- add
				$style_color = $rcs->get_colors($subforum_data[$j]);
				$last_post .= ($subforum_data[$j]['user_id'] == ANONYMOUS) ? ((($subforum_data[$j]['post_username'] != '') ? $subforum_data[$j]['post_username'] : $lang['Guest']) . '&nbsp;') : '<a href="' . append_sid('profile.' . $phpEx . '?mode=viewprofile&amp;' . POST_USERS_URL . '='  . $subforum_data[$j]['user_id']) . '"' . $style_color . '>' . $subforum_data[$j]['username'] . '</a>&nbsp;';
//-- fin mod : rank color system -----------------------------------------------
								
				$last_post .= '<a href="' . append_sid("viewtopic.$phpEx?"  . POST_POST_URL . '=' . $subforum_data[$j]['forum_last_post_id']) . '#' . $subforum_data[$j]['forum_last_post_id'] . '"><img src="' . $images['icon_latest_reply'] . '" border="0" alt="' . $lang['View_latest_post'] . '" title="' . $lang['View_latest_post'] . '" /></a>';
			}
			else
			{
				$last_post = $lang['No_Posts'];
			}

			if ( count($subforum_moderators[$subforum_id]) > 0 )
			{
				$l_moderators = ( count($subforum_moderators[$subforum_id]) == 1 ) ? $lang['Moderator'] : $lang['Moderators'];
				$moderator_list = implode(', ', $subforum_moderators[$subforum_id]);
			}
			else
			{
				$l_moderators = '&nbsp;';
				$moderator_list = '';
			}

			$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
			$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

			$template->assign_block_vars('catrow.forumrow',	array(
				'ROW_COLOR' => '#' . $row_color,
				'ROW_CLASS' => $row_class,
				'FORUM_FOLDER_IMG' => $folder_image,
//-- mod : forumtitle as weblink -----------------------------------------------
//-- add
				'FORUM_LINK_COUNT' => ($subforum_data[$j]['title_is_link']) ? sprintf($lang['Forum_link_count'], $subforum_data[$j]['forum_link_count']) : '',
				'FORUM_LINK_TARGET' => ($subforum_data[$j]['forum_link_target']) ? 'target="_blank"' : '',
//-- fin mod : forumtitle as weblink ------------------------------------------- 
				'FORUM_ICON_IMG' => ($icon) ? '<img src="' . $phpbb_root_path . $icon . '" alt="'.$forum_data[$j]['forum_name'].'" title="'.$forum_data[$j]['forum_name']. '" border="0" />' : '',	// Forum Icon Mod 
				'FORUM_NAME' => $subforum_data[$j]['forum_name'],
				'FORUM_DESC' => $subforum_data[$j]['forum_desc'],
				'POSTS' => $subforum_data[$j]['forum_posts'],
				'TOPICS' => $subforum_data[$j]['forum_topics'],
				'LAST_POST' => $last_post,
				'MODERATORS' => $moderator_list,
				'ID' => $subforum_data[$j]['forum_id'],
				'UNREAD' => intval($unread_topics),
				'LAST_POST_TIME' => $last_post_time,

				'L_MODERATOR' => $l_moderators, 
				'L_FORUM_FOLDER_ALT' => $folder_alt, 

//-- mod : forumtitle as weblink -----------------------------------------------
//-- delete
/*-MOD
				'U_VIEWFORUM' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$subforum_id"))
			);
MOD-*/
//-- add
				'U_VIEWFORUM' => ( $subforum_data[$j]['title_is_link'] ) ? append_sid('index.'.$phpEx . '?' . POST_FORUM_URL . '=' . $subforum_id . '&amp;forum_link=1') : append_sid('viewforum.'.$phpEx . '?' . POST_FORUM_URL . '=' . $subforum_id))
			);

			if ( $subforum_data[$j]['title_is_link'] )
			{
				$template->assign_block_vars('catrow.forumrow.switch_forum_link_on', array());
			}
			else
			{
				$template->assign_block_vars('catrow.forumrow.switch_forum_link_off', array());
			}
//-- fin mod : forumtitle as weblink -------------------------------------------

		}
	}
}
// End Simple Subforums MOD

//
// Parse the page and print
//
$template->pparse('body');

//
// Page footer
//
include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>
