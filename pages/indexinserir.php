<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Inserir - Cadastrar</title>
    <link rel="stylesheet" href="../main.css">
</head>

<body class="bg-dark text-light">

    <?php
    include_once("../components/header.php");
    ?>
    <main class="center">

        <form action="../actions/inserir.php" method="post">
            <h2>Registrar Aluno</h2>

            <div class="container-round bg-darken text-light" id="form-div">

                <div>
                    <label for="nome">Nome:</label>
                    <input minlength="6" maxlength="100" name="nome" required></input>

                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" required></input>

                    <label for="cpf" id="cpfinput"> CPF (apenas numeros) </label>
                    <input maxlength="11" name="cpf" required></input>
                </div>

                <div>
                    <label for="matricula">Matricula</label>
                    <input minlength="5" maxlength="5" name="matricula" required></input>

                    <label for="instituicao">Instituição</label>
                    <input minlength="7" maxlength="200" name="instituicao" required></input>

                    <label for="serie">Serie</label>
                    <input minlength="3" maxlength="4" name="serie" required></input>

                    <label for="curso">Curso</label>
                    <input minlength="2" maxlength="100" name="curso" required></input>

                    <input type="submit" value="Enviar"></input>
                </div>
            </div>
        </form>
    </main>
</body>
<script>
    const cpfinput = document.getElementById("cpfinput");

    cpfinput.addEventListener('blur', () => {
        console.log('O usuário saiu do campo!');
    });
</script>

</html>