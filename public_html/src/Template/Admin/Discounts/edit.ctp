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
                ['action' => 'delete', $discount->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $discount->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Discounts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discounts form large-9 medium-8 columns content">
    <?= $this->Form->create($discount) ?>
    <fieldset>
        <legend><?= __('Edit Discount') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('start', ['empty' => true]);
            echo $this->Form->control('end', ['empty' => true]);
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
            echo $this->Form->control('foods._ids', ['options' => $foods]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
