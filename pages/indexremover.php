<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Remover</title>
        <link rel="stylesheet" href="../main.css">
    </head>
    <body class="bg-dark text-light">
        
        <?php 
            include("../components/header.php");
        ?>

        <main class="center">
            <?php
                $form_action = "../actions/remover.php";
                $title = "Busque o Cadastro para Remover";
                $btn_label = "Buscar";
                include("../components/buscaraluno.php");
            ?>
        </main>

        <div> </div>

    </body>
</html>