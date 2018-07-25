<form method="post" action="{S_POST_DAYS_ACTION}">

	<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td align="left" valign="bottom">{FORUM_ICON_IMG}</td>
		<td width="100%" align="left" valign="middle">
		<a href="{U_INDEX}" class="nav">{L_INDEX}</a> <!-- IF PARENT_FORUM --> &raquo; <a class="nav" href="{U_VIEW_PARENT_FORUM}">{PARENT_FORUM_NAME}</a> <!-- ENDIF --> &raquo; <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a>
		</td>
	</tr>
	</table>
	<!-- BEGIN catrow -->
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap"><a href="{catrow.U_VIEWCAT}" class="cattitle">{catrow.CAT_DESC}</a></td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
</table>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
	<tr> 
		<th colspan="2" class="thCornerL" height="25" nowrap="nowrap">&nbsp;{L_FORUM}&nbsp;</th>
		<th width="70" class="thTop" nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
		<th width="70" class="thTop" nowrap="nowrap">&nbsp;{L_POSTS}&nbsp;</th>
		<th width="200" class="thCornerR" nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
	</tr>
	<!-- BEGIN forumrow -->
	<tr> 
		<td class="row1" align="center" valign="middle" height="50">
		<a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink" {catrow.forumrow.FORUM_LINK_TARGET}><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" border="0" /></a></td>
		<td class="row1" width="100%" height="50"><table width="100%" cellpadding="2" cellspacing="0" border="0">
		<tr><td><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink" {catrow.forumrow.FORUM_LINK_TARGET}>{catrow.forumrow.FORUM_ICON_IMG}</a></td>
		<td width="100%" valign="middle">
			<span class="forumlink"><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink<!-- IF catrow.forumrow.UNREAD --> topic-new<!-- ENDIF -->" {catrow.forumrow.FORUM_LINK_TARGET}>{catrow.forumrow.FORUM_NAME}</a><br /></span>
			<span class="genmed">{catrow.forumrow.FORUM_DESC}<br /></span>
			<span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span>
		</td>
	</tr>
	</table></td>
<!-- BEGIN switch_forum_link_off -->
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.TOPICS}</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.POSTS}</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">{catrow.forumrow.LAST_POST}</span></td>
<!-- END switch_forum_link_off -->
<!-- BEGIN switch_forum_link_on -->
	<td class="row2" align="center" valign="middle" height="50" colspan="3"><span class="gensmall">{catrow.forumrow.FORUM_LINK_COUNT}</span></td>
<!-- END switch_forum_link_on -->
	</tr>
	<!-- END forumrow -->
	</table>
	<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
	<tr> 
	  <td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	  <td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	  <td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
	</tr>
 	 </table>
	<!-- END catrow -->
	<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td align="left" valign="bottom">{FORUM_ICON_IMG}</td>
		<td width="100%" align="left" valign="middle">
		<a href="{U_INDEX}" class="nav">{L_INDEX}</a> <!-- IF PARENT_FORUM --> &raquo; <a class="nav" href="{U_VIEW_PARENT_FORUM}">{PARENT_FORUM_NAME}</a> <!-- ENDIF --> &raquo; <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a>
		</td>
	</tr>
	</table>
</form>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_INFO}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap">&nbsp;</td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<div id="info_display" style="display:none;position:relative;">
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
  <tr>
	<td class="row2 gensmall" width="150" nowrap="nowrap">{PAGE_NUMBER}</td>
	<td class="row1 gensmall" width="100%">{PAGINATION}</td>
  </tr>
  <tr>
	<td class="row2 gensmall" colspan="2"><b>{L_MODERATOR}: {MODERATORS}<br />{LOGGED_IN_USER_LIST}</b></td>
  </tr>
  <tr>
	<td class="row1" colspan="2" valign="middle"><table cellspacing="3" cellpadding="0" border="0">
	  <tr>
		<td width="20" align="left"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" /></td>
		<td class="gensmall">{L_NEW_POSTS}</td>
		<td>&nbsp;&nbsp;</td>
		<td width="20" align="center"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" /></td>
		<td class="gensmall">{L_NO_NEW_POSTS}</td>
		<td>&nbsp;&nbsp;</td>
		<td width="20" align="center"><img src="{FOLDER_ANNOUNCE_IMG}" alt="{L_ANNOUNCEMENT}" /></td>
		<td class="gensmall">{L_ANNOUNCEMENT}</td>
	  </tr>
	  <tr> 
		<td width="20" align="center"><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}" /></td>
		<td class="gensmall">{L_NEW_POSTS_HOT}</td>
		<td>&nbsp;&nbsp;</td>
		<td width="20" align="center"><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}" /></td>
		<td class="gensmall">{L_NO_NEW_POSTS_HOT}</td>
		<td>&nbsp;&nbsp;</td>
		<td width="20" align="center"><img src="{FOLDER_STICKY_IMG}" alt="{L_STICKY}" /></td>
		<td class="gensmall">{L_STICKY}</td>
	  </tr>
	  <tr>
		<td class="gensmall"><img src="{FOLDER_LOCKED_NEW_IMG}" alt="{L_NEW_POSTS_LOCKED}" /></td>
		<td class="gensmall">{L_NEW_POSTS_LOCKED}</td>
		<td>&nbsp;&nbsp;</td>
		<td class="gensmall"><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_LOCKED}" /></td>
		<td class="gensmall">{L_NO_NEW_POSTS_LOCKED}</td>
	  </tr>
	</table></td>
  </tr>
</table>
</div>
<div id="info_close" style="display:block;position:relative;">
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
  <tr>
	<td class="row2 gensmall" width="150" nowrap="nowrap">{PAGE_NUMBER}</td>
	<td class="row1 gensmall" width="100%">{PAGINATION}</td>
  </tr>
  <tr>
	<td class="row2 gensmall" colspan="2"><b>{L_MODERATOR}: {MODERATORS}<br />{LOGGED_IN_USER_LIST}</b></td>
  </tr>
  <tr>
	<td class="row1" colspan="2" valign="middle"><table cellspacing="3" cellpadding="0" border="0">
	  <tr>
		<td align="left"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" /></td>
		<td class="gensmall">{L_NEW_POSTS}</td>
		<td>&nbsp;&nbsp;</td>
		<td align="left"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" /></td>
		<td class="gensmall">{L_NO_NEW_POSTS}</td>
	  </tr>
	</table></td>
  </tr>
</table>
</div>
<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" border="0" border="0">
  <tr>
	<td valign="top" align="left">{JUMPBOX}</td>
	<td align="right" width="100%" valign="top">
		<a class="gensmall" href="#top"><img alt="" src="{I_BTN_TOP}" border="0" /></a>
	</td>
	<td align="right" valign="top">
		<a class="gensmall" href="javascript:dom_toggle.toggle('info_display','info_close');"><img alt="" src="{I_BTN_SHOWHIDE}" border="0" /></a>
	</td>
  </tr>
</table>
