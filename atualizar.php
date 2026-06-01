<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <title>Document</title>
    </head>
    <body class="bg-dark text-light">

        <header>
            <h1>
                Atividade QTS operações CRUD
            </h1>
        </header>
        
        <navbar>
            <a href="#" id="btnSelect"> Consultar </a>
            <a href="#" id="btnInsert"> Inserir </a>
            <a href="#" id="btnUpdate"> Atualizar  </a>
            <a href="#" id="btnRemove"> Remover </a>
        </navbar>

        <main class="center">
        <form action="consultar.php">
            <div class="container-round bg-darken text-light" id="consultaDiv">
                <h2>
                    Consultar Dados
                </h2>


                <label for="identifier">
                    Identificador
                </label>
                <select name="identifier" id="identifier" required>
                    <option value="id">ID</option>
                    <option value="cpf">CPF</option>
                    <option value="matricula">Matrícula</option>
                </select>
                <label for="idAln"> Id: </label> <!-- Script mudança (id, cpf, matricula) -->
                <input type="text" name="idAln">


            </div> </form>

        </main>

        <div> </div>

    </body>
</html>