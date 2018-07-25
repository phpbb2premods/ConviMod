<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
	<td align="left" valign="bottom" colspan="2">
		<a class="maintitle" href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><br />
		<b class="gensmall">{PAGINATION}</b>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
	<td class="nav" align="left" valign="bottom" nowrap="nowrap">
		<a class="nav" href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>
		<a class="nav" href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a>
	</td>
	<td class="nav" align="left" valign="middle" width="100%">
		<a class="nav" href="{U_INDEX}">{L_INDEX}</a> <!-- IF PARENT_FORUM --> &raquo; <a class="nav" href="{U_VIEW_PARENT_FORUM}">{PARENT_FORUM_NAME}</a><!-- ENDIF --> &raquo; <a href="{U_VIEW_FORUM}" class="nav">{FORUM_ICON_IMG}</a> <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a>
	</td>
  </tr>
</table>

{POLL_DISPLAY}

<!-- BEGIN postrow -->
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	<td class="hdr" width="40%" align="left" nowrap="nowrap">{postrow.POST_SUBJECT}</td>
	<!-- BEGIN hide_br -->
	<td class="hdr" nowrap="nowrap"><a href="{hide_br.U_BR_VALIDATE}" title="{hide_br.L_BR_VALIDATE}">{hide_br.L_BR_VALIDATE}</a></td>
	<!-- END hide_br -->
	<td class="hdr" nowrap="nowrap" align="left" width="60%"><a href="{U_BR_VALIDATE}" title="{L_BR_VALIDATE}">{L_BR_VALIDATE}</a></td>
	<td class="hdr" align="right" valign="middle" nowrap="nowrap">
		<a href="{U_VIEW_OLDER_TOPIC}" class="nav"><img src="{I_PREVIOUS_TOPIC}" alt="{L_VIEW_PREVIOUS_TOPIC}" title="{L_VIEW_PREVIOUS_TOPIC}" border="0" /></a>
		{S_WATCH_TOPIC_IMG}
		<a href="{U_VIEW_NEWER_TOPIC}" class="nav"><img src="{I_NEXT_TOPIC}" alt="{L_VIEW_NEXT_TOPIC}" title="{L_VIEW_NEXT_TOPIC}" border="0" />&nbsp;</a>
	</td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
  <tr>
	<th class="thLeft" width="150" height="26" nowrap="nowrap">{L_AUTHOR}</th>
	<th class="thRight" nowrap="nowrap">{L_MESSAGE}</th>
  </tr>
  <tr>
	<td class="row1" width="150" align="left" valign="top">
		<b class="name"><a name="{postrow.U_POST_ID}"></a>{postrow.POSTER_NAME}</b>{postrow.I_QP_QUOTE}<br />
		<span class="postdetails">{postrow.POSTER_RANK}<br />{postrow.RANK_IMAGE}{postrow.POSTER_AVATAR}<br /><br /> {postrow.POSTER_JOINED}<br />{postrow.POSTER_POSTS}<br />{postrow.POSTER_FROM}
			<!-- BEGIN birthday -->
			<br />{L_AGE}:&nbsp;{postrow.birthday.AGE}
			<!-- BEGIN zodiac --><img class="gensmall" src="{postrow.birthday.I_ZODIAC}" alt="{postrow.birthday.L_ZODIAC}" title="{postrow.birthday.L_ZODIAC}" style="vertical-align:text-bottom;" /><!-- END zodiac -->
			<!-- BEGIN birthcake -->&nbsp;<img class="gensmall" src="{I_BIRTHCAKE}" alt="{L_BIRTHCAKE}" title="{L_BIRTHCAKE}" style="vertical-align:text-bottom;" /><!-- END birthcake -->
			<!-- END birthday -->
			<!-- BEGIN flag -->
			<br />{L_FLAG}:&nbsp;<img class="gensmall" src="{postrow.flag.FLAG_IMG}" alt="{postrow.flag.FLAG_NAME}" title="{postrow.flag.FLAG_NAME}" style="vertical-align:text-bottom;" border="0" />
			<!-- END flag -->
			<!-- BEGIN browser -->
			<br />{L_BROWSER}:&nbsp;<img class="gensmall" src="{postrow.browser.BROWSER_IMG}" alt="{postrow.browser.BROWSER_NAME}" title="{postrow.browser.BROWSER_NAME}" style="vertical-align:text-bottom;" border="0" />
			<!-- END browser --><br /></span>
	</td>
	<td class="row1" width="100%" height="28" valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="100%"><span class="postdetails">
			<a href="{postrow.U_MINI_POST}"><img src="{I_MINITIME}" alt="" title="{L_POSTED}" border="0" /></a>{L_POSTED}: {postrow.POST_DATE}
			<br /><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="" title="{L_POST_SUBJECT}" border="0" />{L_POST_SUBJECT}: {postrow.POST_SUBJECT}
			<!-- BEGIN sub_title -->
			<br /><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="" title="{L_SUB_TITLE}" border="0" />{L_SUB_TITLE}: {postrow.sub_title.SUB_TITLE}
			<!-- END sub_title -->
		</span></td>
		<td valign="top" nowrap="nowrap">{postrow.QUOTE_IMG} {postrow.EDIT_IMG} {postrow.CLONE_IMG} {postrow.DELETE_IMG} {postrow.KEEP_UNREAD_IMG} {postrow.IP_IMG}</td>
	  </tr>
	  <tr>
		<td colspan="2"><hr size="1" /></td>
	  </tr>
	  <tr>
		<td colspan="2">
			<div id="message_{postrow.U_POST_ID}"><span class="postbody">{postrow.MESSAGE}</span></div>{postrow.ATTACHMENTS}<div align="right"><span class="genmed"><i>{postrow.EDITED_MESSAGE}</i></span><span class="postbody">{postrow.SIGNATURE}</span></div>
		</td>
	  </tr>
	</table></td>
  </tr>
  <tr>
	<td class="row1" width="100%" colspan="2" valign="bottom" nowrap="nowrap"><table width="100%" height="18" cellspacing="0" cellpadding="0" border="0">
	  <tr> 
		<td valign="middle" nowrap="nowrap"><span class="nav">
			{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.AIM_IMG} {postrow.YIM_IMG} {postrow.MSN_IMG} {postrow.ICQ_IMG}
		</span></td>
	  </tr>
	</table></td>
  </tr>
