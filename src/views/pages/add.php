<?php $render("header"); ?>

<h2>Adicionar Usuário:</h2>

<form method="POST" action="<?= $base ?>/novo">
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="name" class="form-control" placeholder="digite seu nome">
    </div>
    <div class="form-group">
        <label>E-mail:</label>
        <input type="email" name="email" class="form-control" placeholder="digite seu email">
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>

<?php $render("footer"); ?>