<script language="javascript" type="text/javascript">
<!--
function emoticon(text)
{
	text = ' ' + text + ' ';
	if (opener.document.forms['post'].message.createTextRange && opener.document.forms['post'].message.caretPos)
	{
		var caretPos = opener.document.forms['post'].message.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
		opener.document.forms['post'].message.focus();
	}
	else
	{
		opener.document.forms['post'].message.value  += text;
		opener.document.forms['post'].message.focus();
	}
}
//-->
</script>

<table width="100%" cellspacing="0" cellpadding="10" border="0">
  <tr>
	<td>
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
		<td class="hdr" width="100%" align="left" nowrap="nowrap">{L_EMOTICONS}</td>
		<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	  </tr>
	</table>
	<table class="forumline" width="100%" cellspacing="1" cellpadding="4" border="0">
	  <tr>
		<td class="row1"><table width="100" cellspacing="0" cellpadding="5" border="0">
		  <!-- BEGIN smilies_row -->
		  <tr align="center" valign="middle">
			<!-- BEGIN smilies_col -->
			<td><a href="javascript:emoticon('{smilies_row.smilies_col.SMILEY_CODE}')"><img src="{smilies_row.smilies_col.SMILEY_IMG}" border="0" alt="{smilies_row.smilies_col.SMILEY_DESC}" title="{smilies_row.smilies_col.SMILEY_DESC}" /></a></td>
			<!-- END smilies_col -->
		  </tr>
		  <!-- END smilies_row -->
		  <!-- BEGIN switch_smilies_extra -->
		  <tr align="center">
			<td class="nav" colspan="{S_SMILIES_COLSPAN}"><a href="{U_MORE_SMILIES}" onclick="open_window('{U_MORE_SMILIES}', 250, 300);return false" target="_smilies" class="nav">{L_MORE_SMILIES}</a></td>
		  </tr>
		  <!-- END switch_smilies_extra -->
		</table></td>
	  </tr>
	  <tr>
		<td class="row2" align="center"><span class="genmed"><a href="javascript:window.close();" class="genmed">{L_CLOSE_WINDOW}</a></span></td>
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