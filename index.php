<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários - Pizzaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Fundo principal e fontes */
        body {
            background-color: #ffe5b4; /* Cor de fundo alaranjado suave */
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #b22222; /* Vermelho escuro para a barra de navegação */
        }

        .navbar-brand, .nav-link {
            color: #fff !important; /* Links em branco */
        }

        .navbar-brand:hover, .nav-link:hover {
            color: #ffd700 !important; /* Links em amarelo dourado ao passar o mouse */
        }

        /* Botão de logout */
        .btn-danger {
            background-color: #b22222; 
            border-color: #b22222;
        }

        .btn-danger:hover {
            background-color: #8b0000; 
            border-color: #8b0000;
        }

        /* Título principal */
        h1 {
            color: #b22222; 
            text-align: center;
            margin-top: 20px;
        }

        /* Container centralizado com sombras */
        .container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        /* Links ativos */
        .nav-link.active {
            font-weight: bold;
            color: #ffd700 !important; /* Amarelo dourado para link ativo */
        }

        /* Estilo adicional para botões */
        .btn {
            font-weight: bold;
            border-radius: 5px;
        }

        /* Footer */
        footer {
            background-color: #b22222;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: #ffd700;
            text-decoration: none;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro de Usuários</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="?page=novo">Novo Usuário</a>
        <a class="nav-link" href="?page=listar">Listar Usuários</a>
        <?php
                print "<a href='logout.php' class='btn btn-danger ms-2'>Sair</a>";
            ?>
      </div>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php
    include("config.php");
    switch(@$_REQUEST["page"]){
        case "novo":
          include("novo-usuario.php");
        break;
        case "listar":
          include("listar-usuario.php");
        break;
        case "salvar":
          include("salvar-usuario.php");
        break;
        case "editar":
          include("editar-usuario.php");
        break;
        default:
        print "<h1>Bem vindos à tela de cadastro de usuários!</h1>";
    }
?>
    </div>
  </div>
</div>

<footer>
    <p>&copy; 2024 Pizzaria Bella Napoli | <a href="#">Política de Privacidade</a></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
