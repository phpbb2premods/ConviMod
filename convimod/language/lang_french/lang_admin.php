<?php

/***************************************************************************
 *                            lang_admin.php [French]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.17 2006/02/05 15:59:48 grahamje Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/* CONTRIBUTORS 
	Translation produced by Helix
	http://www.phpbb-fr.com/
*/ 

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Administration g&eacute;n&eacute;rale';
$lang['Users'] = 'Administration des utilisateurs';
$lang['Groups'] = 'Administration des groupes';
$lang['Forums'] = 'Administration des forums';
$lang['Styles'] = 'Administration des th&egrave;mes';

$lang['Configuration'] = 'Configuration';
$lang['Permissions'] = 'Permissions';
$lang['Manage'] = 'Gestion';
$lang['Disallow'] = 'Interdire un nom d\'utilisateur';
$lang['Prune'] = 'D&eacute;lester';
$lang['Mass_Email'] = 'E-mail de masse';
$lang['Ranks'] = 'Rangs';
$lang['Smilies'] = 'Smilies';
$lang['Ban_Management'] = 'Contr&ocirc;le du bannissement';
$lang['Word_Censor'] = 'Censure';
$lang['Export'] = 'Exporter';
$lang['Create_new'] = 'Cr&eacute;er';
$lang['Add_new'] = 'Ajouter';
$lang['Backup_DB'] = 'Sauvegarder la base de donn&eacute;es';
$lang['Restore_DB'] = 'Restaurer la base de donn&eacute;es';


//
// Index
//
$lang['Admin'] = 'Administration';
$lang['Not_admin'] = 'Vous n\'&ecirc;tes pas autoris&eacute; &agrave; administrer ce forum';
$lang['Welcome_phpBB'] = 'Bienvenue sur phpBB';
$lang['Admin_intro'] = 'Merci d\'avoir choisi phpBB comme solution de forum. Cet &eacute;cran vous donnera un rapide aper&ccedil;u des diverses statistiques de votre forum. Vous pouvez revenir sur cette page en cliquant sur le lien <u>Index de l\'Administration</u> dans le volet de gauche. Pour retourner &agrave; l\'index de votre forum, cliquez sur le logo phpBB dans le volet de gauche. Les autres liens du volet de gauche vous permettront de contr&ocirc;ler tous les aspects de votre forum. Chaque page contiendra les instructions n&eacute;cessaires concernant l\'utilisation des outils.';
$lang['Main_index'] = 'Index du Forum';
$lang['Forum_stats'] = 'Statistiques du Forum';
$lang['Admin_Index'] = 'Index de l\'Administration';
$lang['Preview_forum'] = 'Aper&ccedil;u du Forum';

$lang['Click_return_admin_index'] = 'Cliquez %sici%s pour revenir &agrave; l\'Index d\'Administration';

$lang['Statistic'] = 'Statistique';
$lang['Value'] = 'Valeur';
$lang['Number_posts'] = 'Nombre de messages';
$lang['Posts_per_day'] = 'Messages par jour';
$lang['Number_topics'] = 'Nombre de sujets';
$lang['Topics_per_day'] = 'Sujets par jour';
$lang['Number_users'] = 'Nombre d\'utilisateurs';
$lang['Users_per_day'] = 'Utilisateurs par jour';
$lang['Board_started'] = 'Ouverture du forum';
$lang['Avatar_dir_size'] = 'Taille du r&eacute;pertoire des Avatars';
$lang['Database_size'] = 'Taille de la base de donn&eacute;es';
$lang['Gzip_compression'] ='Compression Gzip';
$lang['Not_available'] = 'Non disponible';

$lang['ON'] = 'ON'; // This is for GZip compression
$lang['OFF'] = 'OFF';


//
// DB Utils
//
$lang['Database_Utilities'] = 'Utilitaires de la Base de donn&eacute;es';

$lang['Restore'] = 'Restaurer';
$lang['Backup'] = 'Sauvegarder';
$lang['Restore_explain'] = 'Ceci ex&eacute;cutera une restauration compl&egrave;te de toutes les tables de phpBB &agrave; partir d\'un fichier sauvegard&eacute;. Si votre serveur le supporte, vous pourrez envoyer au serveur un fichier texte compress&eacute; au format gzip et il sera automatiquement d&eacute;compress&eacute;. <B>ATTENTION</B> : Cette op&eacute;ration effacera toutes les donn&eacute;es existantes. La restauration peut prendre un certain temps &agrave; s\'effectuer, veuillez donc ne pas vous d&eacute;placer de cette page tant que l\'op&eacute;ration n\'est pas termin&eacute;e.';
$lang['Backup_explain'] = 'Ici, vous pouvez sauvegarder toutes les donn&eacute;es relatives &agrave; phpBB. Si vous avez des tables suppl&eacute;mentaires personnalis&eacute;es dans la m&ecirc;me base de donn&eacute;es que phpBB et que vous voulez les sauvegarder aussi, veuillez entrer leurs noms, s&eacute;par&eacute;s par une virgule dans la zone de texte \'Tables Suppl&eacute;mentaires\' ci-dessous. Si votre serveur le supporte, vous pourrez compresser le fichier-sauvegarde au format gzip afin de r&eacute;duire sa taille avant de le t&eacute;l&eacute;charger.';

$lang['Backup_options'] = 'Options de Sauvegarde';
$lang['Start_backup'] = 'D&eacute;marrer la sauvegarde';
$lang['Full_backup'] = 'Sauvegarde compl&egrave;te';
$lang['Structure_backup'] = 'Sauvegarde de la structure uniquement';
$lang['Data_backup'] = 'Sauvegarde des donn&eacute;es uniquement';
$lang['Additional_tables'] = 'Tables Suppl&eacute;mentaires';
$lang['Gzip_compress'] = 'Compression Gzip';
$lang['Select_file'] = 'S&eacute;lectionner un fichier';
$lang['Start_Restore'] = 'D&eacute;marrer la restauration';

$lang['Restore_success'] = 'La Base de donn&eacute;es a &eacute;t&eacute; restaur&eacute;e avec succ&egrave;s.<br /><br />Votre forum devrait revenir dans l\'&eacute;tat dans lequel il &eacute;tait lorsque la sauvegarde a &eacute;t&eacute; effectu&eacute;e.';
$lang['Backup_download'] = 'Le t&eacute;l&eacute;chargement va d&eacute;buter sous peu; veuillez patienter jusqu\'&agrave; ce qu\'il commence.';
$lang['Backups_not_supported'] = 'D&eacute;sol&eacute;, mais la sauvegarde de base de donn&eacute;es n\'est pas support&eacute;e actuellement par votre syst&egrave;me de base de donn&eacute;es.';

$lang['Restore_Error_uploading'] = 'Erreur durant l\'envoi de la sauvegarde.';
$lang['Restore_Error_filename'] = 'Probl&egrave;me de nom de fichier; veuillez essayer avec un autre fichier.';
$lang['Restore_Error_decompress'] = 'Impossible de d&eacute;compresser le fichier gzip; veuillez renvoyer une version non compress&eacute;e du fichier.';
$lang['Restore_Error_no_file'] = 'Aucun fichier n\'a &eacute;t&eacute; envoy&eacute;.';


//
// Auth pages
//
$lang['Select_a_User'] = 'S&eacute;lectionner un utilisateur';
$lang['Select_a_Group'] = 'S&eacute;lectionner un groupe';
$lang['Select_a_Forum'] = 'S&eacute;lectionner un forum';
$lang['Auth_Control_User'] = 'Contr&ocirc;le des permissions des utilisateurs';
$lang['Auth_Control_Group'] = 'Contr&ocirc;le des permissions des groupes';
$lang['Auth_Control_Forum'] = 'Contr&ocirc;le des permissions des forums';
$lang['Look_up_User'] = 'Rechercher l\'utilisateur';
$lang['Look_up_Group'] = 'Rechercher le groupe';
$lang['Look_up_Forum'] = 'Rechercher le forum';

