<?php
/***************************************************************************
 *						lang_extend_external_hosting.php 
 *						------------------------
 *	begin				: 10/09/2005
 *	copyright			: Budman	
 *	email				: n/a
 *
 *	version				: 0.0.1 - 10/09/2005
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
}

// admin part

	// menu - titles - explain
	$lang['ext_adm_hosting'] = 'H&eacute;bergement externe';
	$lang['ext_adm_hosting_title'] = 'Administration de l\'h&eacute;bergement externe';
	$lang['ext_adm_explain'] = 'Depuis ce panneau vous pouvez r&eacute;gler la configuration de l\'h&eacute;bergement externe.<br />Au moins un h&eacute;bergeur devra &ecirc;tre activ&eacute;.';
	$lang['ext_adm_chg_hoster'] = 'Modifier / supprimer un h&eacute;bergeur existant';
	$lang['ext_adm_new_hoster'] = 'Inscrire un nouvel h&eacute;bergeur';

	// titles and explanations for hosters
	$lang['ext_adm_hoster_enable'] = 'Activ&eacute;';
	$lang['ext_adm_hoster_name'] = 'Nom de l\'h&eacute;bergeur';
	$lang['ext_adm_hoster_name_explain'] = 'Remplir ce champ avec le nom de l\'h&eacute;bergeur.';
	$lang['ext_adm_hoster_url'] = 'URL de l\'h&eacute;bergeur';
	$lang['ext_adm_hoster_url_explain'] = 'Remplir ce champ avec l\'URL de l\'h&eacute;bergeur, si possible le lien direct vers la page pr&eacute;vu &agrave; l\'envoi de donn&eacute;es.<br />Commencez avec "http://".';
	$lang['ext_adm_hoster_ub'] = 'Utiliser la boite d\'envoi de donn&eacute;es';
	$lang['ext_adm_hoster_ubc'] = 'Code de la boite';
	$lang['ext_adm_hoster_ubc_explain'] = 'Remplir ce champ avec le code envoy&eacute; par l\'h&eacute;bergeur.';
	$lang['ext_adm_change'] = 'Modifier';
	$lang['ext_adm_delete'] = 'Supprimer';
	$lang['ext_adm_new'] = 'Sauvegarder';
	$lang['ext_adm_reset'] = 'Initialiser';
	
	// return page
	$lang['ext_adm_change_done'] = 'Donn&eacute;es de l\'h&eacute;bergeur externe modifi&eacute;es avec succ&egrave;s.';
	$lang['ext_adm_delete_done'] = 'Donn&eacute;es de l\'h&eacute;bergeur externe supprim&eacute;es avec succ&egrave;s.';
	$lang['ext_adm_insert_done'] = 'Donn&eacute;es de l\'h&eacute;bergeur externe ins&eacute;r&eacute;es avec succ&egrave;s.';
	$lang['ext_adm_click_return'] = 'Cliquez %sici%s pour revenir aux r&eacute;glages de l\'h&eacute;bergement externe.';
	$lang['ext_adm_index_return'] = 'Cliquez %sici%s pour revenir &agrave; l\'Index d\'Administration';
	
	
// main language
	
	// titles - explain
	$lang['ext_hosting_title'] = 'H&eacute;bergement externe de fichiers';
	$lang['ext_host_explain'] = 'Vous pouvez choisir un h&eacute;bergeur externe pour vos fichiers. Au pr&eacute;alable, prenez connaissances des diff&eacute;rentes conditions de chaque h&eacute;bergeur.';
	$lang['ext_host_button'] = 'Ouvrir dans une nouvelle fen&ecirc;tre';
	
?>
