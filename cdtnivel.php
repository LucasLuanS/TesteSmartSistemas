<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="d-flex justify-content-center">
        <div class="row container">
          <!-- Formulario de cadastro e edicão do nível de acesso -->
          <form action="./php_action/cdtN.php" method="post">
            <h5>Descricão:<h5><br>
            <input type="hidden" name="id" value=<?php echo @$_POST['id']; ?>>
            <input type="hidden" name="op" value=<?php echo @$_POST['op']; ?>>
            <textarea class="form-control" type="text" name="descricao" cols="50" rows="6"><?php echo @$_POST['nome']; ?></textarea>
            <input type="submit" class="btn btn-primary btn-sm" value="Cadastrar">
          </form>
      </div>
    </div>
  </body>
</html>