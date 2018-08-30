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
                ['action' => 'delete', $place->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $place->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Places'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Typeplaces'), ['controller' => 'Typeplaces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeplace'), ['controller' => 'Typeplaces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Details'), ['controller' => 'Details', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detail'), ['controller' => 'Details', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imageplaces'), ['controller' => 'Imageplaces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imageplace'), ['controller' => 'Imageplaces', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="places form large-9 medium-8 columns content">
    <?= $this->Form->create($place) ?>
    <fieldset>
        <legend><?= __('Edit Place') ?></legend>
        <?php
            echo $this->Form->control('typeplace_id', ['options' => $typeplaces, 'empty' => true]);
            echo $this->Form->control('region_id', ['options' => $regions, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('slug');
            echo $this->Form->control('image');
            echo $this->Form->control('descripton');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
