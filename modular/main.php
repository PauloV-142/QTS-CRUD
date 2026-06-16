<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="main.css"></link>
</head>
<body class="bg-dark text-light">

<?php
include_once("../components/header.php");
echo $links;
?>

<main>
    <container>
        <?php
            include_once("../consultar.php")
        ?>
    </container>
</main>

    
</body>
</html>
