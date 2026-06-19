
<!-- O ACTION do FORM é CUSTOMIZÁVEL -->

<?php
function warn() {
    echo "<h1>Algo de errado não está certo.</h1>";
}

if (! isset($title)) { $title = "Buscar aluno";}
if (! isset($form_action)) { $form_action = "consultar.php";}
if (! isset($btn_label)) { $btn_label = "Buscar";}
?>

<form action="<?= $form_action ?>" method="post">
    <div class="container-round bg-darken text-light" id="form-div">
        <h2>
            <?= $title ?>
        </h2>

        <label for="identifier">
            Identificador
        </label>
        <select name="identifier" id="identifier" required>
            <option value="id">ID</option>
            <option valu2e="cpf">CPF</option>
            <option value="matricula">Matrícula</option>
            <option value="matricula">I</option>
            <option value="matricula">Matrícula</option>
        </select>

        <!-- Script mudança (id, cpf, matricula) -->
        <label for="idAluno" id="idAln"> Id: </label>
        <input type="number" name="idAluno">
        <input type="submit" value="<?= $btn_label ?>">

    </div>
</form>

<script>
    const selectItentifier = document.getElementById('identifier');
    const variableLabel = document.getElementById('idAln');

    selectItentifier.addEventListener('change', () => {
        let i = selectItentifier.selectedIndex;
        variableLabel.textContent = selectItentifier.options[i].text + ":";
    })
</script>