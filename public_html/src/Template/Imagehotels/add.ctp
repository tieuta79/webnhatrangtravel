<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Imagehotels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagehotels form large-9 medium-8 columns content">
    <?= $this->Form->create($imagehotel) ?>
    <fieldset>
        <legend><?= __('Add Imagehotel') ?></legend>
        <?php
            echo $this->Form->control('hotel_id', ['options' => $hotels, 'empty' => true]);
            echo $this->Form->control('image');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
