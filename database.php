<?php


$server = 'localhost';
$username = 'root';
$pass = '';
$db = 'web1';

$con = mysqli_connect($server, $username, $pass, $db);

 if($con == false){
 die ("Connection Error" . mysqli_connect_error())	;
}



?>