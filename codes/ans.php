<?php
session_start();
$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";

$connect=mysqli_connect($localhost,$user,$pass,$db);
	

$sql="SELECT * FROM questions where state='0' ";
$query=mysqli_query($connect,$sql);		
$num=mysqli_num_rows($query); //يعد الصفوف الناتجه عن الكويري //
		
echo $num ;
		
		
		
		
		

	
	

	
	
	
	
	
	
	
	



?>