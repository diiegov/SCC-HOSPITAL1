<h1 class="text-center mb-4">Cadastrar Paciente</h1>

<form action="?page=salvar-paciente" method="POST" class="p-4 border rounded shadow-sm bg-light">
    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">
        <label for="nome_paciente" class="form-label">Nome</label>
        <input type="text" id="nome_paciente" name="nome_paciente" class="form-control" placeholder="Digite o nome completo" required>
    </div>

    <div class="mb-3">
        <label for="cpf_paciente" class="form-label">CPF</label>
        <input type="text" id="cpf_paciente" name="cpf_paciente" class="form-control" placeholder="Digite o CPF" required>
    </div>

    <div class="mb-3">
        <label for="email_paciente" class="form-label">E-mail</label>
        <input type="email" id="email_paciente" name="email_paciente" class="form-control" placeholder="Digite o e-mail" required>
    </div>

    <div class="mb-3">
        <label for="fone_paciente" class="form-label">Fone</label>
        <input type="text" id="fone_paciente" name="fone_paciente" class="form-control" placeholder="Digite o número de telefone" required>
    </div>

    <div class="mb-3">
        <label for="endereco_paciente" class="form-label">Endereço</label>
        <input type="text" id="endereco_paciente" name="endereco_paciente" class="form-control" placeholder="Digite o endereço" required>
    </div>

    <div class="mb-3">
        <label for="dt_nasc_paciente" class="form-label">Data de Nascimento</label>
        <input type="date" id="dt_nasc_paciente" name="dt_nasc_paciente" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Sexo</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo_paciente" value="m" id="sexo_m">
            <label class="form-check-label" for="sexo_m">Masculino</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo_paciente" value="f" id="sexo_f">
            <label class="form-check-label" for="sexo_f">Feminino</label>
        </div>
    </div>

    <div class="mb-3 text-center">
        <button type="submit" class="btn btn-success btn-lg">
            <i class="fa-solid fa-floppy-disk"></i> Salvar
        </button>
    </div>
</form>
