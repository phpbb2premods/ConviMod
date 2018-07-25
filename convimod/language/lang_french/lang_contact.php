<?php
/***************************************************************************
 *                               lang_contact.php
 *                              ------------------
 *	Version:	9.2.0
 *	Begin:		Sunday, Sept 17, 2006
 *   	Copyright:	(C) 2006-08, Marcus
 *	E-mail:		marcus@phobbia.net
 *	$id:		17:36 17/03/2008
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

$lang['Contact_intro'] = 'Commentaires, retours ou suggestions &agrave; propos du forum, ou si vous recontrez des probl&egrave;mes à l\'enregistrement ou login de votre compte, merci d\'utiliser ce formulaire pour contacter l\'Administrateur directement.';

$lang['Username'] = 'Nom d\'utilisateur';
$lang['Real_name'] = 'Nom';
$lang['Rname_require'] = 'Nom *';
$lang['E-mail'] = 'Adresse E-mail';
$lang['E-mail_require'] = 'Adresse E-mail *';
$lang['Comments'] = 'Commentaires';
$lang['Comments_require'] = 'Commentaires *';
$lang['Attachment'] = 'Fichiers Attach&eacute;s';

$lang['Feedback'] = 'Retour re&ccedil;u';

$lang['Real_name_explain'] = 'Entrer votre nom ici. Cela nous aidera &agrave; vous contacter plus facile si vous n\'&ecirc;tes pas enregistr&eacute;.';
$lang['Explain_email'] = 'Entrer votre adresse e-mail ici. Utilis&eacute;e au cas où nous devrions vous r&eacute;pondre directement.';
$lang['Comments_explain'] = 'Entrer vos commentaires ici.';
$lang['Flood_explain'] = '<br /><br />Ce formulaire utilise un syst&egrave;me de contrôle de flood. Vous pouvez soumettre votre formulaire une fois toutes les %s %s.';
$lang['Comments_limit'] = '<br /><br />L\'administrateur a entr&eacute; un nombre de %s caract&egrave;res maximun pour ce message.';
$lang['Attachment_explain'] = 'Postez votre fichier attach&eacute; ici, si requis, et il sera re&ccedil;u par L\'administrateur du forum. Seulement les fichiers qui font %sKb ou moins peuvent &ecirc;tre li&eacute;s.';

$lang['Guest'] = 'Invit&eacute;';
$lang['Notify_IP'] = 'Votre adresse IP va &ecirc;tre enregistr&eacute; pour des raisons de s&eacute;curit&eacute;.';
$lang['Fields_required'] = 'Les champs avec un * sont requis.';
$lang['Contact_form'] = 'Formulaire';
$lang['Empty'] = 'Non Specifi&eacute;';

$lang['hours'] = 'heures';
$lang['hour'] = 'heure';

$lang['Chars'] = ' caract&egrave;res';

$lang['Captcha_code'] = 'Captcha *';
$lang['Captcha_code_explain'] = 'Merci de confirmer le code de L\'image. Ce champ est requis afin de dissuader le spam des &eacute;ventuels robots.';

//
// Errors
//
$lang['Rname-Empty'] = 'Votre vrai nom n\'a pas &eacute;t&eacute; approuv&eacute;.';
$lang['Comments-Empty'] = 'Le champ du commentaire n\'a pas &eacute;t&eacute; rempli.';
$lang['Comments_exceeded'] = 'Votre message est plus long que le nombre de caract&egrave;res sp&eacute;cifi&eacute;s.';
$lang['Email-Empty'] = 'Le champ du courrier &eacute;lectronique n\'a pas &eacute;t&eacute; rempli.';
$lang['Email-Check'] = 'L\'adresse e-mail que vous avez entr&eacute; n\'est pas valide.';
$lang['Attach-File_exists'] = 'Un fichier existe d&eacute;j&agrave; avec ce nom depuis votre adresse IP.';
$lang['Attach-Too_big'] = 'Le fichier que vous essayez d\'attacher est trop gros. V&eacute;rifiez qu\'il p&egrave;se %sKb ou moins.';
$lang['Attach_dud'] = 'Le fichier que vous avez essay&eacute; d\'envoyer n\'existe pas. V&eacute;rifiez votre fichier avant de recommencer.';
$lang['Attach-Uploaded'] = 'Votre fichier a &eacute;t&eacute; correctement upload&eacute;.';
$lang['Flood_limit'] = 'D&eacute;sol&eacute;, mais vous d\'avez attendre %d heure(s) avant de pouvoir soumettre &agrave; nouveau.';
$lang['Illegal_ext'] = 'Ce type de fichier (%s) n\'est pas permis!';
$lang['Unknown_ext'] = 'Ce type de fichier (%s) ne peut pas &ecirc;tre accept&eacute;!';
$lang['zip_advise'] = 'Si n&eacute;cessaire, merci de faire un zip du fichier afin de le soumettre &agrave; nouveau.';
$lang['POST_ERROR'] = 'Erreur d\'upload - r&eacute;essayez!';
$lang['Image_error'] = 'Erreur d\'pload - Incapable de traiter cette image!';
$lang['Image_zip'] = 'Merci de zip l\'image avant de l\'envoyer.';
$lang['Code_Empty'] = 'Vous n\'avez pas confirmer le code sur l\'image!';
$lang['Code_Wrong'] = 'Le code entr&eacute; est incorrecte!';

$lang['Contact_error'] = '<b>Une erreur est survenue lors de L\'envoie de votre commentaire!</b>';
$lang['Contact_success'] = '<b>Votre message a &eacute;t&eacute; envoy&eacute; avec succ&egrave;s!</b>';

$lang['Click_return_form'] = '<br /><br />Cliquez %sIci%s pour retourner au formulaire';

$lang['Contact_Disabled'] = 'Le formulaire est actuellement inaccessible.';

//
// Admin
//
$lang['General_settings'] = 'Configuration G&eacute;n&eacute;ral';
$lang['Contact_title'] = 'Formulaire de Contact';
$lang['Contact_explain'] = 'Utilisez cette page pour jouer sur les configurations du Formulaire, ainsi que les conditions des champs.';
$lang['Req_settings'] = 'Configuration requise';
$lang['Attachment_settings'] = 'Configurations des Fichiers Attach&eacute;s';
$lang['Contact_updated'] = 'Configuration du Contact mis &agrave; jour avec succ&egrave;s';
$lang['Click_return_contact'] = 'Cliquez %sICI%s pour retourner &agrave; la configuration du Formulaire';
$lang['Disable'] = 'D&eacute;sactiv&eacute;';

$lang['Form_Enable'] = 'Activer Le Formulaire';

$lang['kb'] = 'kilobytes';

$lang['Hash'] = 'Attacehment Hashing M&eacute;thode';
$lang['Hash_explain'] = 'Chaque uploads peuvent &ecirc;tre renomm&eacute; avec un nom al&eacute;atoire, afin d\'augmenter la s&eacute;curit&eacute;.';
$lang['md5'] = 'MD5';
$lang['no_hash'] = 'Pas de Hash';

$lang['auth_permission'] = 'Permissions des Attachments';
$lang['auth_perm_explain'] = 'Si les fichiers attach&eacute;s sont permis vous pouvez selectionner qui peut uploader des fichiers.';
$lang['auth_guests'] = 'Invit&eacute;s';
$lang['auth_members'] = 'Membres';
$lang['auth_mods'] = 'Mod&eacute;rateurs';
$lang['auth_admins'] = 'Administrateurs';

$lang['Require_rname'] = 'Votre nom est requis';
$lang['Require_email'] = 'Votre e-mail est requis';
$lang['Require_comments'] = 'Votre commentaire est requis';
$lang['Permit_attachments'] = 'Vous pouvez attacher des fichiers';
$lang['Prune'] = 'Activ&eacute; Pruning';
$lang['Prune_explain'] = 'Activez cette option pour supprimer n\'importe quelles entr&eacute;es SQL qui ont d&eacute;j&agrave; fait leur "travail" afin de r&eacute;duire la taille de base de donn&eacute;es.';
$lang['Max_file_size'] = 'Taille Maximun des Fichiers';
$lang['Max_file_size_explain'] = 'Taille maximale des fichiers attach&eacute;s stocker sur votre serveur Web. Souvenez-vous, que cela ne peut pas exc&eacute;der les configurations de php.ini. (%s)';
$lang['File_root'] = 'R&eacute;pertoire des Fichiers Attach&eacute;s';
$lang['File_root_explain'] = 'Le dossier dans lequel les fichers attach&eacute;s sont stock&eacute;s. Ce dossier doit &ecirc;tre en CHMOD 777 et se trouver &agrave; la racine du r&eacute;pertoire de phpBB..';
$lang['Flood_limit_admin'] = 'Limit de Flood';
$lang['Flood_limit_admin_explain'] = 'Dur&eacute; avant que l\'utilisateur puisse soumettre &agrave; nouveau un formulaire. Mettez &agrave; \'0\' pour d&eacute;sactiver cette fonction (recommand&eacute; seulement pour les tests).';
$lang['Char_limit_admin'] = 'Maximum de Caract&egrave;res';
$lang['Char_limit_admin_explain'] = 'Fixer un nombre limit&eacute; de caract&egrave;res par message.  Mettez l\'option &agrave; \'0\' pour la d&eacute;sactiver.';

$lang['Captcha'] = 'Configurations de la Confirmation Visuelle';
$lang['Activate'] = 'Activer la Confirmation Visuelle?';
$lang['Enable'] = 'Activ&eacute;';
$lang['Disable'] = 'D&eacute;sactiv&eacute;';
$lang['Captcha_explain'] = 'Activer ceci pour obliger les utilisateurs &agrave; entrer un code avant de soumettre leur formulaire. Cela emp&ecirc;chera un &eacute;ventuel spam.';
$lang['Type'] = 'Apparance du Captcha';
$lang['Type_explain'] = 'Selectionner le type de Captcha que vous voulez montrer sur votre formulaire.';
$lang['Image_bg'] = 'Image bas&eacute;';
$lang['Coloured'] = 'Color&eacute;';
$lang['Random'] = 'Al&eacute;atoire';

$lang['Copyright'] = '"Contact Form" by <a href="http://www.phobbia.net/mods/" target="_phpbb"><b>Ma&reg;&copy;uS</b></a> &copy; 2006-2008<br />(Original mod: darkassasin93)';

//
// "Quick Delete" - Added to 7.0.0
//
$lang['QDelete'] = 'Quick Delete';
$lang['QDelete_disabled'] = 'L\'option de suppression rapide a &eacute;t&eacute; d&eacute;sactiv&eacute;e';
$lang['File_Not_Here'] = 'Cette extension ne semble pas exister.';
$lang['File_Removed'] = 'Le fichier a &eacute;t&eacute; correctement supprim&eacute;.';
$lang['QDelete_explain'] = 'Permettre &agrave; l\'administrateur de supprimer rapidement l\'attachment via le lien de l\'E-mail?';
$lang['Remove_file'] = 'Pour supprimer ce fichier, suivez ce lien: %s';

//
// "Messages Log" - Added in 8.6.0
//
$lang['Admin_email_explain'] = 'Si il y a aucune adresse dans ce champ, les messages seront envoy&eacute;s &agrave; l\'administrateur de ce forum.';

$lang['Contact_date'] = 'Date';
$lang['Contact_ip'] = 'IP';
$lang['Contact_get'] = '%sT&eacute;l&eacute;charger%s';
$lang['Contact_remove'] = '%sEnlever%s';
$lang['Msg_delete'] = 'Supprimer';

$lang['Contact_msgs_title'] = 'Contact Form :: Messages Log';
$lang['Contact_msgs_text'] = 'Ce sont les messages que vous avez re&ccedil;u via votre Formulaire, avec les derniers messages en t&ecirc;te de liste.<br />&nbsp;&bull; Les messages peuvent &ecirc;tre vus et supprim&eacute;s.<br />&nbsp;&bull; Les fichiers attach&eacute;s peuvent &ecirc;tre recouvr&eacute;s et supprim&eacute;s.';

$lang['Msg_del_success'] = 'Le Message a &eacute;t&eacute; correctement effac&eacute;';
$lang['File_del_success'] = 'Le fichier attach&eacute; a &eacute;t&eacute; correctement effac&eacute;';
$lang['Confirm_delete_msg'] = 'Etes vous s&ucirc;r de vouloire supprimer ce message?';
$lang['Confirm_delete_file'] = 'Etes vous s&ucirc;r de vouloire supprimer ce fichier attach&eacute;?';
$lang['File_Not_Here'] = 'Ce fichier attach&eacute; ne devrait pas exister.';
$lang['Click_return_msglog'] = 'Cliquez %sIci%s pour retourner au Log des Messages';

$lang['Msg_Log'] = 'Messages Log';
$lang['Msg_Log_explain'] = 'Activer cette option vous permet de stocker les messages in votre base de donn&eacute;e pour servir de r&eacute;f&eacute;rence';

$lang['more'] = 'plus';

//
// "Thank You" - Added in 8.9.8
//
$lang['Thankyou_settings'] = '"Remerciement" Configuration';
$lang['Thankyou_option'] = 'Remercier l\'envoyeur';
$lang['Thankyou_explain'] = 'Mettre "Aucun" pour d&eacute;sactiver, "Membres" pour que seul les utilisateurs enregistr&eacute;s le recoivent ou "Tous" pour les invit&eacute;s l\'aient aussi.';
$lang['Thank_none'] = 'Aucun';
$lang['Thank_members'] = 'Membres';
$lang['Thank_all'] = 'Tous';

?>