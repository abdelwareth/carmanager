<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>تسجيل المعلومات </title>
  <meta name="description" content="SlidesJS is a simple slideshow plugin for jQuery. Packed with a useful set of features to help novice and advanced developers alike create elegant and user-friendly slideshows.">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 <meta name="author" content="Nathan Searles">
  <script src="js/bootstrap.min"></script>
   <script src="jquery-3.0.0.min"></script>
  <meta name="viewport" content="width=device-width">
  <?php
session_start();

if(!isset($_SESSION['username'])) {
	
	header("Location:login.php");
	
	}
	


?>
 
  <link rel="stylesheet" href="css/example.css">
  </head> 
<body>
<?php




$path=$_FILES['upload']['tmp_name'];
$path1=$_FILES['upload1']['tmp_name'];
$path2=$_FILES['upload2']['tmp_name'];
$path3=$_FILES['upload3']['tmp_name'];
$path4=$_FILES['upload4']['tmp_name'];


$error=$_FILES['upload']['error']; 




	
	move_uploaded_file($path,"photos/Previous work0.jpg");
	move_uploaded_file($path1,"photos/Previous work1.jpg");
	move_uploaded_file($path2,"photos/Previous work2.jpg");
	move_uploaded_file($path3,"photos/Previous work3.jpg");
	move_uploaded_file($path4,"photos/Previous work4.jpg");



?>
   <div class="container-fluid">
   
   <form action="<?php echo $PHP_SELF; ?>" method="post" enctype="multipart/form-data" class="thumbnail-container" id="fo" >

<input type="hidden" name="MAX_FILE_SIZE" value="500000" />
<div class="form-group">
 <p id="p1"> insert your Previous work </p>
<label for="file">1</label>
<input type="file" class="form-control" name="upload"  />
<label for="file">2</label>
<input type="file"class="form-control" name="upload1"  />
<label for="file">3</label>
<input type="file" class="form-control"name="upload2"  />
<label for="file">4</label>
<input type="file" class="form-control"name="upload3"  />
<label for="file">5</label>
<input type="file" class="form-control"name="upload4"  />
</div>
<button type="submit" class="btn btn-info"  >upload</button>
</form>
<FORM role="form" METHOD="POST" ACTION="codes/cdata.PHP" class="thumbnail-container">
<div class="form-group">
 <p id="p2"> insert your data</p>
<label for="text">phone num</label>
<input  type="text" class="form-control" name="phone" id="1" > 
<label for="text">mob num</label>
<input  type="text" class="form-control" name="mob" id="2" > 
<label for="mail">@e-mail</label>
<input  type="mail" class="form-control" name="email" id="3" > 
<label for="text">address</label>
<input  type="text" class="form-control" name="add" id="4" > 
 <label for="text">other data</label>
  <textarea class="form-control" rows="4" name="od" ></textarea>
  </div>
<button type="submit" class="btn btn-success">insert</button>

</form>
</div>
</div>
<style>
#fo{
	margin-right:50px;
	margin-left:150px;
	
	
	}
.thumbnail-container {
 
  display: inline-block;
}
#p1{
font-size: 1em ;
    margin-top: 10px;
    margin-right: 50px;
    margin-left: 20px;
	margin-bottom : 10 px;
	
	padding-left: 70px ;
	padding-top : 15px ;
	padding-bottom : 15px ;
	padding-right : 0px;
    background-color : #f59a68 ;
color : #e5eecc ;}
button{
 width: 33em;  height: 4em;
	
	}
#p2 {


font-size: 1em ;
    margin-top: 10px;
    margin-right: 50px;
    margin-left: 20px;
	margin-bottom : 10px;
	
	padding-left: 100px ;
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