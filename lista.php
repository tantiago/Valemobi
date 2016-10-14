<!DOCTYPE html>
<html>
<head>
<title>Valemobi Tiago Tancredi Soares</title>
    <meta charset="utf-8" lang="pt-br">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <div class="container" style="margin-top: 20px">

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ValeMobi Tiago Tancredi Soares</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Inserir Transação</a></li>
      <li class="active"><a href="lista.php">Ver as Transações Efetuadas</a></li>
    </ul>
  </div>
</nav>

<?php

require 'db.php';

$db = new DB;

$lista = $db->obterOperacoes();?>

<?php if(!empty($lista)):?>
      <div class="table-responsive">
				<table class="table table-condensed table-hover">
					<tr class="success">
						<th>Id</th>
						<th>Tipo da Mercadoria</th>
						<th>Nome da Mercadoria</th>
						<th>Quantidade</th>
						<th>Preço</th>
						<th>Tipo de Negócio</th>
						<th>Data e Hora</th>
						<th>Código da Mercadoria</th>
					</tr>
					<?php foreach($lista as $row):?>
						<tr>
							<td><?=$row->id?></td>
							<td><?=$row->tipo_mercadoria?></td>
							<td><?=$row->nome_mercadoria?></td>
							<td><?=$row->quantidade?></td>
							<td><?=$row->preco?></td>
							<td><?=$row->tipo_negocio?></td>
							<td><?=$row->data_hora?></td>
							<td><?=$row->mercadoria_id?></td>
						</tr>
					<?php endforeach;?>
				</table>
      </div>

			<?php else: ?>

				<h3 class="text-center text-primary">Nenhuma operação de Compra e Venda foi efetuada.</h3>
			<?php endif; ?>

  </div>
</body>
</html>
