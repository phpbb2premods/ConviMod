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

  // Reset Vars
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
  $$acp_password 	= '';
  $acp_password_confirm	= '';

  // PHP5 with register_long_arrays off?
  if (@phpversion() >= '5.0.0' && (!@ini_get('register_long_arrays') || @ini_get('register_long_arrays') == '0' || strtolower(@ini_get('register_long_arrays')) == 'off'))
  {
	$HTTP_POST_VARS = $_POST;
	$HTTP_GET_VARS = $_GET;
	$HTTP_SERVER_VARS = $_SERVER;
	$HTTP_COOKIE_VARS = $_COOKIE;
	$HTTP_ENV_VARS = $_ENV;
	$HTTP_POST_FILES = $_FILES;

	// _SESSION is the only superglobal which is conditionally set
	if (isset($_SESSION))
	{
		$HTTP_SESSION_VARS = $_SESSION;
	}
  }

  // Installautomatisierung
  $dbhost      = 'localhost';

  if (!empty($HTTP_SERVER_VARS['SERVER_NAME']) || !empty($HTTP_ENV_VARS['SERVER_NAME']))  {  	$domainname = (!empty($HTTP_SERVER_VARS['SERVER_NAME'])) ? $HTTP_SERVER_VARS['SERVER_NAME'] : $HTTP_ENV_VARS['SERVER_NAME'];  }  else if (!empty($HTTP_SERVER_VARS['HTTP_HOST']) || !empty($HTTP_ENV_VARS['HTTP_HOST']))  {  	$domainname = (!empty($HTTP_SERVER_VARS['HTTP_HOST'])) ? $HTTP_SERVER_VARS['HTTP_HOST'] : $HTTP_ENV_VARS['HTTP_HOST'];  }  else  {  	$domainname = '';  }  if(!empty($domainname))  {    $domainname .= str_replace('/install', '', dirname($HTTP_SERVER_VARS['PHP_SELF']));    $skriptpfad = '/';  }  else  {    $skriptpfad  = str_replace('install', '', dirname($HTTP_SERVER_VARS['PHP_SELF']));  }  if (!empty($HTTP_POST_VARS['server_port']))  {    $serverport = $HTTP_POST_VARS['server_port'];  }  else  {   	if (!empty($HTTP_SERVER_VARS['SERVER_PORT']) || !empty($HTTP_ENV_VARS['SERVER_PORT']))	{	  $serverport = (!empty($HTTP_SERVER_VARS['SERVER_PORT'])) ? $HTTP_SERVER_VARS['SERVER_PORT'] : $HTTP_ENV_VARS['SERVER_PORT'];	}	else	{	  $serverport = '80';	}  }

  // Seite ausgeben
  if($mode == 'install')
  {
    $dbhost      = 'localhost';
    $dbprefix    = 'phpbb_';
    echo "<b>" . $langu['installd'] . "</b><br /><br />" . $langu['installd1'] . "<br /><br /><br />";
    echo "<form method=\"post\" action=\"install.php?step=3&lang=$language&mode=install\"><center><table border=\"0\" width=\"80%\" cellspacing=\"2\" cellpadding=\"2\">";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\" valign=\"top\"><font size=\"2\" face=\"Verdana\">" . $langu['field0a'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><font size=\"2\" face=\"Verdana\">
			<input type=\"radio\" name=\"dbtyp\" value=\"mysql\"> MySQL 3<br />
			<input type=\"radio\" name=\"dbtyp\" value=\"mysql4\" checked=\"true\"> MySQL 4<br />
			<input type=\"radio\" name=\"dbtyp\" value=\"mysql4\"> MySQL 5<br />
			<input type=\"radio\" name=\"dbtyp\" value=\"mysql\"> MySQL (" . $langu['field0b'] . ")</font></td>
          </tr>";
	
    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['field0'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"text\" value=\"$dbhost\" name=\"dbhost\" size=\"44\"></td>
          </tr>";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['field1'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"text\" value=\"$dbname\" name=\"dbname\" size=\"44\"></td>
          </tr>";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['field2'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"text\" value=\"$dbuser\" name=\"dbuser\" size=\"44\"></td>
          </tr>";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['field3'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"password\" value=\"$dbpass\" name=\"dbpass\" size=\"44\"></td>
          </tr>";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['field4'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"text\" value=\"$dbprefix\" name=\"dbprefix\" size=\"44\"></td>
          </tr>";

    echo "<tr height=\"30px\"><td colspan=\"2\">&nbsp;</td></tr>";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['field5'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"text\" value=\"$domainname\" name=\"domainname\" size=\"44\"></td>
          </tr>";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['field6'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"text\" value=\"$skriptpfad\" name=\"skriptpfad\" size=\"44\"></td>
          </tr>";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['field7'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"text\" value=\"$serverport\" name=\"serverport\" size=\"44\"></td>
          </tr>";

    echo "<tr height=\"30px\"><td colspan=\"2\">&nbsp;</td></tr>";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['field8'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"text\" value=\"$adminnick\" name=\"adminnick\" size=\"44\"></td>
          </tr>";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['field9'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"text\" value=\"$adminmail\" name=\"adminmail\" size=\"44\"></td>
          </tr>";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['fieldA'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"password\" value=\"$adminpass\" name=\"adminpass\" size=\"44\"></td>
          </tr>";

    echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['fieldB'] . "</font></td>
   	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"password\" value=\"$adminpasswh\" name=\"adminpasswh\" size=\"44\"></td>
          </tr>";

    echo"<tr>
	    	<td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['fieldG'] . "</font></td>
	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"password\" value=\"$acp_password\" name=\"acp_password\" size=\"44\"></td>
	 	 </tr>";

    echo"<tr>
	    	<td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['fieldH'] . "</font></td>
	    	<td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"password\" value=\"$acp_password_confirm\" name=\"acp_password_confirm\" size=\"44\"></td>
	 	 </tr>";

    echo "<tr height=\"30px\"><td colspan=\"2\">&nbsp;</td></tr>";

    echo "<tr height=\"30px\"><td colspan=\"2\" valign=\"center\" align=\"right\" bgcolor=\"#e0e0e0\"><input type=\"submit\" name=\"submit\" value=\"" . $langu['fieldE'] . "\"</td></tr>";

    echo "</table></center><br><br></form>";
  }
  else
  {
    echo "<b>" . $langu['installu'] . "</b><br /><br />" . $langu['installu1'] . "<br /><br /><br />";
  }

  if(file_exists("../config.php"))
  { 
    if($mode == 'upgrade')
    {
      $dbhost      = 'localhost';
      $dbprefix    = 'phpbb_';
      echo "<form method=\"post\" action=\"install.php?step=3&lang=$language&mode=upgrade\"><br><br><center><table border=\"0\" width=\"80%\" cellspacing=\"2\" cellpadding=\"2\">";
      echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['fieldC'] . "</font></td>
   	    <td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"password\" value=\"$dbpass\" name=\"dbpass\" size=\"44\"></td>
          </tr>";
      echo "<tr height=\"30px\"><td colspan=\"2\" valign=\"center\" align=\"right\" bgcolor=\"#e0e0e0\"><input type=\"submit\" name=\"submit\" value=\"" . $langu['fieldF'] . "\"</td></tr>";
      echo "</table></center><br><br></form>";
    }
    else if($mode == 'update')
    {
      $dbhost      = 'localhost';
      $dbprefix    = 'phpbb_';
      echo "<form method=\"post\" action=\"install.php?step=3&lang=$language&mode=update\"><br><br><center><table border=\"0\" width=\"80%\" cellspacing=\"2\" cellpadding=\"2\">";
      echo "<tr>
    	    <td width=\"50%\" bgcolor=\"#f4f4f4\" align=\"right\"><font size=\"2\" face=\"Verdana\">" . $langu['fieldC'] . "</font></td>
   	    <td width=\"50%\" bgcolor=\"#f0f0f0\" align=\"left\"><input type=\"password\" value=\"$dbpass\" name=\"dbpass\" size=\"44\"></td>
          </tr>";
      echo "<tr height=\"30px\"><td colspan=\"2\" valign=\"center\" align=\"right\" bgcolor=\"#e0e0e0\"><input type=\"submit\" name=\"submit\" value=\"" . $langu['fieldF'] . "\"</td></tr>";
      echo "</table></center><br><br></form>";
    }
  }
  else
  {
    echo "<br /><br /><center><table border=\"1\" width=\"80%\" cellpadding=\"6\"><tr><td align=\"left\" bgcolor=\"#FFDFDF\">" . $langu['fieldD'] . "</td></tr></table><br /><br /></center>";
  }

?>
