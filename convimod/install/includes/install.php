<?php
/***************************************************************************
 *
 *
 *   begin                : Tuesday, Apr 10, 2007
 *   copyright            : (C) 2003-2007 by EzCom-fr, www.ezcom-fr.com
 *   email                : ezcom@ezcom-fr.com
 *
 *
 ***************************************************************************/

  if(!defined('install'))
  {
    die("<h3>Welcome to ConviMod V1.5.x install</h3><br /><br />Please execute install.php and not files from the includes folder to install ConviMod! <br /><br />
	 <h3> Bienvenue dans l'installation de la ConviMod V1.5.x</h3><br /><br /> Executez le fichier install.php mais pas les fichiers compris dans le dossier /includes pour installer la ConviMod!");
  }

  // Reset Vars, yes that's my style :D
  $dbtyp       		= '';
  $dbhost      		= '';
  $dbname      		= '';
  $dbuser      		= '';
  $dbpass      		= '';
  $dbprefix    		= '';
  $domainname  		= '';
  $skriptpfad  		= '';
  $serverport  		= '';
  $adminnick   		= '';
  $adminmail   		= '';
  $adminpass   		= '';
  $adminpasswh 		= '';
  $acp_password 	= '';
  $acp_password_confirm	= '';

  // Now get the vars
  $dbtyp       		= addslashes($HTTP_POST_VARS['dbtyp']);
  $dbhost      		= addslashes($HTTP_POST_VARS['dbhost']);
  $dbname      		= addslashes($HTTP_POST_VARS['dbname']);
  $dbuser      		= addslashes($HTTP_POST_VARS['dbuser']);
  $dbpass      		= addslashes($HTTP_POST_VARS['dbpass']);
  $dbprefix    		= addslashes($HTTP_POST_VARS['dbprefix']);
  $domainname  		= addslashes($HTTP_POST_VARS['domainname']);
  $skriptpfad  		= addslashes($HTTP_POST_VARS['skriptpfad']);
  $serverport  		= addslashes($HTTP_POST_VARS['serverport']);
  $adminnick   		= addslashes($HTTP_POST_VARS['adminnick']);
  $adminmail   		= addslashes($HTTP_POST_VARS['adminmail']);
  $adminpass   		= addslashes($HTTP_POST_VARS['adminpass']);
  $adminpasswh 		= addslashes($HTTP_POST_VARS['adminpasswh']);
  $acp_password 	= addslashes($HTTP_POST_VARS['acp_password']);
  $acp_password_confirm	= addslashes($HTTP_POST_VARS['acp_password_confirm']);

  if(empty($dbhost) || empty($dbname))
  {
    // PHP >5.0.5
    $dbtyp       	  = addslashes($_POST['dbtyp']);
    $dbhost      	  = addslashes($_POST['dbhost']);
    $dbname      	  = addslashes($_POST['dbname']);
    $dbuser      	  = addslashes($_POST['dbuser']);
    $dbpass      	  = addslashes($_POST['dbpass']);
    $dbprefix    	  = addslashes($_POST['dbprefix']);
    $domainname  	  = addslashes($_POST['domainname']);
    $skriptpfad  	  = addslashes($_POST['skriptpfad']);
    $serverport  	  = addslashes($_POST['serverport']);
    $adminnick   	  = addslashes($_POST['adminnick']);
    $adminmail   	  = addslashes($_POST['adminmail']);
    $adminpass   	  = addslashes($_POST['adminpass']);
    $adminpasswh 	  = addslashes($_POST['adminpasswh']);
    $acp_password 	  = addslashes($_POST['acp_password']);
    $acp_password_confirm = addslashes($_POST['acp_password_confirm']);
  }

  $error = FALSE;

  if($adminpass != $adminpasswh || $acp_password != $acp_password_confirm)
  {
    echo "<form method=\"post\" action=\"install.php?step=2&lang=$language&mode=install\">";
    echo "<br /><br /><br />" . $langu['err3'] . "<br /><br /><br /><center><b><input type=\"submit\" name=\"submit\" value=\"" . $langu['fw_btn'] . "\"></b></center><br /><br /><br />";
    echo "</form>";
    $error = TRUE;
  }

  if($adminpass == $acp_password)
  {
    echo "<form method=\"post\" action=\"install.php?step=2&lang=$language&mode=install\">";
    echo "<br /><br /><br />" . $langu['err5'] . "<br /><br /><br /><center><b><input type=\"submit\" name=\"submit\" value=\"" . $langu['fw_btn'] . "\"></b></center><br /><br /><br />";
    echo "</form>";
    $error = TRUE;
  }

  if(empty($dbhost) || empty($dbname) || empty($dbuser) || empty($domainname) || empty($skriptpfad) || empty($serverport) || empty($adminnick) || empty($adminmail) || empty($adminpass) || empty($acp_password))
  {
    echo "<form method=\"post\" action=\"install.php?step=2&lang=$language&mode=install\">";
    echo "<br /><br /><br />" . $langu['err4'] . "<br /><br /><br /><center><b><input type=\"submit\" name=\"submit\" value=\"" . $langu['fw_btn'] . "\"></b></center><br /><br /><br />";
    echo "</form>";
    $error = TRUE;
  }

  if($error == FALSE)
  {
    // Let's connect the Database
    @$sql = mysql_connect($dbhost, $dbuser, $dbpass)
      or die("<h2>ConviMod install</h2><br>" . $langu['err1'] . "<br /><br /><br /><br /><br /><br />");

    @mysql_select_db ($dbname)
      or die("<h2>ConviMod install</h2><br>" . $langu['err2'] . "<br /><br /><br /><br /><br /><br />");
  }

  //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
  //<<< INSTALLATIONS ROUTINE                                      <<<
  //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
  if($error == FALSE)
  {
    include("includes/sql_parse.php");
    echo $langu['running'];


    $starttime = time();
    $passhash  = md5($adminpass);
    $acppasshash  = md5($acp_password);

    include ("includes/progressbar.php");

    Initialize('300','300',750,30,'#006699','#000000','#00D000'); // initialisation de la barre de progression
    for ($i=0;$i<=100;$i++)
    {
    ProgressBar($i); // réaffichage de la barre avec le nouvel indice
    //***********************
    // ici on mets notre code
    for ($j=0;$j<=100000;$j++) {$p=1;} // dans cette exemple, j'ai une boucle de retardement
    //**************************
    }

    $schema="dumps/mysql_schema.sql";
    $data="dumps/mysql_basic.sql";
    $remove_remarks = "remove_remarks";
    $delimiter = ";";
    $delimiter_basic = ";";
    $sql = @fread(@fopen($schema, 'r'), @filesize($schema));
    $sql = preg_replace('/phpbb_/', $dbprefix, $sql);
    $sql = remove_remarks($sql);
    $sql = split_sql_file($sql, $delimiter);

    for( $i = 0; $i < count($sql); $i++ )
    {
      if(!$result = mysql_query ($sql[$i]) )
	  {
		echo '<br /><br /><font color="#FF0000"><b>' . $langu['dbresponse2'] . '</b></font><br />' . $sql[$i];
	  }
	  else
	  {
	  	//echo '<br /><br /><font color="#FF0000"><b>' . $langu['dbresponse1'] . '</b></font><br />' . $sql[$i];
	  }
    } // FOR

    $sql = @fread(@fopen($data, 'r'), @filesize($data));
    $sql = preg_replace('/phpbb_/', $dbprefix, $sql);
    $sql = remove_remarks($sql);
    $sql = split_sql_file($sql, $delimiter);

    for( $i = 0; $i < count($sql); $i++ )
    {
      if(!$result = mysql_query ($sql[$i]) )
	  {
		echo '<br /><br /><font color="#FF0000"><b>' . $langu['dbresponse2'] . '</b></font><br />' . $sql[$i];
	  }
	  else
	  {
	  	//echo '<br /><br /><font color="#FF0000"><b>' . $langu['dbresponse1'] . '</b></font><br />' . $sql[$i];
	  }
    } // FOR

    // Und nun basteln wir die zusätzlichen Informationen und bringen die Versionsinfos usw. auf den aktuellen
    // Stand

    // Genutzte Zusatzvariablen resetten
    $cookiename = '';

    // Toll was? Nie mehr doppelte Cookienamen :)
    srand((double)microtime()*1000000);
    $pwlist  = 0;
    $pwchars = array(
	'0',
	'1',
	'2',
	'3',
	'4',
	'5',
	'6',
	'7',
	'8',
	'9',
	'0',
	'a',
	'b',
	'c',
	'd',
	'e',
	'f',
	'g',
	'h',
	'i',
	'j',
	'k',
	'l',
	'm',
	'n',
	'o',
	'p',
	'q',
	'r',
	's',
	't',
	'u',
	'v',
	'w',
	'x',
	'y',
	'z',
	'convimod',
	'ezcom',
	'forum'
    );
    for ($i=0; $i<8; $i++)
    {
      $pwlist = rand(0,36);
      $cookiename .= $pwchars[$pwlist];
    }
    $cookiename .= '2mysql';


    // User installation
	$sql = "INSERT INTO `" . $dbprefix . "users` (`user_id`, `username`, `user_level`, `user_regdate`, `user_password`, `user_acp_password`, `user_email`, `user_icq`, `user_website`, `user_occ`, `user_from`, `user_interests`, `user_sig`, `user_viewemail`, `user_style`, `user_aim`, `user_yim`, `user_msnm`, `user_posts`, `user_attachsig`, `user_allowsmile`, `user_allowhtml`, `user_allowbbcode`, `user_allow_pm`, `user_notify_pm`, `user_allow_viewonline`, `user_rank`, `user_avatar`, `user_lang`, `user_timezone`, `user_dateformat`, `user_actkey`, `user_newpasswd`, `user_notify`, `user_active`)
		VALUES ( -1, 'Anonymous', 0, 0, '', '', '', '', '', '', '', '', '', 0, NULL, '', '', '', 0, 0, 1, 1, 1, 0, 1, 1, NULL, '', '', 0, '', '', '', 0, 0),
			( 2, '" . $adminnick . "', 1, " . $starttime . ",'" . $passhash . "','" . $acppasshash . "','" . $adminmail . "', '', '', '', '', '', '', 1, 1, '', '', '', 1, 1, 1, 0, 1, 1, 0, 1, 1, '', '" . $language . "', 0, '', '', '', 0, 1);";
	mysql_query($sql) or die(mysql_error());

    $sql = "UPDATE `" . $dbprefix . "config` SET `config_name` = 'cookie_name', `config_value` = '" . $cookiename . "' WHERE `config_name` = 'cookie_name';";
    mysql_query($sql) or die(mysql_error());

	$sql = "UPDATE `" . $dbprefix . "config` SET `config_name` = 'script_path', `config_value` = '" . $skriptpfad . "' WHERE `config_name` = 'script_path';";
    mysql_query($sql) or die(mysql_error());

	$sql = "UPDATE `" . $dbprefix . "config` SET `config_name` = 'version', `config_value` = '" . $phpbbver . "' WHERE `config_name` = 'version';";
    mysql_query($sql) or die(mysql_error());

	$sql = "UPDATE `" . $dbprefix . "config` SET `config_name` = 'convimod_version', `config_value` = '" . $convimodver . "' WHERE `config_name` = 'convimod_version';";
    mysql_query($sql) or die(mysql_error());

	$sql = "INSERT INTO `" . $dbprefix . "config` SET `config_name` = 'default_lang', `config_value` = '" . $language . "';";
    mysql_query($sql) or die(mysql_error());

	$sql = "UPDATE `" . $dbprefix . "config` SET `config_name` = 'board_startdate', `config_value` = '" . time() . "' WHERE `config_name` = 'board_startdate';";
    mysql_query($sql) or die(mysql_error());

	$sql = "UPDATE `" . $dbprefix . "config` SET `config_name` = 'server_name', `config_value` = '" . $domainname . "' WHERE `config_name` = 'server_name';";
    mysql_query($sql) or die(mysql_error());

	$sql = "UPDATE `" . $dbprefix . "config` SET `config_name` = 'board_email', `config_value` = '" . $adminmail . "' WHERE `config_name` = 'board_email';";
    mysql_query($sql) or die(mysql_error());

	$sql = "UPDATE `" . $dbprefix . "config` SET `config_name` = 'server_port', `config_value` = '" . $serverport . "' WHERE `config_name` = 'server_port';";
    mysql_query($sql) or die(mysql_error());

    // Versions updates and Server settings etc.

    echo "<form method=\"post\" action=\"install.php?step=4&lang=$language&mode=install\">";

    echo "<input type=\"hidden\" name=\"dbtyp\" value=\"" . stripslashes($dbtyp) . "\">";
	echo "<input type=\"hidden\" name=\"dbhost\" value=\"" . stripslashes($dbhost) . "\">";
    echo "<input type=\"hidden\" name=\"dbname\" value=\"" . stripslashes($dbname) . "\">";
    echo "<input type=\"hidden\" name=\"dbuser\" value=\"" . stripslashes($dbuser) . "\">";
    echo "<input type=\"hidden\" name=\"dbpass\" value=\"" . stripslashes($dbpass) . "\">";
    echo "<input type=\"hidden\" name=\"dbprefix\" value=\"" . stripslashes($dbprefix) . "\">";
    echo "<center>";
    echo $langu['dbresponse1'] . "<br /><br /><br /><b><input type=\"submit\" name=\"submit\" value=\"" . $langu['ok_btn'] . "\"></b><br /><br /><br />";
    echo "</center>";
    echo "</form>";

  } // IF

  //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
  //<<< INSTALLATIONS ROUTINE                                      <<<
  //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<


  // Close DB Connection
  @mysql_close($sql);

?>
