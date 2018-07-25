<?php

/***************************************************************************
 *                                lang_xs.php
 *                                -----------
 *   copyright            : (C) 2003 - 2007 Vjacheslav Trushkin
 *   support              : http://www.stsoftware.biz/forum
 *
 *   version              : 2.4.1
 *
 *   file revision        : 80
 *   project revision     : 83
 *   last modified        : 12 Mar 2007  10:28:52
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


$lang['Extreme_Styles'] = 'XS';
$lang['xs_title'] = 'XS';

$lang['xs_file'] = 'Fichier';
$lang['xs_template'] = 'Template';
$lang['xs_id'] = 'ID';
$lang['xs_style'] = 'Th&egrave;me';
$lang['xs_styles'] = 'Th&egrave;mes';
$lang['xs_users'] = 'Utilisateurs';
$lang['xs_options'] = 'Options';
$lang['xs_comment'] = 'Commentaire';
$lang['xs_upload_time'] = 'Temps d\'envoi';
$lang['xs_select'] = 'S&eacute;lectionner';

$lang['xs_continue'] = 'Continuer';	// button

$lang['xs_click_here_lc'] = 'Cliquer ici';
$lang['xs_edit_lc'] = 'Editer';;

/*
* navigation
*/
$lang['xs_config_shownav'] = array(
	'Configuration',
	'Installer un th&egrave;me',
	'D&eacute;sinstaller un th&egrave;me',
	'Th&egrave;me par d&eacute;faut',
	'Gestion du cache',
	'Importer des th&egrave;mes',
	'Exporter des th&egrave;mes',
	'Dupliquer des th&egrave;mes',
	'T&eacute;l&eacute;charger des th&egrave;mes',
	'Editer des templates',
	'Editer des th&egrave;mes',
	'Exporter la base de donn&eacute;es',
	'V&eacute;rifier les mises &agrave; jours',
	);

/*
* frame_top.tpl
*/
$lang['xs_menu_lc'] = 'Menu du MOD eXtreme Styles';
$lang['xs_support_forum_lc'] = 'Forum de support';
$lang['xs_download_styles_lc'] = 'T&eacute;l&eacute;charger des th&egrave;mes';
$lang['xs_install_styles_lc'] = 'Installer des th&egrave;mes';

/*
* index.tpl
*/

$lang['xs_main_comment1'] = 'Ceci est le menu principal du MOD eXtreme Styles. Il y a bon nombre de fonctionnalit&eacute;s disponible depuis cette interface, cette page se pr&eacute;sente donc comme un guide. Une petite explication se trouve en dessous de chaque fonction.<br /><br />Note : Ce MOD remplace le syst&egrave;me de gestion des th&egrave;mes de phpBB. Vous trouverez les fonctions par d&eacute;faut de phpBB dans cette liste, mais celles-ci seront optimis&eacute;es et auront de nouvelles fonctionnalit&eacute;s.<br /><br />Pour toutes questions n\'h&eacute;sitez pas &agrave; visiter <a href="http://www.stsoftware.biz/forum" target="_blank">le forum de support</a> où vous pourrez trouver de l\'aide pour ce MOD.';
$lang['xs_main_comment2'] = 'Le MOD eXtreme Styles permet &agrave; l\'administrateur de stocker des th&egrave;mes entiers dans des fichiers .style . Les th&egrave;mes sont stock&eacute;s dans de petits fichiers compress&eacute;s et ainsi permettent d\'&eacute;viter les t&eacute;l&eacute;chargements/envois inc&eacute;ssants de nombreux fichiers. Les fichiers du style sont compress&eacute;s et permettent que le t&eacute;l&eacute;chargement/envoi soit plus efficace que l\'actuel t&eacute;l&eacute;chargement/envoi des fichiers de th&egrave;mes.';
$lang['xs_main_comment3'] = 'Toutes les fonctions de gestion de th&egrave;mes de phpBB sont remplac&eacute;s par le MOD eXtreme Styles.<br /><br /><a href="{URL}">Cliquer ici</a> pour voir le menu.';
$lang['xs_main_title'] = 'Menu de navigation du MOD eXtreme Styles';
$lang['xs_menu'] = 'Menu du MOD eXtreme Styles';

$lang['xs_manage_styles'] = 'Gestion des th&egrave;mes';
$lang['xs_import_export_styles'] = 'Importer/Exporter des th&egrave;mes';
$lang['xs_install_uninstall_styles'] = 'Installer/D&eacute;sinstaller des th&egrave;mes';
$lang['xs_edit_templates'] = 'Editer des templates';
$lang['xs_other_functions'] = 'Autres fonctions';

$lang['xs_configuration'] = 'Configuration';
$lang['xs_configuration_explain'] = 'Ceci vous permet de changer la configuration du MOD eXtreme Styles.';
$lang['xs_default_style'] = 'Th&egrave;me par d&eacute;faut';
$lang['xs_default_style_explain'] = 'Ceci vous permet de changer le th&egrave;me par d&eacute;faut du forum et changer le th&egrave;me des utilisateurs d\'un th&egrave;me &agrave; un autre.';
$lang['xs_manage_cache'] = 'Gestion du Cache';
$lang['xs_manage_cache_explain'] = 'Ceci vous permet de g&eacute;rer les fichiers mis en cache.';
$lang['xs_import_styles'] = 'Importer des th&egrave;mes';
$lang['xs_import_styles_explain'] = 'Ceci vous permet de t&eacute;l&eacute;charger et installer des fichiers .style .';
$lang['xs_export_styles'] = 'Exporter des th&egrave;mes';
$lang['xs_export_styles_explain'] = 'Ceci vous permet de sauvegarder un th&egrave;me de votre forum en tant que fichier .style et ainsi de facilement le transf&eacute;rer vers un autre forum ou un autre site.';
$lang['xs_clone_styles'] = 'Dupliquer des th&egrave;mes';
$lang['xs_clone_styles_explain'] = 'Ceci vous permet de rapidement de dupliquer des th&egrave;mes ou bien un template complet.';
$lang['xs_download_styles'] = 'T&eacute;l&eacute;charger des th&egrave;mes';
$lang['xs_download_styles_explain'] = 'Ceci vous permet de rapidement de t&eacute;l&eacute;charger et installer des th&egrave;mes depuis des sites. Vous pouvez configurer la liste des sites vous-m&ecirc;mes.';
$lang['xs_install_styles'] = 'Installer des th&egrave;mes';
$lang['xs_install_styles_explain'] = 'Ceci vous permet d\'installer des th&egrave;mes d&eacute;j&agrave; pr&eacute;sents sur votre forum.';
$lang['xs_uninstall_styles'] = 'D&eacute;sinstaller des th&egrave;mes';
$lang['xs_uninstall_styles_explain'] = 'Ceci vous permet de d&eacute;sinstaller des th&egrave;mes de votre forum.';
$lang['xs_edit_templates_explain'] = 'Ceci vous permet d\'&eacute;diter des fichiers tpl directement en ligne.';
$lang['xs_edit_styles_data'] = 'Editer des variables de th&egrave;mes';
$lang['xs_edit_styles_data_explain'] = 'Ceci vous permet d\'&eacute;diter les variables des th&egrave;mes. Ceci est utilis&eacute; par certains th&egrave;mes, mais de nombreux th&egrave;mes ne les utilisent pas et utilisent &agrave; la place un fichier css.';
$lang['xs_export_styles_data'] = 'Exporter des variables de th&egrave;mes';
$lang['xs_export_styles_data_explain'] = 'Ceci vous permet de sauver les variables d\'un th&egrave;me dans theme_info.cfg.';
$lang['xs_check_for_updates'] = 'V&eacute;rifier les mises &agrave; jours';
$lang['xs_check_for_updates_explain'] = 'Ceci vous permet de v&eacute;rifier les mises &agrave; jours de th&egrave;mes ou mods install&eacute;s sur votre forum.';

