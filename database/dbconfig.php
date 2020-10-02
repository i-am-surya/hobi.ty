<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "accounts";

$connection = mysqli_connect($server,$user,$password,$db);

$dbconfig = mysqli_select_db($connection,$db);

if($dbconfig)
{
//   echo 'Database Connected !';
}
else
{
  echo 'Database Connection Failed !';
}
?>