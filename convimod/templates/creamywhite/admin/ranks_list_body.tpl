<h1>{L_RANKS_TITLE}</h1>

<p>{L_RANKS_TEXT}</p>

<form method="post" action="{S_RANKS_ACTION}">
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_RANKS_TITLE}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellspacing="1" cellpadding="4" border="0">
	<tr>
	  <th class="thCornerL">{L_RANK}</th>
	  <th class="thTop">{L_RANK_IMG}</th>
	  <th class="thTop">{L_RANK_MINIMUM}</th>
	  <th class="thTop">{L_SPECIAL_RANK}</th>
	  <th class="thTop">{L_EDIT}</th>
	  <th class="thCornerR">{L_DELETE}</th>
	</tr>
	<!-- BEGIN ranks -->
	<tr>
	  <td class="{ranks.ROW_CLASS}" align="center">{ranks.RANK}</td>
	  <td class="{ranks.ROW_CLASS}" align="center">{ranks.RANK_IMG}</td>
	  <td class="{ranks.ROW_CLASS}" align="center">{ranks.RANK_MIN}</td>
	  <td class="{ranks.ROW_CLASS}" align="center">{ranks.SPECIAL_RANK}</td>
	  <td class="{ranks.ROW_CLASS}" align="center"><a href="{ranks.U_RANK_EDIT}">{L_EDIT}</a></td>
	  <td class="{ranks.ROW_CLASS}" align="center"><a href="{ranks.U_RANK_DELETE}">{L_DELETE}</a></td>
	</tr>
	<!-- END ranks -->			
	<tr>
	  <td class="catBottom" align="center" colspan="7">
		<input type="submit" class="mainoption" name="add" value="{L_ADD_RANK}" />
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
