<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <!-- Listagem dos níveis de acesso que esta no banco de dados -->
    <div class="d-flex justify-content-center">
      <div class="row container">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col"> <label>ID</label> </th>
                <th scope="col"> <label>Descricao</label> </th>
              </tr>
            </thead>
            <tbody id="table">
              <?php
                include_once("php_action/lstN.php");
              ?>
            </tbody>
          </table>
          <!-- Botões de edição e exclução da linha selecionada -->
          <table class="table-borderless">
            <tr>
              <td>
                <form action="index.php?p=cdtnivel" method="POST">
                  <input type="hidden" name="id" :value="idSelecionado">
                  <input type="hidden" name="nome" :value="nomeDesc">
                  <input type="hidden" name="op" value=1>
                  <input type="submit" class="btn btn-primary" value="Editar">
                </form>
              </td>
              <td>
                <form action="php_action/excluirN.php" method="POST">
                  <input type="hidden" name="id" :value="idSelecionado">
                  <input type="submit" class="btn btn-danger" value="Excluir">
                </form>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>