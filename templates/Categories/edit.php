<?php //template/Categories/edit.php ?>

<h1>Modifer</h1>

<?= $this->Form->create($category) ?> 

<?=  $this->Form->control('name',['label'=>'Nom']) ?>
<?=  $this->Form->control('description') ?>

<?= $this->Form->button('Enregistrer') ?>


<?= $this->Form->end() ?> 