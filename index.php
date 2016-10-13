<!DOCTYPE html>
<html>
  <head>
    <title>Valemobi Tiago Tancredi Soares</title>
    <meta charset="utf-8" lang="pt-br">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

  <body>
    <div class="container">

      <h2 class="alert alert-warning"><mark>Preencha o formulário abaixo</mark></h2>

      <form class="form-horizontal" method="post" action="processa_form.php" id="form_data">

        <div class="form-group">
          <label for="tipo_mercadoria">Tipo de Mercadoria</label>
          <input type="text"
          class="form-control"
          name="tipo_mercadoria">
        </div>

        <div class="form-group">
          <label for="nome_mercadoria">Nome da Mercadoria</label>
          <input type="text"
          class="form-control"
          name="nome_mercadoria">
        </div>

        <div class="form-group">
          <label for="quantidade">Quantidade</label>
          <input type="number"
          class="form-control"
          name="quantidade">
        </div>

        <div class="form-group">
          <label for="preco">Preço</label>
          <input type="number"
          class="form-control"
          name="preco">
        </div>

        <div class="form-group">
          <label for="tipo_negocio">Tipo do Negócio</label>

          <select class="form-control" name="tipo_negocio">
            <option value="">Escolha um tipo de negócio</option>
            <option value="Compra">Compra</option>
            <option value="Venda">Venda</option>
          </select>

        </div>
        <button type="submit" class="btn btn-success btn-lg active">Enviar</button>
      </form>

      <h2>
        <a href="lista.php">Lista de todas as Negociações Efetudas</a>
      </h2>
    </div>

    <!-- scripts -->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script>
    <script src="script/validacao.js"></script>
    <!-- scripts -->
  </body>
  </html>
