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

  if($mode == 'install')
  {
    $config_data = '';
	$dbtyp       = '';
    $dbhost      = '';
    $dbname      = '';
    $dbuser      = '';
    $dbpass      = '';
    $dbprefix    = '';
    $written     = FALSE;
	$dbtyp       = addslashes($HTTP_POST_VARS['dbtyp']);
    $dbhost      = addslashes($HTTP_POST_VARS['dbhost']);
    $dbname      = addslashes($HTTP_POST_VARS['dbname']);
    $dbuser      = addslashes($HTTP_POST_VARS['dbuser']);
    $dbpass      = addslashes($HTTP_POST_VARS['dbpass']);
    $dbprefix    = addslashes($HTTP_POST_VARS['dbprefix']);
	
	if(empty($dbhost))
	{
	  // PHP 5
	  $dbtyp       = addslashes($_POST['dbtyp']);
      $dbhost      = addslashes($_POST['dbhost']);
      $dbname      = addslashes($_POST['dbname']);
      $dbuser      = addslashes($_POST['dbuser']);
      $dbpass      = addslashes($_POST['dbpass']);
      $dbprefix    = addslashes($_POST['dbprefix']);  
	}
	
	if(empty($dbtyp))
	{
	  $dbtyp = 'mysql';
	}

	$config_data = '<?php'."\n\n";
	$config_data .= "\n// phpBB 2.x auto-generated config file\n// Do not change anything in this file!\n\n";
	$config_data .= "\n/**\n* ConviMod PreMOD - EzCom-fr - http://www.ezcom-fr.com/\n*/\n\n";
	$config_data .= '$dbms = \'' . $dbtyp . '\';' . "\n\n";
	$config_data .= '$dbhost = \'' . $dbhost . '\';' . "\n";
	$config_data .= '$dbname = \'' . $dbname . '\';' . "\n";
	$config_data .= '$dbuser = \'' . $dbuser . '\';' . "\n";
	$config_data .= '$dbpasswd = \'' . $dbpass . '\';' . "\n\n";
	$config_data .= '$table_prefix = \'' . $dbprefix . '\';' . "\n\n";
	$config_data .= 'define(\'PHPBB_INSTALLED\', true);'."\n\n";
	$config_data .= '?' . '>'; // Done this to prevent highlighting editors getting confused!

    // Zuerst versuchen wir mal, ob wir die config.php schreiben können
    // auch wenn diese nicht existiert (daher keine Prüfung vorher)
    @$fp = fopen("../config.php", "w+");
    @fwrite($fp, $config_data);
    @fclose($fp);

    if (is_writeable('../config.php'))
	{
      // So wenn sie geschrieben werden konnte dann wars das hier, ansonsten fehler siehe folgende Zeile
      $written = TRUE;
	}

    if($written == TRUE)
    {
      echo $langu['cwrit'];
      echo '<center><a href="install.php?step=4&lang=' . $language . '">' . $langu['fstell'] . '</a></center>';
      echo "<br><br><br><br>";
    }
    else
    {
      echo $langu['cdol'];
      echo '<form method="post" action="install.php?step=4&lang=' . $language . '&mode=dlconfig">';
      echo '<center><input type="hidden" name="conf_data" value="' . $config_data . '"><input type="submit" name="submit" value="' . $langu['dload'] . '"';
      echo "</form>";
      echo '<br /><br /><br /><center><a href="install.php?step=4&lang=' . $language . '">' . $langu['fstell'] . '</a></center>';
      echo "<br /><br /><br /><br />";
    }
  }
  else
  {
    echo "<br /><br /><br /><br />" . $langu['fertig'] . "<br /><br /><br /><br />";
  }

?>
