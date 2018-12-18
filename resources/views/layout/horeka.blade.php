<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kochere.kz</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    
    <!-- all css here -->
        <link rel="stylesheet" href="css/horeka/bootstrap.min.css">
        <link rel="stylesheet" href="css/horeka/font-awesome.min.css">
        <link rel="stylesheet" href="css/horeka/et-line-fonts.css">
        <link rel="stylesheet" href="css/horeka/animate.css">
        <link rel="stylesheet" href="css/horeka/owl.carousel.css">
        <link rel="stylesheet" href="css/horeka/magnific-popup.css">
        <link rel="stylesheet" href="css/horeka/meanmenu.css">
        <link rel="stylesheet" href="css/horeka/shortcode/shortcodes.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/horeka/responsive.css">
        <script src="js/horeka/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
    <!-- header start -->
    <header>
      <div class="header-area header-sticky">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-xs-12">
              <div class="logo">
                <?php $admin_logo_img = Voyager::setting('site.logo', ''); ?>
                <a href="#">
                  <img src="{{ Voyager::image($admin_logo_img) }}" alt="Kochere" style="margin-top: -19px">
                </a>
              </div>
            </div>
            <div class="col-md-9 col-xs-12">
              <div class="main-menu text-right">
                <nav>
                  <ul class="menu">
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li><a href="{{route('about')}}">О нас</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Информация <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul>
                        <li><a href="#">История Компании</a></li>
                        <li><a href="#">Производство текстиля</a></li>
                      </ul>
                    </li>
                    <li><a href="{{route('gallery')}}">Галерея</a></li>
                    <li><a href="{{route('contact')}}">Контакты</a></li>
                    <li><a href="{{route('application')}}">Онлайн заявка</a></li>
                    
                    <li><a href="#">RU <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul>
                        <li><a href="#">RU</a></li>
                        <li><a href="#">KZ</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="mobile-menu"></div>
            </div>
          </div>
        </div>
      </div>
    </header>


    @yield('content')



    <footer class="footer-bg">
      <div class="footer-area ptb-90">
        <div class="container">
          <div class="col-md-4 col-sm-4">
            <div class="footer-info text-center">
              <span class="icon-map-pin"></span>
              <h5>Алматы, Казахстан</h5>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="footer-info text-center">
              <span class="icon-phone"></span>
              <h5>+1 234 567 89 00 </h5>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="footer-info text-center">
              <span class="icon-envelope"></span>
              <h5>kochere.kz@gmail.com</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom gray-bg ptb-20">
        <div class="container">
          <div class="copyright text-center">
            <div class="social-icon mt-20 text-center">
              <h6 class="black-text">Давайте дружить</h6>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-vk"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        
            </div> <hr style="width: 10%">
            <p>© 2018 <a href="#">Kochere.kz</a>, все права защищены.</p>

          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->
        <!-- start scrollUp  -->
        <div id="toTop">
            <i class="fa fa-chevron-up"></i>
        </div>
       
       
    <!-- all js here -->
        <script src="js/horeka/vendor/jquery-1.12.0.min.js"></script>
        <script src="js/horeka/bootstrap.min.js"></script>
        <script src="js/horeka/isotope.pkgd.min.js"></script>
        <script src="js/horeka/owl.carousel.min.js"></script>
        <script src="js/horeka/imagesloaded.pkgd.min.js"></script>
        <script src="js/horeka/jquery.meanmenu.js"></script>
        <!-- ajax-mail js -->
        <script src="js/horeka/ajax-mail.js"></script>
        <script src="js/horeka/plugins.js"></script>
        <script src="js/horeka/main.js"></script>
    </body>
</html>
