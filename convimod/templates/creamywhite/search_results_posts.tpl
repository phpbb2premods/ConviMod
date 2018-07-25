<table width="100%" cellspacing="2" cellpadding="2" border="0">
  <tr>
	<td class="nav">&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a></td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_SEARCH}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap">{L_SEARCH_MATCHES}</td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
  <tr>
	<th class="thCornerL" width="150" height="25" nowrap="nowrap">{L_AUTHOR}</th>
	<th class="thCornerR" width="100%" height="25" nowrap="nowrap">{L_MESSAGE}</th>
  </tr>
  <!-- BEGIN searchresults -->
  <tr>
	<td class="catHead" colspan="2" height="28"><span class="topictitle">
		{L_TOPIC}:&nbsp;<a href="{searchresults.U_TOPIC}" class="topictitle">{searchresults.TOPIC_TITLE}</a>
	</span></td>
  </tr>
  <tr>
	<td width="150" align="left" valign="top" class="row1" rowspan="2"><span class="postdetails">
		<b class="name">{searchresults.POSTER_NAME}</b><br /><br />
		{L_REPLIES}: <b>{searchresults.TOPIC_REPLIES}</b><br />
		{L_VIEWS}: <b>{searchresults.TOPIC_VIEWS}</b><br />
	</span></td>
	<td width="100%" valign="top" class="row1"><span class="postdetails">
		<img src="{I_MINITIME}" alt="" title="{L_POSTED}" border="0" />{L_POSTED}:&nbsp;{searchresults.POST_DATE}<br />
		<img src="{searchresults.MINI_POST_IMG}" alt="" title="{L_FORUM}" border="0" />{L_FORUM}:&nbsp;<a href="{searchresults.U_FORUM}" class="postdetails">{searchresults.FORUM_NAME}</a><br />
		<img src="{searchresults.MINI_POST_IMG}" width="12" height="9" alt="" title="{L_SUBJECT}" border="0" /><span class="postdetails">{L_SUBJECT}: <b><a href="{searchresults.U_POST}" class="postdetails">{searchresults.POST_SUBJECT}</a></b>
		<!-- BEGIN sub_title -->
		&nbsp;&nbsp;{L_SUB_TITLE}: {searchresults.sub_title.SUB_TITLE}
		<!-- END sub_title -->
	</span></td>
  </tr>
  <tr>
	<td valign="top" class="row1"><span class="postbody">{searchresults.MESSAGE}</span></td>
  </tr>
  <!-- END searchresults -->
</table>
<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>

<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr>
	<td align="left" valign="top"><span class="nav">{PAGE_NUMBER}</span></td>
	<td align="right" valign="top" nowrap="nowrap"><span class="nav">{PAGINATION}</span></td>
  </tr>
</table>

<table width="100%" cellspacing="2" cellpadding="0" border="0">
  <tr>
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>
