<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$mysql_hostname = "localhost";//host name 
$mysql_user = "root";//user name
$mysql_password = "";//pass word
$mysql_database = "movies";//database name


/* Attempt to connect to MySQL database */
$link = mysqli_connect($mysql_hostname, $mysql_user , $mysql_password, $mysql_database);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<!-- 
Sumit#1990 -->