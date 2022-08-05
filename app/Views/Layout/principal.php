<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Estimular Digital">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>Estimular Digital | <?php echo $this->renderSection('titulo'); ?></title>
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

  <!-- Espaço para renderização de estilos -->
  <?php echo $this->renderSection('estilos'); ?>

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
              <li class="scroll-to-section"><a href="/home" class="active"><i class="ti-home"></i> Home</a></li>
              <li><a href="/usuarios"><i class="ti-user"></i> Usuários</a></li>
              <li class="scroll-to-section"><a href="/plataformas"><i class="ti-pencil-alt"></i> Sites</a></li>
              <li class="scroll-to-section"><a href="#courses"><i class="ti-book"></i> Plataformas</a></li>
              <li class="scroll-to-section"><a href="#contact"><i class="ti-mobile"></i> Contato</a></li>
              <li><a class="btn btn-success" href="#"><i class="ti-user"></i> LOGAR</a></li>
              <li><a class="btn btn-warning" href="#"><i class="ti-save"></i> CADASTRAR</a></li>
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
              <p>Esta é a plataforma <a rel="nofollow" href="https://estimulardigital.com" target="_blank">Estimular Digital</a>. Se você deseja criar uma plataforma profissional, linda e com a sua identidade, ou conhecer mais do nosso trabalho, visite nosso <a rel="nofollow" href="https://estimulardigital.com" target="_blank">portfolio</a>.</p>
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
    <div class="container-fluid">


      <!-- Espaço reservado para renderizar conteúdo -->
      <?php echo $this->renderSection('conteudo'); ?>

      
    </div>
  </section>



  <section class="contact-us" id="contact">

    <div class="footer">
      <p>© Estimular Digital | <?php echo date('Y'); ?></p>
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
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
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

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>

  <!-- Espaço para renderização de scripts -->
  <?php echo $this->renderSection('scripts'); ?>


</body>

</body>

</html>