<?php
/***************************************************************************
 *                         lang_bbcode.php [French]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3.2.2 2002/12/18 15:40:20 psotfx Exp $
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
 
/* CONTRIBUTORS 
	Translation produced by Helix
	http://www.phpbb-fr.com/
*/ 

// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Introduction");
$faq[] = array("Qu'est-ce que le BBCode ?", "Le BBCode est une impl&eacute;mentation sp&eacute;ciale du HTML. L'activation de l'utilisation du BBCode est d&eacute;termin&eacute;e par l'administrateur. En outre, vous pouvez d&eacute;sactiver le BBCode dans un message lors de sa composition. Le BBCode en lui-m&ecirc;me est similaire au style du HTML; les balises sont contenues dans des crochets [ et ] &agrave; la place de &lt; et &gt;, et offrent un meilleur contrôle sur la mani&egrave;re dont quelque chose doit &ecirc;tre affich&eacute;. Selon le mod&egrave;le de document que vous utilisez, vous pourrez facilement rajouter du BBCode &agrave; vos messages &agrave; travers une interface de boutons cliquables au-dessus de la zone de texte lors de la composition de votre message. Toutefois, le guide qui suit pourra vous &ecirc;tre utile.");

$faq[] = array("--","Mise en forme du Texte");
$faq[] = array("Cr&eacute;er du texte en gras, italique et soulign&eacute;", "Le BBCode comprend des balises qui vous permettent de changer rapidement le style de votre texte. Cela se r&eacute;alise des mani&egrave;res suivantes : <ul><li>Pour rendre une partie de texte en gras, placez-le dans <b>[b][/b]</b>; exemple : <br /><br /><b>[b]</b>Salut<b>[/b]</b><br /><br />donnera <b>Salut</b></li><li>Pour souligner un texte, utilisez <b>[u][/u]</b>; par exemple :<br /><br /><b>[u]</b>Bonjour<b>[/u]</b><br /><br />donnera <u>Bonjour</u></li><li>Pour mettre un texte en italique, utilisez <b>[i][/i]</b>; exemple :<br /><br />C'est <b>[i]</b>Super!<b>[/i]</b><br /><br />donnera C'est <i>Super!</i></li></ul>");

$faq[] = array("Changer la taille ou la couleur du texte", "Pour changer la couleur ou la taille de votre texte, les balises suivantes peuvent &ecirc;tres utilis&eacute;es. Ayez en t&ecirc;te que le rendement du texte d&eacute;pendra de votre navigateur internet et de votre syst&egrave;me d'exploitation : <ul><li>Le changement de la couleur du texte se r&eacute;alise en le pla&ccedil;ant dans <b>[color=][/color]</b>. Vous pouvez sp&eacute;cifier soit un nom de couleur reconnu (exemple : red, blue, yellow, etc.), ou soit un code couleur hexadecimal, exemple : #FFFFFF, #000000. Par exemple, pour cr&eacute;er du texte en rouge, vous pouvez utiliser :<br /><br /><b>[color=red]</b>Salut !<b>[/color]</b><br /><br />ou<br /><br /><b>[color=#FF0000]</b>Salut !<b>[/color]</b><br /><br />donneront tous deux <span style=\"color:red\">Salut !</span></li><li>Le changement de la taille de votre texte se r&eacute;alise de la m&ecirc;me mani&egrave;re que pour la couleur en utilisant <b>[size=][/size]</b>. Cette balise est d&eacute;pendante du mod&egrave;le de document que vous utilisez, mais le format recommand&eacute; est une valeur num&eacute;rique repr&eacute;sentant la taille du texte en pixels, de 1 (tellement petit que vous le verrez pas) jusqu'&agrave; 29 (tr&egrave;s grand). Par exemple :<br /><br /><b>[size=9]</b>PETIT<b>[/size]</b><br /><br />donnera <span style=\"font-size:9px\">PETIT</span><br /><br />alors que :<br /><br /><b>[size=24]</b>ENORME !<b>[/size]</b><br /><br />donnera <span style=\"font-size:24px\">ENORME !</span></li></ul>");
$faq[] = array("Puis-je combiner les balises de mise en forme ?", "Oui, bien s&ucirc;r que vous pouvez, par exemple pour attirer l'attention de quelqu'un, vous devriez &eacute;crire :<br /><br /><b>[size=18][color=red][b]</b>REGARDEZ MOI !<b>[/b][/color][/size]</b><br /><br />devrait donner <span style=\"color:red;font-size:18px\"><b>REGARDEZ MOI !</b></span><br /><br />N&eacute;anmoins, nous ne vous recommandons pas d'&eacute;crire beaucoup de texte comme ci-dessus ! Rappelez-vous que c'est &agrave; vous de vous assurer de fermer les balises correctement. Par exemple, ce qui suit est incorrect :<br /><br /><b>[b][u]</b>Ceci est incorrect<b>[/b][/u]</b>");

