<?php
//
//	file: language/lang_english/lang_extend_convimod_styles.php
//	author: Dragons
//	begin: 03/09/2006
//	version: 0.0.1 - 03/09/2006
//	license: http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
//

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

//------------------------------------------------------------------------------
// admin part
//------------------------------------------------------------------------------

if ( $lang_extend_admin )
{
	$lang['Lang_extend_convimod_style'] = 'ConviMod';
}

$lang['Lang_convimod'] = 'CoviMod';
$lang['Lang_convimod_explain'] = 'ConviMod is a preMODed based on functionality the purpose of which is to make a convivial board, it replaces GfMod';
$lang['version_dev_info'] = 'Last dev. version';

$lang['General_settings'] = 'General settings';
$lang['Abilities_settings'] = 'Abilities settings';
$lang['Security_settings'] = 'Security settings';
$lang['Suscribe_settings'] = 'Suscribe settings';
$lang['Time_settings'] = 'Time settings';
$lang['Messages_settings'] = 'Post settings';
$lang['Div_Settings'] = 'Other setting';
$lang['Smiley_Config'] = 'Smiley config';

// Maxi Simple Subforums MOD
$lang['Max_subforums_setting'] = 'Subforums setting';
$lang['Max_subforums'] = 'Subforums Total';
$lang['Max_subforums_explain'] = 'Maximum number of Subforums to display on index';

// Forum Icon MOD
$lang['Forum_icon'] = 'Forum icon'; 
$lang['Forum_icon_explain'] = 'e.g. If your image is at <b>http://yourdomain/forum_path/images/forum_icon/test.gif</b><br /> then set it as <b>images/forum_icon/test.gif</b>'; 

// crewstyle's mod : Annonce Globale
$lang['Global_Announce_setting'] = 'Global Announce setting';
$lang['Global_Announce'] = 'Global Announce';
$lang['Annonce_Globale_Index'] = 'Display global announcement on the Index ?';
// crewstyle's mod : Annonce Globale

// crewstyle's mod : Simple Split Topic Type
$lang['Simple_split_topic_type_setting'] = 'Spit Topic Type Setting';
$lang['Simple_split_topic_type'] = 'Séparer les différents types de sujets sur le viewforum ?';
// crewstyle's mod : Simple Split Topic Type

$lang['Rank_img'] = 'Rank Image';

//-- Version Check ConviMod
//-- add
$lang['Latest_convimod_version_info'] = 'The latest available version is <b>ConviMod %s</b>.';
$lang['Current_convimod_version_info'] = 'You are running <b>ConviMod %s</b>.';
$lang['Version_convimod_information'] = 'ConviMod Version Information';
$lang['Version_convimod_up_to_date'] = 'Your installation is up to date, no updates are available for your version of ConviMod.';
$lang['Version_convimod_not_up_to_date'] = 'Your installation does <b>not</b> seem to be up to date. Updates are available for your version of ConviMod, please visit <a href="http://www.ezcom-fr.com" target="_new">http://www.ezcom-fr.com</a> to obtain the latest version.';
$lang['Post_donwload_convimod'] = 'For the latest information on updates to ConviMod, why not <a href="http://www.ezcom-fr.com/viewtopic.php?t=6570" target="_new">[Download] of ConviMod Official</a>.';

$lang['PHPBB'] = 'PHPBB';
$lang['PREMOD'] = 'ConviMod preMOD';
//-- fin Version Check ConviMod

//-- mod : cache version -------------------------------------------------------
//-- add
$lang['Version_check'] = 'Check for newest version';
//-- fin mod : cache version ---------------------------------------------------

//-- mod : forum as category ---------------------------------------------------
//-- add
$lang['forum_as_category'] = 'Consider this forum as being a subcategory';
//-- fin mod : forum as category -----------------------------------------------

