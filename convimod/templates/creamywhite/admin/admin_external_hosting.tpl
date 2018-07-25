
<h1>{L_EXT_TITLE}</h1>

<p>{L_EXT_EXPLAIN}</p>

<table width="99%" cellpadding="1" cellspacing="1" border="0" align="center">
	<tr>
		<td>
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
  				<tr>
					<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
					<td class="hdr" width="100%" align="center" nowrap="nowrap">{L_EXT_CHG_HOSTER}</td>
					<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  				</tr>
			</table>
			<table class="bodyline" width="100%" cellpadding="2" cellspacing="1" border="0" align="center">
  				<tr>
					<td class="row2" width="5%" valign="top"><span class="genmed"><strong>{L_EXT_ENABLE}</strong></span></td>
					<td class="row2" width="20%" valign="top"><span class="genmed"><strong>{L_EXT_NAME}</strong></span></td>
					<td class="row2" width="20%" valign="top"><span class="genmed"><strong>{L_EXT_URL}</strong></span></td>
					<td class="row2" width="5%" valign="top"><span class="genmed"><strong>{L_EXT_UB}</strong></span></td>
					<td class="row2" width="20%" valign="top"><span class="genmed"><strong>{L_EXT_UBC}</strong></span></td>
					<td class="row2" width="15%">&nbsp;</td>
					<td class="row2" width="15%">&nbsp;</td>
				</tr>
				<!-- BEGIN hoster_row -->
				<form name="{hoster_row.EXT_FORM_NAME}" method="post" action="{hoster_row.S_EXT_HOST_ACT}">
				<tr>
					<td align="center" class="{hoster_row.EXT_ROW_CLASS}"><input type="hidden" name="ext_id" value="{hoster_row.EXT_ID}"><input type="checkbox" name="ext_enabled" {hoster_row.EXT_ENA}></td>
					<td class="{hoster_row.EXT_ROW_CLASS}"><input class="post" type="text" maxlength="50" size="15" name="ext_name" value="{hoster_row.EXT_NAME}" /></td>
					<td class="{hoster_row.EXT_ROW_CLASS}"><input class="post" type="text" maxlength="150" size="25" name="ext_url" value="{hoster_row.EXT_URL}" /></td>
					<td align="center" class="{hoster_row.EXT_ROW_CLASS}"><input type="checkbox" name="ext_ub" {hoster_row.EXT_UB}></td>
					<td class="{hoster_row.EXT_ROW_CLASS}"><input class="post" type="text" maxlength="255" size="25" name="ext_ubc" value="{hoster_row.EXT_UBC}" /></td>
					<td align="center" class="{hoster_row.EXT_ROW_CLASS}"><input type="submit" name="change" value="{L_EXT_CHG}" class="mainoption"></td>
					<td align="center" class="{hoster_row.EXT_ROW_CLASS}"><input type="submit" name="delete" value="{L_EXT_DEL}" class="liteoption"></td>
				</tr>
				</form>
				<!-- END hoster_row -->
			</table>
			<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  				<tr> 
					<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
					<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
					<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  				</tr>
			</table>
			
			<br />
			
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
  				<tr>
					<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
					<td class="hdr" width="100%" align="center" nowrap="nowrap">{L_EXT_NEW_HOSTER}</td>
					<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  				</tr>
			</table>
			<table class="bodyline" width="100%" cellpadding="2" cellspacing="1" border="0" align="center">
  				<tr>
					<td class="row2" width="5%" valign="top"><span class="genmed"><strong>{L_EXT_ENABLE}</strong></span></td>
					<td class="row2" width="20%" valign="top"><span class="genmed"><strong>{L_EXT_NAME}</strong></span></td>
					<td class="row2" width="20%" valign="top"><span class="genmed"><strong>{L_EXT_URL}</strong></span></td>
					<td class="row2" width="5%" valign="top"><span class="genmed"><strong>{L_EXT_UB}</strong></span></td>
					<td class="row2" width="20%" valign="top"><span class="genmed"><strong>{L_EXT_UBC}</strong></span></td>
					<td class="row2" width="15%" valign="top">&nbsp;</td>
					<td class="row2" width="15%">&nbsp;</td>
				</tr>
				<form name="new_hoster" method="post" action="{S_EXT_NEW_HOSTER}">
				<tr>
					<td align="center" class="row1"><input type="checkbox" name="ext_enabled"></td>
					<td class="row1"><input class="post" type="text" maxlength="50" size="15" name="ext_name" value="" /></td>
					<td class="row1"><input class="post" type="text" maxlength="150" size="25" name="ext_url" value="" /></td>
					<td align="center" class="row1"><input type="checkbox" name="ext_ub"></td>
					<td class="row1"><input class="post" type="text" maxlength="255" size="25" name="ext_ubc" value="" /></td>
					<td align="center" class="row1"><input type="submit" name="new" value="{L_EXT_NEW}" class="mainoption"></td>
					<td align="center" class="row1"><input type="reset" name="reset" value="{L_EXT_RESET}" class="liteoption"></td>
				</tr>
				</form>
				<tr>
					<td class="row2">&nbsp;</td>
					<td class="row2" valign="top">{L_EXT_NAME_EXPLAIN}</td>
					<td class="row2" valign="top">{L_EXT_URL_EXPLAIN}</td>
					<td class="row2">&nbsp;</td>
					<td class="row2" valign="top">{L_EXT_UBC_EXPLAIN}</td>
					<td class="row2">&nbsp;</td>
					<td class="row2">&nbsp;</td>
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
			
			<br />
