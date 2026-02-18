<?php //template/Categories/new.php ?>

<h1>Nouvelle catégories</h1>

<?= $this->Form->create($new) ?> 

<?=  $this->Form->control('name',['label'=>'Nom']) ?>
<?=  $this->Form->control('description') ?>

<?= $this->Form->button('Enregistrer') ?>


<?= $this->Form->end() ?> 