//-- mod : resize posted images based on max width -----------------------------
//-- add
$lang['Images_max_size'] = 'Seize the maximum size in pixels';
$lang['Images_max_size_explain'] = 'Any image exceeding this value will be automatically reduced.';
$lang['Ims_setting'] = 'Seize the maximum size setting';
//-- fin mod : resize posted images based on max width -------------------------

//
// Admin Userlist Start
//
$lang['Userlist'] = 'User list';
$lang['Userlist_description'] = 'View a complete list of your users and perform various actions on them';

$lang['Add_group'] = 'Add to a Group';
$lang['Add_group_explain'] = 'Select which group to add the selected users to';

$lang['Open_close'] = 'Open/Close';
$lang['Active'] = 'Active';
$lang['Group'] = 'Group(s)';
$lang['Rank'] = 'Rank';
$lang['Last_activity'] = 'Last Activity';
$lang['Never'] = 'Never';
$lang['User_manage'] = 'Manage';
$lang['Find_all_posts'] = 'Find All Posts';

$lang['Select_one'] = 'Select One';
$lang['Ban'] = 'Ban';
$lang['Is_Banned'] = 'Banned!'; 
$lang['UnBan'] = 'Un-Ban';
$lang['Activate_deactivate'] = 'Activate/De-activate';
$lang['Select_All'] = 'Select All';
$lang['Deselect_All'] = 'Deselect All';

$lang['User_id'] = 'User id';
$lang['User_level'] = 'User Level';
$lang['Ascending'] = 'Ascending';
$lang['Descending'] = 'Descending';
$lang['Show'] = 'Show';
$lang['All'] = 'All';

$lang['Member'] = 'Member';
$lang['Pending'] = 'Pending';

$lang['Confirm_user_ban'] = 'Are you sure you want to ban the selected user(s)?';
$lang['Confirm_user_un_ban'] = 'Are you sure you want to unban the selected user(s)?';
$lang['Confirm_user_deleted'] = 'Are you sure you want to delete the selected user(s)?';

$lang['User_status_updated'] = 'User(s) status updated successfully!';
$lang['User_banned_successfully'] = 'User(s) banned successfully!';
$lang['User_un_banned_successfully'] = 'User(s) unbanned successfully!';
$lang['User_deleted_successfully'] = 'User(s) deleted successfully!';
$lang['User_add_group_successfully'] = 'User(s) added to group successfully!';

$lang['Click_return_userlist'] = 'Click %shere%s to return to the User List';
//
// Admin Userlist End
//

// MOD: ACP User Registration
$lang['Register_User'] = 'Register User';

$lang['Register_new_user'] = 'Register a New User';
$lang['ACP_User_explain'] = 'From this panel, you can register a new user to your board. Choose Simple Mode to add a user with just the basic information (username, e-mail address, and password). Or, you can choose Advanced Mode to specify as many registration details as you like.';
$lang['ACP_User_Simple'] = '%sSimple Mode%s'; // a href, /a tags or b, /b tags
$lang['ACP_User_Advanced'] = '%sAdvanced Mode%s'; // a href, /a tags or b, /b tags
$lang['Registration_options'] = 'Registration Options';
$lang['Registration_options_explain'] = 'This lets you set specific options to how the registration will be dealt with.';
$lang['Registration_send_email'] = 'Send E-Mail to New User';
$lang['User_validation_error'] = 'This user could not be registered. Either the username or e-mail address already exists, or they have been banned.';
$lang['No_user_in_db'] = 'Could not add the user to the database.';
$lang['ACP_new_user_added'] = 'The new user has been successfully added. You can %sView Their Profile%s.'; // a href, /a tags
$lang['Add_another_user'] = 'Click %sHere%s to add another user.'; // a href, /a tags
$lang['ACP_new_user_email'] = 'An administrator of %s has registered you as a new user on the board. The registration has been immediately activated. If you have any questions, please contact %s, the administrator who registered you.'; // Sitename, Admin Username
$lang['Add_to_groups'] = 'Add User to Groups';
$lang['Add_to_groups_explain'] = 'The new user will be automatically added to any usergroups that are checked here.';
$lang['No_group_list'] = 'Could not obtain group list.';
// END MOD: ACP User Registration

