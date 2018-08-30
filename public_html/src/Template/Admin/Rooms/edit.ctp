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
                ['action' => 'delete', $room->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typerooms'), ['controller' => 'Typerooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeroom'), ['controller' => 'Typerooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Preferentials'), ['controller' => 'Preferentials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Preferential'), ['controller' => 'Preferentials', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rooms form large-9 medium-8 columns content">
    <?= $this->Form->create($room) ?>
    <fieldset>
        <legend><?= __('Edit Room') ?></legend>
        <?php
            echo $this->Form->control('hotel_id', ['options' => $hotels, 'empty' => true]);
            echo $this->Form->control('typeroom_id', ['options' => $typerooms, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('slug');
            echo $this->Form->control('image');
            echo $this->Form->control('people');
            echo $this->Form->control('price');
            echo $this->Form->control('directions');
            echo $this->Form->control('acreage');
            echo $this->Form->control('bedroom');
            echo $this->Form->control('bathroom');
            echo $this->Form->control('smokingroom');
            echo $this->Form->control('bathtub');
            echo $this->Form->control('balcony');
            echo $this->Form->control('wifi');
            echo $this->Form->control('status');
            echo $this->Form->control('featured');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
