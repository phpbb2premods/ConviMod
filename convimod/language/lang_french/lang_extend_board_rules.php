<?php
//
//	file: lang_extend_board_rules.php
//	author: ABDev, EzCom 2008
//	begin: 04/17/2008
//	version: 0.0.1 - 04/17/2008
//

if ( !defined('IN_PHPBB') )
{
	exit;
}

// admin part
if ( $lang_extend_admin )
{
	$lang = array_merge($lang, array(
		'br_settings' => 'Configuration de la charte du forum',

		'br_required' => 'Activer l\'obligation de lecture de la charte',
		'br_required_exp' => 'Les membres <u>devront</u> lire et accepter la charte pour continuer de naviguer sur le forum.',
		'br_topic_id' => 'Sujet de la charte du forum',
		'br_topic_id_exp' => 'Entrez ici le num&eacute;ro (ID) de sujet contenant la charte de votre forum.',
		'forum_id_no_rules' => 'Forum sans restriction',
		'forum_id_no_rules_exp' => 'Ce forum ne n&eacute;cessite pas l\'acceptation de la charte.<br />Entrez ici le num&eacute;ro (ID) de ce forum.',
	));
}

// public part
$lang = array_merge($lang, array(
	'br_validated' => 'Merci d\'avoir lu la charte du forum.<br />Attention: d&eacute;sormais, les mod&eacute;rateurs se feront un plaisir de vous sanctionner, si vous ne la respectez pas.',
	'br_validation_question' => 'Avez-vous lu la charte du forum, et l\'acceptez-vous ?',
	'br_not_validated' => 'Vous devez lire et accepter la charte du forum, afin de pouvoir &eacute;mettre de nouveaux messages.',
	'br_redirect' => 'Cliquez %sici%s pour consulter la charte du forum.',

	'br_validation_mistake' => 'Une erreur vient de se produire.<br />Impossible de mettre à jour les donn&eacute;es de l\{utilisateur.',

	'Rules' => 'Charte',
	'User_validated_rules' => 'Cet utilisateur a approuv&eacute; la charte du forum',
	'User_didnot_validated_rules' => 'Cet utilisateur n\'a pas approuv&eacute; la charte du forum',
));

?>
