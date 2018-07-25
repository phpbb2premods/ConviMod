<?php
/***************************************************************************
 *                                index.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: index.php,v 1.99.2.7 2006/01/28 11:13:39 acydburn Exp $
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

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
//
// End session management
//

//-- mod : forumtitle as weblink -----------------------------------------------
//-- add
$forum_id = isset($HTTP_GET_VARS[POST_FORUM_URL]) ? intval($HTTP_GET_VARS[POST_FORUM_URL]) : 0;
$forum_link = isset($HTTP_GET_VARS['forum_link']) ? intval($HTTP_GET_VARS['forum_link']) : 0;

if ($forum_link && $forum_id)
{
	$sql = 'UPDATE ' . FORUMS_TABLE . '
		SET forum_link_count = forum_link_count + 1
		WHERE forum_id = ' . intval($forum_id);
	if ( !$db->sql_query($sql) )
	{
		message_die(GENERAL_ERROR, 'Could not update link counter', '', __LINE__, __FILE__, $sql);
	}

	$sql = 'SELECT weblink FROM ' . FORUMS_TABLE . ' WHERE forum_id = ' . intval($forum_id);
	if ( !$result = $db->sql_query($sql) )
	{
		message_die(GENERAL_ERROR, 'Could not read forum weblink', '', __LINE__, __FILE__, $sql);
	}

	while ( $row = $db->sql_fetchrow($result) )
	{
		$forum_weblink = $row['weblink'];
	}

	header('Location: ' . $forum_weblink);
	exit;
}
//-- fin mod : forumtitle as weblink -------------------------------------------

//START MOD Keep_unread_2 * set $toggle_unreads_link so that later on the script knows wheter to run the extra queries to toggle view unread link text depending on whether or not there are unread posts 
$toggle_unreads_link = true;
//END MOD Keep_unread

$viewcat = ( !empty($HTTP_GET_VARS[POST_CAT_URL]) ) ? $HTTP_GET_VARS[POST_CAT_URL] : -1;

if( isset($HTTP_GET_VARS['mark']) || isset($HTTP_POST_VARS['mark']) )
{
	$mark_read = ( isset($HTTP_POST_VARS['mark']) ) ? $HTTP_POST_VARS['mark'] : $HTTP_GET_VARS['mark'];
}
else
{
	$mark_read = '';
}

//
// Handle marking posts
//
if( $mark_read == 'forums' )
{
  	//START MOD Keep_unread_2 * Mark everything as read
	$board_config['tracking_time'] = time(); //at this moment
	$board_config['tracking_forums'] = array(); //clean
	$board_config['tracking_unreads'] = array(); //clean
	write_cookies($userdata);
  	//END MOD Keep_unread_2

	$template->assign_vars(array(
		"META" => '<meta http-equiv="refresh" content="3;url='  .append_sid("index.$phpEx") . '">')
	);

	$message = $lang['Forums_marked_read'] . '<br /><br />' . sprintf($lang['Click_return_index'], '<a href="' . append_sid("index.$phpEx") . '">', '</a> ');

	message_die(GENERAL_MESSAGE, $message);
}
//
// End handle marking posts
//

//MOD Keep_unread * deleted
// $tracking_topics = ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_t']) ) ? unserialize($HTTP_COOKIE_VARS[$board_config['cookie_name'] . "_t"]) : array();
// $tracking_forums = ( isset($HTTP_COOKIE_VARS[$board_config['cookie_name'] . '_f']) ) ? unserialize($HTTP_COOKIE_VARS[$board_config['cookie_name'] . "_f"]) : array();
//END MOD Keep_unread

//
// If you don't use these stats on your index you may want to consider
// removing them
//
$total_posts = get_db_stat('postcount');
$total_users = get_db_stat('usercount');
$newest_userdata = get_db_stat('newestuser');
$newest_user = $newest_userdata['username'];
$newest_uid = $newest_userdata['user_id'];

if( $total_posts == 0 )
{
	$l_total_post_s = $lang['Posted_articles_zero_total'];
}
else if( $total_posts == 1 )
{
	$l_total_post_s = $lang['Posted_article_total'];
}
else
{
	$l_total_post_s = $lang['Posted_articles_total'];
}

if( $total_users == 0 )
{
	$l_total_user_s = $lang['Registered_users_zero_total'];
}
else if( $total_users == 1 )
{
	$l_total_user_s = $lang['Registered_user_total'];
}
else
{
	$l_total_user_s = $lang['Registered_users_total'];
}

//
// Is there any global announcement ?
//
//-- mod : quick title edition -------------------------------------------------
//-- add
	include($get->url('includes/class_attributes'));
//-- fin mod : quick title edition ---------------------------------------------

if ( $board_config['annonce_globale_index'] )
{
	get_annonce_list();
}

//
// Start page proper
//
$sql = "SELECT c.cat_id, c.cat_title, c.cat_order
	FROM " . CATEGORIES_TABLE . " c 
	ORDER BY c.cat_order";
if( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not query categories list', '', __LINE__, __FILE__, $sql);
}

$category_rows = array();
while ($row = $db->sql_fetchrow($result))
{
	$category_rows[] = $row;
}
$db->sql_freeresult($result);

// Begin Simple Subforums MOD
$subforums_list = array();
// End Simple Subforums MOD

if( ( $total_categories = count($category_rows) ) )
{
	//
	// Define appropriate SQL
	//
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
				ORDER BY f.cat_id, f.forum_order";
MOD-*/
//-- add
			$sql = "SELECT f.*, p.post_time, p.post_username, u.username, u.user_id, t.topic_title, t.topic_last_post_id " .
			" FROM ((( " . FORUMS_TABLE . " f " .
			" LEFT JOIN " . POSTS_TABLE . " p ON p.post_id = f.forum_last_post_id )" .
			" LEFT JOIN " . USERS_TABLE . " u ON u.user_id = p.poster_id ) " .
			" LEFT JOIN " . TOPICS_TABLE . " t ON t.topic_last_post_id = p.post_id ) " .
			" ORDER BY f.cat_id, f.forum_order";
