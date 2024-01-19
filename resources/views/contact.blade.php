

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Femiluxe</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo1.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('index')}}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('about')}}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('pricing')}}">Pricing</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-2">
                     <ul class="social_icon">
                     <li><a  target="_blank" rel="noopener" href="https://www.facebook.com/parlsbanerjee"><i class="fa fa-facebook"></i></a></li>
                        <li><a  target="_blank" rel="noopener" href="https://twitter.com/PayelBanerjee__"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/payel-banerjee-701968290/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a  target="_blank" rel="noopener" href="https://www.instagram.com/payelbanerjee___"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
        <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Get In Touch</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3">
                  <form action="{{url('/smallform')}}" method="post" class="main_form">
                     @csrf
                     <!-- <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Full Name" type="text" name="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email " type="text" name="email "> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="text" name="phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="text"></textarea>
                        </div> -->
                        @if(session('message'))
                           <span class="alert alert-success text-center">
                              {{session('message')}}
                              </span>
                           @endif
                           <div class="row">
                        <div class="col-md-12 ">
                           <input type="text" name="name" id="" class="contactus"  placeholder="Full Name">
                        </div>
                        <div class="col-md-12 ">
                           <input type="text" name="email" id="" class="contactus" placeholder="Email ">
                        </div>
                        
                        <div class="col-md-12 ">
                           <input type="text" name="phone" id="" class="contactus" placeholder="Phone Number">
                        </div>
                        <div class="col-md-12 ">
                        <textarea class="textarea" placeholder="Message" type="text" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-md-12">                     
                           <input type="submit" name="submit" id="" value="Send" class="send_btn"><br>
                        </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.3270552568865!2d88.3428206!3d22.529418099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027747f177413d%3A0x9c80c8c46f7c6525!2s14%2C%20Balaram%20Bose%20Ghat%20Rd%2C%20Patuapara%2C%20Bhowanipore%2C%20Kolkata%2C%20West%20Bengal%20700025!5e0!3m2!1sen!2sin!4v1693594920260!5m2!1sen!2sin" width="600" height="386" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
    <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <!-- <div class="col-md-12">
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Passages of Lorem Ipsum available</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Call : +918777644951</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> payelbanerjee9319@gmail.com</a></li>
                     </ul>
                  </div> -->
                  <div class=" col-md-3 col-sm-6">
                     <h3>About </h3>
                     <p class="variat">Transform your style at Femiluxe – where beauty meets innovation for a radiant you!</p>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <h3>Retreat</h3>
                     <p class="variat" >Elevate your beauty experience at our salon, where skilled stylists and a serene ambiance combine for a personalized and rejuvenating transformation.</p>
                  </div>
                  <div class="col-md-2 col-sm-6">
                     <h3>Useful Link</h3>
                     <ul class="link_menu">
                            <li>
                                <a class="nav-link" href="{{url('index')}}">Home</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('about')}}">About</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('pricing')}}">Pricing</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
                            </li>
                     </ul>
                  </div>
                  <div class=" col-md-4 col-sm-6">
                     <h3>Get in Touch</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> BHOWANIPORE</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Call : +918777644951</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a target="_blank" rel="noopener" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#drafts?compose=DmwnWrRnZVhxWxfDdLjQSSwxBfZXjQQsbLbGMqfJrbNqJCKtKXVrqjWMZSLBRWmdnqBCdbkDptjV"> payelbanerjee9319@gmail.com</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>2024 All Rights Reserved. © PAYEL BANERJEE</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

