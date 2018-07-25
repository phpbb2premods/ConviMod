<?php
//-- mod : run stats -----------------------------------------------------------
/***************************************************************************
 *                              page_tail.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: page_tail.php,v 1.27.2.4 2005/09/14 18:14:30 acydburn Exp $
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
	die('Hacking attempt');
}

global $do_gzip_compress;

//
// Show the overall footer.
//
$admin_link = ( $userdata['user_level'] == ADMIN ) ? '<a href="admin/index.' . $phpEx . '?sid=' . $userdata['session_id'] . '">' . $lang['Admin_panel'] . '</a><br /><br />' : '';

$template->set_filenames(array(
	'overall_footer' => ( empty($gen_simple_header) ) ? 'overall_footer.tpl' : 'simple_footer.tpl')
);

//Begin Lo-Fi Mod
$path_parts = pathinfo($_SERVER['PHP_SELF']);
$lofi = '<a href="' . append_sid($path_parts['basename'] . '?' . $_SERVER['QUERY_STRING'] .'&lofi=' . (empty($_COOKIE['lofi']) ? '1' : '0'))  . '">' . (empty($_COOKIE['lofi']) ? ($lang['Lofi']) : ($lang['Full_Version']) ) . '</a><br />';
$template->assign_vars(array(
	'L_LOFI' => $lang['Lofi'],
	'LOFI' => $lofi,
	'L_FULL_VERSION' => $lang['Full_Version'])
);
//End Lo-Fi Mod

$template->assign_vars(array(
	'CONVIMOD' => $lang['CONVIMOD'] . '<strong>' . $board_config['convimod_version'] . '</strong>',
	'CONVIMOD_VERSION' => $board_config['convimod_version'],
	'TRANSLATION_INFO' => (isset($lang['TRANSLATION_INFO'])) ? $lang['TRANSLATION_INFO'] : ((isset($lang['TRANSLATION'])) ? $lang['TRANSLATION'] : ''),
	'ADMIN_LINK' => $admin_link)
);

//-- mod : run stats -----------------------------------------------------------
//-- add
//start mod addon to run stats mod (and end mod too)...changed the next if statement to turn off stats unless
// DEBUG_RUN_STATS is defined
if ( empty($gen_simple_header) && defined('DEBUG') && defined('DEBUG_RUN_STATS')  )
{
	// send run stat (page generation, sql time, requests dump...)
	$stat_run = new stat_run_class(microtime());
	$stat_run->display();
}
//-- fin mod : run stats -------------------------------------------------------

$template->pparse('overall_footer');

//
// Close our DB connection.
//
$db->sql_close();

//
// Compress buffered output if required and send to browser
//
if ( $do_gzip_compress )
{
	//
	// Borrowed from php.net!
	//
	$gzip_contents = ob_get_contents();
	ob_end_clean();

	$gzip_size = strlen($gzip_contents);
	$gzip_crc = crc32($gzip_contents);

	$gzip_contents = gzcompress($gzip_contents, 9);
	$gzip_contents = substr($gzip_contents, 0, strlen($gzip_contents) - 4);

	echo "\x1f\x8b\x08\x00\x00\x00\x00\x00";
	echo $gzip_contents;
	echo pack('V', $gzip_crc);
	echo pack('V', $gzip_size);
}

exit;

?>