$faq[] = array("--","Citation et texte &agrave; pas fixe");
$faq[] = array("Citation dans les r&eacute;ponses", "Il y a deux m&eacute;thodes pour citer un texte, avec ou sans r&eacute;f&eacute;rence.<ul><li>Lorsque vous utilisez la fonction Citer pour r&eacute;pondre &agrave; un message sur le forum, vous avez s&ucirc;rement remarqu&eacute; que le texte en citation est ajout&eacute; dans la zone de texte entre <b>[quote=\"\"]</b> et <b>[/quote]</b>. Cette m&eacute;thode vous permet de citer avec une r&eacute;f&eacute;rence &agrave; une personne ou tout autre chose que vous aurez choisi de mettre ! Par exemple, pour citer un texte &eacute;crit par M. Dupont, vous devrez entrer :<br /><br /><b>[quote=\"M. Dupont\"]</b>Le texte &eacute;crit par M. Dupont devra &ecirc;tre plac&eacute; ici<b>[/quote]</b><br /><br />Cela ajoutera automatiquement, M. Dupont a &eacute;crit : avant votre texte. Rappelez-vous que vous <b>devez</b> inclure les guillemets \"\" autour de la r&eacute;f&eacute;rence que vous citez, ils ne sont pas optionnels.</li><li>La seconde m&eacute;thode vous permet de citer quelque chose sans faire r&eacute;f&eacute;rence &agrave; l'auteur. Pour l'utiliser, placez le texte entre les balises <b>[quote]</b> et <b>[/quote]</b>. Lorsque vous lirez votre message, il montrera simplement Citation : avant votre texte.</li></ul>");
$faq[] = array("Code ou police &agrave; pas fixe", "Si vous voulez afficher des lignes de code ou toute chose qui n&eacute;cessite une police &agrave; pas fixe, exemple : Police Courrier, vous devez placer le texte ou code dans les balises <b>[code][/code]</b>, exemple : <br /><br /><b>[code]</b>echo \"Ceci est du code\";<b>[/code]</b><br /><br />Toute mise en forme utilis&eacute;e dans  les balises <b>[code][/code]</b> sera appliqu&eacute;e.");

$faq[] = array("--","Cr&eacute;ation de Listes");
$faq[] = array("Cr&eacute;er une liste non-ordonn&eacute;e", "Le BBCode supporte deux types de listes : les listes non-ordonn&eacute;es et les listes ordonn&eacute;es. Elles sont essentiellement identiques &agrave; leurs &eacute;quivalents en HTML. Une liste non-ordonn&eacute;e produit une liste dont les entr&eacute;es sont les unes en-dessous des autres et indent&eacute;es avec une puce. Pour cr&eacute;er une liste non-ordonn&eacute;e, utilisez <b>[list][/list]</b> et d&eacute;finissez chaque entr&eacute;e &agrave; l'int&eacute;rieur de la liste en utilisant <b>[*]</b>. Par exemple, pour &eacute;tablir une liste de vos couleurs favorites, vous pouvez utiliser :<br /><br /><b>[list]</b><br /><b>[*]</b>Rouge<br /><b>[*]</b>Bleu<br /><b>[*]</b>Jaune<br /><b>[/list]</b><br /><br />Cela donnera la liste suivante :<ul><li>Rouge</li><li>Bleu</li><li>Jaune</li></ul>");
$faq[] = array("Cr&eacute;er une liste ordonn&eacute;e", "Le second type de liste vous donne le contrôle sur ce qui va &ecirc;tre affich&eacute; avant chaque entr&eacute;e. Pour cr&eacute;er une liste ordonn&eacute;e, vous devez utiliser <b>[list=1][/list]</b> pour cr&eacute;er une liste num&eacute;rot&eacute;e ou alternativement <b>[list=a][/list]</b> pour une liste alphab&eacute;tique. Comme pour les listes non-ordonn&eacute;es, les entr&eacute;es sont sp&eacute;cifi&eacute;es en utilisant <b>[*]</b>. Par exemple :<br /><br /><b>[list=1]</b><br /><b>[*]</b>Faire les magasins<br /><b>[*]</b>Acheter un nouvel ordinateur<br /><b>[*]</b>Injurier son ordinateur lorsqu'il plante<br /><b>[/list]</b><br /><br />donnera ce qui suit :<ol type=\"1\"><li>Faire les magasins</li><li>Acheter un nouvel ordinateur</li><li>Injurier son ordinateur lorsqu'il plante</li></ol>Alors que pour une liste alphab&eacute;tique, vous devez utiliser :<br /><br /><b>[list=a]</b><br /><b>[*]</b>La premi&egrave;re r&eacute;ponse possible<br /><b>[*]</b>La seconde r&eacute;ponse possible<br /><b>[*]</b>La troisi&egrave;me r&eacute;ponse possible<br /><b>[/list]</b><br /><br />donnera :<ol type=\"a\"><li>La premi&egrave;re r&eacute;ponse possible</li><li>La seconde r&eacute;ponse possible</li><li>La troisi&egrave;me r&eacute;ponse possible</li></ol>");

