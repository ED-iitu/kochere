<!DOCTYPE html>
<html>
    <head>
        <title>Kochere.kz</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Roman Kirichik">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/magnific-popup.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">       
        
    </head>
    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Home Section -->
             <!-- Home Section -->
            <section class="home-section bg-dark" data-background="video/video.jpg" id="home">
                <div class="js-height-full container">
                    
                    <!-- Video BG Init -->
                    <!-- Please, replace three video files in folder "video" with your own ones -->
                    <div class="bg-video-wrapper" id="video-background-1">
                        <div class="bg-video-overlay bg-dark-alfa-50"></div>
                    </div>
                     <!-- End Video BG Init -->
                    
                    <!-- Hero Content -->
                    <div class="home-content">
                        <div class="home-text">
                            
                            <h1 class="hs-line-8 font-alt mb-50 mb-xs-30">
                                Уют и тепло в каждом доме!
                            </h1>
                            
                            <h2 class="hs-line-14 font-alt mb-50 mb-xs-30">
                                <span>
                                    Kochere.kz
                                </span>
                            </h2>
                            
                            <div class="local-scroll">
                                <a href="#about" class="btn btn-mod btn-border-w btn-medium btn-round hidden-xs">Подробнее</a>
                                <span class="hidden-xs">&nbsp;</span>
                                <a href="http://vimeo.com/50201327" class="btn btn-mod btn-border-w btn-medium btn-round lightbox mfp-iframe">Видео</a>
                            </div>
                            
                        </div>
                    </div>
                    <!-- End Hero Content -->
                    
                    <!-- Scroll Down -->
                    <div class="local-scroll">
                        <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
                    </div>
                    <!-- End Scroll Down -->
                    
                </div>
            </section>
            <!-- End Home Section -->
            <!-- End Home Section -->
            
            <!-- Navigation panel -->
            <nav class="main-nav dark transparent stick-fixed">
                <div class="full-wrapper relative clearfix">
                    <!-- Logo ( * your text or image into link tag *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="#" class="logo">
                            <?php $admin_logo_img = Voyager::setting('site.logo', ''); ?>
            
                <img src="{{ Voyager::image($admin_logo_img) }}" alt="Kochere">
            
                            <!-- <img src="images/logo-white.png" alt="" /> -->

                        </a>
                    </div>
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist">
                            <li>
                                <a href="#" class="mn-has-sub">RU <i class="fa fa-angle-down"></i></a>
                                
                                <ul class="mn-sub">
                                    
                                    <li><a href="">RU</a></li>
                                    <li><a href="">KZ</a></li>
                                </ul>
                                
                            </li>
                            <!-- End Languages -->
                            
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                    

                </div>
            </nav>
            <!-- End Navigation panel -->
            
            
            <!-- About Section -->
            <section class="page-section" id="about">
                <div class="container relative">
                    
                    
                    
                    <h2 class="section-title font-alt mb-70 mb-sm-40">
                        Сделайте Ваш выбор!
                    </h2>
                    
                    <div class="row multi-columns-row">
                        
                        <!-- Post Item -->
                        <div class="col-sm-6 col-md-6 col-lg-6 mb-md-50 wow bounceInLeft" data-wow-delay="0.1s" data-wow-duration="1s">
                            
                            <div class="post-prev-img">
                                <a href="#"><img src="images/img.jpeg" alt="" /></a>
                            </div>
                            
                            <div class="post-prev-title font-alt">
                                <a href="#">Kochere shop</a>
                            </div>
                            
                            
                            
                            <div class="post-prev-text">
                                Онлайн магазин
                            </div>
                            
                            <div class="post-prev-more">
                                <a href="" class="btn btn-mod btn-gray btn-round">Перейти <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>
                        <!-- End Post Item -->
                        
                        
                        
                        <!-- Post Item -->
                        <div class="col-sm-6 col-md-6 col-lg-6 mb-md-50 wow bounceInRight" data-wow-delay="0.3s" data-wow-duration="1s">
                            
                            <div class="post-prev-img">
                                <a href="#"><img src="images/hotel-index.jpg" alt="" /></a>
                            </div>
                            
                            <div class="post-prev-title font-alt">
                                <a href="">Kochere Horeka</a>
                            </div>
                            
                            
                            
                            <div class="post-prev-text">
                                Гостиничный текстиль 
                            </div>
                            
                            <div class="post-prev-more">
                                <a href="{{route('home')}}" class="btn btn-mod btn-gray btn-round">Подробнее <i class="fa fa-angle-right"></i></a>
                            </div>
                            
                        </div>
                        <!-- End Post Item -->
                        
                    </div>
                    
               
                    
                </div>
            </section>
            <!-- End About Section -->
            
           
            
            <!-- Foter -->
            <footer class="page-section bg-gray-lighter footer pb-60">
                <div class="container">
                    
                    <!-- Footer Logo -->
                    <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.5s">
                        <!-- <a href="#top"><img src="images/logo-footer.png" width="78" height="36" alt="" /></a> -->
                        <p>Давайте дружить!</p>
                    </div>
                    <!-- End Footer Logo -->
                    
                    <!-- Social Links -->
                    <div class="footer-social-links mb-110 mb-xs-60">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" title="LinkedIn+"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Vk"><i class="fa fa-vk"></i></a>
                    </div>
                    <!-- End Social Links -->  
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div class="footer-copy font-alt">
                            <a href="№" target="_blank">&copy; Kochere.kz 2018</a>.
                        </div>
                        <!-- End Copyright -->
                        
                        <div class="footer-made">
                            Уют и тепло в каждом доме!
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                 
                 
                 <!-- Top Link -->
                 <div class="local-scroll">
                     <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
                 </div>
                 <!-- End Top Link -->
                 
            </footer>
            <!-- End Foter -->
        
        
        </div>
        <!-- End Page Wrap -->
        
        
        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="js/all.js"></script>
        <script type="text/javascript" src="js/contact-form.js"></script>
        <script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>        
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
        
    </body>
</html>
