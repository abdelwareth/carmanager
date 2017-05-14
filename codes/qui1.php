<?php
$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";
$connect=mysqli_connect($localhost,$user,$pass,$db);
$sql="SELECT * FROM questions ";
$query=mysqli_query($connect,$sql);		
$num=mysqli_num_rows($query);

$id=(($num+1)*4*3*7-80);
 
echo $id ;


?> 