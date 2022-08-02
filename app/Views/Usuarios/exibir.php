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
<h1 style="color: #fff;"></h1>
<?php ?>
<section style="background-color: #01012f; color:#fff; text-align:center; margin-left:auto; margin-right:auto; border-radius: 15px; padding-top: 30px; padding-bottom: 40px;">
    <form action="" method="get">
        <div class="form-group">
            <h3 style="color: #f25316; margin-top: 10px; margin-bottom: 15px;">Detalhes</h3>
        </div>
        <div class="form-group">
            <img class="img-exibir" src="<?php if($usuario->imagem == null){echo site_url('/src/assets/images/user.png');} else { $usuario->imagem; } ?>" alt="Imagem do usuário" width="30%">
        </div>
        <div class="form-group">
            <label for="nome" style="max-width: 29%;">Nome: </label>
            <input class="input-exibir" type="text" name="" id="nome" value="<?php echo $usuario->nome ?>" readonly>
        </div>
        <div class="form-group">
            <label for="email" style="max-width: 29%;">E-mail: </label>
            <input class="input-exibir" type="text" name="" id="email" value="<?php echo $usuario->email ?>" readonly>
        </div>
        <div class="form-group">
            <label for="cpf" style="max-width: 29%;">CPF: </label>
            <input class="input-exibir" type="text" name="" id="cpf" value="<?php echo $usuario->cpf ?>" readonly>
        </div>
        <div class="form-group">
            <label for="ativo" style="max-width: 29%;">Status: </label>
            <input class="input-exibir" type="text" name="" id="ativo" value="<?php if($usuario->ativo == 1){ echo 'Ativo'; } else { echo 'Inativo'; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="ativo" style="max-width: 29%;">Data de cadastro: </label>
            <input class="input-exibir" type="text" name="" id="ativo" value="<?php echo implode("/", explode("-", $usuario->criado_em)); ?>" readonly>
        </div>
        <br><br>
        <a class="btn" style="background-color: #f25316; color:#01012f;" href="/usuarios"><div class="ti-arrow-right-alt"></div> Voltar para a lista de usuários</a>
    </form>
</section>

<?php $this->endSection();


// Renderizar scripts
$this->section('scripts');
// ****scripts aqui****
$this->endSection();
