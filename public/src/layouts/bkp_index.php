<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Estimular Digital<?php echo ' | ' . $this->renderSection('titulo'); ?></title>
    <link rel="shortcut icon" href="<?php echo site_url('src/'); ?>/assets/images/logo(symbol-transparent).png" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url('src/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('src/'); ?>assets/icon/themify-icons/themify-icons.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo site_url('src/'); ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo site_url('src/'); ?>assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="<?php echo site_url('src/'); ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo site_url('src/'); ?>assets/css/lightbox.css">


<!--
-->
  </head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p><strong><?php echo $titulo; ?></strong></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
			<!-- <a class="btn btn-success" href="#">LOGAR</a> -->
          <div class="right-icons">
            <ul>
              <li><a class="btn btn-success" href="#"><i class="ti-user"></i> LOGAR</a></li>
              <li><a class="btn btn-warning" href="#"><i class="ti-save"></i> CADASTRAR</a></li>
              <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="#" class="logo">
                          <!-- Estimular Digital -->
                          <img src="<?php echo site_url('src/'); ?>/assets/images/logo-ed.png" height="80px" alt="Estimular Digital">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active"><i class="ti-home"></i></a></li>
                          <li><a href="cursos.php">Tutoria</a></li>
                          <li class="scroll-to-section"><a href="#apply">Matrícula</a></li>
                          <!-- <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="cursos.php">Upcoming Meetings</a></li>
                                  <li><a href="curso-detalhe.php">Meeting Details</a></li>
                              </ul>
                          </li> -->
                          <li class="scroll-to-section"><a href="#courses">Cursos</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contato</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="<?php echo site_url('src/'); ?>assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Olá!</h6>
              <h2>Bem-vidos ao novo!</h2>
              <p>Esta é uma plataforma de exemplo provida por <a rel="nofollow" href="https://estimulardigital.com" target="_blank">Estimular Digital</a>. Se você deseja criar uma plataforma profissional, linda e com a sua identidade, ou conhecer mais do nosso trabalho, visite nosso <a rel="nofollow" href="https://estimulardigital.com" target="_blank">portfolio</a>.</p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Fale conosco!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="<?php echo site_url('src/'); ?>assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Ensino de Qualidade</h4>
                <p>Nossas metodologias e práticas educacionais são baseadas em evidências científicas, estudos de casos de sucesso.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="<?php echo site_url('src/'); ?>assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Profissional Especializado</h4>
                <p>Receba um acompanhamento altamente especializado!.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="<?php echo site_url('src/'); ?>assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Foco no aluno</h4>
                <p>Nosso foco não está simplesmente em conteúdos ou métodos, mas nas reais demandas e necessidades educacionais.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="<?php echo site_url('src/'); ?>assets/images/service-icon-04.png" alt="">
              </div>
              <div class="down-content">
                <h4>Acompanhamento presencial e remoto</h4>
                <p>Realizamos acompanhamento presencialmente e online também, sempre aproveitando as principais vantagens de ambas as modalidades.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="<?php echo site_url('src/'); ?>assets/images/service-icon-05.png" alt="">
              </div>
              <div class="down-content">
                <h4>Tutoria Individualizada e em Grupo</h4>
                <p>Aproveitamos a riqueza das trocas com outros alunos e profissionais, mas também fornecemos acompanhamento individual e personalizado, para que todos possam avançar no seu próprio ritmo.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Cursos Ofertados</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Categorias de Cursos</h4>
            <ul>
              <li><a href="#">Tecnologia Educacional</a></li>
              <li><a href="#">Educação Especial e Inclusiva</a></li>
              <li><a href="#">Tecnologias Assistivas</a></li>
              <li><a href="#">Atendimento Educacional</a></li>
              <li><a href="#">Metodologias Ativas</a></li>
            </ul>
            <div class="main-button-red">
              <a href="cursos.php">Todos os Cursos</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>R$ 229,00</span>
                  </div>
                  <a href="curso-detalhe.php"><img src="<?php echo site_url('src/'); ?>assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>10</span></h6>
                  </div>
                  <a href="curso-detalhe.php"><h4>Criando Turmas e Classes Virtuais</h4></a>
                  <p>Neste curso você aprenderá a utilizar diversos recursos e ferramentas para criar turmas e classes virtuais de forma simples, direta e acessível.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>R$ 369,00</span>
                  </div>
                  <a href="curso-detalhe.php"><img src="<?php echo site_url('src/'); ?>assets/images/meeting-02.jpg" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>24</span></h6>
                  </div>
                  <a href="curso-detalhe.php"><h4>Técnicas e Recursos para Aulas Online</h4></a>
                  <p>Neste curso você aprenderá diversas técnicas, recursos e ferramentas para ministrar aulas online de forma simples, direta e acessível.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>R$ 149,00</span>
                  </div>
                  <a href="curso-detalhe.php"><img src="<?php echo site_url('src/'); ?>assets/images/meeting-03.jpg" alt="Higher Education"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>26</span></h6>
                  </div>
                  <a href="curso-detalhe.php"><h4>Estratégias para o Ensino Remoto</h4></a>
                  <p>Diversas estratégias, soluções e recursos para o ensino remoto.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>R$ 48,00</span>
                  </div>
                  <a href="curso-detalhe.php"><img src="<?php echo site_url('src/'); ?>assets/images/meeting-04.jpg" alt="Student Training"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>30</span></h6>
                  </div>
                  <a href="curso-detalhe.php"><h4>Metodologias Ativas</h4></a>
                  <p>Transforme seus alunos em verdadeiros protagonistas de saber...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>NOSSOS SERVIÇOS</h3>
                <p>Criamos soluções digitais para sua instituição ou empresa.</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Contato</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>NOSSOS CURSOS</h3>
                <p>Oferecemos treinamentos e capacitações para sua instituição.</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Contato</a></div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span>Por que Estimular Digital?</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Ao longo dos mais de 15 anos de atuação na área educacional, sempre estive atento às principais dificuldades de aprendizado dos alunos, bem como aos principais desafios encontrados pelos professores. Em busca de soluções efetivas para a solução para as dificuldades encontradas, passei a pesquisar diversas tecnologias, ferramentas e metodologias que pudessem atender a todas essas demandas. Assim surgiu a <a rel="nofollow" href="https://estimulardigital.com/" target="_blank">Estimular Digital</a>.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Nossa Missão</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Equipar escolas, professores e alunos para transpor todas as barreiras educacionais encontradas.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Nossa Metodologia</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Todas as nossas ferramentas, recursos e metodologias são baseadas em sólidas evidências científicas proporcionadas pela <span>Análise do Comportamento</span> aplicada a soluções educacionais.</p>
                    </div>
                </div>
            </article>
            <!-- <article class="accordion last-accordion">
                <div class="accordion-head">
                    <span>Share this to your colleagues</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>
                        Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>
                    </div>
                </div>
            </article> -->
        </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Cursos Populares</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-01.jpg" alt="Course One">
              <div class="down-content">
                <h4>Mídias Digitais na Educação</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 160,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-02.jpg" alt="Course Two">
              <div class="down-content">
                <h4>Metodologias Ativas</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 180,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Estratégias para Ensino Remoto</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 140,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Recursos e estratégias para a Sala Presencial</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 120,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Ensino Híbrido</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 250,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-02.jpg" alt="">
              <div class="down-content">
                <h4>Tecnologias Assistivas e Inclusão</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 270,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Educação Inclusiva</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 340,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Classes Híbridas</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 360,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Criando um site educacional</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 560,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-02.jpg" alt="">
              <div class="down-content">
                <h4>Adaptação de Materiais e Recursos</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 430,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Avaliação Diagnóstica e Inclusão</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 480,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="<?php echo site_url('src/'); ?>assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Plano Educacional Individualizado</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                       <span>R$ 560,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>Nossas estatísticas</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <!-- <div class="count-area-content percentage"> -->
                  <div class="count-area-content">
                    <div class="count-digit">16</div>
                    <div class="count-title">Anos de experiência</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">1240</div>
                    <div class="count-title">Horas de Aulas</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">Alunos Atendidos</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">39</div>
                    <div class="count-title">Projetos Entregues</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Entre em Contato</h2>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Seu nome...*" required="true">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Seu e-mail...*" required="true">
                  </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="Assunto...*" required="true">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Sua mensagem..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">ENVIAR</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-info">
            <ul>
              <li>
                <h6>Telefone</h6>
                <span><a href="tel:91991882198"><i class="ti-mobile"></i> (91) 99188-2198</a></span>
              </li>
			  <br>
              <li>
                <h6>E-mail</h6>
                <span><a href="mailto:contato@estimulardigital.com"><i class="ti-email"></i> contato@estimulardigital.com</a></span>
              </li>
			  <br>
              <li>
                <h6>Endereço</h6>
                <span><a href=""><i class="ti-location-pin"></i> Belém - PA, 66083-340, Brazil</a></span>
              </li>
			  <br>
              <li>
                <h6>Website</h6>
                <span><a href="https://estimulardigital.com" target="_blank"><i class="ti-world"></i> www.estimulardigital.com</a></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>© Estimular Digital | <?php echo date('Y'); ?>. 
          <br>
          <!-- Design: <a href="https://estimulardigital.com" target="_parent" title="Sergio Obalski Filho">Sergio Obalski Filho</a>
          <br>
          Distibuted By: <a href="https://estimulardigital.com" target="_blank" title="A solução ideal">Estimular Digital</a> -->
        </p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="<?php echo site_url('src/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo site_url('src/'); ?>assets/js/isotope.min.js"></script>
    <script src="<?php echo site_url('src/'); ?>assets/js/owl-carousel.js"></script>
    <script src="<?php echo site_url('src/'); ?>assets/js/lightbox.js"></script>
    <script src="<?php echo site_url('src/'); ?>assets/js/tabs.js"></script>
    <script src="<?php echo site_url('src/'); ?>assets/js/video.js"></script>
    <script src="<?php echo site_url('src/'); ?>assets/js/slick-slider.js"></script>
    <script src="<?php echo site_url('src/'); ?>assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>