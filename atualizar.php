<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <title>Document</title>
    </head>
    <body class="bg-dark text-light">

        <?php 
            $query_success = false;

            if (isset($_POST['idAluno']) && $_POST['idAluno'] != "") {
                // Form foi respondido?
                include_once("conexao.php");

                $idAluno = $_POST['idAluno'];
                
                // Fazer a query
                $sql_query = "SELECT * FROM alunos WHERE id = $idAluno";

                $resultado = @mysqli_query($conexao, $sql_query);
                
                if (! $resultado) {
                    die("Query deu errado: " . @msqli_error($conexao));
                } else {
                    echo "Request Sucesso";
                    $query_success = true;
                    // Nex time the user press the "submit", the student data will be updated.
                }

                if ($query_success) {
                    // Upload the data, since the update form has appeared.
                }

                mysqli_close($conexao);
                // Usar os dados para gerar o forms de edição

            }

            include_once("components/header.php");
            echo $links;
        ?>

        <main style="width: 90dvw;">

        <form action="atualizar.php" method="post">
            <div class="container-round bg-darken text-light" id="form-div">
                <h2>
                    Busque o aluno para atualizar
                </h2>
                
                <label for="idAluno"> Id: </label> <!-- Script mudança (id, cpf, matricula) -->
                <input id="idAluno" type="text" name="idAluno">

                <input type="submit" value="Buscar">
            </div> 
        </form>

        <?php
        if ($query_success) {
            if (mysqli_num_rows($resultado) == 0) {
                    echo "<p>Não há alunos cadastrados com esse ID ainda</p>";
                } else {
        ?>

        <form action="atualizar.php" method="get">
        <div class="container-round bg-darken text-light" id="form-div">
            <h2>Atualizar Cadastro</h2>

            <?php
            $labels = ["id", "Nome", "Instituição", "Série", "Curso", "CPF", "Matrícula", "Data de Nascimento"];
            $campos = ["id", "nome", "instituicao", "serie", "curso", "cpf", "matricula", "data_nascimento"];

            $i = 0;
            while ($dados = mysqli_fetch_array($resultado)) {

                foreach ($campos as $campo) {
                    $valor = $dados[$campo];
                    ?>

                    <label for="<?= $campo ?>"> 
                        <?= $labels[$i] ?>: 
                    </label>

                    <input name="<?= $campo ?>" value=<?= $valor ?> <?= $campo == "id" ? "readonly" : "" ?>
                    style="margin-bottom: 1rem;"
                    >
                    </input>
        
            <?php
            $i += 1;
            }
            }
            ?>
            <input type="submit" value="atualizar"></input>
        </div>
        </form>

        <?php
        }}
        echo implode($_POST);
        ?>

        </main>

        <div> </div>

    </body>
</html>
