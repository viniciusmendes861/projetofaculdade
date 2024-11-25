<h1 class="text-center text-danger">Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label class="form-label text-brown">Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
    </div>
    <div class="mb-3">
        <label class="form-label text-brown">E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail">
    </div>
    <div class="mb-3">
        <label class="form-label text-brown">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
    </div>
    <div class="mb-3">
        <label class="form-label text-brown">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>
    <div class="mb-3 text-center">
        <button type="submit" class="btn btn-danger">Enviar</button>
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
    }

    
    .btn-danger {
        background-color: #b22222; 
        border-color: #b22222;
    }

   
    .btn-danger:hover {
        background-color: #8b0000; 
        border-color: #8b0000; 
    }
</style>
