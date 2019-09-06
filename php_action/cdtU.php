<?php
        include_once("./conexao.php");

        //Cadastro e edição do usuário no banco de dados
        $nome = trim($_POST["nome"]);
        $att = $_POST["nivel_acesso"];
        $op = $_POST['op'];
        $id = $_POST['id'];

        if($op == '1'){
                $sql = "UPDATE usuario SET Nome = '{$nome}', Id_Nivel_Acesso = '{$att}' WHERE (Id_Usuario = {$id})";
                if($nome != ''){
                        $conn->query($sql);        
                }
        }else{
                $sql = "INSERT INTO usuario(nome, Id_Nivel_Acesso) VALUES ('{$nome}','{$att}')";
                if($nome != ''){
                        $conn->query($sql);
                }
        }
        $conn->close();
        header("Location:../index.php");
?>