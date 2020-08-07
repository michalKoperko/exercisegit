<?php

require_once "connect.php";

$mysqli= new mysqli($servername, $username, $password, $db_name);

if($mysqli->connect_errno){
	echo "bug connect";
	exit();
}

else{
	$login=$_POST['login'];
	$passw=$_POST['password'];

echo "Working";


//$sql="SELECT  WHERE $login='nick' AND $pass='password' FROM User";

$mysqli->close();
}


echo "to bedzie w second commit";

echo "Rest Api is creating";


echo "working";
?>