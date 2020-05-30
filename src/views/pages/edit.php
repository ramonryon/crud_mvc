<?php $render("header"); ?>

<h2>Editar Usuário:</h2>

<form method="POST" action="<?= $base ?>/usuario/<?= $usuario['id']; ?>/editar">
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="name" class="form-control" placeholder="digite seu nome" value="<?= $usuario['nome']; ?>">
    </div>
    <div class="form-group">
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control" placeholder="digite seu email" value="<?= $usuario['email']; ?>">
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php $render("footer"); ?>