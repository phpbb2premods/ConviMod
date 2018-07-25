<form method="post" action="{S_MODCP_ACTION}">
  <table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
	  <td class="nav">&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a> <!-- IF PARENT_FORUM --> &raquo; <a class="nav" href="{U_VIEW_PARENT_FORUM}">{PARENT_FORUM_NAME}</a> <!-- ENDIF --> &raquo; <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a></td>
	</tr>
  </table>

  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_MODCP}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_MOD_CP}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
	<tr>
	  <td class="row2" colspan="7" align="center"><span class="gensmall">{L_MOD_CP_EXPLAIN}</span></td>
	</tr>
	<tr>
	  <th class="thCornerL" width="4%" nowrap="nowrap">&nbsp;</th>
	  <th class="thTop" nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
	  <th class="thTop" width="8%" nowrap="nowrap">&nbsp;{L_REPLIES}&nbsp;</th>
	  <th width="15%" nowrap="nowrap">&nbsp;{L_AUTHOR}&nbsp;</th>
	  <th width="8%" nowrap="nowrap">&nbsp;{L_VIEWS}&nbsp;</th>
	  <th class="thTop" width="17%" nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
	  <th class="thCornerR" width="5%" nowrap="nowrap">&nbsp;{L_SELECT}&nbsp;</th>
	</tr>
	<!-- BEGIN topicrow -->
	<!-- BEGIN switch_post -->
	<tr>
	  <td class="row2" colspan="7" style="padding-left: 10px;"><span class="gensmall">{topicrow.switch_post.SPLIT_TYPE}</span></td>
	</tr>
  <!-- END switch_post -->
	<tr>
	  <td class="row1" align="center" valign="middle"><img src="{topicrow.TOPIC_FOLDER_IMG}" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	  <td class="row1"><span class="topictitle">{topicrow.TOPIC_ATTACHMENT_IMG} {topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span></td>
	  <td class="row2" align="center" valign="middle"><span class="postdetails">{topicrow.REPLIES}</span></td>
	  <td class="row3" align="center" valign="middle"><span class="name">{topicrow.TOPIC_AUTHOR}</span></td>
	  <td class="row2" align="center" valign="middle"><span class="postdetails">{topicrow.VIEWS}</span></td>
	  <td class="row1" align="center" valign="middle"><span class="postdetails">{topicrow.LAST_POST_TIME}<br />{topicrow.LAST_POST_AUTHOR} {topicrow.LAST_POST_IMG}</span></td>
	  <td class="row2" align="center" valign="middle"><input type="checkbox" name="topic_id_list[]" value="{topicrow.TOPIC_ID}" /></td>
	</tr>
	<!-- END topicrow -->
	<tr align="right"> 
	  <td class="catBottom" colspan="7" height="29">
		{S_HIDDEN_FIELDS}
		<input type="submit" name="delete" class="liteoption" value="{L_DELETE}" />&nbsp;
		<input type="submit" name="move" class="liteoption" value="{L_MOVE}" />&nbsp;
		<input type="submit" name="lock" class="liteoption" value="{L_LOCK}" />&nbsp;
		<input type="submit" name="unlock" class="liteoption" value="{L_UNLOCK}" />&nbsp; 
		<input type="submit" name="merge" class="liteoption" value="{L_MERGE}" />&nbsp;
		{S_ATTRIBUTE_SELECTOR}
		&nbsp;
		<input type="image" src="{I_MINI_SUBMIT}" name="attribute" title="{L_ATTRIBUTE_APPLY}" />
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

  <table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
	  <td align="left" valign="top">&nbsp;<b class="nav">{PAGE_NUMBER}</b></td>
	  <td align="right" valign="top" nowrap="nowrap"><span class="nav">{PAGINATION}&nbsp;</span></td>
	</tr>
  </table>
</form>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td align="right">{JUMPBOX}</td>
  </tr>
</table>
