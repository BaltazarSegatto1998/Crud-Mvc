<?php $render('header'); ?>



<a href="<?=$base;?>/novo">Novo usuario</a>

<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>E-MAIL</td>
        <td>AÇÕES</td>
    </tr>

    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['id']?></td>
            <td><?=$usuario['nome']?></td>
            <td><?=$usuario['email']?></td>
            <td>
                <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
                    <img width="20px" src="<?=$base?>/assets/images/document.png" alt="Editar">
                </a>
                <a href="<?=$base;?>/usuario<?=$usuario['id'];?>/excluir" onclick="return confirm('Deseja Excluir?')">
                    <img width="20px" src="<?=$base?>/assets/images/trash.png" alt="Excluir">
                </a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>


<?php $render('footer'); ?>
