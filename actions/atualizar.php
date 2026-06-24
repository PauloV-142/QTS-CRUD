<?php
/* QUERY DO UPDATE */
        if (isset($_POST)) {
            echo implode($_POST);
            include_once("../conexao.php");

            $id = $_POST['id'];
            $nome = "`nome` = `". $_POST['nome'] . "`, ";
            $instituicao = "`instituicao` = `". $_POST['instituicao'] . "`, ";
            $serie = "`serie` = `". $_POST['serie'] . "`, ";
            $curso = "`curso` = `". $_POST['curso'] . "`, ";
            $cpf = "`cpf` = `". $_POST['cpf'] . "`, ";
            $matricula = "`matricula` = `". $_POST['matricula'] . "`, ";
            $data_nascimento = "`data_nascimento` = `". $_POST['data_nascimento'] ."`";

            $sql_query = "UPDATE alunos SET $instituicao $nome $serie $curso $cpf $matricula $data_nascimento WHERE id = $id";
            
            
            echo $sql_query;
            
            $resultado = @mysqli_query($conexao, $sql_query);
                
            if (! $resultado) {
                die("Atualização deu errado: " . @msqli_error($conexao));
            } else {
                echo "Atualização realizada com Sucesso";
            }
        }
        ?>