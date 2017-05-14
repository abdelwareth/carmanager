<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>about us </title>
  <meta name="description" content="SlidesJS is a simple slideshow plugin for jQuery. Packed with a useful set of features to help novice and advanced developers alike create elegant and user-friendly slideshows.">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 <meta name="author" content="Nathan Searles">
  <script src="js/bootstrap.min"></script>
   <script src="jquery/jquery-3.0.0.min"></script>
  <meta name="viewport" content="width=device-width">

 
  <link rel="stylesheet" href="css/example.css">


  <!-- SlidesJS Optional: If you'd like to use this design -->
  <style>
    body {
      -webkit-font-smoothing: antialiased;
      font: normal 15px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
      color: #232525;
      padding-top:70px;
    }

    #slides {
      display: none
    }

    #slides .slidesjs-navigation {
      margin-top:5px;  <!-- المسافه بين السلايدز والزرارير  -->
    }

    a.slidesjs-next,
    a.slidesjs-previous,
    a.slidesjs-play,
    a.slidesjs-stop {
    background-image: url(photos/btns-next-prev.png);<!-- زراير التنقل   -->
      background-repeat: no-repeat;
      display:block;
      width:12px;
      height:18px;
      overflow: hidden;
      text-indent: -9999px;
      float: left;
      margin-right:5px;
    }

    a.slidesjs-next {
      margin-right:10px;
      background-position: -12px 0;
    }

    a:hover.slidesjs-next {
      background-position: -12px -18px;
    }

    a.slidesjs-previous {
      background-position: 0 0;
    }

    a:hover.slidesjs-previous {
      background-position: 0 -18px;
    }

    a.slidesjs-play {
      width:15px;
      background-position: -25px 0;
    }

    a:hover.slidesjs-play {
      background-position: -25px -18px;
    }

    a.slidesjs-stop {
      width:18px;
      background-position: -41px 0;
    }

    a:hover.slidesjs-stop {
      background-position: -41px -18px;
    }

    .slidesjs-pagination {
      margin: 7px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(2.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }

    .navbar {
      overflow: hidden
    }
  </style>
  <!-- End SlidesJS Optional-->

  <!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
  <style>
  
    #slides {
      display: none
    }

    .container {
      margin: 0 auto
    }

    /* For tablets & smart phones */
    @media (max-width: 767px) {
      body {
        padding-left: 0px;
        padding-right: 0px;
      }
      .container {
        width: auto
      }
    }

    /* For smartphones */
    @media (max-width: 480px) {
      .container {
        width: auto
      }
    }

    /* For smaller displays like laptops */
    @media (min-width: 768px) and (max-width: 979px) {
      .container {
        width: 724px
      }
    }

    /* For larger displays */
    @media (min-width: 1200px) {
      .container {
        width: 1170px
      }
    }
  </style>
  <!-- SlidesJS Required: -->
</head>
<body>

  <!-- SlidesJS Required: Start Slides -->
  <!-- The container is used to define the width of the slideshow -->
    <div class="container-fluid">
  <div class="container">
  
    <div id="slides">
      <img src="photos/Previous work0.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/" >
      <img src="photos/Previous work1.jpg" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/" >
      <img src="photos/Previous work2.jpg" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/" >
      <img src="photos/Previous work3.jpg" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/" >
      <img src="photos/Previous work4.jpg" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/" >
    </div>
  </div>
  <!-- End SlidesJS Required: Start Slides -->

  <!-- SlidesJS Required: Link to jQuery -->
  <script src="jquery/jquery-3.0.0.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 1000,
        height: 400,
        play: {
          active: true,
          auto: true,
          interval: 2000,
          swap: true
        }
      });
    });
  </script>

<FORM role="form" METHOD="POST" ACTION="FILE.PHP" class="form">
<div class="form-group">
  <?php

$localhost="localhost";
$user="root";
$pass="root1234";
$db="carmanager";

$connect=mysqli_connect($localhost,$user,$pass,$db);
	

$sql="SELECT * FROM companydata where id=1 ";
$query=mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($query))
{
$s1 = $row['cadd'];
$s2 = $row['cphone'];
$s3 = $row['cmail'];
$s4 = $row['cmob'];
$s5 = $row['cod'];



		 ?>
<p id="add"> contact us </p>
<label for="text">phone num</label>
<input  type="text" class="form-control" name="firstname" id="1" placeholder="<?php echo $s2; ?>" readonly > 
 </div>
 <div class="form-group">
<label for="text">mob num</label>
<input  type="text" class="form-control" name="firstname" id="2" placeholder="<?php echo $s4; ?>" readonly> 
 </div>
 <div class="form-group">
<label for="text">@e-mail</label>
<input  type="text" class="form-control" name="firstname" id="3"placeholder="<?php echo $s3; ?>" readonly> 
 </div>
 <div class="form-group">
<label for="text">address</label>
<input  type="text" class="form-control" name="firstname" id="4" placeholder="<?php echo $s1; ?>" readonly> 
 </div>
 <div class="form-group">
 <label for="text">other data</label>
  <textarea class="form-control" rows="4" placeholder="<?php echo $s5; ?>" readonly ></textarea>
  <?php } ?>
  
 </div>



</form>

</div>

<p>
 <a href="http://www.facebook.com" target="_blank"><img src="photos/1.png" alt="Mountain View" style="width:50px;height:50px;"></a> 
<a href="http://www.twitter.com" target="_blank"><img src="photos/2.png" alt="Mountain View" style="width:50px;height:50px;"></a>
<a href="http://www.ask.fm" target="_blank"><img src="photos/3.png" alt="Mountain View" style="width:50px;height:50px;"></a>

 </p>
 





<style>
.form{
	display:inline-block;
	}
#add{


font-size: 1em ;
    margin-top: 10px;
    margin-right: 150px;
    margin-left: 140px;
	margin-bottom : 10px;
	font-weight:bold;
	padding-left: 130px ;
	padding-top : 15px ;
	padding-bottom : 15px ;
	padding-right : 130px;
    background-color:#03F;
color : #f59a68 ;
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







form  {
font-size: 1.5em ;
background-color: #e5eecc; 
    margin-top: 60px;
    margin-bottom:20px;
    margin-right: 200px;
    margin-left: 200px;
padding-right : 20px;
	padding-left: 30px ;
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

#h1:hover {color : blue ;
 
}


<style/>
</div>

</body>
</html>