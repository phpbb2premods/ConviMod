<h1>{L_EDIT_CATEGORY}</h1>

<p>{L_EDIT_CATEGORY_EXPLAIN}</p>

<form action="{S_FORUM_ACTION}" method="post">
  <table class="forumline" cellpadding="4" cellspacing="1" border="0" align="center">
	<tr>
	  <th class="hdra" colspan="2">{L_EDIT_CATEGORY}</th>
	</tr>
	<tr>
	  <td class="row1">{L_CATEGORY}</td>
	  <td class="row2"><input class="post" type="text" size="25" name="cat_title" value="{CAT_TITLE}" /></td>
	</tr>
	<tr>
	  <td class="catBottom" colspan="2" align="center">
		{S_HIDDEN_FIELDS}
		<input type="submit" name="submit" value="{S_SUBMIT_VALUE}" class="mainoption" />
	  </td>
	</tr>
  </table>
</form>