// Admin Registration Notify mod
$lang['Registration_notify'] = 'Activer la notification par e-mail lors de l\'enregistrement d\'un nouvel utilisateur';

//-- mod : Advanced Board Disable ----------------------------------------------
//-- add
//
// Advanced Board Disable
//
$lang['Board_disable'] = 'Disable board';
$lang['Board_disable_explain'] = 'This will deny access to the board for several user groups you can define below.';
$lang['Board_disable_mode'] = 'Disable board for...';
$lang['Board_disable_mode_explain'] = 'Here you can choose who isn\'t allowed to access the board when it\'s disabled. With Ctrl key pressed you can select more than one user group.';
$lang['Board_disable_mode_opt'] = array(ANONYMOUS => 'Guests', USER => 'Registered Users', MOD => 'Moderators', ADMIN => 'Administrators');
$lang['Board_disable_msg'] = 'Board disabled message';
$lang['Board_disable_msg_explain'] = 'This message will be shown when the board is disabled (empty message = phpBB default message).';
//-- fin mod : Advanced Board Disable ------------------------------------------

//-- mod : bot indexing mod ----------------------------------------------------
//-- add
	$lang['rcs_botcolor'] = 'Bots colour';
//-- fin mod : bot indexing mod ------------------------------------------------

$lang['Complex_ACP_PW'] = 'Password for ACP login must be different to normal password';
$lang['ACP_Password_mismatch'] = 'The ACP password does not match the confirmation!';
$lang['ACP_Password_match_pw'] = 'The ACP password matches the normal password, but you must enter a different one!';
$lang['ACP_password'] = 'Password for the Admin Panel';
$lang['ACP_password_confirm'] = 'Confirm the ACP Password';
$lang['ACP_password_explain'] = 'This password will be used to login into the Admin Panel. From now the normal password can not longer used to login the ACP.';
$lang['ACP_password_complex'] = '<br />Be sure, to enter a different password as your normal one!';

$lang['Ban_reason'] = 'Ban Reason';
$lang['Ban_reason_explain'] = 'If applicable, note the reason for the ban.  This message will be displayed when the visitor attempts to access the forums from a banned user, IP, or email address, rather than the default "You_been_banned" message.';

//-- mod : search data ---------------------------------------------------------
//-- add
//
// Search Phrases
//
$lang['Search_phrases'] = 'Search Phrases';
//-- fin mod : search data -----------------------------------------------------

//-- mod : IP Search -----------------------------------------------------------
//-- add
$lang['IP_Search'] = 'IP Search';
//-- fin mod : IP Search -------------------------------------------------------

//-- mod :  Overall forums permissions on one page ---------------------
//-- add
$lang['forum_list'] = 'Listing permissions for all forums';
$lang['forum_name'] = 'Forum Name';
//-- fin mod :  Overall forums permissions on one page -----------------

//-- mod : Forumtitle as weblink ---------------------------------------
//-- add
$lang['Forum_is_link'] = 'Change the forumtitle in a weblink';
$lang['Forum_weblink'] = 'Weblink ( inclusive HTTP:// )';
$lang['Forum_link_icon'] = 'Icon for this forum. This will replace the default icon in the forum index.<br />You can enter an image from your phpBB directories (without leading "/")<br />or an external link (Full path!).';
$lang['Forum_link_target'] = 'Link open a new window';
//-- fin mod : Forumtitle as weblink -----------------------------------

//-- mod : Clone Post ---------------------------------------------------------
//-- add
$lang['Cloneposts'] = 'Clone posts';
//-- fin mod : Clone Post -----------------------------------------------------

