<?php
$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";
$connect=mysqli_connect($localhost,$user,$pass,$db);
	
$quistion =$_POST['quistion'];
$id=$_POST['idq'];

$sql="insert into questions (qid,ask,answer,state) values ('$id','$quistion','','0')";
$query1=mysqli_query($connect,$sql); 
if($query1){
header("Location:http://localhost/carmanager/quistions.php");
}
else {
	
	echo $id;
	
	}

?> 