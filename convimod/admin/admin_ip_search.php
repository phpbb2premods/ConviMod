<?php
/*-----------------------------------------------------------------------------
    IP Search - A phpBB Add-On
  ----------------------------------------------------------------------------
    admin_ip_search.php
       IP Searching Script
    File Version: 3.0.3
    Begun: August 25, 2003                 Last Modified: May 29, 2007
  ----------------------------------------------------------------------------
    Copyright 2007 by Jeremy Rogers.  Please read the license.txt included
    with the phpBB Add-On listed above for full license and copyright details.
  ----------------------------------------------------------------------------
    Class and Function Quick Reference
             Names                                 Search Labels
         acp_ip_search................................[class]
            main......................................[main]
            prep......................................[prep]
            ip_output_row.............................[ipout]
            run_query.................................[query]
            sql_in_set................................[sqlset]
            sql_validate_value........................[valid]
            back_link.................................[bcklink]
-----------------------------------------------------------------------------*/

if( !empty($setmodules) )
{
	$filename = basename(__FILE__);
	$module['Users']['IP_Search'] = $filename;
	return;
}

define('IN_PHPBB', TRUE);

$phpbb_root_path = './../';
require_once($phpbb_root_path . 'extension.inc');
require_once('./pagestart.' . $phpEx);

require_once($phpbb_root_path . 'language/lang_' . $board_config['default_lang'] . '/lang_ipsearch.' . $phpEx);

$submit = ( isset($HTTP_POST_VARS['term']) || isset($HTTP_POST_VARS['term']) ) ? TRUE : FALSE;

$template->set_filenames(array(
	'search'	=> 'admin/ipsearch_search.tpl',
	'results'	=> 'admin/ipsearch_results.tpl'
));

$template->assign_vars(array(
	'SEARCH_IMG'	=> $phpbb_root_path . $images['icon_search'], 
	'EDIT_IMG'		=> $phpbb_root_path . $images['icon_edit'], 

	'L_IPSEARCH_AGAIN'				=> $lang['IPSEARCH_AGAIN'],
	'L_IPSEARCH_ENTER_IP_EXPLAIN'	=> $lang['IPSEARCH_ENTER_IP_EXPLAIN'],
	'L_IPSEARCH_RESOLVE_DELAY'		=> $lang['IPSEARCH_RESOLVE_DELAY'],
	'L_IPSEARCH_SEARCH_RESULTS'		=> $lang['IPSEARCH_SEARCH_RESULTS'],
	'L_IPSEARCH_HOST_NOT_FOUND'		=> $lang['IPSEARCH_HOST_NOT_FOUND'],
	'L_IPSEARCH_USERS'				=> $lang['IPSEARCH_USERS'],
	'L_IPSEARCH_IP'					=> $lang['IPSEARCH_IP'],
	'L_POSTS'						=> $lang['Posts'],
	'L_IPSEARCH_POLL_VOTES'			=> $lang['IPSEARCH_POLL_VOTES'],
	'L_IPSEARCH_SESSIONS'			=> $lang['IPSEARCH_SESSIONS'],
	'L_IPSEARCH_KEYS'				=> $lang['IPSEARCH_KEYS'],
	'L_IPSEARCH_ACCOUNT'			=> $lang['IPSEARCH_ACCOUNT'],
	'L_IPSEARCH_PMS'				=> $lang['IPSEARCH_PMS'],
	'L_IP_SEARCH'					=> $lang['IPSEARCH_SEARCH_BY_IP'],
	'L_IPSEARCH_ENTER_IP'			=> $lang['IPSEARCH_ENTER_IP'],
	'L_IP_ADDRESS_EXPLAIN'			=> $lang['IPSEARCH_ENTER_IP_EXPLAIN'],
	'L_IP_SEARCH_RESULTS'			=> $lang['IPSEARCH_SEARCH_RESULTS'],
	'L_SUBMIT'						=> $lang['Submit'],
	'L_SEARCH'						=> $lang['Search'],
	'L_EDIT'						=> $lang['Edit'],
	'L_AGAIN'						=> $lang['IPSEARCH_AGAIN']
));

$ip_search = new acp_ip_search();
$ip_search->main();

$template->pparse('search');
include('./page_footer_admin.'.$phpEx);


