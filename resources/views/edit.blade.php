<!DOCTYPE html>
<html>
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
      <style type="text/css">
        #b1{
            background-color: #ffe6e6;
        }
        </style>
</head>
<body id="b1">
	
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

	@if(isset($userinfo))
	<div class="container">
		<form method="post" action="{{url('/update')}}" enctype="multipart/form-data">
			@csrf
			@if(session('message'))
			<div class="alert alert-danger">{{session('message')}}</div>
			@endif
			<header class="modal-header"><h1>Edit Your booking</h1></header>
			<input type="text" name="uid" value="{{$userinfo['_id']}}" hidden>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="{{$userinfo['name']}}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="{{$userinfo['email']}}">
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input type="number" name="phone" class="form-control" value="{{$userinfo['phone']}}">
			</div>
			@php
			$service=explode(', ', $userinfo['service']);
			@endphp
			<div class="form-group">
			<label for="">Select a Service Category</label>
			<div>
                <input type="checkbox" name="service[]" value="color"@if(in_array('color', $service)) checked @endif> Color<br>
                           <input type="checkbox" name="service[]" value="ch"@if(in_array('ch', $service)) checked @endif> Color & Haircut<br>
                           <input type="checkbox" name="service[]" value="hair"@if(in_array('hair', $service)) checked @endif> Hair Treatments<br>
                           <input type="checkbox" name="service[]" value="haircuts"@if(in_array('haircuts', $service)) checked @endif> Haircuts<br>
                           <input type="checkbox" name="service[]" value="styling"@if(in_array('styling', $service)) checked @endif> Styling<br>
                           <input type="checkbox" name="service[]" value="nail"@if(in_array('nail', $service)) checked @endif> Nail Treatments<br>
                           <input type="checkbox" name="service[]" value="facial"@if(in_array('facial', $service)) checked @endif> Facial<br>
                           <input type="checkbox" name="service[]" value="skin"@if(in_array('skin', $service)) checked @endif> Skin Care Treatments<br>
                           <input type="checkbox" name="service[]" value="tanning"@if(in_array('tanning', $service)) checked @endif> Tanning<br>
                           <input type="checkbox" name="service[]" value="massages"@if(in_array('massages', $service)) checked @endif> Massages<br>
                           <input type="checkbox" name="service[]" value="waxing"@if(in_array('waxing', $service)) checked @endif> Waxing
                        </div>
                        </div>
                        <div class="form-group">
                           <label for="">Appoinment Date</label>
                           <input type="date" name="date" value="{{$userinfo['date']}}" class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="">Appoinment Time</label>
                           <input type="time" name="time" value="{{$userinfo['time']}}" class="form-control">
                        </div>
			<div class="form-group">
				<label>Profile Picture</label>
				<input type="file" name="file" class="form-control"><img src="{{$userinfo['image']}}" height="100" width="100">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Update" class="btn btn-success btn-lg">
			</div>
		</form>
	</div>
	@endif
	<div class="we_do slin">
      </div>
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
                     <p class="variat">Transform your style at Femiluxe - where beauty meets innovation for a radiant you!</p>
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
</body>
</html>