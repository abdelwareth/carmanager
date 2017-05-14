<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>quistions </title>
  <meta name="description" content="SlidesJS is a simple slideshow plugin for jQuery. Packed with a useful set of features to help novice and advanced developers alike create elegant and user-friendly slideshows.">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 <meta name="author" content="Nathan Searles">
  <script src="js/bootstrap.min"></script>
   <script src="jquery-3.0.0.min"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width">
       <script>
	   
       /*عمل متغير يخزن فيه قيمة التاريخ وبعدين بالداله بوست راح قاله ان التاريخ اللي هناك                                   هو التاريخ دا وقاله استرجعلي الداتا اللي هترجعها في الشات وبس كدا ودالة تريم                                                                                     لحذف المسافات والتاب  */
             

               $.post("codes/qui1.php",{},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {

                           $("#id3").val(data);
                       }
                   });

    
	

       </script>

 
  <link rel="stylesheet" href="css/example.css">
  </head> 
<body>
<div class="container-fluid">
<FORM role="form" class="form2">
<div class="form-group">
<p class="title" > get your answer </p>
<label for="text">id<p id="error">  </p></label>
<input  type="text" class="form-control" name="ido" id="ido" onChange="idTest(arguments[0]||event)"> 
 <label for="text">answer</label>
  <textarea class="form-control" name="s6" rows="5" id="ans" readonly ></textarea>
  <button type="button" class="btn btn-success" id="get">get</button>
 </div>



</form>
</div>
       <script>
           function idTest(){ /*عمل متغير يخزن فيه قيمة التاريخ وبعدين بالداله بوست راح قاله ان التاريخ اللي هناك                                   هو التاريخ دا وقاله استرجعلي الداتا اللي هترجعها في الشات وبس كدا ودالة تريم                                                                                     لحذف المسافات والتاب  */
               var ido=$("#ido").val();

               $.post("codes/qui3.php",{ido:ido},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
                           $("#error").text(data);
						   if(data=="id is right")
						   {
							   $("#error").css("color", "green")
							   }
							 else if(data=="id is wrong")
						   {
							   $("#error").css("color", "red")
							   }
						   $("#error").show();
                       }
                   });

           }
		   </script>
           <script>
		   $("#get").click(function(){
               var ido=$("#ido").val();

               $.post("codes/qui4.php",{ido:ido},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
                           $("#ans").val(data);
                       }
                   });

           
    });


       </script>

   <div class="container-fluid">

<FORM role="form" METHOD="POST" action="codes/qui2.php" class="form1">
<div class="form-group">
<p class="title"> insert your quistion </p>
<label for="text" id="id2" >your id is </label> 
<input  type="text" class="form-control" name="idq" id="id3"  readonly > 
<label for="text" id="qui1">your quistion</label>
<input  type="text" class="form-control" name="quistion" id="qui2" >

<button type='submit' class="btn btn-success" id="btn">insert</button> 

 </div>



</form>

  

<style >
.form1{display:inline-block;}
.form2{display:inline-block;}

#error{
	
	color:#F00;
	display:none;
	
	}
.title {


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
    margin-right: 400px;
    margin-left: 350px;
padding-right : 20px;
	padding-left: 30px ;
	padding-top : 20px ;
	padding-bottom : 20px ;
	border-radius: 25px ;
    width:500px;
}     
form:hover {
background-color : gray ;

}
button{
width: 33em;  height: 4em;
margin-top: 30px;
}
</style>
 </div>
</body>
</html>