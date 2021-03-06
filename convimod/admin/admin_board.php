<?php
/***************************************************************************
 *                              admin_board.php
 *                            -------------------
 *   begin                : Thursday, Jul 12, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: admin_board.php,v 1.51.2.15 2006/02/10 22:19:01 grahamje Exp $
 *
 *
 ***************************************************************************/

define('IN_PHPBB', 1);

if( !empty($setmodules) )
{
	$file = basename(__FILE__);
	$module['General']['Configuration'] = $file;
	return;
}

//
// Let's set the root dir for phpBB
//
$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);
include($phpbb_root_path . 'includes/functions_selects.'.$phpEx);

//
// Pull all config data
//
$sql = "SELECT *
	FROM " . CONFIG_TABLE;
if(!$result = $db->sql_query($sql))
{
	message_die(CRITICAL_ERROR, "Could not query config information in admin_board", "", __LINE__, __FILE__, $sql);
}
else
{
	while( $row = $db->sql_fetchrow($result) )
	{
		$config_name = $row['config_name'];
		$config_value = $row['config_value'];
		$default_config[$config_name] = isset($HTTP_POST_VARS['submit']) ? str_replace("'", "\'", $config_value) : $config_value;
		
		$new[$config_name] = ( isset($HTTP_POST_VARS[$config_name]) ) ? $HTTP_POST_VARS[$config_name] : $default_config[$config_name];

		if ($config_name == 'cookie_name')
		{
			$new['cookie_name'] = str_replace('.', '_', $new['cookie_name']);
		}

		// Attempt to prevent a common mistake with this value,
		// http:// is the protocol and not part of the server name
		if ($config_name == 'server_name')
		{
			$new['server_name'] = str_replace('http://', '', $new['server_name']);
		}

		// Attempt to prevent a mistake with this value.
		if ($config_name == 'avatar_path')
		{
			$new['avatar_path'] = trim($new['avatar_path']);
			if (strstr($new['avatar_path'], "\0") || !is_dir($phpbb_root_path . $new['avatar_path']) || !is_writable($phpbb_root_path . $new['avatar_path']))
			{
				$new['avatar_path'] = $default_config['avatar_path'];
			}
		}

		if( isset($HTTP_POST_VARS['submit']) )
		{
//-- mod : Advanced Board Disable ----------------------------------------------
//-- add
			if ($config_name == 'board_disable_mode' && is_array($new['board_disable_mode']))
			{
				$new[$config_name] = implode(',', $new[$config_name]);
			}
//-- fin mod : Advanced Board Disable ------------------------------------------
			$sql = "UPDATE " . CONFIG_TABLE . " SET
				config_value = '" . str_replace("\'", "''", $new[$config_name]) . "'
				WHERE config_name = '$config_name'";
			if( !$db->sql_query($sql) )
			{
				message_die(GENERAL_ERROR, "Failed to update general configuration for $config_name", "", __LINE__, __FILE__, $sql);
			}
		}
	}

	if( isset($HTTP_POST_VARS['submit']) )
	{
		$message = $lang['Config_updated'] . "<br /><br />" . sprintf($lang['Click_return_config'], "<a href=\"" . append_sid("admin_board.$phpEx") . "\">", "</a>") . "<br /><br />" . sprintf($lang['Click_return_admin_index'], "<a href=\"" . append_sid("index.$phpEx?pane=right") . "\">", "</a>");

		message_die(GENERAL_MESSAGE, $message);
	}
}

$style_select = style_select($new['default_style'], 'default_style', "../templates");
$lang_select = language_select($new['default_lang'], 'default_lang', "language");
$timezone_select = tz_select($new['board_timezone'], 'board_timezone');

//-- mod : Advanced Board Disable -------------------------------------
//-- delete
/* MOD
$disable_board_yes = ( $new['board_disable'] ) ? "checked=\"checked\"" : "";
$disable_board_no = ( !$new['board_disable'] ) ? "checked=\"checked\"" : "";
MOD */
//-- fin mod : Advanced Board Disable ---------------------------------

$cookie_secure_yes = ( $new['cookie_secure'] ) ? "checked=\"checked\"" : "";
$cookie_secure_no = ( !$new['cookie_secure'] ) ? "checked=\"checked\"" : "";

$html_tags = $new['allow_html_tags'];

$override_user_style_yes = ( $new['override_user_style'] ) ? "checked=\"checked\"" : "";
$override_user_style_no = ( !$new['override_user_style'] ) ? "checked=\"checked\"" : "";

$html_yes = ( $new['allow_html'] ) ? "checked=\"checked\"" : "";
$html_no = ( !$new['allow_html'] ) ? "checked=\"checked\"" : "";

