<!-- mod : Announce background color -->
<form method="post" action="{S_POST_DAYS_ACTION}">
  <table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
	  <td align="left" valign="bottom" colspan="3">
		<a class="maintitle" href="{U_VIEW_FORUM}">{FORUM_NAME}</a><br />
		<b class="gensmall">{L_MODERATOR}: {MODERATORS}<br />{LOGGED_IN_USER_LIST}</b>
	  </td>
	  <td align="right" valign="bottom" nowrap="nowrap"><b class="gensmall">{PAGINATION}</b></td>
	</tr>
	<tr>
	  <td align="left" valign="middle" width="50"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" /></a></td>
	  <td align="left" valign="bottom"><a href="{U_VIEW_FORUM}">{FORUM_ICON_IMG}</a></td>
	  <td class="nav" width="100%" align="left" valign="middle">
		<a href="{U_INDEX}" class="nav">{L_INDEX}</a> <!-- IF PARENT_FORUM --> &raquo; <a class="nav" href="{U_VIEW_PARENT_FORUM}">{PARENT_FORUM_NAME}</a> <!-- ENDIF --> &raquo; <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a>
	  </td>
<!-- keep_unread_mod_2 * added link to unread post list -->
	  <!-- BEGIN switch_exists_unread_posts -->
	  <td align="right" valign="middle" nowrap="nowrap"><a href="{U_SEARCH_NEW}"><span style='color:red'><b><u>{L_SEARCH_NEW}</u></b></span></a><br />
	  <!-- END switch_exists_unread_posts -->
	  <!-- BEGIN switch_no_unread_posts -->
  	  <td align="right" valign="middle" nowrap="nowrap"><a href="{U_SEARCH_NEW}" class="gensmall">{L_SEARCH_NEW}</a><br />
	  <!-- END switch_no_unread_posts -->
	  <a href="{U_MARK_READ}" class="gensmall">{L_MARK_TOPICS_READ}</a></td>
	</tr>
  </table>

