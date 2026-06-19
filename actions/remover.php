<?php
    $mensagem = "";

    include_once("../conexao.php");
    
    if (isset($_POST['idAluno'])) { # Form preenchido.
    $idAluno = $_POST['idAluno'];
    # TRY CATCH AQUI, PORQUE A QUERY AINDA É FEITA MESMO SE O FORM NÃO FOR TOTALMENTE PREENCHIDO.

        /* QUERY NO BANCO */
        $sql_insert = "DELETE FROM alunos WHERE ID = $idAluno";

        $resultado = @mysqli_query($conexao, $sql_insert);

        /* TRATAMENTO DE RESULTADO */
        if (!$resultado) {
            die('Dados Inválidos: ' . @msqli_error($conexao));
            $mensagem = "Erro: Dados inválidos.";
        } else {
            $mensagem = "Apagado com sucesso";
        } 
            mysqli_close($conexao);
    } else {
        $mensagem = "Insira o identificador antes de remover.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mensagem ?></title>
</head>
<body>
    
    <?= $mensagem ?>

    <a href="/QTSCRUD/pages/indexremover.php"> Voltar </a>

</body>
</html>