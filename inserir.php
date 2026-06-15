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
            include_once("conexao.php");
        ?>

        <?php 
        include_once("links.php");
        echo $links;
        ?>
        <main class="center">

            <form action="inserir.php" method="post">
                <h2>Registrar Aluno</h2>
                <div class="container-round bg-darken text-light" id="consultaDiv">
                <label for="nome">Nome:</label>
                <input name="nome"></input>
                
                <label for="data_nascimento" >Data de Nascimento</label>
                <input name="data_nascimento"></input>

                <label for="cpf" >CPF</label>
                <input name="cpf"></input>

                <label for="matricula">Matricula</label>
                <input name="matricula"></input>
                
                <label for="instituicao" >Instituição</label>
                <input name="instituicao"></input>
                
                <label for="serie" >Serie</label>
                <input name="serie"></input>
                
                <label for="curso" >Curso</label>
                <input name="curso"></input>
                </div>
            </form>
        </main>
    </body>
</html>