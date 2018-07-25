<h1>{L_SMILEY_TITLE}</h1>

<P>{L_SMILEY_TEXT}</p>

<form method="post" action="{S_SMILEY_ACTION}">
  <table class="forumline" cellspacing="1" cellpadding="4" border="0" align="center">
	<tr>
	  <th class="hdra">{L_CODE}</th>
	  <th class="hdra">{L_SMILE}</th>
	  <th class="hdra">{L_EMOT}</th>
	  <th class="hdra" colspan="2">{L_ACTION}</th>
	</tr>
	<!-- BEGIN smiles -->
	<tr align="center">
	  <td class="{smiles.ROW_CLASS}">{smiles.CODE}</td>
	  <td class="{smiles.ROW_CLASS}"><img src="{smiles.SMILEY_IMG}" alt="{smiles.CODE}" title="{smiles.EMOT}" /></td>
	  <td class="{smiles.ROW_CLASS}">{smiles.EMOT}</td>
	  <td class="{smiles.ROW_CLASS}"><a href="{smiles.U_SMILEY_EDIT}">{L_EDIT}</a></td>
	  <td class="{smiles.ROW_CLASS}"><a href="{smiles.U_SMILEY_DELETE}">{L_DELETE}</a></td>
	</tr>
	<!-- END smiles -->
	<tr>
	  <td class="catBottom" colspan="5" align="center">
		{S_HIDDEN_FIELDS}
		<input class="mainoption" type="submit" name="add" value="{L_SMILEY_ADD}" />&nbsp;
		<input class="liteoption" type="submit" name="import_pack" value="{L_IMPORT_PACK}" />&nbsp;
		<input class="liteoption" type="submit" name="export_pack" value="{L_EXPORT_PACK}" />
	  </td>
	</tr>
  </table>
</form>