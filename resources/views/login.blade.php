@extends('layout.head_foot')
@section('title', 'login')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<link rel="stylesheet" href="css/style.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay">

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>

  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <div class="login_block">
            <form action="/logUser" method="POST" name="login" id="login-form">
		    @csrf  
                <div class="login_block_1">
               
							   
							  				@error('email')
    										<div class="alert alert-danger">{{ $message }}</div>
											@enderror
						        <input type="text" name="email" class="inputbox" size="25" placeholder="Email" autocomplete="off" value="{{ old('email') }}">
						    
                </div>
                <div class="login_block_2">
                               
							  				@error('password')
    										<div class="alert alert-danger">{{ $message }}</div>
											@enderror
						        <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="25" placeholder="Password" autocomplete="off" value="{{ old('password') }}">
                </div>
                <div class="login_block_3">
                <a href="/index"><input type="submit" name="Submit" class="button" value="Login"></a>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Page section example for content below the video header -->
<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        
      </div>
    </div>
  </div>
</section>
</div>
</body>
</html>
@endsection