</table>
<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>
<!-- END postrow -->

<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
	<td class="nav" align="left" valign="middle" nowrap="nowrap">
		<a class="nav" href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>
		<a class="nav" href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a>
		<!-- BEGIN qp_form -->
		<!-- BEGIN qp_button -->
		&nbsp;&nbsp;<a href="{qp_form.qp_button.U_QPES}"><img src="{qp_form.qp_button.I_QPES}" border="0" alt="{qp_form.qp_button.L_QPES_ALT}" align="middle" /></a>
		<!-- END qp_button -->
		<!-- END qp_form -->
		{U_POST_REGLES}
	</td>
	<td class="nav" width="100%" align="left" valign="middle">
		<a class="nav" href="{U_INDEX}">{L_INDEX}</a> <!-- IF PARENT_FORUM --> &raquo; <a class="nav" href="{U_VIEW_PARENT_FORUM}">{PARENT_FORUM_NAME}</a><!-- ENDIF --> &raquo; <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a>
	</td>
  </tr>
</table>

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
	<td class="row1 gensmall" width="80%">{PAGINATION}</td>
	<!-- BEGIN switch_attribute -->
	<td align="right" class="row2 gensmall"><form action="{F_ATTRIBUTE_URL}" method="POST">
		{S_ATTRIBUTE_SELECTOR}
		<input type="image" src="{I_MINI_SUBMIT}" name="attribute" title="{L_ATTRIBUTE_APPLY}" />
		<input type="hidden" name="{S_TOPIC_LINK}" value="{TOPIC_ID}" />
	</form></td>
	<!-- END switch_attribute -->
  </tr>
  </tr>
  <tr>
	<td class="row2 gensmall" colspan="3">{S_AUTH_LIST}</td>
  </tr>
  <tr align="center">
	<td class="catBottom" colspan="3" height="28"><table cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<form method="post" action="{S_POST_DAYS_ACTION}"><td class="gensmall" align="center">
			{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;
			<input type="submit" value="{L_GO}" class="liteoption" name="submit" />
		</td></form>
	  </tr>
	</table></td>
  </tr>	
</table>
</div>
<div id="info_close" style="display:block;position:relative;">
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
  <tr>
	<td class="row2 gensmall" width="150" nowrap="nowrap">{PAGE_NUMBER}</td>
	<td class="row1 gensmall" width="80%">{PAGINATION}</td>
	<td align="right" class="row2 gensmall"><form action="{F_ATTRIBUTE_URL}" method="POST">
		{S_ATTRIBUTE_SELECTOR}
		<input type="image" src="{I_MINI_SUBMIT}" name="attribute" title="{L_ATTRIBUTE_APPLY}" />
		<input type="hidden" name="{S_TOPIC_LINK}" value="{TOPIC_ID}" />
	</form></td>
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

<!-- BEGIN qp_form -->
{QP_BOX}
<!-- END qp_form -->

<table width="100%" height="12" border="0" cellspacing="0" cellpadding="0">
  <tr> 
	<td align="left" height="12" valign="top"><img src="{I_TAB_LEFT}" alt="" /></td>
	<td class="ftr gensmall" height="12" valign="top" nowrap="nowrap">
		<a href="#top"><img src="{I_TAB_TOP}" alt="" title="{L_BACK_TO_TOP}" border="0" /></a>{S_TOPIC_ADMIN}</td>
	<td width="100%" height="12" align="left" valign="top"><img src="{I_TAB_RIGHT}" alt="" /></td>
	<td align="right" valign="top">
		<a class="gensmall" href="javascript:dom_toggle.toggle('info_display','info_close');"><img src="{I_BTN_SHOWHIDE}" alt="" border="0" /></a>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>
