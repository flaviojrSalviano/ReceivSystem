<small><?php echo count($vars['debts']) ?> debts.</small>
<ul>
    <?php foreach ($vars['debts'] as $debt): ?>
        <li><?php echo $debt['title'] ?></li>
        <li><?php echo $debt['value'] ?></li>
        <a href="?r=/debts/delete&id=<?php echo $debt['id'] ?>">Deletar</a>
    <?php endforeach ?>
</ul>