<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Elearn</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Elearn project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('src/'); ?>styles/bootstrap4/bootstrap.min.css">
	<link href="<?php echo site_url('src/'); ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('src/'); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('src/'); ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('src/'); ?>plugins/OwlCarousel2-2.2.1/animate.css">
	<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('src/'); ?>styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('src/'); ?>styles/responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->
			<div class="top_bar">
				<div class="top_bar_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
									<ul class="top_bar_contact_list">
										<li>
											<div class="question">Tem alguma dúvida?</div>
										</li>
										<li>
											<div>(091) 99188-2198</div>
										</li>
										<li>
											<div>contato@estimulardigital.com</div>
										</li>
									</ul>
									<div class="top_bar_login ml-auto">
										<ul>
											<li><a href="#">Fazer Registro</a></li>
											<li><a href="#">Fazer Login</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Content -->
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo_container">
									<a href="#">
										<div class="logo_content d-flex flex-row align-items-end justify-content-start">
											<div class="logo_img"><img src="<?php echo site_url('src/'); ?>images/logo-azul.png" width="80" alt=""></div>
											<div class="logo_text"></div>
										</div>
									</a>
								</div>
								<nav class="main_nav_contaner ml-auto">
									<ul class="main_nav">
										<li class="active"><a href="#">Início</a></li>
										<li><a href="#">Sobre Nós</a></li>
										<li><a href="#">Cursos</a></li>
										<!-- <li><a href="news.html">news</a></li>-->
										<li><a href="#">Contato</a></li>
									</ul>
									<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

									<!-- Hamburger -->

									<div class="hamburger menu_mm">
										<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
									</div>
								</nav>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Search Panel -->
			<div class="header_search_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
								<form action="#" class="header_search_form">
									<input type="search" class="search_input" placeholder="Search" required="required">
									<button
										class="header_search_button d-flex flex-column align-items-center justify-content-center">
										<i class="fa fa-search" aria-hidden="true"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Menu -->

		<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
			<div class="menu_close_container">
				<div class="menu_close">
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="search">
				<form action="#" class="header_search_form menu_mm">
					<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
					<button
						class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
						<i class="fa fa-search menu_mm" aria-hidden="true"></i>
					</button>
				</form>
			</div>
			<nav class="menu_nav">
				<ul class="menu_mm">
					<li class="menu_mm"><a href="#">Início</a></li>
					<li class="menu_mm"><a href="#">Cursos</a></li>
					<li class="menu_mm"><a href="#">Instrutores</a></li>
					<li class="menu_mm"><a href="#">Eventos</a></li>
					<li class="menu_mm"><a href="#">Blog</a></li>
					<li class="menu_mm"><a href="#">Contato</a></li>
				</ul>
			</nav>
			<div class="menu_extra">
				<div class="menu_phone"><span class="menu_title">Telefone:</span>(91) 99999-1111</div>
				<div class="menu_social">
					<span class="menu_title">siga-nos</span>
					<ul>
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
			<div class="home_slider_container">

				<!-- Home Slider -->
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slider Item -->
					<div class="owl-item">
						<!-- Background image artist https://unsplash.com/@benwhitephotography -->
						<div class="home_slider_background" style="background-image:url(<?php echo site_url('src/'); ?>images/index.jpg)"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content text-center">
											<div class="home_logo"><img src="<?php echo site_url('src/'); ?>images/logo-laranja.png" width="100px" alt=""></div>
											<div class="home_text">
												<div class="home_title">Plataforma de Cursos Online</div>
												<div class="home_subtitle">Aprenda de forma flexível.</div>
											</div>
											<div class="home_buttons">
												<div class="button home_button"><a href="#">saiba mais<div
															class="button_arrow"><i class="fa fa-angle-right"
																aria-hidden="true"></i></div></a></div>
												<div class="button home_button"><a href="#">veja todos os cursos<div
															class="button_arrow"><i class="fa fa-angle-right"
																aria-hidden="true"></i></div></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item">
						<!-- Background image artist https://unsplash.com/@benwhitephotography -->
						<div class="home_slider_background" style="background-image:url(<?php echo site_url('src/'); ?>images/index.jpg)"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content text-center">
											<div class="home_logo"><img src="<?php echo site_url('src/'); ?>images/home_logo.png" alt=""></div>
											<div class="home_text">
												<div class="home_title">Cursos Online</div>
												<div class="home_subtitle">Sempre é tempo de aprender!</div>
											</div>
											<div class="home_buttons">
												<div class="button home_button"><a href="#">saiba mais<div
															class="button_arrow"><i class="fa fa-angle-right"
																aria-hidden="true"></i></div></a></div>
												<div class="button home_button"><a href="#">veja todos os cursos<div
															class="button_arrow"><i class="fa fa-angle-right"
																aria-hidden="true"></i></div></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item">
						<!-- Background image artist https://unsplash.com/@benwhitephotography -->
						<div class="home_slider_background" style="background-image:url(<?php echo site_url('src/'); ?>images/index.jpg)"></div>
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content text-center">
											<div class="home_logo"><img src="<?php echo site_url('src/'); ?>images/home_logo.png" alt=""></div>
											<div class="home_text">
												<div class="home_title">Cursos Online Completos</div>
												<div class="home_subtitle">Cursos que abrangem todo o
													conhecimento e preparo que você precisa!</div>
											</div>
											<div class="home_buttons">
												<div class="button home_button"><a href="#">learn more<div
															class="button_arrow"><i class="fa fa-angle-right"
																aria-hidden="true"></i></div></a></div>
												<div class="button home_button"><a href="#">see all courses<div
															class="button_arrow"><i class="fa fa-angle-right"
																aria-hidden="true"></i></div></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Featured Course -->

		<div class="featured">
			<div class="container">
				<div class="row">
					<div class="col">
						<!-- Home Slider Nav -->
						<div
							class="home_slider_nav_container d-flex flex-row align-items-start justify-content-between">
							<div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left"
									aria-hidden="true"></i></div>
							<div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right"
									aria-hidden="true"></i></div>
						</div>
						<div class="featured_container">
							<div class="row">
								<div class="col-lg-6 featured_col">
									<div class="featured_content">
										<div
											class="featured_header d-flex flex-row align-items-center justify-content-start">
											<div class="featured_tag"><a href="#">Disponível</a></div>
											<div class="featured_price ml-auto">Preço: <span>R$359,90</span></div>
										</div>
										<div class="featured_title">
											<h3><a href="#">Curso de Exemplo 01</a></h3>
										</div>
										<div class="featured_text">Aqui uma breve descrição do curso para
											para orientar os alunos.</div>
										<div class="featured_footer d-flex align-items-center justify-content-start">
											<div class="featured_author_image"><img src="<?php echo site_url('src/'); ?>images/jobson.jpg" alt="">
											</div>
											<div class="featured_author_name">By <a href="#">Jobson Tavares</a></div>
											<div class="featured_sales ml-auto"><span>352</span> alunos</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 featured_col">
									<!-- Background image artist https://unsplash.com/@jtylernix -->
									<div class="featured_background" style="background-image:url(<?php echo site_url('src/'); ?>images/featured.jpg)">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Courses -->

		<div class="courses">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="section_title text-center">
							<h2>Curso de Exemplo 02</h2>
						</div>
						<div class="section_subtitle">Aqui uma breve descrição do curso para
							para orientar os alunos.</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="course_search">
							<form action="#"
								class="course_search_form d-flex flex-md-row flex-column align-items-start justify-content-between">
								<div><input type="text" class="course_input" placeholder="Curso" required="required">
								</div>
								<div><input type="text" class="course_input" placeholder="Área" required="required">
								</div>
								<button class="course_button"><span>buscar cursos</span><span class="button_arrow"><i
											class="fa fa-angle-right" aria-hidden="true"></i></span></button>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">

						<!-- Courses Slider -->
						<div class="courses_slider_container">
							<div class="owl-carousel owl-theme courses_slider">

								<!-- Slider Item -->
								<div class="owl-item">
									<div class="course">
										<div class="course_image"><img src="<?php echo site_url('src/'); ?>images/course_1.jpg" alt=""></div>
										<div class="course_body">
											<div
												class="course_header d-flex flex-row align-items-center justify-content-start">
												<div class="course_tag"><a href="#">Disponíveis</a></div>
												<div class="course_price ml-auto">Preço: <span>R$350,00</span></div>
											</div>
											<div class="course_title">
												<h3><a href="#">Curso de Exemplo 01</a></h3>
											</div>
											<div class="course_text">Aqui uma breve descrição do curso para
												para orientar os alunos.</div>
											<div class="course_footer d-flex align-items-center justify-content-start">
												<div class="course_author_image"><img src="<?php echo site_url('src/'); ?>images/jobson.jpg"
														alt=""></div>
												<div class="course_author_name">Por <a href="#">Jobson Tavares</a>
												</div>
												<div class="course_sales ml-auto"><span>352</span> Alunos</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Slider Item -->
								<div class="owl-item">
									<div class="course">
										<div class="course_image"><img src="<?php echo site_url('src/'); ?>images/course_2.jpg" alt=""></div>
										<div class="course_body">
											<div
												class="course_header d-flex flex-row align-items-center justify-content-start">
												<div class="course_tag"><a href="#">Novo</a></div>
												<div class="course_price ml-auto">Preço: <span>R$499,90</span></div>
											</div>
											<div class="course_title">
												<h3><a href="#">Curso de Exemplo 02</a></h3>
											</div>
											<div class="course_text">Aqui uma breve descrição do curso para
												para orientar os alunos.</div>
											<div class="course_footer d-flex align-items-center justify-content-start">
												<div class="course_author_image"><img src="<?php echo site_url('src/'); ?>images/jobson.jpg" alt="">
												</div>
												<div class="course_author_name">Por <a href="#">Jobson Tavares</a></div>
												<div class="course_sales ml-auto"><span>352</span> Alunos</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Slider Item -->
								<div class="owl-item">
									<div class="course">
										<div class="course_image"><img src="<?php echo site_url('src/'); ?>images/course_3.jpg"
												alt="https://unsplash.com/@annademy"></div>
										<div class="course_body">
											<div
												class="course_header d-flex flex-row align-items-center justify-content-start">
												<div class="course_tag"><a href="#">Disponível</a></div>
												<div class="course_price ml-auto">Preço: <span>R$399,90</span></div>
											</div>
											<div class="course_title">
												<h3><a href="#">Curso de Exemplo 03</a></h3>
											</div>
											<div class="course_text">Aqui uma breve descrição do curso para
												para orientar os alunos...</div>
											<div class="course_footer d-flex align-items-center justify-content-start">
												<div class="course_author_image"><img src="<?php echo site_url('src/'); ?>images/jobson.jpg" alt="">
												</div>
												<div class="course_author_name">Por <a href="#">Jobson Tavares</a></div>
												<div class="course_sales ml-auto"><span>352</span> Alunos</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							<!-- Courses Slider Nav -->
							<div class="courses_slider_nav courses_slider_prev trans_200"><i class="fa fa-angle-left"
									aria-hidden="true"></i></div>
							<div class="courses_slider_nav courses_slider_next trans_200"><i class="fa fa-angle-right"
									aria-hidden="true"></i></div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Milestones -->

		<div class="milestones">
			<!-- Background image artis https://unsplash.com/@thepootphotographer -->
			<div class="parallax_background parallax-window" data-parallax="scroll"
				data-image-src="<?php echo site_url('src/'); ?>images/milestones.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row milestones_container">

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="<?php echo site_url('src/'); ?>images/milestone_1.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="1548">0</div>
							<div class="milestone_text">Cursos Online</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="<?php echo site_url('src/'); ?>images/milestone_2.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="7286">0</div>
							<div class="milestone_text">Estudantes</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="<?php echo site_url('src/'); ?>images/milestone_3.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="257">0</div>
							<div class="milestone_text">Professores</div>
						</div>
					</div>

					<!-- Milestone --
					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img src="images/milestone_4.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="39">0</div>
							<div class="milestone_text">Countries</div>
						</div>
					</div>-->

				</div>
			</div>
		</div>

		<!-- Sections -->

		<div class="grouped_sections">
			<div class="container">
				<div class="row">

					<!-- Why Choose Us -->

					<div class="col-lg-4 grouped_col">
						<div class="grouped_title">Quem somos?</div>
						<div class="accordions">

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center active">
									<div>Jobson Tavares</div>
								</div>
								<div class="accordion_panel">
									<div>
										<p>Uma breve biografia. Uma breve biografia. Uma breve biografia.
											Uma breve biografia.Uma breve biografia.Uma breve biografia.
											Uma breve biografia.Uma breve biografia.Uma breve biografia.
											Uma breve biografia.Uma breve biografia.Uma breve biografia.Uma breve
											biografia.</p>
									</div>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center">
									<div>Nossos Valores</div>
								</div>
								<div class="accordion_panel">
									<div>
										<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
											pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem
											venenatis in. Aenean id varius quam.</p>
									</div>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center">
									<div>Nossa Metodologia</div>
								</div>
								<div class="accordion_panel">
									<div>
										<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
											pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem
											venenatis in. Aenean id varius quam.</p>
									</div>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center">
									<div>Nosso Compromisso</div>
								</div>
								<div class="accordion_panel">
									<div>
										<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
											pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem
											venenatis in. Aenean id varius quam.</p>
									</div>
								</div>
							</div>

						</div>

					</div>

					<!-- Events -->

					<div class="col-lg-4 grouped_col">
						<div class="grouped_title">Em Breve...</div>
						<div class="events">

							<!-- Event -->
							<div class="event d-flex flex-row align-items-start justify-content-start">
								<div>
									<div
										class="event_date d-flex flex-column align-items-center justify-content-center">
										<div class="event_day">20</div>
										<div class="event_month">Maio</div>
									</div>
								</div>
								<div class="event_body">
									<div class="event_title"><a href="#">Evento Exemplo 01</a></div>
									<div class="event_subtitle">Local: Plataforma Online</div>
								</div>
							</div>

							<!-- Event -->
							<div class="event d-flex flex-row align-items-start justify-content-start">
								<div>
									<div
										class="event_date d-flex flex-column align-items-center justify-content-center">
										<div class="event_day">23</div>
										<div class="event_month">Maio</div>
									</div>
								</div>
								<div class="event_body">
									<div class="event_title"><a href="#">Evento Exemplo 02</a></div>
									<div class="event_subtitle">Local: Plataforma Online</div>
								</div>
							</div>

							<!-- Event -->
							<div class="event d-flex flex-row align-items-start justify-content-start">
								<div>
									<div
										class="event_date d-flex flex-column align-items-center justify-content-center">
										<div class="event_day">25</div>
										<div class="event_month">Maio</div>
									</div>
								</div>
								<div class="event_body">
									<div class="event_title"><a href="#">Evento Ao Vivo!</a></div>
									<div class="event_subtitle">Local: Plataforma Online</div>
								</div>
							</div>

							<!-- Event -->
							<div class="event d-flex flex-row align-items-start justify-content-start">
								<div>
									<div
										class="event_date d-flex flex-column align-items-center justify-content-center">
										<div class="event_day">27</div>
										<div class="event_month">Maio</div>
									</div>
								</div>
								<div class="event_body">
									<div class="event_title"><a href="#">Novo Evento</a></div>
									<div class="event_subtitle">Local: Plataforma Online</div>
								</div>
							</div>

							<!-- Event -->
							<div class="event d-flex flex-row align-items-start justify-content-start">
								<div>
									<div
										class="event_date d-flex flex-column align-items-center justify-content-center">
										<div class="event_day">29</div>
										<div class="event_month">Maio</div>
									</div>
								</div>
								<div class="event_body">
									<div class="event_title"><a href="#">Outro Evento</a></div>
									<div class="event_subtitle">Local: Plataforma Online</div>
								</div>
							</div>

						</div>
					</div>

					<!-- News -->

					<div class="col-lg-4 grouped_col">
						<div class="grouped_title">Notícias</div>
						<div class="news">

							<!-- News Post -->
							<div class="news_post d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="news_post_image"><img src="<?php echo site_url('src/'); ?>images/news_1.jpg"
											alt=""></div>
								</div>
								<div class="news_post_body">
									<div class="news_post_date">02 de Abril de 2022</div>
									<div class="news_post_title"><a href="#">Por que fazer um curso online?</a>
									</div>
									<div class="news_post_author">Por <a href="#">Jobson Tavares</a></div>
								</div>
							</div>

							<!-- News Post -->
							<div class="news_post d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="news_post_image"><img src="<?php echo site_url('src/'); ?>images/news_2.jpg"
											alt=""></div>
								</div>
								<div class="news_post_body">
									<div class="news_post_date">12 de Abril de 2022</div>
									<div class="news_post_title"><a href="#">Livros, Kindle ou tablets?</a>
									</div>
									<div class="news_post_author">Por <a href="#">Jobson Tavares</a></div>
								</div>
							</div>

							<!-- News Post -->
							<div class="news_post d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="news_post_image"><img src="<?php echo site_url('src/'); ?>images/news_3.jpg"
											alt=""></div>
								</div>
								<div class="news_post_body">
									<div class="news_post_date">20 de Abril de 2022</div>
									<div class="news_post_title"><a href="#">Qual o seu tema de interesse?</a>
									</div>
									<div class="news_post_author">Por <a href="#">Jobson Tavares</a></div>
								</div>
							</div>

							<!-- News Post -->
							<div class="news_post d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="news_post_image"><img src="<?php echo site_url('src/'); ?>images/news_4.jpg"
											alt=""></div>
								</div>
								<div class="news_post_body">
									<div class="news_post_date">22 de Abril de 2022</div>
									<div class="news_post_title"><a href="#">Books, Kindle or tablet?</a></div>
									<div class="news_post_author">Por <a href="#">Jobson Tavares</a></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Video -->

		<div class="video">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="video_container_outer">
							<div class="video_container">
								<!-- Video poster image artist: https://unsplash.com/@annademy -->
								<video id="vid1" class="video-js vjs-default-skin" controls
									data-setup='{ "poster": "<?php echo site_url('src/'); ?>images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/5_MRXyYjHDk"}], "youtube": { "iv_load_policy": 1 } }'>
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Join -->

		<div class="join">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="section_title text-center">
							<h2>Acesse nossa Plataforma de Cursos Hoje!</h2>
						</div>
						<div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut
							euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in.
							Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
					</div>
				</div>
			</div>
			<div class="button join_button"><a href="#">Matricule-se já<div class="button_arrow"><i
							class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">

					<!-- About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo_container">
								<a href="#">
									<div class="logo_content d-flex flex-row align-items-end justify-content-start">
										<div class="logo_img" ><img src="<?php echo site_url('src/'); ?>images/logo-laranja.png" width="100" alt=""></div>
										<div class="logo_text"></div>
									</div>
								</a>
							</div>
							<div class="footer_about_text">
								<p>Sempre é tempo de crescer!</p>
							</div>
							<div class="footer_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados
								| Esta plataforma foi desenvolvida com <i class="fa fa-heart-o" aria-hidden="true"></i>
								by <a href="https://estimulardigital.com" target="_blank">Estimular Digital</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
					</div>

					<div class="col-lg-3 footer_col">
						<div class="footer_links">
							<div class="footer_title">Menu rápido</div>
							<ul class="footer_list">
								<li><a href="#">Início</a></li>
								<li><a href="#">Sobre Nós</a></li>
								<li><a href="#">Testemunhos</a></li>
								<li><a href="#">Cursos</a></li>
								<li><a href="#">Contato</a></li>
								<li><a href="#">Notícias</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 footer_col">
						<div class="footer_links">
							<div class="footer_title">Links úteis</div>
							<ul class="footer_list">
								<li><a href="#">Cursos</a></li>
								<li><a href="#">Eventos</a></li>
								<li><a href="#">Notícias</a></li>
								<li><a href="#">Professores</a></li>
								<li><a href="#">Links</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 footer_col">
						<div class="footer_contact">
							<div class="footer_title">Entre em Contato</div>
							<div class="footer_contact_info">
								<div class="footer_contact_item">
									<div class="footer_contact_title">Endereço:</div>
									<div class="footer_contact_line">1481 Rua, Bairro, Cidade-UF, CEP 66000-000</div>
								</div>
								<div class="footer_contact_item">
									<div class="footer_contact_title">Telefone:</div>
									<div class="footer_contact_line">+55 91 99999-9999</div>
								</div>
								<div class="footer_contact_item">
									<div class="footer_contact_title">E-mail:</div>
									<div class="footer_contact_line">email@seuemail.com</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="<?php echo site_url('src/'); ?>js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo site_url('src/'); ?>styles/bootstrap4/popper.js"></script>
	<script src="<?php echo site_url('src/'); ?>styles/bootstrap4/bootstrap.min.js"></script>
	<script src="<?php echo site_url('src/'); ?>plugins/greensock/TweenMax.min.js"></script>
	<script src="<?php echo site_url('src/'); ?>plugins/greensock/TimelineMax.min.js"></script>
	<script src="<?php echo site_url('src/'); ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="<?php echo site_url('src/'); ?>plugins/greensock/animation.gsap.min.js"></script>
	<script src="<?php echo site_url('src/'); ?>plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="<?php echo site_url('src/'); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="<?php echo site_url('src/'); ?>plugins/easing/easing.js"></script>
	<script src="<?php echo site_url('src/'); ?>plugins/video-js/video.min.js"></script>
	<script src="<?php echo site_url('src/'); ?>plugins/video-js/Youtube.min.js"></script>
	<script src="<?php echo site_url('src/'); ?>plugins/parallax-js-master/parallax.min.js"></script>
	<script src="<?php echo site_url('src/'); ?>js/custom.js"></script>
</body>

</html>