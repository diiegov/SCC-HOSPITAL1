<h1 class="text-center mb-5 text-primary">Listar Pacientes</h1>

<?php
    $sql = "SELECT * FROM paciente";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<p class='text-center'>Encontrou <b>$qtd</b> resultado(s)</p>";
        print "<table class='table table-striped table-hover table-bordered'>";
        print "<thead class='thead-light'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>CPF</th>";
        print "<th>E-mail</th>";
        print "<th>Fone</th>";
        print "<th>Endereço</th>";
        print "<th>Data de Nasc.</th>";
        print "<th>Sexo</th>";
        print "<th>Ações</th>";
        print "</tr>";
        print "</thead>";
        print "<tbody>";
        while($row = $res->fetch_object()){
            $sexo = ($row->sexo_paciente == "m") ? "Masculino" : "Feminino";
            print "<tr>";
            print "<td>".$row->id_paciente."</td>";
            print "<td>".$row->nome_paciente."</td>";
            print "<td>".$row->cpf_paciente."</td>";
            print "<td>".$row->email_paciente."</td>";
            print "<td>".$row->fone_paciente."</td>";
            print "<td>".$row->endereco_paciente."</td>";
            print "<td>".$row->data_nasc_paciente."</td>";
            print "<td>".$sexo."</td>";
            print "<td class='text-center'>
                        <button class='btn btn-success' onclick=\"location.href='?page=editar-paciente&id_paciente=".$row->id_paciente."';\">
                            <i class='fa-solid fa-pencil-alt'></i> Editar
                        </button>
                        <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-paciente&acao=excluir&id_paciente=".$row->id_paciente."';}else{false;}\">
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
