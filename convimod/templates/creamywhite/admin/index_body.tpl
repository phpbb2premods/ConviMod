<h1>{L_WELCOME}</h1>

<p>{L_ADMIN_INTRO}</p>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap">{L_FORUM_STATS}</td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
  <tr>
	<th class="thCornerL" width="25%" nowrap="nowrap" height="25">{L_STATISTIC}</th>
	<th class="thTop" width="25%" height="25">{L_VALUE}</th>
	<th class="thTop" width="25%" nowrap="nowrap" height="25">{L_STATISTIC}</th>
	<th class="thCornerR" width="25%" height="25">{L_VALUE}</th>
  </tr>
  <tr>
	<td class="row1" nowrap="nowrap">{L_NUMBER_POSTS}:</td>
	<td class="row2"><b>{NUMBER_OF_POSTS}</b></td>
	<td class="row1" nowrap="nowrap">{L_POSTS_PER_DAY}:</td>
	<td class="row2"><b>{POSTS_PER_DAY}</b></td>
  </tr>
  <tr>
	<td class="row1" nowrap="nowrap">{L_NUMBER_TOPICS}:</td>
	<td class="row2"><b>{NUMBER_OF_TOPICS}</b></td>
	<td class="row1" nowrap="nowrap">{L_TOPICS_PER_DAY}:</td>
	<td class="row2"><b>{TOPICS_PER_DAY}</b></td>
  </tr>
  <tr>
	<td class="row1" nowrap="nowrap">{L_NUMBER_USERS}:</td>
	<td class="row2"><b>{NUMBER_OF_USERS}</b></td>
	<td class="row1" nowrap="nowrap">{L_USERS_PER_DAY}:</td>
	<td class="row2"><b>{USERS_PER_DAY}</b></td>
  </tr>
  <tr>
	<td class="row1" nowrap="nowrap">{L_BOARD_STARTED}:</td>
	<td class="row2"><b>{START_DATE}</b></td>
	<td class="row1" nowrap="nowrap">{L_AVATAR_DIR_SIZE}:</td>
	<td class="row2"><b>{AVATAR_DIR_SIZE}</b></td>
  </tr>
  <tr>
	<td class="row1" nowrap="nowrap">{L_DB_SIZE}:</td>
	<td class="row2"><b>{DB_SIZE}</b></td>
	<td class="row1" nowrap="nowrap">{L_GZIP_COMPRESSION}:</td>
	<td class="row2"><b>{GZIP_COMPRESSION}</b></td>
  </tr>
</table>
<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>
<br class="nav" />

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap">{L_VERSION_INFORMATION}</td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
  <tr>
	<td class="row1" width="100%" align="center">{VERSION_INFO}</td>
  </tr>
</table>
<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>
<br class="nav" />

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	<td width="35" align="left"><img src="{I_HDR_LEFT}" alt="" /></td>
	<td class="hdr" width="100%" align="left" nowrap="nowrap">{L_WHO_IS_ONLINE}</td>
	<td width="35" align="right"><img src="{I_HDR_RIGHT}" alt="" /></td>
  </tr>
