<?php
include("conectabd.php");
include("formulario.php");

// SELECIONANDO DADOS + LOGIN
$sqlSeleciona = "SELECT nome, cpf, senha FROM usuarios WHERE cpf = '$cpf'";
$usuariosList =  mysqli_query($conn, $sqlSeleciona);

if (mysqli_num_rows($usuariosList) > 0) {
    while ($usuario = mysqli_fetch_assoc($usuariosList)) {
        $cpfbd = $usuario['cpf'];
        $senhabd = $usuario['senha'];
        if ($senhabd == $senha) {
            echo "Você fez login";
        } else {
            echo "Senha ou cpf incorretos!";
            die();
        }

        echo "<br>" . $usuario['nome'] . "<br>";
        echo "<br>" . $usuario['cpf'] . "<br>";
    }
}
?>
