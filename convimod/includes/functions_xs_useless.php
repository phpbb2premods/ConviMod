<?php
/***************************************************************************
 *                            function_xs_useless.php
 *                            -----------------------
 *   begin                : 05 May 2001
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

function xsm_prepare_message($message)
{
	global $board_config;

	$html_entities_match = array('#&(?!(\#[0-9]+;))#', '#<#', '#>#');
	$html_entities_replace = array('&amp;', '&lt;', '&gt;');

	$allowed_html_tags = split(',', $board_config['allow_html_tags']);
	
	//
	// Clean up the message
	//
	$message = trim($message);

	$message = preg_replace($html_entities_match, $html_entities_replace, $message);

	return $message;
}

function xsm_unprepare_message($message)
{
	$unhtml_specialchars_match = array('#&gt;#', '#&lt;#', '#&quot;#', '#&amp;#');
	$unhtml_specialchars_replace = array('>', '<', '"', '&');

	return preg_replace($unhtml_specialchars_match, $unhtml_specialchars_replace, $message);
}

//
// Borrowed from bbcode.php and putting it here saves having to include the whole file
// 
function smilies_news($message)
{
	static $orig, $repl;

	if (!isset($orig))
	{
		global $db, $board_config;
		$orig = $repl = array();

		$sql = 'SELECT * FROM ' . SMILIES_TABLE;
		if( !$result = $db->sql_query($sql) )
		{
			message_die(GENERAL_ERROR, "Couldn't obtain smilies data", "", __LINE__, __FILE__, $sql);
		}
		$smilies = $db->sql_fetchrowset($result);

		if (count($smilies))
		{
			usort($smilies, 'smiley_news_sort');
		}

		for ($i = 0; $i < count($smilies); $i++)
		{
			$orig[] = "/(?<=.\W|\W.|^\W)" . phpbb_preg_quote($smilies[$i]['code'], "/") . "(?=.\W|\W.|\W$)/";
			$repl[] = '<img src="'. $board_config['smilies_path'] . '/' . $smilies[$i]['smile_url'] . '" alt="' . $smilies[$i]['emoticon'] . '" border="0" />';
		}
	}

	if (count($orig))
	{
		$message = preg_replace($orig, $repl, ' ' . $message . ' ');
		$message = substr($message, 1, -1);
	}
	
	return $message;
}

function smiley_news_sort($a, $b)
{
	if ( strlen($a['code']) == strlen($b['code']) )
	{
		return 0;
	}

	return ( strlen($a['code']) > strlen($b['code']) ) ? -1 : 1;
}

//
// Start XML functions
//
// Functions originally written by: Richard James Kendall (richard@richardjameskendall.com)
//
// Modified by UseLess
//
// xml_set_element_handler callback start_element_handler
//
function startElement($parser, $name, $attrs)
{  
	global $rss_channel, $currently_writing, $main;

	$name = strtolower($name);
	
	switch($name)
	{  
		case "rss":  
		case "rdf:rdf":  
		case "items":  
			$currently_writing = "";  
			break;  
	
		case "channel":  
			$main = "channel";  
			break;  
	
		case "image":  
			$main = "image";  
			$rss_channel["image"] = array();  
			break;  
	
		case "item":  
			$main = "items";  
			break;  
	
		default:  
			$currently_writing = $name;  
			break;  
	}  
}  
 
//
// xml_set_element_handler callback end_element_handler
//
function endElement($parser, $name)
{  
	global $rss_channel, $currently_writing, $item_counter;  

	$name = strtolower($name);
	
	$currently_writing = "";  
	if ($name == "item")
	{  
		$item_counter++;  
	}  
}  
 
//
// Set up the character data handler
//
function characterData($parser, $data)
{  
	global $rss_channel, $currently_writing, $main, $item_counter;  

	$main = strtolower($main);
	
	if ($currently_writing != "")
	{  
		switch($main)
		{  
			case "channel":  
				if (isset($rss_channel[$currently_writing]))
				{  
					$rss_channel[$currently_writing] .= $data;  
				}
				else
				{  
					$rss_channel[$currently_writing] = $data;  
				}  
				break;  
	
			case "image":  
				if (isset($rss_channel[$main][$currently_writing]))
				{  
					$rss_channel[$main][$currently_writing] .= $data;  
				}
				else
				{  
					$rss_channel[$main][$currently_writing] = $data;  
				}  
				break;  
	
			case "items":  
				if (isset($rss_channel[$main][$item_counter][$currently_writing]))
				{  
					$rss_channel[$main][$item_counter][$currently_writing] .= $data;  
				}
				else
				{  
					$rss_channel[$main][$item_counter][$currently_writing] = $data;  
				}  
				break;  
		}  
	}  
}  

?>