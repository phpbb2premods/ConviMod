<?php
	 <h3> Bienvenue dans l'installation de la ConviMod V1.5.x</h3><br /><br /> Executez le fichier install.php mais pas les fichiers compris dans le dossier /includes pour installer la ConviMod!");

    $link4 = '<a href="install.php' . $linkextension . '&mode=upgrade">' . $langu['upgrade'] . '</a>';
  {
    $step = 2;

    $chmodpath     = '../';
    $chmodcheck    = array($chmodpath . 'cache/', $chmodpath . 'efiles/', $chmodpath . 'files/', $chmodpath . 'images/avatars/', $chmodpath . 'includes/def_bbc_box.php', $chmodpath . 'config.php');

    $linkext       = '?step=' . $step . '&lang=' . $language . '&mode=' . $mode;

    $link4 = '<a href="install.php' . $linkext . '">' . $langu['ok_btn'] . '</a>';

    echo "<b>" . $langu['ch_mods'] . "</b><br /><br />";
    echo $langu['ch_modt'] . "<br /><br /><br /><br /><center><table border=\"1\" width=\"80%\" cellpadding=\"6\">";
    echo "<tr><td width=\"100%\" align=\"left\" bgcolor=\"#f4f4f4\" colspan=\"2\"><font face=\"Verdana\{ size=\"2\">" . $langu['ch_mods'] . "</font></td></tr>";

    foreach ($chmodcheck as $dir)
    {

      echo "<tr><td width=\"70%\" align=\"left\" bgcolor=\"#f4f4f4\"><font face=\"Verdana\" size=\"2\">$dir</font></td>";

      @chmod($dir,0777);
      if(is_writeable($dir))
      {
        echo "<td width=\"30%\" align=\"right\" bgcolor=\"#f0f0f0\"><font face=\"Verdana\" size=\"2\">" . $langu['ch_ok'] . "</font></td>";
      }
      else if(!is_writeable($dir))
      {
        echo "<td width=\"30%\" align=\"right\" bgcolor=\"#f0f0f0\"><font face=\"Verdana\" size=\"2\">" . $langu['ch_nok'] . "</font></td>";
      }
      else
      {
        echo "<td width=\"30%\" align=\"right\" bgcolor=\"#f0f0f0\"><font face=\"Verdana\" size=\"2\">" . $langu['ch_uok'] . "</font></td>";
      }
      echo "</tr>";
    }
    
   echo "</table><br /><br /><br /><center><b>$link4</b></center><br /><br />";
  }

?>