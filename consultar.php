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
                $alunoId = $_POST['idAluno'];

                if ($alunoId == ""){
                    echo "Não tem prova";
                } else {
                    $sql_query = "SELECT * FROM alunos WHERE id=$alunoId"; // Adicionar a possibilidade de outros identificadores
    
                    $resultado = @mysqli_query($conexao, $sql_query);
        
                    if (!$resultado) {
                        die('Query Inválida: ' . @msqli_error($conexao));
                    } else {
                        echo "Request Sucesso";
                    } 
                    mysqli_close($conexao);
        
                    if (mysqli_num_rows($resultado) == 0) {
                        echo "<p>Não há alunos cadastrados com esse ID ainda</p>";
                    }
                }
            
                // Buscar todos os registros
                // while ($dados = mysqli_fetch_array($resultado)) {
                //     echo "<div style='background: rgb(241, 53, 53); padding: 20px; margin: 15px 0; border-radius: 10px;'>";
                //     echo "<b>ID: </b>".$dados['id']."<br>";
                    
                //     echo "<b>Data de Nascimento: </b>".$dados['instituicao']."<br>";
                //     echo "<b>Email: </b>".$dados['serie']."<br>";
                //     echo "<b>Telefone: </b>".$dados['curso']."<br>";
                //     echo "<b>Responsável: </b>".$dados['cpf']."<br>";
                //     echo "<b>CPF: </b>".$dados['matricula']."<br>";
                //     echo "<b>CPF: </b>".$dados['data_nacimento']."<br>";
                //     echo "</div>";
                // }
            }

        ?>

        <?php 
            include_once("links.php");
            echo $links;
        ?>

        <main class="center">
        <form action="consultar.php" method="post">
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
                <label for="idAluno" id="idAln"> Id: </label> 
                <input type="number" name="idAluno">
                <input type="submit" value="a">
                
                <div class="overflow-auto">
                    <?php 
                    if (isset($_POST['idAluno'])) {
                        if ($alunoId == ""){
                            echo "Não tem prova";
                        } else {
                        while ($dados = mysqli_fetch_array($resultado)) {
                    ?>
                    <ul>
                        <li>
                            <details>
                                <summary>
                                   Nome: <?php echo $dados['nome']; ?>
                                </summary>
                                <summary>
                                    ID: <?php echo $dados['id'] ?>
                                </summary>
                                <summary>
                                    Instituição: <?php echo $dados['instituicao'] ?>
                                </summary>
                                <summary>
                                    Série: <?php echo $dados['serie'] ?>
                                </summary>
                                <summary>
                                    Curso: <?php echo $dados['curso'] ?>
                                </summary>
                                <summary>
                                    CPF: <?php echo $dados['cpf'] ?>
                                </summary>
                                <summary>
                                    Matrícula: <?php echo $dados['matricula'] ?>
                                </summary>
                                <summary>
                                    Data de Nascimento: <?php echo $dados['data_nacimento'] ?>
                                </summary>

                            </details>
                        </li>
                    </ul>
                    <?php }}} ?>
                </div>

            </div> </form>

        </main>

        <div> </div>

        <script> 
            const selectItentifier = document.getElementById('identifier');
            const variableLabel = document.getElementById('idAln');
            
            selectItentifier.addEventListener('change', () => {
                let i = selectItentifier.selectedIndex;
                variableLabel.textContent = selectItentifier.options[i].text + ":";
            })
        </script>
    </body>
</html>