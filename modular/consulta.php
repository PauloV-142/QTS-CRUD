<?php
include_once("../conexao.php");

if (isset($_POST['idAluno'])) {
    $alunoId = $_POST['idAluno'];

    if ($alunoId == "") {
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
}
?>


<div class="overflow-auto">
    <?php
    if (isset($_POST['idAluno'])) {
        if ($alunoId == "") {
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
                                Data de Nascimento: <?php echo $dados['data_nascimento'] ?>
                            </summary>

                        </details>
                    </li>
                </ul>
            <?php }
        }
    } ?>
</div>