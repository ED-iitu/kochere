@extends('layout.horeka')
@section('content')

    <div class="slider gray-bg slider-bg ptb-200">
      <div class="container">
        <div class="slider-info-text text-left">
          <div class="info-inner">
            <h1>Kochere.kz</h1>
            <span>Уют и тепло в каждом доме!</span> 
            <div class="view-more" style="margin-top: 50px">
            <a href="#">Подробнее</a>
            </div>         
          </div>
        </div>      
      </div>
    </div>
    
<!-- ПОСТЕЛЬНОЕ БЕЛЬЕ
ПОКРЫВАЛА
НАМАТРАСНИКИ
КУХОННЫЕ САЛФЕТКИ
ХАЛАТЫ
ПОЛОТЕНЦА
ОДЕЯЛА И ПОДУШКИ -->
  <section class="about-us-area ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
            <div class="about-minimal">
              <h2>Kochere.kz</h2>
              <p>Описание</p>

              <ul class="mb-40">
                <li>We love products that work perfectly and look beautiful.</li>
                <li>We create base on a deeply analysis of your project.</li>
                <li>We are create design with really high quality standards.</li>
              </ul>
              <a href="#">Подробнее о нас</a>

            </div>
                    </div>
          <div class="col-md-6">
            <div class="minimal-img">
              <img src="images/img-3.jpg" alt="" />
            </div>
          </div>
                </div>
            </div>
        </section>

    <!-- portfolio start -->
    <div class="portfolio-area ptb-90">
      <div class="container">
        <div class="portfolio-menu portfolio-left-menu text-left mb-50">
          <button class="active" data-filter="*">Все</button>
          <button data-filter=".cat1">ПОСТЕЛЬНОЕ БЕЛЬЕ </button>
          <button data-filter=".cat2">НАМАТРАСНИКИ</button>
          <button data-filter=".cat3">КУХОННЫЕ САЛФЕТКИ </button>
          <button data-filter=".cat3">ХАЛАТЫ </button>
          <button data-filter=".cat3">ПОЛОТЕНЦА </button>
          <button data-filter=".cat3">ОДЕЯЛА И ПОДУШКИ</button>
        </div>      
        <div class="row portfolio-style-2">
          <div class="grid">
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
              <div class="portfolio hover-style">
                <div class="portfolio-img">
                  <img src="images/img-1.jpg" alt="" />
                  <div class="portfolio-view">
                    <a class="img-poppu" href="images/img-1.jpg">
                      <span class="plus"></span>
                    </a>                
                  </div>
                </div>
                <div class="portfolio-title">
                  <h3><a href="{{route('detail')}}">TITLE GOES HERE</a></h3>
                  <span>Development</span>
                </div>                  
              </div>
            </div>          
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat2 cat3">
              <div class="portfolio hover-style">
                <div class="portfolio-img">
                  <img src="images/img-2.jpg" alt="" />
                  <div class="portfolio-view">
                    <a class="img-poppu" href="images/img-2.jpg">
                      <span class="plus"></span>
                    </a>                
                  </div>
                </div>
                <div class="portfolio-title">
                  <h3><a href="#">TITLE GOES HERE</a></h3>
                  <span>Development</span>
                </div>                
              </div>            
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
              <div class="portfolio hover-style">
                <div class="portfolio-img">
                  <img src="images/img-3.jpg" alt="" />
                  <div class="portfolio-view">
                    <a class="img-poppu" href="images/img-3.jpg">
                      <span class="plus"></span>
                    </a>                
                  </div>
                </div>
                <div class="portfolio-title">
                  <h3><a href="#">TITLE GOES HERE</a></h3>
                  <span>Development</span>
                </div>                
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat2">
              <div class="portfolio hover-style">
                <div class="portfolio-img">
                  <img src="images/img-4.jpg" alt="" />
                  <div class="portfolio-view">
                    <a class="img-poppu" href="images/img-4.jpg">
                      <span class="plus"></span>
                    </a>                
                  </div>
                </div>
                <div class="portfolio-title">
                  <h3><a href="#">TITLE GOES HERE</a></h3>
                  <span>Development</span>
                </div>                
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
              <div class="portfolio hover-style">
                <div class="portfolio-img">
                  <img src="images/img-5.jpg" alt="" />
                  <div class="portfolio-view">
                    <a class="img-poppu" href="images/img-5.jpg">
                      <span class="plus"></span>
                    </a>                
                  </div>
                </div>
                <div class="portfolio-title">
                  <h3><a href="#">TITLE GOES HERE</a></h3>
                  <span>Development</span>
                </div>              
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat3">
              <div class="portfolio hover-style">
                <div class="portfolio-img">
                  <img src="images/img-1.jpg" alt="" />
                  <div class="portfolio-view">
                    <a class="img-poppu" href="images/img-1.jpg">
                      <span class="plus"></span>
                    </a>                
                  </div>
                </div>
                <div class="portfolio-title">
                  <h3><a href="#">TITLE GOES HERE</a></h3>
                  <span>Development</span>
                </div>                
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat2 cat3">
              <div class="portfolio hover-style">
                <div class="portfolio-img">
                  <img src="images/img-2.jpg" alt="" />
                  <div class="portfolio-view">
                    <a class="img-poppu" href="images/img-2.jpg">
                      <span class="plus"></span>
                    </a>                
                  </div>
                </div>
                <div class="portfolio-title">
                  <h3><a href="#">TITLE GOES HERE</a></h3>
                  <span>Development</span>
                </div>                
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat3">
              <div class="portfolio hover-style">
                <div class="portfolio-img">
                  <img src="images/img-3.jpg" alt="" />
                  <div class="portfolio-view">
                    <a class="img-poppu" href="images/img-3.jpg">
                      <span class="plus"></span>
                    </a>                
                  </div>
                </div>
                <div class="portfolio-title">
                  <h3><a href="#">TITLE GOES HERE</a></h3>
                  <span>Development</span>
                </div>                
              </div>
            </div>
            <!-- <div class="col-md-4 col-sm-6 col-xs-12 grid-item cat1">
              <div class="portfolio hover-style">
                <div class="portfolio-img">
                  <img src="images/img-4.jpg" alt="" />
                </div>
                <div class="portfolio-title">
                  <h3><a href="#">TITLE GOES HERE</a></h3>
                  <span>Development</span>
                </div>                
              </div>
            </div> -->
          </div>    
        </div>
        <div class="view-more text-center">
          <a href="#">view more</a>
        </div>
      </div>
    </div>  
    <!-- portfolio start -->
    <!-- service-area start -->
    <div class="service-area gray-bg border-top pt-90 pb-50">
      <div class="container">
        <div class="section-title text-center mb-70">
          <h2>Наши Услуги</h2>
          <!-- <p>Описание услуги molestiae maiores, quidem cumque!</p> -->
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="single-service white-bg text-center">
              <i class="icon-laptop"></i>
              <h3>Услуга</h3>
              <p>Описание услуги </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="single-service white-bg text-center">
              <i class="icon-pencil"></i>
              <h3>Услуга </h3>
              <p>Описание услуги </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="single-service white-bg text-center">
              <i class="icon-camera"></i>
              <h3>Услуга</h3>
              <p>Описание услуги </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="single-service white-bg text-center">
              <i class="icon-linegraph "></i>
              <h3>Услуга</h3>
              <p>Описание услуги </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="single-service white-bg text-center">
              <i class="icon-gears "></i>
              <h3>Услуга</h3>
              <p>Описание услуги </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="single-service white-bg text-center xs-service">
              <i class="icon-briefcase "></i>
              <h3>Услуга</h3>
              <p>Описание услуги </p>
            </div>
          </div>
        </div>
      </div>
    </div>
   



@endsection