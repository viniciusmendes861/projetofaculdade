<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index_cadastro.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Login - Pizzaria</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       
        .navbar {
            background-color: #b22222; 
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: #ffd700 !important;
        }

       
        .user-info {
            color: #fff;
            font-weight: bold;
            margin-right: 15px;
        }

     
        .btn-danger {
            background-color: #b22222;
            border-color: #b22222;
        }

        .btn-danger:hover {
            background-color: #8b0000;
            border-color: #8b0000;
        }

        
        body {
            background-color: #ffe5b4; 
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro de Usuários</a>
            <div class="d-flex align-items-center">
                <?php
                    print "<span class='user-info'>Olá, ".$_SESSION["nome"]."</span>";
                    print "<a href='logout.php' class='btn btn-danger ms-2'>Sair</a>";
                ?>
            </div>
        </div>
    </nav>
</body>    
</html>
