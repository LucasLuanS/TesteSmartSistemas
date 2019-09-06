<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="d-flex justify-content-center">
      <div class="row container">
        <!-- Formulario de cadastro e edição do usuário -->
        <form action="./php_action/cdtU.php" method="POST">
          <label>Nome: </label>
          <input type="text" name="nome" class="form-control" value=<?php echo @$_POST['nome']; ?>><br>
          <input type="hidden" name="id" value=<?php echo @$_POST['id']; ?>>
          <input type="hidden" name="op" value=<?php echo @$_POST['op']; ?>>

          <label>Nivel de acesso: </label>
          <select name=nivel_acesso class="form-control form-control-sm">
            <!-- Requisição dos níveis de acesso cadastrado para que o usuário possa escolher no seu cadastro -->
            <?php
              include_once("php_action/conexao.php");

              $query = "SELECT * FROM nivel_acesso";
              $data = $conn->query($query);
              while($fetch = mysqli_fetch_row($data)){ ?>
                <option value="<?php echo $fetch[0]; ?>"> <?php echo $fetch[1]; ?> </option><?php
              }
              $conn->close();
            ?> 
          </select><br>
          <input class="btn btn-primary btn-sm" type="submit" value="Cadastrar">
        </form>
      </div>
    </div>
  </body>
</html>