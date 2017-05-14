<?php
$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";
$connect=mysqli_connect($localhost,$user,$pass,$db);
$qid =$_REQUEST["ido"];
$sql=" SELECT * FROM questions ";
$query1=mysqli_query($connect,$sql); 

while ($row=mysqli_fetch_array($query1)){

	
	if ($row['qid']==$qid){
		if ($row['state']==0){
			echo "your question havn't answered yet";
			
			}
		else {
			echo $row['answer'];
			}
		}
	
	else {}
	}

?> 