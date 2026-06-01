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
                    <option value="matricula">I</option>
                    <option value="matricula">Matrícula</option>
                    
                </select>
                
                <!-- Script mudança (id, cpf, matricula) -->
                <label for="idAlnInp" id="idAln"> Id: </label> 
                <input type="text" name="idAlnInp">
                
                <div class="overflow-auto">
                    <ul>
                        <li>
                            <details>
                                <summary>
                                    <!--Nome do aluno-->
                                </summary>y
                                <span></span>
                            </details>
                        </li>
                    </ul>
                </div>

            </div> </form>

        </main>

        <div> </div>

        <script> 
        //  
            const selectItentifier = document.getElementById('identifier');
            const variableLabel = document.getElementById('idAln');
            
            selectItentifier.addEventListener('change', () => {
                let i = selectItentifier.selectedIndex;
                variableLabel.textContent = selectItentifier.options[i].text + ":";
            }) 
        </script>
    </body>
</html>