$lang['Group_auth_explain'] = 'Ici, vous pouvez modifier les permissions et les statuts de mod&eacute;rateurs assign&eacute;s &agrave; chaque groupe. N\'oubliez pas qu\'en changeant les permissions de groupe, les permissions individuelles d\'utilisateurs pourront toujours autoriser un utilisateur &agrave; entrer sur un forum, etc. Vous serez pr&eacute;venu le cas &eacute;ch&eacute;ant.';
$lang['User_auth_explain'] = 'Ici, vous pouvez modifier les permissions et les statuts de mod&eacute;rateurs assign&eacute;s &agrave; chaque utilisateur, individuellement. N\'oubliez pas qu\'en changeant les permissions individuelles d\'utilisateurs, les permissions de groupe pourront toujours autoriser un utilisateur &agrave; entrer sur un forum, etc. Vous serez pr&eacute;venu le cas &eacute;ch&eacute;ant.';
$lang['Forum_auth_explain'] = 'Ici, vous pouvez modifier les niveaux d\'acc&egrave;s de chaque forum. Vous aurez deux modes pour le faire, un mode simple, et un mode avanc&eacute;; le mode avanc&eacute; offre un plus grand contr&ocirc;le sur le fonctionnement de chaque forum. Rappelez-vous qu\'en modifiant les niveaux d\'acc&egrave;s d\'un forum, les utilisateurs du forum pourront en &ecirc;tre affect&eacute;s.';

$lang['Simple_mode'] = 'Mode Simple';
$lang['Advanced_mode'] = 'Mode Avanc&eacute;';
$lang['Moderator_status'] = 'Statut de Mod&eacute;rateur';

$lang['Allowed_Access'] = 'Acc&egrave;s Autoris&eacute;';
$lang['Disallowed_Access'] = 'Acc&egrave;s Interdit';
$lang['Is_Moderator'] = 'est mod&eacute;rateur';
$lang['Not_Moderator'] = 'n\'est pas mod&eacute;rateur';

$lang['Conflict_warning'] = 'Avertissement : Conflit des Autorisations';
$lang['Conflict_access_userauth'] = 'Cet utilisateur a toujours les droits d\'acc&egrave;s &agrave; ce forum grâce &agrave; son appartenance &agrave; un groupe. Vous pouvez modifier les permissions du groupe ou retirer cet utilisateur du groupe pour l\'emp&ecirc;cher compl&egrave;tement d\'avoir les droits d\'acc&egrave;s. L\'attribution des droits par les groupes (et les forums concern&eacute;s) sont not&eacute;s ci-dessous.';
$lang['Conflict_mod_userauth'] = 'Cet utilisateur a toujours les droits de mod&eacute;ration &agrave; ce forum grâce &agrave; son appartenance &agrave; un groupe. Vous pouvez modifier les permissions du groupe ou retirer cet utilisateur du groupe pour l\'emp&ecirc;cher compl&egrave;tement d\'avoir les droits de mod&eacute;ration. L\'attribution des droits par les groupes (et les forums concern&eacute;s) sont not&eacute;s ci-dessous.';

$lang['Conflict_access_groupauth'] = 'L\'utilisateur suivant (ou les utilisateurs) a toujours les droits d\'acc&egrave;s &agrave; ce forum grâce &agrave; ses permissions d\'utilisateur. Vous pouvez modifier les permissions d\'utilisateur pour l\'emp&ecirc;cher compl&egrave;tement d\'avoir les droits d\'acc&egrave;s. L\'attribution des droits par les permissions d\'utilisateur (et les forums concern&eacute;s) sont not&eacute;s ci-dessous.';
$lang['Conflict_mod_groupauth'] = 'L\'utilisateur suivant (ou les utilisateurs) a toujours les droits de mod&eacute;ration &agrave; ce forum grâce &agrave; ses permissions d\'utilisateur. Vous pouvez modifier les permissions d\'utilisateur pour l\'emp&ecirc;cher compl&egrave;tement d\'avoir les droits de mod&eacute;ration. L\'attribution des droits par les permissions d\'utilisateur (et les forums concern&eacute;s) sont not&eacute;s ci-dessous.';

$lang['Public'] = 'Public';
$lang['Private'] = 'Priv&eacute;';
$lang['Registered'] = 'Enregistr&eacute;';
$lang['Administrators'] = 'Administrateurs';
$lang['Hidden'] = 'Invisible';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'TOUS';
$lang['Forum_REG'] = 'MEMBRES';
$lang['Forum_PRIVATE'] = 'PRIVE';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Voir';
$lang['Read'] = 'Lire';
$lang['Post'] = 'Poster';
$lang['Reply'] = 'R&eacute;pondre';
$lang['Edit'] = 'Editer';
$lang['Delete'] = 'Supprimer';
$lang['Sticky'] = 'Post-it';
$lang['Announce'] = 'Annoncer';
$lang['Vote'] = 'Voter';
$lang['Pollcreate'] = 'Cr&eacute;er un sondage';

$lang['Permissions'] = 'Permissions';
$lang['Simple_Permission'] = 'Permission simple';

$lang['User_Level'] = 'Niveau de l\'utilisateur';
$lang['Auth_User'] = 'Utilisateur';
$lang['Auth_Admin'] = 'Administrateur';
$lang['Group_memberships'] = 'Effectifs des groupes d\'utilisateurs';
$lang['Usergroup_members'] = 'Ce groupe est compos&eacute; des membres suivants';

$lang['Forum_auth_updated'] = 'Permissions du forum mises &agrave; jour';
$lang['User_auth_updated'] = 'Permissions de l\'utilisateur mises &agrave; jour';
$lang['Group_auth_updated'] = 'Permissions du groupe mises &agrave; jour';

$lang['Auth_updated'] = 'Les permissions ont &eacute;t&eacute; mises &agrave; jour';
$lang['Click_return_userauth'] = 'Cliquez %sici%s pour revenir aux permissions d\'utilisateurs';
$lang['Click_return_groupauth'] = 'Cliquez %sici%s pour revenir aux permissions de groupes';
$lang['Click_return_forumauth'] = 'Cliquez %sici%s pour revenir aux permissions des forums';


//
// Banning
//
$lang['Ban_control'] = 'Contr&ocirc;le du Bannissement';
$lang['Ban_explain'] = 'Ici, vous pouvez contr&ocirc;ler les bannissements des utilisateurs. Vous pouvez accomplir cela en bannissant soit un utilisateur sp&eacute;cifique, soit un intervalle d\'adresses IP ou un nom de serveur. Ces m&eacute;thodes emp&ecirc;cheront un utilisateur d\'atteindre votre forum. Pour emp&ecirc;cher un utilisateur de s\'enregistrer sous un nom d\'utilisateur diff&eacute;rent, vous pouvez &eacute;galement bannir une adresse e-mail sp&eacute;cifique. Veuillez noter que bannir uniquement l\'adresse e-mail n\'emp&ecirc;chera pas l\'utilisateur concern&eacute; de se connecter ou poster sur votre forum; vous devrez utiliser l\'une des deux m&eacute;thodes cit&eacute;es ci-dessus.';
$lang['Ban_explain_warn'] = 'Veuillez noter qu\'entrer un intervalle d\'adresses IP aura pour r&eacute;sultat de prendre en compte toutes les adresses entre l\'IP de d&eacute;part et l\'IP de fin dans la liste de bannissement. Des essais seront effectu&eacute;s afin de r&eacute;duire le nombre d\'adresses IP ajout&eacute;es &agrave; la base de donn&eacute;es en introduisant des jokers automatiquement aux endroits appropri&eacute;s. Si vous devez r&eacute;ellement entrer un intervalle, essayez de le garder r&eacute;duit ou au mieux, fixez des adresses sp&eacute;cifiques.';

$lang['Select_username'] = 'S&eacute;lectionner un Nom d\'utilisateur';
$lang['Select_ip'] = 'S&eacute;lectionner une adresse IP';
$lang['Select_email'] = 'S&eacute;lectionner une adresse e-mail';

$lang['Ban_username'] = 'Bannir un ou plusieurs utilisateurs sp&eacute;cifiques';
$lang['Ban_username_explain'] = 'Vous pouvez bannir plusieurs utilisateurs d\'une fois en utilisant la combinaison appropri&eacute;e de souris et clavier pour votre ordinateur et navigateur internet';

