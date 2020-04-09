<?php
session_start();
require_once('shop/db.php');



if(empty($_SESSION['mail']))
{
	echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  Please  <a href='index.php' class='alert-link'>login</a> first.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Exotic Plan</title>

	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
    

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="nav.css">
  <link rel="stylesheet" type="text/css" href="customize.css">

  <script src="exotic.js"></script>

     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

 <div class="top py-1">
        <div class="container">
           <div class="row">
             <div class="col-md-4"><i class="fa fa-phone"></i><span>&nbspmobileNo.</span></div>
             <div class="col-md-4"><i class="fa fa-envelope"></i><span>&nbspEmail</span></div>
              <div class="col-md-4" align="text-right"><i class="fa fa-heart"></i><span>&nbspwhole day service</span></div>
           </div>
       </div>
    </div>
      <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="localhost\yourfarm\index.php"><h3><img src="image\logo.png" height="45px"> YourFarm</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
           Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
           <a href="index.php"  class="nav-link"><i class="fa fa-home"></i>&nbspHome</a>
           
           <a href="shop/all_cat.php" class="nav-link"><i class="fas fa-store"></i>FAQ</a> 
          <a href="gallary.php" class="nav-link"><i class="fa fa-images"></i>About Us</a>
           <a href="login.php" class="nav-link"><i class="fa fa-comments"></i>Login/Sign Up </a>
           

          </ul>
        </div>
      </div>
    </nav>

   <div class="container-fluid">
   	<div class="row custom_box">
   		<div class="col-md-12 "> 		<h3 class="text-center">Customize Your Plan</h3> 
         <hr>
   		 </div>

   		
      
   		<div class="col-md-6">
   			 <h4 class="text-center">Choose Your Favourite Combo</h4>
        <div class="row" >
        	<ol id="selectable">
            
        	<div class="col-md-5 ui-widget-content    plan b1 btn" id="box" onmouseover="hover();" onmouseout="unhover();" onclick="deta(this);"  >  <img src="image/orange.png" class="img-fluid py-1 px-2" id="img_hov" >     
                 <h5 class="text-center "id="title">Exotic Box 1</h5>

                 <input type="text" name="price" value="100" id="price_box" disabled="">                     
        	 </div>
        	<div class="col-md-5  ui-widget-content plan  text-center btn"  id="box1" onmouseover="hover1();" onmouseout="unhover1();" onclick="deta1();"  ><img src="image/veg1.png" class="img-fluid py-1 px-2" id="img_hov1"> 
                <h5 class="text-center title">Exotic Box 2</h5>
                <input type="text" name="price" value="120" id="price_box1" disabled="">
                 
        	</div>
        	<div class="col-md-5 ui-widget-content plan text-center btn" id="box2" onmouseover="hover2();" onmouseout="unhover2();" onclick="deta2();"><img src="image/veg2.png" class="img-fluid py-1 px-2" id="img_hov2">
                  <h5 class="text-center title">Exotic Box 3</h5>
                  <input type="text" name="price" value="130" id="price_box2" disabled="">               
        	 </div>
        	<div class="col-md-5  ui-widget-content plan text-center btn " id="box3" onmouseover="hover3();" onmouseout="unhover3();" onclick="deta3();"><img src="image/veg3clr.png" class="img-fluid py-1 px-2" id="img_hov3"> 
                  <h5 class="text-center title">Exotic Box 4</h5>
                  <input type="text" name="price" value="140" id="price_box3" disabled="">
        	</div>
        </ol>
        </div>
        

   		</div>
   		<div class="col-md-6">
   			<h4 class="text-center">Select Your Subscription Plan</h4>
              <form action="finalCheckout.php" method="POST">
              	<div class="col-md-12 ">
              		<div class="row mt-5">
              	  	<h5 class="col selcet_box_title">Your Selected Box </h5> <input type="text" name="selcet_box" id="selcet_input_box" value="" class="col"  style="display: none;"> <h5 id="selcet_box" class=" text-center text-success mr-5 pr-5"></h5>
              	  </div>
                   
                   

                    <div class="row mt-3">
                      <h5 class="col price_title">Price</h5>
                      <h6 class="col price text-center ml-5 pl-4" id="price"></h6>
                      <input type="text" name="price" value="" id="id_input" style="display: none;">
                    </div>
                        
                    <div class="row mt-4">
                      <h5 class="col delivery_title">Delivery Charge</h5>
                      <h6 class="col delivery_charge text-success text-center ml-5 pl-5">FREE</h6>
                    </div>

                     <div class="row mt-4">
                      <h5 class="col Subscription_plan">Your Subscription Plan</h5>
                      <div class="subscription mr-5 pr-5">
                        <select name="subscription">
                          <option>Daily</option>
                          <option>Weekly</option>
                          <option>Monthly</option>

                        </select>
                      </div>
                    </div>
            
                      <div class="row mt-4">
                        <h5 class=" col quantity_title">Box Quantity</h5>
                        <div class="col text-center ml-5 pl-5"><input type="text" name="qty"  value="1" class="col-md-5 ml-4"> </div>

                      </div>
                           <div class="row">
                             <hr class="col text-success ">
                           </div>
                      <div class="row mt-4">
                        <div class="col"></div>
                        <button type="submit" name="buy" class="col btn btn-success btn-lg">Get Your Box</button>
                        <div class="col"></div>
                      </div>

              	</div>

              </form>
         

   		</div>
   		
   	</div>
   </div>


</div>


    




















<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form34" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form34">Your name</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form29" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form29">Your email</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form32">Subject</label>
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Your message</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>

















<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm"> More Question? Contact Us </a>
</div>  



<script type="text/javascript">





  var imgHov=document.getElementById("img_hov");
  var imgHov1=document.getElementById("img_hov1");
  var imgHov2=document.getElementById("img_hov2");
  var imgHov3=document.getElementById("img_hov3");

  function hover() {
                         
     imgHov.setAttribute('src', 'image/orangeclr.png');

}


function unhover() {
  imgHov.setAttribute('src', 'image/orange.png');
}
//************


  function hover1() {
                         
     imgHov1.setAttribute('src', 'image/veg1clr.png');

}


function unhover1() {
  imgHov1.setAttribute('src', 'image/veg1.png');
}

//******
function hover2() {
                         
     imgHov2.setAttribute('src', 'image/veg2clr.png');

}


function unhover2() {
  imgHov2.setAttribute('src', 'image/veg2.png');
}


  function hover3() {
                         
     imgHov3.setAttribute('src', 'image/veg3.png');

}


function unhover3() {
  imgHov3.setAttribute('src', 'image/veg3clr.png');
}


function oc1()
{
   
   document.getElementById("selcet_box").innerHTML= document.getElementByClass("title").value;

}

$( function() {
    $( "#selectable" ).selectable( { 
     selected:function() {}
     
     
    } );
  } );

$( "#selectable" ).on( "selectableselected", function( event, ui ) {
   $(ui.selected).css("color", "green");
   var x=$(ui.selected).text(); 
   
   $("#selcet_box").html(x);
    $("#selcet_input_box").val(x);
 
   

} );




 
</script>



</body>
</html>




