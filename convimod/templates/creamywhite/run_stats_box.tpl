<!-- start mod addon to run stats mod -->
<script language="javascript">
<!--
function SetQueryOption()
{
	document.QueryOption.submit();
	return true;
}
//-->
</script>
<!-- end mod addon to run stats mod -->
<br class="nav" />
<table class="bodyline" width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td>
<!-- start mod addon to run stats mod -->
<table class="hdrtop" width="100%" cellspacing="0" cellpadding="0" border="0">
<!-- BEGIN switch_run_stats_show_prefs -->
  <tr>
	<td align="left" width="35"><img alt="" src="{I_MENU_LEFT}" width="35" height="25" valign="top" /></td>
	<td width="100%" colspan="2" align="center" nowrap="nowrap"><form style="margin-bottom:0;" name="QueryOption" action="{RUN_STATS_REDIRECT}" method="post">
	{RUN_STATS_HIDDEN_FIELDS}{RUN_STATS_QUERY_OPTION}</form></td>
	<td width="35" align="right"><img alt="" src="{I_MENU_RIGHT}" width="35" height="25" valign="top" /></td>
  </tr>
<!-- END switch_run_stats_show_prefs -->
</table>
<!-- BEGIN switch_user_logged_out -->
<table class="hdrtop" width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td align="left" width="35"><img alt="" src="{I_MENU_LEFT}" width="35" height="25" valign="top" /></td>
	<td width="100%" colspan="2" align="center" nowrap="nowrap"></td>
	<td width="35" align="right"><img alt="" src="{I_MENU_RIGHT}" width="35" height="25" valign="top" /></td>
  </tr>
</table>
<!-- END switch_user_logged_out -->
<table width="100%" cellpadding="2" cellspacing="1" border="0" align="center">
<tr>
	<td colspan="2" align="center"><span class="gensmall">
	{L_STAT_PAGE_DUR}{L_STAT_QUERIES}{L_STAT_SETUP}
	</span></td>
</tr>
<!-- BEGIN stat_run -->
<tr>
	<!-- BEGIN light -->
	<td class="row1">
	<!-- END light -->
	<!-- BEGIN light_ELSE -->
	<td class="row2">
	<!-- END light_ELSE -->
	<span class="gensmall">
		<b>{stat_run.STAT_FILE}</b><br />
		{stat_run.STAT_LINE}<br />
		{stat_run.STAT_TIME}<br />
	</span></td>
	<!-- BEGIN light -->
	<td class="row1">
	<!-- END light -->
	<!-- BEGIN light_ELSE -->
	<td class="row2">
	<!-- END light_ELSE -->
		<table cellpadding="2" cellspacing="1" width="100%" class="bodyline">
		<tr><td class="row1"><span class="gensmall">&nbsp;{stat_run.STAT_REQUEST}&nbsp;

		</span></td></tr>
		</table>
		<!-- BEGIN explain -->
		<table cellpadding="2" cellspacing="1" width="100%" class="bodyline">
		<tr>
			<!-- BEGIN cell -->
			<td align="center" class="row3"><span class="gensmall">&nbsp;
				{stat_run.explain.cell.STAT_LEGEND}&nbsp;
			</span></td>
			<!-- END cell -->
		</tr>
		<!-- BEGIN table -->
		<tr>
			<!-- BEGIN cell -->
			<!-- BEGIN light -->
			<td class="row1">
			<!-- END light -->
			<!-- BEGIN light_ELSE -->
			<td class="row2">
			<!-- END light_ELSE -->
			<span class="gensmall">&nbsp;
				{stat_run.explain.table.cell.STAT_VALUE}&nbsp;
			</span></td>
			<!-- END cell -->
		</tr>
		<!-- END table -->
		</table>
		<!-- END explain -->
	</td>
</tr>
<!-- END stat_run -->
</table>
	</td>
  </tr>
</table>
<table width="100%" align="center" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>
<br clear="all" />
