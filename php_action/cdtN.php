<?php
        include_once("./conexao.php");
        
        //Cadastro e edição do nível de acesso no banco de acesso
        $op = $_POST['op'];
        $id = $_POST['id'];
        $desc = trim($_POST["descricao"]);
        
        if($op == '1'){
                $sql = "UPDATE nivel_acesso SET Descricao = '{$desc}' WHERE (Id_Nivel_Acesso = {$id})";
                if($desc != ''){
                        $conn->query($sql);        
                }
        }else{
                $sql = "INSERT INTO nivel_acesso(Descricao) VALUES ('{$desc}')";
                if($desc != ''){
                        $conn->query($sql);        
                }
        }
        
        $conn->close();
        header("Location:../index.php");
?>