/*	acp_ip_search                                           [class]
       Handles all of the IP searching functions.
	   Ported from IP Search for phpBB 3, where the class was
	   originally ported from older, non-class versions of this file.
*/
class acp_ip_search
{
	var $u_action;
	var $search_results	= array();
	var $search_terms	= array();
	var $user_ids		= array();
	var $lookups		= array();
	var $guest_lookups	= array();
	var $headings		= array();
	var $results_found	= FALSE;
	var $num_rows		= 1;

/*	main                                                    [main]
       Does most of the work of IP Search.

    Arguments:
       None.

    Return:
       None.
*/
	function main()
	{
		global $db, $userdata, $template, $phpbb_root_path, $phpEx, $submit, $lang;
		global $HTTP_POST_VARS;

		$this->u_action = "admin_ip_search.$phpEx?sid={$userdata['session_id']}";

		$template->assign_vars(array(
			'U_IP_SEARCH' => $this->u_action
		));

		if( !$submit )
		{
			// We're done...
			return;
		}

		// Doing a search...
		$this->show_regged = FALSE;
		$this->search_results['guests'] = array();
		$search_term = ( isset($HTTP_POST_VARS['term']) ) ? $HTTP_POST_VARS['term']: '';
		$search_term = trim(htmlspecialchars($search_term));

		if ( empty($search_term) || strpos($search_term, '.') === FALSE)
		{
			message_die(GENERAL_MESSAGE, $lang['IPSEARCH_ENTER_AN_IP'] . $this->back_link());
		}

		$l_host = $host = $ip_list = '';
		if( preg_match('/(\.)?(\*)$/', $search_term) )
		{
			// We're doing a search with wildcards.
			$strip_num = 0;
			$ip_sep = explode('.', $search_term);
			foreach($ip_sep as $val)
			{
				if( $val == 0 )
				{
					$strip_num += 2;
				}
			}
			if( count($ip_sep) < 4 )
			{
				$strip_num += 2 * (4 - count($ip_sep));
			}
			$search_ip = encode_ip($search_term);
			if( $strip_num )
			{
				$search_ip = substr($search_ip, 0, strlen($search_ip) - $strip_num);
			}
			$this->search_terms = array($search_ip . '%');
		}
		elseif( preg_match('/([0-9]{1,3}\.){3}[0-9]{1,3}/', $search_term) )
		{
			// Full IP address, yay! Let us try to get the matching host.
			$host = @gethostbyaddr($search_term);
			if( empty($host) || $host == $search_term )
			{
				// Oooo, it failed. Make sure this is an empty string,
				// since PHP handles it differently across versions.
				$host = '';
			}
			$this->search_terms = array(encode_ip($search_term));
		}
		else
		{
			// Searching my a host? Well, okay. IP Fetching time!
			$host			= $search_term;
			$base_ip_list	= @gethostbynamel($host);
			if( !is_array($ip_list) )
			{
				// Well, that failed, too.
				message_die(GENERAL_MESSAGE, $lang['IPSEARCH_NO_RESOLVE'] . $this->back_link());
			}

			foreach($base_ip_list as $v)
			{
				$this->search_terms[] = encode_ip($v);
			}
		}

		$show_host = $show_ip_list = $no_resolve = FALSE;
		if( !empty($host) && $host != $search_term )
		{
			// They searched for IP and we have a host, so let's show it, too.
			$show_host = TRUE;
			$l_host = sprintf($lang['IPSEARCH_HOST'], $host);
		}
		elseif( $host == $search_term )
		{
			// They searched for a host and we resolved this to an IP list.
			// Let's show the resolved IPs.
			$show_ip_list = TRUE;
			$ip_list = sprintf($lang['IPSEARCH_IP_LIST'], implode(', ', $base_ip_list));
		}
		elseif( !$show_host && !$show_ip_list )
		{
			$no_resolve = TRUE;
			$template->assign_block_vars('no_resolve', array());
		}

		$template->assign_vars(array(
			'SEARCH_TERM'	=> sprintf($lang['IPSEARCH_SEARCHED_FOR'], $search_term),
			'HOST'			=> $l_host,
			'IP_LIST'		=> $ip_list,
		));

		if( $show_host )
		{
			$template->assign_block_vars('show_host', array());
		}
		elseif( $show_ip_list )
		{
			$template->assign_block_vars('show_ip_list', array());
		}
		$template->assign_block_vars('search_again', array());
		

		/* Search Lookups
			Define the tables and fields we will search for IPs.
			The format is:
		$this->lookups[] = array(
			'cat'		=>	cat name
			'id'		=>	id field,
			'table'		=>	table constant/name,
			'ip'		=>	ip field,
			'no_anon'	=>	true
		);

			Some notes:
			Cat_name is a category name, for internal use in storing results
				related to one area. See the existing entries below for example.
				Do not use the same category in more than one lookup.
			Id field is the field of the table containing the user's id. This
				will be selected and used to look up the user's details in the
				users table later.
			IP field is the field of the table containing IP addresses. This
				field will be searched.
			Table constant/name is the name of the table to be searched.
				Generally is should be a constant defined in constants.php.
			The no_anon line is optional. If included, it will cause the search
				to exclude anonymous users in that table. This is only necessary
				on tables that may hold user and guest ips in the same fields.
				Searches for anonymous users should be done separately.
				If in doubt, go ahead and include the no_anon line.
		*/
		// If you would like to add a search on a table, do it here.


		// Default Lookups
		$this->lookups[] = array(
			'cat'		=>	'posts',
			'id'		=>	'poster_id',
			'table'		=>	POSTS_TABLE,
			'ip'		=>	'poster_ip',
			'no_anon'	=>	true
		);

		$this->lookups[] = array(
			'cat'		=>	'pms',
			'id'		=>	'privmsgs_from_userid',
			'table'		=>	PRIVMSGS_TABLE,
			'ip'		=>	'privmsgs_ip'
		);

		$this->lookups[] = array(
			'cat'		=>	'sessions',
			'id'		=>	'session_user_id',
			'table'		=>	SESSIONS_TABLE,
			'ip'		=>	'session_ip',
			'no_anon'	=>	true
		);

		if( defined('SESSIONS_KEYS_TABLE') )
		{
			$this->lookups[] = array(
				'cat'		=>	'keys',
				'id'		=>	'user_id',
				'table'		=>	SESSIONS_KEYS_TABLE,
				'ip'		=>	'last_ip',
				'no_anon'	=>	true
			);
		}

		$this->lookups[] = array(
			'cat'		=>	'votes',
			'id'		=>	'vote_user_id',
			'table'		=>	VOTE_USERS_TABLE,
			'ip'		=>	'vote_user_ip',
			'no_anon'	=>	true
		);

		// Support for Antony Bailey's registration IP mod
		if( array_key_exists('user_regip', $userdata) )
		{
			$this->show_regged = TRUE;
			$this->lookups[] = array(
				'cat'		=>	'users',
				'id'		=>	'user_id',
				'table'		=>	USERS_TABLE,
				'ip'		=>	'user_regip',
				'no_anon'	=>	true
			);
		}

		// Support for Wicher's IP on Register mod
		if( array_key_exists('user_registerip', $userdata) )
		{
			$this->show_regged = TRUE;
			$this->lookups[] = array(
				'cat'		=>	'users',
				'id'		=>	'user_id',
				'table'		=>	USERS_TABLE,
				'ip'		=>	'user_registerip',
				'no_anon'	=>	true
			);
		}

		// Support for Woody's Log IP's on Registration mod
		// This isn't fully tested because it is not standard with changes
		// made in the search methods in IP Search 3.0.0.  This code is based
		// on IP Search 2.x with minor changes for 3.x compatibility.
		// Log IP's on Registration stored the IPs in clear text, rather than
		// encoded as phpBB 2 and most related hacks do.  The new search methods
		// can't handle unencoded IPs.
		if( array_key_exists('user_reg_ip', $userdata) )
		{
			$this->show_regged = TRUE;
			$user_reg_ip_sql = '';
			if( count($this->search_terms) > 1 )
			{
				// List of Ips
				$search_ip_list = " IN ('" . explode("', '", $base_ip_list) . "')";
			}
			else
			{
				$search_ip_list = " = '" . $search_term . "'";
			}
			if( strpos($search_ip_list, '*') !== FALSE )
			{
				$search_ip_list = str_replace(array('*', '='), array('%', 'LIKE'), $search_ip_list);
			}
			if( !empty($host) )
			{
				$search_ip_list .= ( !empty($search_ip_list) ) ? ' OR ' : '';
				$search_ip_list .= " user_reg_host = '$host'";
			}
			$search_ip_list = str_replace("\'", "''", $search_ip_list);
			$sql = 'SELECT user_id, user_reg_ip as recorded_ip, COUNT(*) as total
					FROM ' . USERS_TABLE . ' 
					WHERE user_reg_ip ' . $search_ip_list . '
						AND user_id <> ' . ANONYMOUS . '
						GROUP BY user_id
					ORDER BY username';
			if ( !$result = $db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, 'Could not get Account information #2 based on IP', '', __LINE__, __FILE__, $sql);
			}
			while( $row = $db->sql_fetchrow($result) )
			{
				$row['recorded_ip'] = encode_ip($row['recorded_ip']);
				$this->user_ids[] = $row['user_id'];
				$this->search_results['users'][] = $row;
				$this->results_found = TRUE;
			}
			$db->sql_freeresult($result);
		}

