<?php
$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";
$connect=mysqli_connect($localhost,$user,$pass,$db);
$qid =$_REQUEST["data"];
$sql="SELECT * FROM ourcars where id='$qid'";
$query=mysqli_query($connect,$sql);		
$num=mysqli_num_rows($query); 
		
echo $num ;

?> 