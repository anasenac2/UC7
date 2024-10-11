
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<h2 class="fw-light">Novo Cadastro</h2>
<hr>
<div class="col-12">
    <form style="margin-top: 60px;" class="d-flex justify-content-center flex-column"
    action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar"/> 
        <div class="row mb-3">
            <label for="nome" class="col-form-label col-3 text-end">Nome:</label>
            <div class="col-7">
                <input type="nome" name="nome" class="form-control" id="nome">
            </div>
        </div>
        <div class="row mb-3">
            <label for="dtnasc" class="col-form-label col-3 text-end">Data de Nascimento:</label>
            <div class="col-3">
                <input class="form-control" type="date" name="dtnasc" id="dtnasc">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-form-label col-3 text-end">E-mail:</label>
            <div class="col-7">
                <input class="form-control" type="email" name="email" id="email" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="profissao" class="col-form-label col-3 text-end">Profissão:</label>
            <div class="col-7">
                <input class="form-control" type="text" name="profissao" id="profissao">
            </div>
        </div>
        <div class="row ms-0 mb-3 mt-3">
            <div class="text-center">
                <button class="btn btn-primary col-1" type="submit">Salvar</button>
                <button class="btn btn-danger col-1" type="reset">Limpar</button>
            </div>
        </div>
    </form>
</div>
        
<script>
    $("#nome").change(function () {
        $(this).val($(this).val().toUpperCase());
    });
</script>