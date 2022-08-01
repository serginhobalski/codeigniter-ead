<?php

$this->extend('Layout/principal');

// Renderiza título
$this->section('titulo');
echo $titulo;
$this->endSection();


// Renderizar estilos
$this->section('estilos'); ?>
<!-- ****Estilos aqui**** -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.css" />

<?php $this->endSection(); ?>


<!-- Renderizar conteúdo -->
<?php $this->section('conteudo'); ?>
<!-- ****Conteúdo aqui**** -->
<?php  ?>
<h1 style="color: #fff;">Listagem de Usuários</h1>

<section class="usuarios">
    <div class="container" border="1">
        <table id="ajaxTable" class="user-table" style="width: 100%">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Situação</th>
                </tr>
            </thead>

        </table>
    </div>
</section>
<?php $this->endSection(); ?>




<!-- Renderizar scripts -->
<?php $this->section('scripts'); ?>
<!-- ****scripts aqui**** -->

<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.js"></script>

<script>


    $(document).ready(function() {

            $('#ajaxTable').DataTable({
            ajax: '<?php echo site_url('usuarios/recuperausuarios'); ?>',
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json"
        },
            columns: [{
                    data: 'imagem'
                },
                {
                    data: 'nome'
                },
                {
                    data: 'email'
                },
                {
                    data: 'ativo'
                },
            ],
            deferRender: true,
            processing: true,
            responsive: true,
            pagingType: "numbers",
        });
    });
</script>

<?php $this->endSection(); ?>