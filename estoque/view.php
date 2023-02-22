<?php
require_once('functions.php');
view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>
    <h2>Estoque <?php echo $estoque['id']; ?></h2>
    <hr>
<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>
    <dl class="dl-horizontal">
        <dt>Nome:</dt>
        <dd><?php echo $estoque['nome']; ?></dd>
        <dt>Produto:</dt>
        <dd><?php echo $estoque['produto']; ?></dd>
        <dt>Validade:</dt>
        <dd><?php echo $estoque['validade']; ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Quantidade:</dt>
        <dd><?php echo $estoque['quantidade']; ?></dd>
        <dt>Entrada:</dt>
        <dd><?php echo $estoque['entrada']; ?></dd>
        <dt>Saída:</dt>
        <dd><?php echo $estoque['saida']; ?></dd>
        <dt>Vagão:</dt>
        <dd><?php echo $estoque['vagao']; ?></dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Responsável:</dt>
        <dd><?php echo $estoque['responsavel']; ?></dd>
        <dt>Tipo:</dt>
        <dd><?php echo $estoque['tipo']; ?></dd>
    </dl>
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="edit.php?id=<?php echo $estoque['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="index.php" class="btn btn-default">Voltar</a>
        </div>
    </div>
<?php include(FOOTER_TEMPLATE); ?>