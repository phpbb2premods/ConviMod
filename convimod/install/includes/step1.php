<?php/*************************************************************************** * * *   begin                : Tuesday, Apr 10, 2007 *   copyright            : (C) 2003-2007 by EzCom-fr, www.ezcom-fr.com *   email                : ezcom@ezcom-fr.com * * ***************************************************************************/  if(!defined('install'))  {    die("<h3>Welcome to ConviMod V1.5.x install</h3><br /><br />Please execute install.php and not files from the includes folder to install ConviMod! <br /><br />
	 <h3> Bienvenue dans l'installation de la ConviMod V1.5.x</h3><br /><br /> Executez le fichier install.php mais pas les fichiers compris dans le dossier /includes pour installer la ConviMod!");  }  if(empty($mode))  {    $step = 1;    $linkextension = '?step=' . $step . '&lang=' . $language;
    $link1 = '<a href="install.php' . $linkextension . '&mode=install">' . $langu['install'] . '</a>';    $link2 = '<a href="install.php' . $linkextension . '&mode=update">' . $langu['update'] . '</a>';
    $link4 = '<a href="install.php' . $linkextension . '&mode=upgrade">' . $langu['upgrade'] . '</a>';    echo "<b>" . $langu['welcome'] . "</b><br /><br />";    echo $langu['welcome_text'] . "<br /><br /><br /><br />";    echo "<b>" . $langu['imethod'] . "</b><br /><br />";    echo $langu['imethod_text'] . "<br /><br /><br />";    echo "<center><br /><b>$link1 | $link2 | $link4</b></center><br /><br />";  }  else
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