//-- fin mod : Last post topic on index mod ---------------------------------------------
			break;
	}
//-- mod : rank color system ---------------------------------------------------
//-- add
	$sql = str_replace(', u.user_id', ', u.user_id, u.user_level, u.user_color, u.user_group_id', $sql);
//-- fin mod : rank color system -----------------------------------------------
//-- mod : Last post topic on index mod -------------------------------------------------
//-- delete
/*-MOD
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not query forums information', '', __LINE__, __FILE__, $sql);
	}

	$forum_data = array();
	while( $row = $db->sql_fetchrow($result) )
	{
		$forum_data[] = $row;
	}
	$db->sql_freeresult($result);

	if ( !($total_forums = count($forum_data)) )
	{
		message_die(GENERAL_MESSAGE, $lang['No_forums']);
	}
MOD-*/
//-- add
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not query forums information', '', __LINE__, __FILE__, $sql);
	}

	$forum_data = array();
	$topic_last_ary = array();
	$i=0;
	while( $row = $db->sql_fetchrow($result) )
	{
		if (!in_array($row['topic_last_post_id'], $topic_last_ary) || $row['topic_last_post_id']==0) {
			$topic_last_ary[i]=$row['topic_last_post_id'];
			$i++;
			$forum_data[] = $row;
		}
	}
	unset($topic_last_ary);
	if ( !($total_forums = count($forum_data)) )
	{
		message_die(GENERAL_MESSAGE, $lang['No_forums']);
	}
	
	//
	// Filter topic_title not allowed to read
	// 
	if ( !($userdata['user_level'] == ADMIN && $userdata['session_logged_in']) ) {
		$auth_read_all = array();
		$auth_read_all=auth(AUTH_READ, AUTH_LIST_ALL, $userdata, $forum_data);
		$auth_data = '';
		for($i=0; $i<count($forum_data); $i++)
		{
			if (!$auth_read_all[$forum_data[$i]['forum_id']]['auth_read']) {
				$forum_data[$i]['topic_title']='';
			}
		}
	}

	//
	// Define censored word matches
	//
	$orig_word = array();
	$replacement_word = array();
	obtain_word_list($orig_word, $replacement_word);
