@extends('layout.horeka')
@section('content')



<div class="header-space"></div>
		<!-- header end -->
		<!-- breadcrumbs start -->
		<section class="breadcrumbs-area gray-bg ptb-100 port bread-card solid-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="breadcrumbs">
                            <h2 class="page-title">Контакты</h2>
                            <ul>
                                <li>
                                    <a class="active" href="#">Главная</a>
                                </li>
                                <li>Контакты
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- breadcrumbs end -->
        <section class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-area-all">
                            <div id="hastech2"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="conract-area-bottom">
                            <h3 class="main-contact">Отправте нам сообщение</h3>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-input">
                                            <input name="name" placeholder="Имя*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-input mrg-eml mrg-contact">
                                            <input name="email" placeholder="Email*" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="main-input mt-20 mb-20">
                                            <input name="subject" placeholder="Предмет*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-leave2">
                                            <textarea name="message" placeholder="Ваше сообщение......."></textarea>
                                            <button class="submit" type="submit">Отправить</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- footer start -->
		 <script type="text/javascript">
            // grab an element
            var myElement = document.querySelector(".intelligent-header");
            // construct an instance of Headroom, passing the element
            var headroom  = new Headroom(myElement);
            // initialise
            headroom.init(); 
        </script>		
        <!-- google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZPf84AAVt8_FFN7rwQY5nPgB02SlTKs "></script>
        <script>
            var myCenter=new google.maps.LatLng(30.249796, -97.754667);
            function initialize()
            {
                var mapProp = {
                  center:myCenter,
                  scrollwheel: false,
                  zoom:15,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };
                var map=new google.maps.Map(document.getElementById("hastech2"),mapProp);
                var marker=new google.maps.Marker({
                  position:myCenter,
                    animation:google.maps.Animation.BOUNCE,
                  icon:'',
                    map: map,
                  });
                var styles = [
                  {
                    stylers: [
                      { hue: "#c5c5c5" },
                      { saturation: -100 }
                    ]
                  },
                ];
                map.setOptions({styles: styles});
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <script src="js/horeka/main.js"></script>

@endsection