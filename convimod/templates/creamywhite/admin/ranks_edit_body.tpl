<h1>{L_RANKS_TITLE}</h1>

<p>{L_RANKS_TEXT}</p>

<form action="{S_RANK_ACTION}" method="post">
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_RANKS_TITLE}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0" align="center">
	<tr>
	  <td class="row1" width="38%"><span class="gen">{L_RANK_TITLE}:</span></td>
	  <td class="row2"><input class="post" type="text" name="title" size="35" maxlength="40" value="{RANK}" /></td>
	</tr>
	<tr>
	  <td class="row1"><span class="gen">{L_RANK_SPECIAL}</span></td>
	  <td class="row2">
		<input type="radio" name="special_rank" value="1" {SPECIAL_RANK} /> {L_YES}&nbsp;
		<input type="radio" name="special_rank" value="0" {NOT_SPECIAL_RANK} /> {L_NO}
	  </td>
	</tr>
	<tr>
	  <td class="row1" width="38%"><span class="gen">{L_RANK_MINIMUM}:</span></td>
	  <td class="row2"><input class="post" type="text" name="min_posts" size="5" maxlength="10" value="{MINIMUM}" /></td>
	</tr>
	<tr>
	  <td class="row1" width="38%"><span class="gen">{L_RANK_IMAGE}:</span><br /><span class="gensmall">{L_RANK_IMAGE_EXPLAIN}</span></td>
	  <td class="row2">
		<input class="post" type="text" name="rank_image" size="40" maxlength="255" value="{IMAGE}" />
		<br />{IMAGE_DISPLAY}
	  </td>
	</tr>
	<tr>
	  <td class="catBottom" colspan="2" align="center">
		{S_HIDDEN_FIELDS}
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;
		<input type="reset" value="{L_RESET}" class="liteoption" />
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