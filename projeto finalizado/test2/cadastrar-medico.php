<h1 class="text-center mb-5 text-primary">Cadastrar Médico</h1>

<form action="?page=salvar-medico" method="POST" class="p-5 border rounded-lg shadow-lg bg-white">
    <input type="hidden" name="acao" value="cadastrar">

    <!-- Nome -->
    <div class="mb-4">
        <label for="nome_medico" class="form-label text-dark">Nome Completo</label>
        <input type="text" id="nome_medico" name="nome_medico" class="form-control form-control-lg" placeholder="Digite o nome completo" required>
    </div>

    <!-- CRM -->
    <div class="mb-4">
        <label for="crm_medico" class="form-label text-dark">CRM</label>
        <input type="text" id="crm_medico" name="crm_medico" class="form-control form-control-lg" placeholder="Digite o CRM" required>
    </div>

    <!-- Especialidade -->
    <div class="mb-4">
        <label for="especialidade_medico" class="form-label text-dark">Especialidade</label>
        <input type="text" id="especialidade_medico" name="especialidade_medico" class="form-control form-control-lg" placeholder="Digite a especialidade" required>
    </div>

    <!-- Botão de Envio -->
    <div class="mb-4 text-center">
        <button type="submit" class="btn btn-success btn-lg px-5">
            <i class="fa-solid fa-floppy-disk"></i> Salvar
        </button>
    </div>
</form>
