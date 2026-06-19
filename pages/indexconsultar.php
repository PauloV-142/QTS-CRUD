<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
    <link rel="stylesheet" href="../main.css">
</head>
<body class="bg-dark">

    <?php
        include("../components/header.php");
    ?>
    
    <main class="center">
        <?php
            $form_action = "../actions/consultar.php";
            $title = "Buscar Dados";
            $btn_label = "Remover";
            include("../components/buscaraluno.php");
        ?>
    </main>

</body>
</html>