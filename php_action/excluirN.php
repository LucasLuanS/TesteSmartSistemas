<?php
    include_once("./conexao.php");

    //Exclui o nível de acesso selecionado
    $id = $_POST['id'];
    $idUserLogado = $_POST['idUserLogado'];

    if($id > 0 && $idUserLogado == 1){
        $sql = "DELETE FROM nivel_acesso WHERE (Id_Nivel_Acesso = '{$id}')";
        $conn->query($sql);
    }else{
        echo("Somente administradores podem excluir um usuário");
    }
    $conn->close();
    header("Location:../index.php");
?>