</table>
<table class="forumline" width="100%" cellpadding="4" cellspacing="1" border="0">
  <tr>
	<th class="thCornerL" width="20%" height="25">&nbsp;{L_USERNAME}&nbsp;</th>
	<th class="thTop" width="20%" height="25">&nbsp;{L_STARTED}&nbsp;</th>
	<th class="thTop" width="20%">&nbsp;{L_LAST_UPDATE}&nbsp;</th>
	<th class="thTop" width="20%">&nbsp;{L_FORUM_LOCATION}&nbsp;</th>
	<th class="thCornerR" width="20%" height="25">&nbsp;{L_IP_ADDRESS}&nbsp;</th>
  </tr>
  <!-- BEGIN reg_user_row -->
  <tr>
	<td class="{reg_user_row.ROW_CLASS}" width="20%"><span class="gen"><a href="{reg_user_row.U_USER_PROFILE}"{reg_user_row.STYLE}>{reg_user_row.USERNAME}</a></span></td>
	<td class="{reg_user_row.ROW_CLASS}" width="20%" align="center"><span class="gen">{reg_user_row.STARTED}</span></td>
	<td class="{reg_user_row.ROW_CLASS}" width="20%" align="center" nowrap="nowrap"><span class="gen">{reg_user_row.LASTUPDATE}</span></td>
	<td class="{reg_user_row.ROW_CLASS}" width="20%"><span class="gen"><a href="{reg_user_row.U_FORUM_LOCATION}" class="gen">{reg_user_row.FORUM_LOCATION}</a></span></td>
	<td class="{reg_user_row.ROW_CLASS}" width="20%"><span class="gen"><a href="{reg_user_row.U_WHOIS_IP}" class="gen" target="_phpbbwhois">{reg_user_row.IP_ADDRESS}</a></span></td>
  </tr>
  <!-- END reg_user_row -->
  <tr>
	<td class="row3" colspan="5" height="1"><img alt="" src="{I_SPACER}" width="1" height="1" /></td>
  </tr>
  <!-- BEGIN spider_user_row -->
  <tr> 
	<td width="20%" class="{spider_user_row.ROW_CLASS}">&nbsp;<span class="gen">{spider_user_row.USERNAME}</span>&nbsp;</td>
	<td width="20%" align="center" class="{spider_user_row.ROW_CLASS}">&nbsp;<span class="gen">{spider_user_row.STARTED}</span>&nbsp;</td>
	<td width="20%" align="center" nowrap="nowrap" class="{spider_user_row.ROW_CLASS}">&nbsp;<span class="gen">{spider_user_row.LASTUPDATE}</span>&nbsp;</td>
	<td width="20%" class="{spider_user_row.ROW_CLASS}">&nbsp;<span class="gen"><a href="{spider_user_row.U_FORUM_LOCATION}" class="gen">{spider_user_row.FORUM_LOCATION}</a></span>&nbsp;</td>
	<td width="20%" class="{spider_user_row.ROW_CLASS}">&nbsp;<span class="gen"><a href="{spider_user_row.U_WHOIS_IP}" target="_phpbbwhois">{spider_user_row.IP_ADDRESS}</a></span>&nbsp;</td>
  </tr>
  <tr>
	<td class="row3" colspan="5" height="1"><img alt="" src="../{I_SPACER}" width="1" height="1" /></td>
  </tr>
  <!-- END spider_user_row -->
  <!-- BEGIN guest_user_row -->
  <tr>
	<td class="{guest_user_row.ROW_CLASS}" width="20%"><span class="gen">{guest_user_row.USERNAME}</span></td>
	<td class="{guest_user_row.ROW_CLASS}" width="20%" align="center"><span class="gen">{guest_user_row.STARTED}</span></td>
	<td class="{guest_user_row.ROW_CLASS}" width="20%" align="center" nowrap="nowrap"><span class="gen">{guest_user_row.LASTUPDATE}</span></td>
	<td class="{guest_user_row.ROW_CLASS}" width="20%"><span class="gen"><a href="{guest_user_row.U_FORUM_LOCATION}" class="gen">{guest_user_row.FORUM_LOCATION}</a></span></td>
	<td class="{guest_user_row.ROW_CLASS}" width="20%"><span class="gen"><a href="{guest_user_row.U_WHOIS_IP}" target="_phpbbwhois">{guest_user_row.IP_ADDRESS}</a></span></td>
  </tr>
  <!-- END guest_user_row -->
</table>
<table width="100%" height="9" cellspacing="0" cellpadding="0" border="0">
  <tr> 
	<td align="left" height="4" valign="top"><img src="{I_FTR_LEFT}" alt="" /></td>
	<td class="bottom" height="4" width="100%" nowrap="nowrap">&nbsp;</td>
	<td align="right" height="4" valign="top"><img src="{I_FTR_RIGHT}" alt="" /></td>
  </tr>
</table>
<br clear="all" />
