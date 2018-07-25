<form method="post" action="{S_POST_DAYS_ACTION}">

	<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td align="left" valign="bottom">{FORUM_ICON_IMG}</td>
		<td width="100%" align="left" valign="middle">
		<span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a> <!-- IF PARENT_FORUM --> -> <a class="nav" href="{U_VIEW_PARENT_FORUM}">{PARENT_FORUM_NAME}</a> <!-- ENDIF --> -> <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a></span>
		</td>
	</tr>
	</table>
	<!-- BEGIN catrow -->
	<table width="100%" cellpadding="2" cellspacing="1" border="0" class="forumline">
	<tr> 
		<th colspan="2" class="thCornerL" height="25" nowrap="nowrap">&nbsp;{L_FORUM}&nbsp;</th>
		<th width="70" class="thTop" nowrap="nowrap">&nbsp;{L_TOPICS}&nbsp;</th>
		<th width="70" class="thTop" nowrap="nowrap">&nbsp;{L_POSTS}&nbsp;</th>
		<th width="200" class="thCornerR" nowrap="nowrap">&nbsp;{L_LASTPOST}&nbsp;</th>
	</tr>
	<tr> 
		<td class="catLeft" colspan="2" height="28"><span class="cattitle"><a href="{catrow.U_VIEWCAT}" class="cattitle">{catrow.CAT_DESC}</a></span></td>
		<td class="rowpic" colspan="3" align="right">&nbsp;</td>
  </tr>
	<!-- BEGIN forumrow -->
	<tr> 
		<td class="row1" align="center" valign="middle" height="50">
		<a href="{catrow.forumrow.U_VIEWFORUM}"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" border="0" /></a></td>
		<td class="row1" width="100%" height="50"><table width="100%" cellpadding="2" cellspacing="0" border="0">
		<tr><td><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink">{catrow.forumrow.FORUM_ICON_IMG}</a></td>
		<td width="100%" valign="middle">
			<span class="forumlink"><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink<!-- IF catrow.forumrow.UNREAD --> topic-new<!-- ENDIF -->">{catrow.forumrow.FORUM_NAME}</a><br /></span>
			<span class="genmed">{catrow.forumrow.FORUM_DESC}<br /></span>
			<span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span>
		</td>
	</tr>
	</table></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.TOPICS}</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.POSTS}</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap"> <span class="gensmall">{catrow.forumrow.LAST_POST}</span></td>
	</tr>
	<!-- END forumrow -->
	</table>
	<!-- END catrow -->
	<table width="100%" cellspacing="2" cellpadding="2" border="0">
	<tr>
		<td align="left" valign="bottom">{FORUM_ICON_IMG}</td>
		<td valign="middle">
		<span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a> <!-- IF PARENT_FORUM --> -> <a class="nav" href="{U_VIEW_PARENT_FORUM}">{PARENT_FORUM_NAME}</a><!-- ENDIF --> -> <a class="nav" href="{U_VIEW_FORUM}">{FORUM_NAME}</a></span>
		</td>
		<td align="right">{JUMPBOX}</td>
	</tr>
  </table>

</form>
