<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min"></script>
  <script src="jquery/jquery-3.0.0.min"></script>
  <?php
session_start();

if(isset($_SESSION['username'])) {
	
	header("Location:userpage.php");
	
	}
	


?>
<script>

alert (" error of password or user name");

</script>


<style>

</style>
<title>
carmanager
</title> 
</head>

<body>

<div class="container-fluid">

<div class="row">
   <div id="h2" class="col-sm-4">
<h2> <img src="photos/4.jpg" alt="Mountain View" style="width:500px;height:75px;"> </h2>
</div>
</div>
<FORM role="form" METHOD="POST" ACTION="codes/login.php" class="form">
<div class="form-group">
<p id="add"> our users </p>

<label for="text">user name</label>
<input  type="text" class="form-control" name="uname" id="1" > 
 <label for="password">password </label>
<input  type="password" class="form-control" name="password" id="2" >
 </div>
 


<button type="submit" class="btn btn-info" id="button" >log in</button>

</form>

</div>

 





<style>
.form{ display:inline-block;}
#add {


font-size: 1em ;
    margin-top: 10px;
    margin-right: 50px;
    margin-left: 50px;
	margin-bottom : 10px;
	
	padding-left: 110px ;
	padding-top : 15px ;
	padding-bottom : 15px ;
	padding-right : 0px;
    background-color : #f59a68 ;
color : white ;
}

#data{
margin-top : 10px;
padding:0px;
border-radius: 50px;
padding-left:5px;
margin-left:20px;
}  
#data1{
margin-top : 10px;
padding:0px;
border-radius: 50px;
padding-left:5px;
margin-left:20px;
}
#a:hover {
background-color : #e11555;
}
#b:hover {
background-color : #e11555;
}
#a {


font-size: 1.5em ;
    margin-top: 10px;
    margin-right: 10px;
    margin-left: 10px;
	margin-bottom : 50px;
	
	padding-left: 0px ;
	padding-top : 0px ;
	padding-bottom : 0px ;
	padding-right : 0px;


}
#b {


font-size: 1.5em ;
    margin-top: 10px;
    margin-right: 100px;
    margin-left: 0px;
	margin-bottom : 0px;
	
	padding-left: 0px ;
	padding-top : 0px ;
	padding-bottom : 0px ;
	padding-right : 0px;


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
    background-size: cover ;

} 




form  {
font-size: 1.5em ;
background-color: #e5eecc; 
    margin-top: 30px;
    margin-bottom:30px;
    margin-right: 450px;
    margin-left: 400px;
padding-right : 32px;
	padding-left: 28px ;
	padding-top : 20px ;
	padding-bottom : 20px ;
	border-radius: 25px ; 
	 

}
a:link {
    color: blue;
}

a:visited {
    color: red;
}

a:hover {
    color: green;
}


a:active {
    color: silver;
}
a:link {
    background-color: pink;
}

a:visited {
    background-color: pink;
}

a:hover {
    background-color: lightgreen;
}



form:hover {
background-color :#E0F3AC; }


#h2 {

   
 color: silver;
    text-shadow: 5px 5px 10px #000000;
	margin-left : 450px ;
	margin-right :-1000px;
	margin-top : 10px;
	padding-left: 55px ;
	padding-bottom: 40px;
	padding-top : 20px ;
	border-radius: 25px ;
	
}

#button{

width: 29em;  height: 4em;
}




<style/>

</div>

</body>

</html>