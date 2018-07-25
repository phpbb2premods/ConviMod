<?php
/***************************************************************************
 *                               install.php
 *                            -------------------
 *   begin                : Tuesday, Apr 10, 2007
 *   copyright            : (C) 2003-2007 by EzCom-fr, www.ezcom-fr.com
 *   email                : ezcom@ezcom-fr.com
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

  define('install',true);

  // First we disable error reporting for unset Vars.
  error_reporting  (E_ERROR | E_WARNING | E_PARSE);
  set_magic_quotes_runtime(0);

  // Variable Reset
  $mode      = '';
  $language  = '';
  $step      = '';

  // And now we get mode and language
  $mode      = $_GET['mode'];
  $step      = $_GET['step'];
  $language  = $_GET['lang'];

/*  if(empty($lang))
  {
    $language = 'french';
  }*/
  if(empty($language))
  {
    $language = 'french';
  }
  // Set general Vars for later use in setup
  $convimodver  = '1.5.2';
  $phpbbver  = '.0.23';

  // Sprachdatei einbinden
  if(file_exists("language/" . $language . ".php"))
  {
    include("language/$language.php");
  }
  else
  {
    die("<h2>Bienvenue dans l'installation de la ConviMod V <?php echo $convimodver ?></h2><br>La langue sélectionnée n'existe pas. Verifiez que vous avez bien uploadé le dossier <b>install/language/</b> dans son intégralité!<br><br>The selected language doesn't exist. Please check if you have uploaded the folder <b>install/language/</b> completely!");
  }

  // Letzter Schritt
  if($step == 4 && $mode == 'dlconfig')
  {
    header('Content-Type: text/x-delimtext; name="config.php"');
    header('Content-disposition: attachment; filename="config.php"');
    $configdownload = $HTTP_POST_VARS['conf_data'];
    if(empty($configdownload))
    {
      // PHP >5.0.5
      $configdownload = $_POST['conf_data'];
    }
    echo stripslashes($configdownload);
	exit;
  }

  // Global Header for Setup
  include("includes/header.php");

  // Setupschritte
  if($step == 1)
  {
    include("includes/step1.php");
  }
  else if($step == 2)
  {
    include("includes/step2.php");
  }
  else if($step == 3)
  {
    if($mode == 'update')
    {
      include("includes/update.php");
    }
    else if($mode == 'upgrade')
    {
      include("includes/upgrade.php");
    }
    else if ($mode == 'install')
    {
      include("includes/install.php");
    }
    else
    {
      die("<h3>ConviMod Install</h3><br />Invalid Install Mode<br /><br />Installation invalide!");
    }
  }
  else if($step == 4)
  {
    include("includes/step4.php");
  }
  else
  {
    include("includes/welcome.php");
  }

  // Global Footer for Setup
  include("includes/footer.php");

?>
