<script language="JavaScript" type="text/javascript">
<!--//
function _dom_menu()
{
	return this;
}
	_dom_menu.prototype.objref = function(id)
	{
		return document.getElementById ? document.getElementById(id) : (document.all ? document.all[id] : (document.layers ? document.layers[id] : null));
	}
	_dom_menu.prototype.cancel_event = function()
	{
		if ( window.event )
		{
			window.event.cancelBubble = true;
		}
	}

	_dom_menu.prototype.set = function(menu) {
		var menus = new Array(
			'generalinfo',
			'securityinfo',
			'suscribeinfo',
			'timegestioninfo',
			'cookiesinfo',
			'pminfo',
			'avatarinfo',
			'postinfo',
			'smilesinfo',
			'basicinfo',
			'coppainfo',
			'emailinfo',
			'birthdayinfo',
			'divinfo'
		);
		var object;
		var opt;
		var flag;
		for (i=0; i < menus.length; i++)
		{
			cur_menu = menus[i];
			object = this.objref(cur_menu);
			if ( object && object.style )
			{
				object.style.display = (cur_menu == menu) ? '' : 'none';
			}
			opt = this.objref(cur_menu + '_opt');
			if ( opt && opt.style )
			{
				opt.style.fontWeight = (cur_menu == menu) ? 'bold' : '';
			}
			flag = this.objref(cur_menu + '_flag');
			if ( flag && flag.style )
			{
				flag.style.fontWeight = (cur_menu == menu) ? 'bold' : '';
				flag.className = (cur_menu == menu) ? 'row1 gensmall' : 'row2 gensmall';
			}
		}
		this.cancel_event();
	}

// instantiate
dom_menu = new _dom_menu();
//-->
</script>

<h1>{L_CONFIGURATION_TITLE}</h1>

<p>{L_CONFIGURATION_EXPLAIN}</p>


<form action="{S_CONFIG_ACTION}" method="post">
<table cellpadding="0" cellspacing="2" border="0" width="100%"><tr><td width="200" valign="top">

<table cellpadding="4" cellspacing="1" border="0" class="forumline" width="200">

<tr>
  <th class="thHead" colspan="2">{L_CONFIGURATION_TITLE}</th>
</tr>
<tr>
  <td id="generalinfo_flag" class="row1 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('generalinfo'); return false;"><div id="generalinfo_opt" class="gensmall" style="font-weight: bold;"><a href="#" onclick="dom_menu.set('generalinfo'); return false;">{L_GENERAL_SETTINGS}</a></div></td>
</tr>
<tr>
  <td id="securityinfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('securityinfo'); return false;"><div id="securityinfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('securityinfo'); return false;">{L_SECURITY_SETTINGS}</a></div></td>
</tr>
<tr>
  <td id="suscribeinfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('suscribeinfo'); return false;"><div id="suscribeinfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('suscribeinfo'); return false;">{L_SUSCRIBE_SETTINGS}</a></div></td>
</tr>
<tr>
  <td id="timegestioninfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('timegestioninfo'); return false;"><div id="timegestioninfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('timegestioninfo'); return false;">{L_TIME_SETTINGS}</a></div></td>
</tr>
<tr>
  <td id="cookiesinfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('cookiesinfo'); return false;"><div id="cookiesinfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('cookiesinfo'); return false;">{L_COOKIE_SETTINGS}</a></div></td>
</tr>
<tr>
  <td id="pminfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('pminfo'); return false;"><div id="pminfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('pminfo'); return false;">{L_PRIVATE_MESSAGING}</a></div></td>
</tr>
<tr>
  <td id="avatarinfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('avatarinfo'); return false;"><div id="avatarinfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('avatarinfo'); return false;">{L_AVATAR_SETTINGS}</a></div></td>
</tr>
<tr>
  <td id="postinfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('postinfo'); return false;"><div id="postinfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('postinfo'); return false;">{L_MESSAGES_SETTINGS}</a></div></td>
</tr>
<tr>
  <td id="smilesinfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('smilesinfo'); return false;"><div id="smilesinfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('smilesinfo'); return false;">{L_SMILEY_CONFIG}</a></div></td>
