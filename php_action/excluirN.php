<?php
    include_once("./conexao.php");

    //Exclui o nível de acesso selecionado
    $id = $_POST['id'];
    if($id > 0){
        $sql = "DELETE FROM nivel_acesso WHERE (Id_Nivel_Acesso = '{$id}')";
        $conn->query($sql);
    }
    $conn->close();
    header("Location:../index.php");
?>