<!-- BEGIN catrow -->
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap"><a href="{catrow.U_VIEWCAT}" class="cattitle">{catrow.CAT_DESC}</a></td>
	  <!-- BEGIN switch_user_logged_in -->
	  <td class="hdr" align="right" valign="middle" nowrap="nowrap">
		<a href="{U_MARK_READ}" class="gensmall"><img alt="{L_MARK_TOPICS_READ}" src="{I_HDR_CHECK}" title="{L_MARK_TOPICS_READ}" border="0" /></a>&nbsp;
	  </td>
	  <!-- END switch_user_logged_in -->
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
</table>
<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
  <tr> 
	<th colspan="2" class="thCornerL" height="25" nowrap="nowrap">&nbsp;{L_FORUM}&nbsp;</th>
	<th width="50" class="thTop" nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
	<th width="50" class="thTop" nowrap="nowrap">&nbsp;{L_POSTS}&nbsp;</th>
	<th class="thCornerR" nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
  </tr>
  <!-- BEGIN forumrow -->
  <tr> 
	<td class="row1" align="center" valign="middle" height="50">
	<a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink" {catrow.forumrow.FORUM_LINK_TARGET}><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /></a></td>
	<td class="row1" width="100%" height="50"><table width="100%" cellpadding="2" cellspacing="0" border="0">
		<tr><td><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink" {catrow.forumrow.FORUM_LINK_TARGET}>{catrow.forumrow.FORUM_ICON_IMG}</a></td>
		    <td width="100%"><span class="forumlink"><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink<!-- IF catrow.forumrow.UNREAD --> topic-new<!-- ENDIF -->" {catrow.forumrow.FORUM_LINK_TARGET}>{catrow.forumrow.FORUM_NAME}</a><br />
				    </span> <span class="genmed">{catrow.forumrow.FORUM_DESC}<br />
				    </span><span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span></td>
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
<br />
<!-- END catrow -->

  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap"><a href="{U_VIEW_FORUM}">{FORUM_NAME}</a></td>
	  <!-- BEGIN switch_user_logged_in -->
	  <td class="hdr" align="right" valign="middle" nowrap="nowrap">
		<a href="{U_MARK_READ}" class="gensmall"><img alt="{L_MARK_TOPICS_READ}" src="{I_HDR_CHECK}" title="{L_MARK_TOPICS_READ}" border="0" /></a>&nbsp;
	  </td>
	  <!-- END switch_user_logged_in -->
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
	<tr> 
	  <th class="thCornerL" colspan="2" align="center" width="100%" height="25" nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
	  <th class="thTop" width="50" align="center" nowrap="nowrap">&nbsp;{L_REPLIES}&nbsp;</th>
	  <th class="thTop" width="100" align="center" nowrap="nowrap">&nbsp;{L_AUTHOR}&nbsp;</th>
	  <th class="thTop" width="50" align="center" nowrap="nowrap">&nbsp;{L_VIEWS}&nbsp;</th>
	  <th class="thCornerR" width="200" align="center" nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
	</tr>
	<!-- BEGIN topicrow -->
	<!-- BEGIN switch_post -->
	<tr>
	  <td class="row2" colspan="6" style="padding-left: 10px;"><span class="gensmall">{topicrow.switch_post.SPLIT_TYPE}</span></td>
	</tr>
	<!-- END switch_post -->
	<tr> 
	  <td class="{topicrow.announce_color_topic_type1}" align="center" valign="middle" width="20"><img src="{topicrow.TOPIC_FOLDER_IMG}" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	  <td class="{topicrow.announce_color_topic_type1}" width="100%">
		<span class="topictitle">{topicrow.NEWEST_POST_IMG} {topicrow.TOPIC_ATTACHMENT_IMG} {topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span>
		<span class="gensmall"><br />{topicrow.GLOBAL_LINK}
		<!-- BEGIN sub_title -->
		{topicrow.sub_title.SUB_TITLE}<br />
		<!-- END sub_title -->
		{topicrow.GOTO_PAGE}</span>
	  </td>
	  <td class="{topicrow.announce_color_topic_type2}" align="center" valign="middle"><span class="postdetails"><a href="#" onclick="window.open('{topicrow.U_WHO_POSTED}','','statusbar=no,menubar=no,toolbar=no,scrollbars=yes,resizable=yes,width=500,height=300'); return false;">{topicrow.REPLIES}</a></span></td>
	  <td class="{topicrow.announce_color_topic_type3}" align="center" valign="middle"><span class="name">{topicrow.TOPIC_AUTHOR}</span></td>
	  <td class="{topicrow.announce_color_topic_type2}" align="center" valign="middle"><span class="postdetails">{topicrow.VIEWS}</span></td>
	  <td class="{topicrow.announce_color_topic_type3}" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">
		{topicrow.LAST_POST_TIME}<br />{topicrow.LAST_POST_AUTHOR} {topicrow.LAST_POST_IMG}
	  </span></td>
	</tr>
	<!-- END topicrow -->
	<!-- BEGIN switch_no_topics -->
	<tr> 
	  <td class="row1" colspan="6" height="30" align="center" valign="middle"><span class="gen">{L_NO_TOPICS}</span></td>
	</tr>
	<!-- END switch_no_topics -->
	<tr> 
	  <td class="catBottom" align="center" valign="middle" colspan="6" height="28"><span class="genmed">
	  	{L_DISPLAY_TOPICS}:&nbsp;{S_SELECT_TOPIC_DAYS}&nbsp;
		<input type="submit" class="liteoption" value="{L_GO}" name="submit" />
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

  <table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr> 
	  <td align="left" valign="top" width="50"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" /></a></td>
	  <td align="left" valign="bottom"><a href="{U_VIEW_FORUM}">{FORUM_ICON_IMG}</a></td>
	  <td class="nav" align="left" valign="top" width="100%">
		<a href="{U_INDEX}" class="nav">{L_INDEX}</a> <!-- IF PARENT_FORUM --> &raquo; <a class="nav" href="{U_VIEW_PARENT_FORUM}">{PARENT_FORUM_NAME}</a><!-- ENDIF --> &raquo; <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a>
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
  <tr>
	<td class="row2 gensmall" colspan="2">{S_AUTH_LIST}</td>
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