$bbcode_yes = ( $new['allow_bbcode'] ) ? "checked=\"checked\"" : "";
$bbcode_no = ( !$new['allow_bbcode'] ) ? "checked=\"checked\"" : "";

$activation_none = ( $new['require_activation'] == USER_ACTIVATION_NONE ) ? "checked=\"checked\"" : "";
$activation_user = ( $new['require_activation'] == USER_ACTIVATION_SELF ) ? "checked=\"checked\"" : "";
$activation_admin = ( $new['require_activation'] == USER_ACTIVATION_ADMIN ) ? "checked=\"checked\"" : "";

//-- mod : Admin Registration Notify ------------------------------
// add
$registration_notify_none = ( $new['registration_notify'] == USER_REGISTRATION_NOTIFY_NONE ) ? "checked=\"checked\"" : "";
$registration_notify_mod = ( $new['registration_notify'] == USER_REGISTRATION_NOTIFY_MOD ) ? "checked=\"checked\"" : "";
$registration_notify_admin = ( $new['registration_notify'] == USER_REGISTRATION_NOTIFY_ADMIN ) ? "checked=\"checked\"" : "";
//-- fin mod : Admin Registration Notify --------------------------

//-- mod : Photo Visual Confirmation ----------------------------------------------
//-- replace
/* MOD
$confirm_yes = ($new['enable_confirm']) ? 'checked="checked"' : '';
$confirm_no = (!$new['enable_confirm']) ? 'checked="checked"' : '';
MOD */
//-- add
$confirm_photos = ($new['enable_confirm'] == VISUAL_CONFIRM_PHOTOS) ? 'checked="checked"' : '';
$confirm_digits = ($new['enable_confirm'] == VISUAL_CONFIRM_DIGITS) ? 'checked="checked"' : '';
$confirm_disable = ($new['enable_confirm'] == VISUAL_CONFIRM_DISABLE) ? 'checked="checked"' : '';

if (!extension_loaded("gd")) {
	$visual_explain = $lang['Visual_confirm_explain_nogd'];
} else {
	$visual_explain = $lang['Visual_confirm_explain'];
	$template->assign_block_vars('switch_enable_photos', array());
}
//-- fin mod : Photo Visual Confirmation ----------------------------------------

$allow_autologin_yes = ($new['allow_autologin']) ? 'checked="checked"' : '';
$allow_autologin_no = (!$new['allow_autologin']) ? 'checked="checked"' : '';

$board_email_form_yes = ( $new['board_email_form'] ) ? "checked=\"checked\"" : "";
$board_email_form_no = ( !$new['board_email_form'] ) ? "checked=\"checked\"" : "";

$gzip_yes = ( $new['gzip_compress'] ) ? "checked=\"checked\"" : "";
$gzip_no = ( !$new['gzip_compress'] ) ? "checked=\"checked\"" : "";

$privmsg_on = ( !$new['privmsg_disable'] ) ? "checked=\"checked\"" : "";
$privmsg_off = ( $new['privmsg_disable'] ) ? "checked=\"checked\"" : "";

$prune_yes = ( $new['prune_enable'] ) ? "checked=\"checked\"" : "";
$prune_no = ( !$new['prune_enable'] ) ? "checked=\"checked\"" : "";

// start mod addon to run stats mod ... added the following block of code
$run_stats_enable_yes = ( $new['run_stats_enable'] ) ? "checked=\"checked\"" : "";
$run_stats_enable_no = ( !$new['run_stats_enable'] ) ? "checked=\"checked\"" : "";

$run_stats_show_reg_users_yes = ( $new['run_stats_show_reg_users'] ) ? "checked=\"checked\"" : "";
$run_stats_show_reg_users_no = ( !$new['run_stats_show_reg_users'] ) ? "checked=\"checked\"" : "";

$run_stats_warn_time = $new['run_stats_warn_time'];
// end mod addon to run stats mod

$smile_yes = ( $new['allow_smilies'] ) ? "checked=\"checked\"" : "";
$smile_no = ( !$new['allow_smilies'] ) ? "checked=\"checked\"" : "";

$sig_yes = ( $new['allow_sig'] ) ? "checked=\"checked\"" : "";
$sig_no = ( !$new['allow_sig'] ) ? "checked=\"checked\"" : "";

$namechange_yes = ( $new['allow_namechange'] ) ? "checked=\"checked\"" : "";
$namechange_no = ( !$new['allow_namechange'] ) ? "checked=\"checked\"" : "";

$annonce_globale_index_yes = ( $new['annonce_globale_index'] ) ? 'checked="checked"' : '';
$annonce_globale_index_no = ( !$new['annonce_globale_index'] ) ? 'checked="checked"' : '';

