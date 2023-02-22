<?php
require_once('functions.php');
add();
?>
<?php include(HEADER_TEMPLATE); ?>
<h2>Novo Estoque</h2>
<form action="add.php" method="post">
<!-- area de campos do form -->
<hr />
<div class="row">
<div class="form-group col-md-7">
<label for="name">Nome</label>
<input type="text" class="form-control" name="estoque['nome']">
</div>
<div class="form-group col-md-3">
<label for="campo2">Produto</label>
<input type="text" class="form-control" name="estoque['produto']">
</div>
<div class="form-group col-md-2">
<label for="campo3">Validade</label>
    <input type="date" class="form-control" name="estoque['validade']">
</div>
</div>
<div class="row">
<div class="form-group col-md-5">
<label for="campo1">Quantidade</label>
<input type="text" class="form-control" name="estoque['quantidade']">
</div>
<div class="form-group col-md-3">
<label for="campo2">Entrada</label>
<input type="date" class="form-control" name="estoque['entrada']">
</div>
<div class="form-group col-md-2">
<label for="campo3">Saída</label>
<input type="date" class="form-control" name="estoque['saida']">
</div>
<div class="form-group col-md-2">
<label for="campo3">Vagão</label>
<input type="text" class="form-control" name="estoque['vagao']">
</div>
</div>
<div class="row">
<div class="form-group col-md-3">
<label for="campo1">Responsável</label>
<input type="text" class="form-control" name="estoque['responsavel']">
</div>
<div class="form-group col-md-2">
<label for="campo2">Tipo</label>
<input type="text" class="form-control" name="estoque['tipo']">
</div>
</div>
<div id="actions" class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-primary">Salvar</button>
<a href="index.php" class="btn btn-default">Cancelar</a>
</div>
</div>
</form>