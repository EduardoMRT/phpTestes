<?php
include("../php/conectabd.php");

$nomeU = $nomeU == null ? "" : $nomeU;
$cpfU = $cpfU == null ? "" : $cpfU;
$senhaU = $senhaU == null ? "" : $cpfU;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="updateHTML.php">
        <p>Busca por cpf: </p>
        <input type="text" name="cpfBusca">
        <input type="submit" value="Buscar usuário">
    </form>

    <?php

    $cpfBusca = $_POST['cpfBusca'];

    if ($cpfBusca != null) {
        print($cpfBusca);

        $sqlSeleciona = "SELECT nome, cpf, senha FROM usuarios WHERE cpf = '$cpfBusca'";
        $usuariosList =  mysqli_query($conn, $sqlSeleciona);

        if (mysqli_num_rows($usuariosList) > 0) {
            while ($usuario = mysqli_fetch_assoc($usuariosList)) {
                $nomeU = $usuario['nome'];
                $cpfU = $usuario['cpf'];
                $senhaU = $usuario['senha'];
            }
        }
    }
    ?>

    <form method="POST" action="../php/update.php">
        <input type="text" name="nome" placeholder="Nome:" value="<?php echo $nomeU; ?>"> <br>
        <input type="text" name="cpf" placeholder="CPF" required="true" min="11" max="14" value="<?php echo $cpfU; ?>"> <br>
        <input type="password" name="senha" placeholder="Senha" required="true" value="<?php echo $senhaU; ?>"> <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>