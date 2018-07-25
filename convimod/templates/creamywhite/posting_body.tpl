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
			'message',
			'options',
			'type',
			'poll',
			'attach'
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
			}
		}
		this.cancel_event();
	}

// instantiate
dom_menu = new _dom_menu();
//-->
</script>

{BBC_JS_BOX}

<!-- BEGIN switch_privmsg -->
<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
	<tr>
		<td valign="top" align="center" width="100%"><table height="40" cellspacing="2" cellpadding="2" border="0">
			<tr valign="middle">
				<td>{INBOX_IMG}</td>
				<td class="cattitle">{INBOX}&nbsp;</td>
				<td>{SENTBOX_IMG}</td>
				<td class="cattitle">{SENTBOX}&nbsp;</td>
				<td>{OUTBOX_IMG}</td>
				<td class="cattitle">{OUTBOX}&nbsp;</td>
				<td>{SAVEBOX_IMG}</td>
				<td class="cattitle">{SAVEBOX}&nbsp;</td>
			</tr>
		</table></td>
	</tr>
</table>
<br clear="all" />
<!-- END switch_privmsg -->

<form action="{S_POST_ACTION}" method="post" name="post" onsubmit="return checkForm(this)" {S_FORM_ENCTYPE}>

	{POST_PREVIEW_BOX}
	{ERROR_BOX}

	<table cellpadding="0" cellspacing="2" border="0" width="100%">
		<tr>
			<td align="left" colspan="2" rowspan="1"><span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a>
			<!-- BEGIN switch_not_privmsg --> 
			-> <a href="{U_VIEW_FORUM}" class="nav">{FORUM_NAME}</a>
			<!-- END switch_not_privmsg -->
			</span></td>
		</tr>
		<tr>
			<td width="200" valign="top"><table cellpadding="4" cellspacing="1" border="0" class="forumline" width="200">
				<tr>
					<th class="hdra">{L_OPTIONS}</th>
				</tr>
				<tr>
					<td height="25" class="row1">
					<b class="gensmall">{L_POST_A}</b><hr />
					<table cellspacing="0" cellpadding="2" border="0" width="100%">
						<tr>
							<td width="10" align="right"><div id="message_flag" class="gensmall" style="font-weight: bold;">&raquo;</div></td>
							<td nowrap="nowrap" onMouseOver="this.style.cursor='pointer'; this.style.fontWeight='bold';" onMouseOut="this.style.cursor='pointer'; this.style.fontWeight='normal';" onClick="dom_menu.set('message'); return false;"><div id="message_opt" class="gensmall" style="font-weight: bold;">{L_POST_A}</div></td>
						</tr>
						<tr>
							<td width="10" align="right"><div id="options_flag" class="gensmall">&raquo;</div></td>
							<td nowrap="nowrap" onMouseOver="this.style.cursor='pointer'; this.style.fontWeight='bold';" onMouseOut="this.style.cursor='pointer'; this.style.fontWeight='normal';" onClick="dom_menu.set('options'); return false;"><div id="options_opt" class="gensmall">{L_OPTIONS}</div></td>
						</tr>
						<!-- BEGIN switch_toggleinfo -->
						<tr>
							<td width="10" align="right"><div id="type_flag" class="gensmall">&raquo;</div></td>
							<td nowrap="nowrap" onMouseOver="this.style.cursor='pointer'; this.style.fontWeight='bold';" onMouseOut="this.style.cursor='pointer'; this.style.fontWeight='normal';" onClick="dom_menu.set('type'); return false;"><div id="type_opt" class="gensmall">{L_POST_TOPIC_AS}</div></td>
						</tr>
						<!-- END switch_toggleinfo -->
						<!-- BEGIN switch_pollinfo -->
						<tr>
							<td width="10" align="right"><div id="poll_flag" class="gensmall">&raquo;</div></td>
							<td nowrap="nowrap" onMouseOver="this.style.cursor='pointer'; this.style.fontWeight='bold';" onMouseOut="this.style.cursor='pointer'; this.style.fontWeight='normal';" onClick="dom_menu.set('poll'); return false;"><div id="poll_opt" class="gensmall">{L_ADD_A_POLL}</div></td>
						</tr>
						<!-- END switch_pollinfo -->
						<!-- BEGIN switch_attachinfo -->
						<tr>
							<td width="10" align="right"><div id="attach_flag" class="gensmall">&raquo;</div></td>
							<td nowrap="nowrap" onMouseOver="this.style.cursor='pointer'; this.style.fontWeight='bold';" onMouseOut="this.style.cursor='pointer'; this.style.fontWeight='normal';" onClick="dom_menu.set('attach'); return false;"><div id="attach_opt" class="gensmall">{L_ADD_ATTACHMENT}</div></td>
						</tr>
						<!-- END switch_attachinfo -->
					</table>
					</td>
				</tr>
			</table></td>
			<td valign="top" width="100%">

			<table id="message" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
				<tr>
					<th class="hdra" colspan="2">{L_POST_A}</th>
				</tr>
				<!-- BEGIN switch_username_select -->
				<tr>
					<td class="row1"><b class="gen">{L_USERNAME}</b></td>
					<td class="row2"><span class="genmed">
						<input type="text" class="post" tabindex="1" name="username" size="25" maxlength="25" value="{USERNAME}" />
					</span></td>
				</tr>
				<!-- END switch_username_select -->
				<!-- BEGIN switch_privmsg -->
				<tr>
					<td class="row1"><b class="gen">{L_USERNAME}</b></td>
					<td class="row2"><span class="genmed">
						<input type="text"  class="post" name="username" maxlength="25" size="25" tabindex="1" value="{USERNAME}" />&nbsp;
						<input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="liteoption" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" />
					</span></td>
				</tr>
				<!-- END switch_privmsg -->
				<tr>
					<td class="row1" width="22%"><b class="gen">{L_SUBJECT}</span></td>
					<td class="row2"> <span class="gen">
						<input type="text" name="subject" size="45" maxlength="60" style="width:450px" tabindex="2" class="post" value="{SUBJECT}" />
					</span></td>
				</tr>
				<!-- BEGIN switch_sub_title -->
				<tr>
					<td class="row1"><b class="gen">{L_SUB_TITLE}</b></td>
					<td class="row2"><span class="gen">
						<input type="text" name="sub_title" size="45" maxlength="{SUB_TITLE_LENGTH}" style="width:450px;" tabindex="2" class="post" value="{SUB_TITLE}" />
					</span></td>
				</tr>
				<!-- END switch_sub_title -->
				<!-- BEGIN switch_attribute -->
				<tr>
					<td class="row1"><b class="gen">{L_ATTRIBUTE}</b></td>
					<td class="row2">{S_ATTRIBUTE_SELECTOR}</td>
				</tr>
				<!-- END switch_attribute -->
				<tr>
					<td class="row1" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="1">
						<tr>
							<td><b class="gen">{L_MESSAGE_BODY}</b></td>
						</tr>
						<tr>
							<td valign="middle" align="center"><br /><table width="100" border="0" cellspacing="0" cellpadding="5">
								<tr align="center">
									<td colspan="{S_SMILIES_COLSPAN}" class="gensmall"><b>{L_EMOTICONS}</b></td>
								</tr>
								<!-- Begin Lo-Fi Mod -->
			  					<?php global $lofi;
			  						if ( !$lofi )
			   						{
			  					?>
								<!-- End Lo-Fi Mod -->
								<!-- BEGIN smilies_row -->
								<tr align="center" valign="middle"> 
									<!-- BEGIN smilies_col -->
									<td>
										<img src="{smilies_row.smilies_col.SMILEY_IMG}" border="0" onmouseover="this.style.cursor='hand';" onclick="emoticon('{smilies_row.smilies_col.SMILEY_CODE}');" alt="{smilies_row.smilies_col.SMILEY_DESC}" title="{smilies_row.smilies_col.SMILEY_DESC}" />
									</td>
									<!-- END smilies_col -->
								</tr>
								<!-- END smilies_row -->
								<!-- BEGIN switch_smilies_extra -->
								<tr align="center"> 
									<td colspan="{S_SMILIES_COLSPAN}"><span class="nav">
										<a href="{U_MORE_SMILIES}" onclick="window.open('{U_MORE_SMILIES}', '_phpbbsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=250');return false;" target="_blank" class="nav">{L_MORE_SMILIES}</a>
									</span></td>
								</tr>
								<!-- END switch_smilies_extra -->
							</table></td>
						</tr>
					</table>
					<!-- Begin Lo-Fi Mod -->
			   		<?php }?> 
					<!-- End Lo-Fi Mod -->
					</td>
					<td class="row2" valign="top"><table cellspacing="0" cellpadding="2" border="0">
						{BBC_DISPLAY_BOX}
						<tr>
							<td>
								<textarea name="message" rows="15" cols="76" wrap="virtual" style="width:450px" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);">{MESSAGE}</textarea>
							</td>
						</tr>
					</table></td>
				</tr>
				<tr>
					<td class="catBottom" colspan="2" align="center">
						<input type="image" src="{I_PREVIEW}" name="preview" title="{L_SUBMIT}" />
						<input type="image" src="{I_SUBMIT}" name="post" title="{L_SUBMIT}" />
					</td>
				</tr>
			</table>

			<table id="options" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
				<tr>
					<th class="hdra" colspan="2">{L_OPTIONS}</th>
				</tr>
				<tr>
					<td class="row1" width="22%" valign="top"><b class="gen">{L_OPTIONS}</b><br />
						<span class="gensmall">{HTML_STATUS}<br />{SMILIES_STATUS}</span>
					</td>
					<td class="row2"><table cellspacing="0" cellpadding="1" border="0">
						<!-- BEGIN switch_html_checkbox -->
						<tr> 
							<td> 
								<input type="checkbox" name="disable_html" {S_HTML_CHECKED} />
							</td>
							<td><span class="gen">{L_DISABLE_HTML}</span></td>
						</tr>
						<!-- END switch_html_checkbox -->
						<!-- BEGIN switch_bbcode_checkbox -->
						<tr>
							<td>
								<input type="checkbox" name="disable_bbcode" {S_BBCODE_CHECKED} />
							</td>
							<td><span class="gen">{L_DISABLE_BBCODE}</span></td>
						</tr>
						<!-- END switch_bbcode_checkbox -->
						<!-- BEGIN switch_smilies_checkbox -->
						<tr>
							<td>
								<input type="checkbox" name="disable_smilies" {S_SMILIES_CHECKED} />
							</td>
							<td><span class="gen">{L_DISABLE_SMILIES}</span></td>
						</tr>
						<!-- END switch_smilies_checkbox -->
						<!-- BEGIN switch_signature_checkbox -->
						<tr>
							<td>
								<input type="checkbox" name="attach_sig" {S_SIGNATURE_CHECKED} />
							</td>
							<td><span class="gen">{L_ATTACH_SIGNATURE}</span></td>
						</tr>
						<!-- END switch_signature_checkbox -->
						<!-- BEGIN switch_notify_checkbox -->
						<tr>
							<td>
								<input type="checkbox" name="notify" {S_NOTIFY_CHECKED} />
							</td>
							<td><span class="gen">{L_NOTIFY_ON_REPLY}</span></td>
						</tr>
						<!-- END switch_notify_checkbox -->
						<!-- BEGIN switch_delete_checkbox -->
						<tr>
							<td>
								<input type="checkbox" name="delete" />
							</td>
							<td><span class="gen">{L_DELETE_POST}</span></td>
						</tr>
						<!-- END switch_delete_checkbox -->
					</table></td>
				</tr>
				<tr>
					<td class="catBottom" colspan="2" align="center">
						<input type="image" src="{I_PREVIEW}" name="preview" title="{L_SUBMIT}" />
						<input type="image" src="{I_SUBMIT}" name="post" title="{L_SUBMIT}" />
					</td>
				</tr>
			</table>

			<table id="type" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
				<tr>
					<th class="hdra" colspan="2">{L_POST_TOPIC_AS}</th>
				</tr>
				<tr> 
					<td class="row1" align="center"><span class="gen">{S_TYPE_TOGGLE}</span></td>
				</tr>
				<tr>
					<td class="catBottom" colspan="2" align="center">
						<input type="image" src="{I_PREVIEW}" name="preview" title="{L_SUBMIT}" />
						<input type="image" src="{I_SUBMIT}" name="post" title="{L_SUBMIT}" />
					</td>
				</tr>
			</table>

			<table id="poll" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
				{POLLBOX}
				<tr>
					<td class="catBottom" colspan="2" align="center">
						<input type="image" src="{I_PREVIEW}" name="preview" title="{L_SUBMIT}" />
						<input type="image" src="{I_SUBMIT}" name="post" title="{L_SUBMIT}" />
					</td>
				</tr>
			</table>
			<table id="attach" style="display:none" border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
				{EXT_HOSTBOX}
				{ATTACHBOX}
				<tr>
					<td class="catBottom" colspan="2" align="center">
						<input type="image" src="{I_PREVIEW}" name="preview" title="{L_SUBMIT}" />
						<input type="image" src="{I_SUBMIT}" name="submit" title="{L_SUBMIT}" />
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>{S_HIDDEN_FORM_FIELDS}
	<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
		<tr>
			<td align="right" valign="top"><span class="gensmall">{S_TIMEZONE}</span></td>
		</tr>
  </table>
</form>
<br clear="all" />

<table width="100%" cellspacing="2" border="0" align="center">
	<tr>
		<td valign="top" align="right">{JUMPBOX}</td>
	</tr>
</table>

{TOPIC_REVIEW_BOX}
