<?php
$host="localhost";
$user="phpmyadmin";
$pass="Thechamp123#";
$db="nasaspace";
$cont=mysqli_connect($host,$user,$pass,$db);
if(isset($cont))
{
	echo "connected"."<br>";
}
else{
	echo "not connected";
}
?>