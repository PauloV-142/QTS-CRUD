<?php
/* QUERY DO UPDATE */
        if (isset($_POST)) {
            echo implode($_POST);
            include_once("conexao.php");

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $instituicao = $_POST['instituicao'];
            $serie = $_POST['serie'];
            $curso = $_POST['curso'];
            $cpf = $_POST['cpf'];
            $matricula = $_POST['matricula'];
            $data_nascimento = $_POST['data_nascimento'];

            $sql_query = "UPDATE alunos SET 
            nome = $nome,
            instituicao = $instituicao,
            serie = $serie,
            curso = $curso,
            cpf = $cpf,
            matricula = $matricula,
            data_nascimento = $data_nascimento,
            WHERE id = $id";

            $resultado = @mysqli_query($conexao, $sql_query);
                
            if (! $resultado) {
                die("Atualização deu errado: " . @msqli_error($conexao));
            } else {
                echo "Atualização realizada com Sucesso";
            }
        }
        ?>