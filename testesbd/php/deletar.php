<?php
   include("conectabd.php");
   include("formulario.php");

   //DELETANDO USUARIOS
   $sql = "DELETE FROM usuarios WHERE cpf = '$cpf'"; 
//    A claúsula WHERE deve ser observada para que não haja a exclusão de todos os dados do bd
   if(mysqli_query($conn, $sql)){
    echo "O usuario foi excluido com sucesso!";
   }else{
    echo "Ocorreu um erro ao tentar excluir o usuário";
   }
?>