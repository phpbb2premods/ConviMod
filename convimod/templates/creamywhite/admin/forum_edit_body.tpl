<h1>{L_FORUM_TITLE}</h1>

<p>{L_FORUM_EXPLAIN}</p>

<form action="{S_FORUM_ACTION}" method="post">
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_FORUM_SETTINGS}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0" align="center">
	<tr>
	  <td class="row1" width="38%">{L_FORUM_NAME}</td>
	  <td class="row2"><input type="text" size="25" name="forumname" value="{FORUM_NAME}" class="post" /></td>
	</tr>
	<tr> 
	  <td class="row1">{L_FORUM_ICON}<br /><span class="gensmall">{L_FORUM_ICON_EXPLAIN}</span></td>
	  <td class="row2"><input type="text" size="35" name="forumicon" value="{ICON}" class="post" />&nbsp;&nbsp;&nbsp;{ICON_DISPLAY}</td>
	</tr>
	<tr>
	  <td class="row1">{L_FORUM_DESCRIPTION}</td>
	  <td class="row2"><textarea rows="5" cols="45" wrap="virtual" name="forumdesc" class="post">{DESCRIPTION}</textarea></td>
	</tr>
	<tr>
	  <td class="row1">{L_CATEGORY}</td>
	  <td class="row2"><select name="c">{S_CAT_LIST}</select></td>
	</tr>
	<tr>
	  <td class="row1">{L_FORUM_STATUS}</td>
	  <td class="row2"><select name="forumstatus">{S_STATUS_LIST}</select></td>
	</tr>
	<tr>
	  <td class="row1">{L_FORUM_IS_LINK}</td>
	  <td class="row2"><input class="post" type="checkbox" name="forum_is_link" value="1" {FORUM_IS_LINK} /></td>
	</tr>
	<tr>
	  <td class="row1">{L_FORUM_LINK_TARGET}</td>
	  <td class="row2"><input class="post" type="checkbox" name="forum_link_target" value="1" {FORUM_LINK_TARGET} /></td>
	</tr>
	<tr>
	  <td class="row1">{L_FORUM_WEBLINK}</td>
	  <td class="row2"><input class="post" type="text" size="25" maxlength="200" name="forum_weblink" value="{FORUM_WEBLINK}" /></td>
	</tr>
	<tr>
	  <td class="row1">{L_FORUM_AS_CATEGORY}</td>
	  <td class="row2">
	  	<input type="radio" name="forum_as_category" value="1" {FORUM_AS_CATEGORY_YES} /> {L_YES}&nbsp;
	  	<input type="radio" name="forum_as_category" value="0" {FORUM_AS_CATEGORY_NO} /> {L_NO}
	  </td>
	</tr>
	<tr>
	  <td class="row1">{L_QP_TITLE}</td>
	  <td class="row2">
	  	<input type="radio" name="forum_qpes" value="1" {FORUM_QP_YES} /> {L_YES}&nbsp;
	  	<input type="radio" name="forum_qpes" value="0" {FORUM_QP_NO} /> {L_NO}
	  </td>
	</tr>
	<tr>
	  <td class="row1">{L_AUTO_PRUNE}</td>
	  <td class="row2"><table cellspacing="0" cellpadding="1" border="0">
		<tr>
		  <td align="right" valign="middle">{L_ENABLED}</td>
		  <td align="left" valign="middle"><input type="checkbox" name="prune_enable" value="1" {S_PRUNE_ENABLED} /></td>
		</tr>
		<tr>
		  <td align="right" valign="middle">{L_PRUNE_DAYS}</td>
		  <td align="left" valign="middle"><input type="text" name="prune_days" value="{PRUNE_DAYS}" size="5" class="post" /> {L_DAYS}</td>
		</tr>
		<tr>
		  <td align="right" valign="middle">{L_PRUNE_FREQ}</td>
		  <td align="left" valign="middle"><input type="text" name="prune_freq" value="{PRUNE_FREQ}" size="5" class="post" /> {L_DAYS}</td>
		</tr>
	  </table></td>
	</tr>
	<tr>
	  <td class="catBottom" colspan="2" align="center">
		{S_HIDDEN_FIELDS}
		<input type="submit" name="submit" value="{S_SUBMIT_VALUE}" class="mainoption" />
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
</form>
