
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
                            <h2 class="page-title">Оставьте онлайн заявку</h2>
                            <ul>
                                <li>
                                    <a class="active" href="#">Главная</a>
                                </li>
                                <li>Онлайн заявка</li>
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
						<div class="portfolio-img portfolio-slider">
							<img src="images/banner-about.jpg" alt="" />
							<img src="img/portfolio/details/2.jpg" alt="" />
							<img src="img/portfolio/details/1.jpg" alt="" />
						</div>
                    </div>
                </div>
				<div class="row pt-60">
					
					<div class="col-md-12">
						<div class="project-desc">
							<h3>Онлайн заявка</h3>
						</div>
						

						<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Введите ваш номер</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="номер">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Выберите тип ткани</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Ажур</option>
      <option>Бархат</option>
      <option>Войлок</option>
      <option>Драп</option>
      <option>Кашемир</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Выберите размер ткани(cm)</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>100 x 100</option>
      <option>200 x 200</option>
      <option>300 x 300</option>
      <option>400 x 400</option>
      <option>500 x 500</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Цвет ткани</label>
    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Цвет">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Оставьте комментарий к вашей заявке</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <br>
    <button class="submit" type="submit">Отправить Форму</button>
  </div>

  
  
</form>

					</div>
				</div>
            </div>
        </section>

@endsection