		foreach($this->lookups as $v)
		{
			$this->run_query($v);
		}

		// All of that was for registered users. Now let's get the guests.
		// The format is mostly the same. The differences are:
		//			We use $this->guest_lookups
		//			We may pull details other than the users' id number
		//			no_anon has no use and is not needed.
		// Be sure to use the same cat names used in the registered user
		// searches.
		$this->guest_lookups[] = array(
			'cat'		=>	'posts',
			'id'		=>	'post_username',
			'table'		=>	POSTS_TABLE,
			'ip'		=>	'poster_ip'
		);

		$this->guest_lookups[] = array(
			'cat'		=>	'sessions',
			'id'		=>	'session_user_id',
			'table'		=>	SESSIONS_TABLE,
			'ip'		=>	'session_ip'
		);

		$this->guest_lookups[] = array(
			'cat'		=>	'votes',
			'id'		=>	'vote_user_id',
			'table'		=>	VOTE_USERS_TABLE,
			'ip'		=>	'vote_user_ip'
		);

		foreach($this->guest_lookups as $v)
		{
			$this->run_query($v, true);
		}

		// Now finished with IP lookups. It is time to get usernames.
		// First, clear out duplicate user ids.
		if( !$this->results_found )
		{
			$message = $lang['IP_SEARCH_NADA'] . '<br /><br />';
			$message .= sprintf($lang['IPSEARCH_SEARCHED_FOR'], $search_term);
			if( $show_host )
			{
				$message .= '<br /><br />' . $l_host;
			}
			elseif( $show_ip_list )
			{
				$message .= '<br /><br />' . $ip_list;
			}
			elseif( $no_resolve )
			{
				$message .= '<br /><br />' . $lang['IPSEARCH_HOST_NOT_FOUND'];
			}
			
			message_die(GENERAL_MESSAGE, $message . $this->back_link());
		}

