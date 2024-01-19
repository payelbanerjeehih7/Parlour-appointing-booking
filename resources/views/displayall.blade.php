<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+ZjNdZ9u8g0L5BIhK+5r5swa5F+9z5E4qDOH6jBZhc5z5W5M" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-RfDf3gFhzz0Dp9v7N7P9sJVgBq/7Fks6v5z5buUqF+76E4e5z5F5O3D5P5G5r5R5" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


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
    

    <style type="text/css">
        #t1{
            margin: 10px;
			border: 1px solid #000;
			padding: 10px 20px;
            background-color: #CEDC73;
			color: red;
        }
        #a1{
            font-size: 50px;
            color: #0007F0;
        }
    </style>

    
</head>
 
    <body  class="main-layout">
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
                              <a href="#"><img src="images/logo1.png" alt="#" /></a>
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

      <div class="we_do slin2">
      </div>
    <p><h1  id="a1">Welcome Admin</h1></p>
	@if(isset($allinfo))
	@if(session('message'))
		<div class="alert alert-danger">{{session('message')}}</div>
	@endif
	<div class="table-responsiv">
		<table id="t1" cellpadding="20" cellspacing="0" class="table table-hover table-border">
		<!-- <thead class="thead-dark">	 -->
        <tr>
            
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Comment</th>
                        <th>Image</th>
                        <th>Action</th>
                        </tr>
                    <!-- </thead> -->
			
			@php 
			$i=1;
			@endphp
			@foreach($allinfo->all() as $all)
			<tr>
            
				<td>@php echo $i; $i++; @endphp</td>
				<td>{{$all['name']}}</td>
                <td><a href="mailto:{{$all['email']}}">{{$all['email']}}</a></td>
                <td>{{$all['password']}}</td>
                <td><a href="tel:{{$all['phone']}}">{{$all['phone']}}</a></td>
                <td>{{$all['service']}}</td>
                <td>{{$all['date']}}</td>
                <td>{{$all['time']}}</td>
                <td>{{$all['comment']}}</td>
				<td><img src="{{$all['image']}}" height="100"></td>
				<td><a href="{{url('/block')}}{{$all['_id']}}">Block</a> || 
					<a href="{{url('/unblock')}}{{$all['_id']}}">Unblock</a> || 
					<a href="{{url('/delete')}}{{$all['_id']}}">Delete</a> || 
                    <a href="{{url('/logout')}}">Logout</a></td>
        
			</tr>
			@endforeach
		</table>
	</div>
	@endif
    <div class="we_do slin">
      </div>
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