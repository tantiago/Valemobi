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

  <div class="container">


  <h2>
    <a href="index.php">Clique Aqui para Inserir Novas Operações</a>
  </h2>
<?php

require 'db.php';

$db = new DB;

$lista = $db->obterOperacoes();?>

<?php if(!empty($lista)):?>

				<table class="table table-striped">
					<tr class='active'>
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

			<?php else: ?>

				<h3 class="text-center text-primary">Nenhuma operação de Compra e Venda foi efetuada.</h3>
			<?php endif; ?>

  </div>
</body>
</html>
