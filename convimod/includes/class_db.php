<?php
/***************************************************************************
 *							class_db.php (run stats mod)
 *							------------
 *	begin		: 25/08/2004
 *	copyright	: Ptirhiik
 *	email		: ptirhiik@clanmckeen.com
 *
 *	Version		: 0.0.10 - 23/11/2005 - std edition
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

// start mod addon to run stats mod (and end mod too)... deleted the definitions of debug_run_stats and debug_sql
// since the mod is now turned on or off in the ACP and the query list is now turned on or off via a dropdown
// menu that appears in the display stats box when the mod is turned on; left in definition of debug_sql_admin (turned on 
// by default) since I see no reason why anyone want to turn that definition off (when run stats mod is turned on I would
// think anyone would want it running in the admin pages as well as in the regular pages)
define('DEBUG_SQL_ADMIN', true);

// var_dump() reviewed for output
function _dump($message, $line='', $file='')
{
	global $lang;

	if ( empty($lang) )
	{
		$lang = array(
			'dbg_line' => 'Line: %s',
			'dbg_file' => 'File: %s',
			'dbg_empty' => 'Empty',
		);
	}

	if ( empty($file) && function_exists('debug_backtrace') )
	{
		$dbg = debug_backtrace();
		$file = $dbg[0]['file'];
		$line = $dbg[0]['line'];
		unset($dbg);
	}
	$title = array();
	if ( !empty($line) )
	{
		$title[] = sprintf($lang['dbg_line'], $line);
	}
	if ( !empty($file) )
	{
		$title[] = sprintf($lang['dbg_file'], $file);
	}

	echo '<div class="bodyline"><pre class="genmed"><b>' . (empty($title) ? '' : implode(' - ', $title) . '</b><br />');
	if ( empty($message) )
	{
		echo $lang['dbg_empty'];
	}
	else if ( is_array($message) || is_object($message) )
	{
		print_r($message);
	}
	else
	{
		echo str_replace("\t", '&nbsp;&nbsp;', htmlspecialchars($message));
	}
	echo '</pre></div>';
}

function convert_microtime($time)
{
	list($usec, $sec) = explode(' ', $time);
	return ( (float)$usec + (float)$sec );
}

function _marker_start()
{
	global $trc_loc_start;
	$trc_loc_start = microtime();
}

function _marker_stop()
{
	global $trc_loc_end;
	$trc_loc_end = microtime();
}

// start mod addon to run stats mod ... added the next three functions

// this function returns the full url (including parameters) of the current page
function get_address()
{
	global $HTTP_GET_VARS, $HTTP_SERVER_VARS;
	$keys_array = array_keys($HTTP_GET_VARS);
	$values_array = array_values($HTTP_GET_VARS);
	$count = count($keys_array);
	if($count)
	{
		$get_string = '?' . $keys_array[0] . '=' . $values_array[0];
		for ($i = 1; $i < $count; $i++)
		{
			$get_string .= '&' . $keys_array[$i] . '=' . $values_array[$i];
		}
		return $HTTP_SERVER_VARS['PHP_SELF'] . $get_string;
	}
	else return $HTTP_SERVER_VARS['PHP_SELF'];
}

// this function takes all variables in $HTTP_POST_VARS, unpacks them and returns them in
// a $hidden_field template format so that they can be passed to a template
function get_hidden_fields()
{
	global $HTTP_POST_VARS;
	$keys_array = array_keys($HTTP_POST_VARS);
	$values_array = array_values($HTTP_POST_VARS);
	$count = count($keys_array);
	if($count)
	{
		$hidden_fields = '<input type="hidden" name="' . $keys_array[0] . '" value="' . $values_array[0] . '" />';
		for ($i = 1; $i < $count; $i++)
		{
			$hidden_fields .= '<input type="hidden" name="' . $keys_array[$i] . '" value="' . $values_array[$i] . '" />';
		}
		return $hidden_fields;
	}
	else return '';
}

// This function sorts an array by the entries in one of its fields.
// The first input parameter is the array, the second specifies the name of
// the field you want to sort and the third parameter specifies what php sort method
// to use (if you don't pass a third parameter it assumes by default you want php's
// case insensitive natural sort algorithm)
function array_key_multi_sort($arr, $l , $f='strnatcasecmp')
{
   usort($arr, create_function('$a, $b', "return $f(\$a['$l'], \$b['$l']);"));
   return($arr);
}

// end mod addon to run stats mod

class db_class extends sql_db
{
	var $trc_sql;
	var $sql_fields;
	var $sql_values;
	var $sql_update;
	var $sql_stack_fields;
	var $sql_stack_values;

	function db_class($sqlserver, $sqluser, $sqlpassword, $database, $persistency = true)
	{
		parent::sql_db($sqlserver, $sqluser, $sqlpassword, $database, $persistency);
		$this->trc_sql = array();
	}

	function sql_query($query='', $transaction=false, $line='', $file='', $break_on_error=true)
	{
		// start mod addon to run stats mod
		// check board_config (set in the ACP) for various run stat mod options
		global $board_config, $userdata;
		if ($board_config['run_stats_enable'] && ($userdata['user_level'] == ADMIN || $board_config['run_stats_show_reg_users']) )
		{
			define('DEBUG_RUN_STATS', true);
		}
		if ($board_config['run_stats_query_option'])
		{
			define('DEBUG_SQL', true);
		}
		// end mod addon to run stats mod
		if ( empty($file) )
		{
			$break_on_error = false;
		}
		if ( defined('DEBUG_RUN_STATS') )
		{
			$query_start = microtime();
		}
		$query_res = parent::sql_query($query, $transaction);
		if ( defined('DEBUG_RUN_STATS') )
		{
			$query_end = microtime();
			if ( defined('DEBUG_SQL') )
			{
				if ( empty($file) && function_exists('debug_backtrace') )
				{
					$dbg = debug_backtrace();
					$file = $dbg[0]['file'];
					$line = $dbg[0]['line'];
					unset($dbg);
				}
				$this->trc_sql[] = array('file' => empty($file) ? '?' : basename($file), 'line' => $line, 'sql' => $query, 'start' => $query_start, 'end' => $query_end);
			}
			else
			{
				$this->trc_sql[] = array('start' => $query_start, 'end' => $query_end);
			}
		}
		if ( !$query_res && $break_on_error )
		{
			message_die(GENERAL_ERROR, 'SQL requests not achieved', '', $line, $file, htmlspecialchars($query));
		}
		return $query_res;
	}
}

// sql/run stat class
class stat_run_class
{
	var $endtime;

	function stat_run_class($endtime)
	{
		$this->endtime = $endtime;
	}

	function display()
	{
		global $db, $template, $lang, $userdata, $board_config;
		global $starttime, $trc_loc_start, $trc_loc_end;

		if ( !defined('DEBUG_RUN_STATS') )
		{
			return;
		}

		// lang keys when not present
		if ( empty($lang) || empty($lang['Stat_surround']) )
		{
			$lang = array(
				'Stat_surround' => '[ %s ]',
				'Stat_sep' => ' - ',
				'Stat_page_duration' => 'Time: %.4fs',
				'Stat_local_duration' => 'local trace: %.4fs',
				'Stat_part_php' => 'PHP: %.2d%%',
				'Stat_part_sql' => 'SQL: %.2d%%',
				'Stat_queries' => 'Queries: %2d (%.4fs)',
				'Stat_gzip_enable' => 'GZIP on',
				'Stat_debug_enable' => 'Debug on',

				'Stat_request' => 'Request',
				'Stat_line' => 'Line:&nbsp;%d',
				'Stat_dur' => 'dur.:&nbsp;%.4fs',
				'Stat_table' => 'Table',
				'Stat_type' => 'Type',
				'Stat_possible_keys' => 'Possible keys',
				'Stat_key' => 'Used key',
				'Stat_key_len' => 'Key length',
				'Stat_ref' => 'Ref.',
				'Stat_rows' => 'Rows',
				'Stat_Extra' => 'Comment',
				'Stat_Comment' => 'Comment',
				'Stat_id' => 'Id',
				'Stat_select_type' => 'Select type',
			);
		}

		// trace informations
		$pag_duration = convert_microtime($this->endtime) - convert_microtime($starttime);
		$sql_dump = '';
		$sql_duration = 0;

		// browse all requests
		$color = false;
		$trc_sql = $db->trc_sql;
		$count_trc_sql = count($trc_sql);
		// start mod addon to run stats mod
		// added code that determines how the query list is supposed to be sorted
		// (depending on db setting that the user sets via a drop down menu in the display box)	
		switch ( $board_config['run_stats_query_option'] )
		{
			case '1': // this is the case where we sort queries by order of execution 
			break;

			case '2': // this is the case where we sort queries by file and then order of execution
			for ($i=0;$i<$count_trc_sql;$i++)
			{
				$trc_sql[$i]['sort'] = $trc_sql[$i]['file']   . $i / 10000;
			}         
			$trc_sql = array_key_multi_sort($trc_sql, 'sort');
			break;			

			case '3': // this is the case where we use sort queries by file and then line of file
			for ($i=0;$i<$count_trc_sql;$i++)
			{
				$trc_sql[$i]['sort'] = $trc_sql[$i]['file']   . $trc_sql[$i]['line'] / 10000;
			}         
			$trc_sql = array_key_multi_sort($trc_sql, 'sort');
			break;
		
			default:
			break;
		}
		// end mod addon to run stats mod
		for ( $i = 0; $i < $count_trc_sql; $i++ )
		{
			// duration
			$sql_dur = convert_microtime($trc_sql[$i]['end']) - convert_microtime($trc_sql[$i]['start']);
			$sql_duration += $sql_dur;

			// dump informations
			if ( defined('DEBUG_SQL') && ($userdata['user_level'] == ADMIN) )
			{
				$sql_real_dur = 0;

				// display
				$color = !$color;
				// start mod addon to run stats mod (and end mod too) ... added next line so that queries that take more than
				// a specified time set in the ACP get marked in red
				$mark_dur = $sql_dur >= $board_config['run_stats_warn_time'] ? '<span style="color:red">' : '';
				$template->assign_block_vars('stat_run', array(
					'STAT_FILE' => $trc_sql[$i]['file'],
					'STAT_LINE' => sprintf($lang['Stat_line'], $trc_sql[$i]['line']),
					// start mod addon to run stats mod (and end mod too)...added $mark_dur variable so that queries that take longer than a time specified in ACP will be marked in red
					'STAT_TIME' => $mark_dur . sprintf($lang['Stat_dur'], $sql_dur),
					'STAT_REQUEST' => htmlspecialchars(preg_replace('/[\n\r\s\t]+/', ' ', $trc_sql[$i]['sql'])),
				));
				$template->assign_block_vars('stat_run.light' . ($color ? '' : '_ELSE'), array());

				// for mysql & postgresql, explain request
				$request_explain = '';
				if ( in_array(SQL_LAYER, array('mysql', 'mysql4', 'postgresql')) && !preg_match('/^(UPDATE|INSERT|DELETE|SHOW|TRUNCATE)/i', $trc_sql[$i]['sql']) )
				{
					// get explainations
					$sql = 'EXPLAIN ' . $trc_sql[$i]['sql'];
					$result = $db->sql_query($sql, false, __LINE__, __FILE__);
					$first_table = true;
					$explain_color = false;
					while ( $row = $db->sql_fetchrow($result) )
					{
						// send legend
						if ( $first_table )
						{
							$template->assign_block_vars('stat_run.explain', array());
							foreach ( $row as $key => $value )
							{
								if ( !is_integer($key) )
								{
									$template->assign_block_vars('stat_run.explain.cell', array(
										'STAT_LEGEND' => isset($lang['Stat_' . $key]) ? $lang['Stat_' . $key] : str_replace('_', ' ', $key),
									));
								}
							}
						}
						$first_table = false;

						// send explain values
						$explain_color = !$explain_color;
						$template->assign_block_vars('stat_run.explain.table', array());
						foreach ( $row as $key => $value )
						{
							if ( !is_integer($key) )
							{
								$template->assign_block_vars('stat_run.explain.table.cell', array(
									'STAT_VALUE' => $value,
								));
								$template->assign_block_vars('stat_run.explain.table.cell.light' . ($explain_color ? '' : '_ELSE'), array());
							}
						}
					}
				}
			}
		}

		// duration
		$duration = array(
			sprintf($lang['Stat_page_duration'], $pag_duration),
		);
		if ( !empty($trc_loc_start) || !empty($trc_loc_end) )
		{
			$duration[] = sprintf($lang['Stat_local_duration'], convert_microtime(empty($trc_loc_end)? $trc_end : $trc_loc_end) - convert_microtime(empty($trc_loc_start) ? $starttime : $trc_loc_start));
		}

		// parts
		$sql_part = round(($sql_duration / $pag_duration) * 100);
		$parts = array(
			sprintf($lang['Stat_part_php'], 100 - $sql_part),
			sprintf($lang['Stat_part_sql'], $sql_part),
		);

		// queries
		$queries = array(
			sprintf($lang['Stat_queries'], $count_trc_sql, $sql_duration),
		);

		// setup
		$setup = array();
		if ( $board_config['gzip_compress'] )
		{
			$setup[] = $lang['Stat_gzip_enable'];
		}
		if ( defined('DEBUG') && DEBUG )
		{
			$setup[] = $lang['Stat_debug_enable'];
		}

		// display stats
		// start mod addon to run stats mod
		// check to see if the user is an ADMIN...if so, assign to the display template the info required for a drop down menu showing various display options
		if ($userdata['user_level'] == ADMIN)
		{
			$default = array();
			$default[$board_config['run_stats_query_option']] = 'selected="selected"';
			$run_stats_query_option = '<select name="run_stats_query_option" size="1" onchange="SetQueryOption();" class="gensmall">
				<option value="0" ' . $default[0] . '>&nbsp;'.$lang['no_queries'].'</option>
				<option value="1" ' . $default[1] . '>&nbsp;'.$lang['queries_order_execution'].'</option>
				<option value="2" ' . $default[2] . '>&nbsp;'.$lang['queries_order_file_execution'].'</option>
				<option value="3" ' . $default[3] . '>&nbsp;'.$lang['queries_order_files_line'].'</option>
				</select>';
			$run_stats_redirect = get_address();
			$run_stats_hidden_fields = get_hidden_fields();
			$template->assign_vars(array(
				'RUN_STATS_REDIRECT' => $run_stats_redirect,
				'RUN_STATS_QUERY_OPTION' => $run_stats_query_option,
				'RUN_STATS_HIDDEN_FIELDS' => $run_stats_hidden_fields,

			));
			$template->assign_block_vars('switch_run_stats_show_prefs', array());
		}
		// end mod addon to run stats mod
		$template->assign_vars(array(
			'L_STAT_PAGE_DUR' => sprintf($lang['Stat_surround'], implode($lang['Stat_sep'], $duration)),
			'L_STAT_PARTS' => sprintf($lang['Stat_surround'], implode($lang['Stat_sep'], $parts)),
			'L_STAT_QUERIES' => sprintf($lang['Stat_surround'], implode($lang['Stat_sep'], $queries)),
			'L_STAT_SETUP' => empty($setup) ? '' : sprintf($lang['Stat_surround'], implode($lang['Stat_sep'], $setup)),
//			'L_STAT_REQUEST' => $lang['Stat_request'],
		));
		$template->assign_block_vars('stat_run_table', array());

		// display actually
		$template->set_filenames(array('run_stats' => 'run_stats_box.tpl'));
		$template->assign_var_from_handle('RUN_STATS_BOX', 'run_stats');
	}
}

?>
