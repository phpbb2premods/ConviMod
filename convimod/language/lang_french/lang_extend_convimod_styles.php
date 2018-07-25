<?php
//
//	file: language/lang_french/lang_extend_convimod_styles.php
//	author: Dragons
//	begin: 03/09/2006
//	version: 0.0.1 - 03/09/2006
//	license: http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
//

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

//------------------------------------------------------------------------------
// admin part
//------------------------------------------------------------------------------

if ( $lang_extend_admin )
{
	$lang['Lang_extend_convimod_style'] = 'ConviMod';
}

$lang['Lang_convimod'] = 'ConviMod';
$lang['Lang_convimod_explain'] = 'ConviMod est une pr&eacute;MOD bas&eacute;e sur les fonctionnalit&eacute;es qui a pour but de rendre votre forum convivial, elle remplace la GfMod';
$lang['version_dev_info'] = 'Derni&egrave;re version en d&eacute;veloppement';

$lang['General'] = 'G&eacute;n&eacute;rale';
$lang['Users'] = 'Utilisateurs';
$lang['Groups'] = 'Groupes';
$lang['Forums'] = 'Forums';
$lang['Styles'] = 'Th&egrave;mes';
$lang['Smilies'] = 'Emotic&ocirc;nes';
$lang['Avatar_dir_size'] = 'Taille du r&eacute;pertoire des avatars';
$lang['Gzip_compression'] = 'Compression GZip';
$lang['Admin_panel'] = 'Panneau de contr&ocirc;le de l\'administration';
$lang['Backup_DB'] = 'Sauvegarder BDD';
$lang['Restore_DB'] = 'Restaurer BDD';
$lang['Ban_Management'] = 'Bannissement';
$lang['Disallow'] = 'Interdire un pseudo';
$lang['Disallow_control'] = 'Contr&ocirc;le des Pseudos Interdits';
$lang['Disallow_explain'] = 'Ici, vous pouvez contr&ocirc;ler les pseudos qui seront interdits &agrave; l\'usage. Les pseudos interdits peuvent contenir un caract&egrave;re joker (*). Veuillez noter que vous ne pourrez pas interdire un pseudos d&eacute;j&agrave; enregistr&eacute;; vous devrez d\'abord supprimer le compte de l\'utilisateur et ensuite interdire le pseudos';
$lang['Delete_disallow_title'] = 'Retirer un Pseudo Interdit';
$lang['Delete_disallow_explain'] = 'Vous pouvez retirer un pseudo interdit en s&eacute;lectionnant le pseudos depuis la liste et en cliquant sur Supprimer';
$lang['Add_disallow_title'] = 'Ajouter un pseudo interdit';
$lang['Add_disallow_explain'] = 'Vous pouvez interdire un pseudo en utilisant le caract&egrave;re joker *';
$lang['No_disallowed'] = 'Aucun Pseudo Interdit';
$lang['Disallowed_deleted'] = 'Le pseudo interdit a &eacute;t&eacute; retir&eacute; avec succ&egrave;s';
$lang['Disallow_successful'] = 'Le pseudo interdit a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s';
$lang['Disallowed_already'] = 'Le pseudo que vous avez entr&eacute; ne peut &ecirc;tre interdit. Soit il existe d&eacute;j&agrave; dans la liste, soit il est dans la liste des mots censur&eacute;s, ou soit il est d&eacute;j&agrave; enregistr&eacute;';
$lang['Click_return_disallowadmin'] = 'Cliquez %sici%s pour revenir &agrave; l\'Administration des Pseudos Interdits';

$lang['General_settings'] = 'Options g&eacute;n&eacute;rales';
$lang['Abilities_settings'] = 'Options de Base';
$lang['Security_settings'] = 'S&eacute;curit&eacute;';
$lang['Suscribe_settings'] = 'Inscriptions';
$lang['Time_settings'] = 'Gestion du temps';
$lang['Messages_settings'] = 'Messages';
$lang['Div_Settings'] = 'Divers';
$lang['Smiley_Config'] = 'Smiles';

// Maxi Simple Subforums MOD
$lang['Max_subforums_setting'] = 'Configuration des Sous-Forums';
$lang['Max_subforums'] = 'Total de Sous-Forum(s)';
$lang['Max_subforums_explain'] = 'Nombre total de Sous-Forums &agrave; afficher sur l\'index.';

// Forum Icon MOD
$lang['Forum_icon'] = 'Icone de forum';
$lang['Forum_icon_explain'] = 'e.g. Si votre image est &agrave; cette adresse : <b>http://yourdomain/forum_path/images/forum_icon/test.gif</b><br /> placer le lien vers celle-ci de cette fa&ccedil;on : <b>images/forum_icon/test.gif</b>';

// crewstyle's mod : Annonce Globale
$lang['Global_Announce_setting'] = 'Configuration des Annonces G&eacute;n&eacute;rales';
$lang['Global_Announce'] = 'Annonce G&eacute;n&eacute;rale';
$lang['Annonce_Globale_Index'] = 'Afficher les Annonces G&eacute;n&eacute;rales sur l\'Index ?';
// crewstyle's mod : Annonce Globale