//-- fin mod : Last post topic on index mod ---------------------------------------------

	//MOD Keep_unread_2 * Get new_unreads list and forum_unread flags, save cookies etc.
	$new_unreads = list_new_unreads($forum_unreads, $toggle_unreads_link);
	//END MOD Keep_unread_2

	//
	// Obtain list of moderators of each forum
	// First users, then groups ... broken into two queries
	//
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
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not query forum moderator information', '', __LINE__, __FILE__, $sql);
	}

	$forum_moderators = array();
	while( $row = $db->sql_fetchrow($result) )
	{
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
		$forum_moderators[$row['forum_id']][] = '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=" . $row['user_id']) . '">' . $row['username'] . '</a>';
MOD-*/
//-- add
		$style_color = $rcs->get_colors($row);
		$forum_moderators[$row['forum_id']][] = '<a href="' . $get->url('userlist', array('mode' => 'viewprofile', POST_USERS_URL => $row['user_id']), true) . '"' . $style_color . '>' . $row['username'] . '</a>';
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
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Could not query forum moderator information', '', __LINE__, __FILE__, $sql);
	}

	while( $row = $db->sql_fetchrow($result) )
	{
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
		$forum_moderators[$row['forum_id']][] = '<a href="' . append_sid("groupcp.$phpEx?" . POST_GROUPS_URL . "=" . $row['group_id']) . '">' . $row['group_name'] . '</a>';
MOD-*/
//-- add
		$style_color = $rcs->get_group_class($row['group_id']);
		$forum_moderators[$row['forum_id']][] = '<a href="' . $get->url('groupcp', array(POST_GROUPS_URL => $row['group_id']), true) . '"' . $style_color . '>' . $row['group_name'] . '</a>';
//-- fin mod : rank color system -----------------------------------------------
	}
	$db->sql_freeresult($result);

	//
	// Find which forums are visible for this user
	//
	$is_auth_ary = array();
	$is_auth_ary = auth(AUTH_VIEW, AUTH_LIST_ALL, $userdata, $forum_data);

	//
	// Start output of page
	//
	define('SHOW_ONLINE', true);
	$page_title = $lang['Index'];
	include($phpbb_root_path . 'includes/page_header.'.$phpEx);

//-- mod : today userlist ------------------------------------------------------
//-- add
	include($get->url('includes/class_onlinelist'));
	$onlinelist = new onlinelist_class();
	$onlinelist->display();
	unset($onlinelist);

//-- mod : rank color system ---------------------------------------------------
//-- add
	$rcs->display_legend();
	$newest_color = $rcs->get_colors($newest_userdata);
//-- fin mod : rank color system -----------------------------------------------

//-- mod : birthday ------------------------------------------------------------
//-- add
	$birthday->generate_list();
