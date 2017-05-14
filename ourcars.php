<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>cars </title>
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
             

               $.post("codes/carnums.php",{},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {

                           $("#id3").val(data);
						   if(data==0){
							   $("#id2").val(0);
							    document.getElementById("nxt").disabled = true;
								document.getElementById("img").disabled = true;
							   }
							   
                       }
                   });

    


       </script>
               <script>
			  
	this.a;
	this.b;
	this.c;
    this.d;
	this.e;
	this.f;
	
	         $.post("codes/carfeature1.php",{data:1},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          a =data;
								  
                       }
                   });
				      $.post("codes/carfeature2.php",{data:1},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
							 b=data;  
                       }
                   });
        $.post("codes/carfeature3.php",{data:1},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
							 c=data;	  
                       }
                   });
				   
				      $.post("codes/carfeature4.php",{data:1},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
						d=data;	  
                       }});
			      $.post("codes/carfeature5.php",{data:1},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
						e=data;	  
                       }
                   });
				   	      $.post("codes/carname.php",{data:1},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
						f=data;	  
                       }
                   }); 
 </script>

  <link rel="stylesheet" href="css/example.css">
  </head> 
<body>


   <div class="container-fluid">

<FORM role="form" METHOD="POST" class="form1">
<div class="form-group">
<div class="a">
<label for="text" id="qui1">carnum</label>
<input  type="text" class="form-control" name="quistion" id="id2" value="1" readonly>
</div>
<div class="a">
<label for="text"  >of </label> 
<input  type="text" class="form-control" name="idq" id="id3"  readonly > 
</div>
</div>
</form>
<div id="photos">
<div class="hover">
<img id="img" src="http://localhost/carmanager /cars/1.jpg"/>
<p id="header"> </p>
</div>
</div>
<form role="form" class="form2">
<button type='button' class="btn btn-info" id="prev" disabled>prev</button>
<button type='button' class="btn btn-success" id="nxt">next</button>

</form>  
<script>

$('#nxt').click(function(){
	var p =(parseInt($('#id2').val(), 10)+1);
	  $('body').css({'background-image': 'url(http://localhost/carmanager/cars/'+p+'.jpg)','background-repeat': 'no-repeat'});
   document.getElementById("prev").disabled = false;
		               $.post("codes/carnums1.php",{data:(p+1)},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          if(data==0){
							  document.getElementById("nxt").disabled = true;
							  }
							 
								  	 var pic =document.getElementById("img");
                                    pic.src='http://localhost/carmanager /cars/'+p+'.jpg';
                                    $('#id2').val(p);   }
                   });
	
	         $.post("codes/carfeature1.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          a =data;
								  
                       }
                   });
				      $.post("codes/carfeature2.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
							 b=data;  
                       }
                   });
        $.post("codes/carfeature3.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
							 c=data;	  
                       }
                   });
				      $.post("codes/carfeature4.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
						d=data;	  
                       }
                   });
				   				      $.post("codes/carfeature5.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
						e=data;	  
                       }
                   });
                     	      $.post("codes/carname.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
						f=data;	  
                       }
                   });   

}

);
</script>
<script>

$('#prev').click(function(){
	var p =(parseInt($('#id2').val(), 10)-1);
	  $('body').css({'background-image': 'url(http://localhost/carmanager/cars/'+p+'.jpg)','background-repeat': 'no-repeat'});
		document.getElementById("nxt").disabled = false;
	if(p<=1){
		document.getElementById("prev").disabled = true;
		}
	 var pic =document.getElementById("img");
     pic.src='http://localhost/carmanager /cars/'+p+'.jpg';
$('#id2').val(p);
	
	
	         $.post("codes/carfeature1.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          a =data;
								  
                       }
                   });
				      $.post("codes/carfeature2.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
							 b=data;  
                       }
                   });
        $.post("codes/carfeature3.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
							 c=data;	  
                       }
                   });
				      $.post("codes/carfeature4.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
						d=data;	  
                       }});
			      $.post("codes/carfeature5.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
						e=data;	  
                       }
                   });
				              	      $.post("codes/carname.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
						f=data;	  
                       }
                   });  
}

);
</script>
<script>
$("#photos").mouseenter(function() {

				   var element = document.getElementById("header");
				   element.innerHTML ='<h1 class="cname">car name:'+f+'</h1>'+'<h3 class="feature">feature1: &nbsp;&nbsp;&nbsp;      '+a+'<br/>'+'feature2:  &nbsp;&nbsp;&nbsp;    '+b+'<br/>'+'feature3: &nbsp;&nbsp;&nbsp;    '+c+'<br/>'+'feature4:  &nbsp;&nbsp;&nbsp;  '+d+'<br/>'+'feature5:   &nbsp;&nbsp;&nbsp;  '+e+'</h3>';
				  
        $(".hover p").slideDown(500);
    

    });
	$("#photos").mouseleave(function(){
		
		$(".hover p").slideUp(500);
		})
	
</script>

<style translationtype="control-label" >
.form1{display:inline-block; width:270px; height:150px;}
.form2{display:inline-block; width:270px; height:150px;}
.cname{
	font-style:italic;
	background-color:#9C6;
	padding-left:100px;
	font-weight:bold;
	margin-left:30px;
	margin-right:30px;
	border-radius: 50px;
	
	}
	.feature{
	margin-left:10px;
	margin-right:10px;
	
	font-style:italic;
	color:#FFF;
	padding-left:90px;
	}
#name{
	padding-left:250px;
	}
#photos {position:relative;width:500px;height:300px;
margin-left: 350px;
margin-right:-350px;
 border-radius: 25px;
}
#photos p {
	  background-color:rgba(0, 0, 0, 0.5) ;
	  border-radius: 25px;
	  
	  margin-bottom:0px;
	
	  
	display:none; position:absolute;top:0;left:0;right:0;bottom:0;}
#photos img{width:500px;height:300px;
	    margin-right: 40px;
   border-radius: 25px;
	
	}
.a {

  margin-top: 15px;

  display: inline-block;
}
#id2{
	
	width:100px;}
	#id3{
		
		width:100px;}


body {


	background-image:url(http://localhost/carmanager/cars/1.jpg);

	 background-repeat: no-repeat;
   	 background-size:cover;
	 
} 

 form  {
font-size: 1.5em ;
background-color: silver; 
    margin-top: 30px;
    margin-bottom:20px;
    
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