// crewstyle's mod : Simple Split Topic Type
$lang['Simple_split_topic_type_setting'] = 'Configuration des types de sujet';
$lang['Simple_split_topic_type'] = 'S&eacute;parer les diff&eacute;rents types de sujets sur le viewforum ?';
// crewstyle's mod : Simple Split Topic Type

$lang['Rank_img'] = 'Image du Rang';

$lang['Latest_convimod_version_info'] = 'La derni&egrave;re version de ConviMod disponible est <b>ConviMod %s</b>.';
$lang['Current_convimod_version_info'] = 'Vous utilisez <b>ConviMod %s</b>.';
$lang['Version_convimod_information'] = 'Informations de version ConviMod'; 
$lang['Version_convimod_up_to_date'] = 'Votre installation est &agrave; jour, aucune mise &agrave; jour n\'est disponible pour votre version de ConviMod.';
$lang['Version_convimod_not_up_to_date'] = 'Votre installation de ConviMod <b>ne semble pas</b> &ecirc;tre &agrave; jour. Des mises &agrave; jours sont disponibles pour votre version de ConviMod, veuillez visiter <a href="http://www.ezcom-fr.com" target="_new">http://www.ezcom-fr.com</a> afin d\'obtenir une version plus r&eacute;cente.';
$lang['Post_donwload_convimod'] = 'Afin d\'obtenir les derni&egrave;res informations sur les mises &agrave; jours de ConviMod, rendez-vous sur : <a href="http://www.ezcom-fr.com/viewtopic.php?t=6570" target="_new">[TELECHARGEMENT] de la version officielle ConviMod</a>';

$lang['PHPBB'] = 'PHPBB';
$lang['PREMOD'] = 'preMOD ConviMod';

//-- mod : cache version -------------------------------------------------------
//-- add
$lang['Version_check'] = 'V&eacute;rifier les nouvelles versions';
//-- fin mod : cache version ---------------------------------------------------

//-- mod : forum as category ---------------------------------------------------
//-- add
$lang['forum_as_category'] = 'Consid&eacute;rer ce forum comme &eacute;tant une sous-cat&eacute;gorie';
//-- fin mod : forum as category -----------------------------------------------

//-- mod : resize posted images based on max width -----------------------------
//-- add
$lang['Images_max_size'] = 'Veuillez saisir la taille maximale en pixels';
$lang['Images_max_size_explain'] = 'Toute image d&eacute;passant cette valeur sera r&eacute;duite automatiquement.';
$lang['Ims_setting'] = 'Configuration de la taille maximun des images post&eacute;es sur le forum';
//-- fin mod : resize posted images based on max width -------------------------

//-- mod : admin userlist ------------------------------------------------------
//-- add
$lang['Userlist'] = 'Liste des utilisateurs';
$lang['Userlist_description'] = 'Ce formulaire affiche la liste compl&egrave;te des utilisateurs du forum et permet d\'effectuer plusieurs actions';

$lang['Add_group'] = 'Ajouter &agrave; un groupe';
$lang['Add_group_explain'] = 'S&eacute;lectionnez le groupe dans lequel vous voulez ajouter cet utilisateur';

$lang['Open_close'] = 'Ouvrir/Fermer';
$lang['Active'] = 'Actif';
$lang['Group'] = 'Groupe(s)';
$lang['Rank'] = 'Rang';
$lang['Last_activity'] = 'Derni&egrave;re visite';
$lang['Never'] = 'Jamais';
$lang['User_manage'] = 'Gestion';
$lang['Find_all_posts'] = 'Trouver tous les messages';

$lang['Select_one'] = 'Choisissez une option';
$lang['Ban'] = 'Bannir';
$lang['Is_Banned'] = 'est banni !'; 
$lang['UnBan'] = 'D&eacute;bannir';
$lang['Activate_deactivate'] = 'Actif/Inactif';
$lang['Select_All'] = 'S&eacute;lectionner tout';
$lang['Deselect_All'] = 'D&eacute;s&eacute;lectionner tout';

$lang['User_id'] = 'ID de l\'utilisateur';
$lang['User_level'] = 'Niveau de l\'utilisateur';
$lang['Ascending'] = 'Croissant';
$lang['Descending'] = 'D&eacute;croissant';
$lang['Show'] = 'Voir';
$lang['All'] = 'Tous';

$lang['Member'] = 'Membre';
$lang['Pending'] = 'En attente';

$lang['Confirm_user_ban'] = '&Ecirc;tes-vous s&ucirc;r de vouloir bannir le(s) membre(s) s&eacute;lectionn&eacute;(s) ?';
$lang['Confirm_user_un_ban'] = '&Ecirc;tes-vous s&ucirc;r de vouloir d&eacute;bannir le(s) membre(s) s&eacute;lectionn&eacute;(s) ?';
$lang['Confirm_user_deleted'] = '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer le(s) membre(s) s&eacute;lectionn&eacute;(s) ?';

