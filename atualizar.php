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
        
        if (isset($_POST['idAluno'])) {

        }
        
        ?>
        <?php 
            include_once("components/links.php");
            echo $links;
        ?>

        <main class="center">
        <form action="consultar.php">
            <div class="container-round bg-darken text-light" id="consultaDiv">
                <h2>
                    Atualizar Dados
                </h2>

                <label for="identifier">
                    Identificador
                </label>
                <select name="identifier" id="identifier" required>
                    <option value="id">ID</option>
                    <option value="cpf">CPF</option>
                    <option value="matricula">Matrícula</option>
                </select>
                
                <label for="idAluno"> Id: </label> <!-- Script mudança (id, cpf, matricula) -->
                <input type="text" name="idAluno">

                <input type="submit" value="Buscar">
            </div> 
        </form>

        <?php
        // Form de edição
        
        ?>

        </main>

        <div> </div>

    </body>
</html>