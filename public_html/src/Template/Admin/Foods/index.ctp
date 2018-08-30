<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Food[]|\Cake\Collection\CollectionInterface $foods
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Food'), ['action' => 'add']) ?></li>
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
<div class="foods index large-9 medium-8 columns content">
    <h3><?= __('Foods') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('restaurant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typefood_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($foods as $food): ?>
            <tr>
                <td><?= $this->Number->format($food->id) ?></td>
                <td><?= $food->has('restaurant') ? $this->Html->link($food->restaurant->name, ['controller' => 'Restaurants', 'action' => 'view', $food->restaurant->id]) : '' ?></td>
                <td><?= $food->has('typefood') ? $this->Html->link($food->typefood->name, ['controller' => 'Typefoods', 'action' => 'view', $food->typefood->id]) : '' ?></td>
                <td><?= h($food->name) ?></td>
                <td><?= h($food->slug) ?></td>
                <td><?= h($food->image) ?></td>
                <td><?= $this->Number->format($food->price) ?></td>
                <td><?= h($food->status) ?></td>
                <td><?= h($food->featured) ?></td>
                <td><?= h($food->created) ?></td>
                <td><?= h($food->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $food->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $food->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $food->id], ['confirm' => __('Are you sure you want to delete # {0}?', $food->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