$lang['User_status_updated'] = 'Statut de l\'utilisateur mis &agrave; jour avec succ&egrave;s !';
$lang['User_banned_successfully'] = 'Utilisateur(s) banni(s) avec succ&egrave;s !';
$lang['User_un_banned_successfully'] = 'Utilisateur(s) d&eacute;banni(s) avec succ&egrave;s !';
$lang['User_deleted_successfully'] = 'Utilisateur(s) supprim&eacute;(s) avec succ&egrave;s !';
$lang['User_add_group_successfully'] = 'Utilisateur(s) ajout&eacute;(s) au groupe avec succ&egrave;s !';

$lang['Click_return_userlist'] = 'Cliquez %sici%s pour retourner &agrave; la liste des utilisateurs';
//-- fin mod : admin userlist --------------------------------------------------

// MOD: ACP User Registration
$lang['Register_User'] = 'Enregistrement d\'utilisateur';

$lang['Register_new_user'] = 'Cr&eacute;er un nouvel utilisateur';
$lang['ACP_User_explain'] = 'A partir de ce tableau, vous pouvez inscrire une nouvel utilisateur. Choisissez le mode simple pour ajouter un utilisateur avec les informations basiques (nom d\'utilisateur, e-mail et mot de passe). Ou, choisissez le mode avanc&eacute; afin de sp&eacute;cifier tous les d&eacute;tails d\'inscription d&eacute;sir&eacute;s.';
$lang['ACP_User_Simple'] = '%sMode Simple%s'; // a href, /a tags or b, /b tags
$lang['ACP_User_Advanced'] = '%sMode Avanc&eacute;%s'; // a href, /a tags or b, /b tags
$lang['Registration_options'] = 'Option d\'inscription';
$lang['Registration_options_explain'] = 'Ici d&eacute;finissez la mani&egrave;re dont vous souhaitez que l\'enregistrement soit trait&eacute;.';
$lang['Registration_send_email'] = 'Envoyer un e-mail au nouvel utilisateur';
$lang['User_validation_error'] = 'Cet utilisateur ne peut pas etre enregistr&eacute;. Soit le nom d\'utilisateur ou l\'adresse e-mail sont d&eacute;j&agrave; existantes, soit il a &eacute;t&eacute; banni.';
$lang['No_user_in_db'] = 'Impossible de rajouter cet utilisateur &agrave; la base de donn&eacute;e.';
$lang['ACP_new_user_added'] = 'Le nouvel utilisateur &agrave; &eacute;t&eacute; ajout&eacute; avec succ&egrave;s ! Vous pouvez %sVoir les profils%s.'; // a href, /a tags
$lang['Add_another_user'] = 'Cliquez %sIci%s pour ajouter un nouvel utilisateur.'; // a href, /a tags
$lang['ACP_new_user_email'] = 'Un administrateur de %s vous a enregistr&eacute; comme nouveau membre sur le forum. L\'inscription a &eacute;t&eacute; imm&eacute;diatement valid&eacute;e. Si vous avez la moindre question, contactez %s, l\'administrateur qui vous a inscrit.'; // Sitename, Admin Username
$lang['Add_to_groups'] = 'Ajouter l\'utilisateur &agrave; un groupe';
$lang['Add_to_groups_explain'] = 'Le nouvel utilisateur sera automatiquement ajout&eacute; &agrave; tous les groupes coch&eacute;s ici.';
$lang['No_group_list'] = 'Impossible d\' obtenir la liste des groupes.';
// END MOD: ACP User Registration

// Admin Registration Notify mod
$lang['Registration_notify'] = 'Activer la notification par e-mail lors de l\'enregistrement d\'un nouvel utilisateur';

//-- mod : Advanced Board Disable ----------------------------------------------
//-- add
//
// Advanced Board Disable
//
$lang['Board_disable'] = 'Fermer le forum';
$lang['Board_disable_explain'] = 'Ceci interdira l\'acc&egrave;s au forum pour plusieurs groupes d\'utilisateurs, vous pouvez les d&eacute;finir ci-dessous.';
$lang['Board_disable_mode'] = 'Fermeture du forum pour ...';
$lang['Board_disable_mode_explain'] = 'Vous pouvez choisir qui ne sera pas autoriser &agrave; acc&eacute;der au forum quand il est ferm&eacute;.<br /> Pour s&eacute;lectionner plusieurs cat&eacute;gories de personne enfonc&eacute; la touche <b>Ctrl</b> de votre clavier et faite votre s&eacute;lection avec la souris ou clique gauche continu du 1er au dernier groupe &agrave; s&eacute;lectionner. <br />(la s&eacute;lection la plus logique est la suivante : Invit&eacute;s+ Membres + Mod&eacute;rateurs, ainsi vous pouvez continuer &agrave; acc&egrave;der au forum pour finaliser vos changements)';
$lang['Board_disable_mode_opt'] = array(ANONYMOUS => 'Invit&eacute;s', USER => 'Membres', MOD => 'Mod&eacute;rateurs', ADMIN => 'Administrateurs');
$lang['Board_disable_msg'] = 'Cause de la fermeture du forum';
$lang['Board_disable_msg_explain'] = 'Ce message sera affich&eacute; une fois la fermeture du forum activ&eacute; (empty message = phpBB default message).';
//-- fin mod : Advanced Board Disable ------------------------------------------

