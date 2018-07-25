<form action="{S_PROFILE_ACTION}" method="post">
  <table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
	  <td class="nav">&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a></td>
	</tr>
  </table>

  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_PROFILE}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_AVATAR_GALLERY}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
	<tr>
	  <td class="catBottom" align="center" valign="middle" colspan="6" height="28"><span class="genmed">
		{L_CATEGORY}:&nbsp;{S_CATEGORY_SELECT}&nbsp;
		<input type="submit" class="liteoption" value="{L_GO}" name="avatargallery" />
	  </span></td>
	</tr>
	<!-- BEGIN avatar_row -->
	<tr>
	  <!-- BEGIN avatar_column -->
	  <td class="row1" align="center"><img src="{avatar_row.avatar_column.AVATAR_IMAGE}" alt="{avatar_row.avatar_column.AVATAR_NAME}" title="{avatar_row.avatar_column.AVATAR_NAME}" /></td>
	  <!-- END avatar_column -->
	</tr>
	<tr>
	  <!-- BEGIN avatar_option_column -->
	  <td class="row2" align="center"><input type="radio" name="avatarselect" value="{avatar_row.avatar_option_column.S_OPTIONS_AVATAR}" /></td>
	  <!-- END avatar_option_column -->
	</tr>
	<!-- END avatar_row -->
	<tr>
	  <td class="catBottom" colspan="{S_COLSPAN}" align="center" height="28">
		{S_HIDDEN_FIELDS}
		<input type="submit" name="submitavatar" value="{L_SELECT_AVATAR}" class="mainoption" />&nbsp;
		<input type="submit" name="cancelavatar" value="{L_RETURN_PROFILE}" class="liteoption" />
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