//-- mod : Reorder ACP Categories ---------------------------------------------
//-- add
$lang['Reorder_ACP_categories'] = "Reorder Categories";
$lang['ACP_cat_display'] = "Category Title";
$lang['ACP_cat_title'] = "Reorder ACP Categories";
$lang['ACP_cat_explain'] = "ACP Categories are the headings in the navigation list on the left hand pane. Use this form to change the order they are displayed in. Categories not explicitly ordered will be displayed alphabetically by internal identifier after the ordered ones.";
$lang['ACP_cat_moved'] = "The category was successfully moved.";
$lang['Reorder'] = "Re-Order";
$lang['Click_return_catadmin'] = 'Click %sHere%s to return to ACP Category Administration';
//-- fin mod : Reorder ACP Categories -----------------------------------------

//-- mod : Adjustable board width -----------------------------------------------
//-- add
$lang['Forum_width'] = 'Forum width';
$lang['Forum_width_explain'] = 'Changes the width of the entire board using % or pixels';
//-- fin mod : Adjustable board width -------------------------------------------

// Admin Session Logout
$lang['Admin_session_logout'] = 'Admin Logout';
// Admin Session Logout

//-- mod : Photo Visual Confirmation ----------------------------------------------
//-- replace
/* MOD
$lang['Visual_confirm_explain'] = 'Requires users enter a code defined by an image when registering.';
MOD */
//-- add
$lang['Visual_confirm_explain'] = 'Requires registering users to either recognize objects in photos, or recognize digits in an image.';
$lang['Visual_confirm_explain_nogd'] = 'Requires registering users to recognize digits in an image.  If you were to install the php GD extension, a photo-recognition mode would become available here.';
$lang['Visual_confirm_photos'] = 'Photos';
$lang['Visual_confirm_digits'] = 'Digits';
$lang['Visual_confirm_disable'] = 'None';
//-- fin mod : Photo Visual Confirmation ----------------------------------------

//
// RSS
//
$lang['rss_image'] = "RSS Image";
$lang['rss_image_exp'] = "This image will be shown in the RSS Reader. Enter a full path to the image.";
$lang['rss_config'] = "RSS Configuration";
$lang['rss_config_explain'] = "On this page you can change the RSS configuration.";
$lang['rss_max_topics'] = "Maxium number of topics in the RSS";
$lang['rss_config_updated'] = "The RSS Configuration is saved in database!";

//------------------------------------------------------------------------------
// main part
//------------------------------------------------------------------------------

//
// Corrections
//

// lang_main
// Profiles/Registration
$lang['Items_required'] = 'Items marked with a <span class="gensmallerror">*</span> are required unless stated otherwise.';
$lang['Admin_panel'] = 'Administration Panel';

//
// Add
//

// Style
$lang['Hello'] = 'Hello';
$lang['Never'] = 'Never';
$lang['Legend_display'] = 'Legend display';
$lang['Permissions'] = 'Permissions';
$lang['Back_to_bottom'] = 'Go to bottom';
$lang['Copyright'] = 'Copyright';
$lang['Edition'] = 'Edition';
$lang['Stats'] = 'Board Statistics';
$lang['Stats_online'] = 'Who Was Online Today';

// ConviMod
$lang['Please_ensure_convimod'] = 'Please ensure the <strong>install_convimod/</strong> directory is deleted';
$lang['Copy'] = 'Copyright';

//MOD Keep_unread
$lang['keep_post_unread_explain'] = 'Mark post as unread';
$lang['keep_unread_done'] = 'The post has been marked as unread.';
$lang['View_unread_posts'] = 'View unread posts';
$lang['No_unread_posts'] = 'You have no unread posts';
$lang['Search_new'] = 'View unread posts';

// Begin Simple Subforums MOD
$lang['Subforums'] = 'Subforums';
$lang['Subforums_new'] = 'Subforums (New Posts)';
// End Simple Subforums MOD

// Maxi Simple Subforums MOD
$lang['More'] = '[ Show more... ]';
$lang['More_HTML'] = 'View ALL Subforums';

// crewstyle's mod : Annonce Globale
$lang['Topic_Global_Announcement'] = '<b>Global Announce : </b>';
$lang['Post_Global_Announcement'] = 'Global Announce';
$lang['Post_Global_Announcements'] = 'Global Announces';
$lang['Post_Announcement'] = 'Announce';
// crewstyle's mod : Annonce Globale