//-- fin mod : birthday --------------------------------------------------------

	$template->set_filenames(array(
		'body' => 'index_body.tpl')
	);

	$template->assign_vars(array(
		'TOTAL_POSTS' => sprintf($l_total_post_s, $total_posts),
		'TOTAL_USERS' => sprintf($l_total_user_s, $total_users),
//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
		'NEWEST_USER' => sprintf($lang['Newest_user'], '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . "=$newest_uid") . '">', $newest_user, '</a>'),
MOD-*/
//-- add
		'NEWEST_USER' => sprintf($lang['Newest_user'], '<a href="' . $get->url('userlist', array('mode' => 'viewprofile', POST_USERS_URL => $newest_uid), true) . '"' . $newest_color . '>', $newest_user, '</a>'),
//-- fin mod : rank color system -----------------------------------------------

		'FORUM_IMG' => $images['forum'],
		'FORUM_NEW_IMG' => $images['forum_new'],
		'FORUM_LOCKED_IMG' => $images['forum_locked'],

//-- mod : forumtitle as weblink -----------------------------------------------
//-- add
		'FORUM_LINK_IMG' => $images['forum_link'],
		'L_FORUM_LINK' => $lang['Forum_is_a_link'],
//-- fin mod : forumtitle as weblink -------------------------------------------

		'L_FORUM' => $lang['Forum'],
// Begin Simple Subforums MOD
		'L_SUBFORUMS' => $lang['Subforums'],
// End Simple Subforums MOD
		'L_TOPICS' => $lang['Topics'],
		'L_REPLIES' => $lang['Replies'],
		'L_VIEWS' => $lang['Views'],
		'L_POSTS' => $lang['Posts'],
		'L_LASTPOST' => $lang['Last_Post'], 
		'L_NO_NEW_POSTS' => $lang['No_new_posts'],
		'L_NEW_POSTS' => $lang['New_posts'],
		'L_NO_NEW_POSTS_LOCKED' => $lang['No_new_posts_locked'], 
		'L_NEW_POSTS_LOCKED' => $lang['New_posts_locked'], 
		'L_ONLINE_EXPLAIN' => $lang['Online_explain'], 

		'L_MODERATOR' => $lang['Moderators'], 
		'L_FORUM_LOCKED' => $lang['Forum_is_locked'],
		'L_MARK_FORUMS_READ' => $lang['Mark_all_forums'], 

		'U_MARK_READ' => append_sid("index.$phpEx?mark=forums"))
	);

	//
	// Let's decide which categories we should display
	//
	$display_categories = array();

	for ($i = 0; $i < $total_forums; $i++ )
	{
		if ($is_auth_ary[$forum_data[$i]['forum_id']]['auth_view'])
		{
			$display_categories[$forum_data[$i]['cat_id']] = true;
		}
	}

	//
	// Okay, let's build the index
	//
	for($i = 0; $i < $total_categories; $i++)
	{
		$cat_id = $category_rows[$i]['cat_id'];

		//
		// Yes, we should, so first dump out the category
		// title, then, if appropriate the forum list
		//
		if (isset($display_categories[$cat_id]) && $display_categories[$cat_id])
		{
			$template->assign_block_vars('catrow', array(
				'CAT_ID' => $cat_id,
				'CAT_DESC' => $category_rows[$i]['cat_title'],
				'U_VIEWCAT' => append_sid("index.$phpEx?" . POST_CAT_URL . "=$cat_id"))
			);

			if ( $viewcat == $cat_id || $viewcat == -1 )
			{
				for($j = 0; $j < $total_forums; $j++)
				{
					if ( $forum_data[$j]['cat_id'] == $cat_id )
					{
						$forum_id = $forum_data[$j]['forum_id'];

						if ( $is_auth_ary[$forum_id]['auth_view'] )
						{
							if ( $forum_data[$j]['forum_status'] == FORUM_LOCKED )
							{
								$folder_image = $images['forum_locked']; 
								$folder_alt = $lang['Forum_locked'];
								// Begin Simple Subforums MOD
//-- Add On KUF on SS --------------------------------------
//-- delete
//								$unread_topics = false;
//-- add
								$unread_topic = false;
//-- Add On KUF on SS --------------------------------------
								$folder_images = array(
									'default'	=> $folder_image,
									'new'		=> $images['forum_locked'],
									'sub'		=> ( isset($images['forums_locked']) ) ? $images['forums_locked'] : $images['forum_locked'],
									'subnew'	=> ( isset($images['forums_locked']) ) ? $images['forums_locked'] : $images['forum_locked'],
									'subalt'	=> $lang['Forum_locked'],
									'subaltnew'	=> $lang['Forum_locked'],
									);
								// End Simple Subforums MOD
							}
							else
						{
							//MOD Keep_Unread_2 * Forum_unread flags set earlier
							$unread_topic = $forum_unreads[$forum_id];
//-- mod : forumtitle as weblink -----------------------------------------------
//-- delete
/*-MOD
								$folder_image = ( $unread_topic ) ? $images['forum_new'] : $images['forum'];
								$folder_alt = ( $unread_topic ) ? $lang['New_posts'] : $lang['No_new_posts'];
MOD-*/
//-- add
								if( $forum_data[$j]['title_is_link'] )
								{
									$folder_alt = $lang['Forum_is_a_link'];
									$folder_image = $images['forum_link'];
								}
								else if( $unread_topic )
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
							// Begin Simple Subforums MOD
								$folder_images = array(
									'default'	=> $folder_image,
									'new'		=> $images['forum_new'],
									'sub'		=> ( isset($images['forums']) ) ? $images['forums'] : $images['forum'],
									'subnew'	=> ( isset($images['forums_new']) ) ? $images['forums_new'] : $images['forum_new'],
									'subalt'	=> $lang['No_new_posts'],
									'subaltnew'	=> $lang['New_posts'],
									);
								// End Simple Subforums MOD
						}

							$posts = $forum_data[$j]['forum_posts'];
							$topics = $forum_data[$j]['forum_topics'];
							$icon = $forum_data[$j]['forum_icon'];	// Forum Icon Mod

//-- mod : Last post topic on index mod -------------------------------------------------
//-- delete
/*-MOD
							if ( $forum_data[$j]['forum_last_post_id'] )
							{
								$last_post_time = create_date($board_config['default_dateformat'], $forum_data[$j]['post_time'], $board_config['board_timezone']);

								$last_post = $last_post_time . '<br />';
MOD-*/
//-- add
							if ( $forum_data[$j]['forum_last_post_id'] )
							{
									$topic_title = $forum_data[$j]['topic_title'];
									$topic_title2 = $forum_data[$j]['topic_title'];
		
									//
									// Censor topic title
									//
									if ( count($orig_word) )
									{
										$topic_title = preg_replace($orig_word, $replacement_word, $topic_title);
										$topic_title2 = preg_replace($orig_word, $replacement_word, $topic_title2);
									}
										
									if (strlen($topic_title)>27) {
										$topic_title = substr($topic_title,0,24) . '...';
									}
							
									$last_post_time = create_date($board_config['default_dateformat'], $forum_data[$j]['post_time'], $board_config['board_timezone']);
									$last_post = '<a href="' . append_sid("viewtopic.$phpEx?"  . POST_POST_URL . '=' . $forum_data[$j]['forum_last_post_id']) . '#' . $forum_data[$j]['forum_last_post_id'] . '" title="' . $topic_title2 . '">' . $topic_title . '</a>' . '<br />';

//-- mod : rank color system ---------------------------------------------------
//-- delete
/*-MOD
								$last_post .= ( $forum_data[$j]['user_id'] == ANONYMOUS ) ? ( ($forum_data[$j]['post_username'] != '' ) ? $forum_data[$j]['post_username'] . ' ' : $lang['Guest'] . ' ' ) : '<a href="' . append_sid("profile.$phpEx?mode=viewprofile&amp;" . POST_USERS_URL . '='  . $forum_data[$j]['user_id']) . '">' . $forum_data[$j]['username'] . '</a> ';
MOD-*/
//-- add
								$style_color = $rcs->get_colors($forum_data[$j]);
								$last_post .= ($forum_data[$j]['user_id'] == ANONYMOUS) ? ((($forum_data[$j]['post_username'] != '') ? $forum_data[$j]['post_username'] : $lang['Guest']) . '&nbsp;') : '<a href="' . $get->url('userlist', array('mode' => 'viewprofile', POST_USERS_URL => $forum_data[$j]['user_id']), true) . '"' . $style_color . '>' . $forum_data[$j]['username'] . '</a>&nbsp;';
//-- fin mod : rank color system -----------------------------------------------

//-- delete
/*-MOD
								$last_post .= '<a href="' . append_sid("viewtopic.$phpEx?"  . POST_POST_URL . '=' . $forum_data[$j]['forum_last_post_id']) . '#' . $forum_data[$j]['forum_last_post_id'] . '"><img src="' . $images['icon_latest_reply'] . '" border="0" alt="' . $lang['View_latest_post'] . '" title="' . $lang['View_latest_post'] . '" /></a>';
MOD-*/
//-- add
								$last_post .= '<a href="' . append_sid("viewtopic.$phpEx?"  . POST_POST_URL . '=' . $forum_data[$j]['forum_last_post_id']) . '#' . $forum_data[$j]['forum_last_post_id'] . '"><img src="' . $images['icon_latest_reply'] . '" border="0" alt="' . $lang['View_latest_post'] . '" title="' . $lang['View_latest_post'] . '"></a><br>' . $lang['by']  . $last_post_time;
//-- fin mod : Last post topic on index mod ---------------------------------------------

//-- mod : KUF on SS ---------------------------------------------------
//-- delete
/*-MOD								
								$last_post_sub = '<a href="' . append_sid("viewtopic.$phpEx?"  . POST_POST_URL . '=' . $forum_data[$j]['forum_last_post_id']) . '#' . $forum_data[$j]['forum_last_post_id'] . '"><img src="' . ($unread_topics ? $images['icon_newest_reply'] : $images['icon_latest_reply']) . '" border="0" alt="' . $lang['View_latest_post'] . '" title="' . $lang['View_latest_post'] . '" /></a>';
MOD-*/
//-- add
								$last_post_sub = '<a href="' . append_sid("viewtopic.$phpEx?"  . POST_POST_URL . '=' . $forum_data[$j]['forum_last_post_id']) . '#' . $forum_data[$j]['forum_last_post_id'] . '"><img src="' . ($unread_topic ? $images['icon_newest_reply'] : $images['icon_latest_reply']) . '" border="0" alt="' . $lang['View_latest_post'] . '" title="' . $lang['View_latest_post'] . '" /></a>';
//-- fin mod : KUF on SS -----------------------------------------------

								
//-- mod : simple subforums ----------------------------------------------------
//-- add
								$last_post_sub = '<img src="' . ($unread_topic ? $images['icon_subforum_new'] : $images['icon_subforum']) . '" border="0" alt="' . ($unread_topic ? $lang['New_posts'] : $lang['No_new_posts']) . '" title="' . ($unread_topic ? $lang['New_posts'] : $lang['No_new_posts']) . '" />';
								$last_post_time = $forum_data[$j]['post_time'];
//-- fin mod : simple subforums ------------------------------------------------
							}
							else
							{
								$last_post = $lang['No_Posts'];
//-- mod : simple subforums ----------------------------------------------------
//-- add
								$last_post_sub = '<img src="' . $images['icon_subforum'] . '" border="0" alt="' . $lang['No_Posts'] . '" title="' . $lang['No_Posts'] . '" />';
								$last_post_time = 0;
//-- fin mod : simple subforums ------------------------------------------------
							}

//-- mod : locked subforums viewable -------------------------------------------
//-- add
							if ( $forum_data[$j]['forum_status'] == FORUM_LOCKED )
							{
								$last_post_sub = '<img src="' . $images['icon_subforum_locked'] . '" border="0" alt="' . $lang['Forum_is_locked'] . '" title="' . $lang['Forum_is_locked'] . '" />';
							}
//-- fin mod : locked subforums viewable ---------------------------------------

							if ( count($forum_moderators[$forum_id]) > 0 )
							{
								$l_moderators = ( count($forum_moderators[$forum_id]) == 1 ) ? $lang['Moderator'] : $lang['Moderators'];
								$moderator_list = implode(', ', $forum_moderators[$forum_id]);
							}
							else
							{
								$l_moderators = '&nbsp;';
//-- mod : simple subforums ----------------------------------------------------
//-- delete
/*-MOD
								$moderator_list = '&nbsp;';
MOD-*/
//-- add
								$moderator_list = '';
//-- fin mod : simple subforums ------------------------------------------------
							}

							$row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
							$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

							$template->assign_block_vars('catrow.forumrow',	array(
								'ROW_COLOR' => '#' . $row_color,
								'ROW_CLASS' => $row_class,
								'FORUM_FOLDER_IMG' => $folder_image, 
//-- mod : forumtitle as weblink -----------------------------------------------
//-- add
								'FORUM_LINK_COUNT' => $forum_data[$j]['title_is_link'] ? sprintf($lang['Forum_link_count'], $forum_data[$j]['forum_link_count']) : '',
								'FORUM_LINK_TARGET' => $forum_data[$j]['forum_link_target'] ? 'target="_blank"' : '',
//-- fin mod : forumtitle as weblink -------------------------------------------
								'FORUM_ICON_IMG' => ($icon) ? '<img src="' . $phpbb_root_path . $icon . '" alt="'.$forum_data[$j]['forum_name'].'" title="'.$forum_data[$j]['forum_name'].'" border="0" />' : '',	// Forum Icon Mod
								'FORUM_NAME' => $forum_data[$j]['forum_name'],
								'FORUM_DESC' => $forum_data[$j]['forum_desc'],
								'POSTS' => $forum_data[$j]['forum_posts'],
								'TOPICS' => $forum_data[$j]['forum_topics'],
								'LAST_POST' => $last_post,
								'MODERATORS' => $moderator_list,

								'L_MODERATOR' => $l_moderators, 
								'L_FORUM_FOLDER_ALT' => $folder_alt, 

								// Begin Simple Subforums MOD
								'FORUM_FOLDERS' => serialize($folder_images),
								'HAS_SUBFORUMS' => 0,
								'PARENT' => $forum_data[$j]['forum_parent'],
								'ID' => $forum_data[$j]['forum_id'],

//-- mod : KUF on simple subforums ----------------------------------------------------
//-- delete
/*-MOD
								'UNREAD' => intval($unread_topics),
								'TOTAL_UNREAD' => intval($unread_topics),
MOD-*/
//-- add

								'UNREAD' => intval($unread_topic),
								'TOTAL_UNREAD' => intval($unread_topic),
//-- fin mod : KUF on simple subforums ------------------------------------------------
								'TOTAL_POSTS' => $forum_data[$j]['forum_posts'],
								'TOTAL_TOPICS' => $forum_data[$j]['forum_topics'],
								'LAST_POST_FORUM' => $last_post,
								'LAST_POST_TIME' => $last_post_time,
								'LAST_POST_TIME_FORUM' => $last_post_time,
								// End Simple Subforums MOD

//-- mod : forumtitle as weblink -----------------------------------------------
//-- delete
/*-MOD
								'U_VIEWFORUM' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . "=$forum_id"))
							);
MOD-*/
//-- add
								'U_VIEWFORUM' => $forum_data[$j]['title_is_link'] ? append_sid('index.'.$phpEx . '?' . POST_FORUM_URL . '=' . $forum_id . '&amp;forum_link=1') : append_sid('viewforum.'.$phpEx . '?' . POST_FORUM_URL . '=' . $forum_id),
							));

							if ( $forum_data[$j]['title_is_link'] )
							{
								$template->assign_block_vars('catrow.forumrow.switch_forum_link_on', array());
								$last_post_sub = '<img src="' . $images['icon_minilink'] . '" border="0" alt="' . $lang['Forum_is_a_link'] . '" title="' . $lang['Forum_is_a_link'] . '" />';
							}
							else
							{
								$template->assign_block_vars('catrow.forumrow.switch_forum_link_off', array());
							}
//-- fin mod : forumtitle as weblink -------------------------------------------

							// Begin Simple Subforums MOD
							if( $forum_data[$j]['forum_parent'] )
							{
								$subforums_list[] = array(
									'forum_data'	=> $forum_data[$j],
									'folder_image'	=> $folder_image,
									'last_post'		=> $last_post,
									'last_post_sub'	=> $last_post_sub,
									'moderator_list'	=> $moderator_list,
//-- mod : KUF on simple subforums ----------------------------------------------------
//-- delete
/*-MOD
									'unread_topics'	=> $unread_topics,
MOD-*/
//-- add

									'unread_topics'	=> $unread_topic,
//-- fin mod : KUF on simple subforums ------------------------------------------------
									'l_moderators'	=> $l_moderators,
									'folder_alt'	=> $folder_alt,
									'last_post_time'	=> $last_post_time,
									'desc'			=> $forum_data[$j]['forum_desc'],
									);
							}
							// End Simple Subforums MOD
						}
					}
				}
			}
		}
	} // for ... categories

}// if ... total_categories
else
{
	message_die(GENERAL_MESSAGE, $lang['No_forums']);
}

