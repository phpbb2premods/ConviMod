<h1>{L_FORUM_DELETE}</h1>

<p>{L_FORUM_DELETE_EXPLAIN}</p>

<form action="{S_FORUM_ACTION}" method="post">
  <table class="forumline" cellpadding="4" cellspacing="1" border="0" align="center">
	<tr>
	  <th class="hdra" colspan="2">{L_FORUM_DELETE}</th>
	</tr>
	<tr>
	  <td class="row1">{L_FORUM_NAME}</td>
	  <td class="row1"><span class="row1">{NAME}</span></td>
	</tr>
	<tr>
	  <td class="row1">{L_MOVE_CONTENTS}</td>
	  <td class="row1">{S_SELECT_TO}</td>
	</tr>
	<tr>
	  <td class="catBottom" colspan="2" align="center">
		{S_HIDDEN_FIELDS}
		<input type="submit" name="submit" value="{S_SUBMIT_VALUE}" class="mainoption" />
	  </td>
	</tr>
  </table>
</form>