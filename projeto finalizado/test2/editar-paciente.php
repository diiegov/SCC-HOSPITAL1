<h1 class="text-center mb-5 text-primary">Editar Paciente</h1>

<?php
    $sql = "SELECT * FROM paciente WHERE id_paciente = ".$_REQUEST['id_paciente'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-paciente" method="POST" class="mx-auto" style="max-width: 600px;">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_paciente" value="<?php print $row->id_paciente; ?>">

    <div class="mb-4">
        <label class="form-label" for="nome_paciente">Nome</label>
        <input type="text" id="nome_paciente" name="nome_paciente" class="form-control" value="<?php print $row->nome_paciente; ?>" required>
    </div>

    <div class="mb-4">
        <label class="form-label" for="cpf_paciente">CPF</label>
        <input type="text" id="cpf_paciente" name="cpf_paciente" class="form-control" value="<?php print $row->cpf_paciente; ?>" required>
    </div>

    <div class="mb-4">
        <label class="form-label" for="email_paciente">E-mail</label>
        <input type="email" id="email_paciente" name="email_paciente" class="form-control" value="<?php print $row->email_paciente; ?>" required>
    </div>

    <div class="mb-4">
        <label class="form-label" for="fone_paciente">Fone</label>
        <input type="text" id="fone_paciente" name="fone_paciente" class="form-control" value="<?php print $row->fone_paciente; ?>" required>
    </div>

    <div class="mb-4">
        <label class="form-label" for="endereco_paciente">Endereço</label>
        <input type="text" id="endereco_paciente" name="endereco_paciente" class="form-control" value="<?php print $row->endereco_paciente; ?>" required>
    </div>

    <div class="mb-4">
        <label class="form-label" for="dt_nasc_paciente">Data de Nascimento</label>
        <input type="date" id="dt_nasc_paciente" name="dt_nasc_paciente" class="form-control" value="<?php print $row->dt_nasc_paciente; ?>" required>
    </div>

    <div class="mb-4">
        <label class="form-label">Sexo</label>
        <div>
            <label><input type="radio" name="sexo_paciente" value="m" <?php echo($row->sexo_paciente=="m"?"checked":""); ?>> Masculino</label>
            <label><input type="radio" name="sexo_paciente" value="f" <?php echo($row->sexo_paciente=="f"?"checked":""); ?>> Feminino</label>
        </div>
    </div>

    <div class="mb-4 text-center">
        <button type="submit" class="btn btn-success btn-lg">
            <i class="fa-solid fa-floppy-disk"></i> Salvar Alterações
        </button>
    </div>
</form>
