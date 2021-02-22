<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Shamshayeva Aruzhan - Contact</title>

        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Boostrap Core CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css">
        
        
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Qwigley" />
        <!-- Font awesome -->
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

   </head>
   <body>
   
   <!-- Start wrapper -->
   <div class="wrapper">
  	  <div class="col-md-12">
         <!-- Logo -->
         <div class="brand wow fadeIn" data-wow-delay="0.1s"> Shamshayeva Aruzhan
           <div class="title"> - WELCOME!!! -  </div>
         </div>

         <!-- Navigation -->
         <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <div class="navbar-brand"><a href="#">Patsy Doherty</a>
                <div class="title"> - hat designer - </div>
                </div>
                 
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                       <a href="{{route('about')}}">About</a>
                    </li>
                    <li class="active">
                       <a href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /navbar-collapse -->
         </nav>
         <!-- End nav -->


         <!-- Start margin -->
         <div class="margin-contact">
             <!-- Start left column -->
             <div class="box-contact col-md-4 col-xs-offset-1">
               <h3 class="heading-inner">Get in touch</h3>
                  <div class="hr"></div>
                    <div id="contact-area">
			         <form method="post" action="#">
				     <label for="Name">Name:</label>
				     <input type="text" name="Name" id="Name" />
                     <label for="Email">Email:</label>
                     <input type="text" name="Email" id="Email" />
				     <label for="Message">Message:</label><br />
				     <textarea name="Message" rows="20" cols="20" id="Message"></textarea>
				     <input type="submit" name="submit" value="Submit" class="submit-button" />
			         </form>
		            </div>
             </div>
             <!-- End left column -->
             
             <!-- Start right image -->
             <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
               <img src="img/contact.jpg" alt="img" class="photo-contact"/> 
             </div>
             <!-- End right image -->

         </div>
         
         

        

      </div>
      <!-- End col-md-12 -->

   </div>
   <!-- End wrapper -->

      
   <!-- jQuery Version 1.11.0 -->
   <script src="js/jquery-1.11.0.js"></script>
   <!-- Boostrap JS -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Google Map JS -->
   <script src="js/app.js"></script>
   <!-- Smooth scroll JS -->
   <script src="js/smoothscroll.js"></script>
   
   <!-- Wow JavaScript -->
   <script src="js/wow.js"></script>
    
   <script>
   new WOW().init();
   </script>


</body>
</html>