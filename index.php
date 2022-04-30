<?php
require 'users/users.php';

$users = getUsers();

include 'partes/header.php';
?>


<div class="controle">
    <p>
        <a class="btn btn-success" href="criar.php">Cadastrar Lead</a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <th>Foto</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>
            <th>Site</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 60px" src="<?php echo "users/images/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
                </td>
                <td><?php echo $user['nome'] ?></td>
                <td><?php echo $user['cpf'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['telefone'] ?></td>
                <td><?php echo $user['idade'] ?></td>
                <td>
                    <a target="_blank" href="http://<?php echo $user['site'] ?>">
                        <?php echo $user['site'] ?>
                    </a>
                </td>
                <td>
                    <a href="visualizar.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">Visualizar</a>
                    <a href="atualizar.php?id=<?php echo $user['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Atualizar</a>
                    <form method="POST" action="deletar.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Deletar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partes/footer.php' ?>