		$this->user_ids = array_unique($this->user_ids);
		$sql = 'SELECT user_id, username FROM ' . USERS_TABLE . '
					WHERE ' . $this->sql_in_set('user_id', $this->user_ids);
		if ( !$result = $db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, 'Could not get user details', '', __LINE__, __FILE__, $sql);
		}
		$users = $db->sql_fetchrowset($result);
		$db->sql_freeresult($result);

		// Print users
		foreach($users as $v)
		{
			$this->ip_output_row($v);
		}

		// Print guests
		$this->ip_output_row(array('user_id' => ANONYMOUS, 'username' => $lang['GUEST']));

		if( $this->show_regged )
		{
			$template->assign_block_vars('regged', array());
		}
		$template->pparse('results');
	}

/*	prep                                                    [prep]
       Prepares an array to hold the number of results found by
	   an IP Search.

    Arguments:
       None.

    Return:
       array  $base  An array, with each value defaulted to 0.
*/
	function prep()
	{
		$base = array();
		foreach($this->lookups as $k=>$v)
		{
			$base[$v['cat']] = 0;
		}
		return $base;
	}

/*	ip_output_row                                           [ipout]
	   Prints out a row of IP results.

	Arguments:
	   $user_info - An array of user details, consisting of at least the
						user_id and username.

	Return:
	   None.
																		*/
	function ip_output_row($user_info)
	{
		global $lang, $theme, $phpbb_root_path, $phpEx, $userdata, $template;

		$user_id = intval($user_info['user_id']);

		if( $user_id == ANONYMOUS )
		{
			$base_results =& $this->search_results['guests'];
		}
		else
		{
			$base_results =& $this->search_results;
		}

		if( empty($base_results) )
		{
			return;
		}

		$user_results = array();
		$totals = $this->prep();
		// Run through all results found and extract the ones related to this
		// specific user.
		foreach($base_results as $k=>$v)
		{
			if( $k == 'guests' )
			{
				continue;
			}

			foreach($v as $result)
			{
				if( $user_id != ANONYMOUS && $result['user_id'] != $user_id )
				{
					continue;
				}

				$recorded_ip = decode_ip($result['recorded_ip']);
				if( !isset($user_results[$recorded_ip]) )
				{
					$user_results[$recorded_ip] = $this->prep();
				}

				$user_results[$recorded_ip][$k] = $result['total'];
				$totals[$k] += $result['total'];
			}
		}

		// Users/Guests results header
		$heading = ( $user_id != ANONYMOUS ) ? $lang['IPSEARCH_USERS'] : $lang['G_GUESTS'];
		$show_header = FALSE;
		if( !isset($this->headings[$heading]) )
		{
			$show_header = $this->headings[$heading] = true;
		}

		$user_link = '<a href="' . "{$phpbb_root_path}admin/admin_users.$phpEx?mode=edit&amp;"  . POST_USERS_URL . "=$user_id&amp;sid={$userdata['session_id']}" . '">' . $user_info['username'] . '</a>';

		if( count($user_results) > 1 )
		{
			// More than one IP was found for the user.
			// We need to print out the totals row.
			$tpl_vars = array(
				'ROW_CLASS'			=>	'row4', 
				'USERNAME'			=>	$user_link,
				'SHOW_HEADER'		=>	$show_header,
				'SHOW_TOTAL'		=>	TRUE,
				'HEADER'			=>	$heading,
				'IP'				=>	$lang['IPSEARCH_TOTALS'],
			);

			foreach($totals as $cat=>$num)
			{
				$tpl_vars[strtoupper($cat) . '_COUNT'] = $num;
			}
			$template->assign_block_vars('users', $tpl_vars);
			if( $show_header )
			{
				$template->assign_block_vars('users.header', array());
				$template->assign_block_vars('users', $tpl_vars);
			}
			$template->assign_block_vars('users.total', array());
			$template->assign_block_vars('users.row', array());
			if( $this->show_regged )
			{
				$template->assign_block_vars('users.row.regged', array());
			}
			$show_header = FALSE;
		}

		if (function_exists('get_html_translation_table'))
		{
			$u_search_author = urlencode(strtr($username, array_flip(get_html_translation_table(HTML_ENTITIES))));
		}
		else
		{
			$u_search_author = urlencode(str_replace(array('&amp;', '&#039;', '&quot;', '&lt;', '&gt;'), array('&', "'", '"', '<', '>'), $username));
		}
		$u_search_author = append_sid($phpbb_root_path . 'search.' . $phpEx . '?search_author=' . $u_search_author . '&amp;showresults=topics');
		$u_profile = append_sid($phpbb_root_path . 'profile.' . $phpEx . '?mode=viewprofile&amp;' . POST_USERS_URL . '=' . $id);
		$l_search = sprintf($lang['Search_user_posts'], $username);

		foreach($user_results as $k=>$v)
		{
			$row_color = ( !($this->num_rows % 2) ) ? $theme['td_color1'] : $theme['td_color2'];
			$row_class = ( !($this->num_rows % 2) ) ? $theme['td_class1'] : $theme['td_class2'];
			$this->num_rows++;

			$tpl_vars = array(
				'ROW_COLOR'			=>	'#' . $row_color, 
				'ROW_CLASS'			=>	$row_class, 
				'USERNAME'			=>	$user_link,
				'SHOW_HEADER'		=>	$show_header,
				'SHOW_TOTAL'		=>	FALSE,
				'HEADER'			=>	$heading,
				'IP'				=>	$k,
	
				'L_SEARCH_POSTS'	=> $l_search, 
				'U_PROFILE'			=> $u_profile,
				'U_SEARCHPOSTS'		=> $u_search_author
			);

			foreach($v as $cat=>$num)
			{
				$tpl_vars[strtoupper($cat) . '_COUNT'] = $num;
			}
			$template->assign_block_vars('users', $tpl_vars);
			if( $show_header )
			{
				$template->assign_block_vars('users.header', array());
				$template->assign_block_vars('users', $tpl_vars);
			}
			$template->assign_block_vars('users.row', array());
			if( $this->show_regged )
			{
				$template->assign_block_vars('users.row.regged', array());
			}
			$show_header = FALSE;
		}
	}

