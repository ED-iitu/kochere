

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
                            <h2 class="page-title">Галерея</h2>
                            <ul>
                                <li>
                                    <a class="active" href="#">Главная</a>
                                </li>
                                <li>Галерея</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- breadcrumbs end -->
		<!-- portfolio start -->
		<div class="portfolio-area ptb-90">
			<div class="container-fluid">
				<div class="portfolio-menu text-center mb-50">
					  <button class="active" data-filter="*">Все</button>
			          <button data-filter=".cat1">ПОСТЕЛЬНОЕ БЕЛЬЕ </button>
			          <button data-filter=".cat2">НАМАТРАСНИКИ</button>
			          <button data-filter=".cat3">КУХОННЫЕ САЛФЕТКИ </button>
			          <button data-filter=".cat3">ХАЛАТЫ </button>
			          <button data-filter=".cat3">ПОЛОТЕНЦА </button>
			          <button data-filter=".cat3">ОДЕЯЛА И ПОДУШКИ</button>
				</div>			
				<div class="row">
					<div class="grid">
						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-1.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-1.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="{{route('detail')}}">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>							
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat2 cat3">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-2.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-2.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="#">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>	
							</div>						
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-3.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-3.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="#">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>	
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat2">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-4.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-4.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="#">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>	
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-5.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-5.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="#">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>	
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat3">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-1.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-1.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="#">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>	
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat2 cat3">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-2.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-2.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="#">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>	
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat3">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-3.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-3.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="#">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>	
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-4.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-4.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="#">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>	
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-5.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-5.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="#">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>	
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-1.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-1.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="#">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>	
							</div>
						</div>

						<div class="col-md-3 col-sm-6 col-xs-12 grid-item cat1">
							<div class="portfolio hover-style">
								<div class="portfolio-img">
									<img src="images/img-2.jpg" alt="" />
									<div class="portfolio-view">
										<a class="img-poppu" href="images/img-2.jpg">
											<span class="plus"></span>
										</a>								
									</div>									
									<div class="portfolio-title title-style-1">
										<h3><a href="#">TITLE GOES HERE</a></h3>
										<span>Development</span>
									</div>	
								</div>	
							</div>
						</div>
					</div>		
				</div>
				<div class="view-more text-center">
					<a href="#">view more</a>
				</div>
			</div>
		</div>


		@endsection