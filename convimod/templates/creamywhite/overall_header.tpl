<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="ltr">
<head>
<title>{SITENAME} - {PAGE_TITLE}</title>

<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}">
<meta http-equiv="Content-Style-Type" content="text/css">

<meta name="Identifier-URL" content="http://reddevboard.com/">
<meta name="Author" content="reddog - reddevboard.com">
<meta name="Robots" content="all">

<meta name="DC.Creator" content="reddog - reddevboard.com">
<meta name="DC.Rights" content="Attribution-NonCommercial-ShareAlike 2.5, http://creativecommons.org/licenses/by-nc-sa/2.5/">
{META}{NAV_LINKS}
<link rel="stylesheet" type="text/css" href="{STYLE_PATH}/{T_HEAD_STYLESHEET}" media="all">
<link rel="stylesheet" type="text/css" href="./templates/{T_TEMPLATE_NAME}/rcs_stylesheet.css" media="all">
<link rel="stylesheet" type="text/css" href="./templates/{T_TEMPLATE_NAME}/qte_stylesheet.css" media="all">
<script language="javascript" type="text/javascript" src="{STYLE_PATH}/js/js_dom_toggle.js"></script>
<script language="javascript" type="text/javascript" src="{STYLE_PATH}/js/js_doms_toggles.js"></script>
<link rel="stylesheet" href="{BBC_BOX_SHEET}" type="text/css">
<script language="javascript" src="templates/bbc_box/fade.js" type="text/javascript"></script>
<link rel="alternate" title="{L_RSS}" href="{U_RSS}" type="application/rss+xml">
</head>
<body>

<a name="top" id="top"></a>

<!-- start mod : Resize Posted Images Based on Max Width -->
<script type="text/javascript">
//<![CDATA[
<!--

var rmw_max_width = {IMAGES_MAX_SIZE};
var rmw_border_1 = '1px solid {T_BODY_LINK}';
var rmw_border_2 = '2px dotted {T_BODY_LINK}';
var rmw_image_title = '{L_RMW_IMAGE_TITLE}';

//-->
//]]>
</script>
<script type="text/javascript" src="templates/rmw_jslib.js"></script>
<!-- fin mod : Resize Posted Images Based on Max Width -->

<!-- BEGIN switch_enable_pm_popup -->
<table class="pmline" id="new_pm_popup" cellspacing="1" cellpadding="4">
  <tr>
	<td style="height:100px; width:300px;"><span class="gen">
		<a href="{U_PRIVATEMSGS}" class="gen">{PRIVATE_MESSAGE_INFO}</a><br /><br />
		<a href="" onClick="getElementById('new_pm_popup').style.display = 'none'; return false;" class="genmed"><img alt="" src="{I_CLOSE}" border="0" /></a>
	</span></td>
  </tr>
</table> 

<script language="javascript" type="text/javascript">
<!--
	if ( {PRIVATE_MESSAGE_NEW_FLAG} ) 
	{ 
		pmWindow = window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');
		if (!window.pmWindow)
		{ 
			document.getElementById('new_pm_popup').style.display = 'inline'; 
		} 
	} 
//-->
</script>
<!-- END switch_enable_pm_popup -->

<table class="bodyline" width="{FORUM_WIDTH}" align="center" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td><table class="hdrtop" width="100%" cellspacing="0" cellpadding="0">
	  <tr>
		<td align="left" width="35"><img alt="" src="{I_MENU_LEFT}" width="35" height="25" valign="top" /></td>
		<td width="100%" align="left" nowrap="nowrap">
			<a href="{U_FAQ}" class="mainmenu"><img src="{I_FAQ}" alt="" border="0" valign="middle" /><span class="super">{L_FAQ}</span></a>
			<a href="{U_SEARCH}" class="mainmenu"><img src="{I_SEARCH}" alt="" border="0" valign="middle" /><span class="super">{L_SEARCH}</span></a>
			<a href="{U_MEMBERLIST}" class="mainmenu"><img src="{I_MEMBERS}" alt="" border="0" valign="middle" /><span class="super">{L_MEMBERLIST}</span></a>
			<a href="{U_GROUP_CP}" class="mainmenu"><img src="{I_GROUPS}" alt="" border="0" valign="middle" /><span class="super">{L_USERGROUPS}</span></a>
			<a href="{U_CONTACT_FORM}" class="mainmenu"><img src="{I_CONTACT}" alt="" border="0" valign="middle" /><span class="super">{L_CONTACT_FORM}</span></a>		
		</td>
		<td width="35" align="right"><img alt="" src="{I_MENU_RIGHT}" width="35" height="25" valign="top" /></td>
	  </tr>
	</table></td>
  </tr>
  <tr>
	<td><table class="hdrtop" width="100%" cellspacing="0" cellpadding="0">
	  <tr>
		<td align="left" width="35"><img alt="" src="{I_MENU_LEFT}" width="35" height="25" valign="top" /></td>
		<td width="100%" align="left" nowrap="nowrap">
			<!-- BEGIN switch_user_logged_in -->
			<a href="{U_PROFILE}" class="mainmenu"><img src="{I_PROFILE}" alt="" border="0" valign="middle" /><span class="super">{L_PROFILE}</span></a>
			<a href="{U_PRIVATEMSGS}" class="mainmenu"><img src="{PRIVMSG_IMG}" alt="" border="0" valign="middle" /><span class="super">{PRIVATE_MESSAGE_INFO}</span></a>
			<a href="{U_LOGIN_LOGOUT}" class="mainmenu"><img src="{I_LOGOUT}" alt="" border="0" valign="middle" /><span class="super">{L_LOGIN_LOGOUT}</span></a>
			<!-- END switch_user_logged_in -->
			<!-- BEGIN switch_user_logged_out -->
			<a href="{U_LOGIN_LOGOUT}" class="mainmenu"><img src="{I_LOGIN}" alt="" border="0" valign="middle" /><span class="super">{L_LOGIN_LOGOUT}</span></a>
			<a href="{U_REGISTER}" class="mainmenu"><img src="{I_REGISTER}" alt="" border="0" valign="middle" /><span class="super">{L_REGISTER}</span></a>
			<!-- END switch_user_logged_out -->
		</td>
		<td width="35" align="right"><img alt="" src="{I_MENU_RIGHT}" width="35" height="25" valign="top" /></td>
	  </tr>
	</table></td>
  </tr>