$lang['xs_set_configuration_lc'] = 'R&eacute;gler la configuration';
$lang['xs_set_default_style_lc'] = 'R&eacute;gler le th&egrave;me par d&eacute;faut';
$lang['xs_manage_cache_lc'] = 'Gestion du cache';
$lang['xs_import_styles_lc'] = 'Importer des th&egrave;mes';
$lang['xs_export_styles_lc'] = 'Exporter des th&egrave;mes';
$lang['xs_clone_styles_lc'] = 'Dupliquer des th&egrave;mes';
$lang['xs_uninstall_styles_lc'] = 'D&eacute;sinstaller des th&egrave;mes';
$lang['xs_edit_templates_lc'] = 'Editer des templates';
$lang['xs_edit_styles_data_lc'] = 'Editer des variables des th&egrave;mes';
$lang['xs_export_styles_data_lc'] = 'Exporter des variables des th&egrave;mes';
$lang['xs_check_for_updates_lc'] = 'V&eacute;rifier les mises &agrave; jour';

/*
* ftp.tpl, ftp functions
*/

$lang['xs_ftp_comment1'] = 'Afin d\'utiliser cette fonctionnalit&eacute;, vous devez choisir la m&eacute;thode d\'envoi du fichier. Si vous s&eacute;lectionnez par FTP, le mot de passe ne sera pas enregistr&eacute; et le MOD eXtreme Styles vous demandera un mot de passe &agrave; chaque fois que vous voudrez acc&eacute;der &agrave; une fonction n&eacute;c&eacute;ssitant un acc&egrave;s FTP. Si vous s&eacute;lectionnez un syst&egrave;me de fichiers locaux, assurez-vous dans ce cas que tous les r&eacute;pertoires requis sont inscriptibles.';
$lang['xs_ftp_comment2'] = 'Pour utiliser cette fonctionnalit&eacute;, vous devez r&eacute;gler la configuration du FTP. Un mot de passe ne sera pas gard&eacute; et le MOD eXtreme Styles vous demandera un mot de passe &agrave; chaque fois que vous voudrez acc&eacute;der &agrave; une fonction n&eacute;c&eacute;ssitant un acc&egrave;s FTP.';
$lang['xs_ftp_comment3'] = 'Attention: les fonctions FTP sont d&eacute;sactiv&eacute;es sur ce serveur. Vous ne pourrez pas utiliser les fonctions du MOD eXtreme Styles qui requiert un acc&egrave;s FTP.';

$lang['xs_ftp_title'] = 'Configuration FTP';

$lang['xs_ftp_explain'] = 'Le FTP est utilis&eacute; pour envoyer de nouveaux th&egrave;mes. Si vous souhaitez utiliser la fonction d\'importation de th&egrave;mes, vous devrez r&eacute;gler la configuration du FTP en cons&eacute;quence. Le MOD eXtreme Styles tente de d&eacute;tecter automatiquement la configuration quand et si cela est possible.';

$lang['xs_ftp_error_fatal'] = 'Fonctions FTP d&eacute;sactiv&eacute;es dur ce serveur. Impossible de continuer.';
$lang['xs_ftp_error_connect'] = 'Erreur FTP: impossible de se connecter &agrave; {HOST}';
$lang['xs_ftp_error_login'] = 'Erreur FTP: impossible de se connecter';
$lang['xs_ftp_error_chdir'] = 'Erreur FTP: impossible de changer le r&eacute;pertoire en {DIR}';
$lang['xs_ftp_error_nonphpbbdir'] = 'Erreur FTP: vous avez indiqu&eacute; un mauvais r&eacute;pertoire. Aucun fichier phpBB ne se trouve dans ce r&eacute;pertoire';
$lang['xs_ftp_error_noconnect'] = 'Impossible de se connecter au serveur FTP';
$lang['xs_ftp_error_login2'] = 'Login ou mot de passe FTP invalide';

$lang['xs_ftp_log_disabled'] = 'Les fonctions FTP sont d&eacute;sactiv&eacute;es sur ce serveur. Impossible de continuer le script.';
$lang['xs_ftp_log_connecting'] = 'Se connecte &agrave; {HOST}';
$lang['xs_ftp_log_noconnect'] = 'Impossible de se connecter &agrave; {HOST}';
$lang['xs_ftp_log_connected'] = 'Connect&eacute;. identification en cours...';
$lang['xs_ftp_log_nologin'] = 'Impossible de se connecter en tant que {USER}';
$lang['xs_ftp_log_loggedin'] = 'Identifi&eacute;';
$lang['xs_ftp_log_end'] = 'Fichier ex&eacute;cut&eacute;';
$lang['xs_ftp_log_nopwd'] = 'Erreur: impossible de retrouver le r&eacute;pertoire actuel';
$lang['xs_ftp_log_nomkdir'] = 'Erreur: impossible de cr&eacute;er le r&eacute;pertoire {DIR}';
$lang['xs_ftp_log_mkdir'] = 'R&eacute;pertoire {DIR} cr&eacute;e';
$lang['xs_ftp_log_nochdir'] = 'Erreur: impossible de changer le r&eacute;pertoire en {DIR}';
$lang['xs_ftp_log_normdir'] = 'Erreur: impossible de supprimer le r&eacute;pertoire {DIR}';
$lang['xs_ftp_log_rmdir'] = 'R&eacute;pertoire {DIR} supprim&eacute;';
$lang['xs_ftp_log_chdir'] = 'R&eacute;pertoire chang&eacute; en {DIR}';
$lang['xs_ftp_log_noupload'] = 'Erreur: impossible d\'envoyer le fichier {FILE}';
$lang['xs_ftp_log_upload'] = 'Fichier {FILE} envoy&eacute;';
$lang['xs_ftp_log_nochmod'] = 'Attention: impossible de chmoder le fichier {FILE}';
$lang['xs_ftp_log_chmod'] = 'Fichier chmod&eacute; {FILE} &agrave; {MODE}';
$lang['xs_ftp_log_invalidcommand'] = 'Erreur: commande inconnue: {COMMAND}';
$lang['xs_ftp_log_chdir2'] = 'Changement du r&eacute;pertoire actuel initialement &agrave; {DIR}';
$lang['xs_ftp_log_nochdir2'] = 'Impossible de changer le r&eacute;pertoire &agrave; {DIR}';

$lang['xs_ftp_config'] = 'Configuration du FTP';
$lang['xs_ftp_select_method'] = 'Choisir la m&eacute;thode d\'envoi';
$lang['xs_ftp_select_local'] = 'Utiliser le syst&egrave;me de fichiers locaux (aucune configuration requise)';
$lang['xs_ftp_select_ftp'] = 'Utiliser un FTP (r&eacute;gler la configuration du FTP ci-dessous)';

