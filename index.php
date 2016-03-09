<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<title>Главная</title>
	
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="fancybox/jquery.fancybox.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/jquery.fancybox.css">
	<link type="text/css" href="css/style.css" rel="stylesheet">
	<link type="text/css" href="css/media.css" rel="stylesheet">
			
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
		<header>
			<div class="row">
				<div class="col-sm-3 logo">
					<a href="/"><img src="images/logo.png" alt="Лого" title="Лого"></a>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-5 header-partner">
					<div>Официальный партнер 1С<br>&emsp; Франчайзинг</div>
				</div>
				<div class="col-lg-3 col-md-3 hidden-sm col-lg-offset-1">
					<div class="header-phone">+7 (3952) 758-198 </div>
				</div>
				<div class="col-md-2 col-sm-4">
					<div class="header-e-mail"><a href="mailto:it@evrysoft.ru">it@evrysoft.ru</a></div>
					<div class="header-phone visible-sm">+7 (3952) 758-198 </div>
					<div class="header-btn">
						<a href="#popupform" class="btn btn-blue" id="popupbutton">Закажите звонок</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</header>
	</div>

	<div id="popupform">
		<h2>Заказать обратный звонок</h2>
		<div class="comment">Наш менеджер перезвонит Вам с 9.00 до 18.00</div>
		<form method="post" id="form-feedback">
			<input type="text" placeholder="Представьтесь, пожалуйста" name="name" id="name" class="input_text"/>
			<div id="bthrow_error_name"></div>
			<input type="text" placeholder="Телефон*" name="phone" id="phone" class="input_text" required >
			<div id="bthrow_error_phone"></div>
			<input class="btn btn-blue" type="submit" value="Заказать звонок">
			<div class="throw_error"></div>
		</form>
	</div>

	<div class="top-menu">
		<div class="container">
			<div class="row">
				<nav role="navigation" class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only">Меню</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="navbar-collapse collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#" class="index"><img src="images/top-menu-index.png" title="Главная" alt="Главная"></a></li>
							<li class="dropdown active">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#">Продукты <b class="caret"></b></a>
								<ul role="menu" class="dropdown-menu">
									<li><a href="#">Универсальные решения</a></li>
									<li><a href="#">Отраслевые решения</a></li>
									<li class="active"><a href="#">Наши решения</a></li>
									<li><a href="#">Лицензии на 1С</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#">Услуги <b class="caret"></b></a>
								<ul role="menu" class="dropdown-menu">
									<li><a href="#">Настройка и доработка</a></li>
									<li><a href="#">Сопровождение и поддержка</a></li>
									<li><a href="#">Консалтинг</a></li>
									<li><a href="#">Аренда</a></li>
									<li><a href="#">Автоматизация бизнес-процессов</a></li>
								</ul>
							</li>
							<li><a href="#">Обучение</a></li>
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#">Компания <b class="caret"></b></a>
								<ul role="menu" class="dropdown-menu">
									<li><a href="#">Миссия</a></li>
									<li><a href="#">Видение</a></li>
									<li><a href="#">Цели</a></li>
									<li><a href="#">Сотрудники</a></li>
									<li><a href="#">Отзывы</a></li>
									<li><a href="#">Хочу у вас работать</a></li>
									<li><a href="#">Партнеры</a></li>
									<li><a href="#">Новости</a></li>
								</ul>
							</li>
							<li><a href="#">Проекты</a></li>
							<li><a href="#">Статьи</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div><!-- end top-menu -->
	<div class="contant">
		<div class="index-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<a href="#" class="buy-1c">
							<span class="table-cell">
								<span class="big">Купить 1С</span><br>
								<span class="small">Программные продукты 1С</span>
							</span>
						</a>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="#" class="rent-1c">
							<span class="table-cell">
								<span class="big">Аренда 1С</span><br>
								<span class="small">Аренда серверов для 1С</span>
							</span>
						</a>
					</div>
					<div class="clearfix visible-sm"></div>
					<div class="col-md-4 col-sm-6">
						<a href="#" class="setting-1c">
							<span class="table-cell">
								<span class="big">Настройка 1С</span><br>
								<span class="small">Настройка и доработка 1С</span>
							</span>
						</a>
					</div>
					<div class="clearfix visible-md"></div>
					<div class="col-md-4 col-sm-6">
						<a href="#" class="site">
							<span class="table-cell">
								<span class="big">Сайт</span><br>
								<span class="small">Разработка, продвижение, интеграция с 1С</span>
							</span>
						</a>
					</div>
					<div class="clearfix visible-sm"></div>
					<div class="col-md-4 col-sm-6">
						<a href="#" class="training-1c">
							<span class="table-cell">
								<span class="big">Обучение 1С</span><br>
								<span class="small">Сертифицированный центр обучения</span>
							</span>
						</a>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href="#" class="support-1c">
							<span class="table-cell">
								<span class="big">Сопровождение 1С</span><br>
								<span class="small">Сопровождение и поддержка 1С</span>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div><!-- end index-menu -->
		<div class="index-projects">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<a href="#">
							<span class="table">
								<span class="table-cell">
									<img src="images/index-projects-1.png" alt="" title="">
									<span class="hover"></span>
								</span>
							</span>
							<span class="text">Настройка 1С: Бухгалтерия 7.0 для ООО “PSVITA”</span>
						</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<a href="#">
							<span class="table">
								<span class="table-cell">
									<img src="images/index-projects-2.png" alt="" title="">
									<span class="hover"></span>
								</span>
							</span>
							<span class="text">Настройка 1С: Бухгалтерия 7.0 для ООО “PSVITA”</span>
						</a>
					</div>
					<div class="clearfix visible-sm"></div>
					<div class="col-md-3 col-sm-6">
						<a href="#">
							<span class="table">
								<span class="table-cell">
									<img src="images/index-projects-3.png" alt="" title="">
									<span class="hover"></span>
								</span>
							</span>
							<span class="text">Настройка 1С: Бухгалтерия 7.0 для ООО “PSVITA”</span>
						</a>
					</div>
					<div class="col-md-3 col-sm-6">
						<a href="#">
							<span class="table">
								<span class="table-cell">
									<img src="images/index-projects-4.png" alt="" title="">
									<span class="hover"></span>
								</span>
							</span>
							<span class="text">Настройка 1С: Бухгалтерия 7.0 для ООО “PSVITA”</span>
						</a>
					</div>
				</div>
			</div>
		</div><!-- end index-projects -->
		<div class="btn btn-orange btn-projects">Все проекты</div>
		<div class="reviews"><!-- end reviews -->
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-sm-12 col-lg-offset-1">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<div class="logo">
										<img src="images/index-reviews.png" alt="" title="">
										<p class="name-company">
											ООО “Название компании”<br>
											<span>(производство молочных продуктов)</span>
										</p>
									</div>
									<div class="text">
										<a href="images/for_fancybox_1.jpg" class="fancybox skan" data-fancybox-group="gallery"><b></b>скан отзыва</a>
										<div class="clearfix"></div>
										<p>Это развивающийся портал контентного наполнения сайтов. Карьерный рост здесь –  престижно для многих копирайтеров и заказчиков. Компания проводит постоянный мониторинг сайтов -конкурентов, а потому динамично развивается с введением чего-то нового, но уже востребованного.</p>
										<p>Пока спектр услуг здесь не очень широк – биржи копирайтинга и рерайтинга, магазин статей и новостей – но сайт обещает не останавливаться на достигнутом, а прогрессировать семимильными шагами.</p>
										<p class="name">
											<b>Иванов</b><br>
											<b>Петр Васильевич</b><br>
											Генеральный директор
										</p>
									</div>
								</div>
								<div class="item">
									<div class="logo">
										<img src="images/index-reviews.png" alt="" title="">
										<p class="name-company">
											ООО “Название компании”<br>
											<span>(производство молочных продуктов)</span>
										</p>
									</div>
									<div class="text">
										<a href="images/for_fancybox_2.jpg" class="fancybox skan" data-fancybox-group="gallery"><b></b>скан отзыва</a>
										<div class="clearfix"></div>
										<p>Это развивающийся портал контентного наполнения сайтов. Карьерный рост здесь –  престижно для многих копирайтеров и заказчиков. Компания проводит постоянный мониторинг сайтов -конкурентов, а потому динамично развивается с введением чего-то нового, но уже востребованного.</p>
										<p>Пока спектр услуг здесь не очень широк – биржи копирайтинга и рерайтинга, магазин статей и новостей – но сайт обещает не останавливаться на достигнутом, а прогрессировать семимильными шагами.</p>
										<p class="name">
											<b>Иванов</b><br>
											<b>Петр Васильевич</b><br>
											Генеральный директор
										</p>
									</div>
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-xs-12">
						<a href="#" class="btn btn-orange">Все отзывы</a>
					</div>
				</div>
			</div>
		</div><!-- end reviews -->
	</div>
	<footer>
		<div class="footer-menu"><!-- end footer-menu -->
			<div class="container">
				<div class="row">
					<b class="line"></b>
					<div class="col-xs-6 col-md-3">
						<div class="name">Продукты 1С</div>
						<ul>
							<li><a href="#">1С:Предприятие 8 для управления и учета</a></li>
							<li><a href="#">1С:Бухгалтерия 8 </a></li>
							<li><a href="#">1С:Предприятие </a></li>
							<li><a href="#">Предыдущие версии: 7.7</a></li>
							<li><a href="#">1С:Совместимо</a></li>
							<li><a href="#">1С:Бухгалтерия 8 </a></li>
							<li><a href="#">1С:Предприятие </a></li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-3">
						<div class="name">Продукты 1С</div>
						<ul>
							<li><a href="#">1С:Предприятие 8 для управления и учета</a></li>
							<li><a href="#">1С:Бухгалтерия 8 </a></li>
							<li><a href="#">1С:Предприятие </a></li>
							<li><a href="#">Предыдущие версии: 7.7</a></li>
							<li><a href="#">1С:Совместимо</a></li>
							<li><a href="#">1С:Бухгалтерия 8 </a></li>
							<li><a href="#">1С:Предприятие </a></li>
						</ul>
					</div>
					<div class="clearfix visible-xs"></div>
					<div class="col-xs-6 col-md-3">
						<div class="name">Продукты 1С</div>
						<ul>
							<li><a href="#">1С:Предприятие 8 для управления и учета</a></li>
							<li><a href="#">1С:Бухгалтерия 8 </a></li>
							<li><a href="#">1С:Предприятие </a></li>
							<li><a href="#">Предыдущие версии: 7.7</a></li>
							<li><a href="#">1С:Совместимо</a></li>
							<li><a href="#">1С:Бухгалтерия 8 </a></li>
							<li><a href="#">1С:Предприятие </a></li>
						</ul>
					</div>
					<div class="col-xs-6 col-md-3">
						<div class="name">Продукты 1С</div>
						<ul>
							<li><a href="#">1С:Предприятие 8 для управления и учета</a></li>
							<li><a href="#">1С:Бухгалтерия 8 </a></li>
							<li><a href="#">1С:Предприятие </a></li>
							<li><a href="#">Предыдущие версии: 7.7</a></li>
							<li><a href="#">1С:Совместимо</a></li>
							<li><a href="#">1С:Бухгалтерия 8 </a></li>
							<li><a href="#">1С:Предприятие </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- end footer-menu -->
		<div class="footer-copy">
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						© ООО «ЭвриСофт», 2000—2015<br>
						+7 (3952) 758-198, <a href="mailto:it@evrysoft.ru" class="email">it@evrysoft.ru</a>
					</div>
					<div class="col-xs-6 right">
						Дизайн <a href="#">Шепитько Татьяна</a><br>
						Программирование <a href="#">Иванов Сергей</a>
					</div>
				</div>
			</div>
		</div><!-- end footer-copy -->
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>