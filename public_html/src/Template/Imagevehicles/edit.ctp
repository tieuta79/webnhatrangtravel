<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $imagevehicle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imagevehicle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Imagevehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagevehicles form large-9 medium-8 columns content">
    <?= $this->Form->create($imagevehicle) ?>
    <fieldset>
        <legend><?= __('Edit Imagevehicle') ?></legend>
        <?php
            echo $this->Form->control('vehicle_id', ['options' => $vehicles, 'empty' => true]);
            echo $this->Form->control('image');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
