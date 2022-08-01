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
<h1 style="color: #fff;">Estendendo layout</h1>
<?php
$this->endSection();


// Renderizar scripts
$this->section('scripts'); 
// ****scripts aqui****
$this->endSection();
