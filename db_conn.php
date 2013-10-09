<?
	$DB_HOST = "localhost";
	$DB_LOGIN = "root";
	$DB_PASSWORD = "password";
	$DB_NAME= "test";
 	// $mysqli = new mysqli($DB_HOST, $DB_LOGIN, $DB_PASSWORD, $DB_NAME);
 	// $mysqli->set_charset("utf8");

  $conn = mysql_connect($DB_HOST, $DB_LOGIN,  $DB_PASSWORD);
  mysql_select_db($DB_NAME);
  mysql_set_charset('utf8', $conn);
?>