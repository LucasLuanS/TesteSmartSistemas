<?php
        include_once("./conexao.php");

        //Cadastro e edição do usuário no banco de dados
        $nome = trim($_POST["nome"]);
        $att = $_POST["nivel_acesso"];
        $op = $_POST['op'];
        $id = $_POST['id'];
        $data = date('y/m/d');
        $idUserLogado = $_POST['idUserLogado'];

        if($op == '1'){
                $sql = "UPDATE usuario SET Nome = '{$nome}', Id_Nivel_Acesso = '{$att}' WHERE (Id_Usuario = {$id})";
                if($nome != ''){
                        $conn->query($sql);        
                }
        }
        elseif($idUserLogado == 1){
                $sql = "INSERT INTO usuario(nome, Id_Nivel_Acesso, Dt_Cadastro) VALUES ('{$nome}','{$att}','{$data}')";
                if($nome != ''){
                        $conn->query($sql);
                }
        }else{
                echo("Somente administradores podem criar um usuário");
        }

        $conn->close();
        header("Location:../index.php");
?>