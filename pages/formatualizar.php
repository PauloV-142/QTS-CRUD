<?php 
/* SELECT PARA PREENCHER O FORM DE ATUALIZAR */
    $query_success = false;
    $mensagem = "";


    if (isset($_POST['idAluno']) && $_POST['idAluno'] != "") {
        // Form foi respondido?
        
        include_once("../conexao.php");


        $idAluno = $_POST['idAluno'];
        
        // Fazer a query
        $sql_query = "SELECT * FROM alunos WHERE id = $idAluno";
        $resultado = @mysqli_query($conexao, $sql_query);
        
        if (! $resultado) {
            die("Query deu errado: " . @msqli_error($conexao));

        } else {
            $mensagem = "Query Sucesso";
            
            if (mysqli_num_rows($resultado) == 0) {
                $mensagem = "<p>Não há alunos cadastrados com esse ID.</p>";
            } else {
                $query_success = true;
            }
        }
        
        mysqli_close($conexao);
        // Usar os dados para gerar o forms de edição
    }
?>

<?php function gerar_form_atualizar($resultado) { ?>
<form action="../actions/atualizar.php" method="post">
            <div class="container-round bg-darken text-light" id="form-div">
                <h2>Atualizar Cadastro</h2>

                <?php
            while ($dados = mysqli_fetch_array($resultado)) {
                    $id = $dados["id"];
                    $nome = $dados["nome"];
                    $instituicao = $dados["instituicao"];
                    $serie = $dados["serie"];
                    $curso = $dados["curso"];
                    $cpf = $dados["cpf"];
                    $matricula = $dados["matricula"];
                    $data_nascimento = $dados["data_nascimento"];
                ?>

            <div>
                <label for="id">ID:</label>
                <input minlength="6" maxlength="100" name="id" value="<?= $id ?>" readonly required></input>

                <label for="nome">Nome:</label>
                <input minlength="6" maxlength="100" name="nome" value="<?= $nome ?>" required></input>

                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" value="<?= $data_nascimento ?>" required></input>

                <label for="cpf" id="cpfinput"> CPF (apenas numeros) </label>
                <input maxlength="11" name="cpf" value="<?= $cpf ?>" required></input>
            </div>

            <div>
                <label for="matricula">Matricula</label>
                <input minlength="5" maxlength="5" name="matricula" value="<?= $matricula ?>" required></input>

                <label for="instituicao">Instituição</label>
                <input minlength="7" maxlength="200" name="instituicao" value="<?= $instituicao ?>" required></input>

                <label for="serie">Serie</label>
                <input minlength="3" maxlength="4" name="serie" value="<?= $serie ?>" required></input>

                <label for="curso">Curso</label>
                <input minlength="2" maxlength="100" name="curso" value="<?= $curso ?>" required></input>

                <input type="submit" value="Atualizar"></input>
            </div>
            <?php } ?>
        </form>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Atualizar Cadastro</title>
</head>
<body class="bg-dark text-light">
    
    <?php include("../components/header.php"); ?>

    <p><?= $mensagem ?></p>


<main class="center">
    <?php /* FORM REUTILIZÁVEL EM indexinserir.php */

    if ($query_success) {
        gerar_form_atualizar($resultado);
    }
?>
    </main>

    <p>Status: <?= $query_success ?></p>

    <a href="../pages/indexatualizar.php"> Voltar </a>

</body>

</html>
