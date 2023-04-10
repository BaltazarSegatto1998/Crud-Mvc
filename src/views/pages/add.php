<?php $render('header'); ?>

<h2>Adicionar novo usuario</h2>

<form action="<?=$base;?>/novo" method="POST">

    <label for="name">
        Nome: <br>
        <input type="text" name="name" id="name">
    </label> <br><br>

    <label for="email">
        Email: <br>
        <input type="email" name="email" id="email">
    </label> <br><br>

    <input type="submit" value="Adicionar">



</form>


<?php $render('footer'); ?>