//-- mod : bot indexing mod ----------------------------------------------------
//-- add
	$lang['rcs_botcolor'] = 'Couleur des robots';
//-- fin mod : bot indexing mod ------------------------------------------------

$lang['Complex_ACP_PW'] = 'Le mot de passe pour l\'ACP doit &ecirc;tre diff&eacute;rent du mot de passe de connexion au forum';
$lang['ACP_Password_mismatch'] = 'Le mot de passe et celui de la confirmation &eacute;taient diff&eacute;rents, veuillez recommencer!';
$lang['ACP_Password_match_pw'] = 'Le mot de passe pour l\'ACP est identique &agrave; celui de votre compte, veuillez en entrer un nouveau!';
$lang['ACP_password'] = 'Mot de passe pour l\'ACP';
$lang['ACP_password_confirm'] = 'Confirmez le mot de passe pour l\'ACP';
$lang['ACP_password_explain'] = 'Ce mot de passe sert uniquement pour vous connecter &agrave; l\'ACP. D&eacute;sorm&eacute;, le mot de passe de votre compte ne peut plus &ecirc;tre utilis&eacute; pour se connecter au Panel d\'administration.';
$lang['ACP_password_complex'] = '<br />Bien s&ucirc;r, vous devez entrer un mot de passe diff&eacute;rent de celui de votre compte!';

$lang['Ban_reason'] = 'Raison du bannissement';
$lang['Ban_reason_explain'] = 'Si c\'est possible, noter la raison de l\'interdiction. Ce message sera montr&eacute; quand le visiteur essayera d\'acc&eacute;der aux forums &agrave; partir d\'un pseudo, d\'une IP ou d\'une adresse email interdite, &agrave; la place du message par d&eacute;faut : « Vous avez &eacute;t&eacute; banni » .';

//-- mod : search data ---------------------------------------------------------
//-- add
//
// Search Phrases
//
$lang['Search_phrases'] = 'Donn&eacute;es de recherches';
//-- fin mod : search data -----------------------------------------------------

//-- mod : IP Search -----------------------------------------------------------
//-- add
$lang['IP_Search'] = 'Recherche d\'IP';
//-- fin mod : IP Search -------------------------------------------------------

//-- mod :  Overall forums permissions on one page ---------------------
//-- add
$lang['forum_list'] = 'Liste des permissions pour tous les forums';
$lang['forum_name'] = 'Nom du forum';
//-- fin mod :  Overall forums permissions on one page -----------------

//-- mod : Forumtitle as weblink ---------------------------------------
//-- add
$lang['Forum_is_link'] = 'Changer le titre du forum en lien web';
$lang['Forum_weblink'] = 'Lien web ( inclus: HTTP:// )';
$lang['Forum_link_icon'] = 'Icon pour ce forum. Ceci remplace l\'icon par d&eacute;faut sur l\'index du forum.<br />Vous pouvez entrer l\'image depuis votre répertoire de phpBB (sans le slash "/")<br />ou depuis un lien  externe (chemin complet!).';
$lang['Forum_link_target'] = 'Ouvrir le lien dans une nouvelle fen&ecirc;tre';
//-- fin mod : Forumtitle as weblink -----------------------------------

//-- mod : Clone Post ---------------------------------------------------------
//-- add
$lang['Cloneposts'] = 'Cloner les messages';
//-- fin mod : Clone Post -----------------------------------------------------

//-- mod : Reorder ACP Categories ---------------------------------------------
//-- add
$lang['Reorder_ACP_categories'] = "R&eacute;ordonner les cat&eacute;gories";
$lang['ACP_cat_display'] = "Nom de la cat&eacute;gorie";
$lang['ACP_cat_title'] = "R&eacute;ordonner les cat&eacute;gories de l\'ACP";
$lang['ACP_cat_explain'] = "Les cat&eacute;gories de l'ACP sont list&eacute;es &agrav; gauche de votre panneau d\'administration. Utiliser cette forme pour changer l\'ordre d\'affichage des cat&eacute;gories. Les cat&eacute;gories qui ne sont pas explicitement ordonn&eacute;es seront affich&eacute;es par ordre alphab&eacute;tique une fois les autres r&eacute;ordonn&eacute;es.";
$lang['ACP_cat_moved'] = "La cat&eacute;gorie a &eacute;t&eacute; d&eacute;plac&eacute;e avec succ&egrav;s.";
$lang['Reorder'] = "R&eacute;ordonner";
$lang['Click_return_catadmin'] = 'Cliquez %sici%s pour revenir &agrave; l\'administration des cat&eacute;gories';
//-- fin mod : Reorder ACP Categories -----------------------------------------

//-- mod : Adjustable board width -----------------------------------------------
//-- add
$lang['Forum_width'] = 'Largeur du Forum';
$lang['Forum_width_explain'] = 'Changez la largeur de tout votre forum en utilisant un % ou en pixels';
//-- fin mod : Adjustable board width -------------------------------------------