// crewstyle's mod : Simple Split Topic Type
$lang['Topic_Global_Announcement'] = '<b>Global Announcement:</b>';
// crewstyle's mod : Simple Split Topic Type

//-- mod : ConviMod ------------------------------------------------------------
//-- add
$lang['Topic_Global_Announcement_img'] = 'Global Announce';
$lang['Topic_Announcement_img'] = 'Announce';
$lang['Topic_Sticky_img'] = 'Sticky';
$lang['Topic_Moved_img'] = 'Moved;';
$lang['Preview_sig'] = 'Preview signature';
$lang['Preview_sigprv'] = 'Signature\'s preview';
//-- fin mod : ConviMod --------------------------------------------------------

//-- mod : bbcode box reloaded -------------------------------------------------
//-- add
// acp
$lang['BBcode_Box'] = 'BBcode Box';
$lang['bbc_box_a_settings'] = 'Settings';
$lang['bbc_box_b_list'] = 'BBcode list';
$lang['bbc_box_c_manage'] = 'Manage';
// spoiler
$lang['bbcbxr_spoil'] = 'Spoiler';
$lang['bbcbxr_show'] = 'show';
$lang['bbcbxr_hide'] = 'hide';
// code expand
$lang['bbcbxr_expand'] = 'Expand';
$lang['bbcbxr_expand_more'] = 'Expand more';
$lang['bbcbxr_contract'] = 'Contract';
$lang['bbcbxr_select'] = 'Select all';
//-- fin mod : bbcode box reloaded ---------------------------------------------

$lang['Profile_see'] = 'Click %sHere%s to see your profile';

$lang['CONVIMOD'] = '<a href="http://www.ezcom-fr.com/" target="_rdv" class="copyright">ConviMod PreMOD</a>: ';

$lang['Merge'] = "Fusionner";
$lang['Merge_topic'] = "Fusionner le sujet";

//-- mod : addon hide for bbcbxr -----------------------------------------------
//-- add
$lang['Hide'] = 'Protected Message';
$lang['Hide_text'] = '--- If you are a *registered user* : you need to post in this topic to see the message ---';
$lang['Hide_in_quote'] = '--- phpBB : The Protected Message is not copied in this quote ---';
//-- fin mod : addon hide for bbcbxr -------------------------------------------

//-- mod : vAgreement Terms ----------------------------------------------------
//-- delete
//	$lang['Reg_agreement'] = 'While the administrators and moderators of this forum will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every message. Therefore you acknowledge that all posts made to these forums express the views and opinions of the author and not the administrators, moderators or webmaster (except for posts by these people) and hence will not be held liable.<br /><br />You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-oriented or any other material that may violate any applicable laws. Doing so may lead to you being immediately and permanently banned (and your service provider being informed). The IP address of all posts is recorded to aid in enforcing these conditions. You agree that the webmaster, administrator and moderators of this forum have the right to remove, edit, move or close any topic at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster, administrator and moderators cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br /><br />This forum system uses cookies to store information on your local computer. These cookies do not contain any of the information you have entered above; they serve only to improve your viewing pleasure. The e-mail address is used only for confirming your registration details and password (and for sending new passwords should you forget your current one).<br /><br />By clicking Register below you agree to be bound by these conditions.';
//-- add
$lang['Reg_agreement'] = '<font class="gen"><b>Message Reviews</b></font><br />While the administrators and moderators of this forum will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every message. Therefore you acknowledge that all posts made to these forums express the views and opinions of the author and not the administrators, moderators or webmaster (except for posts by these people) and hence will not be held liable.<br /><br /><font class="gen"><b>Posting Regulations</b></font><br />You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-oriented or any other material that may violate any applicable laws. Doing so may lead to you being immediately and permanently banned (and your service provider being informed). The IP address of all posts is recorded to aid in enforcing these conditions. You agree that the webmaster, administrator and moderators of this forum have the right to remove, edit, move or close any topic at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster, administrator and moderators cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br /><br /><font class="gen"><b>Collected Info and Cookies</b></font><br />This forum system uses cookies to store information on your local computer. These cookies do not contain any of the information you have entered above; they serve only to improve your viewing pleasure. The e-mail address is used only for confirming your registration details and password (and for sending new passwords should you forget your current one).<br /><br /><font class="gen"><b>You Agree...</b></font><br />By clicking Register below you agree to be bound by these conditions.';
$lang['To_Join'] = 'To join, you must read and agree to the terms:';
$lang['Forum_Rules'] = 'Forum Rules';
$lang['Agree_checkbox'] = 'I have read, and agree to abide by the %s Forum rules.';
//-- fin mod : vAgreement Terms ------------------------------------------------

