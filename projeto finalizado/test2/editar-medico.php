<h1 class="text-center mb-5 text-primary">Editar Médico</h1>

<?php
    $sql = "SELECT * FROM medico WHERE id_medico=".$_REQUEST['id_medico'];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar-medico" method="POST" class="mx-auto" style="max-width: 600px;">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_medico" value="<?php print $row->id_medico; ?>">

    <div class="mb-4">
        <label class="form-label" for="nome_medico">Nome</label>
        <input type="text" id="nome_medico" name="nome_medico" class="form-control" value="<?php print $row->nome_medico; ?>" required>
    </div>

    <div class="mb-4">
        <label class="form-label" for="crm_medico">CRM</label>
        <input type="text" id="crm_medico" name="crm_medico" class="form-control" value="<?php print $row->crm_medico; ?>" required>
    </div>

    <div class="mb-4">
        <label class="form-label" for="especialidade_medico">Especialidade</label>
        <input type="text" id="especialidade_medico" name="especialidade_medico" class="form-control" value="<?php print $row->especialidade_medico; ?>" required>
    </div>

    <div class="mb-4 text-center">
        <button type="submit" class="btn btn-success btn-lg">
            <i class="fa-solid fa-floppy-disk"></i> Salvar Alterações
        </button>
    </div>
</form>
