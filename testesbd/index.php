<?php
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
// mysqli_query($conn, $create);

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
 $senha = $_POST['senha'];

// INSERINDO DADOS
$sql = "INSERT INTO usuarios(nome, cpf, senha) VALUES ('$nome', '$cpf', '$senha')";
if(mysqli_query($conn, $sql)){
    echo "Os dados foram inseridos com sucesso!";
}else{
    echo "Ocorreu um erro ao tentar inserir os dados";
}

// SELECIONANDO DADOS
$sqlSeleciona = "SELECT nome, cpf, senha FROM usuarios WHERE cpf = '$cpf'";
$usuariosList =  mysqli_query($conn, $sqlSeleciona);

if (mysqli_num_rows($usuariosList) > 0) {
    while ($usuario = mysqli_fetch_assoc($usuariosList)) {
        $cpfbd = $usuario['cpf'];
        $senhabd = $usuario['senha'];
        if($senhabd == $senha){
            echo "Você fez login";
        }else{
            echo "Senha ou cpf incorretos!";
            die();
        }

        echo "<br>" . $usuario['nome'] . "<br>";
        echo "<br>" . $usuario['cpf'] . "<br>";
    }
}

?>
