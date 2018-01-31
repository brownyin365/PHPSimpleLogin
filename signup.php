<?php
include("includes/db.php");

if(isset($_POST['signup'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	
	$insert = $con->prepare("INSERT INTO users(name,email,pass)
	
	values(:name, :email, :pass )");
	
	$insert->bindParam(':name',$name);
		
	$insert->bindParam(':email',$email);
		
	$insert->bindParam(':pass',$pass);
	$results = $insert->execute();
	
	if($results) {
		echo "Registered Succesfully!";
	}
  
}
?>