// Admin Session Logout
$lang['Admin_session_logout'] = 'D&eacute;connexion ACP';
// Admin Session Logout

//-- mod : Photo Visual Confirmation ----------------------------------------------
//-- replace
/* MOD
$lang['Visual_confirm_explain'] = 'Requiert que les nouveaux utilisateurs entrent un code d&eacute;fini par une image lors de leur enregistrement.';
MOD */
//-- add
$lang['Visual_confirm_explain'] = 'Requiert que les nouveaux utilisateurs reconnaissent les objets sur les photos ou entrent un code d&eacute;fini par une image lors de leur enregistrement.';
$lang['Visual_confirm_explain_nogd'] = 'Requiert que les nouveaux utilisateurs entrent un code d&eacute;fini par une image lors de leur enregistrement. L\'extension GD de PHP doit &ecirc;tre install&eacute; pur que le mode d\'identification par photo devienne disponible ici.';
$lang['Visual_confirm_photos'] = 'Photos';
$lang['Visual_confirm_digits'] = 'Code alphanum&eacute;rique';
$lang['Visual_confirm_disable'] = 'Aucun';
//-- fin mod : Photo Visual Confirmation ----------------------------------------

//
// RSS
//
$lang['rss_image'] = "Image flux RSS";
$lang['rss_image_exp'] = "Cette image sera affich&eacute;e dans le lecteur RSS. Entrez un chemin d'acc&egrave;s complet de l'image.";
$lang['rss_config'] = "Configuration du flux RSS";
$lang['rss_config_explain'] = "Sur cette page, vous pouvez changer la configuration du flux RSS.";
$lang['rss_max_topics'] = "Nombre maximum de sujets dans le flux RSS";
$lang['rss_config_updated'] = "La configuration du flux RSS est sauvegard&eacute; dans la base de donn&eacute;es!";

//------------------------------------------------------------------------------
// main part
//------------------------------------------------------------------------------

//
// Corrections
//

// lang_main
// Profiles/Registration
$lang['Items_required'] = 'Les champs marqu&eacute;s d\'un <span class="gensmallerror">*</span> sont obligatoires.';
$lang['Admin_panel'] = 'Panneau d\'administration';

//
// Add
//

// ConviMod
$lang['Please_remove_install_contrib'] = 'Veuillez vous assurer que le r&eacute;pertoire <strong>install/</strong> est supprim&eacute;';
$lang['Copy'] = 'Copyright';
$lang['Bots'] = "Robots";

// Style
$lang['Hello'] ='Bonjour';
$lang['Never'] = 'Jamais';
$lang['Legend_display'] = 'Afficher la l&eacute;gende';
$lang['Permissions'] = 'Permissions';
$lang['Back_to_bottom'] = 'Aller en bas';
$lang['Copyright'] = 'Copyright';
$lang['Edition'] = 'Edition';
$lang['Stats'] = 'Statistiques du forum';
$lang['Stats_online'] = 'Qui &eacute;tait en ligne ?';
$lang['Current_time'] = 'Nous sommes le %s'; // %s replaced by date/time
//$lang['Search_new'] = 'Nouveaux messages';
$lang['Search_your_posts'] = 'Mes messages';
$lang['Search_unanswered'] = 'Messages sans r&eacute;ponse';
$lang['Last_Post'] = 'Derniers messages';
$lang['No_new_posts_last_visit'] = 'Pas de nouveau message depuis votre derni&egrave;re visite';
$lang['No_new_posts'] = 'Aucun nouveau message';
$lang['No_new_posts_hot'] = 'Pas de nouveau message [ Populaire ]';
$lang['No_new_posts_locked'] = 'Pas de nouveau message [ Verrouill&eacute; ]';
$lang['Forum_is_locked'] = 'Forum verrouill&eacute;';
$lang['All_Topics'] = 'Tous les sujets';
$lang['Mark_all_topics'] = 'Marquer tous les sujets comme lus';
$lang['No_topics_post_one'] = 'Il n\'y a pas de message dans ce forum.<br />Cliquez sur le lien <b>Poster un nouveau sujet</b> sur cette page pour en poster un.';
$lang['No_newer_topics'] = 'Il n\'y a pas de nouveau sujet dans ce forum';
$lang['No_older_topics'] = 'Il n\'y a pas d\'ancien sujet dans ce forum';
$lang['No_posts_topic'] = 'Il n\'y a pas de message pour ce sujet';
$lang['Visit_website'] = 'Visiter le site Web du posteur';
$lang['Post_Sticky'] = 'Pense-b&ecirc;te';
$lang['Topic_Sticky'] ='<b>Pense-b&ecirc;tes</b>';
$lang['Avatar'] = 'Avatar';

//MOD Keep_unread
$lang['keep_post_unread_explain'] = 'Marquer le message comme non-lu';
$lang['keep_unread_done'] = 'Le message a &eacute;t&eacute; marqu&eacute; comme non-lu';
$lang['View_unread_posts'] = 'Voir les messages non-lus';
$lang['No_unread_posts'] = 'Vous n\'avez pas de messages non-lus';
$lang['Search_new'] = 'Voir les messages non-lus';

