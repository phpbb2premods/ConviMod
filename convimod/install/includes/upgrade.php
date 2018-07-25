<?php/*************************************************************************** * * *   begin                : Tuesday, Apr 10, 2007 *   copyright            : (C) 2003-2007 by EzCom-fr, www.ezcom-fr.com *   email                : ezcom@ezcom-fr.com * * ***************************************************************************/  if(!defined('install'))  {    die("<h3>Welcome to ConviMod V1.5.x install</h3><br /><br />Please execute install.php and not files from the includes folder to install ConviMod! <br /><br />
	 <h3> Bienvenue dans l'installation de la ConviMod V1.5.x</h3><br /><br /> Executez le fichier install.php mais pas les fichiers compris dans le dossier /includes pour installer la ConviMod!");  }

  // Reset Vars, yes that's my style :D
  $dbpass      = '';  $error       = FALSE;  // Now get the vars
  $dbpass      = addslashes($HTTP_POST_VARS['dbpass']);  if(empty($dbpass))  {    // PHP >5.0.5
    $dbpass      = addslashes($_POST['dbpass']);  }  include("../config.php");  $dbprefix = $table_prefix;  if($dbpass != $dbpasswd)  {    echo "<br /><br /><br />" . $langu['err3'] . "<br /><br /><br />";    $error = TRUE;  }  if($error == FALSE)  {    // Let's connect the Database
    @$sql = mysql_connect($dbhost, $dbuser, $dbpasswd)      or die("<h2>ConviMod install</h2><br>" . $langu['err1'] . "<br /><br /><br /><br /><br /><br />");    @mysql_select_db ($dbname)      or die("<h2>ConviMod install</h2><br>" . $langu['err2'] . "<br /><br /><br /><br /><br /><br />");  }

  //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  //<<< INSTALLATIONSROUTINE                                       <<<  //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
  if($error == FALSE)  {    include("includes/sql_parse.php");    echo $langu['running'];    $starttime = time();    $passhash  = md5($adminpass);
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

    $altert="dumps/upgrade.sql";
    $remove_remarks = "remove_remarks";    $delimiter = ";";    $delimiter_basic = ";";    $sql = @fread(@fopen($schema, 'r'), @filesize($schema));    $sql = preg_replace('/phpbb_/', $dbprefix, $sql);    $sql = remove_remarks($sql);    $sql = split_sql_file($sql, $delimiter);    for( $i = 0; $i < count($sql); $i++ )    {      if(!$result = mysql_query ($sql[$i]) )	  {	   	echo '<br><br><font color="#FF0000"><b>' . $langu['dbresponse2'] . '</b></font><br>' . $sql[$i];
	  }	  else	  {	  	//echo '<br><br><font color="#FF0000"><b>' . $langu['dbresponse1'] . '</b></font><br>' . $sql[$i];
	  }    } // FOR
    $sql = @fread(@fopen($data, 'r'), @filesize($data));    $sql = preg_replace('/phpbb_/', $dbprefix, $sql);    $sql = remove_remarks($sql);    $sql = split_sql_file($sql, $delimiter);    for( $i = 0; $i < count($sql); $i++ )    {      if(!$result = mysql_query ($sql[$i]) )	  {	   	echo '<br><br><font color="#FF0000"><b>' . $langu['dbresponse2'] . '</b></font><br>' . $sql[$i];
	  }	  else	  {	  	//echo '<br><br><font color="#FF0000"><b>' . $langu['dbresponse1'] . '</b></font><br>' . $sql[$i];
	  }    } // FOR
    $sql = @fread(@fopen($altert, 'r'), @filesize($altert));    $sql = preg_replace('/phpbb_/', $dbprefix, $sql);    $sql = remove_remarks($sql);    $sql = split_sql_file($sql, $delimiter);    for( $i = 0; $i < count($sql); $i++ )    {      if(!$result = mysql_query ($sql[$i]) )	  {		echo '<br><br><font color="#FF0000"><b>' . $langu['dbresponse2'] . '</b></font><br>' . $sql[$i];
	  }	  else	  {	  	//echo '<br><br><font color="#FF0000"><b>' . $langu['dbresponse1'] . '</b></font><br>' . $sql[$i];
	  }    } // FOR    // Und nun bringen wir die Versionsinfos auf den aktuellen Stand
	$sql = "UPDATE `" . $dbprefix . "config` SET `config_name` = 'version', `config_value` = '" . $phpbbver . "' WHERE `config_name` = 'version';";    mysql_query($sql) or die(mysql_error());	$sql = "UPDATE `" . $dbprefix . "config` SET `config_name` = 'convimod_version', `config_value` = '" . $convimodver . "' WHERE `config_name` = 'convimod_version';";    mysql_query($sql) or die(mysql_error());    // Versionsupdates und Serversettings etc.
    echo "<form method=\"post\" action=\"install.php?step=4&lang=$language\">";    echo $langu['dbresponse1'] . "<br /><br /><br /><center><b><input type=\"submit\" name=\"submit\" value=\"" . $langu['ok_btn'] . "\"></b></center><br /><br /><br />";    echo "</form>";  } // IF  //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  //<<< INSTALLATIONSROUTINE                                       <<<  //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<  // Close DB Connection
  @mysql_close($sql);?>
