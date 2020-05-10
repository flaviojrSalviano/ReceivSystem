<a href="?r=/clients/create">Criar Novo</a>
<small><?php echo count($vars['clients']) ?> clients.</small>
<ul>
    <?php foreach ($vars['clients'] as $client): ?>
        <li><?php echo $client['name'] ?></li>
        <li><?php echo $client['cpf'] ?></li>
        <a href="?r=/debts/create&id=<?php echo $client['id'] ?>">Nova Dívida</a><br>
        <a href="?r=/clients/delete&id=<?php echo $client['id'] ?>">Deletar</a>
    <?php endforeach ?>
</ul>