  <?php

$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";

$connect=mysqli_connect($localhost,$user,$pass,$db);
	
$phone=$_POST['phone'];
$mob=$_POST['mob'];
$mail=$_POST['email'];
$add=$_POST['add'];
$od=$_POST['od'];


$sql="update companydata set cphone='$phone',cmob='$mob',cmail='$mail',cadd='$add',cod='$od'  where id=1 ";
$query=mysqli_query($connect,$sql);

if($query){
	
	header("Location:http://localhost/carmanager/cdata.php");
	
	}
else {
	echo" error occured";
	}


		 ?>