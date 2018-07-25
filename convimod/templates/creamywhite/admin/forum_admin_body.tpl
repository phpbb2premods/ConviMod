<h1>{L_FORUM_TITLE}</h1>

<p>{L_FORUM_EXPLAIN}</p>

<form method="post" action="{S_FORUM_ACTION}">
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
	  <td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	  <td class="hdr" width="100%" align="left" nowrap="nowrap">{L_FORUM_TITLE}</td>
	  <td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
	</tr>
  </table>
  <table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
	<!-- BEGIN catrow -->
	<tr>
	  <td class="catLeft" colspan="3"><b class="cattitle"><a href="{catrow.U_VIEWCAT}">{catrow.CAT_DESC}</a></b></td>
	  <td class="cat" align="center" valign="middle"><span class="gen"><a href="{catrow.U_CAT_EDIT}">{L_EDIT}</a></span></td>
	  <td class="cat" align="center" valign="middle"><span class="gen"><a href="{catrow.U_CAT_DELETE}">{L_DELETE}</a></span></td>
	  <td class="cat" align="center" valign="middle" nowrap="nowrap"><span class="gen">
		<a href="{catrow.U_CAT_MOVE_UP}">{L_MOVE_UP}</a>
		<a href="{catrow.U_CAT_MOVE_DOWN}">{L_MOVE_DOWN}</a>
	  </span></td>
	  <td class="catRight" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	</tr>
	<!-- BEGIN forumrow -->
	<tr> 
	  <td class="row2"{catrow.forumrow.STYLE}>{catrow.forumrow.FORUM_ARROW_IMG}
		<span class="gen">{catrow.forumrow.FORUM_ICON_IMG}&nbsp;&nbsp;<a href="{catrow.forumrow.U_VIEWFORUM}" target="_new">{catrow.forumrow.FORUM_NAME}</a></span><br />
		<span class="gensmall">{catrow.forumrow.FORUM_DESC}</span>
	  </td>
	  <td class="row1" align="center" valign="middle"><span class="gen">{catrow.forumrow.NUM_TOPICS}</span></td>
	  <td class="row2" align="center" valign="middle"><span class="gen">{catrow.forumrow.NUM_POSTS}</span></td>
	  <td class="row1" align="center" valign="middle"><span class="gen"><a href="{catrow.forumrow.U_FORUM_EDIT}">{L_EDIT}</a></span></td>
	  <td class="row2" align="center" valign="middle"><span class="gen"><a href="{catrow.forumrow.U_FORUM_DELETE}">{L_DELETE}</a></span></td>
	  <td class="row1" align="center" valign="middle"><span class="gen">
		<a href="{catrow.forumrow.U_FORUM_MOVE_UP}">{L_MOVE_UP}</a><br />
		<a href="{catrow.forumrow.U_FORUM_MOVE_DOWN}">{L_MOVE_DOWN}</a>
	  </span></td>
	  <td class="row2" align="center" valign="middle"><span class="gen"><a href="{catrow.forumrow.U_FORUM_RESYNC}">{L_RESYNC}</a></span></td>
	</tr>
	<!-- END forumrow -->
	<tr>
	  <td colspan="7" class="row2">
		<input class="post" type="text" name="{catrow.S_ADD_FORUM_NAME}" />
		<input type="submit" class="liteoption" name="{catrow.S_ADD_FORUM_SUBMIT}" value="{L_CREATE_FORUM}" />
	  </td>
	</tr>
	<tr>
	  <td colspan="7" height="1" class="spaceRow"><img src="{I_SPACER}" alt="" width="1" height="1" /></td>
	</tr>
	<!-- END catrow -->
	<tr>
	  <td colspan="7" class="catBottom">
		<input class="post" type="text" name="categoryname" />&nbsp;
		<input type="submit" class="liteoption" name="addcategory" value="{L_CREATE_CATEGORY}" />
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
