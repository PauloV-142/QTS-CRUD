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
        include_once("links.php");
        echo $links;
        ?>
        
        <form action="inserir.php" method="post">
            <label for="nome">Nome:</label>
            <input name="nome"></input>

            <label for="matricula">Matricula</label>
            <input name="matricula"></input>
            
            <label for="instituicao" ></label>
            <input name="instituicao"></input>

            <label for="cpf" ></label>
            <input name="cpf"></input>

            <label for="serie" ></label>
            <input name="serie"></input>

            <label for="data_nascimento" ></label>
            <input name="data_nascimento"></input>
            
            <label for="curso" ></label>
            <input name="curso"></input>
        </form>
        
    </body>
</html>