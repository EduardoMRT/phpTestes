<?php
 //CRIA UM BANCO DE DADOS + TABELA
$conn = mysqli_query("localhost", "root", "");
 $sql1 = "CREATE DATABASE testebd";
mysqli_query($conn, $sql1);

$conn = mysqli_query("localhost", "root", "", "testebd");
 $sql2 = "CREATE TABLE usuarios(
    id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome TEXT NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    senha VARCHAR(216) NOT NULL);"
mysqli_query($conn, $sql2);
 ?>
