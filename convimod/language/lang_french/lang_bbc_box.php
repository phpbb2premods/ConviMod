<?php
/***************************************************************************
 * lang_bbc_box.php [French]
 * -------------------------
 * begin	: Wednesday, June 08, 2005
 * copyright	: reddog - http://www.reddevboard.com/
 * version	: 1.0.8 - 09/10/2005
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

//
// bbc box settings (acp)
//

//main
$lang['bbc_settings_title'] = 'BBcode Box Reloaded - Configuration';
$lang['bbc_settings_explain'] = 'En utilisant ce formulaire vous pouvez r&eacute;g&eacute;n&eacute;rer le fichier cache des bbcodes et modifier les options du module.';
$lang['bbc_settings_adjust'] = 'R&eacute;glages';
$lang['bbc_settings_cache'] = 'Cache';

// regen
$lang['bbc_box_cache'] = 'Mise en cache de la liste des bbcodes';
$lang['bbc_last_regen'] = 'Derni&egrave;re r&eacute;g&eacute;n&eacute;ration';
$lang['bbc_today_at'] = 'aujourd\'hui, &agrave; %s';
$lang['bbc_yesterday_at'] = 'hier, &agrave; %s';

// bbc per row
$lang['bbc_per_row'] = 'Nombre de boutons par ligne';
$lang['bbc_per_row_explain'] = 'Renseignez ici le nombre de boutons affich&eacute;s par ligne dans l\'&eacute;cran de postage.';

// mode selection (beginner or advanced)
$lang['bbc_mode_select'] = 'S&eacute;lectionner le mode d\'affichage';
$lang['bbc_mode_select_explain'] = 'Vous avez le choix entre le mode <span style="color:darkred"><strong>confirm&eacute;</strong></span> qui offre des r&eacute;glages suppl&eacute;mentaires et le mode <span style="color:green"><strong>d&eacute;butant</strong></span>, id&eacute;al pour ne pas commettre d\'erreurs.';
$lang['bbc_advanced'] = '<span style="color:darkred"><strong>confirm&eacute;</strong></span>';
$lang['bbc_beginner'] = '<span style="color:green"><strong>d&eacute;butant</strong></span>';

// switch on/off (buttons)
$lang['bbc_switch_select'] = 'Afficher les boutons bbcode dans l\'&eacute;cran de postage';
$lang['bbc_switch_select_explain'] = 'Si cette option est d&eacute;sactiv&eacute;e, les boutons bbcode de base seront affich&eacute;s dans l\'&eacute;cran de postage. Toutefois, pour d&eacute;sactiver r&eacute;ellement les balises bbcodes, utilisez le menu listant les boutons.';

// skin selection
$lang['Select_skin'] = 'S&eacute;lectionner un style';
$lang['Skin_preview'] = 'Pr&eacute;visualiser';

// actions
$lang['bbc_regen'] = 'R&eacute;g&eacute;n&eacute;rer le cache';
$lang['bbc_settings_updated'] = 'La configuration des bbcodes a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s.';
$lang['bbc_cache_updated'] = 'La mise en cache de la liste des bbcodes a abouti.';
$lang['bbc_click_return'] = 'Cliquez %sici%s pour revenir &agrave; la page pr&eacute;c&eacute;dente.';
$lang['bbc_click_return_settings'] = 'Cliquez %sici%s pour retourner &agrave; la configuration des boutons bbcode.';

//
// bbc box manage (acp)
//

//main
$lang['bbc_manage_title'] = 'BBcode Box Reloaded - Gestion des bbcodes';
$lang['bbc_manage_explain'] = 'En utilisant ce formulaire vous pouvez ajouter, &eacute;diter, voir et supprimer des bbcodes. Chaque bbcode n&eacute;cessite des lignes de code dans le fichier <span style="color:darkred"><em>bbcode.php</em></span> (et accessoirement <span style="color:darkred"><em>bbcode.tpl</em></span>), ainsi qu\'une clef <span style="color:darkblue"><em>$lang[\'bbcbxr_help\'][\'helpline\']</em></span> et une clef <span style="color:darkblue"><em>$lang[\'bbcbxr_desc\'][\'helpline\']</em></span> dans le fichier <span style="color:darkred"><em>lang_bbc_box.php</em></span> (où la variable helpline correspond &agrave; sa valeur).';
$lang['bbc_edit_title'] = 'BBcode Box Reloaded - Edition du bbcode %s';
$lang['bbc_edit_explain'] = 'En utilisant ce formulaire, vous pouvez modifier les champs du bbcode s&eacute;lectionn&eacute;. <span style="color:darkred"><strong>ATTENTION!</strong></span> Un champ ne doit &ecirc;tre compos&eacute; que d\'<span style="color:green"><strong>un seul mot (ou lettre)</strong></span>, ne comportant aucun <span style="color:darkred"><strong>caract&egrave;res sp&eacute;ciaux</strong></span>, <span style="color:darkred"><strong>espace</strong></span> ou <span style="color:darkred"><strong>majuscules</strong></span>.';
$lang['bbc_edit_rules'] = '<strong>Champs d&eacute;but et fin de tag:</strong> <span style="color:darkred"><strong>vous ne devez pas modifier</strong></span> les variables plac&eacute;es avant (exemple: width, height) et apr&egrave;s (exemple: down, left, right) un caract&egrave;re =, celles-ci sont d&eacute;finies dans le fichier <span style="color:darkred"><em>bbcode.php</em></span>.';
$lang['bbc_add_title'] = 'BBcode Box Reloaded - Ajouter un nouveau bbcode';
$lang['bbc_add_explain'] = 'En utilisant ce formulaire, vous pouvez d&eacute;finir les champs du nouveau bbcode. <span style="color:darkred"><strong>ATTENTION!</strong></span> Un champ ne doit &ecirc;tre compos&eacute; que d\'<span style="color:green"><strong>un seul mot (ou lettre)</strong></span>, ne comportant aucun <span style="color:darkred"><strong>caract&egrave;res sp&eacute;ciaux</strong></span>, <span style="color:darkred"><strong>espace</strong></span> ou <span style="color:darkred"><strong>majuscules</strong></span>. Une image doit &ecirc;tre pr&eacute;sente dans le r&eacute;pertoire pr&eacute;vu &agrave; cet effet (par d&eacute;faut: <em>templates/bbc_box/styles/default/</em>).';
$lang['bbc_add_rules'] = 'Le premier champ est <span style="color:darkred"><strong>important</strong></span>, il est utilis&eacute; pour g&eacute;rer le bbcode depuis le fichier <span style="color:darkred"><em>bbcode.php</em></span>. Des variables peuvent &ecirc;tre ajout&eacute;es dans les champs tag si celles-ci sont d&eacute;finies dans le m&ecirc;me fichier (exemple: <em>tag=</em><strong>center</strong> ou <em>tag</em> <strong>width</strong><em>=100</em>). Ajouter un nouveau bbcode depuis ce formulaire ne suffit pas, chaque bbcode n&eacute;cessite des lignes de code dans le fichier <span style="color:darkred"><em>bbcode.php</em></span> (et accessoirement <span style="color:darkred"><em>bbcode.tpl</em></span>).';

// fields
$lang['bbc_name'] = 'bbcode';
$lang['bbc_name_explain'] = 'variable <span style="color:darkred"><strong>importante</strong></span> utilis&eacute;e comme nom pour le bbcode, sans espace ni caract&egrave;res sp&eacute;ciaux.';
$lang['bbc_img_display'] = 'bouton';
$lang['bbc_before'] = 'd&eacute;but de tag';
$lang['bbc_before_explain'] = 'variable utilis&eacute;e comme d&eacute;but de tag, sans les crochets.';
$lang['bbc_before_edit_explain'] = 'Ce qui donnera [%s] comme balise dans un message.';
$lang['bbc_after'] = 'fin de tag';
$lang['bbc_after_explain'] = 'variable utilis&eacute;e comme fin de tag, sans les crochets.';
$lang['bbc_after_edit_explain'] = 'Ce qui donnera [/%s] comme balise dans un message.';
$lang['bbc_helpline'] = 'helpline';
$lang['bbc_helpline_explain'] = 'variable utilis&eacute;e pour la ligne explicative quand la souris passe sur un bouton bbcode, sans espace ni caract&egrave;res sp&eacute;ciaux.';
$lang['bbc_img'] = 'image';
$lang['bbc_img_explain'] = 'variable utilis&eacute;e pour les clefs $images[].';
$lang['bbc_divider'] = 'espacement';
$lang['bbc_divider_explain'] = 'pour ajouter ou non un espacement apr&egrave;s ce bouton bbcode.';

// actions
$lang['Edit'] = 'Editer';
$lang['Delete'] = 'Supprimer';
$lang['bbc_move_after'] = 'Positionner ce bbcode apr&egrave;s';
$lang['bbc_top'] = '___ D&eacute;but ___';
$lang['Add_new_bbc'] = 'Ajouter un nouveau bbcode';
$lang['bbc_must_select'] = 'Vous devez s&eacute;lectionner un bbcode';
$lang['bbc_must_fill'] = 'Vous devez remplir tous les champs';
$lang['bbc_updated'] = 'Le bbcode a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s';
$lang['bbc_added'] = 'Le bbcode a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s';
$lang['bbc_removed'] = 'Le bbcode a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s';
$lang['bbc_click_return_manage'] = 'Cliquez %sici%s pour retourner &agrave; la gestion des boutons bbcode';

//
// bbc box list (acp)
//

// main
$lang['bbc_box_title'] = 'BBcode Box Reloaded';
$lang['bbc_box_explain'] = 'Vous pouvez ici activer, d&eacute;sactiver les boutons bbcode utilis&eacute;s sur le forum ; ainsi que g&eacute;rer les permissions d\'utilisation de chacun d\'entre eux.';
$lang['bbc_box_list'] = 'Liste des boutons bbcodes';

// actions
$lang['Enable_all'] = 'Tout activer';
$lang['Disable_all'] = 'Tout d&eacute;sactiver';
$lang['Button_switch'] = 'Activer ou d&eacute;sactiver le bouton s&eacute;lectionn&eacute;';
$lang['bbc_act_mode'] = 'Mode Activer/D&eacute;sactiver';
$lang['bbc_perms_mode'] = 'Mode Permissions';
$lang['bbc_go_to'] = 'aller au %s';
$lang['bbc_box_updated'] = 'La configuration des boutons bbcode a &eacute;t&eacute; mise &agrave; jour';
$lang['bbc_box_return'] = 'Cliquez %sici%s pour retourner &agrave; l\'administration des boutons bbcode';

//
// bbc box (board)
//

// main
$lang['Font_size'] = 'Taille';
$lang['Font_type'] = 'Police';
$lang['Font_color'] = 'Couleur';
$lang['Type_default'] = 'D&eacute;faut';
$lang['Close_Tags'] = 'Fermer les Balises';
$lang['Styles_tip'] = 'Astuce: Une mise en forme peut &ecirc;tre appliqu&eacute;e au texte s&eacute;lectionn&eacute;.';

// generic help
$lang['bbcbxr_e_help'] = 'Liste: ajouter une puce';
$lang['bbcode_a_help'] = 'Fermer toutes les balises BBCode ouvertes';
$lang['bbcode_s_help'] = 'Couleur du texte: [color=red]texte[/color] Astuce: #FF0000 fonctionne aussi';
$lang['bbcode_f_help'] = 'Taille du texte: [size=x-small]texte en petit[/size]';
$lang['bbcbxr_t_help'] = 'Type de police: [font=Verdana]texte[/font]';
$lang['bbcbxr_bs_help'] = 'Couleur d\'arri&egrave;re plan: [bcolor=red]texte[/bcolor] Astuce: #FF0000 fonctionne aussi';

// default
$lang['bbcbxr_help']['bold'] = 'Texte gras: [b]texte[/b]';
$lang['bbcbxr_help']['italic'] = 'Texte italique: [i]texte[/i]';
$lang['bbcbxr_help']['underline'] = 'Texte soulign&eacute;: [u]texte[/u]';
$lang['bbcbxr_help']['quote'] = 'Citation: [quote]texte cit&eacute;[/quote]';
$lang['bbcbxr_help']['code'] = 'Afficher du code: [code]code[/code]';
$lang['bbcbxr_help']['ulist'] = 'Liste: [list]texte[/list]';
$lang['bbcbxr_help']['olist'] = 'Liste ordonn&eacute;e: [list=]texte[/list]';
$lang['bbcbxr_help']['picture'] = 'Ins&eacute;rer une image: [img]http://image_url/[/img]';
$lang['bbcbxr_help']['www'] = 'Ins&eacute;rer un lien: [url]http://url/[/url] ou [url=http://url/]Nom[/url]';

// bbcode box
$lang['bbcbxr_help']['strike'] = 'Texte barr&eacute;: [%s]texte[/%s]';
$lang['bbcbxr_help']['spoiler'] = 'Spoiler: [%s]texte[/%s]';
$lang['bbcbxr_help']['fade'] = 'Opacit&eacute;: [%s]texte[/%s] ou avec [img]http://image_url/[/img]';
$lang['bbcbxr_help']['rainbow'] = 'Ins&eacute;rer un effet arc-en-ciel: [%s]texte[/%s]';
$lang['bbcbxr_help']['justify'] = 'Texte justifi&eacute;: [%s]texte[/%s]';
$lang['bbcbxr_help']['right'] = 'Aligner le texte &agrave; droite: [%s]texte[/%s]';
$lang['bbcbxr_help']['center'] = 'Centrer le texte: [%s]texte[/%s]';
$lang['bbcbxr_help']['left'] = 'Aligner le texte &agrave; gauche: [%s]texte[/%s]';
$lang['bbcbxr_help']['link'] = 'Ins&eacute;rer une ancre lien: [%snom_cible]texte[/%s]';
$lang['bbcbxr_help']['target'] = 'Ins&eacute;rer une ancre cible: [%snom_cible]texte[/%s]';
$lang['bbcbxr_help']['marqd'] = 'D&eacute;filement du texte vers le bas: [%s]texte[/%s]';
$lang['bbcbxr_help']['marqu'] = 'D&eacute;filement du texte vers le haut: [%s]texte[/%s]';
$lang['bbcbxr_help']['marql'] = 'D&eacute;filement du texte vers la gauche: [%s]texte[/%s]';
$lang['bbcbxr_help']['marqr'] = 'D&eacute;filement du texte vers la droite: [%s]texte[/%s]';
$lang['bbcbxr_help']['email'] = 'Ins&eacute;rer une adresse email: [%s]adresse email[/%s]';
$lang['bbcbxr_help']['flash'] = 'Ins&eacute;rer un fichier Flash: [%s]URL du flash[/%s]';
$lang['bbcbxr_help']['video'] = 'Ins&eacute;rer un fichier vid&eacute;o: [%s]URL du fichier[/%s]';
$lang['bbcbxr_help']['stream'] = 'Ins&eacute;rer un fichier en streaming: [%s]URL du fichier[/%s]';
$lang['bbcbxr_help']['real'] = 'Ins&eacute;rer un fichier Real Media: [%s]URL du fichier[/%s]';
$lang['bbcbxr_help']['quick'] = 'Vid&eacute;o Quicktime: [%s]http://lien_video_quicktime/[/%s]';
$lang['bbcbxr_help']['sup'] = 'Mettre le texte en exposant: [%s]texte[/%s]';
$lang['bbcbxr_help']['sub'] = 'Mettre le texte en indice: [%s]texte[%s]';
// undefined
$lang['bbcbxr_help_none'] = 'Utilisation du bbcode: [%s]texte[/%s]';

// font size
$lang['font_tiny'] = 'Tr&egrave;s petit';
$lang['font_small'] = 'Petit';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Grand';
$lang['font_huge'] = 'Tr&egrave;s grand';

// font type
$lang['type_arial'] = 'Arial';
$lang['type_comicsansms'] = 'Comic Sans MS';
$lang['type_couriernew'] = 'Courier New';
$lang['type_georgia'] = 'Georgia';
$lang['type_lucidaconsole'] = 'Lucida Console';
$lang['type_microsoft'] = 'Microsoft Sans Serif';
$lang['type_tahoma'] = 'Tahoma';
$lang['type_timesnewroman'] = 'Times New Roman';
$lang['type_trebuchet'] = 'Trebuchet MS';
$lang['type_verdana'] = 'Verdana';

// tools bar
$lang['bbcbxr_swc_help'] = 'Basculer du mode couleur du texte &agrave; couleur d\'arri&egrave;re plan';
$lang['bbcbxr_hr_help'] = 'Ins&eacute;rer un s&eacute;parateur';
$lang['bbcbxr_chr_help'] = 'Ins&eacute;rer un caract&egrave;re sp&eacute;cial';

// charmap popup
$lang['charmap_page'] = 'Caract&egrave;res sp&eacute;ciaux';
$lang['charmap_title'] = 'S&eacute;lectionner un caract&egrave;re sp&eacute;cial';

// description
$lang['bbcbxr_desc']['strike'] = 'Texte barr&eacute;';
$lang['bbcbxr_desc']['spoiler'] = 'Spoiler';
$lang['bbcbxr_desc']['fade'] = 'Opacit&eacute;';
$lang['bbcbxr_desc']['rainbow'] = 'Effet arc-en-ciel';
$lang['bbcbxr_desc']['justify'] = 'Texte justifi&eacute;';
$lang['bbcbxr_desc']['right'] = 'Texte align&eacute; &agrave; droite';
$lang['bbcbxr_desc']['center'] = 'Texte centr&eacute;';
$lang['bbcbxr_desc']['left'] = 'Texte align&eacute; &agrave; gauche';
$lang['bbcbxr_desc']['link'] = 'Ancre lien';
$lang['bbcbxr_desc']['target'] = 'Ancre cible';
$lang['bbcbxr_desc']['marqd'] = 'D&eacute;filement du texte vers le bas';
$lang['bbcbxr_desc']['marqu'] = 'D&eacute;filement du texte vers le haut';
$lang['bbcbxr_desc']['marql'] = 'D&eacute;filement du texte vers la gauche';
$lang['bbcbxr_desc']['marqr'] = 'D&eacute;filement du texte vers la droite';
$lang['bbcbxr_desc']['email'] = 'Adresse email';
$lang['bbcbxr_desc']['flash'] = 'Fichier Flash';
$lang['bbcbxr_desc']['video'] = 'Fichier vid&eacute;o';
$lang['bbcbxr_desc']['stream'] = 'Fichier en streaming';
$lang['bbcbxr_desc']['real'] = 'Fichier Real Media';
$lang['bbcbxr_desc']['quick'] = 'Vid&eacute;o Quicktime';
$lang['bbcbxr_desc']['sup'] = 'Texte en exposant';
$lang['bbcbxr_desc']['sub'] = 'Texte en indice';

// addons
// add keys $lang[] from addons below this line
// hide
$lang['bbcbxr_help']['hidde'] = "Message prot&eacute;g&eacute;: [hide]texte cach&eacute;[/hide]";
$lang['bbcbxr_desc']['hidde'] = 'Texte cach&eacute;';

//
// That's all Folks!
// -------------------------------------------------

?>
