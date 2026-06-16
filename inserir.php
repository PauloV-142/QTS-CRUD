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
            if (isset($_POST['nome'])) {
            # Form preenchido.

            $nome = $_POST["nome"];
            $data_nascimento = $_POST["data_nascimento"];
            $cpf = $_POST["cpf"];
            $matricula = $_POST["matricula"];
            $instituicao = $_POST["instituicao"];
            $serie = $_POST["serie"];
            $curso = $_POST["curso"];
            

            include_once("conexao.php");

            $sql_insert = "INSERT INTO alunos (nome, data_nascimento, cpf, matricula, instituicao, serie, curso) VALUES ('$nome', '$data_nascimento', '$cpf', $matricula, '$instituicao', '$serie', '$curso')";

            $resultado = @mysqli_query($conexao, $sql_insert);
            echo "$resultado";

            $mysqli->close();
            }
        ?>

        <?php 
        include_once("components/links.php");
        echo $links;
        ?>
        <main class="center">

            <form action="inserir.php" method="post">
                <h2>Registrar Aluno</h2>
                
                <div class="container-round bg-darken text-light" id="consultaDiv">
                
                <div>
                    <label for="nome">Nome:</label>
                    <input name="nome"></input>
                    
                    <label for="data_nascimento" >Data de Nascimento</label>
                    <input name="data_nascimento"></input>
                    
                    <label for="cpf" >CPF</label>
                    <input name="cpf"></input>
                </div>

                <div>
                    <label for="matricula">Matricula</label>
                    <input name="matricula"></input>
                    
                    <label for="instituicao" >Instituição</label>
                    <input name="instituicao"></input>
                    
                    <label for="serie" >Serie</label>
                    <input name="serie"></input>
                    
                    <label for="curso" >Curso</label>
                    <input name="curso"></input>
                    
                    <input type="submit" value="Enviar"></input>
                </div>
            </div>
            </form>
        </main>
    </body>
</html>