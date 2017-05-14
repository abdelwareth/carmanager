  <?php

$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";

$connect=mysqli_connect($localhost,$user,$pass,$db);
$dname=$_POST['dname'];
$cname =$_POST['cname'];	
$pyear=$_POST['pyear'];
$od1=$_POST['fea1'];
$od2=$_POST['fea2'];
$od3=$_POST['fea3'];
$od4=$_POST['fea4'];
$od5=$_POST['fea5'];
$path=$_FILES['file']['tmp_name'];
$error=$_FILES['upload']['error']; 

$ttid="select * from ourcars";
$query3=mysqli_query($connect,$ttid);
$num=(mysqli_num_rows($query3))+1;
move_uploaded_file($path,"C:\AppServ\www\carmanager\cars/$num.jpg");

$sql="insert into ourcars(mname,uname,pyear,feature1,feature2,feature3,feature4,feature5) values ('$cname','$dname','$pyear','$od1','$od2','$od3','$od4','$od5') ";
$query=mysqli_query($connect,$sql);
if($query){
	
	header("Location:http://localhost/carmanager/addcar.php");
	
	}
else {
	echo" error occured";
	}
