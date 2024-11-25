<h1 class="text-center text-danger">Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label class="form-label text-brown">Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" placeholder="Digite o nome">
    </div>
    <div class="mb-3">
        <label class="form-label text-brown">E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control" placeholder="Digite o e-mail">
    </div>
    <div class="mb-3">
        <label class="form-label text-brown">Senha</label>
        <input type="password" name="senha" class="form-control" required placeholder="Digite a nova senha">
    </div>
    <div class="mb-3">
        <label class="form-label text-brown">Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3 text-center">
        <button type="submit" class="btn btn-success">Salvar Alterações</button>
    </div>
</form>

<style>
   
    .text-danger {
        color: #b22222 !important;
    }

    .text-brown {
        color: #8b4513; 
    }

    
    .form-control {
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 10px;
        font-size: 16px;
    }

    
    .btn-success {
        background-color: #32a852; 
        border-color: #32a852;
    }

    .btn-success:hover {
        background-color: #228b22; 
        border-color: #228b22;
    }

    /* Fundo */
    body {
        background-color: #ffe5b4; 
        font-family: Arial, sans-serif;
    }

    
    .container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin-top: 20px;
    }
</style>
