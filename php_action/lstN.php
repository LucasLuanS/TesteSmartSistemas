<?php
    include_once("conexao.php");

    //Listagem dos níveis de acesso
    $query = "SELECT * FROM nivel_acesso";
    $data = $conn->query($query);

    while($fetch = mysqli_fetch_row($data)){
        echo("<tr>
            <td scope='row'>" . $fetch[0] . "</td>
            <td scope='row'>" . $fetch[1] . "</td>
        </tr>");
    }
    $conn->close();
?>