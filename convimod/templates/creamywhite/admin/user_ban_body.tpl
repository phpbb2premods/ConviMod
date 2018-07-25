<h1>{L_BAN_TITLE}</h1>

<p>{L_BAN_EXPLAIN}</p>

<form method="post" name="post" action="{S_BANLIST_ACTION}">
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_BAN_TITLE}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellspacing="1" cellpadding="4" border="0">
	<tr>
	  <th class="thHead" colspan="2">{L_BAN_USER}</th>
	</tr>
	<tr>
	  <td class="row1" width="50%">{L_USERNAME}:</td>
	  <td class="row2">
	  	{S_HIDDEN_FIELDS}
		<input type="text" class="post" name="username" maxlength="50" size="20" />&nbsp;
		<input type="hidden" name="mode" value="edit" />&nbsp;
		<input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="liteoption" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1">{L_BAN_REASON}:</td>
	  <td class="row2"><textarea class="post" type="text" name="ban_reason" size="20" style="width:100%; height:60px;"></textarea></td>
	</tr>
	<tr>
	  <th class="thHead" colspan="2">{L_UNBAN_USER}</th>
	</tr>
	<tr>
	  <td class="row1">{L_USERNAME}:<br /><span class="gensmall">{L_UNBAN_USER_EXPLAIN}</span></td>
	  <td class="row2">{S_UNBAN_USERLIST_SELECT}</td>
	</tr>
	<tr>
	  <th class="thHead" colspan="2">{L_BAN_IP}</th>
	</tr>
	<tr>
	  <td class="row1">{L_IP_OR_HOSTNAME}:<br /><span class="gensmall">{L_BAN_IP_EXPLAIN}</span></td>
	  <td class="row2"><input class="post" type="text" name="ban_ip" size="35" /></td>
	</tr>
	<tr>
	  <th class="thHead" colspan="2">{L_UNBAN_IP}</th>
	</tr>
	<tr>
	  <td class="row1">{L_IP_OR_HOSTNAME}:<br /><span class="gensmall">{L_UNBAN_IP_EXPLAIN}</span></td>
	  <td class="row2">{S_UNBAN_IPLIST_SELECT}</td>
	</tr>
	<tr>
	  <th class="thHead" colspan="2">{L_BAN_EMAIL}</th>
	</tr>
	<tr>
	  <td class="row1">{L_EMAIL_ADDRESS}:<br /><span class="gensmall">{L_BAN_EMAIL_EXPLAIN}</span></td>
	  <td class="row2"><input class="post" type="text" name="ban_email" size="35" /></td>
	</tr>
	<tr>
	  <th class="thHead" colspan="2">{L_UNBAN_EMAIL}</th>
	</tr>
	<tr>
	  <td class="row1">{L_EMAIL_ADDRESS}:<br /><span class="gensmall">{L_UNBAN_EMAIL_EXPLAIN}</span></td>
	  <td class="row2">{S_UNBAN_EMAILLIST_SELECT}</td>
	</tr>
	<tr>
	  <td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
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
<p>{L_BAN_EXPLAIN_WARN}</p>
