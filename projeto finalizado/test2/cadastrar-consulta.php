<h1 class="text-center mb-5 text-primary">Cadastrar Consulta</h1>

<form action="?page=salvar-consulta" method="POST" class="p-5 border rounded-lg shadow-lg bg-white">
    <input type="hidden" name="acao" value="cadastrar">

    <!-- Nome do Paciente -->
    <div class="mb-4">
        <label for="paciente_id_paciente" class="form-label text-dark">Nome do Paciente</label>
        <select name="paciente_id_paciente" id="paciente_id_paciente" class="form-control form-control-lg" required>
            <option value="">-= Escolha um Paciente =-</option>
            <?php
                $sql_1 = "SELECT id_paciente, nome_paciente FROM paciente";
                $res_1 = $conn->query($sql_1);
                $qtd_1 = $res_1->num_rows;
                if($qtd_1 > 0){
                    while($row_1 = $res_1->fetch_object()){
                        print "<option value='".$row_1->id_paciente."'>".$row_1->nome_paciente."</option>";
                    }
                } else {
                    print "<option>Não há pacientes</option>";
                }
            ?>
        </select>
    </div>

    <!-- Nome do Médico -->
    <div class="mb-4">
        <label for="medico_id_medico" class="form-label text-dark">Nome do Médico</label>
        <select name="medico_id_medico" id="medico_id_medico" class="form-control form-control-lg" required>
            <option value="">-= Escolha um Médico =-</option>
            <?php
                $sql_2 = "SELECT id_medico, nome_medico FROM medico";
                $res_2 = $conn->query($sql_2);
                $qtd_2 = $res_2->num_rows;
                if($qtd_2 > 0){
                    while($row_2 = $res_2->fetch_object()){
                        print "<option value='".$row_2->id_medico."'>".$row_2->nome_medico."</option>";
                    }
                } else {
                    print "<option>Não há Médicos</option>";
                }
            ?>
        </select>
    </div>

    <!-- Data da Consulta -->
    <div class="mb-4">
        <label for="data_consulta" class="form-label text-dark">Data da Consulta</label>
        <input type="date" name="data_consulta" id="data_consulta" class="form-control form-control-lg" required>
    </div>

    <!-- Hora da Consulta -->
    <div class="mb-4">
        <label for="hora_consulta" class="form-label text-dark">Hora da Consulta</label>
        <input type="time" name="hora_consulta" id="hora_consulta" class="form-control form-control-lg" required>
    </div>

    <!-- Descrição -->
    <div class="mb-4">
        <label for="descricao_consulta" class="form-label text-dark">Descrição</label>
        <textarea name="descricao_consulta" id="descricao_consulta" class="form-control form-control-lg" rows="4" required></textarea>
    </div>

    <!-- Botão de Envio -->
    <div class="mb-4 text-center">
        <button type="submit" class="btn btn-success btn-lg px-5">
            <i class="fa-solid fa-floppy-disk"></i> Salvar
        </button>
    </div>
</form>