//-- mod : Resize Posted Images Based on Max Width -----------------------------
$lang['rmw_image_title'] = 'Click to view full-size'; 
//-- fin mod : Resize Posted Images Based on Max Width -------------------------

//-- mod : admin link in header ------------------------------------------------
//-- add
$lang['Admin_panel'] = 'Administration Panel';
//-- fin mod : admin link in header --------------------------------------------

// Admin Registration Notify mod
$lang['New_user_registration'] = 'Enregistrement d\'un nouvel utilisateur';

//-- mod : topic poll indicator ------------------------------------------------
//-- delete
/*-MOD
$lang['Topic_Poll'] = '<b>[ Poll ]</b>';
MOD-*/
//-- add
$lang['Topic_Poll'] = 'Poll';
//-- fin mod : topic poll indicator --------------------------------------------

//-- mod : BEGIN PM Navigation MOD ------------------------------------------------
//-- add
$lang['Next_privmsg'] = 'Next private message';
$lang['Previous_privmsg'] = 'Previous private message';
$lang['No_newer_pm'] = 'There are no newer private messages.';
$lang['No_older_pm'] = 'There are no older private messages.';
//-- fin mod : END PM Navigation MOD --------------------------------------------

//-- mod : Contact Form ---------------------------------------------------------
//-- add
$lang['Viewing_contact_form'] = 'Using Contact Form';
$lang['Contact_form'] = 'Contact Form';
//-- fin mod : Contact Form -----------------------------------------------------

// BBCodes
$lang['Font_bold'] = ' G ';
$lang['Font_italic'] = ' i ';
$lang['Font_underline'] = ' s ';
$lang['Post_quote'] = 'Citer';
$lang['Post_code'] = 'Code';
$lang['Post_list'] = 'Liste';
$lang['Post_list_ord'] = 'Liste=';
$lang['Post_img'] = 'Img';
$lang['Post_url'] = 'URL';

//-- mod : Advanced Users Viewing Forum ----------------------------------------
//-- add
$lang['Users_viewing_forum'] = 'Users viewing this forum';
$lang['Legend'] = 'Legend';
//-- fin mod : Advanced Users Viewing Forum ------------------------------------

$lang['No_ACP_Password'] = '<b>You have no valid password to login the Admin Panel!</b><br /><br />Please contact the board admin to get one.';

//Begin Lo-Fi Mod
$lang['Lofi'] = 'Lo-Fi Version';
$lang['Full_Version'] = 'Full Version';
$lang['quote_lofi'] = 'Quote';
$lang['edit_lofi'] = 'Edit';
$lang['ip_lofi'] = 'IP';
$lang['del_lofi'] = 'Delete';
$lang['profile_lofi'] = 'Profile';
$lang['pm_lofi'] = 'PM';
$lang['email_lofi'] = 'E-mail';
$lang['website_lofi'] = 'Website';
$lang['icq_lofi'] = 'ICQ';
$lang['aim_lofi'] = 'AIM';
$lang['yim_lofi'] = 'YIM';
$lang['msnm_lofi'] = 'MSN';
$lang['quick_lofi'] = 'Quick Reply';
$lang['new_pm_lofi'] = 'Send a PM';
//End Lo-Fi Mod