$lang['xs_ftp_settings'] = 'R&eacute;glages du FTP';
$lang['xs_ftp_host'] = 'H&ocirc;te FTP';
$lang['xs_ftp_login'] = 'Login FTP';
$lang['xs_ftp_path'] = 'Chemin vers phpBB FTP';
$lang['xs_ftp_pass'] = 'Mot de Passe FTP';
$lang['xs_ftp_remotedir'] = 'R&eacute;pertoire Principal';

$lang['xs_ftp_host_guess'] = ' (probablement "{HOST}" [<a href="javascript: void(0)" onclick="{CLICK}">voir l\'h&ocirc;te</a>])';
$lang['xs_ftp_login_guess'] = ' (probablement "{LOGIN}" [<a href="javascript: void(0)" onclick="{CLICK}">voir l\'h&ocirc;te</a>])';
$lang['xs_ftp_path_guess'] = ' (probablement "{PATH}" [<a href="javascript: void(0)" onclick="{CLICK}">voir le chemin</a>])';


/*
* config.tpl
*/

$lang['xs_config_updated'] = 'Configuration mise &agrave; jour.';
$lang['xs_config_updated_explain'] = 'Vous devez rafra&icirc;chir cette page pour que la nouvelle configuration prenne effet. <a href="{URL}">Cliquer ici</a> pour rafra&icirc;chir la page.';
$lang['xs_config_warning'] = 'Attention: le cache n\'est pas inscriptible.';
$lang['xs_config_warning_explain'] = 'Le r&eacute;pertoire du cache n\'est pas inscriptible. Le MOD eXtreme Styles peut tenter de r&eacute;parer ce probl&egrave;me.<br /><a href="{URL}">Cliquer ici</a> pour essayer de changer l\'acc&egrave;s au r&eacute;pertoire du cache.<br /><br />Si le cache ne fonctionne pas sur votre serveur pour une quelconque raison, ne vous inqui&eacute;tez pas le MOD eXtreme Styles<br />augmente significativement la vitesse de votre forum m&ecirc;me sans cache.';

$lang['xs_config_maintitle'] = 'Configuration du MOD eXtreme Styles';
$lang['xs_config_subtitle'] = 'Ceci est la configuration pour eXtreme Styles. Si vous ne comprenez pas &agrave; quoi servent certaines variables, ne les changez pas.';
$lang['xs_config_title'] = 'R&eacute;glages du MOD eXtreme Styles v{VERSION}';
$lang['xs_config_cache'] = 'Configuration du Cache';

$lang['xs_config_navbar'] = 'Afficher sur la frame de gauche:';
$lang['xs_config_navbar_explain'] = 'Vous pouvez choisir quelles fonctions seront affich&eacute;es dans la frame de gauche dans le panneau d\'administration.';

$lang['xs_config_def_template'] = 'R&eacute;pertoire du th&egrave;me par d&eacute;faut';
$lang['xs_config_def_template_explain'] = 'Si un tpl requis ne se trouve pas dans le r&eacute;pertoire du template (cela peut arriver si vous avez mal modd&eacute; votre forum) alors le syst&egrave;me de template recherchera le m&ecirc;me fichier dans un autre r&eacute;pertoire de template (par exemple si le th&egrave;me actuel est "monTh&egrave;me" et le script requiert le fichier "monTh&egrave;me/monfichier.tpl" et que ce fichier n\'existe pas, le syst&egrave;me de template recherchera ce fichier dans "subSilver/monfichier.tpl"). Laisser blanc pour d&eacute;sactiver cette option.';

$lang['xs_config_check_switches'] = 'V&eacute;rifier les switches pendant la compilation';
$lang['xs_config_check_switches_explain'] = 'Ceci vous permet de v&eacute;rifier les erreurs dans les templates. D&eacute;sactiver cette option augmentera la vitesse de compilation, mais le compilateur peut laisser passer quelques erreurs dans les templates s\'ils contiennent certaines erreurs.<br /><br />La v&eacute;rification avanc&eacute;e v&eacute;rifiera les erreurs dans les templates et r&eacute;parera automatiquement toutes les erreurs reconnues (il y a certaines typos reconnaissables dans diff&eacute;renys MODs). Elle fonctionne un peu plus lentement que la v&eacute;rification simple.<br /><br />Mais parfois, le template semble propre uniquement quand la v&eacute;rification d\'erreurs est d&eacute;sactiv&eacute;e; cela arrive &agrave; cause d\'un mauvais codage HTML - dans ce cas contacter l\'auteur du th&egrave;me pour corriger les erreurs.<br /><br />Si la fonction de cache est d&eacute;sactiv&eacute;e, alors d&eacute;sactivez &eacute;galement cette fonction pour une compilation plus rapide.'; 
$lang['xs_config_check_switches_0'] = 'D&eacute;sactiv&eacute;';
$lang['xs_config_check_switches_1'] = 'V&eacute;rification avanc&eacute;e';
$lang['xs_config_check_switches_2'] = 'V&eacute;rification simple';

$lang['xs_config_show_errors'] = 'Affiche les erreurs quand les fichiers sont incorrectement inclus dans les fichiers tpl';
$lang['xs_config_show_error_explain'] = 'Ceci active/d&eacute;sactive les erreurs dans les fichiers tpl que l\'utilisateur a incorrectement utilis&eacute; &lt;!-- INCLUDE filename --&gt;';

$lang['xs_config_tpl_comments'] = 'Ajouter les noms des fichiers tpl en HTML';
$lang['xs_config_tpl_comments_explain'] = 'Ceci ajoute des commentaires dans le code HTML qui permet aux auteurs de th&egrave;mes de d&eacute;tecter quels fichiers tpl sont affich&eacute;s.';

$lang['xs_config_use_cache'] = 'Utiliser le cache';
$lang['xs_config_use_cache_explain'] = 'Le cache est sauvegard&eacute; sur le disque et acc&eacute;lerera le syst&egrave;me de templates car il n\'y aura plus besoin de compiler le template &agrave; chaque fois qu\'il est affich&eacute;.';

$lang['xs_config_auto_compile'] = 'Mettre en cache automatiquement';
$lang['xs_config_auto_compile_explain'] = 'Ceci compilera automatiquement les templates qui ne sont pas mis en cache et seront sauvegard&eacute; dans le r&eacute;pertoire de cache.';

$lang['xs_config_auto_recompile'] = 'Re-compiler automatiquement le cache';
$lang['xs_config_auto_recompile_explain'] = 'Ceci re-compilera automatiquement les templates si un template a &eacute;t&eacute; chang&eacute;.';

$lang['xs_config_php'] = 'Extension des fichiers de cache';
$lang['xs_config_php_explain'] = 'Ceci est l\'extension des fichiers mis en cache. Les fichiers sont sauvegard&eacute;s dans un format php, donc l\'extension par d&eacute;faut sera "php". Ne pas inclure le point';

$lang['xs_config_back'] = '<a href="{URL}">Cliquer ici</a> pour revenir &agrave; la configuration';
$lang['xs_config_sql_error'] = 'Impossible de mettre &agrave; jour la configuration g&eacute;n&eacute;rale pour {VAR}';

