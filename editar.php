<?php 
    $sql = "SELECT * FROM tabela WHERE id=".$_REQUEST["id"];
    $result = $conn->query($sql);
    $exibirRegistros = mysqli_fetch_array($result);
    $id = $exibirRegistros[0];
    $nome = $exibirRegistros[1];
    $email = $exibirRegistros[2];
    $comentario = $exibirRegistros[3];

    $row = $result->fetch_object();

?>
<h2 class="fw-light text-center mt-3">Editar Cadastro:</h2>
<hr>
<div class="col-12">
    <form action="?page=salvar" method="POST" class="container">
        <input type="hidden" name="acao" value="editar"/>
        <input type="hidden" name="id" value="<?php print $id; ?>" />
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome"
                placeholder="Digite seu nome completo.." required value="<?php print $nome; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email"
                placeholder="Digite seu e-mail.." required value="<?php print $email; ?>">
        </div>
        <div class="row">              
            <div class="mb-3 col-8">
                <label for="comentario" class="form-label">Comentário</label>
                <input type="text" class="form-control" id="comentario" name="comentario" required value="<?php print $comentario; ?>">
            </div>
        </div>
        <div class="row mt-3">
            <div>
                <button class="btn btn-primary" type="submit">Salvar</button>
                <button class="btn btn-danger" type="reset">Limpar</button>
            </div>
        </div>
    </form>
</div>
<script>
    $("#nome").change(function() {
        $(this).val($(this).val().toUpperCase());
    });
</script>