$lang['Ban_IP'] = 'Bannir une ou plusieurs adresses IP ou noms de serveurs';
$lang['IP_hostname'] = 'Adresses IP ou noms de serveurs';
$lang['Ban_IP_explain'] = 'Pour sp&eacute;cifier plusieurs IP ou noms de serveurs diff&eacute;rents, s&eacute;parez-les par des virgules. Pour sp&eacute;cifier un intervalle d\'adresses IP, s&eacute;parez le d&eacute;but et la fin avec un trait d\'union (-); pour sp&eacute;cifier un joker, utilisez une &eacute;toile (*)';

$lang['Ban_email'] = 'Bannir une ou plusieurs adresses e-mail';
$lang['Ban_email_explain'] = 'Pour sp&eacute;cifier plus d\'une adresse e-mail, s&eacute;parez-les par des virgules. Pour sp&eacute;cifier un joker pour le nom d\'utilisateur, utilisez * ; par exemple *@hotmail.com';

$lang['Unban_username'] = 'D&eacute;bannir un ou plusieurs utilisateurs sp&eacute;cifiques';
$lang['Unban_username_explain'] = 'Vous pouvez d&eacute;bannir plusieurs utilisateurs en une fois en utilisant la combinaison appropri&eacute;e de souris et clavier pour votre ordinateur et navigateur internet';

$lang['Unban_IP'] = 'D&eacute;bannir une ou plusieurs adresses IP';
$lang['Unban_IP_explain'] = 'Vous pouvez d&eacute;bannir plusieurs adresses IP en une fois en utilisant la combinaison appropri&eacute;e de souris et clavier pour votre ordinateur et navigateur internet';

$lang['Unban_email'] = 'D&eacute;bannir une ou plusieurs adresses e-mail';
$lang['Unban_email_explain'] = 'Vous pouvez d&eacute;bannir plusieurs adresses e-mail en une fois en utilisant la combinaison appropri&eacute;e de souris et clavier pour votre ordinateur et navigateur internet';

$lang['No_banned_users'] = 'Aucun nom d\'utilisateur banni';
$lang['No_banned_ip'] = 'Aucune adresse IP bannie'; 
$lang['No_banned_email'] = 'Aucune adresse e-mail bannie';

$lang['Ban_update_sucessful'] = 'La liste de bannissement a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s';
$lang['Click_return_banadmin'] = 'Cliquez %sici%s pour revenir au Contr&ocirc;le du Bannissement';


//
// Configuration
//
$lang['General_Config'] = 'Configuration G&eacute;n&eacute;rale';
$lang['Config_explain'] = 'Le formulaire ci-dessous vous permettra de personnaliser toutes les options g&eacute;n&eacute;rales du forum. Pour les utilisateurs et les forums, utilisez les liens relatifs sur le volet de gauche.';

$lang['Click_return_config'] = 'Cliquez %sici%s pour revenir &agrave; configuration g&eacute;n&eacute;rale';

$lang['General_settings'] = 'Options g&eacute;n&eacute;rales du Forum';
$lang['Server_name'] = 'Nom de domaine';
$lang['Server_name_explain'] = 'Le nom de domaine &agrave; partir duquel ce forum fonctionne';
$lang['Script_path'] = 'Chemin du script';
$lang['Script_path_explain'] = 'Le chemin relatif de phpBB2 par rapport au nom de domaine';
$lang['Server_port'] = 'Port du serveur';
$lang['Server_port_explain'] = 'Le port utilis&eacute; par votre serveur est habituellement le 80. Modifier uniquement si diff&eacute;rent';
$lang['Site_name'] = 'Nom du site';
$lang['Site_desc'] = 'Description du site';
$lang['Board_disable'] = 'D&eacute;sactiver le forum';
$lang['Board_disable_explain'] = 'Ceci rendra le forum indisponible aux utilisateurs. Toutefois, les administrateurs auront toujours acc&egrave;s au Panneau d\'Administration m&ecirc;me si le forum est d&eacute;sactiv&eacute;.';
$lang['Acct_activation'] = 'Activation du compte';
$lang['Acc_None'] = 'Aucune'; // These three entries are the type of activation
$lang['Acc_User'] = 'Utilisateur';
$lang['Acc_Admin'] = 'Administrateur';

$lang['Abilities_settings'] = 'Options de Base de l\'Utilisateur et du Forum';
$lang['Max_poll_options'] = 'Nombre maximal d\'options pour les sondages';
$lang['Flood_Interval'] = 'Intervalle de flood';
$lang['Flood_Interval_explain'] = 'Nombre de secondes durant lequel un utilisateur doit patienter avant de pouvoir reposter.';
$lang['Board_email_form'] = 'Messagerie e-mail via le forum';
$lang['Board_email_form_explain'] = 'Les utilisateurs s\'envoient des e-mail par ce forum';
$lang['Topics_per_page'] = 'Sujets par page';
$lang['Posts_per_page'] = 'Messages par page';
$lang['Hot_threshold'] = 'Seuil de Messages pour &ecirc;tre Populaire';
$lang['Default_style'] = 'Th&egrave;me par d&eacute;faut';
$lang['Override_style'] = 'Annuler le th&egrave;me de l\'utilisateur';
$lang['Override_style_explain'] = 'Remplace le th&egrave;me de l\'utilisateur par le th&egrave;me par d&eacute;faut';
$lang['Default_language'] = 'Langue par d&eacute;faut';
$lang['Date_format'] = 'Format de la date';
$lang['System_timezone'] = 'Fuseau horaire';
$lang['Enable_gzip'] = 'Activer la compression GZip';
$lang['Enable_prune'] = 'Activer le d&eacute;lestage du Forum';
$lang['Allow_HTML'] = 'Autoriser le HTML';
$lang['Allow_BBCode'] = 'Autoriser le BBCode';
$lang['Allowed_tags'] = 'Balises HTML autoris&eacute;es';
$lang['Allowed_tags_explain'] = 'S&eacute;parez les balises avec des virgules';
$lang['Allow_smilies'] = 'Autoriser les smilies';
$lang['Smilies_path'] = 'Chemin de stockage des smilies';
$lang['Smilies_path_explain'] = 'Chemin sous votre r&eacute;pertoire phpBB, exemple : images/smiles';
$lang['Allow_sig'] = 'Autoriser les Signatures';
$lang['Max_sig_length'] = 'Longueur Maximale de la signature';
$lang['Max_sig_length_explain'] = 'Nombre maximal de caract&egrave;res dans la signature de l\'utilisateur';
$lang['Allow_name_change'] = 'Autoriser les changements de nom d\'utilisateur';

$lang['Avatar_settings'] = 'Option des avatars';
$lang['Allow_local'] = 'Activer la galerie des avatars';
$lang['Allow_remote'] = 'Activer les avatars &agrave; distance';
$lang['Allow_remote_explain'] = 'Les avatars sont stock&eacute;s sur un autre site web';
$lang['Allow_upload'] = 'Activer l\'envoi d\'avatar';
$lang['Max_filesize'] = 'Taille maximale du fichier avatar';
$lang['Max_filesize_explain'] = 'Pour les avatars envoy&eacute;s';
$lang['Max_avatar_size'] = 'Dimensions maximales de l\'avatar';
$lang['Max_avatar_size_explain'] = '(Hauteur x Largeur en pixels)';
$lang['Avatar_storage_path'] = 'Chemin de stockage des avatars';
$lang['Avatar_storage_path_explain'] = 'Chemin sous votre r&eacute;pertoire phpBB, exemple : images/avatars';
$lang['Avatar_gallery_path'] = 'Chemin de la galerie des avatars';
$lang['Avatar_gallery_path_explain'] = 'Chemin sous votre r&eacute;pertoire phpBB pour les images pr&eacute;-charg&eacute;es, exemple : images/avatars/gallery';

$lang['COPPA_settings'] = 'Options COPPA';
$lang['COPPA_fax'] = 'Num&eacute;ro de Fax COPPA';
$lang['COPPA_mail'] = 'Adresse postale de la COPPA';
$lang['COPPA_mail_explain'] = 'Ceci est l\'adresse postale où les parents enverront le formulaire d\'enregistrement COPPA';

