<?php
    //FAZ A CONEXÃO COM O BD
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "testebd";

    $conn = mysqli_connect($host, $user, $password, $db);
        if (!$conn) {
            echo "Ocorreu um erro ao se conectar com o banco de dados";
            die();
        } else {
        echo "Conexão realizada com sucesso!";
}
?>