// Begin Simple Subforums MOD
unset($data);
unset($item);
unset($cat_item);
unset($row_item);
for( $i = 0; $i < count($subforums_list); $i++ )
{
	$forum_data = $subforums_list[$i]['forum_data'];
	$parent_id = $forum_data['forum_parent'];
	
	// Find parent item
	if( isset($template->_tpldata['catrow.']) )
	{
		$data = &$template->_tpldata['catrow.'];
		$count = count($data);
		for( $j = 0; $j < $count; $j++)
		{
			$cat_item = &$data[$j];
			$row_item = &$cat_item['forumrow.'];
			$count2 = count($row_item);
			for( $k = 0; $k < $count2; $k++)
			{
				if( $row_item[$k]['ID'] == $parent_id )
				{
					$item = &$row_item[$k];
					break;
				}
			}
			if( isset($item) )
			{
				break;
			}
		}
	}
	
	if( isset($item) )
	{
		if( isset($item['sub.']) )
		{
			$num = count($item['sub.']);
			$data = &$item['sub.'];
		}
		else
		{
			$num = 0;
			$item[] = 'sub.';
			$data = &$item['sub.'];
		}

		if( $num < $board_config['max_subforums'] )
		{
		// Append new entry
		$data[] = array(
			'NUM' => $num,
			'FORUM_FOLDER_IMG' => $subforums_list[$i]['folder_image'], 
//-- mod : forumtitle as weblink -----------------------------------------------
//-- add
			'FORUM_LINK_TARGET' => $forum_data['forum_link_target'] ? 'target="_blank"' : '',
//-- fin mod : forumtitle as weblink -------------------------------------------
			'FORUM_NAME' => $forum_data['forum_name'],
			'FORUM_DESC' => $forum_data['forum_desc'],
			'FORUM_DESC_HTML' => htmlspecialchars(preg_replace('@<[\/\!]*?[^<>]*?>@si', '', $forum_data['forum_desc'])),
			'POSTS' => $forum_data['forum_posts'],
			'TOPICS' => $forum_data['forum_topics'],
			'LAST_POST' => $subforums_list[$i]['last_post'],
			'LAST_POST_SUB' => $subforums_list[$i]['last_post_sub'],
			'LAST_TOPIC' => $forum_data['topic_title'],
			'MODERATORS' => $subforums_list[$i]['moderator_list'],
			'PARENT' => $forum_data['forum_parent'],
			'ID' => $forum_data['forum_id'],
			'UNREAD' => intval($subforums_list[$i]['unread_topics']),
	
			'L_MODERATOR' => $subforums_list[$i]['l_moderators'], 
			'L_FORUM_FOLDER_ALT' => $subforums_list[$i]['folder_alt'], 
	
//-- mod : forumtitle as weblink -----------------------------------------------
//-- delete
/*-MOD
			'U_VIEWFORUM' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . '=' . $forum_data['forum_id'])
		);
MOD-*/
//-- add
			'U_VIEWFORUM' => ($forum_data['title_is_link']) ? append_sid('index.'.$phpEx . '?' . POST_FORUM_URL . '=' . $forum_data['forum_id'] . '&amp;forum_link=1') : append_sid('viewforum.'.$phpEx . '?' . POST_FORUM_URL . '=' . $forum_data['forum_id'])
		);
//-- fin mod : forumtitle as weblink -------------------------------------------
		}
		elseif ( $num == $board_config['max_subforums'] )
		{
			// Append 'More...' entry
			$data[] = array(
				'NUM' => $num,
				'FORUM_NAME' => '<b>' . $lang['More'] . '</b>',
				'FORUM_DESC_HTML' => htmlspecialchars(preg_replace('@<[\/\!]*?[^<>]*?>@si', '', $lang['More_HTML'])),
				'PARENT' => $forum_data['forum_parent'],
				'ID' => $forum_data['forum_id'],
	
				'U_VIEWFORUM' => append_sid("viewforum.$phpEx?" . POST_FORUM_URL . '=' . $forum_data['forum_parent'])
			);
		}
		$item['HAS_SUBFORUMS'] ++;
		$item['TOTAL_UNREAD'] += intval($subforums_list[$i]['unread_topics']);
		// Change folder image
		$images = unserialize($item['FORUM_FOLDERS']);
		$item['FORUM_FOLDER_IMG'] = $item['TOTAL_UNREAD'] ? $images['subnew'] : $images['sub'];
		$item['L_FORUM_FOLDER_ALT'] = $item['TOTAL_UNREAD'] ? $images['subaltnew'] : $images['subalt'];
		// Check last post
		if( $item['LAST_POST_TIME'] < $subforums_list[$i]['last_post_time'] )
		{
			$item['LAST_POST'] = $subforums_list[$i]['last_post'];
			$item['LAST_POST_TIME'] = $subforums_list[$i]['last_post_time'];
		}
		if( !$item['LAST_POST_TIME_FORUM'] )
		{
			$item['LAST_POST_FORUM'] = $item['LAST_POST'];
		}
		// Add topics/posts
		$item['TOTAL_POSTS'] += $forum_data['forum_posts'];
		$item['TOTAL_TOPICS'] += $forum_data['forum_topics'];
	}
	unset($item);
	unset($data);
	unset($cat_item);
	unset($row_item);
}
// End Simple Subforums MOD

//
// Generate the page
//
$template->pparse('body');

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>