$lang['Email_settings'] = 'Options de l\'e-mail';
$lang['Admin_email'] = 'Adresse e-mail de l\'Administrateur';
$lang['Email_sig'] = 'Signature e-mail';
$lang['Email_sig_explain'] = 'Ce texte sera attach&eacute; &agrave; tous les e-mails que le forum enverra';
$lang['Use_SMTP'] = 'Utiliser un serveur SMTP pour l\'e-mail';
$lang['Use_SMTP_explain'] = 'Dites oui si vous voulez ou devez envoyer des e-mails par un serveur sp&eacute;cifique au lieu de la fonction locale mail()';
$lang['SMTP_server'] = 'Adresse du serveur SMTP';
$lang['SMTP_username'] = 'Nom d\'utilisateur SMTP';
$lang['SMTP_username_explain'] = 'Entrez un nom d\'utilisateur pour votre serveur SMTP seulement si n&eacute;cessaire';
$lang['SMTP_password'] = 'Mot de passe SMTP';
$lang['SMTP_password_explain'] = 'Entrez un mot de passe pour votre serveur SMTP seulement si n&eacute;cessaire';

$lang['Disable_privmsg'] = 'Messagerie Priv&eacute;e';
$lang['Inbox_limits'] = 'Messages Max dans la Bo&icirc;te de r&eacute;ception';
$lang['Sentbox_limits'] = 'Messages Max dans la Bo&icirc;te des messages envoy&eacute;s';
$lang['Savebox_limits'] = 'Message Max dans la Bo&icirc;te des Archives';

$lang['Cookie_settings'] = 'Options du Cooky';
$lang['Cookie_settings_explain'] = 'Ces d&eacute;tails d&eacute;finissent la mani&egrave;re dont les cookies sont envoy&eacute;s au navigateur internet des utilisateurs. Dans la majeure partie des cas, les valeurs par d&eacute;faut devraient &ecirc;tre suffisantes. Si vous avez besoin de les modifier, faites-le avec pr&eacute;caution; des valeurs incorrectes pourraient emp&ecirc;cher les utilisateurs de se connecter.';
$lang['Cookie_domain'] = 'Domaine du cooky';
$lang['Cookie_name'] = 'Nom du cooky';
$lang['Cookie_path'] = 'Chemin du cooky';
$lang['Cookie_secure'] = 'Cooky s&eacute;curis&eacute;';
$lang['Cookie_secure_explain'] = 'Si votre serveur fonctionne via SSL, activez cette fonction; sinon, laissez-la d&eacute;sactiv&eacute;e';
$lang['Session_length'] = 'Dur&eacute;e de la session [ secondes ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Activer la confirmation visuelle';
$lang['Visual_confirm_explain'] = 'Requiert que les nouveaux utilisateurs entrent un code d&eacute;fini par une image lors de leur enregistrement.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Permettre la connexion automatique';
$lang['Allow_autologin_explain'] = 'D&eacute;termine si l\'utilisateur est autoris&eacute; &agrave; choisir d\'&ecirc;tre automatiquement connect&eacute; lors de sa visite sur le forum.';
$lang['Autologin_time'] = 'Expiration de la clef de connexion automatique';
$lang['Autologin_time_explain'] = 'Nombre de jour(s) durant le(s)quel(s) la clef de connexion automatique est valide si l\'utilisateur ne visite pas le forum. Mettre &agrave; z&eacute;ro pour d&eacute;sactiver l\'expiration.';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Intervalles de flood pour la recherche';
$lang['Search_Flood_Interval_explain'] = 'Nombre de secondes durant lequel un utilisateur doit patienter avant de pouvoir effectuer une nouvelle recherche.'; 

//
// Forum Management
//
$lang['Forum_admin'] = 'Administration des forums';
$lang['Forum_admin_explain'] = 'Depuis ce panneau de contr&ocirc;le, vous pouvez ajouter, supprimer, &eacute;diter, r&eacute;ordonner et resynchroniser vos cat&eacute;gories et forums.';
$lang['Edit_forum'] = 'Editer un forum';
$lang['Create_forum'] = 'Cr&eacute;er un nouveau forum';
$lang['Create_category'] = 'Cr&eacute;er une nouvelle cat&eacute;gorie';
$lang['Remove'] = 'Enlever';
$lang['Action'] = 'Action';
$lang['Update_order'] = 'Mettre &agrave; jour l\'ordre';
$lang['Config_updated'] = 'Configuration du forum mise &agrave; jour avec succ&egrave;s';
$lang['Edit'] = 'Editer';
$lang['Delete'] = 'Supprimer';
$lang['Move_up'] = 'Monter';
$lang['Move_down'] = 'Descendre';
$lang['Resync'] = 'Resynchroniser';
$lang['No_mode'] = 'Aucun mode n\'a &eacute;t&eacute; d&eacute;fini';
$lang['Forum_edit_delete_explain'] = 'Le formulaire ci-dessous vous permettra de personnaliser toutes les options g&eacute;n&eacute;rales du forum. Pour les configurations Utilisateurs et Forums, utilisez les liens relatifs dans le volet de gauche.';

$lang['Move_contents'] = 'D&eacute;placer tout le contenu vers';
$lang['Forum_delete'] = 'Supprimer un Forum';
$lang['Forum_delete_explain'] = 'Le formulaire ci-dessous vous permettra de supprimer un forum (ou une cat&eacute;gorie) et d&eacute;cider où vous voulez mettre les messages (ou les forums) qu\'il contenait.';

$lang['Status_locked'] = 'Verrouill&eacute;';
$lang['Status_unlocked'] = 'D&eacute;verrouill&eacute;';
$lang['Forum_settings'] = 'Options g&eacute;n&eacute;rales des forums';
$lang['Forum_name'] = 'Nom du forum';
$lang['Forum_desc'] = 'Description';
$lang['Forum_status'] = 'Statut du forum';
$lang['Forum_pruning'] = 'Auto-d&eacute;lestage';

$lang['prune_freq'] = 'V&eacute;rifier l\'âge des sujets tous les ';
$lang['prune_days'] = 'Retirer les sujets n\'ayant pas eu de r&eacute;ponses depuis';
$lang['Set_prune_data'] = 'Vous avez activ&eacute; l\'auto-d&eacute;lestage pour ce forum mais n\'avez pas d&eacute;fini une fr&eacute;quence ou un nombre de jours &agrave; d&eacute;lester. Veuillez revenir en arri&egrave;re et le faire';

$lang['Move_and_Delete'] = 'D&eacute;placer et Supprimer';

$lang['Delete_all_posts'] = 'Supprimer tous les messages';
$lang['Nowhere_to_move'] = 'Nul part où d&eacute;placer';

$lang['Edit_Category'] = 'Editer une cat&eacute;gorie';
$lang['Edit_Category_explain'] = 'Utilisez ce formulaire pour modifer le nom d\'une cat&eacute;gorie.';

$lang['Forums_updated'] = 'Informations du forum et de la cat&eacute;gorie mises &agrave; jour avec succ&egrave;s';

$lang['Must_delete_forums'] = 'Vous devez supprimer tous vos forums avant de pouvoir supprimer cette cat&eacute;gorie';

$lang['Click_return_forumadmin'] = 'Cliquez %sici%s pour revenir &agrave; l\'administration des forums';


//
// Smiley Management
//
$lang['smiley_title'] = 'Utilitaire d\'&eacute;dition des smilies';
$lang['smile_desc'] = 'Depuis cette page vous pouvez ajouter, retirer et &eacute;diter les &eacute;motic&ocirc;nes ou smilies que les utilisateurs utilisent dans leurs messages et messages priv&eacute;s.';

$lang['smiley_config'] = 'Configuration des smilies';
$lang['smiley_code'] = 'Code du smiley';
$lang['smiley_url'] = 'Fichier image du smiley';
$lang['smiley_emot'] = 'Emotion du smiley';
$lang['smile_add'] = 'Ajouter un nouveau smiley';
$lang['Smile'] = 'Smile';
$lang['Emotion'] = 'Emotion';

