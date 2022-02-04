<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Narek</title>
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
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
        
    </div>
    
    <!-- end loader -->
    <!-- header -->
   
        <!-- header inner -->
        <div class="header-top">
            
            <div class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo"><div class="bacg_img"></div>
                                        <a href="index.html"><img src="images/logo.png" alt="#" /></a><!-- esi logona -->                                       
                                    </div>                                   
                                </div>                               
                            </div>
                        </div>                      
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                              <ul class="top_icon">
                                  <li class="button_login"> <a href="/login">Login</a> </li>
                                  <li> <a href="/register">Signup</a> </li>
                                  <li class="mean-last">
                                   <a href="#"><img src="images/search_icon.png" alt="#" /></a>
                                  </li>  
                              </ul>           
                        </div>
                        <div class="col-md-2 padding_left0">
                                <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li class="active"> <a href="#game">glxavor</a> </li>
                                            <li> <a href="#software">rekamindacianner</a> </li>
                                            <li> <a href="#about">comentneri hartak</a> </li>
                                            <li> <a href="#testimonial">adminin grel</a> </li>
                                            <li> <a href="#contact">Contact</a> </li>
                                            <li><a href="{{url('/Addmove')}}"type="submit" name="Submit" class="button" value="admin">add_film_gen</a></li>
                                        </ul>
                                    </nav>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

    @yield('content')

    
    <!-- <footr>
        <div class="footer ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Newsletter</h2>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <form class="news">
                            <input class="newslatter" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                            <button class="submit">Subscribe</button>
                        </form>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                                <div class="address">
                                    <ul class="social_link">
                                        <li><a href="#"><img src="icon/fb.png"></a></li>
                                        <li><a href="#"><img src="icon/tw.png"></a></li>
                                        <li><a href="#"><img src="icon/lin(2).png"></a></li>
                                         <li><a href="#"><img src="icon/instagram.png"></a></li>
                                    </ul>
                                    <a href="index.html"> <img src="images/logo.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="address">
                                    <h3>Quick links</h3>
                                    <ul class="Menu_footer">
                                        <li class="active"> <img src="images/3.png" alt="#"> <a href="#game">Game</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#software">Software</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#about">About</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#testimonial"> Testimonial</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#contact">Contact</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="address">
                                    <h3>downloded</h3>
                                    <ul class="Links_footer">
                                        <li class="active"><img src="images/3.png" alt="#"> <a href="#">Lorem Ipsum </a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#">Simply random</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#">Roots in a</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#"> Piece</a> </li>
                                        <li><img src="images/3.png" alt="#"> <a href="#">Classical</a> </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 ">
                                <div class="address">
                                    <h3>Contact us </h3>
                                    <ul class="loca">
                                        <li>
                                            <a href="#"><img src="icon/loc.png" alt="#" /></a>London 145
                                            <br>United Kingdom </li>
                                        <li>
                                            <a href="#"><img src="icon/email.png" alt="#" /></a>demo@gmail.com </li>
                                        <li>
                                            <a href="#"><img src="icon/call.png" alt="#" /></a>+12586954775 </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2019 All Rights Reserved. <a href="https://html.design/">Free html Templates</a></p>
                </div>
            </div>
        </div>
    </footr> -->
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>