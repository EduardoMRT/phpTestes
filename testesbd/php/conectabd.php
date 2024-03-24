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

//ATALHO PARA INICIO - FUTURAMENTE ESSE ARQUIVO SERÁ SEPARADO CORRETAMENTE
echo "<button> <a href='../index.html'> Inicio </a> </button>";
error_reporting(0);
?>