// crewstyle's mod : Simple Split Topic Type
$simple_split_topic_type_yes = ( $new['simple_split_topic_type'] ) ? 'checked="checked"' : '';
$simple_split_topic_type_no = ( !$new['simple_split_topic_type'] ) ? 'checked="checked"' : '';
// crewstyle's mod : Simple Split Topic Type

$avatars_local_yes = ( $new['allow_avatar_local'] ) ? "checked=\"checked\"" : "";
$avatars_local_no = ( !$new['allow_avatar_local'] ) ? "checked=\"checked\"" : "";
$avatars_remote_yes = ( $new['allow_avatar_remote'] ) ? "checked=\"checked\"" : "";
$avatars_remote_no = ( !$new['allow_avatar_remote'] ) ? "checked=\"checked\"" : "";
$avatars_upload_yes = ( $new['allow_avatar_upload'] ) ? "checked=\"checked\"" : "";
$avatars_upload_no = ( !$new['allow_avatar_upload'] ) ? "checked=\"checked\"" : "";

$smtp_yes = ( $new['smtp_delivery'] ) ? "checked=\"checked\"" : "";
$smtp_no = ( !$new['smtp_delivery'] ) ? "checked=\"checked\"" : "";

$complex_acp_pw_yes = ( $new['complex_acp_pw'] ) ? "checked=\"checked\"" : "";
$complex_acp_pw_no = ( !$new['complex_acp_pw'] ) ? "checked=\"checked\"" : "";

//-- mod : Advanced Board Disable ----------------------------------------------
//-- add
$board_disable_mode_select = disable_mode_select($new['board_disable_mode']);
$board_disable_yes = ($new['board_disable']) ? ' checked="checked"' : '';
$board_disable_no = (!$new['board_disable']) ? ' checked="checked"' : '';
//-- fin mod : Advanced Board Disable ------------------------------------------

$template->set_filenames(array(
	"body" => "admin/board_config_body.tpl")
);

//-- mod : birthday ------------------------------------------------------------
//-- add
$bday_fields = array(
	'bday_show' => $new['bday_show'],
	'bday_wishes' => $new['bday_wishes'],
	'bday_require' => $new['bday_require'],
	'bday_lock' => $new['bday_lock'],
	'bday_lookahead' => $new['bday_lookahead'],
	'bday_min' => $new['bday_min'],
	'bday_max' => $new['bday_max'],
	'bday_zodiac' => $new['bday_zodiac'],
);
$birthday->display_config($bday_fields);
//-- fin mod : birthday --------------------------------------------------------

