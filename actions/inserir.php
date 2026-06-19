<?php
    $mensagem = "";

    include_once("../conexao.php");
    
    if (isset($_POST['nome'])) { # Form preenchido.
    # TRY CATCH AQUI, PORQUE A QUERY AINDA É FEITA MESMO SE O FORM NÃO FOR TOTALMENTE PREENCHIDO.

        
        /* PEGAR OS DADOS */
        $nome = $_POST["nome"];
        $data_nascimento = $_POST["data_nascimento"];
        $cpf = $_POST["cpf"];
        $matricula = $_POST["matricula"];
        $instituicao = $_POST["instituicao"];
        $serie = $_POST["serie"];
        $curso = $_POST["curso"];

        /* QUERY NO BANCO */
        $sql_insert = "INSERT INTO alunos 
        (nome, 
        data_nascimento, 
        cpf, matricula, instituicao, 
        serie, curso) 
        VALUES 
        ('$nome', 
        '$data_nascimento', 
        '$cpf', 
        '$matricula', 
        '$instituicao', 
        '$serie', 
        '$curso')";
        
?>
<?php

$resultado = @mysqli_query($conexao, $sql_insert);

/* TRATAMENTO DE RESULTADO */
if (!$resultado) {
    die('Dados Inválidos: ' . @msqli_error($conexao));
    $mensagem = "Erro: Dados inválidos.";
    } else {
        $mensagem = "Registro sucesso";
        } 
        mysqli_close($conexao);
        } else {
            $mensagem = "Insira os dados antes de enviar.";
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

    <a href="/QTSCRUD/pages/indexinserir.php"> Voltar </a>

    
    <?php
    #REMOVER
     $sql_insert 
     ?>
</body>
</html>