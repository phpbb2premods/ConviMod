<?php
	 <h3> Bienvenue dans l'installation de la ConviMod V1.5.x</h3><br /><br /> Executez le fichier install.php mais pas les fichiers compris dans le dossier /includes pour installer la ConviMod!");

  // Reset Vars, yes that's my style :D
  $dbpass      = '';
  $dbpass      = addslashes($HTTP_POST_VARS['dbpass']);
    $dbpass      = addslashes($_POST['dbpass']);
    @$sql = mysql_connect($dbhost, $dbuser, $dbpasswd)

  //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
  if($error == FALSE)
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
    $remove_remarks = "remove_remarks";
	  }
	  }

	  }
	  }

	  }
	  }
	$sql = "UPDATE `" . $dbprefix . "config` SET `config_name` = 'version', `config_value` = '" . $phpbbver . "' WHERE `config_name` = 'version';";

  @mysql_close($sql);