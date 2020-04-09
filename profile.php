 
<?php
session_start();
 if(empty($_SESSION['mail']))
 {
  echo "<script>
            if (confirm('Please Login first')) {
              window.location='login.php';
                         }  
                         else
                         { window.location='signup.php'; }                 

        </script>";
 }
 
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="profile.css">

<link rel="stylesheet" type="text/css" href="nav.css">
 	<title>UserProfile</title>
 </head>
  <body>
<div class="top py-1">
        <div class="container">
           <div class="row">
             <div class="col-md-4"><i class="fa fa-phone"></i><span>&nbsp+91847895r</span></div>
             <div class="col-md-4"><i class="fa fa-envelope"></i><span>&nbspyourfarm@support</span></div>
              <div class="col-md-4" align="text-right"><i class="fa fa-heart text-danger"></i><span>&nbspWhole day service</span></div>
           </div>
       </div>
    </div>
      <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="http://localhost/yourfarm/subscription.html"><h3><img src="image\logo.png" height="45px"> YourFarm</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
           Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
           <a href="http://localhost/yourfarm/subscription.html"  class="nav-link"><i class="fa fa-home"></i>&nbspHome</a>
           
           <a href="http://localhost/yourfarm/gallary.html" class="nav-link"><i class="fas fa-store"></i>&nbspShop</a> 
          <a href="http://localhost/yourfarm/gallary.html" class="nav-link"><i class="fa fa-images"></i>&nbspGallary</a>
           <a href="contact.html" class="nav-link"><i class="fa fa-comments"></i>&nbspContact</a>
            <a href="cart.html" class="nav-link"><span class="icon-shopping_cart"><i class="fa fa-shopping-cart"></i>&nbsp[0]</a>
              <a href="logout.php" class="nav-link btn-rounded btn-danger text-light">Log Out</a>

          </ul>
        </div>
      </div>
    </nav>

 	 <div class="container">
    <a href="updateProfile.php" class="btn btn-warning justify-content-right">Update Profile</a>
   </div>

 	
 	<div>

 		<section class="container">
           <section class="row justify-content-center pl-5">
               <section class="col-12 col-sm-6 col-md-3 pt-5 box">
                <form method="POST">
               	<label font-weight="bold">User Name</label>
               	&nbsp
               	<span> <?php echo $_SESSION['name']; ?> </span><br>               	
               	<label>E-mail</label>
               	&nbsp<span> <?php echo $_SESSION['mail']; ?> </span><br>

                
              
               	<label>Mobile No.</label>&nbsp
                <span> <?php echo $_SESSION['mobile']; ?> </span>
               	<br>
               	
               	
                </form>
               </section>
           </section>
        </section>

 	</div>


<?php require_once('footer.php')?>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
 </html>

 