<?php //templates/Games/index.php 
?>

<h1>Les Jeux</h1>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $game) : ?>
            <tr>
                <td><?= $game->id ?></td>
                <td><?= $this->Html->link($game->title, ['controller' => 'Games', 'action' => 'info', $game->id]) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>