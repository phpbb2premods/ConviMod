<?php
/***************************************************************************
 *                             (admin) index.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: index.php,v 1.40.2.5 2003/08/03 11:50:51 acydburn Exp $
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

//
// Load default header
//
$no_page_header = TRUE;
$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

	// New ConviMod Version?
	$info_check = $board_config['convimod_version'];
    	$picture = 'acp/images/unknow.png';
	$lf = "\r\n";
	$errno = '';
	$errstr = $info_version = '';

	if ($fsock = @fsockopen('demo.ezcom-fr.com', 80, $errno, $errstr, 10))
	{
		@fputs($fsock, "GET /premod_version_check/convimod_versions.dta HTTP/1.1\r\n");
		@fputs($fsock, "HOST: demo.ezcom-fr.com\r\n");
		@fputs($fsock, "Connection: close\r\n\r\n");

		$get_info1 = false;
		while ( !@feof($fsock) )
		{
			if ( $get_info1 || (($get_info1 = @fgets($fsock, 1024) == $lf) && !@feof($fsock)) )
			{
				$info_version .= @fread($fsock, 1024);
			}
		}
		@fclose($fsock);

		$picture = (substr($info_version, 19, 5) <= $info_check) ? 'acp/images/noupdates.png' : 'acp/images/updates.png';
}
else
{
	$picture = $errstr ? 'acp/images/unknow.png' : 'acp/images/unknow.png';
}

$header = '<html>
					<head>
					<title>ConviMod ACP</title>
					<style type="text/css">
					<!--
						body{margin:0;}
					//-->
					</style>
					</head>
					<body background="acp/images/head.jpg"><table cellspacing="0" cellpadding="0" style="margin:0.0px;" border="0" width="98%"><tr><td align="left" style="vertical-align:top;"><img src="acp/images/header_left.jpg"></td><td align="right" style="vertical-align:center;"><a href="http://www.ezcom-fr.fr/viewtopic.php?t=6570" target="_blank"><img src="' . $picture . '" border="0"></a></td></tr></table></body>
					</html>';
echo $header;

?>
