
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
                            <h2 class="page-title">Название товара</h2>
                            <ul>
                                <li>
                                    <a class="active" href="#">Главная</a>
                                </li>
                                <li>Название товара</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- breadcrumbs end -->
        <section class="portfolio-details ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
						<div class="portfolio-img">
							<img src="images/banner-about.jpg" alt="" />
						</div>
                    </div>
                </div>
				<div class="row pt-60">
					
					<div class="col-md-12">
						<div class="project-desc">
							<h3>Название товара</h3>
							<h5><b>Категория: </b>Название категории</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
							<p>vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
						</div>
						<div class="post-share">
							<ul>
								<li>Share: </li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
							</ul>
						</div>						
					</div>
				</div>
            </div>
        </section>

@endsection