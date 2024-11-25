<h1 class="text-center text-danger">Listar Usuários</h1>
<?php
    $sql = "SELECT * FROM usuarios"; 

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-bordered table-striped table-pizzaria'>";
        print "<thead class='bg-danger text-white'>";
        print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Data de Nascimento</th>";
            print "<th>Ações</th>";
        print "</tr>";
        print "</thead>";
        print "<tbody>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success btn-sm'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger btn-sm'>Excluir</button>
                </td>";
            print "</tr>";
        }
        print "</tbody>";
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não foi possível encontrar nenhum usuário!</p>";
    }
?>

<style>
    
    .table-pizzaria {
        background-color: #f8f9fa; 
        border-color: #b22222; 
    }

    
    .table-pizzaria th, .table-pizzaria td {
        border-color: #b22222;
    }

    
    .table-pizzaria tbody tr:hover {
        background-color: #ffe4b5;
        }

    
    .bg-danger {
        background-color: #b22222 !important;
    }

   
    .btn-success, .btn-danger {
        font-weight: bold;
        text-transform: uppercase;
    }

    
    .btn-success:hover {
        background-color: #228b22 !important;
    }

    
    .btn-danger:hover {
        background-color: #8b0000 !important; 
    }
</style>