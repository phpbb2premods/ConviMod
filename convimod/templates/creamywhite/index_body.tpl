{ANNONCE_GLOBALE}

<!-- BEGIN catrow -->
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap"><a href="{catrow.U_VIEWCAT}" class="cattitle">{catrow.CAT_DESC}</a></td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table class="forumline" width="100%" cellpadding="2" cellspacing="1" border="0">
  <tr>
	<th colspan="2" class="thCornerL" width="100%" height="25" nowrap="nowrap">&nbsp;{L_FORUM}&nbsp;</th>
	<th width="70" class="thTop" nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
	<th width="70" class="thTop" nowrap="nowrap">&nbsp;{L_POSTS}&nbsp;</th>
	<th width="200" class="thCornerR" nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
  </tr>
  <!-- BEGIN forumrow -->
  <!-- IF ! forumrow.PARENT -->
  <tr>
	<td class="row1" align="center" valign="middle" height="50">
		<a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink" {catrow.forumrow.FORUM_LINK_TARGET}><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /></a>
	</td>
	<td class="row1" width="100%" height="50"><table width="100%" cellpadding="2" cellspacing="0" border="0">
		<tr><td><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink" {catrow.forumrow.FORUM_LINK_TARGET}>{catrow.forumrow.FORUM_ICON_IMG}</a></td>
			<td width="100%"><span class="forumlink"><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink" {catrow.forumrow.FORUM_LINK_TARGET}>{catrow.forumrow.FORUM_NAME}</a><br />
  				</span> <span class="genmed">{catrow.forumrow.FORUM_DESC}<br />
  				<!-- IF catrow.forumrow.MODERATORS --><span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}<br /></span><!-- ENDIF -->
	  <!-- BEGIN sub --><!-- DEFINE $HAS_SUB = 1 --><!-- IF catrow.forumrow.sub.NUM > 0 -->, <!-- ELSE --><span class="genmed">{L_SUBFORUMS}: <!-- ENDIF -->{catrow.forumrow.sub.LAST_POST_SUB} <a href="{catrow.forumrow.sub.U_VIEWFORUM}" <!-- IF catrow.forumrow.sub.UNREAD -->class="topic-new"<!-- ENDIF --> title="{catrow.forumrow.sub.FORUM_DESC_HTML}" {catrow.forumrow.sub.FORUM_LINK_TARGET}>{catrow.forumrow.sub.FORUM_NAME}</a><!-- END sub -->
	  <!-- IF $HAS_SUB --></span><!-- UNDEFINE $HAS_SUB --><!-- ENDIF -->
	</td>
	</tr>
  	</table></td>
<!-- BEGIN switch_forum_link_off -->
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.TOTAL_TOPICS}</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.TOTAL_POSTS}</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"><span class="gensmall">{catrow.forumrow.LAST_POST}</span></td>
<!-- END switch_forum_link_off -->
<!-- BEGIN switch_forum_link_on -->
	<td class="row2" align="center" valign="middle" height="50" colspan="3"><span class="gensmall">{catrow.forumrow.FORUM_LINK_COUNT}</span></td>
<!-- END switch_forum_link_on -->
  </tr>
  <!-- ENDIF -->
  <!-- END forumrow -->
</table>
<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>
<br class="nav" />
<!-- END catrow -->

<table width="100%" cellspacing="0" cellpadding="2" border="0">
  <tr>
	<td class="gensmall" align="right">{S_TIMEZONE}&nbsp;</td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_WHOSONLINE}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap">{L_STATS}</td>
	<td class="hdr" align="right" valign="middle" nowrap="nowrap">
		<a href="{U_MARK_READ}" class="gensmall"><img alt="{L_MARK_FORUMS_READ}" src="{I_HDR_CHECK}" title="{L_MARK_FORUMS_READ}" border="0" /></a>&nbsp;
	</td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
  <tr>
	<td class="row3" align="left" valign="middle">
		<a href="{U_VIEWONLINE}" class="gensmall"><img src="{I_STATS_BOARD}" alt="{L_WHO_IS_ONLINE}" border="0" class="absbottom" />&nbsp;&nbsp;<b>{L_WHO_IS_ONLINE}</b></a>
	</th>
  </tr>
  <tr>
	<td class="row1" align="left"><span class="gensmall">
		{TOTAL_USERS_ONLINE}<br />{LOGGED_IN_USER_LIST}
	</span></td>
  </tr>
  <tr>
	<td class="row3" align="left" valign="middle">
		<a style="float:right" href="#" onClick="doms_toggles.toggle('statsonline_display','statsonline_open_close', '{I_ARROW_PLUS}', '{I_ARROW_MINUS}'); return false;" class="postdetails"><img src="{I_TOGGLES_ICONS}" id="statsonline_open_close" hspace="2" border="0" class="absbottom" /></a>
		<img src="{I_STATS_ONLINE}" alt="{L_WHO_IS_ONLINE}" border="0" class="absbottom" /><span class="gensmall">&nbsp;&nbsp;<b>{L_STATS_ONLINE}</b></span></td>
  </tr>
  <tbody id="statsonline_display" style="display:{TOGGLES_STATUS}">
  {ONLINELIST_BOX}
  </tbody>
  <tr>
	<td class="row3" align="left" valign="middle">
		<a style="float:right" href="#" onClick="doms_toggles.toggle('statstoday_display','statstoday_open_close', '{I_ARROW_PLUS}', '{I_ARROW_MINUS}'); return false;" class="postdetails"><img src="{I_TOGGLES_ICONS}" id="statstoday_open_close" hspace="2" border="0" class="absbottom" /></a>
		<img src="{I_STATS_TODAY}" alt="{L_WHO_IS_ONLINE}" border="0" class="absbottom" /><span class="gensmall">&nbsp;&nbsp;<b>{L_STATS}</b></span></td>
  </tr>
  <tbody id="statstoday_display" style="display:{TOGGLES_STATUS}">
  <tr>
	<td class="row1" align="left"><span class="gensmall">
		{TOTAL_POSTS}<br />{TOTAL_USERS}<br />{NEWEST_USER}<br />{RECORD_USERS}</span></td>
  </tr>
  </tbody>
  <tr>
	<td class="row1"><span class="gensmall">
  		<strong>{L_LEGEND}:</strong>
  		<!-- BEGIN legend -->
  		<a href="{legend.U_RANK}"{legend.RANK_STYLE}>{legend.RANK_NAME}</a>{legend.RANK_SEP}
  		<!-- END legend -->
  	</span></td>
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

{BIRTHDAYS_BOX}

<!-- BEGIN switch_user_logged_out -->
<form method="post" action="{S_LOGIN_ACTION}">
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_LOGIN}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap"><a name="login"></a>{L_LOGIN_LOGOUT}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr>
	  <td class="row1" align="center" valign="middle" height="28"><span class="gensmall">
		<label for="username">{L_USERNAME}: </label>
		<input class="post" id="username" name="username" type="text" size="10" />
		<label for="mdp">{L_PASSWORD}: </label>
		<input class="post" id="mdp" maxlength="32" name="password" type="password" size="10" />
		<!-- BEGIN switch_allow_autologin -->
		<label for="autologin">{L_AUTO_LOGIN}</label>
		<input class="text" id="autologin" name="autologin" type="checkbox" />
		<!-- END switch_allow_autologin -->
		<input class="mainoption" name="login" type="submit" value="{L_LOGIN}" />
	  </span></td>
	</tr>
  </table>
  <table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
	<tr> 
	  <td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	  <td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	  <td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
	</tr>
  </table>
</form>
<!-- END switch_user_logged_out -->