$lang['Select_pak'] = 'Selectionner le fichier pack (.pak)';
$lang['replace_existing'] = 'Remplacer les smilies existants';
$lang['keep_existing'] = 'Conserver les smilies existants';
$lang['smiley_import_inst'] = 'Vous devez d&eacute;zipper le pack de smilies et envoyer tous les fichiers dans le r&eacute;pertoire de smilies appropri&eacute; pour l\'installation. Ensuite, s&eacute;lectionnez les informations correctes dans ce formulaire pour importer le pack de smilies.';
$lang['smiley_import'] = 'Importer un pack de smilies';
$lang['choose_smile_pak'] = 'Choisir un pack de smilies, fichier .pak';
$lang['import'] = 'Importer les smilies';
$lang['smile_conflicts'] = 'Que doit-il &ecirc;tre fait en cas de conflits ?';
$lang['del_existing_smileys'] = 'Supprimer les smilies existants avant l\'importation';
$lang['import_smile_pack'] = 'Importer un pack de smilies';
$lang['export_smile_pack'] = 'Cr&eacute;er un pack de smilies';
$lang['export_smiles'] = 'Pour cr&eacute;er un pack de smilies &agrave; partir de vos smilies actuellement install&eacute;s, cliquez %sici%s pour t&eacute;l&eacute;charger le fichier .pak de smilies. Nommez ce fichier de fa&ccedil;on appropri&eacute;e afin de vous assurer de conserver l\'extension de fichier .pak. Ensuite, cr&eacute;ez un fichier zip contenant toutes les images de vos smilies plus le fichier de configuration .pak.';

$lang['smiley_add_success'] = 'Le smiley a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s';
$lang['smiley_edit_success'] = 'Le smiley a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s';
$lang['smiley_import_success'] = 'Le pack de smilies a &eacute;t&eacute; import&eacute; avec succ&egrave;s !';
$lang['smiley_del_success'] = 'Le smiley a &eacute;t&eacute; retir&eacute; avec succ&egrave;s';
$lang['Click_return_smileadmin'] = 'Cliquez %sici%s pour revenir &agrave; l\'Administration des Smilies';

$lang['Confirm_delete_smiley'] = '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce smiley ?';

//
// User Management
//
$lang['User_admin'] = 'Administration des Utilisateurs';
$lang['User_admin_explain'] = 'Ici, vous pouvez changer les informations des utilisateurs et certaines options sp&eacute;cifiques. Pour modifier les permissions des utilisateurs, veuillez utiliser le syst&egrave;me de permissions d\'utilisateurs et de groupes.';

$lang['Look_up_user'] = 'Rechercher l\'utilisateur';

$lang['Admin_user_fail'] = 'Impossible de mettre &agrave; jour le profil de l\'utilisateur.';
$lang['Admin_user_updated'] = 'Le profil de l\'utilisateur a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s.';
$lang['Click_return_useradmin'] = 'Cliquez %sici%s pour revenir &agrave; l\'Administration des Utilisateurs';

$lang['User_delete'] = 'Supprimer cet utilisateur';
$lang['User_delete_explain'] = 'Cliquez ici pour supprimer cet utilisateur; ceci ne peut pas &ecirc;tre r&eacute;tabli.';
$lang['User_deleted'] = 'L\'utilisateur a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s.';

$lang['User_status'] = 'L\'utilisateur est actif';
$lang['User_allowpm'] = 'Peut envoyer des Messages Priv&eacute;s';
$lang['User_allowavatar'] = 'Peut afficher un avatar';

$lang['Admin_avatar_explain'] = 'Ici vous pouvez voir et supprimer l\'avatar actuel de l\'utilisateur.';

$lang['User_special'] = 'Champs sp&eacute;ciaux pour administrateurs uniquement';
$lang['User_special_explain'] = 'Ces champs ne peuvent pas &ecirc;tre modifi&eacute;s par l\'utilisateur. Ici, vous pouvez d&eacute;finir leur statut et d\'autres options non accessibles aux utilisateurs.';


//
// Group Management
//
$lang['Group_administration'] = 'Administration des Groupes';
$lang['Group_admin_explain'] = 'Depuis ce panneau, vous pouvez administrer tous vos groupes d\'utilisateurs. Vous pouvez supprimer, cr&eacute;er et &eacute;diter les groupes existants. Vous pouvez choisir des mod&eacute;rateurs, alterner le statut ouvert/ferm&eacute; d\'un groupe et d&eacute;finir le nom et la description d\'un groupe';
$lang['Error_updating_groups'] = 'Il y a eu une erreur durant la mise &agrave; jour des groupes';
$lang['Updated_group'] = 'Le groupe a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s';
$lang['Added_new_group'] = 'Le nouveau groupe a &eacute;t&eacute; cr&eacute;&eacute; avec succ&egrave;s';
$lang['Deleted_group'] = 'Le groupe a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s';
$lang['New_group'] = 'Cr&eacute;er un nouveau groupe';
$lang['Edit_group'] = 'Editer un groupe';
$lang['group_name'] = 'Nom du groupe';
$lang['group_description'] = 'Description du groupe';
$lang['group_moderator'] = 'Mod&eacute;rateur du groupe';
$lang['group_status'] = 'Statut du groupe';
$lang['group_open'] = 'Groupe ouvert';
$lang['group_closed'] = 'Groupe ferm&eacute;';
$lang['group_hidden'] = 'Groupe invisible';
$lang['group_delete'] = 'Supprimer un groupe';
$lang['group_delete_check'] = 'Supprimer ce groupe';
$lang['submit_group_changes'] = 'Envoyer les modifications';
$lang['reset_group_changes'] = 'Remettre &agrave; zero';
$lang['No_group_name'] = 'Vous devez sp&eacute;cifier un nom pour ce groupe';
$lang['No_group_moderator'] = 'Vous devez sp&eacute;cifier un mod&eacute;rateur pour ce groupe';
$lang['No_group_mode'] = 'Vous devez sp&eacute;cifier un mode pour ce groupe, ouvert ou ferm&eacute;';
$lang['No_group_action'] = 'Aucune action n\'a &eacute;t&eacute; sp&eacute;cifi&eacute;e';
$lang['delete_group_moderator'] = 'Supprimer l\'ancien mod&eacute;rateur du groupe ?';
$lang['delete_moderator_explain'] = 'Si vous changez le mod&eacute;rateur du groupe, cochez cette case pour enlever l\'ancien mod&eacute;rateur de ce groupe. Sinon, vous pouvez ne pas la cocher, et l\'utilisateur deviendra un membre r&eacute;gulier de ce groupe.';
$lang['Click_return_groupsadmin'] = 'Cliquez %sici%s pour revenir &agrave; l\'Administration des Groupes.';
$lang['Select_group'] = 'S&eacute;lectionner un groupe';
$lang['Look_up_group'] = 'Rechercher le groupe';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'D&eacute;lester un forum';
$lang['Forum_Prune_explain'] = 'Ceci supprimera tous les sujets n\'ayant pas eu de r&eacute;ponses depuis le nombre de jours que vous aurez choisi. Si vous n\'entrez pas de nombre, tous les sujets seront supprim&eacute;s. Par contre cela ne supprimera ni les sujets dans lesquels un sondage est encore en cours, ni les annonces. Vous devrez supprimer ces sujets manuellement.';
$lang['Do_Prune'] = 'Faire le d&eacute;lestage';
$lang['All_Forums'] = 'Tous les forums';
$lang['Prune_topics_not_posted'] = 'D&eacute;lester les sujets sans r&eacute;ponses depuis cette p&eacute;riode (en jours)';
$lang['Topics_pruned'] = 'Sujets d&eacute;lest&eacute;s';
$lang['Posts_pruned'] = 'Messages d&eacute;lest&eacute;s';
$lang['Prune_success'] = 'Le d&eacute;lestage des forums s\'est d&eacute;roul&eacute; avec succ&egrave;s';


//
// Word censor
//
$lang['Words_title'] = 'Censure des mots';
$lang['Words_explain'] = 'Depuis ce panneau de contr&ocirc;le, vous pouvez ajouter, &eacute;diter, et retirer les mots qui seront automatiquement censur&eacute;s sur vos forums. De plus, les gens ne seront pas autoris&eacute;s &agrave; s\'inscrire avec des noms d\'utilisateurs contenant ces mots. Les jokers (*) sont accept&eacute;s dans le champ \'Mot\', exemple : *test* concordera avec detestable, test* concordera avec testing, et *test avec detest.';
$lang['Word'] = 'Mot';
$lang['Edit_word_censor'] = 'Editer la censure du mot';
$lang['Replacement'] = 'Remplacement';
$lang['Add_new_word'] = 'Ajouter un nouveau mot';
$lang['Update_word'] = 'Mettre &agrave; jour la censure du mot';

