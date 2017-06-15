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
    this.array;	
	this.array1;	  
	this.a;
	this.b;
	this.c;
    this.d;
	this.e;
	this.f;
	this.num;
	this.carnum;
	num=0;

               $.post("codes/carnums.php",{},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                           array1 = jQuery.parseJSON(data);
                           $("#id3").val(array1[0]);
						   if(array1[0]==0){
							   $("#id2").val(0);
							    document.getElementById("nxt").disabled = true;
								document.getElementById("img").disabled = true;
							   }
			        else {a=array1[1];
						  b=array1[2];
						  c=array1[3];
						  d=array1[4];
						  e=array1[5];
						  f=array1[6];
						  carnum=array1[7];	
			              $("#previous").hide(); 
		                  $("#previous1").show(); 
				   	      if (num >= carnum-1)	 {
		                  $("#next").hide(); 
		                  $("#next1").show();
		                        } 
		                  else {$("#next").show();
	                      $("#next1").hide();}	   
                            }}
                           });

    


       </script>
               <script>
			  
	
	
	         $.post("codes/carname.php",{data:1},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          
						  a=array.feature1;
						  b=array.feature2;
						  c=array.feature3;
						  d=array.feature4;
						  e=array.feature5;
						  f=array.uname;
						  carnum=array.carsnum;	
						  			   			   $("#previous").hide(); 
		 $("#previous1").show(); 
				   	 if (num >= carnum-1)	 {
		$("#next").hide(); 
		 $("#next1").show();
		 } 
		else {$("#next").show();
	$("#next1").hide();}	  
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
<form role="form" class="form3" id="form3">
<div class="full" >
<a id="previous">&#8249;</a>
<a id="previous1"></a>
</div>
<div class="full" >
<div id="photos">
<div class="hover">
<img id="img"  src="http://localhost/carmanager /cars/1.jpg"/>
<p id="header"> </p>
</div>
</div>
</div>
<div class="full" >
<a id="next">&#8250;</a>
<a id="next1"></a>
</div>
</form>
<form role="form" class="form2">
<button type='button' class="btn btn-info" id="prev" disabled>prev</button>
<button type='button' class="btn btn-success" id="nxt">next</button>

</form>
<button type="submit" class="btn btn-info" id="home" onclick="location.href='login.php'" 
	 style="border-radius:75px;height:100px; width:100px;"> <img src="photos/home.png" alt="image" id="im" class="img-circle" title="HOME"  style="  padding:0px;  "> </button>  
<script>

$('#nxt').click(function(){
	num=0;
	var p =(parseInt($('#id2').val(), 10)+1);
	
	  $('body').css({'background-image': 'url(http://localhost/carmanager/cars/'+p+''+num+'.jpg)','background-repeat': 'no-repeat'
	  });
   document.getElementById("prev").disabled = false;

	
	       	 var pic =document.getElementById("img");
             pic.src='http://localhost/carmanager /cars/'+p+''+num+'.jpg';
             $('#id2').val(p); 
       	         $.post("codes/carname.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          array = jQuery.parseJSON(data);
						  a=array.feature1;
						  b=array.feature2;
						  c=array.feature3;
						  d=array.feature4;
						  e=array.feature5;
						  f=array.uname;
						  carnum=array.carsnum;	
						  			   	 if (num >= carnum-1)	 {
		$("#next").hide(); 
		 $("#next1").show();
		 }
		 	else {$("#next").show();
	$("#next1").hide();} 
		$("#previous").hide(); 
		 $("#previous1").show(); 	  
                       }
                   });
			
		  if(p >=array1[0]){
							  document.getElementById("nxt").disabled = true;
							  }
  

}

);
</script>
<script>

$('#prev').click(function(){
	num=0;
	var p =(parseInt($('#id2').val(), 10)-1);
	  $('body').css({'background-image': 'url(http://localhost/carmanager/cars/'+p+''+num+'.jpg)','background-repeat': 'no-repeat'});
		document.getElementById("nxt").disabled = false;
	if(p<=1){
		document.getElementById("prev").disabled = true;
		}
	 var pic =document.getElementById("img");
     pic.src='http://localhost/carmanager /cars/'+p+''+num+'.jpg';
$('#id2').val(p);
	
	
	         $.post("codes/carname.php",{data:p},
                   function (data) {
                       data=data.trim();
                       if(data=="error"||data=="false"){
                           alert("Error .. please try again ???");
                       }else {
                          array = jQuery.parseJSON(data);
						  a=array.feature1;
						  b=array.feature2;
						  c=array.feature3;
						  d=array.feature4;
						  e=array.feature5;
						  f=array.uname;
						  carnum=array.carsnum;
						  			   	 if (num >= carnum-1)	 {
	            	$("#next").hide(); 
		          $("#next1").show();
		          }
		 	  else {$("#next").show();
	          $("#next1").hide();} 
		      $("#previous").hide(); 
		      $("#previous1").show(); 		  
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
<script>
$('#next').click(function(){
	$("#previous").show();
	$("#previous1").hide();
	var p =(parseInt($('#id2').val(), 10));
	num=num+1;
	  $('body').css({'background-image': 'url(http://localhost/carmanager/cars/'+p+''+num+'.jpg)','background-repeat': 'no-repeat'});
 var pic =document.getElementById("img");
     pic.src='http://localhost/carmanager /cars/'+p+''+num+'.jpg';
	 
	 if (num >= carnum-1)	 {
		$("#next").hide(); 
		 $("#next1").show();
		 } 	
	
	})
$('#previous').click(function(){
	$("#next").show();
	$("#next1").hide();
	var p =(parseInt($('#id2').val(), 10));
	num=num-1;
	  $('body').css({'background-image': 'url(http://localhost/carmanager/cars/'+p+''+num+'.jpg)','background-repeat': 'no-repeat'});
 var pic =document.getElementById("img");
     pic.src='http://localhost/carmanager /cars/'+p+''+num+'.jpg';
	
	 if (num <= 0)	 {
		$("#previous").hide(); 
		 $("#previous1").show();
		 } 	
	
	})
	
</script>
<style translationtype="control-label" >
.full{
	 display: inline-block;
	 margin:10px;
	}
a {
    text-decoration: none;
   
   
	font-size:70px;
}

#previous:hover {
    background-color: #666;
    color: black;
    cursor:pointer;
}
#next:hover {
    background-color: #666;
    color: black;
	cursor:pointer;
}
#previous {
    background-color: #ddd;
    color: black;
    padding-right:20px;
	padding-left:20px;
	padding-top:40px;
	padding-bottom:40px;
	
}
#previous1 {
    background-color: #ddd;
    color: black;
    padding-right:32px;
	padding-left:32px;
	padding-top:40px;
	padding-bottom:40px;
	display:none;
	
}
#next {
    background-color: #ddd;
    color: black;
	 padding-right:20px;
	padding-left:20px;
	padding-top:40px;
	padding-bottom:40px;
}
#next1 {

    background-color: #ddd;
    color: black;
	 padding-right:32px;
	padding-left:32px;
	padding-top:40px;
	padding-bottom:40px;
	display:none;
}
.form3{display:inline-block; width:800px; height:400px; margin-left:200px; background-color:inherit;}
.form3:hover{background-color:inherit;}
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
margin-left: 10px;
margin-right:10px;
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


	background-image:url(http://localhost/carmanager/cars/10.jpg);

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
