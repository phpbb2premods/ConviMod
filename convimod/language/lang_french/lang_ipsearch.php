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
	'IPSEARCH_SEARCH_BY_IP'		=>	'Recherche par adresse IP',
	'IPSEARCH_ENTER_IP'		=>	'Entrer une adresse IP ou un Nom d\'H&ocirc;te',
	'IPSEARCH_SEARCH_RESULTS'	=>	'R&eacute;sultat de la recherche par adresse IP',
	'IPSEARCH_ENTER_AN_IP'		=>	'Retournez en arri&egrave;re et entrer une adresse IP.',
	'IPSEARCH_AGAIN'		=>	'Nouvelle recherche?',
	'IPSEARCH_SESSIONS'		=>	'Sessions',
	'IPSEARCH_KEYS'			=>	'Cl&eacute; de session',
	'IPSEARCH_POLL_VOTES'		=>	'Votes',
	'IPSEARCH_ACCOUNT'		=>	'Enregistrement',
	'IPSEARCH_IP'			=>	'IP',
	'IPSEARCH_LOGS'			=>	'Logs',
	'IPSEARCH_USERS'		=>	'Membres',
	'IPSEARCH_PMS'			=>	'MPs',
	'IP_SEARCH_NADA'		=>	'Aucun r&eacute;sultat pour votre recherche.',
	'IPSEARCH_TOTALS'		=>	'Total pour toutes les IPs',
	'IPSEARCH_HOST_NOT_FOUND'	=>	'Cette adresse IP ne peut &ecirc;tre r&eacute;soulu pour cet h&ocirc;te.',
	'IPSEARCH_SEARCHED_FOR'		=>	'Vous recherchez : %s.',
	'IPSEARCH_HOST'			=>	'Cette adresse IP appartient &agrave; ce nom d\'h&ocirc;te : "%s."',
	'IPSEARCH_IP_LIST'		=>	'This hostname resolved to the following IP addresses, all of which were included in the search: %s.',
	'IPSEARCH_ENTER_IP_EXPLAIN'	=>	'Entrer une adresse IP ou un nom d\'h&ocirc;te pour rechercher les utilisateurs qui ont agi sur le site en utilisant cette adresse IP ou ce nom d\'h&ocirc;te. Vous pouvez employer * pour des recherches partielles des adresses IP. Les recherches partielles sont permise seulement sur la fin des adresses IP mais pas sur les noms d\'h&ocirc;tes.',
	'IPSEARCH_RESOLVE_DELAY'	=>	'Il peut y avoir un d&eacute;lai d\'attente pendant la propagation des adresses IP appartenant &agrave; un nom d\h&ocirc;te ou sur ce dernier et la M&agrave;J de la liste des adresses IP. Soyez patient et attendez la fin de la recherche.',

// Errors
	'IPSEARCH_NO_RESOLVE'		=>	'Malheureusement, le nom d\'h&ocirc;te que vous avez &eacute;crit ne pourrait pas &ecirc;tre r&eacute;solu. Une liste d\'adresses IP pour cet h&ocirc;te ne pourra pas &ecirc;tre recherch&eacute;e, ainsi la recherche ne pourra pas &ecirc;tre accomplie.',
	'IPSEARCH_ENTER_AN_IP'		=>	'SVP, retournez sur la page pr&eacute;c&eacute;dente et entrer une adresse IP valide ou un nom d\'h&ocirc;te.',
	'IPSEARCH_BAD_CONFIG'		=>	'Une mauvaise configuration a &eacute;t&eacute; d&eacute;tect&eacute;. SVP, regardez le fichier : acp_ip_search.php pour trouver la boucle que vous avez dupliqu&eacute;.',
	'IPSEARCH_BAD_CONFIG_GUESTS'	=>	'Une mauvaise configuration a &eacute;t&eacute; d&eacute;tect&eacute;. SVP, regardez le fichier : acp_ip_search.php pour trouver la boucle que vous avez dupliqu&eacute. Cette mauvaise configuration a &eacute;t&eacute; d&eacute;tect&eacute; dans la boucle des invit&eacute;s.'
));

?>
