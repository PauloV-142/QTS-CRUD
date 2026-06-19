<?php
    $mensagem = "";

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Enable mysqli exception throwing
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    include_once("../conexao.php");

    if (! isset($_POST['idAluno']) || $_POST['idAluno'] == "") { 
        $mensagem = "Insira o ID.";
    } else {
    
    # Form preenchido.
        $idAluno = $_POST['idAluno'];

        /* QUERY NO BANCO */
        $sql_insert = "DELETE FROM alunos WHERE ID = $idAluno";

        $resultado = @mysqli_query($conexao, $sql_insert);
        
        /* TRATAMENTO DE RESULTADO */
        if (!$resultado) {
            die('Dados Inválidos: ' . @mysqli_error($conexao));
            $mensagem_query = "Erro: Dados inválidos.";
        } else {
            $mensagem_query = "Query realizada.";
        } 

        # THIS SNIPPET WAS TAKEN FROM AI
        if (mysqli_affected_rows($conexao) > 0) {
            $mensagem = "Aluno deletado com sucesso.";
        } else {
            $mensagem = "Aluno não encontrado com ID = $idAluno";
        }
    }
    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mensagem ?></title>
</head>
<body>
    
    <p><?= $mensagem ?></p>
    <p><?= isset($mensagem_query) ? "$mensagem_query" : "" ?></p>

    <a href="/QTSCRUD/pages/indexremover.php"> Voltar </a>
</body>
</html>