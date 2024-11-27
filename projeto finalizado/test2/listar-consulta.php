<h1 class="text-center mb-5 text-primary">Listar Consultas</h1>

<?php
    $sql = "SELECT * FROM consulta AS c
            INNER JOIN paciente AS p
            ON p.id_paciente = c.paciente_id_paciente
            INNER JOIN medico AS m
            ON m.id_medico = c.medico_id_medico";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p class='text-center'>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-striped table-hover table-bordered'>";
        print "<thead class='thead-light'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Médico</th>";
        print "<th>Paciente</th>";
        print "<th>Data</th>";
        print "<th>Hora</th>";
        print "<th>Descrição</th>";
        print "<th>Ações</th>";
        print "</tr>";
        print "</thead>";
        print "<tbody>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>".$row->id_consulta."</td>";
            print "<td>".$row->nome_medico."</td>";
            print "<td>".$row->nome_paciente."</td>";
            print "<td>".$row->data_consulta."</td>";
            print "<td>".$row->hora_consulta."</td>";
            print "<td>".$row->descricao_consulta."</td>";
            print "<td class='text-center'>
                        <button class='btn btn-success' onclick=\"location.href='?page=editar-consulta&id_consulta=".$row->id_consulta."';\">
                            <i class='fa-solid fa-pencil-alt'></i> Editar
                        </button>

                        <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-consulta&acao=excluir&id_consulta=".$row->id_consulta."';}else{false;}\">
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
