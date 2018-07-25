<?php
/** 
*
* @package quick_post_es_mod [french]
* @version $Id: lang_extend_qpes.php,v 1.0 10/06/2006 16:22 reddog Exp $
* @copyright (c) 2006 reddog - http://www.reddevboard.com/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
}

// admin part
if ($lang_extend_admin)
{
	$lang['qp_config_title'] = 'Configuration du MODule Quick Post ES';
	$lang['qp_config_title_desc'] = 'Vous pouvez g&eacute;rer ici les options du MODule Quick Post ES.';
	$lang['qp_config_updated'] = 'La configuration du MODule Quick Post ES a &eacute;t&eacute; mise &agrave; jour.';
	$lang['qp_click_return_config'] = 'Cliquez %sici%s pour retourner &agrave; la configuration du MODule Quick Post ES.';
	$lang['qp_user'] = 'membres:';
	$lang['qp_anon'] = 'invit&eacute;s:';
}

// main
$lang['qp_quick_post'] = 'R&eacute;ponse Rapide';
$lang['qp_settings'] = 'Options de la R&eacute;ponse Rapide';

// display
$lang['qp_quote_selected'] = 'S&eacute;lectionner une citation';
$lang['qp_quote_empty'] = 'Aucun texte s&eacute;lectionn&eacute;';
$lang['qp_options'] = 'Plus d\'options';
$lang['bbcode_e_help'] = 'Liste: ajouter une puce';

// fields
$lang['qp_enable'] = 'Activer la r&eacute;ponse rapide';
$lang['qp_enable_explain'] = 'activer/d&eacute;sactiver la r&eacute;ponse rapide sur le forum';
$lang['qp_show'] = 'Voir la r&eacute;ponse rapide';
$lang['qp_show_explain'] = 'Voir le bloc de r&eacute;ponse rapide ouvert par d&eacute;faut';
$lang['qp_subject'] = 'Activer le titre du sujet';
$lang['qp_subject_explain'] = 'permet de sp&eacute;cifier ou non un titre au message entr&eacute; dans la r&eacute;ponse rapide';
$lang['qp_bbcode'] = 'Activer les boutons bbcode';
$lang['qp_bbcode_explain'] = 'afficher ou non les boutons bbcode dans la r&eacute;ponse rapide';
$lang['qp_smilies'] = 'Activer les emotic&ocirc;nes';
$lang['qp_smilies_explain'] = 'afficher ou non les &eacute;motic&ocirc;nes dans la r&eacute;ponse rapide';
$lang['qp_more'] = 'Activer les options';
$lang['qp_more_explain'] = 'afficher ou non les options suppl&eacute;mentaires de la r&eacute;ponse rapide';

?>
