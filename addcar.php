<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> add car </title>
  <meta name="description" content="SlidesJS is a simple slideshow plugin for jQuery. Packed with a useful set of features to help novice and advanced developers alike create elegant and user-friendly slideshows.">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 <meta name="author" content="Nathan Searles">
  <script src="js/bootstrap.min"></script>
   <script src="jquery/jquery-3.0.0.min"></script>
  <meta name="viewport" content="width=device-width">

 
  <link rel="stylesheet" href="css/example.css">
    <?php
session_start();

if(!isset($_SESSION['username'])) {
	
	header("Location:login.php");
	
	}
	


?>
  </head> 
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
   <div class="container-fluid">
 
<FORM role="form" METHOD="POST" ACTION="codes/addcar.PHP" enctype="multipart/form-data" class="form" >
 <div class="form-group">
 <p> insert car </p>
<label for="file"> car photo </label>
<input  type="file" class="form-control" name="file" id="4" >  
<div class="thumbnail-container">


<label for="text">model name</label>
<input  type="text" class="form-control" name="cname" id="c" >
</div>
 <div class="thumbnail-container">
 
<?php

$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";

$connect=mysqli_connect($localhost,$user,$pass,$db);
$sc = "SELECT * FROM carmodels  ";

$qc = mysqli_query($connect,$sc);


echo '<select class="form-control"   id="sel" >';
	echo '<option> </option>' ;
while($row=mysqli_fetch_array($qc))
{

	
    echo '<option name="n" value="' . htmlspecialchars($row['mname']) . '">' 
        . htmlspecialchars($row['mname']) 
        . '</option>';
}
echo '</select>';


?>
 </div>
 
<div class="thumb">
<label for="text"> car unique name</label>
<input  type="text" class="form-control" name="dname" id="d" > 
</div>
<div class="thumb">
<label for="text"> product year</label>
<input  type="text" class="form-control" name="pyear" id="sel1" >

</div>

 
 <label for="text"> feature1 </label>
<input  type="text" class="form-control" name="fea1" id="fea" >
 <label for="text"> feature2 </label>
<input  type="text" class="form-control" name="fea2" id="fea" >
 <label for="text"> feature3 </label>
<input  type="text" class="form-control" name="fea3" id="fea" >
 <label for="text"> feature4 </label>
<input  type="text" class="form-control" name="fea4" id="fea" >
 <label for="text"> feature5 </label>
<input  type="text" class="form-control" name="fea5" id="fea" >
<button type="submit" class="btn btn-success"  >insert</button>
</div> 
</form>

<script>   
   $('#sel').change(function(){
  var qty = $('#sel').val();
 
  $("#c").val(qty);
});
</script>



  
       
<style>
.form{display: inline-block;}
.thumbnail-container {

  margin-top: 15px;

  display: inline-block;
}
.thumb {

  margin-top: 15px;

  display: inline-block;
}
#c{
	width:340px;}

#sel{
width:100px;
	}
	#d{
	
	width:300px;}

#sel1{
width:100px;
	}
	#n{
	
	width:340px;}

#m{
width:100px;
	}
	#tc{
	width : 100px;
	}
	#sl2{
	width:10px;	
		}
	#t{width:200px;}	
button{
 width: 33em;  height: 4em;
	margin-top:15px;
	}
p {


font-size: 1em ;
    margin-top: 10px;
    margin-right: 50px;
    margin-left: 20px;
	margin-bottom : 10px;
	
	padding-left: 135px ;
	padding-top : 15px ;
	padding-bottom : 15px ;
	padding-right : 0px;
    background-color : #f59a68 ;
color : #e5eecc ;
}
@-webkit-keyframes example {
 0%   {  background-image: url("photos/11.jpg   "  )  ;}
   25%   {  background-image: url("photos/14.jpg " )  ;}
    50%  {  background-image: url("photos/12.jpg   " )  ;}
    75%  {  background-image: url("photos/15.jpg   " )  ;}
    100% {  background-image: url("photos/13.jpg  " )  ;}  
}

/* Standard syntax */
@keyframes example {
   0%   {  background-image: url("photos/11.jpg   " )  ;}
   25%  {  background-image: url("photos/12.jpg  " )  ;}
    50%  {  background-image: url("photos/14.jpg   " )  ;}
	    75%  {  background-image: url("photos/15.jpg  " )  ;}
  100% {  background-image: url("photos/13.jpg  " )  ;}  
}
body {


    animation-name: example;
    animation-duration: 50s;

	   -webkit-animation-name: example;
    -webkit-animation-duration: 15s;
	-webkit-animation-iteration-count: infinite;
	
	 background-repeat: no-repeat;
  	 background-size:cover; 
} 

 form  {
font-size: 1.5em ;
background-color: silver; 
    margin-top: 30px;
    margin-bottom:20px;
    margin-right: 450px;
    margin-left: 350px;
padding-right : 20px;
	padding-left: 30px ;
	padding-top : 20px ;
	padding-bottom : 20px ;
	border-radius: 25px ;

}     
form:hover {
background-color : gray ;

}
        
</style>
 </div>
</body>
</html>