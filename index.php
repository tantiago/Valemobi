<!DOCTYPE html>
<html>
  <head>
    <title>Valemobi Tiago Tancredi Soares</title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
    crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

  </head>

  <body>
    <form class="form-horizontal" method="post" action="processa_form.php">
      <div class="form-group">
        <label for="text" class="col-sm-2 control-label">Tipo de Mercadoria</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="tipo_mercadoria">
        </div>
      </div>
      <div class="form-group">
        <label for="text" class="col-sm-2 control-label">Nome da Mercadoria</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nome_mercadoria">
        </div>
      </div>
      <div class="form-group">
        <label for="text" class="col-sm-2 control-label">Quantidade</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="quantidade">
        </div>
      </div>
      <div class="form-group">
        <label for="text" class="col-sm-2 control-label">Preço</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="preco">
        </div>
      </div>
      <div class="form-group">
        <label for="text" class="col-sm-2 control-label">Tipo do Negócio</label>
        <div class="col-sm-10">
      <select class="form-control" name="tipo_negocio">
        <option value="">Escolha um tipo de negócio</option>
        <option value="Compra">Compra</option>
        <option value="Venda">Venda</option>
      </select>
    </div>
  </div>
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
    </form>

      <h2>
      <a href="lista.php">Lista de todas as Negociações Efetudas</a>
    </h2>

  </body>
</html>
