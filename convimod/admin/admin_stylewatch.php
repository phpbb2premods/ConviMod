<?php
/***************************************************************************
 *                          admin_.php
 *                             -------------------
 *   begin                : 07th June 2005
 *   copyright            : (C) 2005 CBACK
 *   email                : webmaster@cback.de
 *   www                  : http://www.cback.de
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
	$module['Styles']['Style-Stats'] = $filename;

	return;
}

//
// Load Page Header
//
$no_page_header = TRUE;
$phpbb_root_path = './../';
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);

// OK hier gucken wir zuerst mal welche Themes installiert sind
$tnames = "SELECT * FROM " . THEMES_TABLE;

if ( !($tres = $db->sql_query($tnames)) )
  {
    message_die(GENERAL_ERROR, "Couldn't query user table", "", __LINE__, __FILE__, $sql);
  }

$arnum = 0;

while ( $tthemes = $db->sql_fetchrow($tres) )
  {
     // und schreiben diese dann in dieses Array hinein
     $themelist[$arnum][0] = $tthemes['themes_id'];
     $themelist[$arnum][1] = $tthemes['style_name'];
     $arnum++;
  }


// Und nun geht es an die Statistik
$superstring = '';
$tsql = "SELECT * FROM " . USERS_TABLE . " ORDER BY user_style";

if ( !($tresult = $db->sql_query($tsql)) )
  {
    message_die(GENERAL_ERROR, "Couldn't query user table", "", __LINE__, __FILE__, $sql);
  }

    $rcnum = 1;
while ( $trow = $db->sql_fetchrow($tresult) )
  {
    $stylecount = 0;
    while ($themelist[$stylecount][0] != '')
    {
      if ($trow['user_style'] == $themelist[$stylecount][0])
      {
        $ausgabename = $themelist[$stylecount][1];
      }

      $stylecount++;
    }
    // Und nun die Ausgabe
    if ($trow['username'] != 'Anonymous')
    {
      if ($rcnum == 1)
      {
      $superstring = $superstring . "<tr><td width=\"50%\" class=\"row1\">" . $trow['username'] . "</td><td width=\"50%\" class=\"row1\">" . $ausgabename . "</td></tr>";
      $rcnum++;
      }
      else
      {
      $superstring = $superstring . "<tr><td width=\"50%\" class=\"row2\">" . $trow['username'] . "</td><td width=\"50%\" class=\"row2\">" . $ausgabename . "</td></tr>";
      $rcnum = 1;
      }
    }
  }


$template->set_filenames(array(
	'body' => 'admin/admin_stylewatch.tpl'
	)
);

	$template->assign_vars(array(
        // Haupteinträge
        "C_STATISTIC" => $superstring)
	);

include('./page_header_admin.'.$phpEx);

$template->pparse('body');

include('./page_footer_admin.'.$phpEx);

?>