//
// Escape any quotes in the site description for proper display in the text
// box on the admin page 
//
$new['site_desc'] = str_replace('"', '&quot;', $new['site_desc']);
$new['sitename'] = str_replace('"', '&quot;', strip_tags($new['sitename']));
$template->assign_vars(array(
	'S_CONFIG_ACTION' => append_sid("admin_board.$phpEx"),

	// start mod addon to run stats mod...added the following lines to give run stats options for template
	'L_RUN_STATS' => $lang['Run_stats'],
	'L_RUN_STATS_ENABLE' => $lang['Run_stats_enable'],
	'L_RUN_STATS_ENABLE_EXPLAIN' => $lang['Run_stats_enable_explain'],
	'L_RUN_STATS_SHOW_REG_USERS' => $lang['Run_stats_show_reg_users'],
	'L_RUN_STATS_SHOW_REG_USERS_EXPLAIN' => $lang['Run_stats_show_reg_users_explain'],
	'L_RUN_STATS_WARN_TIME' => $lang['Run_stats_warn_time'],
	'L_RUN_STATS_WARN_TIME_EXPLAIN' => $lang['Run_stats_warn_time_explain'],
	'RUN_STATS_ENABLE_YES' => $run_stats_enable_yes,
	'RUN_STATS_ENABLE_NO' => $run_stats_enable_no,
	'RUN_STATS_SHOW_REG_USERS_YES' => $run_stats_show_reg_users_yes,
	'RUN_STATS_SHOW_REG_USERS_NO' => $run_stats_show_reg_users_no,
	'RUN_STATS_WARN_TIME' => $run_stats_warn_time,
	//end mod addon to run stats mod

	'L_YES' => $lang['Yes'],
	'L_NO' => $lang['No'],
	'L_CONFIGURATION_TITLE' => $lang['General_Config'],
	'L_CONFIGURATION_EXPLAIN' => $lang['Config_explain'],
	'L_GENERAL_SETTINGS' => $lang['General_settings'],
	'L_SERVER_NAME' => $lang['Server_name'], 
	'L_SERVER_NAME_EXPLAIN' => $lang['Server_name_explain'], 
	'L_SERVER_PORT' => $lang['Server_port'], 
	'L_SERVER_PORT_EXPLAIN' => $lang['Server_port_explain'], 
	'L_SCRIPT_PATH' => $lang['Script_path'], 
	'L_SCRIPT_PATH_EXPLAIN' => $lang['Script_path_explain'], 
	'L_SITE_NAME' => $lang['Site_name'],
	'L_SITE_DESCRIPTION' => $lang['Site_desc'],
//-- mod : Advanced Board Disable --------------------------------
//-- delete
/* MOD
	'L_DISABLE_BOARD' => $lang['Board_disable'], 
	'L_DISABLE_BOARD_EXPLAIN' => $lang['Board_disable_explain'],
MOD */
//-- fin mod : Advanced Board Disable ---------------------------- 
	'L_ACCT_ACTIVATION' => $lang['Acct_activation'], 
//-- mod : Admin Registration Notify ------------------------------
// add
	'L_REGISTRATION_NOTIFY' => $lang['Registration_notify'],
	'L_MOD' => $lang['Moderator'],
//-- fin mod : Admin Registration Notify --------------------------
	'L_NONE' => $lang['Acc_None'], 
	'L_USER' => $lang['Acc_User'], 
	'L_ADMIN' => $lang['Acc_Admin'], 
	'L_VISUAL_CONFIRM' => $lang['Visual_confirm'], 
//-- mod : Photo Visual Confirmation ----------------------------------------------
//-- replace
/* MOD
	"L_VISUAL_CONFIRM_EXPLAIN" => $lang['Visual_confirm_explain'], 
MOD */
//-- add
	"L_VISUAL_CONFIRM_EXPLAIN" => $visual_explain,
	"L_VISUAL_CONFIRM_PHOTOS" => $lang['Visual_confirm_photos'],
	"L_VISUAL_CONFIRM_DIGITS" => $lang['Visual_confirm_digits'],
	"L_VISUAL_CONFIRM_DISABLE" => $lang['Visual_confirm_disable'],
//-- fin mod : Photo Visual Confirmation ----------------------------------------
	'L_ALLOW_AUTOLOGIN' => $lang['Allow_autologin'],
	'L_ALLOW_AUTOLOGIN_EXPLAIN' => $lang['Allow_autologin_explain'],
	'L_AUTOLOGIN_TIME' => $lang['Autologin_time'],
	'L_AUTOLOGIN_TIME_EXPLAIN' => $lang['Autologin_time_explain'],
	'L_COOKIE_SETTINGS' => $lang['Cookie_settings'], 
	'L_COOKIE_SETTINGS_EXPLAIN' => $lang['Cookie_settings_explain'], 
	'L_COOKIE_DOMAIN' => $lang['Cookie_domain'],
	'L_COOKIE_NAME' => $lang['Cookie_name'], 
	'L_COOKIE_PATH' => $lang['Cookie_path'], 
	'L_COOKIE_SECURE' => $lang['Cookie_secure'], 
	'L_COOKIE_SECURE_EXPLAIN' => $lang['Cookie_secure_explain'], 
	'L_SESSION_LENGTH' => $lang['Session_length'], 
	'L_PRIVATE_MESSAGING' => $lang['Private_Messaging'], 
	'L_INBOX_LIMIT' => $lang['Inbox_limits'], 
	'L_SENTBOX_LIMIT' => $lang['Sentbox_limits'], 
	'L_SAVEBOX_LIMIT' => $lang['Savebox_limits'], 
	'L_DISABLE_PRIVATE_MESSAGING' => $lang['Disable_privmsg'], 
	'L_ENABLED' => $lang['Enabled'], 
	'L_DISABLED' => $lang['Disabled'], 
	'L_ABILITIES_SETTINGS' => $lang['Abilities_settings'],
	'L_MAX_POLL_OPTIONS' => $lang['Max_poll_options'],
	'L_FLOOD_INTERVAL' => $lang['Flood_Interval'],
	'MAX_SUBFORUMS' => $new['max_subforums'],
	'L_FLOOD_INTERVAL_EXPLAIN' => $lang['Flood_Interval_explain'], 
	'L_SEARCH_FLOOD_INTERVAL' => $lang['Search_Flood_Interval'],
	'L_SEARCH_FLOOD_INTERVAL_EXPLAIN' => $lang['Search_Flood_Interval_explain'], 

	'L_COMPLEX_ACP_PW' => $lang['Complex_ACP_PW'],
	'COMPLEX_ACP_PW_YES' => $complex_acp_pw_yes,
	'COMPLEX_ACP_PW_NO' => $complex_acp_pw_no,

//-- mod : convimod premodded version --------------------------------------------
//-- add
	'L_SMILEY_CONFIG' => $lang['Smiley_Config'],
	'L_DIV_SETTINGS' => $lang['Div_Settings'],
//-- fin mod : convimod premodded version ----------------------------------------

	'L_MAX_LOGIN_ATTEMPTS'			=> $lang['Max_login_attempts'],
	'L_MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> $lang['Max_login_attempts_explain'],
	'L_LOGIN_RESET_TIME'			=> $lang['Login_reset_time'],
	'L_LOGIN_RESET_TIME_EXPLAIN'	=> $lang['Login_reset_time_explain'],
	'MAX_LOGIN_ATTEMPTS'			=> $new['max_login_attempts'],
	'LOGIN_RESET_TIME'				=> $new['login_reset_time'],

	'L_BOARD_EMAIL_FORM' => $lang['Board_email_form'], 
	'L_BOARD_EMAIL_FORM_EXPLAIN' => $lang['Board_email_form_explain'], 
//-- mod : resize posted images based on max width -----------------------------
//-- add
  	'L_IMAGES_MAX_SIZE' => $lang['Images_max_size'],
  	'L_IMAGES_MAX_SIZE_EXPLAIN' => $lang['Images_max_size_explain'],
  	'IMAGES_MAX_SIZE' => $new['images_max_size'],
//-- fin mod : resize posted images based on max width -------------------------
	'L_MAX_SUBFORUMS_SETTING' => $lang['Max_subforums_setting'],
	'L_MAX_SUBFORUMS' => $lang['Max_subforums'],
	'L_MAX_SUBFORUMS_EXPLAIN' => $lang['Max_subforums_explain'],
	'L_TOPICS_PER_PAGE' => $lang['Topics_per_page'],
	'L_POSTS_PER_PAGE' => $lang['Posts_per_page'],
	'L_HOT_THRESHOLD' => $lang['Hot_threshold'],
	'L_DEFAULT_STYLE' => $lang['Default_style'],
	'L_OVERRIDE_STYLE' => $lang['Override_style'],
	'L_OVERRIDE_STYLE_EXPLAIN' => $lang['Override_style_explain'],
//-- mod : Adjustable board width ----------------------------------------------
//-- add
	"L_FORUM_WIDTH" => $lang['Forum_width'],
	"L_FORUM_WIDTH_EXPLAIN" => $lang['Forum_width_explain'],
//-- fin mod : Adjustable board width ------------------------------------------
	'L_DEFAULT_LANGUAGE' => $lang['Default_language'],
	'L_DATE_FORMAT' => $lang['Date_format'],
	'L_SYSTEM_TIMEZONE' => $lang['System_timezone'],
	'L_ENABLE_GZIP' => $lang['Enable_gzip'],
	'L_ENABLE_PRUNE' => $lang['Enable_prune'],
// Start add - regles MOD
	'L_REGLES_TOPIC' => $lang['regles_topic'],
	'L_REGLES_EXPLAIN' => $lang['regles_explain'],
	'L_REGLES_FORUM_PROTECT' => $lang['regles_forum_protect'],
	'L_REGLES_PROTECT_EXPLAIN' => $lang['regles_protect_explain'],
	'L_REGLES_REQUIRED' => $lang['regles_required'],
// End add - regles MOD
	'L_ALLOW_HTML' => $lang['Allow_HTML'],
	'L_ALLOW_BBCODE' => $lang['Allow_BBCode'],
	'L_ALLOWED_TAGS' => $lang['Allowed_tags'],
	'L_ALLOWED_TAGS_EXPLAIN' => $lang['Allowed_tags_explain'],
	'L_ALLOW_SMILIES' => $lang['Allow_smilies'],
	'L_SMILIES_PATH' => $lang['Smilies_path'],
	'L_SMILIES_PATH_EXPLAIN' => $lang['Smilies_path_explain'],
	'L_ALLOW_SIG' => $lang['Allow_sig'],
	'L_MAX_SIG_LENGTH' => $lang['Max_sig_length'],
	'L_MAX_SIG_LENGTH_EXPLAIN' => $lang['Max_sig_length_explain'],
	'L_ALLOW_NAME_CHANGE' => $lang['Allow_name_change'],
	'L_ANNONCE_GLOBALE_SETTING' => $lang['Global_Announce_setting'],
	'L_ANNONCE_GLOBALE_INDEX' => $lang['Annonce_Globale_Index'],
// crewstyle's mod : Simple Split Topic Type
	'L_SIMPLE_SPLIT_TOPIC_TYPE_SETTING' => $lang['Simple_split_topic_type_setting'],
	'L_SIMPLE_SPLIT_TOPIC_TYPE' => $lang['Simple_split_topic_type'],
// crewstyle's mod : Simple Split Topic Type
	'L_AVATAR_SETTINGS' => $lang['Avatar_settings'],
	'L_ALLOW_LOCAL' => $lang['Allow_local'],
	'L_ALLOW_REMOTE' => $lang['Allow_remote'],
	'L_ALLOW_REMOTE_EXPLAIN' => $lang['Allow_remote_explain'],
	'L_ALLOW_UPLOAD' => $lang['Allow_upload'],
	'L_MAX_FILESIZE' => $lang['Max_filesize'],
	'L_MAX_FILESIZE_EXPLAIN' => $lang['Max_filesize_explain'],
	'L_MAX_AVATAR_SIZE' => $lang['Max_avatar_size'],
	'L_MAX_AVATAR_SIZE_EXPLAIN' => $lang['Max_avatar_size_explain'],
	'L_AVATAR_STORAGE_PATH' => $lang['Avatar_storage_path'],
	'L_AVATAR_STORAGE_PATH_EXPLAIN' => $lang['Avatar_storage_path_explain'],
	'L_AVATAR_GALLERY_PATH' => $lang['Avatar_gallery_path'],
	'L_AVATAR_GALLERY_PATH_EXPLAIN' => $lang['Avatar_gallery_path_explain'],
	'L_COPPA_SETTINGS' => $lang['COPPA_settings'],
	'L_COPPA_FAX' => $lang['COPPA_fax'],
	'L_COPPA_MAIL' => $lang['COPPA_mail'],
	'L_COPPA_MAIL_EXPLAIN' => $lang['COPPA_mail_explain'],
	'L_EMAIL_SETTINGS' => $lang['Email_settings'],
	'L_ADMIN_EMAIL' => $lang['Admin_email'],
	'L_EMAIL_SIG' => $lang['Email_sig'],
	'L_EMAIL_SIG_EXPLAIN' => $lang['Email_sig_explain'],
	'L_USE_SMTP' => $lang['Use_SMTP'],
	'L_USE_SMTP_EXPLAIN' => $lang['Use_SMTP_explain'],
	'L_SMTP_SERVER' => $lang['SMTP_server'], 
	'L_SMTP_USERNAME' => $lang['SMTP_username'], 
	'L_SMTP_USERNAME_EXPLAIN' => $lang['SMTP_username_explain'], 
	'L_SMTP_PASSWORD' => $lang['SMTP_password'], 
	'L_SMTP_PASSWORD_EXPLAIN' => $lang['SMTP_password_explain'], 
	'L_SUBMIT' => $lang['Submit'], 
	'L_RESET' => $lang['Reset'], 

//-- mod : approve board rules -------------------------------------------------
//-- add
	'L_BOARD_RULES_SETTINGS' => $lang['br_settings'],

	'L_BR_REQUIRED' => $lang['br_required'],
	'L_BR_REQUIRED_EXP' => $lang['br_required_exp'],
	'BR_REQUIRED_YES' => $new['br_required'] ? 'checked="checked"' : '',
	'BR_REQUIRED_NO' => !$new['br_required'] ? 'checked="checked"' : '',

	'L_BR_TOPIC_ID' => $lang['br_topic_id'],
	'L_BR_TOPIC_ID_EXP' => $lang['br_topic_id_exp'],
	'BR_TOPIC_ID' => (int) $new['br_topic_id'],

	'L_FORUM_ID_NO_RULES' => $lang['forum_id_no_rules'],
	'L_FORUM_ID_NO_RULES_EXP' => $lang['forum_id_no_rules_exp'],
	'FORUM_ID_NO_RULES' => (int) $new['forum_id_no_rules'],
//-- fin mod : approve board rules ---------------------------------------------

	'SERVER_NAME' => $new['server_name'], 
	'SCRIPT_PATH' => $new['script_path'], 
	'SERVER_PORT' => $new['server_port'], 
	'SITENAME' => $new['sitename'],
	'SITE_DESCRIPTION' => $new['site_desc'], 
//-- mod : Advanced Board Disable ----------------------------------------------
//-- delete
/*MOD
	'S_DISABLE_BOARD_YES' => $disable_board_yes,
	'S_DISABLE_BOARD_NO' => $disable_board_no,
MOD */
//-- fin mod : Advanced Board Disable ------------------------------------------
	'ACTIVATION_NONE' => USER_ACTIVATION_NONE, 
	'ACTIVATION_NONE_CHECKED' => $activation_none,
	'ACTIVATION_USER' => USER_ACTIVATION_SELF, 
	'ACTIVATION_USER_CHECKED' => $activation_user,
	'ACTIVATION_ADMIN' => USER_ACTIVATION_ADMIN, 
	'ACTIVATION_ADMIN_CHECKED' => $activation_admin,
//-- mod : Admin Registration Notify ------------------------------
// add
	'REGISTRATION_NOTIFY_NONE' => USER_REGISTRATION_NOTIFY_NONE,
	'REGISTRATION_NOTIFY_NONE_CHECKED' => $registration_notify_none,
	'REGISTRATION_NOTIFY_MOD' => USER_REGISTRATION_NOTIFY_MOD,
	'REGISTRATION_NOTIFY_MOD_CHECKED' => $registration_notify_mod,
	'REGISTRATION_NOTIFY_ADMIN' => USER_REGISTRATION_NOTIFY_ADMIN,
	'REGISTRATION_NOTIFY_ADMIN_CHECKED' => $registration_notify_admin,
//-- fin mod : Admin Registration Notify -------------------------- 
//-- mod : Photo Visual Confirmation ----------------------------------------------
//-- replace
/* MOD
	"CONFIRM_ENABLE" => $confirm_yes,
	"CONFIRM_DISABLE" => $confirm_no,
MOD */
//-- add
	'CONFIRM_PHOTOS' => $confirm_photos,
	'CONFIRM_DIGITS' => $confirm_digits,
	'CONFIRM_DISABLE' => $confirm_disable,
//-- fin mod : Photo Visual Confirmation ----------------------------------------
	'ALLOW_AUTOLOGIN_YES' => $allow_autologin_yes,
	'ALLOW_AUTOLOGIN_NO' => $allow_autologin_no,
	'AUTOLOGIN_TIME' => (int) $new['max_autologin_time'],
	'BOARD_EMAIL_FORM_ENABLE' => $board_email_form_yes, 
	'BOARD_EMAIL_FORM_DISABLE' => $board_email_form_no, 
	'MAX_POLL_OPTIONS' => $new['max_poll_options'], 
	'FLOOD_INTERVAL' => $new['flood_interval'],
	'SEARCH_FLOOD_INTERVAL' => $new['search_flood_interval'],
//-- mod : Adjustable board width -----------------------------------------------
//-- add
	'FORUM_WIDTH' => $new['forum_width'],
//-- fin mod : Adjustable board width -------------------------------------------
	'TOPICS_PER_PAGE' => $new['topics_per_page'],
	'POSTS_PER_PAGE' => $new['posts_per_page'],
	'HOT_TOPIC' => $new['hot_threshold'],
//-- mod : post description ----------------------------------------------------
//-- add
	'L_SUB_TITLE_LENGTH' => $lang['Sub_title_length'],
	'L_SUB_TITLE_LENGTH_EXPLAIN' => $lang['Sub_title_length_explain'],
	'SUB_TITLE_LENGTH' => $new['sub_title_length'],
//-- fin mod : post description ------------------------------------------------
	'STYLE_SELECT' => $style_select,
	'OVERRIDE_STYLE_YES' => $override_user_style_yes,
	'OVERRIDE_STYLE_NO' => $override_user_style_no,
	'LANG_SELECT' => $lang_select,
	'L_DATE_FORMAT_EXPLAIN' => $lang['Date_format_explain'],
	'DEFAULT_DATEFORMAT' => $new['default_dateformat'],
	'TIMEZONE_SELECT' => $timezone_select,
	'S_PRIVMSG_ENABLED' => $privmsg_on, 
	'S_PRIVMSG_DISABLED' => $privmsg_off, 
	'INBOX_LIMIT' => $new['max_inbox_privmsgs'], 
	'SENTBOX_LIMIT' => $new['max_sentbox_privmsgs'],
	'SAVEBOX_LIMIT' => $new['max_savebox_privmsgs'],
	'COOKIE_DOMAIN' => $new['cookie_domain'], 
	'COOKIE_NAME' => $new['cookie_name'], 
	'COOKIE_PATH' => $new['cookie_path'], 
	'SESSION_LENGTH' => $new['session_length'], 
	'S_COOKIE_SECURE_ENABLED' => $cookie_secure_yes, 
	'S_COOKIE_SECURE_DISABLED' => $cookie_secure_no, 
	'GZIP_YES' => $gzip_yes,
	'GZIP_NO' => $gzip_no,
	'PRUNE_YES' => $prune_yes,
	'PRUNE_NO' => $prune_no, 
	'HTML_TAGS' => $html_tags, 
	'HTML_YES' => $html_yes,
	'HTML_NO' => $html_no,
	'BBCODE_YES' => $bbcode_yes,
	'BBCODE_NO' => $bbcode_no,
	'SMILE_YES' => $smile_yes,
	'SMILE_NO' => $smile_no,
	'SIG_YES' => $sig_yes,
	'SIG_NO' => $sig_no,
	'SIG_SIZE' => $new['max_sig_chars'], 
	'NAMECHANGE_YES' => $namechange_yes,
	'NAMECHANGE_NO' => $namechange_no,
	'ANNONCE_GLOBALE_INDEX_YES' => $annonce_globale_index_yes,
	'ANNONCE_GLOBALE_INDEX_NO' => $annonce_globale_index_no,
// crewstyle's mod : Simple Split Topic Type
	'SIMPLE_SPLIT_TOPIC_TYPE_YES' => $simple_split_topic_type_yes,
	'SIMPLE_SPLIT_TOPIC_TYPE_NO' => $simple_split_topic_type_no,
// crewstyle's mod : Simple Split Topic Type
	'AVATARS_LOCAL_YES' => $avatars_local_yes,
	'AVATARS_LOCAL_NO' => $avatars_local_no,
	'AVATARS_REMOTE_YES' => $avatars_remote_yes,
	'AVATARS_REMOTE_NO' => $avatars_remote_no,
	'AVATARS_UPLOAD_YES' => $avatars_upload_yes,
	'AVATARS_UPLOAD_NO' => $avatars_upload_no,
	'AVATAR_FILESIZE' => $new['avatar_filesize'],
	'AVATAR_MAX_HEIGHT' => $new['avatar_max_height'],
	'AVATAR_MAX_WIDTH' => $new['avatar_max_width'],
	'AVATAR_PATH' => $new['avatar_path'], 
	'AVATAR_GALLERY_PATH' => $new['avatar_gallery_path'], 
	'SMILIES_PATH' => $new['smilies_path'], 
//-- mod : flags ---------------------------------------------------------------
//-- add
	'L_FLAGS_SETTING' => $lang['flags_setting'],
	'L_FLAGS_PATH' => $lang['flags_path'],
	'L_FLAGS_PATH_EXPLAIN' => $lang['flags_path_explain'],

	'FLAGS_PATH' => $new['flags_path'],
//-- fin mod : flags -----------------------------------------------------------
//-- mod : browsers list -------------------------------------------------------
//-- add
	'L_BROWSERS_SETTING' => $lang['browsers_setting'],
	'L_BROWSERS_PATH' => $lang['browsers_path'],
	'L_BROWSERS_PATH_EXPLAIN' => $lang['browsers_path_explain'],

	'BROWSERS_PATH' => $new['browsers_path'],
//-- fin mod : browsers list ---------------------------------------------------
	'INBOX_PRIVMSGS' => $new['max_inbox_privmsgs'], 
	'SENTBOX_PRIVMSGS' => $new['max_sentbox_privmsgs'], 
	'SAVEBOX_PRIVMSGS' => $new['max_savebox_privmsgs'], 
	'EMAIL_FROM' => $new['board_email'],
	'EMAIL_SIG' => $new['board_email_sig'],
	'SMTP_YES' => $smtp_yes,
	'SMTP_NO' => $smtp_no,
	'SMTP_HOST' => $new['smtp_host'],
	'SMTP_USERNAME' => $new['smtp_username'],
	'SMTP_PASSWORD' => $new['smtp_password'],
	'COPPA_MAIL' => $new['coppa_mail'],
//-- mod Advanced Board Disable -----------------------------------------------
//-- Modify
//	COPPA_FAX' => $new['coppa_fax'])
//-- add
	"COPPA_FAX" => $new['coppa_fax'],

	'L_BOARD_DISABLE' => $lang['Board_disable'],
	'L_BOARD_DISABLE_EXPLAIN' => $lang['Board_disable_explain'],
	'BOARD_DISABLE_YES' => $board_disable_yes,
	'BOARD_DISABLE_NO' => $board_disable_no,
	'L_BOARD_DISABLE_MODE' => $lang['Board_disable_mode'],
	'L_BOARD_DISABLE_MODE_EXPLAIN' => $lang['Board_disable_mode_explain'],
	'BOARD_DISABLE_MODE' => $board_disable_mode_select,
	'L_BOARD_DISABLE_MSG' => $lang['Board_disable_msg'],
	'L_BOARD_DISABLE_MSG_EXPLAIN' => $lang['Board_disable_msg_explain'],
	'BOARD_DISABLE_MSG' => htmlspecialchars($new['board_disable_msg']))
//-- fin mod : Advanced Board Disable ------------------------------------------
);

//-- mod : date format evolved -------------------------------------------------
//-- add
dateformat_select($new['default_dateformat']);
//-- fin mod : date format evolved ---------------------------------------------

$template->pparse("body");

include('./page_footer_admin.'.$phpEx);

?>