// Debug info
$lang['xs_debug_header'] = 'Informations de d&eacute;bogage';
$lang['xs_debug_explain'] = 'Ceux sont les informatons de d&eacute;bogage. Utilis&eacute; pour trouver/r&eacute;parer les probl&egrave;mes lors de la configuration du cache.';
$lang['xs_debug_vars'] = 'Variables du template';
$lang['xs_debug_tpl_name'] = 'Nom de fichier du template:';
$lang['xs_debug_cache_filename'] = 'Nom de fichier du cache:';
$lang['xs_debug_data'] = 'Donn&eacute;es du d&eacute;bogage:';

$lang['xs_check_hdr'] = 'V&eacute;rification du cache pour %s';
$lang['xs_check_filename'] = 'Erreur: nom de fichier invalide';
$lang['xs_check_openfile1'] = 'Erreur: impossible d\'ouvrir le fichier "%s". Tente de cr&eacute;er les r&eacute;pertoires...';
$lang['xs_check_openfile2'] = 'Erreur: impossible d\'ouvrir le fichier "%s" pour la seconde fois. Annulation...';
$lang['xs_check_nodir'] = 'V&eacute;rification de "%s" - Pas de r&eacute;pertoire &agrave; ce nom.';
$lang['xs_check_nodir2'] = 'Erreur: impossible de cr&eacute;er le r&eacute;pertoire "%s" - vous devriez v&eacute;rifier les permissions de ce r&eacute;pertoire.';
$lang['xs_check_createddir'] = 'R&eacute;pertoire "%s" cr&eacute;e';
$lang['xs_check_dir'] = 'V&eacute;rification de "%s" - le r&eacute;pertoire existe.';
$lang['xs_check_ok'] = 'Fichier "%s" disponible en &eacute;criture. Tout semble fonctionner.';
$lang['xs_error_demo_edit'] = 'Vous ne pouvez pas &eacute;diter le fichier en mode d&eacute;mo';
$lang['xs_error_not_installed'] = 'Le MOD eXtreme Styles n\'est pas install&eacute;. Vous avez omis d\'envoyer le fichier suivant : includes/template.php';


/*
* chmod
*/

$lang['xs_chmod'] = 'CHMOD';
$lang['xs_chmod_return'] = '<br /><br /><a href="{URL}">Cliquer ici</a> pour revenir &agrave; la configuration.';
$lang['xs_chmod_message1'] = 'Configuration modifi&eacute;e.';
$lang['xs_chmod_error1'] = 'Impossible de changer le mode d\'acc&egrave;s pour le r&eacute;pertoire du cache';


/*
* default style
*/

$lang['xs_def_title'] = 'R&eacute;gler le th&egrave;me par d&eacute;faut';
$lang['xs_def_explain'] = 'Ceci vous permet de changer le th&egrave;me par d&eacute;faut du forum et changer le th&egrave;me des utilisateurs d\'un th&egrave;me &agrave; un autre.';

$lang['xs_styles_set_default'] = 'Mettre par d&eacute;faut';
$lang['xs_styles_no_override'] = 'Ne pas &eacute;craser les pr&eacute;f&eacute;rences de l\'utilisateur';
$lang['xs_styles_do_override'] = 'Ecraser les pr&eacute;f&eacute;rences de l\'utilisateur';
$lang['xs_styles_switch_all'] = 'Changer le th&egrave;me de tous les utilisateurs par celui-ci';
$lang['xs_styles_switch_all2'] = 'Changer le th&egrave;me de tous les utilisateurs par:';
$lang['xs_styles_defstyle'] = 'Th&egrave;me par d&eacute;faut';
$lang['xs_styles_available'] = 'Th&egrave;mes disponibles';
$lang['xs_styles_make_public'] = 'Rendre le th&egrave;me public';
$lang['xs_styles_make_admin'] = 'Rendre le th&egrave;me uniquement disponible pour l\'administrateur';
$lang['xs_styles_users'] = 'Listes des utilisateurs';


/*
* cache management
*/

$lang['xs_manage_cache_explain2'] = 'Ceci vous permet de compiler ou supprimer des fichiers mis en cache pour les th&egrave;mes.';
$lang['xs_clear_all_lc'] = 'Supprimer tous les fichiers mis en cache';
$lang['xs_compile_all_lc'] = 'compiler tous les th&egrave;mes';
$lang['xs_clear_cache_lc'] = 'Vider le cache';
$lang['xs_compile_cache_lc'] = 'Compiler le cache';
$lang['xs_cache_confirm'] = 'Si vous avez de nombreux th&egrave;mes, cela peut causer un gros chargement du serveur. Etes-vous s&ucirc;r de vouloir continuer ?';

$lang['xs_cache_nowrite'] = 'Erreur: impossible d\'acc&eacute;der au r&eacute;pertoire de cache';
$lang['xs_cache_log_deleted'] = '{FILE} supprim&eacute;';
$lang['xs_cache_log_nodelete'] = 'Erreur: impossible de supprimer le fichier {FILE}';
$lang['xs_cache_log_nothing'] = 'Rien &agrave; supprimer pour le template {TPL}';
$lang['xs_cache_log_nothing2'] = 'Rien &agrave; supprimer dans le r&eacute;pertoire de cache';
$lang['xs_cache_log_count'] = 'La suppression des fichiers {NUM} a &eacute;t&eacute; effectu&eacute; avec succ&egrave;s';
$lang['xs_cache_log_count2'] = 'Erreur lors de la suppresion des fichiers {NUM}';
$lang['xs_cache_log_compiled'] = 'Compil&eacute;s: fichiers {NUM}';
$lang['xs_cache_log_errors'] = 'Erreurs: {NUM}';
$lang['xs_cache_log_noaccess'] = 'Erreur: impossible d\'acc&eacute;der au r&eacute;pertoire {DIR}';
$lang['xs_cache_log_compiled2'] = 'Compil&eacute;: {FILE}';
$lang['xs_cache_log_nocompile'] = 'Erreur compilation: {FILE}';

/*
* export/import/download/clone
*/

$lang['xs_import_explain'] = 'Ceci vous permet d\'importer des th&egrave;mes, ainsi qu\en installer et en mettre &agrave; jour automatiquement.<br /><br />Note : si vous avez install&eacute; d\'autres MODs (except&eacute; le MOD eXtreme Styles) sur ce forum, faites attention lorsque vous importez des th&egrave;mes car des th&egrave;mes peuvent ne pas &ecirc;tre compatible avec votre forum. Vous pouvez uniquement installer des th&egrave;mes qui ont les m&ecirc;mes modifications que les autres th&egrave;mes que vous avez configur&eacute; sur votre forum.';

$lang['xs_import_lc'] = 'Importer';
$lang['xs_list_files_lc'] = 'Liste des fichiers';
$lang['xs_delete_file_lc'] = 'Supprimer le fichier';
$lang['xs_export_style_lc'] = 'Exporter le th&egrave;me';

$lang['xs_import_no_cached'] = 'Il n\'y a aucun th&egrave;me mis en cache &agrave; importer';
$lang['xs_add_styles'] = 'Ajouter des th&egrave;mes';
$lang['xs_add_styles_web'] = 'T&eacute;l&eacute;charger des th&egrave;mes ';
$lang['xs_add_styles_web_get'] = 'Le t&eacute;l&eacute;charger';
$lang['xs_add_styles_copy'] = 'Copier &agrave; partir d\'un fichier en local ';
$lang['xs_add_styles_copy_get'] = 'Copier';
$lang['xs_add_styles_upload'] = 'Envoyer depuis un ordinateur ';
$lang['xs_add_styles_upload_get'] = 'Envoyer';