/*	run_query                                               [query]
       Builds and executes a query to search the database for records related
	   to one or more IP addresses.

    Arguments:
       $details	- Details of a search to be performed.  These are defined above
					as $this->lookups, etc.
       $guests	- Searching for guest users only? TRUE or FALSE.

    Return:
       None.
*/
	function run_query($details, $guests = FALSE)
	{
		global $db;

		$no_anon = $error = FALSE;
		$msg = '';
		$cat = $details['cat'];
		unset($details['cat']);
		if( $guests )
		{
			if( isset($this->search_results['guests'][$cat]) )
			{
				$msg = sprintf($lang['IPSEARCH_BAD_CONFIG_GUESTS'], $cat);
			}
		}
		else
		{
			if( isset($this->search_results[$cat]) )
			{
				$msg = sprintf($lang['IPSEARCH_BAD_CONFIG'], $cat);
			}
		}

		if( $error )
		{
			message_die(GENERAL_MESSAGE, $msg . $this->back_link());
		}

		$base_query = 'SELECT %1$s as user_id, %3$s as recorded_ip, COUNT(*) as total 
						FROM %2$s
						WHERE %4$s
						GROUP BY %3$s, %1$s';
		if( isset($details['no_anon']) )
		{
			$no_anon = array_pop($details);
		}
		$details['where'] = $this->sql_in_set($details['ip'], $this->search_terms);
		if( strpos($details['where'], '%') !== FALSE )
		{
			$details['where'] = str_replace('=', 'LIKE', $details['where']);
		}
		if( $no_anon )
		{
			$details['where'] = $details['id'] . ' <> ' . ANONYMOUS . ' AND ' .  $details['where'];
		}
		elseif( $guests )
		{
			$details['where'] = $details['id'] . ' = ' . ANONYMOUS . ' AND ' .  $details['where'];
		}
		
		$sql = vsprintf($base_query, $details);
		if ( !$result = $db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, 'Could not search for IPs', '', __LINE__, __FILE__, $sql);
		}
		while( $row = $db->sql_fetchrow($result) )
		{
			if( !$guests )
			{
				$this->user_ids[] = $row['user_id'];
				$this->search_results[$cat][] = $row;
				$this->results_found = TRUE;
			}
			else
			{
				$this->search_results['guests'][$cat][] = $row;
				$this->results_found = TRUE;
			}
		}
		$db->sql_freeresult($result);
	}

