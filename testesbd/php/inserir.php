<?php
include("conectabd.php");
$nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $senha = $_POST['senha'];
// INSERINDO DADOS + CADASTRO
$sql = "INSERT INTO usuarios(nome, cpf, senha) VALUES ('$nome', '$cpf', '$senha')";
if (mysqli_query($conn, $sql)) {
    echo "Os dados foram inseridos com sucesso!";
} else {
    echo "Ocorreu um erro ao tentar inserir os dados";
}
?>
