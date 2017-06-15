<?php
session_start();
$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";

$connect=mysqli_connect($localhost,$user,$pass,$db);
	

$sql="SELECT * FROM ourcars ";
$query=mysqli_query($connect,$sql);		
$num=mysqli_num_rows($query); //يعد الصفوف الناتجه عن الكويري //
$sql1="SELECT * FROM ourcars where id='1'";
$query1=mysqli_query($connect,$sql1);		
 $array = array();
 $array[0]=$num;

while ($row=mysqli_fetch_array($query1)){
$array[1] = $row['feature1'];
$array[2] = $row['feature2'];
$array[3] = $row['feature3'];
$array[4] = $row['feature4'];
$array[5] = $row['feature5'];
$array[6] = $row['uname'];
$array[7] = $row['carsnum'];
			
}		
echo json_encode($array);
		
		
		
		
		

	
	

	
	
	
	
	
	
	
	



?>