$lang['xs_export_style'] = 'Exporter des th&egrave;mes';
$lang['xs_export_style_explain'] = 'Ceci vous permet d\'exporter un th&egrave;me en un seul fichier. Ce fichier est tr&egrave;s petit - plus petit qu\'un fichier *.zip (car compress&eacute; en Gzip, qui fonctionne mieux que le Zip) et tout le th&egrave;me se trouve &agrave; l\'int&eacute;rieur de ce fichier. Ainsi, il est plus facile de transf&eacute;rer un th&egrave;me d\'un forum &agrave; un autre.<br /><br />Il vous est &eacute;galement possible d\'envoyer des th&egrave;mes export&eacute;s en utilisant un FTP vers le serveur. Ce syst&egrave;me vous permet de transf&eacute;rer un th&egrave;me vers un autre forum de mani&egrave;re rapide sans avoir besoin de le copier manuellement.';

$lang['xs_export_style_title'] = 'Exporter le template "{TPL}"';
$lang['xs_export_tpl_name'] = 'Exporter en tant que (nom du template)';
$lang['xs_export_style_names'] = 'Selectionner le(s) th&egrave;me(s) &agrave; exporter';
$lang['xs_export_style_name'] = 'Th&egrave;me &agrave; exporter (nom du th&egrave;me)';
$lang['xs_export_style_comment'] = 'Commentaire';
$lang['xs_export_where'] = 'Lieu d\'exportation';
$lang['xs_export_where_download'] = 'T&eacute;l&eacute;charger sous le nom de';
$lang['xs_export_where_store'] = 'Stocker en tant que fichier sur le serveur';
$lang['xs_export_where_store_dir'] = 'R&eacute;pertoire';
$lang['xs_export_where_ftp'] = 'Envoyer via FTP';
$lang['xs_export_filename'] = 'Exporter le nom de fichier';

$lang['xs_download_explain2'] = 'Ceci vous permet de rapidement de t&eacute;l&eacute;charger et installer des th&egrave;mes directement depuis diff&eacute;rents sites. Cliquez sur le lien pr&egrave;s du nom du site et vous serez redirig&eacute;s vers une page de t&eacute;l&eacute;chargement de th&egrave;mes.<br /><br />Vous pouvez &eacute;galement g&eacute;rer la liste des sites.';

$lang['xs_download_locations'] = 'Lieux de t&eacute;l&eacute;chargement';
$lang['xs_edit_link'] = 'Editer le lien';
$lang['xs_add_link'] = 'Ajouter un lien';
$lang['xs_link_title'] = 'Titre du lien';
$lang['xs_link_url'] = 'URL du lien';
$lang['xs_delete'] = 'Supprimer';

$lang['xs_style_header_error_file'] = 'Impossible d\'ouvrir le fichier local';
$lang['xs_style_header_error_server'] = 'Erreur sur le serveur: ';
$lang['xs_style_header_error_invalid'] = 'Header du fichier invalide';
$lang['xs_style_header_error_reason'] = 'Erreur durant la lecture du header du fichier: ';
$lang['xs_style_header_error_incomplete'] = 'Fichier imcomplet';
$lang['xs_style_header_error_incomplete2'] = 'Taille du fichier invalide. Le fichier est probablement incomplet.';
$lang['xs_style_header_error_invalid2'] = 'Fichier invalide. Probablement, que le fichier n\'est pas compatible avec le MOD eXtreme Styles ou bien c\'est une version corrompue.';
$lang['xs_error_cannot_open'] = 'Impossible d\'ouvrir le fichier.';
$lang['xs_error_decompress_style'] = 'Erreur lors de la d&eacute;compression du fichier. Le fichier est probablement corrompu.';
$lang['xs_error_cannot_create_file'] = 'Impossible de cr&eacute;er le fichier "{FILE}"';
$lang['xs_error_cannot_create_tmp'] = 'Impossible de cr&eacute;er le fichier temporaire "{FILE}"';
$lang['xs_import_invalid_file'] = 'Fichier invalide';
$lang['xs_import_incomplete_file'] = 'Fichier incomplet';
$lang['xs_import_uploaded'] = 'Th&egrave;me envoy&eacute;.';
$lang['xs_import_installed'] = 'Th&egrave;me envoy&eacute; et install&eacute;.';
$lang['xs_import_notinstall'] = 'Th&egrave;me envoy&eacute;, mais erreur en installant le th&egrave;me (erreur sql).';
$lang['xs_import_notinstall2'] = 'Th&egrave;me envoy&eacute;, mais erreur en installant le th&egrave;me: aucun th&egrave;me trouv&eacute; dans theme_info.cfg';
$lang['xs_import_notinstall3'] = 'Th&egrave;me envoy&eacute;, mais erreur en installant le th&egrave;me: aucune entr&eacute;e "{STYLE}" trouv&eacute;e dans theme_info.cfg';
$lang['xs_import_notinstall4'] = 'Th&egrave;me envoy&eacute;, mais erreur en installant le th&egrave;me: impossible d\'obtenir l\'information concernant themes_id';
$lang['xs_import_notinstall5'] = 'Th&egrave;me envoy&eacute;, mais erreur en installant le th&egrave;me: impossible de mettre &agrave; jour la table des th&egrave;mes';
$lang['xs_import_nodownload'] = 'Impossible de t&eacute;l&eacute;charger le th&egrave;me depuis {URL}';
$lang['xs_import_nodownload2'] = 'Impossible de copier le th&egrave;me depuis {URL}';
$lang['xs_import_nodownload3'] = 'Fichier non envoy&eacute;.';
$lang['xs_import_uploaded2'] = 'Th&egrave;me t&eacute;l&eacute;charg&eacute;. Vous pouvez d&eacute;sormais l\'importer.<br /><br /><a href="{URL}">Cliquer ici</a> pour importer le th&egrave;me.';
$lang['xs_import_uploaded3'] = 'Th&egrave;me copi&eacute;. Vous pouvez d&eacute;sormais l\'importer.<br /><br /><a href="{URL}">Cliquer ici</a> pour importer le th&egrave;me.';
$lang['xs_import_uploaded4'] = 'Th&egrave;me envoy&eacute;. Vous pouvez d&eacute;sormais l\'importer.<br /><br /><a href="{URL}">Cliquer ici</a> pour importer le th&egrave;me.';
$lang['xs_export_no_open_dir'] = 'Impossible d\'ouvrir le r&eacute;pertoire {DIR}';
$lang['xs_export_no_open_file'] = 'Impossible d\'ouvrir le fichier {FILE}';
$lang['xs_export_no_read_file'] = 'Erreur lors de la lecture du fichier {FILE}';
$lang['xs_no_theme_data'] = 'Impossible de trouver les donn&eacute;es pour le th&egrave;me s&eacute;lectionn&eacute;';
$lang['xs_no_style_info'] = 'Impossible de trouver les informations du th&egrave;me';
$lang['xs_export_noselect_themes'] = 'Vous devez choisir au moins un th&egrave;me';
$lang['xs_export_error'] = 'Impossible d\'exporter le template "{TPL}": ';
$lang['xs_export_error2'] = 'Impossible d\'exporter le template "{TPL}": le th&egrave;me est vide';
$lang['xs_export_saved'] = 'Th&egrave;me sauv&eacute; en tant que "{FILE}"';
$lang['xs_export_error_uploading'] = 'Erreur lors de l\'envoi du th&egrave;me';
$lang['xs_export_uploaded'] = 'Fichier envoy&eacute;.';
$lang['xs_clone_taken'] = 'Le nom de ce th&egrave;me est d&eacute;j&agrave; utilis&eacute;.';
$lang['xs_error_new_row'] = 'Impossible d\'ins&eacute;rer une nouvelle colonne dans cette table.';
$lang['xs_theme_cloned'] = 'Th&egrave;me dupliqu&eacute;.';
$lang['xs_invalid_style_name'] = 'Nom de th&egrave;me invalide.';
$lang['xs_clone_style_exists'] = 'Ce template existe d&eacute;j&agrave;';
$lang['xs_clone_no_select'] = 'Vous devez choisir au moins un th&egrave;me &agrave; dupliquer.';
$lang['xs_no_themes'] = 'Impossible de trouver le th&egrave;me dans la base de donn&eacute;es.';

