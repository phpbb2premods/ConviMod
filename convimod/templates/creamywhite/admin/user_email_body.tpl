<h1>{L_EMAIL_TITLE}</h1>

<p>{L_EMAIL_EXPLAIN}</p>

<form method="post" action="{S_USER_ACTION}">
  {ERROR_BOX}

  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_COMPOSE}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellspacing="1" cellpadding="4" border="0">
	<tr>
	  <td class="row1" width="38%"><b>{L_RECIPIENTS}</b></td>
	  <td class="row2" align="left">{S_GROUP_SELECT}</td>
	</tr>
	<tr>
	  <td class="row1"><b>{L_EMAIL_SUBJECT}</b></td>
	  <td class="row2"><input class="post" type="text" name="subject" size="45" maxlength="100" tabindex="2" class="post" value="{SUBJECT}" /></td>
	</tr>
	<tr>
	  <td class="row1" valign="top"><b class="gen">{L_EMAIL_MSG}</b></td> 
	  <td class="row2"><textarea name="message" class="post" rows="15" cols="35" wrap="virtual" style="width:450px" tabindex="3">{MESSAGE}</textarea></td> 
	</tr>
	<tr>
	  <td class="catBottom" align="center" colspan="2">
		<input type="submit" value="{L_EMAIL}" name="submit" class="mainoption" />
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