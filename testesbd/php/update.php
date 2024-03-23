<?php 
   include("conectabd.php");
   include("formulario.php");

   //ATUALIZANDO USUARIO
   $sql = "UPDATE usuarios(nome, cpf, senha) SET ('$nome', '$cpf', '$senha')";
   mysqli_query($conn, $sql);

   //Pode ser usado o if para verificar se o usuário foi deletado em conforme aos demais arquivos
?>