</tr>
<tr>
  <td id="basicinfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('basicinfo'); return false;"><div id="basicinfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('basicinfo'); return false;">{L_ABILITIES_SETTINGS}</a></div></td>
</tr>
<tr>
  <td id="coppainfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('coppainfo'); return false;"><div id="coppainfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('coppainfo'); return false;">{L_COPPA_SETTINGS}</a></div></td>
</tr>
<tr>
  <td id="emailinfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('emailinfo'); return false;"><div id="emailinfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('emailinfo'); return false;">{L_EMAIL_SETTINGS}</a></div></td>
</tr>
<tr>
  <td id="birthdayinfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('birthdayinfo'); return false;"><div id="birthdayinfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('birthdayinfo'); return false;">{L_BDAY_SETTINGS}</a></div></td>
</tr>
<tr>
  <td id="divinfo_flag" class="row2 gensmall" align="right" width="10">&raquo;</td>
  <td style="cursor: pointer; font-weight: normal;" class="row1" onmouseover="this.className='row2'; this.style.cursor='pointer'; this.style.fontWeight='bold';" onmouseout="this.className='row1'; this.style.fontWeight='normal';" onclick="dom_menu.set('divinfo'); return false;"><div id="divinfo_opt" class="gensmall"><a href="#" onclick="dom_menu.set('divinfo'); return false;">{L_DIV_SETTINGS}</a></div></td>
</tr>
</table>

</td><td valign="top" width="100%">