// Begin Simple Subforums MOD
$lang['Subforums'] = 'Sous-forums';
$lang['Subforums_new'] = 'Sous-forums (Nouveau Message)';
// End Simple Subforums MOD

// Maxi Simple Subforums MOD
$lang['More'] = '[ Voir plus... ]';
$lang['More_HTML'] = 'Voir Tous les Sous-Forums';

// crewstyle's mod : Annonce Globale
$lang['Topic_Global_Announcement'] = '<b>Annonces g&eacute;n&eacute;rales : </b>';
$lang['Post_Global_Announcement'] = 'Annonce g&eacute;n&eacute;rale';
$lang['Post_Global_Announcements'] = 'Annonces du forum';
$lang['Post_Announcement'] = 'Annonce';
// crewstyle's mod : Annonce Globale

// crewstyle's mod : Simple Split Topic Type
$lang['Topic_Global_Announcement'] = '<b>Annonces g&eacute;n&eacute;rales : </b>';
// crewstyle's mod : Simple Split Topic Type

//-- mod : ConviMod ------------------------------------------------------------
//-- add
$lang['Topic_Global_Announcement_img'] = 'Annonce g&eacute;n&eacute;rale';
$lang['Topic_Announcement_img'] = 'Annonce';
$lang['Topic_Sticky_img'] = 'Pense b&ecirc;te';
$lang['Topic_Moved_img'] = 'D&eacute;plac&eacute;';
$lang['Preview_sig'] = 'Pr&eacute;visualiser la signature';
$lang['Preview_sigprv'] = 'Pr&eacute;visualisation de la signature';
//-- fin mod : ConviMod --------------------------------------------------------

//-- mod : bbcode box reloaded -------------------------------------------------
//-- add
// acp
$lang['BBcode_Box'] = 'BBcode Box';
$lang['bbc_box_a_settings'] = 'Configuration';
$lang['bbc_box_b_list'] = 'Liste des bbcodes';
$lang['bbc_box_c_manage'] = 'Gestion';
// spoiler
$lang['bbcbxr_spoil'] = 'Spoiler';
$lang['bbcbxr_show'] = 'voir';
$lang['bbcbxr_hide'] = 'cacher';
// code expand
$lang['bbcbxr_expand'] = 'Agrandir';
$lang['bbcbxr_expand_more'] = 'Agrandir encore';
$lang['bbcbxr_contract'] = 'R&eacute;duire';
$lang['bbcbxr_select'] = 'Tout s&eacute;lectionner';
//-- fin mod : bbcode box reloaded ---------------------------------------------

$lang['Profile_see'] = 'Cliquez %sici%s pour retourner &agrave; votre profil';

$lang['CONVIMOD'] = '<a href="http://www.ezcom-fr.com/" target="_blank" class="copyright" title="Communaut&eacute; EzCom">PreMOD ConviMod</a> : ';

$lang['Merge'] = "Fusionner";
$lang['Merge_topic'] = "Fusionner le sujet";

//-- mod : addon hide for bbcbxr -------------------------------------------------------------------
//-- add
$lang['Hide'] = 'Message prot&eacute;g&eacute;';
$lang['Hide_text'] = '--- Seul les *membres* ayant post&eacute; dans ce sujet peuvent voir le message ---';
$lang['Hide_in_quote'] = '--- phpBB : Le message prot&eacute;g&eacute; n\'est pas recopi&eacute; dans cette citation ---';
//-- fin mod : addon hide for bbcbxr ---------------------------------------------------------------

