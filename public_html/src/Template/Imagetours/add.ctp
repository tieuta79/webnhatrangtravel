<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Imagetours'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagetours form large-9 medium-8 columns content">
    <?= $this->Form->create($imagetour) ?>
    <fieldset>
        <legend><?= __('Add Imagetour') ?></legend>
        <?php
            echo $this->Form->control('tour_id', ['options' => $tours, 'empty' => true]);
            echo $this->Form->control('image');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
