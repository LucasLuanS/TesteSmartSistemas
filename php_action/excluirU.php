<?php
    include_once("./conexao.php");

    //Exclui o usuario selecionado
    $id = $_POST['id'];
    if($id > 0){
        $sql = "DELETE FROM usuario WHERE (Id_Usuario = '{$id}')";
        $conn->query($sql);
    }
    $conn->close();
    header("Location:../index.php");
?>