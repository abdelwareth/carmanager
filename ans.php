<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>answer </title>
  <meta name="description" content="SlidesJS is a simple slideshow plugin for jQuery. Packed with a useful set of features to help novice and advanced developers alike create elegant and user-friendly slideshows.">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 <meta name="author" content="Nathan Searles">
  <script src="js/bootstrap.min"></script>
   <script src="jquery-3.0.0.min"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width">
    <?php
session_start();

if(!isset($_SESSION['username'])) {
	
	header("Location:login.php");
	
	}
	


?>
       <script>
	   
       /*عمل متغير يخزن فيه قيمة التاريخ وبعدين بالداله بوست راح قاله ان التاريخ اللي هناك                                   هو التاريخ دا وقاله استرجعلي الداتا اللي هترجعها في الشات وبس كدا ودالة تريم                                                                                     لحذف المسافات والتاب  */
             

               $.post("codes/ans.php",{},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {

                           $("#id3").val(data);
						   if(data==0){
							   $("#id2").val(0);
							    document.getElementById("nxt").disabled = true;
							   }
							   
                       }
                   });

                   $.post("codes/ans1.php",{},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {

                           $("#id4").val(data);
                       }
                   });
	

       </script>

 
  <link rel="stylesheet" href="css/example.css">
  </head> 
<body>


   <div class="container-fluid">

<FORM role="form" METHOD="POST" id="form" class="h" >
<div class="form-group">
<div class="a">
<label for="text" id="qui1">qui num</label>
<input  type="text" class="form-control"  id="id2" value="1" readonly>
</div>
<div class="a">
<label for="text"  >of </label> 
<input  type="text" class="form-control"  id="id3"  readonly > 
</div>
</div>
</form>
<form METHOD="POST" action="codes/ans4.php" id="form1" class="j">
<label for="text" id="qui1">quistion</label>
<input  type="text" class="form-control" name="quistion" id="id4" value="1" readonly>

<label for="text"  >answer </label> 
 <textarea class="form-control" name="idq" rows="5" id="ans"  ></textarea>
<button type='submit' class="btn btn-success" id="btn">insert</button>
</form>
<form role="form" id="form" class="k">
<button type='button' class="btn btn-info" id="prev" disabled>prev</button>
<button type='button' class="btn btn-success" id="nxt">next</button>

</form>  
<script>

$('#nxt').click(function(){
	var p =(parseInt($('#id2').val(), 10)+1);
   document.getElementById("prev").disabled = false;
		               $.post("codes/ans3.php",{data:(p+1)},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          if(data==0){
							  document.getElementById("nxt").disabled = true;
							  }
						
							 $('#id2').val(p);
								  
                       }
					   
                   });
				     $.post("codes/ans2.php",{data:(p+1)},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {

                           $("#id4").val(data);
                       }
                   });

}

);
</script>
<script>

$('#prev').click(function(){
	var p =(parseInt($('#id2').val(), 10)-1);
		document.getElementById("nxt").disabled = false;
	if(p<=1){
		document.getElementById("prev").disabled = true;
		}
		
$('#id2').val(p);
				     $.post("codes/ans2.php",{data:(p+1)},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {

                           $("#id4").val(data);
                       }
                   });
}

);
</script>
<script>
$(".hover img").hover(function() {
	var p =(parseInt($('#id2').val(), 10));
	         $.post("codes/carfeature.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
							 $(".hover p").text(data);	  
                       }
                   });
     
        $(".hover p").fadeIn(200);
    }, function () {

        $(".hover p").fadeOut(200);

    });
	
	
</script>
<style translationtype="control-label" >
#btn{
width: 33em;  height: 4em;
margin-top: 30px;
}
.h{display: inline-block;}
.j{display: inline-block;}
.k{display: inline-block;}
.a {

  margin-top: 15px;

  display: inline-block;
}
#id2{
	
	width:100px;}
	#id3{
		
		width:100px;}


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
 #form1  {
font-size: 1.5em ;
background-color: silver; 
    margin-top: 30px;
    margin-bottom:20px;
    margin-right: 400px;
    margin-left: 350px;
padding-right : 20px;
	padding-left: 30px ;
	padding-top : 20px ;
	padding-bottom : 20px ;
	border-radius: 25px ;

}
 #form  {
font-size: 1.5em ;
background-color: silver; 
    margin-top: 30px;
    margin-bottom:20px;
    margin-right: 600px;
    margin-left: 450px;
padding-right : 20px;
	padding-left: 30px ;
	padding-top : 20px ;
	padding-bottom : 20px ;
	border-radius: 25px ;

}     
form:hover {
background-color : gray ;

}
button{
width: 7em;  height: 4em;
margin-top: 30px;

}
</style>
 </div>
</body>
</html>