$lang['Must_enter_word'] = 'Vous devez entrer un mot et son rempla&ccedil;ant';
$lang['No_word_selected'] = 'Aucun mot s&eacute;lectionn&eacute; pour l\'&eacute;dition';

$lang['Word_updated'] = 'Le mot censur&eacute; s&eacute;lectionn&eacute; a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s';
$lang['Word_added'] = 'Le mot censur&eacute; a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s';
$lang['Word_removed'] = 'Le mot censur&eacute; s&eacute;lectionn&eacute; a &eacute;t&eacute; retir&eacute; avec succ&egrave;s';

$lang['Click_return_wordadmin'] = 'Cliquez %sici%s pour revenir &agrave; l\'Administration de la Censure des Mots';

$lang['Confirm_delete_word'] = '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce mot censur&eacute; ?';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'Ici, vous pouvez envoyer le m&ecirc;me e-mail &agrave; tous les utilisateurs du forum ou seulement &agrave; ceux d\'un groupe donn&eacute;. Pour ce faire, un e-mail sera envoy&eacute; en copie cach&eacute;e &agrave; partir de l\'adresse e-mail d\'administration vers ses destinataires. L\'envoi massif d\'e-mail prend un certain temps; soyez patient apr&egrave;s l\'envoi et n\'interrompez pas le chargement de la page. Vous serez averti automatiquement de la fin de l\'op&eacute;ration.';
$lang['Compose'] = 'Composer';

$lang['Recipients'] = 'Destinataires';
$lang['All_users'] = 'Tous les Utilisateurs';

$lang['Email_successfull'] = 'Votre message a &eacute;t&eacute; envoy&eacute;';
$lang['Click_return_massemail'] = 'Cliquez %sici%s pour revenir au formulaire de l\'E-mail de Masse';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Administration des Rangs';
$lang['Ranks_explain'] = 'En utilisant ce formulaire vous pouvez ajouter, &eacute;diter, voir et supprimer des rangs. Vous pouvez &eacute;galement cr&eacute;er des rangs personnalis&eacute;s qui pourront &ecirc;tre assign&eacute;s &agrave; des utilisateurs sp&eacute;cifiques par l\'outil de Gestion des Utilisateurs';

$lang['Add_new_rank'] = 'Ajouter un nouveau rang';

$lang['Rank_title'] = 'Titre du Rang';
$lang['Rank_special'] = 'D&eacute;finir en tant que Rang Sp&eacute;cial';
$lang['Rank_minimum'] = 'Messages Minimums'; 
$lang['Rank_maximum'] = 'Messages Maximums';
$lang['Rank_image'] = 'Image du Rang (relatif au chemin de phpBB2)';
$lang['Rank_image_explain'] = 'Utilisez ceci pour associer une petite image avec le rang en question';

$lang['Must_select_rank'] = 'Vous devez s&eacute;lectionner un rang';
$lang['No_assigned_rank'] = 'Aucun rang sp&eacute;cial assign&eacute;';

$lang['Rank_updated'] = 'Le rang a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s';
$lang['Rank_added'] = 'Le rang a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s';
$lang['Rank_removed'] = 'Le rang a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s';
$lang['No_update_ranks'] = 'Le rang a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s; toutefois, les comptes des utilisateurs n\'ont pas &eacute;t&eacute; mis &agrave; jour. Vous devrez remettre &agrave; z&eacute;ro manuellement leur rang.';

$lang['Click_return_rankadmin'] = 'Cliquez %sici%s pour revenir &agrave; l\'Administration des Rangs';

$lang['Confirm_delete_rank'] = '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce rang ?';

//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Contr&ocirc;le des Noms d\'utilisateurs Interdits';
$lang['Disallow_explain'] = 'Ici, vous pouvez contr&ocirc;ler les noms d\'utilisateurs qui seront interdits &agrave; l\'usage. Les noms d\'utilisateurs interdits peuvent contenir un caract&egrave;re joker (*). Veuillez noter que vous ne pourrez pas interdire un nom d\'utilisateur d&eacute;j&agrave; enregistr&eacute;; vous devrez d\'abord supprimer le compte de l\'utilisateur et ensuite interdire le nom d\'utilisateur';

$lang['Delete_disallow'] = 'Supprimer';
$lang['Delete_disallow_title'] = 'Retirer un Nom d\'utilisateur Interdit';
$lang['Delete_disallow_explain'] = 'Vous pouvez retirer un nom d\'utilisateur interdit en s&eacute;lectionnant le nom d\'utilisateur depuis la liste et en cliquant sur Supprimer';

$lang['Add_disallow'] = 'Ajouter';
$lang['Add_disallow_title'] = 'Ajouter un nom d\'utilisateur interdit';
$lang['Add_disallow_explain'] = 'Vous pouvez interdire un nom d\'utilisateur en utilisant le caract&egrave;re joker *';

$lang['No_disallowed'] = 'Aucun Nom d\'utilisateur Interdit';

$lang['Disallowed_deleted'] = 'Le nom d\'utilisateur interdit a &eacute;t&eacute; retir&eacute; avec succ&egrave;s';
$lang['Disallow_successful'] = 'Le nom d\'utilisateur interdit a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s';
$lang['Disallowed_already'] = 'Le nom que vous avez entr&eacute; ne peut &ecirc;tre interdit. Soit il existe d&eacute;j&agrave; dans la liste, soit il est dans la liste des mots censur&eacute;s, ou soit il est d&eacute;j&agrave; enregistr&eacute;';

$lang['Click_return_disallowadmin'] = 'Cliquez %sici%s pour revenir &agrave; l\'Administration des Noms d\'utilisateurs Interdits';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Administration des Th&egrave;mes';
$lang['Styles_explain'] = 'En utilisant cet outil, vous pouvez ajouter, &eacute;diter, supprimer et g&eacute;rer les th&egrave;mes (mod&egrave;les de documents et th&egrave;mes) disponibles aupr&egrave;s des utilisateurs.';
$lang['Styles_addnew_explain'] = 'La liste suivante contient tous les th&egrave;mes actuellement disponibles pour le mod&egrave;le de document courant. Les &eacute;l&eacute;ments sur cette liste n\'ont pas encore &eacute;t&eacute; install&eacute;s dans la base de donn&eacute;es de phpBB. Pour installer un th&egrave;me, il suffit de cliquer sur le lien \'Installer\' &agrave; c&ocirc;t&eacute; d\'une entr&eacute;e';

$lang['Select_template'] = 'S&eacute;lectionner un Mod&egrave;le de document';

$lang['Style'] = 'Th&egrave;me';
$lang['Template'] = 'Mod&egrave;le de document';
$lang['Install'] = 'Installer';
$lang['Download'] = 'T&eacute;l&eacute;charger';

$lang['Edit_theme'] = 'Editer un Th&egrave;me';
$lang['Edit_theme_explain'] = 'Dans le formulaire ci-dessous, vous pouvez &eacute;diter les param&egrave;tres pour le th&egrave;me s&eacute;lectionn&eacute;';

$lang['Create_theme'] = 'Cr&eacute;er un Th&egrave;me';
$lang['Create_theme_explain'] = 'Utilisez le formulaire ci-dessous pour cr&eacute;er un nouveau th&egrave;me pour un mod&egrave;le de document s&eacute;lectionn&eacute;. Lorsque vous entrerez les couleurs (pour lesquelles vous devrez utiliser une notation hexad&eacute;cimale), vous ne devrez pas inclure le # initial, exemple : CCCCCC est valide, #CCCCCC ne l\'est pas';

$lang['Export_themes'] = 'Exporter des Th&egrave;mes';
$lang['Export_explain'] = 'Dans ce panneau, vous pourrez exporter les donn&eacute;es de ce th&egrave;me pour un mod&egrave;le de document s&eacute;lectionn&eacute;. S&eacute;lectionnez le mod&egrave;le de document depuis la liste ci-dessous, et le script cr&eacute;era le fichier de configuration du th&egrave;me et essaiera de le copier dans le r&eacute;pertoire s&eacute;lectionn&eacute; des mod&egrave;les de documents. S\'il ne peut pas le copier lui-m&ecirc;me, il vous proposera de le t&eacute;l&eacute;charger. Afin que le script puisse copier le fichier, vous devez donner les droits d\'&eacute;criture pour le r&eacute;pertoire sur le serveur. Pour plus d\'informations &agrave; propos de cela, allez voir le Guide de l\'utilisateur de phpBB 2.';

