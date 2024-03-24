<?php
 //CRIA UM BANCO DE DADOS
 include("../php/conectabd.php");

 $sql = "CREATE DATABASE testebd";
 $sql2 = "CREATE TABLE usuarios(
    id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome TEXT NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    senha VARCHAR(216) NOT NULL);"
 ?>