<table id="generalinfo" class="forumline" border="0" cellpadding="4" cellspacing="1" width="100%">
	<tr>
	  <th class="thHead" colspan="2">{L_GENERAL_SETTINGS}</th>
	</tr>
	<tr>
		<td class="row1">{L_SERVER_NAME}</td>
		<td class="row2" width="45%">
		<input class="post" type="text" maxlength="255" size="40" name="server_name" value="{SERVER_NAME}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_SERVER_PORT}<br />
		<span class="gensmall">{L_SERVER_PORT_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" maxlength="5" size="5" name="server_port" value="{SERVER_PORT}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_SCRIPT_PATH}<br />
		<span class="gensmall">{L_SCRIPT_PATH_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" maxlength="255" name="script_path" value="{SCRIPT_PATH}" />
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_SITE_NAME}<br />
		<span class="gensmall">{L_SITE_NAME_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" size="25" maxlength="100" name="sitename" value="{SITENAME}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_SITE_DESCRIPTION}</td>
		<td class="row2">
		<input class="post" type="text" size="40" maxlength="255" name="site_desc" value="{SITE_DESCRIPTION}" />
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_BOARD_DISABLE}<br /><span class="gensmall">{L_BOARD_DISABLE_EXPLAIN}</span></td>
		<td class="row2">
			<input type="radio" name="board_disable" id="board_disable_1" value="1" {BOARD_DISABLE_YES} />
			<label for="board_disable_1">{L_YES}</label>&nbsp;&nbsp;
			<input type="radio" name="board_disable" id="board_disable_0" value="0" {BOARD_DISABLE_NO} />
			<label for="board_disable_0">{L_NO}</label>
		</td>
	</tr>
	<tr>
		<td class="row1" style="vertical-align: top">{L_BOARD_DISABLE_MODE}<br /><span class="gensmall">{L_BOARD_DISABLE_MODE_EXPLAIN}</span></td>
		<td class="row2">
			{BOARD_DISABLE_MODE}
		</td>
	</tr>
	<tr>
		<td class="row1" style="vertical-align: top">{L_BOARD_DISABLE_MSG}<br /><span class="gensmall">{L_BOARD_DISABLE_MSG_EXPLAIN}</span></td>
		<td class="row2">
			<textarea name="board_disable_msg" rows="3" cols="30" style="width: 100%">{BOARD_DISABLE_MSG}</textarea>
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_DEFAULT_STYLE}</td>
		<td class="row2">{STYLE_SELECT}</td>
	</tr>
	<tr>
		<td class="row1">{L_FORUM_WIDTH}<br /><span class="gensmall">{L_FORUM_WIDTH_EXPLAIN}</span></td>
		<td class="row2">
		<input class="post" type="text" size="6" maxlength="4" name="forum_width" value="{FORUM_WIDTH}" /></td>
	</tr>
	<tr>
		<td class="row1">{L_OVERRIDE_STYLE}<br />
		<span class="gensmall">{L_OVERRIDE_STYLE_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input type="radio" name="override_user_style" value="1" {OVERRIDE_STYLE_YES} />
		<span class="genmed">{L_YES}</span>&nbsp;
		<input type="radio" name="override_user_style" value="0" {OVERRIDE_STYLE_NO} />
		<span class="genmed">{L_NO}</span>
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_DEFAULT_LANGUAGE}</td>
		<td class="row2">{LANG_SELECT}</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_ENABLE_GZIP}</td>
		<td class="row2">
		<input type="radio" name="gzip_compress" value="1" {GZIP_YES} />
		<span class="genmed">{L_YES}</span>&nbsp;
		<input type="radio" name="gzip_compress" value="0" {GZIP_NO} />
		<span class="genmed">{L_NO}</span>
		</td>
	</tr>
	<tr>
		<td class="row1">{L_ENABLE_PRUNE}</td>
		<td class="row2">
		<input type="radio" name="prune_enable" value="1" {PRUNE_YES} />
		<span class="genmed">{L_YES}</span>&nbsp;
		<input type="radio" name="prune_enable" value="0" {PRUNE_NO} />
		<span class="genmed">{L_NO}</span>
		</td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="securityinfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_SECURITY_SETTINGS}</th>
	</tr>
	<tr>
		<td class="row1">{L_ALLOW_AUTOLOGIN}<br />
		<span class="gensmall">{L_ALLOW_AUTOLOGIN_EXPLAIN}</span>
		</td>
		<td class="row2" width="45%">
		<input type="radio" name="allow_autologin" value="1" {ALLOW_AUTOLOGIN_YES} />
		<span class="genmed">{L_YES}</span>&nbsp;
		<input type="radio" name="allow_autologin" value="0" {ALLOW_AUTOLOGIN_NO} />
		<span class="genmed">{L_NO}</span>
		</td>
	</tr>
	<tr>
		<td class="row1">{L_AUTOLOGIN_TIME}<br />
		<span class="gensmall">{L_AUTOLOGIN_TIME_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" size="3" maxlength="4" name="max_autologin_time" value="{AUTOLOGIN_TIME}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_COMPLEX_ACP_PW}</td>
		<td class="row2"><input type="radio" name="complex_acp_pw" value="1" {COMPLEX_ACP_PW_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="complex_acp_pw" value="0" {COMPLEX_ACP_PW_NO} /> {L_NO}</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_MAX_LOGIN_ATTEMPTS}<br />
		<span class="gensmall">{L_MAX_LOGIN_ATTEMPTS_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" size="3" maxlength="4" name="max_login_attempts" value="{MAX_LOGIN_ATTEMPTS}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_LOGIN_RESET_TIME}<br />
		<span class="gensmall">{L_LOGIN_RESET_TIME_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" size="3" maxlength="4" name="login_reset_time" value="{LOGIN_RESET_TIME}" />
		</td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="suscribeinfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_SUSCRIBE_SETTINGS}</th>
	</tr>
	<tr>
		<td class="row1" width="50%">{L_VISUAL_CONFIRM}<br /><span class="gensmall">{L_VISUAL_CONFIRM_EXPLAIN}</span></td>
	  	<td class="row2">
			<!-- BEGIN switch_enable_photos -->
			<input type="radio" name="enable_confirm" value="2" {CONFIRM_PHOTOS} />{L_VISUAL_CONFIRM_PHOTOS}&nbsp;<br />
			<!-- END switch_enable_photos -->
			<input type="radio" name="enable_confirm" value="1" {CONFIRM_DIGITS} />{L_VISUAL_CONFIRM_DIGITS}&nbsp;<br />
                        <input type="radio" name="enable_confirm" value="0" {CONFIRM_DISABLE} />{L_VISUAL_CONFIRM_DISABLE}
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
	  	<td class="row1">{L_REGISTRATION_NOTIFY}</td>
	  	<td class="row2">
			<input type="radio" name="registration_notify" value="{REGISTRATION_NOTIFY_NONE}" {REGISTRATION_NOTIFY_NONE_CHECKED} />{L_NONE}&nbsp;<br />
			<input type="radio" name="registration_notify" value="{REGISTRATION_NOTIFY_MOD}" {REGISTRATION_NOTIFY_MOD_CHECKED} />{L_MOD}&nbsp;<br />
			<input type="radio" name="registration_notify" value="{REGISTRATION_NOTIFY_ADMIN}" {REGISTRATION_NOTIFY_ADMIN_CHECKED} />{L_ADMIN}
	  	</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
	  <td class="row1">{L_ACCT_ACTIVATION}</td>
	  <td class="row2">
		<input type="radio" name="require_activation" value="{ACTIVATION_NONE}" {ACTIVATION_NONE_CHECKED} /> {L_NONE}&nbsp;<br />
		<input type="radio" name="require_activation" value="{ACTIVATION_USER}" {ACTIVATION_USER_CHECKED} /> {L_USER}&nbsp;<br />
		<input type="radio" name="require_activation" value="{ACTIVATION_ADMIN}" {ACTIVATION_ADMIN_CHECKED} /> {L_ADMIN}
	  </td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
  	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="timegestioninfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_TIME_SETTINGS}</th>
	</tr>
	<tr>
	  <td class="row1">{L_DATE_FORMAT}<br /><span class="gensmall">{L_DATE_FORMAT_EXPLAIN}</span></td>
		<td class="row2" width="45%"><span class="genmed">
			<select name="dateoptions" id="dateoptions" onchange="if (this.value == 'custom') { document.getElementById('default_dateformat').value = '{A_DEFAULT_DATEFORMAT}'; } else { document.getElementById('default_dateformat').value = this.value; }">
				{S_DATEFORMAT_OPTIONS}
			</select><br />
			<input type="text" name="default_dateformat" id="default_dateformat" value="{DEFAULT_DATEFORMAT}" maxlength="30" class="post" />
		</span></td>
	</tr>
	<tr>
	  <td class="row1">{L_SYSTEM_TIMEZONE}</td>
	  <td class="row2">{TIMEZONE_SELECT}</td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="cookiesinfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_COOKIE_SETTINGS}</th>
	</tr>
	<tr>
		<td class="row2" colspan="2">
		<span class="gensmall">{L_COOKIE_SETTINGS_EXPLAIN}</span>
		</td>
	</tr>
	<tr>
		<td class="row1">{L_COOKIE_DOMAIN}</td>
		<td class="row2" width="45%">
		<input class="post" type="text" maxlength="255" name="cookie_domain" value="{COOKIE_DOMAIN}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_COOKIE_NAME}</td>
		<td class="row2">
		<input class="post" type="text" maxlength="16" name="cookie_name" value="{COOKIE_NAME}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_COOKIE_PATH}</td>
		<td class="row2">
		<input class="post" type="text" maxlength="255" name="cookie_path" value="{COOKIE_PATH}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_COOKIE_SECURE}<br />
		<span class="gensmall">{L_COOKIE_SECURE_EXPLAIN}</span>
		</td>
		<td class="row2"><input type="radio" name="cookie_secure" value="0" {S_COOKIE_SECURE_DISABLED} />
		<span class="genmed">{L_DISABLED}</span>&nbsp;
		<input type="radio" name="cookie_secure" value="1" {S_COOKIE_SECURE_ENABLED} />
		<span class="genmed">{L_ENABLED}</span>
		</td>
	</tr>
	<tr>
		<td class="row1">{L_SESSION_LENGTH}</td>
		<td class="row2">
		<input class="post" type="text" maxlength="5" size="5" name="session_length" value="{SESSION_LENGTH}" />
		</td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="pminfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_PRIVATE_MESSAGING}</th>
	</tr>
	<tr>
		<td class="row1">{L_DISABLE_PRIVATE_MESSAGING}</td>
		<td class="row2" width="45%">
		<input type="radio" name="privmsg_disable" value="0" {S_PRIVMSG_ENABLED} />
		<span class="genmed">{L_ENABLED}</span>&nbsp;
		<input type="radio" name="privmsg_disable" value="1" {S_PRIVMSG_DISABLED} />
		<span class="genmed">{L_DISABLED}</span>
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_INBOX_LIMIT}</td>
		<td class="row2">
		<input class="post" type="text" maxlength="4" size="4" name="max_inbox_privmsgs" value="{INBOX_LIMIT}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_SENTBOX_LIMIT}</td>
		<td class="row2">
		<input class="post" type="text" maxlength="4" size="4" name="max_sentbox_privmsgs" value="{SENTBOX_LIMIT}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_SAVEBOX_LIMIT}</td>
		<td class="row2">
		<input class="post" type="text" maxlength="4" size="4" name="max_savebox_privmsgs" value="{SAVEBOX_LIMIT}" />
		</td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="avatarinfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_AVATAR_SETTINGS}</th>
	</tr>
	<tr>
		<td class="row1">{L_MAX_FILESIZE}<br />
		<span class="gensmall">{L_MAX_FILESIZE_EXPLAIN}</span>
		</td>
		<td class="row2" width="45%">
		<input class="post" type="text" size="4" maxlength="10" name="avatar_filesize" value="{AVATAR_FILESIZE}" /> Bytes
		</td>
	</tr>
	<tr>
		<td class="row1">{L_MAX_AVATAR_SIZE}<br />
			<span class="gensmall">{L_MAX_AVATAR_SIZE_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" size="3" maxlength="4" name="avatar_max_height" value="{AVATAR_MAX_HEIGHT}" /> x <input class="post" type="text" size="3" maxlength="4" name="avatar_max_width" value="{AVATAR_MAX_WIDTH}">
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
	  	<td class="row1" width="50%">{L_ALLOW_LOCAL}</td>
	  	<td class="row2">
		<input type="radio" name="allow_avatar_local" value="1" {AVATARS_LOCAL_YES} /> {L_YES}&nbsp;
		<input type="radio" name="allow_avatar_local" value="0" {AVATARS_LOCAL_NO} /> {L_NO}
	  </td>
	</tr>
	<tr>
	  <td class="row1">{L_ALLOW_REMOTE}<br /><span class="gensmall">{L_ALLOW_REMOTE_EXPLAIN}</span></td>
	  <td class="row2">
		<input type="radio" name="allow_avatar_remote" value="1" {AVATARS_REMOTE_YES} /> {L_YES}&nbsp;
		<input type="radio" name="allow_avatar_remote" value="0" {AVATARS_REMOTE_NO} /> {L_NO}
	  </td>
	</tr>
	<tr>
	  <td class="row1">{L_ALLOW_UPLOAD}</td>
	  <td class="row2">
		<input type="radio" name="allow_avatar_upload" value="1" {AVATARS_UPLOAD_YES} /> {L_YES}&nbsp;
		<input type="radio" name="allow_avatar_upload" value="0" {AVATARS_UPLOAD_NO} /> {L_NO}
	  </td>
	</tr>
	<tr>
		<td class="row1">{L_AVATAR_STORAGE_PATH}<br />
		<span class="gensmall">{L_AVATAR_STORAGE_PATH_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" size="20" maxlength="255" name="avatar_path" value="{AVATAR_PATH}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_AVATAR_GALLERY_PATH}<br />
		<span class="gensmall">{L_AVATAR_GALLERY_PATH_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" size="20" maxlength="255" name="avatar_gallery_path" value="{AVATAR_GALLERY_PATH}" />
		</td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="postinfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_MESSAGES_SETTINGS}</th>
	</tr>
	<tr>
		<td class="row1">{L_ANNONCE_GLOBALE_INDEX}</td>
		<td class="row2" width="45%">
		<input type="radio" name="annonce_globale_index" value="1" {ANNONCE_GLOBALE_INDEX_YES} />
		<span class="genmed">{L_YES}</span>&nbsp;
		<input type="radio" name="annonce_globale_index" value="0" {ANNONCE_GLOBALE_INDEX_NO} />
		<span class="genmed">{L_NO}</span>
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_SIMPLE_SPLIT_TOPIC_TYPE}</td>
		<td class="row2">
			<input type="radio" name="simple_split_topic_type" value="1" {SIMPLE_SPLIT_TOPIC_TYPE_YES} /> {L_YES}&nbsp;
			<input type="radio" name="simple_split_topic_type" value="0" {SIMPLE_SPLIT_TOPIC_TYPE_NO} /> {L_NO}
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_FLOOD_INTERVAL}<br />
		<span class="gensmall">{L_FLOOD_INTERVAL_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" size="3" maxlength="4" name="flood_interval" value="{FLOOD_INTERVAL}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_SEARCH_FLOOD_INTERVAL}<br />
		<span class="gensmall">{L_SEARCH_FLOOD_INTERVAL_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" size="3" maxlength="4" name="search_flood_interval" value="{SEARCH_FLOOD_INTERVAL}" />
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>	<tr>
		<td class="row1">{L_SUB_TITLE_LENGTH}<br />
		<span class="gensmall">{L_SUB_TITLE_LENGTH_EXPLAIN}</span>
		</td>
		<td class="row2"><span class="genmed">
			<input type="text" size="5" name="sub_title_length" value="{SUB_TITLE_LENGTH}" class="post" />
		</span></td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_TOPICS_PER_PAGE}</td>
		<td class="row2">
		<input class="post" type="text" name="topics_per_page" size="3" maxlength="4" value="{TOPICS_PER_PAGE}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_POSTS_PER_PAGE}</td>
		<td class="row2">
		<input class="post" type="text" name="posts_per_page" size="3" maxlength="4" value="{POSTS_PER_PAGE}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_HOT_THRESHOLD}</td>
		<td class="row2">
		<input class="post" type="text" name="hot_threshold" size="3" maxlength="4" value="{HOT_TOPIC}" />
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>	<tr>
		<td class="row1">{L_IMAGES_MAX_SIZE}</td>
		<td class="row2">
			<input class="post" type="text" size="6" maxlength="5" name="images_max_size" value="{IMAGES_MAX_SIZE}" />
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="smilesinfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_SMILEY_CONFIG}</th>
	</tr>
	<tr>
		<td class="row1">{L_ALLOW_SMILIES}</td>
		<td class="row2" width="45%">
		<input type="radio" name="allow_smilies" value="1"{SMILE_YES} />
		<span class="genmed">{L_YES}</span>&nbsp;
		<input type="radio" name="allow_smilies" value="0"{SMILE_NO} />
		<span class="genmed">{L_NO}</span>
		</td>
	</tr>
	<tr>
		<td class="row1">{L_SMILIES_PATH}<br /><span class="gensmall">{L_SMILIES_PATH_EXPLAIN}</span></td>
		<td class="row2">
		<input class="post" type="text" size="20" maxlength="255" name="smilies_path" value="{SMILIES_PATH}" />
		</td>
	</tr>	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="basicinfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_ABILITIES_SETTINGS}</th>
	</tr>
	<tr>
		<td class="row1">{L_MAX_POLL_OPTIONS}</td>
		<td class="row2" width="45%">
		<input class="post" type="text" name="max_poll_options" size="4" maxlength="4" value="{MAX_POLL_OPTIONS}" />
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_ALLOW_HTML}</td>
		<td class="row2">
    <input type="radio" name="allow_html" value="1" {HTML_YES} />
    <span class="genmed">{L_YES}</span>&nbsp;
    <input type="radio" name="allow_html" value="0" {HTML_NO} />
    <span class="genmed">{L_NO}</span>
    </td>
	</tr>
	<tr>
		<td class="row1">{L_ALLOWED_TAGS}<br />
		<span class="gensmall">{L_ALLOWED_TAGS_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" size="30" maxlength="255" name="allow_html_tags" value="{HTML_TAGS}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_ALLOW_BBCODE}</td>
		<td class="row2">
		<input type="radio" name="allow_bbcode" value="1" {BBCODE_YES} />
		<span class="genmed">{L_YES}</span>&nbsp;
		<input type="radio" name="allow_bbcode" value="0" {BBCODE_NO} />
		<span class="genmed">{L_NO}</span>
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_ALLOW_SIG}</td>
		<td class="row2">
		<input type="radio" name="allow_sig" value="1" {SIG_YES} />
		<span class="genmed">{L_YES}</span>&nbsp;
		<input type="radio" name="allow_sig" value="0" {SIG_NO} />
		<span class="genmed">{L_NO}</span>
		</td>
	</tr>
	<tr>
		<td class="row1">{L_MAX_SIG_LENGTH}<br />
		<span class="gensmall">{L_MAX_SIG_LENGTH_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" size="5" maxlength="4" name="max_sig_chars" value="{SIG_SIZE}" />
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
	  <td class="row1">{L_ALLOW_NAME_CHANGE}</td>
	  <td class="row2">
		<input type="radio" name="allow_namechange" value="1" {NAMECHANGE_YES} /> {L_YES}&nbsp;
		<input type="radio" name="allow_namechange" value="0" {NAMECHANGE_NO} /> {L_NO}
	  </td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="coppainfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_COPPA_SETTINGS}</th>
	</tr>
	<tr>
		<td class="row1">{L_COPPA_FAX}</td>
		<td class="row2" width="45%">
		<input class="post" type="text" size="25" maxlength="100" name="coppa_fax" value="{COPPA_FAX}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_COPPA_MAIL}<br />
		<span class="gensmall">{L_COPPA_MAIL_EXPLAIN}</span>
		</td>
		<td class="row2">
		<textarea name="coppa_mail" rows="5" cols="30">{COPPA_MAIL}</textarea>
		</td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="emailinfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_EMAIL_SETTINGS}</th>
	</tr>
	<tr>
		<td class="row1">{L_ADMIN_EMAIL}</td>
		<td class="row2" width="45%">
		<input class="post" type="text" size="25" maxlength="100" name="board_email" value="{EMAIL_FROM}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_EMAIL_SIG}<br />
		<span class="gensmall">{L_EMAIL_SIG_EXPLAIN}</span>
		</td>
		<td class="row2">
		<textarea name="board_email_sig" rows="5" cols="30">{EMAIL_SIG}</textarea>
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_BOARD_EMAIL_FORM}<br />
		<span class="gensmall">{L_BOARD_EMAIL_FORM_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input type="radio" name="board_email_form" value="1" {BOARD_EMAIL_FORM_ENABLE} />
		<span class="genmed">{L_ENABLED}</span>&nbsp;
		<input type="radio" name="board_email_form" value="0" {BOARD_EMAIL_FORM_DISABLE} />
		<span class="genmed">{L_DISABLED}</span>
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1">{L_USE_SMTP}<br />
		<span class="gensmall">{L_USE_SMTP_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input type="radio" name="smtp_delivery" value="1" {SMTP_YES} />
		<span class="genmed">{L_YES}</span>&nbsp;
		<input type="radio" name="smtp_delivery" value="0" {SMTP_NO} />
		<span class="genmed">{L_NO}</span>
		</td>
	</tr>
	<tr>
		<td class="row1">{L_SMTP_SERVER}</td>
		<td class="row2">
		<input class="post" type="text" name="smtp_host" value="{SMTP_HOST}" size="25" maxlength="50" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_SMTP_USERNAME}<br />
		<span class="gensmall">{L_SMTP_USERNAME_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" name="smtp_username" value="{SMTP_USERNAME}" size="25" maxlength="255" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_SMTP_PASSWORD}<br />
		<span class="gensmall">{L_SMTP_PASSWORD_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="password" name="smtp_password" value="{SMTP_PASSWORD}" size="25" maxlength="255" />
		</td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="birthdayinfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	{BIRTHDAY_CONFIG_BOX}
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>

</table><table id="divinfo" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr>
		<th class="thHead" colspan="2">{L_DIV_SETTINGS}</th>
	</tr>
	<tr>
		<td class="row1">{L_MAX_SUBFORUMS}<br />
		<span class="gensmall">{L_MAX_SUBFORUMS_EXPLAIN}</span>
		</td>
		<td class="row2">
		<input class="post" type="text" name="max_subforums" size="3" maxlength="4" value="{MAX_SUBFORUMS}" />
		</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1" width="50%">{L_RUN_STATS_ENABLE} <br /><span class="gensmall">{L_RUN_STATS_ENABLE_EXPLAIN}</span></td>
		<td class="row2"><input type="radio" name="run_stats_enable" value="1" {RUN_STATS_ENABLE_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="run_stats_enable" value="0" {RUN_STATS_ENABLE_NO} /> {L_NO}</td>
	</tr>
	<tr>
		<td class="row1">{L_RUN_STATS_SHOW_REG_USERS} <br /><span class="gensmall">{L_RUN_STATS_SHOW_REG_USERS_EXPLAIN}</span></td>
		<td class="row2"><input type="radio" name="run_stats_show_reg_users" value="1" {RUN_STATS_SHOW_REG_USERS_YES} /> {L_YES}&nbsp;&nbsp;<input type="radio" name="run_stats_show_reg_users" value="0" {RUN_STATS_SHOW_REG_USERS_NO} /> {L_NO}</td>
	</tr>
	<tr>
		<td class="row1">{L_RUN_STATS_WARN_TIME} <br /><span class="gensmall">{L_RUN_STATS_WARN_TIME_EXPLAIN}</span></td>
		<td class="row2"><input class="post" type="text" size="4" maxlength="10" name="run_stats_warn_time" value="{RUN_STATS_WARN_TIME}" /> seconds</td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
  	<tr>
		<td class="row1" width="50%">{L_FLAGS_PATH}<br /><span class="gensmall">{L_FLAGS_PATH_EXPLAIN}</span></td>
		<td class="row2"><input class="post" type="text" size="20" maxlength="255" name="flags_path" value="{FLAGS_PATH}" /></td>
	</tr>
	<tr>
		<td class="row2" colspan="2"></td>
	</tr>
	<tr>
		<td class="row1" width="50%">{L_BROWSERS_PATH}<br /><span class="gensmall">{L_BROWSERS_PATH_EXPLAIN}</span></td>
		<td class="row2"><input class="post" type="text" size="20" maxlength="255" name="browsers_path" value="{BROWSERS_PATH}" /></td>
	</tr>
	<tr>
		<th class="thHead" colspan="2">{L_BOARD_RULES_SETTINGS}</th>
	</tr>
	<tr>
		<td class="row1">{L_BR_REQUIRED}<br />
			<span class="gensmall">{L_BR_REQUIRED_EXP}</span>
		</td>
		<td class="row2">
			<input type="radio" name="br_required" value="1" {BR_REQUIRED_YES} />&nbsp;{L_YES}&nbsp;
			<input type="radio" name="br_required" value="0" {BR_REQUIRED_NO} />&nbsp;{L_NO}
		</td>
	</tr>
	<tr>
		<td class="row1">{L_BR_TOPIC_ID}<br />
			<span class="gensmall">{L_BR_TOPIC_ID_EXP}</span>
		<td class="row2">
			<input class="post" type="text" size="5" maxlength="5" name="br_topic_id" value="{BR_TOPIC_ID}" />
		</td>
	</tr>
	<tr>
		<td class="row1">{L_FORUM_ID_NO_RULES}<br />
			<span class="gensmall">{L_FORUM_ID_NO_RULES_EXP}</span>
		</td>
		<td class="row2">
			<input class="post" type="text" size="5" maxlength="5" name="forum_id_no_rules" value="{FORUM_ID_NO_RULES}" />
		</td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center">
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
		</td>
	</tr>
</table>

</td></tr></table>{S_HIDDEN_FIELDS}
</form>

<br clear="all" />

