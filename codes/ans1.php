<?php
session_start();
$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";

$connect=mysqli_connect($localhost,$user,$pass,$db);
	

$sql="SELECT ask FROM questions where state='0' ";
$query=mysqli_query($connect,$sql);		


$array = array();

while($row = mysqli_fetch_assoc($query)){

$array[] = $row['ask'];

}		
		


echo 	$array[0];

	
	
	
	
	
	
	
	



?>