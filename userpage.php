<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>user</title>
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
   <div class="container-fluid">
      <div id="h2" class="col-sm-12">
<div class="row" id= "h1">

<button type="submit" class="btn btn-info"id="data0" onclick="location.href='http://localhost/carmanager/cdata.php'">data of company <img src="photos/1.jpg" alt="image" class="img-circle"> </button>
<button type="submit" class="btn btn-info"id="data1" onclick="location.href='http://localhost/carmanager/addcar.php'"> cars we have <img src="photos/3.jpg" alt="image" class="img-circle"> </button>
<button type="submit" class="btn btn-info"id="data2" onclick="location.href='file:///F:/web/%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D9%85%D8%B9%D9%85%D9%84%20%D8%A7%D9%84%D8%AA%D8%AD%D8%A7%D9%84%D9%8A%D9%84/%D8%AA%D8%B3%D8%AC%D9%8A%D9%84%D8%A7%D8%AA/%D8%AA%D8%B3%D8%AC%D9%8A%D9%84%20%D8%B9%D9%85%D9%8A%D9%84/new%201.html'">insert new clients <img src="photos/21.jpg" alt="image" class="img-circle"> </button>
<button type="submit" class="btn btn-info"id="data3" onclick="location.href='http://localhost/carmanager/ans.php'">answer quistions <img src="photos/24.jpg" alt="image" class="img-circle"></button>
<button type="submit" class="btn btn-info"id="data7"onclick="location.href='file:///F:/web/%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D9%85%D8%B9%D9%85%D9%84%20%D8%A7%D9%84%D8%AA%D8%AD%D8%A7%D9%84%D9%8A%D9%84/%D8%AA%D8%B3%D8%AC%D9%8A%D9%84%D8%A7%D8%AA/%D8%AA%D8%B3%D8%AC%D9%8A%D9%84%20%D8%AD%D8%AC%D8%B2/new%201.html'"> add reservations <img src="photos/22.png" alt="image" class="img-circle"></button>

<button type="submit" class="btn btn-info"id="data8"onclick="location.href='file:///F:/web/%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D9%85%D8%B9%D9%85%D9%84%20%D8%A7%D9%84%D8%AA%D8%AD%D8%A7%D9%84%D9%8A%D9%84/%D9%85%D8%B9%D8%A7%D9%85%D9%84%D8%A7%D8%AA%20%D9%85%D8%A7%D9%84%D9%8A%D9%87/new%201.html'"> banknotes deals <img src="photos/28.jpg" alt="image" class="img-circle"></button>
<button type="submit" class="btn btn-info"id="data6"onclick="location.href='file:///F:/web/%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D9%85%D8%B9%D9%85%D9%84%20%D8%A7%D9%84%D8%AA%D8%AD%D8%A7%D9%84%D9%8A%D9%84/%D8%AA%D9%82%D8%A7%D8%B1%D9%8A%D8%B1/new%201.html'"> Combined reports  <img src="photos/27.jpg" alt="image" class="img-circle"></button>
</div>
</div>
<button type="submit" class="btn btn-info"id="data9"onclick="location.href='file:///F:/web/%D9%85%D8%B4%D8%B1%D9%88%D8%B9%20%D9%85%D8%B9%D9%85%D9%84%20%D8%A7%D9%84%D8%AA%D8%AD%D8%A7%D9%84%D9%8A%D9%84/%D8%A7%D8%AF%D8%A7%D8%B1%D8%A9%20%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D8%AE%D8%AF%D9%85%D9%8A%D9%86/new%201.html'"> users management <img src="photos/29.jpg" alt="image" class="img-circle"></button>
<button type="submit" class="btn btn-info"id="data10" title="log out" onClick="location.href='http://localhost/carmanager/codes/logout.php'">  <img src="photos/30.jpg" alt="image" class="img-circle"  ></button>

</div>


<style>
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

  #h1{
  margin-top:20px;
  margin-left:20px;
  }   
#data0{
margin-top : 10px;
padding:0px;
border-radius: 50px;
padding-left:10px;

}  
#data1{
margin-top : 10px;
padding:0px;
border-radius: 50px;
padding-left:5px;
}
#data2{
margin-top : 10px;
padding:0px;
border-radius: 50px;
padding-left:5px;
}
#data3{
margin-top : 10px;
padding:0px;
border-radius: 50px;
padding-left:5px;
}
#data4{
margin-top : 10px;
padding:0px;
border-radius: 50px;
padding-left:5px;

}
#data5{
margin-top : 10px;
padding:0px;
border-radius: 50px;
padding-left:5px;

}
#data6{
margin-top : 10px;
padding:0px;
border-radius: 50px;
padding-left:5px;
}
#data7{
margin-top : 10px;
padding:0px;
border-radius: 50px;
padding-left:5px;
}
#data8{
margin-top : 10px;
padding:0px;
border-radius: 50px;
padding-left:5px;
}
#data9{
margin-top :250px;
margin-left:1000px;
padding:0px;
border-radius: 50px;
padding-left:5px;
}
#data10{
margin-top : -120px;

padding:0px;

border-radius: 50px;
}



</style>
 </div>
</body>
</html>