// Banlist
$lang['Ban_reason'] = "Ban Reason";
$lang['Banlist'] = "Banlist";
$lang['No_bans_exist'] = "No Bans exist";

//-- mod : attach mod ----------------------------------------------------------
//-- add
$lang['Attached_Files'] = 'Attached files';
//-- fin mod : attach mod ------------------------------------------------------

//--mod : Forumtitle as weblink ------------------------------------------------
//-- add
$lang['Forum_link_count'] = 'Link was visited %s times.';
$lang['Forum_is_a_link'] = 'Link';
//-- fin mod : Forumtitle as weblink -------------------------------------------

//-- mod : Clone Post ----------------------------------------------------------
//-- add
$lang['Clone_post'] = 'Clone post as a new topic';
$lang['Forum_selection'] = 'Select Forum to Post the Cloned Post';
$lang['Forum_selection_explain'] = 'Using the form below you can specify where to post the cloned post. <br />When you click \'Clone post as a new topic\', a clone of the original post will open up in edit mode and you can then change it before posting. <br />If you change your mind and don\'t want to clone this post, click the \'cancel clone\' button.';
$lang['Cancel_clone'] = 'Cancel clone';
$lang['Click_to_post_in_original_poster_name'] = 'Check box to post in original poster\'s name rather than in your name';
//-- fin mod : Clone Post ------------------------------------------------------

//-- mod : Admin Session Logout ------------------------------------------------
//-- add
$lang['Admin_session_logged_out'] = 'Logged out of ACP successfully.<br /><br />%sClose Window%s';
//-- fin mod : Admin Session Logout --------------------------------------------

//-- mod : Show All Edits ------------------------------------------------------
//-- add
$lang['A_former_user'] = 'a former user';
//-- fin mod : Show All Edits --------------------------------------------------

//-- mod : Show Voters ---------------------------------------------------------
//-- add
$lang['Voters'] = 'Voter(s)';
//-- fin mod : Show Voters -----------------------------------------------------

//-- mod : Photo Visual Confirmation ----------------------------------------------
//-- replace
/* MOD
$lang['Confirm_code_explain'] = 'Enter the code exactly as you see it. The code is case sensitive and zero has a diagonal line through it.';
MOD */
//-- add
$lang['Confirm_code_explain_digits'] = 'Enter the code exactly as you see it. The code is case sensitive and zero has a diagonal line through it.';
$lang['Confirm_code_explain_photos'] = 'Put a check mark next to all photographs of animals. (This is a spam prevention mechanism).';
$lang['Confirm_code_missing_gd'] = 'Error: photo confirmation requires the PHP GD extension, which is not currently installed.';
//-- fin mod : Photo Visual Confirmation ----------------------------------------

//
// RSS
//
$lang['rss_forum'] = "forum RSS feed";
$lang['rss_topic'] = "topic RSS feed";
$lang['rss_latest'] = "latest topics RSS feed";

//-- mod : Track PMs MOD -----------------------------------------------------
//-- add
$lang['Private_Message_Tracker'] = "Private Message tracker";
//-- fin mod : Track PMs MOD -------------------------------------------------

//-- mod : New then Unread PMs after login -----------------------------------
//-- add
$lang['New_pms'] = '<span style="color: #e85123;"><b>You have %d new messages</b></span>'; // You have 2 new messages
$lang['New_pm'] = '<span style="color: #e85123;"><b>You have %d new message</b></span>'; // You have 1 new message
$lang['No_new_pm'] = 'You have no new messages';
$lang['Unread_pms'] = '<span style="color: #e85123;"><b>You have %d unread messages</b></span>';
$lang['Unread_pm'] = '<span style="color: #e85123;"><b>You have %d unread message</b></span>';
$lang['No_unread_pm'] = 'You have no unread messages';
//-- fin mod : New then Uread PMs after login --------------------------------
?>
