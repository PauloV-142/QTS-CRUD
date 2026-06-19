<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "alunos";
    $conexao = @mysqli_connect($host, $user, $pass, $banco) or die ("Problemas com a conexão do Banco de Dados");
?>
