<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Restaurant[]|\Cake\Collection\CollectionInterface $restaurants
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Restaurant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imagerestaurants'), ['controller' => 'Imagerestaurants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagerestaurant'), ['controller' => 'Imagerestaurants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Whishlists'), ['controller' => 'Whishlists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Whishlist'), ['controller' => 'Whishlists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="restaurants index large-9 medium-8 columns content">
    <h3><?= __('Restaurants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('view') ?></th>
                <th scope="col"><?= $this->Paginator->sort('open') ?></th>
                <th scope="col"><?= $this->Paginator->sort('close') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($restaurants as $restaurant): ?>
            <tr>
                <td><?= $this->Number->format($restaurant->id) ?></td>
                <td><?= $restaurant->has('user') ? $this->Html->link($restaurant->user->name, ['controller' => 'Users', 'action' => 'view', $restaurant->user->id]) : '' ?></td>
                <td><?= $restaurant->has('region') ? $this->Html->link($restaurant->region->name, ['controller' => 'Regions', 'action' => 'view', $restaurant->region->id]) : '' ?></td>
                <td><?= h($restaurant->name) ?></td>
                <td><?= h($restaurant->slug) ?></td>
                <td><?= h($restaurant->image) ?></td>
                <td><?= h($restaurant->latitude) ?></td>
                <td><?= h($restaurant->longitude) ?></td>
                <td><?= $this->Number->format($restaurant->view) ?></td>
                <td><?= h($restaurant->open) ?></td>
                <td><?= h($restaurant->close) ?></td>
                <td><?= h($restaurant->web) ?></td>
                <td><?= h($restaurant->status) ?></td>
                <td><?= h($restaurant->featured) ?></td>
                <td><?= h($restaurant->created) ?></td>
                <td><?= h($restaurant->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $restaurant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $restaurant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $restaurant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restaurant->id)]) ?>
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