//-- mod : vAgreement terms ----------------------------------------------------
//-- add
$lang['Reg_agreement'] = '<font class="gen"><b>Messages</b></font><br />Les administrateurs et mod&eacute;rateurs de ce forum s\'efforceront de supprimer ou &eacute;diter tous les messages &agrave; caract&egrave;re r&eacute;pr&eacute;hensible aussi rapidement que possible. Toutefois, il leur est impossible de passer en revue tous les messages. Vous admettez donc que tous les messages post&eacute;s sur ces forums expriment la vue et opinion de leurs auteurs respectifs, et non pas des administrateurs, ou mod&eacute;rateurs, ou webmestres (except&eacute; les messages post&eacute;s par eux-m&ecirc;me) et par cons&eacute;quent ne peuvent pas &ecirc;tre tenus pour responsables.<br /><br /><font class="gen"><b>Contenu de vos messages</b></font><br />Vous consentez &agrave; ne pas poster de messages injurieux, obsc&egrave;nes, vulgaires, diffamatoires, mena&ccedil;ants, sexuels ou tout autre message qui violeraient les lois applicables. Le faire peut vous conduire &agrave; &ecirc;tre banni imm&eacute;diatement de fa&ccedil;on permanente (et votre fournisseur d\'acc&egrave;s &agrave; internet en sera inform&eacute;). L\'adresse IP de chaque message est enregistr&eacute;e afin d\'aider &agrave; faire respecter ces conditions. Vous &ecirc;tes d\'accord sur le fait que le webmestre, l\'administrateur et les mod&eacute;rateurs de ce forum ont le droit de supprimer, &eacute;diter, d&eacute;placer ou verrouiller n\'importe quel sujet de discussion &agrave; tout moment. En tant qu\'utilisateur, vous &ecirc;tes d\'accord sur le fait que toutes les informations que vous donnerez ci-apr&egrave;s seront stock&eacute;es dans une base de donn&eacute;es. Cependant, ces informations ne seront divulgu&eacute;es &agrave; aucune tierce personne ou soci&eacute;t&eacute; sans votre accord. Le webmestre, l\'administrateur, et les mod&eacute;rateurs ne peuvent pas &ecirc;tre tenus pour responsables si une tentative de piratage informatique conduit &agrave; l\'acc&egrave;s de ces donn&eacute;es.<br /><br /><font class="gen"><b>Informations collect&eacute;es et Cookies</b></font><br />Ce forum utilise les cookies pour stocker des informations sur votre ordinateur. Ces cookies ne contiendront aucune information que vous aurez entr&eacute; ci-apr&egrave;s; ils servent uniquement &agrave; am&eacute;liorer le confort d\'utilisation. L\'adresse e-mail est uniquement utilis&eacute;e afin de confirmer les d&eacute;tails de votre enregistrement ainsi que votre mot de passe (et aussi pour vous envoyer un nouveau mot de passe dans le cas où vous l\'oublieriez).<br /><br /><font class="gen"><b>Vous acceptez...</b></font><br />En vous enregistrant, vous vous portez garant du fait d\'&ecirc;tre en accord avec le r&egrave;glement ci-dessus.';
$lang['To_Join'] = 'Avant de proc&eacute;der &agrave; votre inscription d&eacute;finitive, vous devez manifester votre accord avec les r&egrave;gles suivantes :';
$lang['Forum_Rules'] = 'R&egrave;gles du forum';
$lang['Agree_checkbox'] = 'J\'ai lu les r&egrave;gles de %s et j\'accepte de les respecter.';
//-- fin mod : vAgreement terms ------------------------------------------------

//-- mod : Resize Posted Images Based on Max Width -----------------------------
$lang['rmw_image_title'] = 'Cliquez pour voir en taille r&eacute;elle'; 
//-- fin mod : Resize Posted Images Based on Max Width -------------------------

//-- mod : admin link in header ------------------------------------------------
//-- add
$lang['Admin_panel'] = 'Panneau d\'administration';
//-- fin mod : admin link in header --------------------------------------------

// Admin Registration Notify mod
$lang['New_user_registration'] = 'Enregistrement d\'un nouvel utilisateur';

//-- mod : topic poll indicator ------------------------------------------------
//-- delete
/*-MOD
$lang['Topic_Poll'] = '<b>[ Sondage ]</b>';
MOD-*/
//-- add
$lang['Topic_Poll'] = 'Sondage';
//-- fin mod : topic poll indicator --------------------------------------------

//-- mod : BEGIN PM Navigation MOD ------------------------------------------------
//-- add
$lang['Next_privmsg'] = 'Lire le message priv&eacute; suivant';
$lang['Previous_privmsg'] = 'Lire le message priv&eacute; pr&eacute;c&eacute;dent';
$lang['No_newer_pm'] = 'Il n\'y a pas de nouveaux messages priv&eacute;s.';
$lang['No_older_pm'] = 'Il n\'y a pas d\'anciens messages priv&eacute;s.';
//-- fin mod : END PM Navigation MOD --------------------------------------------

//-- mod : Contact Form ---------------------------------------------------------
//-- add
$lang['Viewing_contact_form'] = 'Utiliser Contact Form';
$lang['Contact_form'] = 'Contacter l\'admin';
//-- fin mod : Contact Form -----------------------------------------------------

// BBCodes
$lang['Font_bold'] = ' G ';
$lang['Font_italic'] = ' i ';
$lang['Font_underline'] = ' s ';
$lang['Post_quote'] = 'Citer';
$lang['Post_code'] = 'Code';
$lang['Post_list'] = 'Liste';
$lang['Post_list_ord'] = 'Liste=';
$lang['Post_img'] = 'Img';
$lang['Post_url'] = 'URL';

//-- mod : Advanced Users Viewing Forum ----------------------------------------
//-- add
$lang['Users_viewing_forum'] = 'Utilisateurs parcourant actuellement ce forum :';
$lang['Legend'] = 'L&eacute;gende';
//-- fin mod : Advanced Users Viewing Forum ------------------------------------

$lang['No_ACP_Password'] = '<b>Vous avez entr&eacute; un mot d passe incorrect pour vous connecter &agrave; l\'ACP!</b><br /><br />Veuiilez contacter l\'administrateur du forum afin de l\'obtenir.';

