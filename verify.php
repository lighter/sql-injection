<?
session_start();
include('db_conn.php');
$okay     = 0;
$username = $_POST['user'];
$pw       = $_POST['pw'];

// version 1
// use "' or '1'='1" will pass
// $sql      = "select count(*) as ctr from user where u_account='".$username."' and u_pass='". $pw."' limit 1";

// version 2
// use mysql_real_escape_string
$sql      = "select count(*) as ctr from user where u_account='".mysql_real_escape_string($username)."' and u_pass='".mysql_real_escape_string($pw)."' limit 1";

$result   = mysql_query($sql);

while ($data = mysql_fetch_array($result)){
  if ($data['ctr'] == 1){
    //they're okay to enter the application!
    $okay = 1;
  }
}

// echo $sql;

if($okay){
  $_SESSION['loginokay'] = true;
  header("Location:ok.php");
}
else{
  header("Location:index.php");
}
