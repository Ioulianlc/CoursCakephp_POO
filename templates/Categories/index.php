<h1>Les Categories</h1>
<ul>

    <?php foreach ($list as $case){?>
    <li>
        <?= $this->html->link($case->name,['controller' => 'Categories', 'action' => 'detail', $case->id]) ?>
    </li>

    <?php } ?>

</ul>

<p>
    <?= $this->Html->link('Ajouter une categorie',['controller' => 'Categories', 'action' => 'new'],['class'=>'button']) ?>
</p>
