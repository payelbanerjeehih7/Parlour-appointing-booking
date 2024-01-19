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
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{url('index')}}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('about')}}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{url('pricing')}}">Pricing</a>
                              </li>
                              <li class="nav-item">
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
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner1" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="images/banner_ing.jpg" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>01/03</span>
                              <h1>Femiluxe Salon Creating Beauty</h1>
                              <p>Captivate Beauty, Illuminate Confidence – Your Journey to Radiance Begins Here.</p>
                              <!-- <a class="get_btn" href="{Javascript:void(0)}" role="button">Get Appoinment</a> -->
                              <div class="btn btn-success"><a href="{{url('/login')}}" class="primary-btn">Sign In</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="images/banner_ing.jpg" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>02/03</span>
                              <h1>Femiluxe Salon Creating Beauty</h1>
                              <p>Captivate Beauty, Illuminate Confidence – Your Journey to Radiance Begins Here.</p>
                              <!-- <a class="get_btn" href="Javascript:void(0)" role="button">Get Appoinment</a> -->
                              <div class="btn btn-success"><a href="{{url('/login')}}" class="primary-btn">Sign In</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container-fluid">
                     <div class="carousel-caption relative">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <img class="bann_img" src="images/banner_ing.jpg" alt="#"/>
                           </div>
                           <div class="col-md-6">
                              <span>03/03</span>
                              <h1>Femiluxe Salon Creating Beauty</h1>
                              <p>Captivate Beauty, Illuminate Confidence – Your Journey to Radiance Begins Here.</p>
                              <!-- <a class="get_btn" href="Javascript:void(0)" role="button">Get Appoinment</a> -->
                              <div class="btn btn-success"><a href="{{url('/login')}}" class="primary-btn">Sign In</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- Button trigger modal -->
      <div class="col-md-12">
         <button type="button" class="read_more mar_top exper" data-toggle="modal" data-target="#exampleModal">
            Get Appoinment
         </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
               <div class="modal-content" style="background-color: #ffcccc">
                  <div class="modal-header">
                     <h1 class="modal-title" id="exampleModalLabel">Beauty Salon Appointment</h1>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               <div class="modal-body">
                  <div class="container">
                     <form action="{{url('/submit')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @if($errors->any())
                        <div class="alert alert-danger">
                           <ul>
                              @foreach($errors->all() as $error)
                              <li>{{$error}}</li>
                              @endforeach
                           </ul>
                        </div>
                        @endif
                        @if(session('message'))
                        {{session('message')}}
                        @endif

                        <div class="form-group">
                           <label for="">Name</label>
                           <input type="text" name="name" id="" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="">Email</label>
                           <input type="text" name="email" id="" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="">Password</label>
                           <input type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="">Phone</label>
                           <input type="text" name="phone" id="" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="">Select a Service Category</label>
                           <div>
                           <input type="checkbox" name="service[]" value="color" id=""> Color<br>
                           <input type="checkbox" name="service[]" value="ch" id=""> Color & Haircut<br>
                           <input type="checkbox" name="service[]" value="hair" id=""> Hair Treatments<br>
                           <input type="checkbox" name="service[]" value="haircuts" id=""> Haircuts<br>
                           <input type="checkbox" name="service[]" value="styling" id=""> Styling<br>
                           <input type="checkbox" name="service[]" value="nail" id=""> Nail Treatments<br>
                           <input type="checkbox" name="service[]" value="facial" id=""> Facial<br>
                           <input type="checkbox" name="service[]" value="skin" id=""> Skin Care Treatments<br>
                           <input type="checkbox" name="service[]" value="tanning" id=""> Tanning<br>
                           <input type="checkbox" name="service[]" value="massages" id=""> Massages<br>
                           <input type="checkbox" name="service[]" value="waxing" id=""> Waxing<br>
                        </div>
                        </div>
                        <div class="form-group">
                           <label for="">Appoinment Date</label>
                           <input type="date" name="date" id="" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="">Appoinment Time</label>
                           <input type="time" name="time" id="" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="">Comment</label>
                           <textarea name="comment" id="" cols="" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                           <label for="">Upload Your Selfie</label>
                           <input type="file" name="file" id="" class="form-control">
                        </div>
                     
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" name="submit" id="" value="Submit" class="btn btn-success btn-lg">
               </div>
            </div>
         </div>
      </div>
      </form>
<!-- End Modal -->

      <!-- what we do  -->
      <div class="we_do slin">
      </div>
      <!-- end what we do  -->
      
      <!-- experts -->
      <div  class="experts slin2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Meet Our Experts</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-8 offset-lg-2 col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="images/blog1.jpg" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>Payel</h3>
                              <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna </p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="images/blog2.jpg" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>Riya</h3>
                              <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div id="exp" class="experts_box">
                           <div class="experts_img">
                              <figure><img src="images/blog3.jpg" alt="#"/></figure>
                           </div>
                           <div class="meet">
                              <h3>Payel</h3>
                              <p>Lorem ipsum dolor sit amet, iscing elit, sed do magna</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <a class="read_more mar_top exper" href="{{url('/about')}}"> Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end experts -->
      <div></div>
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