<?php
/** 
 * lang_who_posted.php
 * 
 * @package		who_posted
 * @author		eviL3 <evil@phpbbmodders.net>
 * @copyright	(c) 2006 - 2007 eviL3
 * @license		http://opensource.org/licenses/gpl-license.php GNU Public License
 * 
 */

/**
 * Check if $lang exists
 */
if( !$lang || !is_array($lang) )
{
	$lang = array();
}

/**
 * This is the language file for the "Who Posted" MOD
 */
$lang += array(
	'topic_not_exist'		=> 'Le sujet demand&eacute;e n\'existe pas',
	'whoposted_query_fail'		=> 'La question suivante a &eacute;chou&eacute; :',
	'whoposted_title'		=> 'Qui a post&eacute; ?',
	'whoposted_exp'			=> 'C\'est une liste de tous les membres qui ont post&eacute; dans ce sujet.',
	'whoposted_close'		=> 'Voir le sujet &amp; Fermer la fen&ecirc;tre',
);

?>