$lang['Theme_installed'] = 'Le th&egrave;me s&eacute;lectionn&eacute; a &eacute;t&eacute; install&eacute; avec succ&egrave;s';
$lang['Style_removed'] = 'Le th&egrave;me s&eacute;lectionn&eacute; a &eacute;t&eacute; retir&eacute; de la base de donn&eacute;es. Pour enlever compl&egrave;tement ce th&egrave;me de votre syst&egrave;me, vous devez supprimer les fichiers appropri&eacute;s dans le r&eacute;pertoire du mod&egrave;le de document.';
$lang['Theme_info_saved'] = 'Les informations du th&egrave;me pour le mod&egrave;le de document s&eacute;lectionn&eacute; ont &eacute;t&eacute; sauvegard&eacute;es. Vous devriez restreindre les permissions du fichier theme_info.cfg (et si possible dans le r&eacute;pertoire du mod&egrave;le de document s&eacute;lectionn&eacute;) &agrave; la lecture seule';
$lang['Theme_updated'] = 'Le th&egrave;me s&eacute;lectionn&eacute; a &eacute;t&eacute; mis &agrave; jour. Vous devriez exporter maintenant les nouveaux param&egrave;tres du th&egrave;me';
$lang['Theme_created'] = 'Th&egrave;me cr&eacute;&eacute;. Vous devriez exporter maintenant le th&egrave;me vers le fichier de configuration du th&egrave;me pour le conserver en lieu s&ucirc;r ou l\'utiliser ailleurs';

$lang['Confirm_delete_style'] = '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce th&egrave;me ?';

$lang['Download_theme_cfg'] = 'L\'exportateur n\'arrive pas &agrave; &eacute;crire le fichier des informations du th&egrave;me. Cliquez sur le bouton ci-dessous pour t&eacute;l&eacute;charger ce fichier avec votre navigateur internet. Une fois t&eacute;l&eacute;charg&eacute;, vous pourrez le transf&eacute;rer vers le r&eacute;pertoire contenant les mod&egrave;les de documents. Vous pourrez ensuite cr&eacute;er un pack des fichiers pour le distribuer ou l\'utiliser ailleurs si vous le d&eacute;sirez';
$lang['No_themes'] = 'Le mod&egrave;le de document que vous avez s&eacute;lectionn&eacute; n\'a pas de th&egrave;me. Pour cr&eacute;er un nouveau th&egrave;me, cliquez sur Cr&eacute;er un Nouveau Th&egrave;me sur le volet de gauche';
$lang['No_template_dir'] = 'Impossible d\'ouvrir le r&eacute;pertoire du mod&egrave;le de document. Il peut &ecirc;tre illisible par le serveur ou ne pas exister';
$lang['Cannot_remove_style'] = 'Vous ne pouvez pas enlever le th&egrave;me s&eacute;lectionn&eacute; tant qu\'il est utilis&eacute; par le forum en tant que th&egrave;me par d&eacute;faut. Veuillez changer le th&egrave;me par d&eacute;faut et r&eacute;essayer.';
$lang['Style_exists'] = 'Le nom du th&egrave;me choisi existe d&eacute;j&agrave;; veuillez revenir en arri&egrave;re et choisir un nom diff&eacute;rent.';

$lang['Click_return_styleadmin'] = 'Cliquez %sici%s pour revenir &agrave; l\'administration des th&egrave;mes';

$lang['Theme_settings'] = 'Options du th&egrave;me';
$lang['Theme_element'] = 'El&eacute;ment du th&egrave;me';
$lang['Simple_name'] = 'Nom simple';
$lang['Value'] = 'Valeur';
$lang['Save_Settings'] = 'Sauver les param&egrave;tres';

$lang['Stylesheet'] = 'Feuille de style CSS';
$lang['Stylesheet_explain'] = 'Nom du fichier pour la feuille de style CSS &agrave; utiliser pour ce th&egrave;me.';
$lang['Background_image'] = 'Image de fond';
$lang['Background_color'] = 'Couleur de fond';
$lang['Theme_name'] = 'Nom du th&egrave;me';
$lang['Link_color'] = 'Couleur du lien';
$lang['Text_color'] = 'Couleur du texte';
$lang['VLink_color'] = 'Couleur du lien Visit&eacute;';
$lang['ALink_color'] = 'Couleur du lien Actif';
$lang['HLink_color'] = 'Couleur du lien survol&eacute;';
$lang['Tr_color1'] = 'Table Rang&eacute;e Couleur 1';
$lang['Tr_color2'] = 'Table Rang&eacute;e Couleur 2';
$lang['Tr_color3'] = 'Table Rang&eacute;e Couleur 3';
$lang['Tr_class1'] = 'Table Rang&eacute;e Class 1';
$lang['Tr_class2'] = 'Table Rang&eacute;e Class 2';
$lang['Tr_class3'] = 'Table Rang&eacute;e Class 3';
$lang['Th_color1'] = 'Table En-t&ecirc;te Couleur 1';
$lang['Th_color2'] = 'Table En-t&ecirc;te Couleur 2';
$lang['Th_color3'] = 'Table En-t&ecirc;te Couleur 3';
$lang['Th_class1'] = 'Table En-t&ecirc;te Class 1';
$lang['Th_class2'] = 'Table En-t&ecirc;te Class 2';
$lang['Th_class3'] = 'Table En-t&ecirc;te Class 3';
$lang['Td_color1'] = 'Table Cellule Couleur 1';
$lang['Td_color2'] = 'Table Cellule Couleur 2';
$lang['Td_color3'] = 'Table Cellule Couleur 3';
$lang['Td_class1'] = 'Table Cellule Class 1';
$lang['Td_class2'] = 'Table Cellule Class 2';
$lang['Td_class3'] = 'Table Cellule Class 3';
$lang['fontface1'] = 'Nom de la police 1';
$lang['fontface2'] = 'Nom de la police 2';
$lang['fontface3'] = 'Nom de la police 3';
$lang['fontsize1'] = 'Taille Police 1';
$lang['fontsize2'] = 'Taille Police 2';
$lang['fontsize3'] = 'Taille Police 3';
$lang['fontcolor1'] = 'Couleur Police 1';
$lang['fontcolor2'] = 'Couleur Police 2';
$lang['fontcolor3'] = 'Couleur Police 3';
$lang['span_class1'] = 'Span Class 1';
$lang['span_class2'] = 'Span Class 2';
$lang['span_class3'] = 'Span Class 3';
$lang['img_poll_size'] = 'Taille Image Sondage [px]';
$lang['img_pm_size'] = 'Taille Statut Message Priv&eacute; [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Bienvenue &agrave; l\'installation de phpBB 2';
$lang['Initial_config'] = 'Configuration de base';
$lang['DB_config'] = 'Configuration de la base de donn&eacute;es';
$lang['Admin_config'] = 'Configuration du compte administrateur';
$lang['continue_upgrade'] = 'Une fois que vous avez t&eacute;l&eacute;charg&eacute; le fichier config.php vers votre ordinateur, vous pouvez cliquer sur le boutton \'Continuer la Mise &agrave; jour\' ci-dessous pour progresser dans le processus de mise &agrave; jour. Veuillez attendre la fin du processus de mise &agrave; jour avant d\'envoyer le fichier config.php.';
$lang['upgrade_submit'] = 'Continuer la mise &agrave; jour';

$lang['Installer_Error'] = 'Une erreur s\'est produite durant l\'installation';
$lang['Previous_Install'] = 'Une installation pr&eacute;c&eacute;dente a &eacute;t&eacute; d&eacute;tect&eacute;e';
$lang['Install_db_error'] = 'Une erreur s\'est produite en essayant de mettre &agrave; jour la base de donn&eacute;es';

$lang['Re_install'] = 'Votre installation pr&eacute;c&eacute;dente est toujours active. <br /><br />Si vous voulez r&eacute;installer phpBB 2, cliquez sur le bouton Oui ci-dessous. Vous &ecirc;tes conscient qu\'en faisant cela, vous d&eacute;truirez toutes les donn&eacute;es existantes; aucune sauvegarde ne sera faite ! Le nom d\'utilisateur de l\'administrateur et le mot de passe que vous utilisez pour vous connecter au forum sera recr&eacute;&eacute; apr&egrave;s la r&eacute;installation; rien d\'autre ne sera fait conserv&eacute;. <br /><br />R&eacute;fl&eacute;chissez bien avant d\'appuyer sur Oui !';

