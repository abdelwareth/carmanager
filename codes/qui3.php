<?php
$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";
$qid =$_REQUEST["ido"];
$connect=mysqli_connect($localhost,$user,$pass,$db);
$sql="SELECT * FROM questions where qid='$qid' ";
$query=mysqli_query($connect,$sql);		
$num=mysqli_num_rows($query);
if($num==1){
	echo "id is right";
	
	}
 else {
echo "id is wrong" ;
 }

?> 