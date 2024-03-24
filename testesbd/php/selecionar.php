<?php

include("conectabd.php");
   $cpf = $_POST['cpf'];
   $senha = $_POST['senha'];
// SELECIONANDO DADOS + LOGIN
$cpf = $_POST['cpf'];

$sqlSeleciona = "SELECT nome, cpf, senha FROM usuarios WHERE cpf = '$cpf'";
$usuariosList =  mysqli_query($conn, $sqlSeleciona);

if (mysqli_num_rows($usuariosList) > 0) {
    while ($usuario = mysqli_fetch_assoc($usuariosList)) {
        $cpfbd = $usuario['cpf'];
        $senhabd = $usuario['senha'];
        if ($senhabd == $senha) {
            echo "\nVocê fez login";
        } else {
            echo "\nSenha ou cpf incorretos!";
            die();
        }

        echo "<br>" . $usuario['nome'] . "<br>";
        echo "<br>" . $usuario['cpf'] . "<br>";
    }
}
?>
