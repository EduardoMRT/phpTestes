<?php 
   include("conectabd.php");
   $nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $senha = $_POST['senha'];

   //ATUALIZANDO USUARIO
   $sql = "UPDATE usuarios SET nome = '$nome', cpf = '$cpf', senha = '$senha' WHERE cpf = '$cpf'";
   if(mysqli_query($conn, $sql)){
      echo "Usuário atualizado com sucesso!";
   }else{
      echo "Ocorreu um erro ao tentar atualizar o usuário";
   }

?>