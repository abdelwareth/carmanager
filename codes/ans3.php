<?php
$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";
$connect=mysqli_connect($localhost,$user,$pass,$db);
$sql="SELECT ask FROM questions where state='0' ";
$query=mysqli_query($connect,$sql);		
$qid =$_REQUEST["data"];

$array = array();

while($row = mysqli_fetch_assoc($query)){

$array[] = $row['ask'];

}
		
$result = count($array);
if($result<intval($qid)){
	echo 0 ;
	}
else {
	echo 	"3";
	}
?> 