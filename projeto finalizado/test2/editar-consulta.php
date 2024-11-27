<h1 class="text-center mb-5 text-primary">Editar Consulta</h1>

<?php
    $sql = "SELECT * FROM consulta WHERE id_consulta=".$_REQUEST['id_consulta'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-consulta" method="POST" class="mx-auto" style="max-width: 700px;">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_consulta" value="<?php print $row->id_consulta; ?>">

    <!-- Paciente -->
    <div class="mb-4">
        <label class="form-label" for="paciente_id_paciente">Nome do Paciente</label>
        <select name="paciente_id_paciente" id="paciente_id_paciente" class="form-control" required>
            <option> -= Escolha um Paciente =- </option>
            <?php
                $sql_1 = "SELECT * FROM paciente";
                $res_1 = $conn->query($sql_1);
                $qtd_1 = $res_1->num_rows;
                if ($qtd_1 > 0) {
                    while ($row_1 = $res_1->fetch_object()) {
                        $selected = $row_1->id_paciente == $row->paciente_id_paciente ? 'selected' : '';
                        print "<option value='".$row_1->id_paciente."' $selected>".$row_1->nome_paciente."</option>";
                    }
                } else {
                    print "<option>Não há pacientes</option>";
                }
            ?>
        </select>
    </div>

    <!-- Médico -->
    <div class="mb-4">
        <label class="form-label" for="medico_id_medico">Nome do Médico</label>
        <select name="medico_id_medico" id="medico_id_medico" class="form-control" required>
            <option> -= Escolha um Médico =- </option>
            <?php
                $sql_2 = "SELECT * FROM medico";
                $res_2 = $conn->query($sql_2);
                $qtd_2 = $res_2->num_rows;
                if ($qtd_2 > 0) {
                    while ($row_2 = $res_2->fetch_object()) {
                        $selected = $row_2->id_medico == $row->medico_id_medico ? 'selected' : '';
                        print "<option value='".$row_2->id_medico."' $selected>".$row_2->nome_medico."</option>";
                    }
                } else {
                    print "<option>Não há médicos</option>";
                }
            ?>
        </select>
    </div>

    <!-- Data da Consulta -->
    <div class="mb-4">
        <label class="form-label" for="data_consulta">Data da Consulta</label>
        <input type="date" name="data_consulta" id="data_consulta" class="form-control" value="<?php print $row->data_consulta; ?>" required>
    </div>

    <!-- Hora da Consulta -->
    <div class="mb-4">
        <label class="form-label" for="hora_consulta">Hora da Consulta</label>
        <input type="time" name="hora_consulta" id="hora_consulta" class="form-control" value="<?php print $row->hora_consulta; ?>" required>
    </div>

    <!-- Descrição -->
    <div class="mb-4">
        <label class="form-label" for="descricao_consulta">Descrição</label>
        <textarea name="descricao_consulta" id="descricao_consulta" class="form-control" required><?php print $row->descricao_consulta; ?></textarea>
    </div>

    <!-- Botão de Envio -->
    <div class="mb-4 text-center">
        <button type="submit" class="btn btn-success btn-lg">
            <i class="fa-solid fa-floppy-disk"></i> Salvar Alterações
        </button>
    </div>
</form>
