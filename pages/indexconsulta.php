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
    
    <?php
        $form_action = "../actions/consulta.php";
        include("../components/buscaraluno.php");
    ?>

</body>
</html>