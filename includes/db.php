<?php
session_start();
try{
$con = new PDO("mysql:host=localhost;dbname=login","root","yinyin");
}
catch (PDOException $e)
{
	echo "Error".$e->getMessage();
}


?>
