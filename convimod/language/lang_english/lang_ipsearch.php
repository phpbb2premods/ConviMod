<?php
/*-----------------------------------------------------------------------------
    IP Search - A phpBB Add-On
  ----------------------------------------------------------------------------
    lang_ipsearch.php
       English Language File
    File Version: 2.1.1
    Begun: August 26, 2003                 Last Modified: May 27, 2007
  ----------------------------------------------------------------------------
    Copyright 2007 by Jeremy Rogers.  Please read the license.txt included
    with the phpBB Add-On listed above for full license and copyright details.
  ----------------------------------------------------------------------------
    Translated by:
        <ATTENTION ALL POTENTIAL TRANSLATORS!
            You are free to translate this file into other languages for your
            own use and to distribute translated versions according to the
            terms of the license under which it is released. Add your name and
            contact details in this area.>
-----------------------------------------------------------------------------*/
/* 
	If you would like to add a message indicating you are the translator,
	you may add it below. This will appear with the phpBB copyright and is
	completely optional.
*/
// $lang['TRANSLATION'] .= 'Your Name Here';

/* This file uses a format of:
		'STRING_NAME'	=>	'text'
	Never edit the STRING_NAME part. That is required to be unchanged.
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'IPSEARCH_SEARCH_BY_IP'		=>	'Search by IP Address',
	'IPSEARCH_ENTER_IP'		=>	'Enter an IP Address or Hostname',
	'IPSEARCH_SEARCH_RESULTS'	=>	'IP Address Search Results',
	'IPSEARCH_ENTER_AN_IP'		=>	'Please go back and enter an IP Address.',
	'IPSEARCH_AGAIN'		=>	'Search Again?',
	'IPSEARCH_SESSIONS'		=>	'Sessions',
	'IPSEARCH_KEYS'			=>	'Session Keys',
	'IPSEARCH_POLL_VOTES'		=>	'Votes',
	'IPSEARCH_ACCOUNT'		=>	'Registration',
	'IPSEARCH_IP'			=>	'IP',
	'IPSEARCH_LOGS'			=>	'Logs',
	'IPSEARCH_USERS'		=>	'Users',
	'IPSEARCH_PMS'			=>	'PMs',
	'IP_SEARCH_NADA'		=>	'Your search returned no results.',
	'IPSEARCH_TOTALS'		=>	'Total for all IPs',
	'IPSEARCH_HOST_NOT_FOUND'	=>	'This IP address could not be resolved to a hostname.',
	'IPSEARCH_SEARCHED_FOR'		=>	'You searched for %s.',
	'IPSEARCH_HOST'			=>	'This IP address resolves to the hostname "%s."',
	'IPSEARCH_IP_LIST'		=>	'This hostname resolved to the following IP addresses, all of which were included in the search: %s.',
	'IPSEARCH_ENTER_IP_EXPLAIN'	=>	'Enter an IP address or hostname to search for users that have taken actions on the site while using that address or hostname. You may use * for a wildcard in partial searches of IP addresses. Wildcards are allowed only at the end of search terms and are not allowed in hostnames.',
	'IPSEARCH_RESOLVE_DELAY'	=>	'There may be a brief delay while the search attempts to resolve an IP address to a hostname or a hostname to a list of IP addresses. Please be patient and allow the search time to finish.',

// Errors
	'IPSEARCH_NO_RESOLVE'		=>	'Unfortunately, the hostname you entered could not be resolved. A list of IP addresses for that host could not be retrieved, so the search could not be completed.',
	'IPSEARCH_ENTER_AN_IP'		=>	'Please go back and enter a valid IP Address or hostname.',
	'IPSEARCH_BAD_CONFIG'		=>	'An incorrect search configuration was detected. Please check acp_ip_search.php for search lookups that have a duplicated cat field.',
	'IPSEARCH_BAD_CONFIG_GUESTS'	=>	'An incorrect search configuration was detected. Please check acp_ip_search.php for search lookups that have a duplicated cat field. The incorrect configuration was detected in the guest lookups.'
));

?>
