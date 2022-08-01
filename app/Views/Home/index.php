<?php

$this->extend('Layout/principal');

// Renderiza título
$this->section('titulo'); 
echo $titulo; 
$this->endSection();


// Renderizar estilos
$this->section('estilos'); 
// ****Estilos aqui****
$this->endSection();


// Renderizar conteúdo
$this->section('conteudo'); ?>
<!-- // ****Conteúdo aqui**** -->
  <!-- ***** Main Banner Area Start ***** -->
  <!-- <section class="section main-banner" id="top" data-section="section1">
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
  </section> -->
  <!-- ***** Main Banner Area End ***** -->
<h1 style="color: #fff;">Estendendo layout</h1>
<?php
$this->endSection();


// Renderizar scripts
$this->section('scripts'); 
// ****scripts aqui****
$this->endSection();
