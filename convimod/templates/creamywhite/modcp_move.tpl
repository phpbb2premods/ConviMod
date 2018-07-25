<form action="{S_MODCP_ACTION}" method="post">
  <table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
	  <td class="nav">&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a></td>
	</tr>
  </table>

  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_MODCP}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{MESSAGE_TITLE}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
	<tr>
	  <td class="row1"><table width="100%" cellspacing="0" cellpadding="1" border="0">
		<tr>
		  <td align="center">
			<span class="gen">{L_MOVE_TO_FORUM}&nbsp;{S_FORUM_SELECT}<br /><br />
			<input type="checkbox" name="move_leave_shadow" checked="checked" />{L_LEAVESHADOW}<br /><br />
			{MESSAGE_TEXT}</span><br /><br />
			{S_HIDDEN_FIELDS} 
			<input class="mainoption" type="submit" name="confirm" value="{L_YES}" />&nbsp;
			<input class="liteoption" type="submit" name="cancel" value="{L_NO}" />
		  </td>
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
</form>