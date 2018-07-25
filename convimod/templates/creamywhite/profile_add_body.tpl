<script type="text/javascript">
<!--
	/**
	* Set display of page element
	* Borrowed from phpBB 3.0 (aka Olympus)
	* s[-1,0,1] = hide,toggle display,show
	*/
	function dE(n,s)
	{
		var e = document.getElementById(n);
		if (!s)
		{
			s = (e.style.display == '') ? -1 : 1;
		}
		e.style.display = (s == 1) ? 'block' : 'none';
	}
//-->
</script>

{BBC_JS_BOX}

<form action="{S_PROFILE_ACTION}" {S_FORM_ENCTYPE} method="post" name="post">
  {ERROR_BOX}
  <table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
	  <td class="nav">&nbsp;<a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></td>
	</tr>
  </table>
	{SIG_PREVIEW_BOX}
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_PROFILE}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_REGISTRATION_INFO}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
	<tr>
	  <td class="row2" colspan="2"><span class="gensmall">{L_ITEMS_REQUIRED}</span></td>
	</tr>
	<!-- BEGIN switch_namechange_disallowed -->
	<tr>
	  <td class="row1" width="38%"><span class="gen">{L_USERNAME}: *</span></td>
	  <td class="row2"><input type="hidden" name="username" value="{USERNAME}" /><b class="gen">{USERNAME}</b></td>
	</tr>
	<!-- END switch_namechange_disallowed -->
	<!-- BEGIN switch_namechange_allowed -->
	<tr>
	  <td class="row1" width="38%"><span class="gen">{L_USERNAME}: *</span></td>
	  <td class="row2"><input type="text" class="post" style="width:200px" name="username" size="25" maxlength="25" value="{USERNAME}" /></td>
	</tr>
	<!-- END switch_namechange_allowed -->
	<tr>
	  <td class="row1"><span class="gen">{L_EMAIL_ADDRESS}: *</span></td>
	  <td class="row2"><input type="text" class="post" style="width:200px" name="email" size="25" maxlength="255" value="{EMAIL}" /></td>
	</tr>
	<!-- BEGIN switch_edit_profile -->
	<tr>
	  <td class="row1"><span class="gen">{L_CURRENT_PASSWORD}: *</span><br />
		<span class="gensmall">{L_CONFIRM_PASSWORD_EXPLAIN}</span></td>
	  <td class="row2"> 
		<input type="password" class="post" style="width: 200px" name="cur_password" size="25" maxlength="32" value="{CUR_PASSWORD}" />
	  </td>
	</tr>
	<!-- END switch_edit_profile -->
	<tr>
	  <td class="row1"><span class="gen">{L_NEW_PASSWORD}: *</span><br />
		<span class="gensmall">{L_PASSWORD_IF_CHANGED}</span>
	  </td>
	  <td class="row2"> 
		<input type="password" class="post" style="width: 200px" name="new_password" size="25" maxlength="32" value="{NEW_PASSWORD}" />
	  </td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_CONFIRM_PASSWORD}: * </span><br />
		<span class="gensmall">{L_PASSWORD_CONFIRM_IF_CHANGED}</span>
	  </td>
	  <td class="row2"> 
		<input type="password" class="post" style="width: 200px" name="password_confirm" size="25" maxlength="32" value="{PASSWORD_CONFIRM}" />
	  </td>
	</tr>
	<!-- Visual Confirmation, Digits  -->
	<!-- BEGIN switch_confirm_digits -->
	<tr>
		<td class="row1" colspan="2" align="center"><span class="gensmall">{L_CONFIRM_CODE_IMPAIRED}</span><br /><br />{CONFIRM_IMG}<br /><br /></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="gen">{L_CONFIRM_CODE}: * </span><br /><span class="gensmall">{L_CONFIRM_CODE_EXPLAIN_DIGITS}</span></td>
	  <td class="row2"><input type="text" class="post" style="width: 200px" name="confirm_code" size="6" maxlength="6" value="" /></td>
	</tr>
	<!-- END switch_confirm_digits -->
	<!-- Visual Confirmation, Photos -->
	<!-- BEGIN switch_confirm_photos -->
	<tr>
		<td class="row1" colspan="2" align="center">
		<span class="gensmall">{L_CONFIRM_CODE_IMPAIRED}</span><br /><br />
		<span class="gen">{L_CONFIRM_CODE_EXPLAIN_PHOTOS}</span><br /><br />
		{CONFIRM_IMG}<br /><br />
		</td>
	</tr>
	<!-- END switch_confirm_photos -->
  </table>
  <table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
	<tr> 
	  <td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	  <td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	  <td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
	</tr>
  </table>

  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_PROFILE}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_PROFILE_INFO}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
	<tr>
	  <td class="row2" colspan="3"><span class="gensmall">{L_PROFILE_INFO_NOTICE}</span></td>
	</tr>
	<!-- BEGIN flags -->
	<tr>
	  <td class="row1"><span class="gen">{L_FLAG}:</span></td>
	  <td class="row2" colspan="2"><span class="genmed">{S_FLAGS_LIST}&nbsp;
		<img name="flag_img" src="{I_FLAG}" border="0" alt="" title="{L_FLAG_TITLE}" />
	  </span></td>
	</tr>
	<!-- END flags -->
	<!-- BEGIN browsers -->
	<tr>
	  <td class="row1"><span class="gen">{L_BROWSER}:</span></td>
	  <td class="row2" colspan="2"><span class="genmed">{S_BROWSERS_LIST}&nbsp;
		<img name="browser_img" src="{I_BROWSER}" align="absmiddle" border="0" alt="" title="{L_BROWSER_TITLE}" />
	  </span></td>
	</tr>
	<!-- END browsers -->
	{BIRTHDAY_SELECT_BOX}
	<tr>
	  <td class="row1" width="38%"><span class="gen">{L_ICQ_NUMBER}:{ICQ_REQUIRED}</span></td>
	  <td class="row2" colspan="2"> 
		<input type="text" name="icq" class="post" style="width: 100px" size="10" maxlength="15" value="{ICQ}" />
	  </td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_AIM}:{AIM_REQUIRED}</span></td>
	  <td class="row2" colspan="2"> 
		<input type="text" class="post" style="width: 150px" name="aim" size="20" maxlength="255" value="{AIM}" />
	  </td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_MESSENGER}:{MSN_REQUIRED}</span></td>
	  <td class="row2" colspan="2"> 
		<input type="text" class="post" style="width: 150px" name="msn" size="20" maxlength="255" value="{MSN}" />
	  </td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_YAHOO}:{YIM_REQUIRED}</span></td>
	  <td class="row2" colspan="2"> 
		<input type="text" class="post" style="width: 150px" name="yim" size="20" maxlength="255" value="{YIM}" />
	  </td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_WEBSITE}:{WEB_REQUIRED}</span></td>
	  <td class="row2" colspan="2"> 
		<input type="text" class="post" style="width: 200px" name="website" size="25" maxlength="255" value="{WEBSITE}" />
	  </td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_LOCATION}:{LOC_REQUIRED}</span></td>
	  <td class="row2" colspan="2"> 
		<input type="text" class="post" style="width: 200px" name="location" size="25" maxlength="100" value="{LOCATION}" />
	  </td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_OCCUPATION}:{OCC_REQUIRED}</span></td>
	  <td class="row2" colspan="2"> 
		<input type="text" class="post" style="width: 200px" name="occupation" size="25" maxlength="100" value="{OCCUPATION}" />
	  </td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_INTERESTS}:{INT_REQUIRED}</span></td>
	  <td class="row2" colspan="2"> 
		<input type="text" class="post" style="width: 200px" name="interests" size="35" maxlength="150" value="{INTERESTS}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1">
		<span class="gen">{L_SIGNATURE}:</span><br /><span class="gensmall">{L_SIGNATURE_EXPLAIN}<br /><br />{HTML_STATUS}<br />{BBCODE_STATUS}<br />{SMILIES_STATUS}</span>
		<br />
		  <td valign="middle" align="center" class="row2"><table width="100" cellspacing="0" cellpadding="5" border="0">
			<tr align="center">
			  <td colspan="{S_SMILIES_COLSPAN}" class="gensmall"><b>{L_EMOTICONS}</b></td>
			</tr>
			<!-- BEGIN smilies_row -->
			<tr align="center" valign="middle">
			  <!-- BEGIN smilies_col -->
				  <td><img src="{smilies_row.smilies_col.SMILEY_IMG}" border="0" onmouseover="this.style.cursor='hand';" onclick="emoticon('{smilies_row.smilies_col.SMILEY_CODE}');" alt="{smilies_row.smilies_col.SMILEY_DESC}" title="{smilies_row.smilies_col.SMILEY_DESC}" /></td>
			  <!-- END smilies_col -->
			</tr>
			<!-- END smilies_row -->
			<!-- BEGIN switch_smilies_extra -->
			<tr align="center">
			  <td colspan="{S_SMILIES_COLSPAN}"><span class="nav"><a href="{U_MORE_SMILIES}" onclick="window.open('{U_MORE_SMILIES}', '_phpbbsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=250');return false;" target="_phpbbsmilies" class="nav">{L_MORE_SMILIES}</a></span></td>
			</tr>
			<!-- END switch_smilies_extra -->
		  </table></td>
	  </td>
	  <td class="row2"><table cellspacing="0" cellpadding="2" border="0">
		  {BBC_DISPLAY_BOX}
		  <tr> 
			<td><textarea name="message" style="width:450px" rows="10" cols="76" wrap="virtual" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);">{SIGNATURE}</textarea></td>
		  </tr>
		  <tr>
			<td><input type="submit" name="preview" value="{L_PREVIEW_SIG}" class="mainoption" /></td>
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

  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_PROFILE}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_QP_SETTINGS}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
	<!-- BEGIN qpes -->
	<tr>
		<td class="row1" width="38%"><span class="gen">{qpes.L_QP_TITLE}</span><br /><span class="gensmall">{qpes.L_QP_DESC}</span></td>
		<td class="row2"><span class="gen">
			<input type="radio" name="{qpes.QP_VAR}" value="1"{qpes.QP_YES} /> {L_YES}&nbsp;
			<input type="radio" name="{qpes.QP_VAR}" value="0"{qpes.QP_NO} /> {L_NO}
		</span></td>
	</tr>
	<!-- END qpes -->
  </table>
  <table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
	<tr> 
	  <td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	  <td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	  <td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
	</tr>
  </table>

  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_PROFILE}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_PREFERENCES}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
	<tr>
	  <td class="row1" width="38%"><span class="gen">{L_PUBLIC_VIEW_EMAIL}:</span></td>
	  <td class="row2"><span class="gen">
		<input type="radio" name="viewemail" value="1" {VIEW_EMAIL_YES} /> {L_YES}&nbsp;
		<input type="radio" name="viewemail" value="0" {VIEW_EMAIL_NO} /> {L_NO}
	  </span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_HIDE_USER}:</span></td>
	  <td class="row2"><span class="gen">
		<input type="radio" name="hideonline" value="1" {HIDE_USER_YES} /> {L_YES}&nbsp;
		<input type="radio" name="hideonline" value="0" {HIDE_USER_NO} /> {L_NO}
	  </span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_NOTIFY_ON_REPLY}:</span><br /><span class="gensmall">{L_NOTIFY_ON_REPLY_EXPLAIN}</span></td>
	  <td class="row2"><span class="gen">
		<input type="radio" name="notifyreply" value="1" {NOTIFY_REPLY_YES} /> {L_YES}&nbsp;
		<input type="radio" name="notifyreply" value="0" {NOTIFY_REPLY_NO} /> {L_NO}
	  </span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_NOTIFY_ON_PRIVMSG}:</span></td>
	  <td class="row2"><span class="gen">
		<input type="radio" name="notifypm" value="1" {NOTIFY_PM_YES} /> {L_YES}&nbsp;
		<input type="radio" name="notifypm" value="0" {NOTIFY_PM_NO} /> {L_NO}
	  </span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_POPUP_ON_PRIVMSG}:</span><br /><span class="gensmall">{L_POPUP_ON_PRIVMSG_EXPLAIN}</span></td>
	  <td class="row2"><span class="gen">
		<input type="radio" name="popup_pm" value="1" {POPUP_PM_YES} /> {L_YES}&nbsp;
		<input type="radio" name="popup_pm" value="0" {POPUP_PM_NO} /> {L_NO}
	  </span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_ALWAYS_ADD_SIGNATURE}:</span></td>
	  <td class="row2"><span class="gen">
		<input type="radio" name="attachsig" value="1" {ALWAYS_ADD_SIGNATURE_YES} /> {L_YES}&nbsp;
		<input type="radio" name="attachsig" value="0" {ALWAYS_ADD_SIGNATURE_NO} /> {L_NO}
	  </span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_ALWAYS_ALLOW_BBCODE}:</span></td>
	  <td class="row2"><span class="gen">
		<input type="radio" name="allowbbcode" value="1" {ALWAYS_ALLOW_BBCODE_YES} /> {L_YES}&nbsp;
		<input type="radio" name="allowbbcode" value="0" {ALWAYS_ALLOW_BBCODE_NO} /> {L_NO}
	  </span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_ALWAYS_ALLOW_HTML}:</span></td>
	  <td class="row2"><span class="gen">
		<input type="radio" name="allowhtml" value="1" {ALWAYS_ALLOW_HTML_YES} /> {L_YES}&nbsp;
		<input type="radio" name="allowhtml" value="0" {ALWAYS_ALLOW_HTML_NO} /> {L_NO}
	  </span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_ALWAYS_ALLOW_SMILIES}:</span></td>
	  <td class="row2"><span class="gen">
		<input type="radio" name="allowsmilies" value="1" {ALWAYS_ALLOW_SMILIES_YES} /> {L_YES}&nbsp;
		<input type="radio" name="allowsmilies" value="0" {ALWAYS_ALLOW_SMILIES_NO} /> {L_NO}
	  </span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_BOARD_LANGUAGE}:</span></td>
	  <td class="row2"><span class="gensmall">{LANGUAGE_SELECT}</span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_BOARD_STYLE}:</span></td>
	  <td class="row2"><span class="gensmall">{STYLE_SELECT}</span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_TIMEZONE}:</span></td>
	  <td class="row2"><span class="gensmall">{TIMEZONE_SELECT}</span></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_DATE_FORMAT}:</span><br />
		<span class="gensmall">{L_DATE_FORMAT_EXPLAIN}</span></td>
	  <td class="row2"><span class="gen">
		<select name="dateoptions" id="dateoptions" onchange="if (this.value=='custom') { dE('custom_date',1); } else { dE('custom_date',-1); } if (this.value == 'custom') { document.getElementById('dateformat').value = '{A_DEFAULT_DATEFORMAT}'; } else { document.getElementById('dateformat').value = this.value; }">
			{S_DATEFORMAT_OPTIONS}
		</select>
		<div id="custom_date"{S_CUSTOM_DATEFORMAT}><input type="text" name="dateformat" id="dateformat" value="{DATE_FORMAT}" maxlength="30" class="post" style="margin-top: 3px;" /></div>
	  </span></td>
	</tr>
  <!-- BEGIN switch_avatar_block -->
  </table>
  <table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
	<tr> 
	  <td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	  <td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	  <td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
	</tr>
  </table>

  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_PROFILE}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_AVATAR_PANEL}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellpadding="3" cellspacing="1" border="0">
	<tr>
	  <td class="row1" width="38%" colspan="2"><table width="70%" cellspacing="2" cellpadding="0" border="0" align="center">
		<tr>
		  <td width="65%"><span class="gensmall">{L_AVATAR_EXPLAIN}</span></td>
		  <td align="center"><span class="gensmall">
			{L_CURRENT_IMAGE}<br />{AVATAR}<br />
			<input type="checkbox" name="avatardel" /> {L_DELETE_AVATAR}
		  </span></td>
		</tr>
	  </table></td>
	</tr>
	<!-- BEGIN switch_avatar_local_upload -->
	<tr>
	  <td class="row1" width="38%"><span class="gen">{L_UPLOAD_AVATAR_FILE}:</span></td>
	  <td class="row2">
		<input type="hidden" name="MAX_FILE_SIZE" value="{AVATAR_SIZE}" />
		<input type="file" name="avatar" class="post" style="width:200px" />
	  </td>
	</tr>
	<!-- END switch_avatar_local_upload -->
	<!-- BEGIN switch_avatar_remote_upload -->
	<tr>
	  <td class="row1" width="38%"><span class="gen">{L_UPLOAD_AVATAR_URL}:</span><br /><span class="gensmall">{L_UPLOAD_AVATAR_URL_EXPLAIN}</span></td>
	  <td class="row2"><input type="text" name="avatarurl" size="40" class="post" style="width:200px" /></td>
	</tr>
	<!-- END switch_avatar_remote_upload -->
	<!-- BEGIN switch_avatar_remote_link -->
	<tr>
	  <td class="row1" width="38%"><span class="gen">{L_LINK_REMOTE_AVATAR}:</span><br /><span class="gensmall">{L_LINK_REMOTE_AVATAR_EXPLAIN}</span></td>
	  <td class="row2"><input type="text" name="avatarremoteurl" size="40" class="post" style="width:200px" /></td>
	</tr>
	<!-- END switch_avatar_remote_link -->
	<!-- BEGIN switch_avatar_local_gallery -->
	<tr>
	  <td class="row1" width="38%"><span class="gen">{L_AVATAR_GALLERY}:</span></td>
	  <td class="row2"><input type="submit" name="avatargallery" value="{L_SHOW_GALLERY}" class="liteoption" /></td>
	</tr>
	<!-- END switch_avatar_local_gallery -->
  <!-- END switch_avatar_block -->
	<tr>
	  <td class="catBottom" colspan="2" align="center" height="28">
	  	{S_HIDDEN_FIELDS}
	  	<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;
	  	<input type="reset" value="{L_RESET}" name="reset" class="liteoption" />
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
