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
                ['action' => 'delete', $imagerestaurant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imagerestaurant->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Imagerestaurants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagerestaurants form large-9 medium-8 columns content">
    <?= $this->Form->create($imagerestaurant) ?>
    <fieldset>
        <legend><?= __('Edit Imagerestaurant') ?></legend>
        <?php
            echo $this->Form->control('restaurant_id', ['options' => $restaurants, 'empty' => true]);
            echo $this->Form->control('image');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
