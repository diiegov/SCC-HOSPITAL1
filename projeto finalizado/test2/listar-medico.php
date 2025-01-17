<h1 class="text-center mb-5 text-primary">Listar Médicos</h1>

<?php
    $sql = "SELECT * FROM medico";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p class='text-center'>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-striped table-hover table-bordered'>";
        print "<thead class='thead-light'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>CRM</th>";
        print "<th>Especialidade</th>";
        print "<th>Ações</th>";
        print "</tr>";
        print "</thead>";
        print "<tbody>";
        $count = 1;
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$count++."</td>";
            print "<td>".$row->nome_medico."</td>";
            print "<td>".$row->crm_medico."</td>";
            print "<td>".$row->especialidade_medico."</td>";
            print "<td class='text-center'>
                        <button class='btn btn-success' onclick=\"location.href='?page=editar-medico&id_medico=".$row->id_medico."';\">
                            <i class='fa-solid fa-pencil-alt'></i> Editar
                        </button>

                        <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que quer excluir?')){location.href='?page=salvar-medico&acao=excluir&id_medico=".$row->id_medico."';}else{false;}\">
                            <i class='fa-solid fa-trash'></i> Excluir
                        </button>
                   </td>";
            print "</tr>";
        }
        print "</tbody>";
        print "</table>";
    } else {
        print "<p class='text-center text-danger'>Não encontrou resultado</p>";
    }
?>
