<h1><?=  $category->name ?></h1>

<p><?= $category->description ?></p>

<p> <?= $this->Html->link('Modifier',['controller' => 'Categories', 'action' => 'edit', $category->id]) ?></p>