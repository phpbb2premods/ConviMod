<!-- BEGIN birthdays -->
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap"><span class="cattitle">{L_WHICH_BIRTHDAY}</span></td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
</tr>
</table>
<table class="forumline" width="100%" cellpadding="2" cellspacing="1" border="0" align="center">
<tr>
	<td class="row1" style="vertical-align:middle;"<!-- BEGIN lookahead --> rowspan="2"<!-- END lookahead -->><img src="{I_BIRTHCAKE}" alt="{L_BIRTHDAYS}" /></td>
	<td class="row1" width="100%"><span class="gensmall">
		{L_CONGRATULATIONS}&nbsp;<!-- BEGIN today --><!-- BEGIN row --><!-- BEGIN sep -->, <!-- END sep --><a href="{birthdays.today.row.U_VIEW_PROFILE}" title="{L_VIEW_PROFILE}" class="gensmall"{birthdays.today.row.STYLE}>{birthdays.today.row.USERNAME}</a><!-- BEGIN age -->&nbsp;<em>({birthdays.today.row.AGE})</em><!-- END age --><!-- BEGINELSE row -->{L_NO_BIRTHDAYS}<!-- END row --><!-- END today -->
	</span></td>
<!-- BEGIN lookahead -->
<tr>
	<td class="row1" width="100%"><span class="gensmall">
		{L_UPCOMING}&nbsp;<!-- BEGIN row --><!-- BEGIN sep -->, <!-- END sep --><a href="{birthdays.lookahead.row.U_VIEW_PROFILE}" title="{L_VIEW_PROFILE}" class="gensmall"{birthdays.lookahead.row.STYLE}>{birthdays.lookahead.row.USERNAME}</a><!-- BEGIN age -->&nbsp;<em>({birthdays.lookahead.row.AGE})</em><!-- END age --><!-- BEGINELSE row -->{L_NO_UPCOMING}<!-- END row -->
	</span></td>
</tr>
<!-- END lookahead -->
</tr>
</table>
<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>
<br class="both" />
<!-- END birthdays -->
