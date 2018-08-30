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
                ['action' => 'delete', $discountsFood->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $discountsFood->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Discounts Foods'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Discounts'), ['controller' => 'Discounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discount'), ['controller' => 'Discounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discountsFoods form large-9 medium-8 columns content">
    <?= $this->Form->create($discountsFood) ?>
    <fieldset>
        <legend><?= __('Edit Discounts Food') ?></legend>
        <?php
            echo $this->Form->control('food_id', ['options' => $foods, 'empty' => true]);
            echo $this->Form->control('discounts_id', ['options' => $discounts, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