$lang['Inst_Step_0'] = 'Merci d\'avoir choisi phpBB 2. Afin d\'achever cette installation, veuillez remplir les d&eacute;tails demand&eacute;s ci-dessous. Veuillez noter que la base de donn&eacute;es dans laquelle vous installez devrait d&eacute;j&agrave; exister. Si vous &ecirc;tes en train d\'installer sur une base de donn&eacute;es qui utilise ODBC, MS Access par exemple, vous devez d\'abord lui cr&eacute;er un SGBD avant de continuer.';

$lang['Start_Install'] = 'D&eacute;marrer l\'installation';
$lang['Finish_Install'] = 'Finir l\'installation';

$lang['Default_lang'] = 'Langue par d&eacute;faut du Forum';
$lang['DB_Host'] = 'Nom du serveur de base de donn&eacute;es / SGBD';
$lang['DB_Name'] = 'Nom de votre base de donn&eacute;es';
$lang['DB_Username'] = 'Nom d\'utilisateur';
$lang['DB_Password'] = 'Mot de passe';
$lang['Database'] = 'Votre base de donn&eacute;es';
$lang['Install_lang'] = 'Choisissez la langue pour l\'installation';
$lang['dbms'] = 'Type de la base de donn&eacute;es';
$lang['Table_Prefix'] = 'Pr&eacute;fixe des tables';
$lang['Admin_Username'] = 'Nom d\'utilisateur';
$lang['Admin_Password'] = 'Mot de passe';
$lang['Admin_Password_confirm'] = 'Mot de passe [ Confirmer ]';

$lang['Inst_Step_2'] = 'Votre compte d\'administration a &eacute;t&eacute; cr&eacute;&eacute;. A ce point, l\'installation de base est termin&eacute;e. Vous allez &ecirc;tre redirig&eacute; vers une nouvelle page qui vous permettra d\'administrer votre nouvelle installation. Veuillez vous assurer de v&eacute;rifier les d&eacute;tails de la Configuration G&eacute;n&eacute;rale et d\'op&eacute;rer les changements qui s\'imposent. Merci d\'avoir choisi phpBB 2.';

$lang['Unwriteable_config'] = 'Votre fichier config.php est en lecture seule actuellement. Une copie du fichier config.php va vous &ecirc;tre propos&eacute;e en t&eacute;l&eacute;chargement apr&egrave;s avoir avoir cliqu&eacute; sur le boutton ci-dessous. Vous devrez envoyer ce fichier dans le m&ecirc;me r&eacute;pertoire où est install&eacute; phpBB 2. Une fois termin&eacute;, vous pourrez vous connecter en utilisant vos nom d\'utilisateur et mot de passe d\'administrateur que vous avez fourni pr&eacute;c&eacute;demment, et visiter le Panneau d\'Administration (un lien appara&icirc;tra en bas de chaque page une fois connect&eacute;) pour v&eacute;rifier la Configuration G&eacute;n&eacute;rale. Merci d\'avoir choisi phpBB 2.';
$lang['Download_config'] = 'T&eacute;l&eacute;charger le fichier config.php';

$lang['ftp_choose'] = 'Choisir la m&eacute;thode de t&eacute;l&eacute;chargement';
$lang['ftp_option'] = '<br />Tant que les extensions FTP seront activ&eacute;es dans cette version de PHP, l\'option d\'essayer d\'envoyer automatiquement le fichier config.php sur un ftp peut vous &ecirc;tre donn&eacute;e.';
$lang['ftp_instructs'] = 'Vous avez choisi de transf&eacute;rer automatiquement via FTP le fichier vers le compte contenant phpBB 2. Veuillez compl&eacute;ter les informations ci-dessous afin de faciliter cette op&eacute;ration. Notez que le chemin FTP doit &ecirc;tre le chemin exact vers le r&eacute;pertoire où est install&eacute; phpBB2 comme si vous &eacute;tiez en train d\'envoyer le fichier avec n\'importe quel client FTP.';
$lang['ftp_info'] = 'Entrez vos informations FTP';
$lang['Attempt_ftp'] = 'Essayer de transf&eacute;rer le fichier config.php vers un serveur ftp';
$lang['Send_file'] = 'Juste m\'envoyer le fichier et je l\'enverrai manuellement sur le serveur ftp';
$lang['ftp_path'] = 'Chemin de phpBB2 FTP';
$lang['ftp_username'] = 'Votre nom d\'utilisateur FTP';
$lang['ftp_password'] = 'Votre mot de passe FTP';
$lang['Transfer_config'] = 'D&eacute;marrer le transfert';
$lang['NoFTP_config'] = 'La tentative d\'envoi du fichier config.php par FTP a &eacute;chou&eacute;. Veuillez t&eacute;l&eacute;charger le fichier config.php et l\'envoyer manuellement sur votre serveur FTP.';

$lang['Install'] = 'Installation';
$lang['Upgrade'] = 'Mise &agrave; jour';


$lang['Install_Method'] = 'Choix du type d\'installation';

$lang['Install_No_Ext'] = 'La configuration de php sur votre serveur ne supporte pas le type de base de donn&eacute;es que vous avez choisi';

$lang['Install_No_PCRE'] = 'phpBB2 requiert le support des expressions r&eacute;guli&egrave;res Perl pour PHP, mais votre configuration de PHP ne le supporte apparemment pas !';

//
// Version Check
//
$lang['Version_up_to_date'] = 'Votre installation est &agrave; jour, aucune mise &agrave; jour n\'est disponible pour votre version de phpBB.';
$lang['Version_not_up_to_date'] = 'Votre installation de phpBB <b>ne semble pas</b> &ecirc;tre &agrave; jour. Des mises &agrave; jours sont disponibles pour votre version de phpBB, veuillez visiter <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> ou <a href="http://www.phpbb-fr.com/">http://www.phpbb-fr.com/</a> afin d\'obtenir une version plus r&eacute;cente.';
$lang['Latest_version_info'] = 'La derni&egrave;re version de phpBB disponible est <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'Vous utilisez <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'Impossible d\'ouvrir une connection au serveur phpBB, l\'erreur retourn&eacute;e est :<br />%s.';
$lang['Socket_functions_disabled'] = 'Impossible d\'utiliser les fonctions de socket.';
$lang['Mailing_list_subscribe_reminder'] = 'Afin d\'obtenir les derni&egrave;res informations sur les mises &agrave; jours de phpBB, <a href="http://www.phpbb.com/support/" target="_new">inscrivez-vous &agrave; notre liste de diffusion</a> (en anglais).';
$lang['Version_information'] = 'Informations de version'; 

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Tentatives de connexions autoris&eacute;es';
$lang['Max_login_attempts_explain'] = 'Nombre maximum de tentatives de connexions qu\'un utilisateur peut soumettre avant qu\'il ne puisse plus se connecter.';
$lang['Login_reset_time'] = 'Temps de verrouillage de la connexion';
$lang['Login_reset_time_explain'] = 'Temps en minutes durant lequel un utilisateur, ayant d&eacute;pass&eacute; le nombre de tentatives de connexions autoris&eacute;es, ne pourra pas se connecter';

// start mod addon to run stats mod...added the following lines
$lang['Run_stats'] = 'Page Generation et Stats des requ&ecirc;tes SQL';
$lang['Run_stats_enable'] = 'Permettre l\'affichage des stats';
$lang['Run_stats_enable_explain'] = 'Displays table at bottom of each page showing page generation and SQL query stats';
$lang['Run_stats_show_reg_users'] = 'Display stats to regular users and not just admins';
$lang['Run_stats_show_reg_users_explain'] = 'Note: for non-admins, this will only show summary stats (never full list of queries), and will only show them if display option listed above is enabled';
$lang['Run_stats_warn_time'] = 'Query warn time';
$lang['Run_stats_warn_time_explain'] = 'If the option to include a list of queries is selected, the list will show in red any query that takes longer than this specified time';
// end mod addon to run stats mod

//
// That's all Folks!
// -------------------------------------------------

?>
