<?php
session_start();

mysql_connect ("sql7.freemysqlhosting.net", "sql7244842", "eGJgyzvH8p");
mysql_select_db("sql7244842");

$username = mysql_escape_string($_GET['username']);
$password = mysql_escape_string($_GET['password']);

$squery = mysql_query("SELECT username, password FROM Users WHERE username = '$username' LIMIT 1"); 
$query = mysql_fetch_array($squery);
$rowcount = mysql_num_rows($squery); 
     
if($rowcount == 1)
{
	if($password != $query['password'])
		echo'NotLogined';
	else
		echo 'Logined';
}
else
	echo 'Account not registred';
?>
