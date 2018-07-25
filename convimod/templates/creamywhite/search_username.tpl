<script language="javascript" type="text/javascript">
<!--
function refresh_username(selected_username)
{
	opener.document.forms['post'].username.value = selected_username;
	opener.focus();
	window.close();
}
//-->
</script>

<form method="post" name="search" action="{S_SEARCH_ACTION}">
  <table width="100%" cellspacing="0" cellpadding="10" border="0">
	<tr>
	  <td>
	  <table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr>
		  <td width="35" align="left"><img src="{I_HDR_SEARCH}" alt="" /></td>
		  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_SEARCH_USERNAME}</td>
		  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
		</tr>
	  </table>
	  <table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
		<tr>
		  <td valign="top" class="row1">
		  	<span class="genmed"><input type="text" name="search_username" value="{USERNAME}" class="post" />&nbsp;
		  	<input type="submit" name="search" value="{L_SEARCH}" class="liteoption" /></span><br />
		  	<span class="gensmall">{L_SEARCH_EXPLAIN}</span><br />
			<!-- BEGIN switch_select_name -->
			<span class="genmed">{L_UPDATE_USERNAME}<br />
			<select name="username_list">{S_USERNAME_OPTIONS}</select>&nbsp;
			<input type="submit" class="liteoption" onClick="refresh_username(this.form.username_list.options[this.form.username_list.selectedIndex].value);return false;" name="use" value="{L_SELECT}" /></span><br />
			<!-- END switch_select_name -->
			<br /><span class="genmed"><a href="javascript:window.close();" class="genmed">{L_CLOSE_WINDOW}</a></span>
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
	  </td>
	</tr>
  </table>
</form>
