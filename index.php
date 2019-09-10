<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Teste SmartSistemas</title>

    <!-- Efeito do item selecionado na tabela -->
    <style type="text/css">
      .selected {
          background-color: #1E90FF;
          color: #FFF;
      }
    </style>
  </head>
  <body>
    <div class="d-flex justify-content-center" id="app">
      <div class="row container">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">
                  <a class="nav-link" href="./index.php">Cadastrar usuário</a>
                </th>
                <th scope="col">
                  <a class="nav-link" href="./index.php?p=lstusuario">Listar usuário</a>
                </th>
                <th scope="col">
                  <a class="nav-link" href="./index.php?p=cdtnivel">Cadastrar nivel</a>
                </th>
                <th scope="col">
                  <a class="nav-link" href="./index.php?p=lstnivel">Listar nivel</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="4">
                  <!-- Carrega a opção escolhida no menu  -->
                  <?php
                    $op = @$_GET['p'];

                    if($op == 'lstusuario') { include_once("./lstusuario.php"); }
                    else if($op == 'cdtnivel') { include_once("./cdtnivel.php"); }
                    else if($op == 'lstnivel') { include_once("./lstnivel.php"); }
                    else{ include_once("./cdtusuario.php"); }
                  ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue"></script>
    <script>
        var app= new Vue({
          el: "#app",
          data: {
            idSelecionado: -1,
            nomeDesc: '',
            op: 0,
            nivelUsuario: '',
            dataCriacao: ''
          },
          mounted: function(){
            var _this = this
            //Função para pegar dados selecionados na tabela
            $("#table tr").click(function(){
              $(this).addClass('selected').siblings().removeClass('selected');    
              var value=$(this).find('td:nth-child(1)').html();
              _this.idSelecionado = value;
              var value=$(this).find('td:nth-child(2)').html();
              _this.nomeDesc = value;
              var value=$(this).find('td:nth-child(3)').html();
              _this.nivelUsuario = value;
              var value=$(this).find('td:nth-child(4)').html();
              _this.dataCriacao = value;
            });
          }
        });
    </script>
  </body>
</html>