//Begin Lo-Fi Mod
$lang['Lofi'] = 'Lo-Fi Version';
$lang['Full_Version'] = 'Version Compl&egrave;te';
$lang['quote_lofi'] = 'Citer';
$lang['edit_lofi'] = 'Editer';
$lang['ip_lofi'] = 'IP';
$lang['del_lofi'] = 'Supprimer';
$lang['profile_lofi'] = 'Profil';
$lang['pm_lofi'] = 'MP';
$lang['email_lofi'] = 'E-mail';
$lang['website_lofi'] = 'Site Web';
$lang['icq_lofi'] = 'ICQ';
$lang['aim_lofi'] = 'AIM';
$lang['yim_lofi'] = 'YIM';
$lang['msnm_lofi'] = 'MSN';
$lang['quick_lofi'] = 'R&eacute;ponse Rapide';
$lang['new_pm_lofi'] = 'Envoyer un MP';
//End Lo-Fi Mod

// Banlist
$lang['Ban_reason'] = "Raison du bannissement";
$lang['Banlist'] = "Liste des bannis";
$lang['No_bans_exist'] = "Aucun(s) banni(s)";

//-- mod : attach mod ----------------------------------------------------------
//-- add
$lang['Attached_Files'] = 'Fichiers joints';
//-- fin mod : attach mod ------------------------------------------------------

//--mod : Forumtitle as weblink ------------------------------------------------
//-- add
$lang['Forum_link_count'] = 'Ce lien a &eacute;t&eacute; visit&eacute; %s fois.';
$lang['Forum_is_a_link'] = 'Lien';
//-- fin mod : Forumtitle as weblink -------------------------------------------

//-- mod : Clone Post ----------------------------------------------------------
//-- add
$lang['Clone_post'] = 'Cloner le message dans un nouveau sujet.';
$lang['Forum_selection'] = 'Selectionner le Forum dans lequel le message sera clon&eacute;';
$lang['Forum_selection_explain'] = 'En utilisant le formulaire ci-dessous, vous pouvez sp&eacute;cifier o&ugrave; placer le message clon&eacute;. <br />Lorsque vous cliquez sur "Cloner le message dans un nouveau sujet", un clone du message originel va s\'ouvrir en mode &eacute;dition, vous pouvez alors le modifier avant publication. <br />Si vous changez d\'avis et ne voulez plus cloner ce message, cliquez sur le lien "annuler le clonage".';
$lang['Cancel_clone'] = 'Annuler le clonage';
$lang['Click_to_post_in_original_poster_name'] = 'Cochez la case pour garder le pseudo de l\'auteur originel plut&ograve;t que le votre.';
//-- fin mod : Clone Post ------------------------------------------------------

//-- mod : Admin Session Logout ------------------------------------------------
//-- add
$lang['Admin_session_logged_out'] = 'La d&eacute;connexion de l\'ACP a &eacute;t&eacute; r&eacute;alis&eacute;e avec succ&egrave;s.<br /><br />%sFermer la fen&ecirc;tre%s';
//-- fin mod : Admin Session Logout --------------------------------------------

//-- mod : Show All Edits ------------------------------------------------------
//-- add
$lang['A_former_user'] = 'un ancien membre';
//-- fin mod : Show All Edits --------------------------------------------------

//-- mod : Show Voters ---------------------------------------------------------
//-- add
$lang['Voters'] = 'Votant(s)';
//-- fin mod : Show Voters -----------------------------------------------------

//-- mod : Photo Visual Confirmation ----------------------------------------------
//-- replace
/* MOD
$lang['Confirm_code_explain'] = 'Enter the code exactly as you see it. The code is case sensitive and zero has a diagonal line through it.';
MOD */
//-- add
$lang['Confirm_code_explain_digits'] = 'Entrez exactement le code que vous voyez sur l\'image.';
$lang['Confirm_code_explain_photos'] = 'S&eacute;lectionnez l\'ensemble des photos comportant un animal. (Ceci est un syst&egrave;me de pr&eacute;vention contre le spam).';
$lang['Confirm_code_missing_gd'] = 'Erreur: La confirmation visuelle par photo demande que l\'extension GD de PHP soit install&eacute;e.';
//-- fin mod : Photo Visual Confirmation ----------------------------------------

//
// RSS
//
$lang['rss_forum'] = "Forum de flux RSS";
$lang['rss_topic'] = "Sujet du flux RSS";
$lang['rss_latest'] = "Derniers sujets du flux RSS";

//-- mod : Track PMs MOD -----------------------------------------------------
//-- add
$lang['Private_Message_Tracker'] = "Revue des messages privés";
//-- fin mod : Track PMs MOD ------------------------------------------------- 

//-- mod : New then Unread PMs after login -----------------------------------
//-- add
$lang['New_pms'] = '<span style="color: #e85123;"><b>Vous avez %d nouveaux messages</b></span>'; // You have 2 new messages
$lang['New_pm'] = '<span style="color: #e85123;"><b>Vous avez %d nouveau message</b></span>'; // You have 1 new message
$lang['No_new_pm'] = 'Vous n\'avez pas de nouveaux messages';
$lang['Unread_pms'] = '<span style="color: #e85123;"><b>Vous avez %d messages non lus</b></span>';
$lang['Unread_pm'] = '<span style="color: #e85123;"><b>Vous avez %d message non lu</b></span>';
$lang['No_unread_pm'] = 'Vous n\'avez pas de messages non lus';
//-- fin mod : New then Uread PMs after login --------------------------------

?>