$lang['xs_import_back'] = '<a href="{URL}">Cliquer ici</a> pour retourner &agrave; la page d\'importation des th&egrave;mes.';
$lang['xs_import_back_download'] = '<a href="{URL}" target="main">Cliquer ici</a> pour retourner au t&eacute;l&eacute;chargements.';
$lang['xs_export_back'] = '<a href="{URL}">Cliquer ici</a> pour retourner &agrave; la page d\'exportation des th&egrave;mes.';
$lang['xs_clone_back'] = '<a href="{URL}">Cliquer ici</a> pour retourner &agrave; la page de cl&ocirc;nage des th&egrave;mes.';
$lang['xs_download_back'] = '<a href="{URL}">Cliquer ici</a> pour retourner au t&eacute;l&eacute;chargements.';

$lang['xs_import_tpl'] = 'Importer le Template "{TPL}"';
$lang['xs_import_tpl_comment'] = 'Ceci vous permet d\'envoyer un template dans votre forum. Si un template poss&egrave;de d&eacute;j&agrave; ce nom sur votre forum, les anciens fichiers seront &eacute;cras&eacute;s et peut ainsi &ecirc;tre utilis&eacute; pour mettre &agrave; jour des th&egrave;mes.<br /><br />Cette fonctionnalit&eacute; peut &eacute;galement automatiquement installer des th&egrave;mes. Si vous souhaitez installer un th&egrave;me apr&egrave;s l\'avoir import&eacute;, alors s&eacute;lectionnez un ou plusieurs th&egrave;mes ci-dessous.';
$lang['xs_import_tpl_filename'] = 'Nom du fichier:';
$lang['xs_import_tpl_tplname'] = 'Nom du template:';
$lang['xs_import_tpl_comment2'] = 'Commentaire:';
$lang['xs_import_select_styles'] = 'Selectionner le(s) th&egrave;me(s) &agrave; installer:';
$lang['xs_import_install_def_lc'] = 'mettre comme th&egrave;me par d&eacute;faut du forum';
$lang['xs_import_install_style'] = 'Installer le th&egrave;me:';
$lang['xs_import'] = 'Importer';

$lang['xs_import_list_contents'] = 'Contenus du fichier: ';
$lang['xs_import_list_filename'] = 'Nom du fichier: ';
$lang['xs_import_list_template'] = 'Template: ';
$lang['xs_import_list_comment'] = 'Commentaire: ';
$lang['xs_import_list_styles'] = 'Th&egrave;me(s): ';
$lang['xs_import_list_files'] = 'Fichiers ({NUM}):';
$lang['xs_import_download_lc'] = 'T&eacute;l&eacute;charger le fichier';
$lang['xs_import_view_lc'] = 'Voir le fichier';
$lang['xs_import_file_size'] = '({NUM} octets)';

$lang['xs_import_nogzip'] = 'Cette fonction requiert la compression gzip, et apparement celle-ci n\'est pas support&eacute;e sur ce serveur.';
$lang['xs_import_nowrite_cache'] = 'Impossible d\'&eacute;crire dans le cache. Cette fonction requiert que le cache doit &ecirc;tre inscriptible. V&eacute;rifiez la configuration du MOD.<br /><br /><a href="{URL1}">Cliquer ici</a> pour rendre le cache inscriptible.<br /><br /><a href="{URL2}">Cliquer ici</a>pour revenir &agrave; la page d\'importation.';

$lang['xs_import_download_warning'] = 'Ceci vous am&egrave;nera sur un site web externe où vous pourrez rapidement t&eacute;l&eacute;charger des th&egrave;mes avec simplement quelques clics en utilisant le syst&egrave;me d\'importation du MOD eXtreme Styles.';

$lang['xs_clone_style'] = 'Dupliquer le th&egrave;me';
$lang['xs_clone_style_explain'] = 'Ceci vous permet de rapidement de dupliquer un th&egrave;me ou bien un template entier.<br /><br />Attention : Si vous copiez un template, veillez &agrave; ce que l\'auteur original du template vous autorise &agrave; le faire (sauf pour subSilver - vous pouvez faire ce que vous souhaitez avec subSilver). Normalement les auteurs autorisent que leurs th&egrave;mes soient modifi&eacute;s, mais les th&egrave;mes modifi&eacute;s ne doivent &ecirc;tre distribu&eacute;s.';
$lang['xs_clone_style_explain2'] = 'Ceci vous permet de cr&eacute;er un nouveau th&egrave;mes pour un template. Ceci ne copiera aucun fichier - ceci ajoutera une nouvelle entr&eacute;e dans la base de donn&eacute;es pour le nouveau th&egrave;me. L\'ancien et le nouveau th&egrave;me partageront le m&ecirc;me template.';
$lang['xs_clone_style_explain3'] = 'Entrez le nom pour le nouveau th&egrave;me que vous allez cr&eacute;er et cliquez sur le bouton "Dupliquer".';
$lang['xs_clone_style_explain4'] = 'Ceci vous permet de dupliquer un template. Vous pouvez &eacute;galement copier tous les th&egrave;mes associ&eacute;s &agrave; ce template. Plus tard, vous pourrez &eacute;diter les fichiers *.tpl, le nouveau template et l\'ancien template ne seront pas affect&eacute;s.';

$lang['xs_clone_style_lc'] = 'Dupliquer le th&egrave;me';
$lang['xs_clone_style2'] = 'Dupliquer le th&egrave;me "{STYLE}":';
$lang['xs_clone_style3'] = 'Dupliquer le template "{STYLE}"';
$lang['xs_clone_newdir_name'] = 'Nom du nouveau template (r&eacute;pertoire):';
$lang['xs_clone_select'] = 'S&eacute;lectionner le(s) th&egrave;me(s) &agrave; dupliquer:';
$lang['xs_clone_select_explain'] = 'Vous devez choisir au moins un th&egrave;me.';
$lang['xs_clone_newname'] = 'Nouveau nom du th&egrave;me:';


