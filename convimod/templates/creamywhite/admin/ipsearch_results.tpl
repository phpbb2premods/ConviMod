<style type="text/css">
   <!--
	.numbers
	{
	      text-align: right;
	}

	.row4
	{
		background-color: lightgray;
		color: black;
	}
   -->
</style>
<h1>{L_IPSEARCH_SEARCH_RESULTS}</h1>

<p>
{SEARCH_TERM}
<!-- BEGIN show_host -->
 {HOST}
<!-- END show_host -->

<!-- BEGIN show_ip_list -->
 {IP_LIST}
<!-- END show_ip_list -->

<!-- BEGIN no_resolve -->
 {L_IPSEARCH_HOST_NOT_FOUND}
<!-- END no_resolve -->
</p>

<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
<thead>
<tr>
	<th class="hdra">{L_IPSEARCH_USERS}</th>
	<th class="hdra">{L_IPSEARCH_IP}</th>
	<th class="hdra">{L_POSTS}</th>
	<th class="hdra">{L_IPSEARCH_POLL_VOTES}</th>
	<th class="hdra">{L_IPSEARCH_SESSIONS}</th>
	<th class="hdra">{L_IPSEARCH_KEYS}</th>
<!-- BEGIN regged -->
	<th class="hdra">{L_IPSEARCH_ACCOUNT}</th>
<!-- END regged -->
	<th class="hdra">{L_IPSEARCH_PMS}</th>
</tr>
</thead>
<tbody>
<!-- BEGIN users -->
	<!-- BEGIN header -->
	<tr>
		<td class="hdra" height="28" colspan="10"><span class="cattitle">{users.HEADER}</span></td>
	</tr>
	<!-- END header -->
	<!-- BEGIN total -->
	<tr class="row4">
	<!-- END total -->

	<!-- BEGIN row -->
	<tr>
		<td class="{users.ROW_CLASS} gen">{users.USERNAME}</td>
		<td class="{users.ROW_CLASS} gen">{users.IP}</td>
		<td class="{users.ROW_CLASS} gen numbers">{users.POSTS_COUNT}</td>
		<td class="{users.ROW_CLASS} gen numbers">{users.VOTES_COUNT}</td>
		<td class="{users.ROW_CLASS} gen numbers">{users.SESSIONS_COUNT}</td>
		<td class="{users.ROW_CLASS} gen numbers">{users.KEYS_COUNT}</td>
		<!-- BEGIN regged -->
		<td class="{users.ROW_CLASS} gen numbers">{users.USERS_COUNT}</td>
		<!-- END regged -->
		<td class="{users.ROW_CLASS} gen numbers">{users.PMS_COUNT}</td>
	</tr>
	<!-- END row -->
<!-- END users -->
</tbody>
</table>

<br clear="all" />
