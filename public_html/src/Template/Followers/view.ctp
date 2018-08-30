<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Follower $follower
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Follower'), ['action' => 'edit', $follower->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Follower'), ['action' => 'delete', $follower->id], ['confirm' => __('Are you sure you want to delete # {0}?', $follower->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Followers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Follower'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Followers'), ['controller' => 'Followers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Follower'), ['controller' => 'Followers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="followers view large-9 medium-8 columns content">
    <h3><?= h($follower->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $follower->has('user') ? $this->Html->link($follower->user->name, ['controller' => 'Users', 'action' => 'view', $follower->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($follower->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Follower Id') ?></th>
            <td><?= $this->Number->format($follower->follower_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($follower->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($follower->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Followers') ?></h4>
        <?php if (!empty($follower->followers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Follower Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($follower->followers as $followers): ?>
            <tr>
                <td><?= h($followers->id) ?></td>
                <td><?= h($followers->follower_id) ?></td>
                <td><?= h($followers->user_id) ?></td>
                <td><?= h($followers->created) ?></td>
                <td><?= h($followers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Followers', 'action' => 'view', $followers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Followers', 'action' => 'edit', $followers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Followers', 'action' => 'delete', $followers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $followers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
