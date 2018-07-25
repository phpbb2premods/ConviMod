<!-- BEGIN switch_inline_mode -->
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap">{L_TOPIC_REVIEW}</td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<div id="info_display" style="display:none;position:relative;">
<table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
  <tr>
	<td class="row1"><iframe width="100%" height="300" src="{U_REVIEW_TOPIC}">
<!-- END switch_inline_mode -->
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap">&nbsp;</td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
  <tr>
	<th class="thCornerL" width="22%" height="26">{L_AUTHOR}</th>
	<th class="thCornerR">{L_MESSAGE}</th>
  </tr>
  <!-- BEGIN postrow -->
  <tr>
	<td width="22%" align="left" valign="top" class="row1"><a class="name" name="{postrow.U_POST_ID}"></a><b class="name">{postrow.POSTER_NAME}</b></td>
	<td class="row1" height="28" valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0">
	  <tr> 
		<td width="100%"><span class="postdetails">
			<img src="{I_MINITIME}" alt="" title="{L_POSTED}" border="0" />{L_POSTED}: {postrow.POST_DATE}<br />
			<img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="" title="{L_POST_SUBJECT}" border="0" />{L_POST_SUBJECT}: {postrow.POST_SUBJECT}
			<!-- BEGIN sub_title -->
			<br /><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="" title="{L_SUB_TITLE}" border="0" />{L_SUB_TITLE}: {postrow.sub_title.SUB_TITLE}
			<!-- END sub_title -->
		</span></td>
	  </tr>
	  <tr> 
		<td colspan="2"><hr size="1" /></td>
	  </tr>
	  <tr> 
		<td colspan="2"><span class="postbody">{postrow.MESSAGE}</span>{postrow.ATTACHMENTS}</td>
	  </tr>
	</table></td>
  </tr>
  <tr> 
	<td colspan="2" height="1" class="spaceRow"><img src="{I_SPACER}" alt="" width="1" height="1" /></td>
  </tr>
  <!-- END postrow -->
</table>
<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>
<!-- BEGIN switch_inline_mode -->
	</iframe></td>
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
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td nowrap="nowrap" align="left"><span class="gensmall">{JUMPBOX}</span></td>
	<td align="right" width="100%" valign="top">
		<span class="gensmall"><a href="#top"><img src="{I_BTN_TOP}" alt="" border="0" /></a></span>
	</td>
	<td align="right" valign="top">
		<span class="gensmall"><a href="javascript:dom_toggle.toggle('info_display','info_close');"><img src="{I_BTN_SHOWHIDE}" alt="" border="0" /></a></span>
	</td>
  </tr>
</table>
<!-- END switch_inline_mode -->
