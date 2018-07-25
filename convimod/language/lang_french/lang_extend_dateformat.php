<?php
/**
*
* @package format_date_evolved_mod [french]
* @version $Id: lang_extend_dateformat.php,v 1.0 08/09/2006 15:57 reddog Exp $
* @copyright (c) 2006 reddog - http://www.reddevboard.com/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

if (!defined('IN_PHPBB'))
{
	die('Hacking attempt');
}

$lang = array_merge($lang, array(
	'datetime' => array(
		'today'		=> 'Aujourd\'hui, ',
		'yesterday'	=> 'Hier, ',

		'Sunday'	=> 'Dimanche',
		'Monday'	=> 'Lundi',
		'Tuesday'	=> 'Mardi',
		'Wednesday'	=> 'Mercredi',
		'Thursday'	=> 'Jeudi',
		'Friday'	=> 'Vendredi',
		'Saturday'	=> 'Samedi',

		'Sun'		=> 'Dim',
		'Mon'		=> 'Lun',
		'Tue'		=> 'Mar',
		'Wed'		=> 'Mer',
		'Thu'		=> 'Jeu',
		'Fri'		=> 'Ven',
		'Sat'		=> 'Sam',

		'January'	=> 'Janvier',
		'February'	=> 'F&eacute;vrier',
		'March'		=> 'Mars',
		'April'		=> 'Avril',
		'May'		=> 'Mai',
		'June'		=> 'Juin',
		'July'		=> 'Juillet',
		'August'	=> 'Ao&ucirc;t',
		'September'	=> 'Septembre',
		'October'	=> 'Octobre',
		'November'	=> 'Novembre',
		'December'	=> 'D&eacute;cembre',

		'Jan'		=> 'Jan',
		'Feb'		=> 'F&eacute;v',
		'Mar'		=> 'Mar',
		'Apr'		=> 'Avr',
		'May'		=> 'Mai',
		'Jun'		=> 'Juin',
		'Jul'		=> 'Juil',
		'Aug'		=> 'Ao&ucirc;',
		'Sep'		=> 'Sep',
		'Oct'		=> 'Oct',
		'Nov'		=> 'Nov',
		'Dec'		=> 'D&eacute;c',
	),

	'tz' => array(
		'-12'	=> 'UTC - 12 heures',
		'-11'	=> 'UTC - 11 heures',
		'-10'	=> 'UTC - 10 heures',
		'-9.5'	=> 'UTC - 9:30 heures',
		'-9'	=> 'UTC - 9 heures',
		'-8'	=> 'UTC - 8 heures',
		'-7'	=> 'UTC - 7 heures',
		'-6'	=> 'UTC - 6 heures',
		'-5'	=> 'UTC - 5 heures',
		'-4'	=> 'UTC - 4 heures',
		'-3.5'	=> 'UTC - 3:30 heures',
		'-3'	=> 'UTC - 3 heures',
		'-2'	=> 'UTC - 2 heures',
		'-1'	=> 'UTC - 1 heure',
		'0'	=> 'UTC',
		'1'	=> 'UTC + 1 heure',
		'2'	=> 'UTC + 2 heures',
		'3'	=> 'UTC + 3 heures',
		'3.5'	=> 'UTC + 3:30 heures',
		'4'	=> 'UTC + 4 heures',
		'4.5'	=> 'UTC + 4:30 heures',
		'5'	=> 'UTC + 5 heures',
		'5.5'	=> 'UTC + 5:30 heures',
		'5.75'	=> 'UTC + 5:45 heures',
		'6'	=> 'UTC + 6 heures',
		'6.5'	=> 'UTC + 6:30 heures',
		'7'	=> 'UTC + 7 heures',
		'8'	=> 'UTC + 8 heures',
		'8.75'	=> 'UTC + 8:45 heures',
		'9'	=> 'UTC + 9 heures',
		'9.5'	=> 'UTC + 9:30 heures',
		'10'	=> 'UTC + 10 heures',
		'10.5'	=> 'UTC + 10:30 heures',
		'11'	=> 'UTC + 11 heures',
		'11.5'	=> 'UTC + 11:30 heures',
		'12'	=> 'UTC + 12 heures',
		'12.75'	=> 'UTC + 12:45 heures',
		'13'	=> 'UTC + 13 heures',
		'14'	=> 'UTC + 14 heures',
	),

	'tz_zones' => array(
		'-12'	=> '[UTC - 12, Y] &Icirc;le Baker',
		'-11'	=> '[UTC - 11, X] Samoa',
		'-10'	=> '[UTC - 10, W] Hawaii et les &icirc;les Al&eacute;outiennes, Polyn&eacute;sie fran&ccedil;aise',
		'-9.5'	=> '[UTC - 9:30, V*] &Icirc;les Marquises',
		'-9'	=> '[UTC - 9, V] Alaska, &Icirc;les Gambier',
		'-8'	=> '[UTC - 8, U] Heure standard du Pacifique',
		'-7'	=> '[UTC - 7, T] Heure standard des Montagnes, les Rocheuses',
		'-6'	=> '[UTC - 6, S] Heure standard du Centre',
		'-5'	=> '[UTC - 5, R] Heure standard de l\'Est de l\'am&eacute;rique du nord',
		'-4'	=> '[UTC - 4, Q] Heure standard de l\'Atlantique',
		'-3.5'	=> '[UTC - 3:30, P*] &Icirc;le Terre-Neuve, Labrador',
		'-3'	=> '[UTC - 3, P] Amazonie, Groenland, Guyane fran&ccedil;aise',
		'-2'	=> '[UTC - 2, O] Fernando de Noronha, Grytviken',
		'-1'	=> '[UTC - 1, N] Les A&ccedil;ores, Cap-Vert, Est du Groenland',
		'0'	=> '[UTC, Z] Europe occidentale, m&eacute;ridien de Greenwich',
		'1'	=> '[UTC + 1, A] Europe centrale, Afrique de l\'Ouest',
		'2'	=> '[UTC + 2, B] Europe orientale, Afrique Centrale',
		'3'	=> '[UTC + 3, C] Moscow, Afrique de l\'Est, Mayotte',
		'3.5'	=> '[UTC + 3:30, C*] Iran',
		'4'	=> '[UTC + 4, D] Golfe, &Icirc;le de la R&eacute;union',
		'4.5'	=> '[UTC + 4:30, D*] Afghanistan',
		'5'	=> '[UTC + 5, E] Pakistan, &Icirc;les Kerguelen',
		'5.5'	=> '[UTC + 5:30, E*] Inde, Sri Lanka',
		'5.75'	=> '[UTC + 5:45, E&Dagger;] N&eacute;pal',
		'6'	=> '[UTC + 6, F] Bangladesh, Bhoutan, Novosibirsk',
		'6.5'	=> '[UTC + 6:30, F*] &Icirc;les Cocos',
		'7'	=> '[UTC + 7, G] Indochine, Krasnoyarsk',
		'8'	=> '[UTC + 8, H] Australie occidentale, Chine, Irkoutsk',
		'8.75'	=> '[UTC + 8:45, H&Dagger;] Australie occidentale (extr&ecirc;me Sud-Est)',
		'9'	=> '[UTC + 9, I] Japon, Cor&eacute;e',
		'9.5'	=> '[UTC + 9:30, I*] Australie centrale',
		'10'	=> '[UTC + 10, K] Australie orientale, Vladivostok',
		'10.5'	=> '[UTC + 10:30, K*] Nouvelle-Galles du Sud',
		'11'	=> '[UTC + 11, L] Nouvelle-Cal&eacute;donie, &Icirc;les Salomon',
		'11.5'	=> '[UTC + 11:30, L*] &Icirc;le Norfolk',
		'12'	=> '[UTC + 12, M] Nouvelle Z&eacute;lande, Wallis-et-Futuna, &Icirc;les Fidji',
		'12.75'	=> '[UTC + 12:45, M&Dagger;] &Icirc;les Chatham',
		'13'	=> '[UTC + 13, M*] &Icirc;les Phoenix, Tonga',
		'14'	=> '[UTC + 14, M&dagger;] &Icirc;les de la Ligne',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats' => array(
		'|d M Y| H:i'		=> '10 Jan 2005 17:54 [Relative days]',
		'd M Y, H:i'		=> '10 Jan 2005, 17:57',
		'd M Y H:i'		=> '10 Jan 2005 17:57',
		'D M d, Y g:i a'	=> 'Mon Jan 10, 2005 5:57 pm',
		'M j, y, H:i'		=> 'Jan 10, 05, 5:57 pm',
		'F j, Y, g:i a'		=> 'January 10, 2005, 5:57 pm'
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'D M d, Y g:i a', // Mon Jan 10, 2005 5:57 pm

	'relative_days'		=> 'jours relatifs',
	'custom_dateformat'	=> 'Personnalis&eacute;...',
));

?>
