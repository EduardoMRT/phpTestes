<?php
 //CRIA UM BANCO DE DADOS + TABELA
$conn = mysqli_query("localhost", "admin", "");

 $sql1 = "CREATE DATABASE testebd";
 $sql2 = "CREATE TABLE usuarios(
    id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome TEXT NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    senha VARCHAR(216) NOT NULL);"

mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);
 ?>
