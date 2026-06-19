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
<form action="atualizar.php" method="post">
            <div class="container-round bg-darken text-light" id="form-div">
                <h2>Atualizar Cadastro</h2>

                <?php
            $labels = ["ID", "Nome", "Instituição", "Série", "Curso", "CPF", "Matrícula", "Data de Nascimento"];
            $campos = ["id", "nome", "instituicao", "serie", "curso", "cpf", "matricula", "data_nascimento"];

            $i = 0;
            while ($dados = mysqli_fetch_array($resultado)) {

                foreach ($campos as $campo) {
                    $valor = $dados[$campo];
                    ?>

                <label for="<?= $campo ?>">
                    <?= $labels[$i] ?>:
                </label>

                <input name="<?= $campo ?>" value=<?=$valor ?>
                <?= $campo == "id" ? "readonly" : "" ?>
                style="margin-bottom: 1rem;"
                >
                </input>

                <?php
            $i += 1;
            }
            }

            // Dá pra criar um componente com isso tudo, em que Labels, Campos e Dados seriam os atributos (props).

            ?>
                <input type="submit" value="atualizar"></input>
            </div>
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

    <a href="/QTSCRUD/pages/indexatualizar.php"> Voltar </a>

</body>

</html>