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
                ['action' => 'delete', $food->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $food->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typefoods'), ['controller' => 'Typefoods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typefood'), ['controller' => 'Typefoods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Whishlists'), ['controller' => 'Whishlists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Whishlist'), ['controller' => 'Whishlists', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Discounts'), ['controller' => 'Discounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discount'), ['controller' => 'Discounts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="foods form large-9 medium-8 columns content">
    <?= $this->Form->create($food) ?>
    <fieldset>
        <legend><?= __('Edit Food') ?></legend>
        <?php
            echo $this->Form->control('restaurant_id', ['options' => $restaurants, 'empty' => true]);
            echo $this->Form->control('typefood_id', ['options' => $typefoods, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('slug');
            echo $this->Form->control('image');
            echo $this->Form->control('price');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
            echo $this->Form->control('discounts._ids', ['options' => $discounts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