/*
* install/uninstall
*/
$lang['xs_install_styles_explain2'] = 'Ceci est la liste des th&egrave;mes envoy&eacute;s sur votre forum, mais qui ne sont pas install&eacute;s. Cliquer sur le lien "installer" pour le th&egrave;me que vous souhaitez installer, ou bien s&eacute;lectionner plusieurs th&egrave;mes puis cliquer sur le bouton d\'envoi.';
$lang['xs_uninstall_styles_explain2'] = 'Ceci est la liste des th&egrave;mes install&eacute;s sur votre forum. Cliquer sur le lien "D&eacute;sinstaller" pour supprimer certains th&egrave;mes de ce forum. La d&eacute;sinstallation d\'un th&egrave;me utilis&eacute; par des membres, modifie le th&egrave;me de ces derniers, par le th&egrave;me par d&eacute;faut du forum. Aussi, supprimer un th&egrave;me supprimera automatiquement le cache pour ce th&egrave;me.';

$lang['xs_install'] = 'Installer';
$lang['xs_install_lc'] = 'Installer';
$lang['xs_uninstall'] = 'D&eacute;sinstaller';
$lang['xs_remove_files'] = 'Supprimer les fichiers';
$lang['xs_style_removed'] = 'Th&egrave;me supprim&eacute;.';
$lang['xs_uninstall_lc'] = 'D&eacute;sinstaller';
$lang['xs_uninstall2_lc'] = 'D&eacute;sinstaller et supprimer les fichiers';

$lang['xs_install_back'] = '<a href="{URL}">Cliquer ici</a> pour revenir &agrave; l\'installation des th&egrave;mes.';
$lang['xs_uninstall_back'] = '<a href="{URL}">Cliquer ici</a> pour revenir &agrave; la d&eacute;sinstallation des th&egrave;mes.';
$lang['xs_goto_default'] = '<a href="{URL}">Cliquer ici</a> pour changer le th&egrave;me par d&eacute;faut.';

$lang['xs_install_installed'] = 'Th&egrave;me(s) install&eacute;(s).';
$lang['xs_install_error'] = 'Erreur lors de l\'installation du th&egrave;me.';
$lang['xs_install_none'] = 'Il n\'y a pas de nouveaux th&egrave;mes &agrave; installer. Tous les th&egrave;mes disponibles sont d&eacute;j&agrave; install&eacute;s.';

$lang['xs_uninstall_default'] = 'Vous ne pouvez pas supprimer le th&egrave;me par d&eacute;faut.Pour changer le th&egrave;me par d&eacute;faut <a href="{URL}">cliquer ici</a>.';

/*
* export theme_info.cfg
*/
$lang['xs_export_styles_data_explain2'] = 'Ceci sauvegarde les donn&eacute;es du th&egrave;me dans theme_info.cfg. Ceci peut &ecirc;tre utilis&eacute; pour sauvegarder les informations de la base de donn&eacute;es avant de transf&eacute;rer les th&egrave;mes d\'un forum &agrave; un autre.<br /><br />Note : Si vous utilisez le syst&egrave;me d\'importation du MOD eXtreme Styles pour transf&eacute;rer un th&egrave;me d\'un forum &agrave; un autre, vous n\'avez pas besoin de sauvegarder theme_info.cfg - ceci est effectu&eacute; automatiquement par le syst&egrave;me d\'exportation des th&egrave;mes.';
$lang['xs_export_styles_data_explain3'] = 'S&eacute;lectionner les th&egrave;mes &agrave; exporter.';

$lang['xs_export_data_back'] = '<a href="{URL}">Cliquer ici</a> pour revenir &agrave; la page d\'exportation des donn&eacute;es.';
$lang['xs_export_style_data_lc'] = 'Exporter les donn&eacute;es du th&egrave;me';

$lang['xs_export_data_saved'] = 'Donn&eacute;es export&eacute;es.';

/*
* edit templates (file manager)
*/
$lang['xs_edit_template_comment1'] = 'Ceci vous permet d\'&eacute;diter les templates. L\'explorateur vous montre uniquement les fichiers &eacute;ditables.';
$lang['xs_edit_template_comment2'] = 'Ceci vous permet d\'&eacute;diter les templates.';
$lang['xs_edit_file_saved'] = 'Fichier sauvegard&eacute;.';
$lang['xs_edit_not_found'] = 'Fichier non trouv&eacute;.';
$lang['xs_edittpl_back_dir'] = '<a href="{URL}">Cliquer ici</a> pour retourner &agrave; la gestion des fichiers.';

$lang['xs_fileman_browser'] = 'Explorateur de fichiers';
$lang['xs_fileman_directory'] = 'R&eacute;pertoire :';
$lang['xs_fileman_dircount'] = 'R&eacute;pertoires ({COUNT}):';
$lang['xs_fileman_filter'] = 'Filtre';
$lang['xs_fileman_filter_ext'] = 'Montrer uniquement les fichiers avec extension :';
$lang['xs_fileman_filter_content'] = 'Montrer uniquement les fichiers contenant :';
$lang['xs_fileman_filter_clear'] = 'Vider le filtre';
$lang['xs_fileman_filename'] = 'Nom du fichier';
$lang['xs_fileman_filesize'] = 'Taille';
$lang['xs_fileman_filetime'] = 'Modification';
$lang['xs_fileman_options'] = 'Options';
$lang['xs_fileman_time_today'] = '(aujourd\'hui)';
$lang['xs_fileman_edit_lc'] = 'Editer';

$lang['xs_fileedit_search_nomatch'] = 'Aucune correspondance trouv&eacute;e';
$lang['xs_fileedit_search_match1'] = 'Remplacer 1 correspondance';
$lang['xs_fileedit_search_matches'] = "Remplacer ' + compter + ' correspondances";
$lang['xs_fileedit_noundo'] = 'Il n\'y a rien &agrave; annuler';
$lang['xs_fileedit_undo_complete'] = 'Ancien contenu restaur&eacute;';
$lang['xs_fileedit_edit_name'] = 'Editer le fichier:';
$lang['xs_fileedit_location'] = 'Localisation:';
$lang['xs_fileedit_reload_lc'] = 'recharger le fichier';
$lang['xs_fileedit_download_lc'] = 't&eacute;l&eacute;charger le fichier';
$lang['xs_fileedit_trim'] = 'Automatiquement supprimer les espace en d&eacute;but et fin de fichier.';
$lang['xs_fileedit_functions'] = 'Editer les fonctions';
$lang['xs_fileedit_replace1'] = 'Remplacer ';
$lang['xs_fileedit_replace2'] = ' par ';
$lang['xs_fileedit_replace_first_lc'] = 'Remplacer la premi&egrave;re correspondance';
$lang['xs_fileedit_replace_all_lc'] = 'Remplacer toutes les correspondances';
$lang['xs_fileedit_replace_undo_lc'] = 'Annuler le remplacement';
$lang['xs_fileedit_backups'] = 'Sauvegardes';
$lang['xs_fileedit_backups_save_lc'] = 'Enregistrer la sauvegarde';
$lang['xs_fileedit_backups_show_lc'] = 'Montrer le contenu';
$lang['xs_fileedit_backups_restore_lc'] = 'Restaurer';
$lang['xs_fileedit_backups_download_lc'] = 'T&eacute;l&eacute;charger';
$lang['xs_fileedit_backups_delete_lc'] = 'Supprimer';
$lang['xs_fileedit_upload'] = 'Envoyer';
$lang['xs_fileedit_upload_file'] = 'Envoyer le fichier:';

