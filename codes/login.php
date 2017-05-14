<?php
session_start();
$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";

$connect=mysqli_connect($localhost,$user,$pass,$db);
	
$username=$_POST['uname'];
$password=$_POST['password'];
$sql="SELECT * FROM users WHERE name='$username' and pass='$password' ";
$query=mysqli_query($connect,$sql);		
$num=mysqli_num_rows($query); //يعد الصفوف الناتجه عن الكويري //
		
		if($num==1){
			
			$_SESSION['username']="username"; //يسجل الجلسه //
			$_SESSION['password']="password";
			header("Location:http://localhost/carmanager/userpage.php"); //الصفحه اللي هيفتحها //
			
			}
			
			else {
				
				header("Location:http://localhost/carmanager/login1.php");
				
				}
		
		
		
		
		

	
	

	
	
	
	
	
	
	
	



?>