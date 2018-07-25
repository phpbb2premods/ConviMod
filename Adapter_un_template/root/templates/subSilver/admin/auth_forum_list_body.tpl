<h1>{L_FORUM_LIST}</h1> 

<form action="{S_FORM_ACTION}" method="post">
	<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline">
		<tr>
			<!-- BEGIN forum_auth_titles -->
			<th class="thTop">
				{forum_auth_titles.CELL_TITLE}
			</th>
			<!-- END forum_auth_titles -->
		</tr>
		<!-- BEGIN forum_row -->
		<tr>
			<td class="row3" align="left" colspan="{COLSPAN}">
				{forum_row.S_FORUM}
			</td>
		</tr>
		<tr>
			<!-- BEGIN forum_auth_data -->
			<td class="{forum_row.ROW_CLASS}" align="center">
				{forum_row.forum_auth_data.S_AUTH_LEVELS_SELECT}
			</td>
			<!-- END forum_auth_data -->
		</tr>
		<!-- END forum_row -->
		<tr>
			<td colspan="{COLSPAN}" class="catBottom" height="28" align="center">
				<input type="submit" name="submit" value="{L_SUBMIT}" />&nbsp;<input type="reset" value="{L_RESET}" />
			</td>
		</tr>
	</table>
</form>

<br />