/*
* edit styles data (theme_info)
*/
$lang['xs_data_head_stylesheet'] = 'Feuille de style CSS';
$lang['xs_data_body_background'] = 'Image de fond';
$lang['xs_data_body_bgcolor'] = 'Couleur de fond';
$lang['xs_data_style_name'] = 'Nom du th&egrave;me';
$lang['xs_data_body_link'] = 'Couleur du lien';
$lang['xs_data_body_text'] = 'Couleur du texte';
$lang['xs_data_body_vlink'] = 'Couleur du lien visit&eacute;';
$lang['xs_data_body_alink'] = 'Couleur du lien actif';
$lang['xs_data_body_hlink'] = 'Couleur du lien survol&eacute;';
$lang['xs_data_tr_color'] = 'Couleur de la rang&eacute;e du tableau %s';
$lang['xs_data_tr_class'] = 'Classe de la rang&eacute;e du tableau %s';
$lang['xs_data_th_color'] = 'Couleur du header du tableau %s';
$lang['xs_data_th_class'] = 'Classe du header du tableau %s';
$lang['xs_data_td_color'] = 'Couleur de la cellule du tableau %s';
$lang['xs_data_td_class'] = 'Classe de la cellule du tableau %s';
$lang['xs_data_fontface'] = 'Font Face %s';
$lang['xs_data_fontsize'] = 'Font Size %s';
$lang['xs_data_fontcolor'] = 'Font Colour %s';
$lang['xs_data_span_class'] = 'Span Classe %s';
$lang['xs_data_img_size_poll'] = 'Taille de l\'image dans un vote [px]';
$lang['xs_data_img_size_privmsg'] = 'Taille du statut des messages priv&eacute;s [px]';
$lang['xs_data_theme_public'] = 'Style Public (1 or 0)';
$lang['xs_data_unknown'] = 'Description non valable (%s)';

$lang['xs_edittpl_error_updating'] = 'Erreur en mettant &agrave; jour le th&egrave;me.';
$lang['xs_edittpl_style_updated'] = 'Th&egrave;me mis &agrave; jour.';
$lang['xs_invalid_style_id'] = 'ID du th&egrave;me invalide.';

$lang['xs_edittpl_back_edit'] = '<a href="{URL}">Cliquer ici</a> pour revenir &agrave; l\'&eacute;dition.';
$lang['xs_edittpl_back_list'] = '<a href="{URL}">Cliquer ici</a> pour revenir &agrave; la liste des th&egrave;mes.';

$lang['xs_editdata_explain'] = 'Ceci vous permet d\'&eacute;diter les donn&eacute;es de la base de donn&eacute;es pour les th&egrave;mes install&eacute;s. Certains th&egrave;mes ignorent les valeurs de la base de donn&eacute;es et utilisent les fichiers css &agrave; la place, et certains th&egrave;mes utilisent uniquement les valeurs de la base de donn&eacute;es.';
$lang['xs_editdata_var'] = 'Variable';
$lang['xs_editdata_value'] = 'Valeur';
$lang['xs_editdata_comment'] = 'Commentaire';

/*
* updates
*/

$lang['xs_updates'] = 'Mises &agrave; jours';
$lang['xs_updates_comment'] = 'Ceci v&eacute;rifie les mises &agrave; jours de certains th&egrave;mes et MODs. Ne marche qu\'avec ceux qui sont aptes &agrave; avoir des informations sur leurs mises &agrave; jours.';
$lang['xs_updates_comment2'] = 'Voici le r&eacute;sultat de la mise &agrave; jour.';
$lang['xs_update_total1'] = 'Total : {NUM} &eacute;l&eacute;ment(s)';
$lang['xs_update_info1'] = 'Cette fonctionnalit&eacute; d\'administration vous permet de v&eacute;rifier les mises &agrave; jours disponibles de phpBB, de certains MODs et de certains th&egrave;mes install&eacute;s sur votre forum. Si des mises &agrave; jours sont disponibles, il vous sera indiqu&eacute; un lien où vous pourrez t&eacute;l&eacute;charger le fichier de mise &agrave; jour.<br /><br />Cette fonction n&eacute;cessite les ports (sockets) pour &ecirc;tre activ&eacute;e. Le plupart des h&eacute;bergements gratuits ne permettent pas cette fonctionnalit&eacute;, ainsi si ce forum est h&eacute;berg&eacute; par un h&eacute;bergeur gratuit (comme Lycos Multimania) vous ne pouvez pas utiliser cette fonction de mise &agrave; jour, mais si ce forum est sur un h&eacute;bergeur "normal" tout devrait correctement se passer.<br /><br />Quand vous cliquerez sur "continuer", le script v&eacute;rifiera tous les programmes install&eacute;s sur ce forum. Si votre site est lent cela peut prendre un peu de temps. Soyez patient et ne cliquez pas sur "stop" si le temps d\'ex&eacute;cution de votre navigateur Internet n\'est pas termin&eacute;. Si le serveur est lent ou bien que la mise &agrave; jour du site est lente alors le temps d\'ex&eacute;cution du script doit &ecirc;tre termin&eacute; - si cela arrive, vous devriez augmenter la valeur du temps d\'ex&eacute;cution.';
$lang['xs_update_name'] = 'Nom';
$lang['xs_update_type'] = 'Type';
$lang['xs_update_current_version'] = 'Votre version';
$lang['xs_update_latest_version'] = 'Derni&egrave;re version';
$lang['xs_update_downloadinfo'] = 'Lien de t&eacute;l&eacute;chargement';
$lang['xs_update_timeout'] = 'Mettre &agrave; jour le temps d\'ex&eacute;cution (secondes) :';
$lang['xs_update_continue'] = 'Continuer';


$lang['xs_update_total2'] = 'Erreurs : {NUM}';
$lang['xs_update_total3'] = 'Mises &agrave; jours disponibles : {NUM} &eacute;l&eacute;ment(s)';
$lang['xs_update_select1'] = 'S&eacute;lectionner les objets &eacute;l&eacute;ment(s) &agrave; mettre &agrave; jour';
$lang['xs_update_types'] = array(
		0 => 'Inconnu',
		1 => 'Th&egrave;me',
		2 => 'MOD',
		3 => 'phpBB'
		);
$lang['xs_update_fileinfo'] = 'Plus d\'informations';
$lang['xs_update_nothing'] = 'Rien &agrave; mettre &agrave; jour.';
$lang['xs_update_noupdate'] = 'Derni&egrave;re version utilis&eacute;e.';

$lang['xs_update_error_url'] = 'Erreur: impossible de trouver l\'url %s';
$lang['xs_update_error_noitem'] = 'Erreur: aucune information concernant la mise &agrave; jour disponible';
$lang['xs_update_error_noconnect'] = 'Erreur: impossible de se connecter au serveur';

$lang['xs_update_download'] = 'T&eacute;l&eacute;charger';
$lang['xs_update_downloadinfo2'] = 'T&eacute;l&eacute;charger/Informations';
$lang['xs_update_info'] = 'Site web';

$lang['xs_permission_denied'] = 'Permission refus&eacute;e';

$lang['xs_download_lc'] = 'T&eacute;l&eacute;charger';
$lang['xs_info_lc'] = 'Informations';

/*
* style configuration
*/
$lang['Template_Config'] = 'Configuration du template';
$lang['xs_style_configuration'] = 'Configuration du template';

?>