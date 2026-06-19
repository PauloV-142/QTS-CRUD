<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../main.css">
        <title>Document</title>
    </head>
    <body class="bg-dark text-light">
        <?php
            include("../components/header.php");
        ?>

        <main class="center">
        <?php
            $title = "Atualizar cadastro:";
            $form_action = "../pages/formatualizar.php";
            $btn_label = "Buscar";
            include("../components/buscaraluno.php");
        ?>

        </main>

    </body>
</html>