/*	sql_in_set                                              [sqlset]
       Simplified version of a phpBB 3 function backported for minimal code
	   changes elsewhere in this file.
	   Builds an SQL query's "field IN ( A, B, C)" statement.

    Arguments:
       $field	- Name of a database table column to search.
       $array	- An array of values to be searched.

    Return:
       string  The "field IN ( A, B, C)" statement.
*/
	function sql_in_set($field, $array)
	{
		if (sizeof($array) == 1)
		{
			@reset($array);
			$var = current($array);

			return $field . ' = ' . $this->sql_validate_value($var);
		}
		else
		{
			return $field . ' IN (' . implode(', ', array_map(array($this, 'sql_validate_value'), $array)) . ')';
		}
	}

/*	sql_validate_value                                      [valid]
       Simplified version of a phpBB 3 function backported for minimal code
	   changes elsewhere in this file.
	   Sanitizes variables for use in an SQL query.

    Arguments:
       $var	- A variable to sanitize.

    Return:
       mixed  The sanitized variable.
*/
	function sql_validate_value($var)
	{
		if (is_null($var))
		{
			return 'NULL';
		}
		else if (is_string($var))
		{
			return "'" . str_replace("\'", "''", $var) . "'";
		}
		else
		{
			return (is_bool($var)) ? intval($var) : $var;
		}
	}

/*	back_link                                               [bcklink]
       Prints a "Return to X" style message on error pages.

    Arguments:
       None.

    Return:
       string  The backlink for appending to the error message.
*/
	function back_link()
	{
		global $lang;
		return '<br /><br /><a href="' . $this->u_action . '">' . $lang['IPSEARCH_AGAIN'] . '</a>';
	}
}


?>