<h1><?=  $category->name ?></h1>

<p><?= $category->description ?></p>

<p> <?= $this->Html->link('Modifier',['controller' => 'Categories', 'action' => 'edit', $category->id]) ?></p>

<p>
    <?=  $this->Form->postlink('Supprimer',['controller' => 'Categories', 'action' => 'delete', $category->id], ['confirm'=> 'est tu sur de vouloir supprimer mon grand ? c`est irréversible']) ?>
</p>