<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_POLL}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap">{POLL_QUESTION}</td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
  <tr>
	<td class="row2" colspan="2">
	<form method="POST" action="{S_POLL_ACTION}"><table cellspacing="0" cellpadding="4" border="0" align="center">
	  <tr>
		<td align="center"><b class="gen">{POLL_QUESTION}</b></td>
	  </tr>
	  <tr>
		<td align="center"><table cellspacing="0" cellpadding="2" border="0">
		  <!-- BEGIN poll_option -->
		  <tr>
			<td><input type="radio" name="vote_id" value="{poll_option.POLL_OPTION_ID}" />&nbsp;</td>
			<td class="gen">{poll_option.POLL_OPTION_CAPTION}</td>
		  </tr>
		  <!-- END poll_option -->
		</table></td>
	  </tr>
	  <tr>
		<td align="center"><input type="submit" name="submit" value="{L_SUBMIT_VOTE}" class="liteoption" /></td>
	  </tr>
	  <tr>
		<td align="center"><b class="gensmall"><a href="{U_VIEW_RESULTS}" class="gensmall">{L_VIEW_RESULTS}</a></b>{S_HIDDEN_FIELDS}</td>
	  </tr>
	</table></form>
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