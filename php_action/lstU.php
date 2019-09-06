<?php
    include_once("conexao.php");

    //Listagem dos usuários cadastrados
    $query = "SELECT *, nivel_acesso.Descricao FROM usuario, nivel_acesso WHERE nivel_acesso.Id_Nivel_Acesso = usuario.Id_Nivel_Acesso";
    $data = $conn->query($query);

    while($fetch = mysqli_fetch_row($data)){
        echo("<tr>
            <td scope='row'>" . $fetch[0] . "</td>
            <td scope='row'>" . $fetch[1] . "</td>
            <td scope='row'>" . $fetch[4] . "</td>
        </tr>");
    }
    $conn->close();
?>