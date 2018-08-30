<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Typefood $typefood
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typefood'), ['action' => 'edit', $typefood->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typefood'), ['action' => 'delete', $typefood->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typefood->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typefoods'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typefood'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typefoods view large-9 medium-8 columns content">
    <h3><?= h($typefood->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($typefood->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typefood->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typefood->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typefood->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Foods') ?></h4>
        <?php if (!empty($typefood->foods)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Restaurant Id') ?></th>
                <th scope="col"><?= __('Typefood Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typefood->foods as $foods): ?>
            <tr>
                <td><?= h($foods->id) ?></td>
                <td><?= h($foods->restaurant_id) ?></td>
                <td><?= h($foods->typefood_id) ?></td>
                <td><?= h($foods->name) ?></td>
                <td><?= h($foods->slug) ?></td>
                <td><?= h($foods->image) ?></td>
                <td><?= h($foods->price) ?></td>
                <td><?= h($foods->status) ?></td>
                <td><?= h($foods->featured) ?></td>
                <td><?= h($foods->created) ?></td>
                <td><?= h($foods->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Foods', 'action' => 'view', $foods->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Foods', 'action' => 'edit', $foods->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Foods', 'action' => 'delete', $foods->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foods->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