<!-- BEGIN switch_admin_link -->
  <tr>
	<td><table class="hdrtop" width="100%" cellspacing="0" cellpadding="0">
	  <tr>
		<td align="left" width="35"><img alt="" src="{I_MENU_LEFT}" width="35" height="25" valign="top" /></td>
		<td width="100%" align="left" nowrap="nowrap">
			<a href="{U_ADMIN_LINK}" class="mainmenu"><img src="{I_ADMIN_LINK}" border="0" alt="{L_ADMIN_LINK}" valign="middle" /><span class="super">{L_ADMIN_LINK}</span></a>
			<a href="{U_BANLIST}" class="mainmenu"><img src="{I_BANLIST}" border="0" alt="{L_BANLIST}" valign="middle" /><span class="super">{L_BANLIST}</span></a>
		</td>
		<td width="35" align="right"><img alt="" src="{I_MENU_RIGHT}" width="35" height="25" valign="top" /></td>
	  </tr>
	</table></td>
  </tr>
<!-- END switch_admin_link -->
  <tr>
	<td><table width="100%" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td align="center"><a href="{U_INDEX}"><img alt="{L_INDEX}" src="{I_LOGO}" title="{L_INDEX}" border="0" /></a></td>
	  </tr>
	</table></td>
  </tr>

<br class="nav" />

  <tr>
	<td><table width="100%" border="0" cellspacing="0" cellpadding="10">
	  <tr>
		<td>


		<!-- BEGIN board_disable -->
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	<td class="hdr" width="100%" align="center" nowrap="nowrap"></td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table class="bodyline" width="100%" cellpadding="2" cellspacing="1" border="0" align="center">
  <tr>
	<td align="center" valign="bottom"><span class="gen"><b>{board_disable.MSG}</b></span></td>
  </tr>
</table>
<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>
<br class="nav" />
		<!-- END board_disable -->

<!-- MOD Keep_unread -->
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	<td class="hdr" width="100%" align="center" nowrap="nowrap"><span class="name">{L_HELLO} &nbsp;<b>{L_USER_CONNECT}</b></span></td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table class="bodyline" width="100%" cellpadding="2" cellspacing="1" border="0" align="center">
  <tr>
	<td align="left" valign="bottom"><span class="gensmall">
		&nbsp;{LAST_VISIT_DATE}<br />
		&nbsp;{CURRENT_TIME}<br /></span>
		<span class="nav">&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a>
	</span></td>
	<td align="right" valign="bottom" class="gensmall">
		<!-- BEGIN switch_exists_unread_posts -->
		<a href="{U_SEARCH_NEW}" class="gensmall"><span style='color:red'><b><u>{L_SEARCH_NEW}</u></b></span></a>&nbsp;<br />
		<a href="{U_SEARCH_SELF}" class="gensmall">{L_SEARCH_SELF}</a>&nbsp;<br />
		<!-- END switch_exists_unread_posts -->
		<!-- BEGIN switch_no_unread_posts -->
		<a href="{U_SEARCH_NEW}" class="gensmall">{L_SEARCH_NEW}</a>&nbsp;<br />
		<a href="{U_SEARCH_SELF}" class="gensmall">{L_SEARCH_SELF}</a>&nbsp;<br />
		<!-- END switch_no_unread_posts -->
		<a href="{U_SEARCH_UNANSWERED}" class="gensmall">{L_SEARCH_UNANSWERED}</a>&nbsp;
	</td>
  </tr>
</table>
<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>
<br class="nav" />
