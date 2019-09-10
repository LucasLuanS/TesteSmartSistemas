<?php
    include_once("./conexao.php");

    //Exclui o usuario selecionado
    $id = $_POST['id'];
    $idUserLogado = $_POST['idUserLogado'];

    if($id > 0 && $idUserLogado == 1){
        $sql = "DELETE FROM usuario WHERE (Id_Usuario = '{$id}')";
        $conn->query($sql);
    }else{
        echo("Somente administradores podem excluir um nível");
    }
    $conn->close();
    header("Location:../index.php");
?>