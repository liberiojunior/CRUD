<?php
require_once('functions.php');
edit();
?>
<?php include(HEADER_TEMPLATE); ?>
<h2>Atualizar Cliente</h2>
<form action="edit.php?id=<?php echo $estoque['id']; ?>" method="post">
<hr />
<div class="row">
<div class="form-group col-md-7">
<label for="name">Nome</label>
<input type="text" class="form-control" name="estoque['nome']"
value="<?php echo $estoque['nome']; ?>">
</div>
<div class="form-group col-md-3">
<label for="campo2">Produto</label>
<input type="text" class="form-control" name="estoque['produto']"
value="<?php echo $estoque['produto']; ?>">
</div>
<div class="form-group col-md-2">
<label for="campo3">Validade</label>
    <input type="date" class="form-control" name="estoque['validade']" value="<?php echo $estoque['validade']; ?>">
</div>
</div>
<div class="row">
<div class="form-group col-md-5">
<label for="campo1">Quantidade</label>
<input type="text" class="form-control" name="estoque['quantidade']"
value="<?php echo $estoque['quantidade']; ?>">
</div>
<div class="form-group col-md-3">
<label for="campo2">Entrada</label>
<input type="text" class="form-control" name="estoque['entrada']"
value="<?php echo $estoque['entrada']; ?>">
</div>
<div class="form-group col-md-2">
<label for="campo3">Saída</label>
<input type="text" class="form-control" name="estoque['saida']"
value="<?php echo $estoque['saida']; ?>">
</div>
<div class="form-group col-md-2">
<label for="campo3">Vagão</label>
<input type="text" class="form-control" name="estoque['vagao']"
value="<?php echo $estoque['vagao']; ?>">
</div>
</div>
<div class="row">
<div class="form-group col-md-3">
<label for="campo1">Responsável</label>
<input type="text" class="form-control" name="customer['responsavel']"
value="<?php echo $estoque['responsavel']; ?>">
</div>
<div class="form-group col-md-2">
<label for="campo2">Tipo</label>
<input type="text" class="form-control" name="customer['tipo']"
value="<?php echo $estoque['tipo']; ?>">
</div>
</div>
<div id="actions" class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-primary">Salvar</button>
<a href="index.php" class="btn btn-default">Cancelar</a>
</div>
</div>
</form>
<?php include(FOOTER_TEMPLATE); ?>