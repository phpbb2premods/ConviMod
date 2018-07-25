<h1>{L_DISALLOW_TITLE}</h1>

<p>{L_DISALLOW_EXPLAIN}</p>

<form method="post" action="{S_FORM_ACTION}">
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_DISALLOW_TITLE}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellspacing="1" cellpadding="4" border="0" align="center">
	<tr>
	  <th class="thHead" colspan="2">{L_ADD_DISALLOW}</th>
	</tr>
	<tr>
	  <td class="row1" width="50%">{L_USERNAME}<br /><span class="gensmall">{L_ADD_EXPLAIN}</span></td>
	  <td class="row2">
		<input class="post" type="text" name="disallowed_user" size="30" />&nbsp;
		<input type="submit" name="add_name" value="{L_ADD}" class="mainoption" />
	  </td>
	</tr>
	<tr>
	  <th class="thHead" colspan="2">{L_DELETE_DISALLOW}</th>
	</tr>
	<tr>
	  <td class="row1">{L_USERNAME}<br /><span class="gensmall">{L_DELETE_EXPLAIN}</span></td>
	  <td class="row2">
		{S_DISALLOW_SELECT}&nbsp;
		<input type="submit" name="delete_name" value="{L_DELETE}" class="liteoption" />
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