<?php
$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";
$connect=mysqli_connect($localhost,$user,$pass,$db);
	
$quistion =$_POST['quistion'];
$ans=$_POST['idq'];

$sql="select * from questions where ask='$quistion'";
$query1=mysqli_query($connect,$sql); 
$array = array();

while($row = mysqli_fetch_assoc($query1)){

$array[] = $row['qid'];

}

if($query1){

for($i=0;$i<count($array);$i++){
	$idd=($array[$i]);
$sqlup="update questions set answer='$ans',state='3' where qid='$idd' ";	
	$queryup=mysqli_query($connect,$sqlup);
	
	}
	if($queryup){
header("Location:http://localhost/carmanager/ans.php");
}
else {
	echo" error occured";
	}

}


?> 