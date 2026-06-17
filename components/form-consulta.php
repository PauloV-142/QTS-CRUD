<main class="center">
    <form action="<?= $form_destino ?>" method="post">
        <div class="container-round bg-darken text-light" id="form-div">
            <h2>
                Buscar Dados
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
            <input type="submit" value="Consultar">

        </div>
    </form>

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
?>