$faq[] = array("--", "Cr&eacute;ation de Liens");
$faq[] = array("Cr&eacute;er un lien vers un autre site", "Le BBCode de phpBB supporte plusieurs m&eacute;thodes pour cr&eacute;er des liens, plus connus sous le sigle URLs.<ul><li>La premi&egrave;re m&eacute;thode utilise les balises <b>[url=][/url]</b>; tout ce que vous taperez apr&egrave;s le signe = sera consid&eacute;r&eacute; comme le nom du lien. Par exemple, pour cr&eacute;er un lien vers phpBB.com vous devez utiliser :<br /><br /><b>[url=http://www.phpbb.com/]</b>Visitez phpBB !<b>[/url]</b><br /><br />Ceci g&eacute;n&eacute;rera le lien suivant : <a href=\"http://www.phpbb.com/\" target=\"_blank\">Visitez phpBB !</a> Vous remarquerez que le lien ouvre une nouvelle fen&ecirc;tre; l'utilisateur peut donc continuer &agrave; parcourir les forums s'il le souhaite.</li><li>Si vous voulez que le lien affiche directement l'URL, vous devez simplement utiliser : <br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Ceci donnera le lien suivant : <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>De plus, phpBB poss&egrave;de une fonctionnalit&eacute; appel&eacute; <i>Magic Links</i>; celle-ci convertira automatiquement une URL en un lien cliquable sans que vous ayez &agrave; ins&eacute;rer une balise BBCode ou http://. Par exemple, en tapant www.phpbb.com dans votre message, celui-ci sera automatiquement convertit en <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> lorsque vous le lirez.</li><li>La m&ecirc;me chose s'applique aux adresses e-mail; vous pouvez soit sp&eacute;cifier une adresse e-mail explicitement, par exemple :<br /><br /><b>[email]</b>personne@domaine.com<b>[/email]</b><br /><br />qui donnera <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a>, ou soit en tapant personne@domaine.com dans votre message et sera automatiquement convertit lorsque vous le lirez.</li></ul>Comme pour toutes les balises BBCode, encadrez tout autre balise comme <b>[img][/img]</b> (reportez-vous &agrave; la partie suivante), <b>[b][/b]</b>, etc. Comme pour les balises de mise en forme, c'est &agrave; vous de vous assurer que l'ordre des balises d'ouverture et de fermeture est correct, par exemple :<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /><u>n'est pas</u> correct et peut amener &agrave; la supression de votre message; faites donc attention.");

$faq[] = array("--", "Affichage d'images dans les messages");
$faq[] = array("Ajouter une image &agrave; un message", "Le BBCode de phpBB inclut une balise pour incorporer des images &agrave; vos messages. Deux points importants &agrave; retenir lors de l'utilisation de cette balise sont que premi&egrave;rement, beaucoup d'utilisateurs n'appr&eacute;cient gu&egrave;res un trop plein d'images dans un message et que secondement, l'image que vous voulez afficher doit d&eacute;j&agrave; &ecirc;tre disponible sur internet (elle ne peut pas seulement exister sur votre ordinateur par exemple, &agrave; moins que votre ordinateur soit lui-m&ecirc;me un serveur internet !). Il n'y a actuellement aucun moyen de stocker localement des images avec phpBB (ce probl&egrave;me sera trait&eacute; dans la prochaine version de phpBB). Pour afficher une image, vous devez encadrer l'URL qui pointe vers l'image avec les balises <b>[img][/img]</b>. Par exemple :<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Comme not&eacute; ci-dessus dans la section Cr&eacute;ation de Liens, vous pouvez placer une image dans les balises <b>[url][/url]</b> si vous le souhaitez. Exemple :<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />devrait donner :<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Divers");
$faq[] = array("Puis-je ajouter mes propres balises ?", "Non, je crains que cela soit impossible directement dans phpBB 2.0. Nous offrirons la possibilit&eacute; de personnaliser les balises BBCode dans la prochaine version majeure.");

//
// This ends the BBCode guide entries
//

?>
