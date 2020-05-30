<?php $render("header"); ?>

<a href="<?= $base; ?>/novo" class="btn btn-primary">Adicionar Usuário</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario) : ?>
            <tr>
                <td><?= $usuario['id']; ?></td>
                <td><?= $usuario['nome']; ?></td>
                <td><?= $usuario['email']; ?></td>
                <td>
                    <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar" class="btn btn-secondary btn-sm">Editar</a>
                    <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/excluir" class="btn btn-danger btn-sm" onclick=" return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $render("footer"); ?>