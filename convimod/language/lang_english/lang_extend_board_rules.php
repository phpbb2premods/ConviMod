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
		'br_settings' => 'Board rules settings',

		'br_required' => 'Enable the obligation to read the rules',
		'br_required_exp' => 'Users <u>will have</u> to read and approve the rules, in order to continue their navigation on the board.',
		'br_topic_id' => 'Board rules topic',
		'br_topic_id_exp' => 'Enter here the topic id where stands your board rules.',
		'forum_id_no_rules' => 'Forum without restriction',
		'forum_id_no_rules_exp' => 'That forum doesn’t need the rules approvement.<br />Enter here that forum id.',
	));
}

// public part
$lang = array_merge($lang, array(
	'br_validated' => 'Thanks for reading the board rules.<br />Attention: now, moderators will penalize you, if you don’t respect them.',
	'br_validation_question' => 'Have you read the board rules, and approve them ?',
	'br_not_validated' => 'You have to read and approve the board rules, in order to posts new messages.',
	'br_redirect' => 'Click %shere%s to consult the board rules.',

	'br_validation_mistake' => 'An error has occured.<br />Unable to update the user information.',

	'Rules' => 'Rules',
	'User_validated_rules' => 'This user approved the board rules',
	'User_didnot_validated_rules' => 'This user didn’t approve the board rules',
));

?>