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
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Typeusers'), ['controller' => 'Typeusers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeuser'), ['controller' => 'Typeusers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blackusers'), ['controller' => 'Blackusers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blackuser'), ['controller' => 'Blackusers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Feedbacks'), ['controller' => 'Feedbacks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feedback'), ['controller' => 'Feedbacks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Followers'), ['controller' => 'Followers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Follower'), ['controller' => 'Followers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Followings'), ['controller' => 'Followings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Following'), ['controller' => 'Followings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Whishlists'), ['controller' => 'Whishlists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Whishlist'), ['controller' => 'Whishlists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('typeuser_id', ['options' => $typeusers, 'empty' => true]);
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('image');
            echo $this->Form->control('email');
            echo $this->Form->control('name');
            echo $this->Form->control('address');
            echo $this->Form->control('phone');
            echo $this->Form->control('sex');
            echo $this->Form->control('icon');
            echo $this->Form->control('post');
            echo $this->Form->control('facebook');
            echo $this->Form->control('descripton');
            echo $this->Form->control('birthday', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
