<?php
  
	$db_host = "pc-uebung.pc.funpicsql.de";		# Der Datenbank-Host
    $db_user = "mysql1055381";            # Der Datenbank-Benutzer
    $db_password = "pc-uebung";          		# Das Passwort für die Datenbank
    $db_name = "mysql1055381";              # Der Datenbank-Name

	$conn = mysql_connect($db_host,$db_user,$db_password) or die (mysql_error()); 
	mysql_select_db($db_name, $conn) or die (mysql_error()); 
  
?>