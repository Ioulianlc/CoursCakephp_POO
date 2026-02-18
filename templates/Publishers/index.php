<h1>Les éditeurs</h1>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list as $editor) : ?>
            <tr>
                <td><?= $editor->id ?></td>
                <td><?= $this->Html->link($editor->name, ['controller' => 'publishers', 'action' => 'info', $editor->id]) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>