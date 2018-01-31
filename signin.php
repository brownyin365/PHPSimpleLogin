<?php
include("includes/db.php");

if(isset($_POST['signin'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
    $select = $con->prepare("SELECT * FROM users WHERE email = :email and pass = :pass");
	
	$select->bindParam(':email',$email);
	$select->bindParam(':pass',$pass);
    
	$select->setFetchMode(PDO::FETCH_ASSOC);
	
	$select->execute();
	
	 $data = $select->fetch();
	 
	
	if($data['email']!=$email && $data['pass']!=$pass)
	{
		echo "Invalid email or pass";
	}
	elseif($data['email']==$email && $data['pass']==$pass){
		$_SESSION['email']=$data['email'];
		$_SESSION['name']=$data['name'];
		
		header("location:profile.php");	
	}

} 
?>