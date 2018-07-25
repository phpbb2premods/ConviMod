<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_POLL}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap">{POLL_QUESTION}</td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0"> 
  <tr> 
	<td class="row2" colspan="2"><table cellspacing="0" cellpadding="4" border="0" align="center">
	  <tr> 
		<td colspan="4" align="center"><b class="gen">{POLL_QUESTION}</b></td>
	  </tr>
	  <tr> 
		<td align="center"><table cellspacing="0" cellpadding="2" border="0">
		  <!-- BEGIN poll_option -->
		  <tr> 
			<td class="gen">{poll_option.POLL_OPTION_CAPTION}</td>
			<td><table cellspacing="0" cellpadding="0" border="0">
			  <tr> 
				<td><img src="{poll_option.POLL_OPTION_IMG_LEFT}" alt="" /></td>
				<td><img src="{poll_option.POLL_OPTION_IMG}" width="{poll_option.POLL_OPTION_IMG_WIDTH}" height="12" alt="{poll_option.POLL_OPTION_PERCENT}" /></td>
				<td><img src="{poll_option.POLL_OPTION_IMG_RIGHT}" alt="" /></td>
			  </tr>
			</table></td>
			<td align="center"><b class="gen">{poll_option.POLL_OPTION_PERCENT}</b></td>
			<td class="gen" align="center">[ {poll_option.POLL_OPTION_RESULT} ]</td>
		  </tr>
		  <!-- END poll_option -->
		</table></td>
	  </tr>
	  <tr> 
		<td colspan="4" align="center"><b class="gen">{L_TOTAL_VOTES} : {TOTAL_VOTES}</b></td>
	  </tr>
	  <!-- BEGIN show_voters -->
	  <tr> 
		<td colspan="4" align="center"><span class="gensmall"><b>{show_voters.L_VOTERS}:</b>&nbsp;{show_voters.VOTERS}</span></td>
	  </tr>
	  <!-- END show_voters -->
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
