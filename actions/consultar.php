<?php
/* Buscar os Dados: */

include_once("../conexao.php");

$mensagem = "";

if (isset($_POST['idAluno'])) {
    $alunoId = $_POST['idAluno'];

    if ($alunoId == "") {
        # Add an option for more identifiers.
        $mensagem = "Insira o ID do aluno.";

    } else {
        $sql_query = "SELECT * FROM alunos WHERE id=$alunoId"; // Adicionar a possibilidade de outros identificadores

        $resultado = @mysqli_query($conexao, $sql_query);

        if (!$resultado) {
            die('Query Inválida: ' . @msqli_error($conexao));
        } else if (mysqli_num_rows($resultado) == 0) {
            $mensagem = "Não há alunos cadastrados com esse ID ainda.";
        } else {
            $mensagem = "Request Sucesso.";
            $sucesso = true;
        }

        mysqli_close($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../main.css">
</head>
<body class="bg-dark ">
    <main class="overflow-auto container-round bg-darken text-light">
        
        <h3> Status: <?= $mensagem ?> </h3>

        <?php
        if (isset($sucesso)) {
            while ($dados = mysqli_fetch_array($resultado)) {
        ?>
            <ul>
                <li>
                    <details>
                        <summary>
                            Nome:
                            <?php echo $dados['nome']; ?>
                        </summary>
                        <summary>
                            ID:
                            <?php echo $dados['id'] ?>
                        </summary>
                        <summary>
                            Instituição:
                            <?php echo $dados['instituicao'] ?>
                        </summary>
                        <summary>
                            Série:
                            <?php echo $dados['serie'] ?>
                        </summary>
                        <summary>
                            Curso:
                            <?php echo $dados['curso'] ?>
                        </summary>
                        <summary>
                            CPF:
                            <?php echo $dados['cpf'] ?>
                        </summary>
                        <summary>
                            Matrícula:
                            <?php echo $dados['matricula'] ?>
                        </summary>
                        <summary>
                            Data de Nascimento:
                            <?php echo $dados['data_nascimento'] ?>
                        </summary>
                    </details>
                </li>
            </ul>
        <?php }} ?> 
    </main>
    <a href="../index.php"> Menu </a>
</body>
</html>