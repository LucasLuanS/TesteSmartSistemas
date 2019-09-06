<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="d-flex justify-content-center">
      <div class="row container">
        <div class="col-12">
          <!-- Listagem dos usuários cadastrados no banco de dados -->
          <div v-if="idSelecionado == -1">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"> <label>ID</label> </th>
                  <th scope="col"> <label>Nome</label> </th>
                  <th scope="col"> <label>Nivel</label> </th>
                </tr>
              </thead>
              <tbody id="table">
                <?php
                  include_once("php_action/lstU.php");
                ?>
              </tbody>
            </table>
            </div>
          <!-- Formulário do item selecionado na tabela -->
          <div v-else>
            <table class="table">
              <tr>
                <th scope="row"> <label>ID: </label> </th>
                <td>{{idSelecionado}}</td>
              </tr>
              <tr>
                <th scope="row"> <label>Nome: </label> </th>
                <td>{{nomeDesc}}</td>
              </tr>
              <tr>
                <th scope="row"> <label>Nivel: </label> </th>
                <td>{{nivelUsuario}}</td>
              </tr>
            </table>
          </div>
          <!-- Botões de edição e exclução da linha selecionada -->
          <table class="table-borderless">
            <tr>
              <td>
                <form action="index.php?p=cdtusuario" method="POST">
                  <input type="hidden" name="id" :value="idSelecionado">
                  <input type="hidden" name="nome" :value="nomeDesc">
                  <input type="hidden" name="op" value=1>
                  <input type="submit" class="btn btn-primary" value="Editar">
                </form>
              </td>
              <td>
                <form action="php_action/excluirU.php" method="POST">
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