<?php echo $this->extend('Layout/principal'); ?>

<?php  ?>

<?php $this->section('titulo'); echo $titulo; $this->endSection(); ?>


<?php $this->section('estilos'); ?>



<?php $this->section('conteudo'); ?>

<h1><?php echo $titulo ?></h1>

<?php $this->section('scripts'); $this->endSection(); ?>