<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Whishlist[]|\Cake\Collection\CollectionInterface $whishlists
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Whishlist'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="whishlists index large-9 medium-8 columns content">
    <h3><?= __('Whishlists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hotel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('restaurant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tour_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vehicle_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($whishlists as $whishlist): ?>
            <tr>
                <td><?= $this->Number->format($whishlist->id) ?></td>
                <td><?= $whishlist->has('user') ? $this->Html->link($whishlist->user->name, ['controller' => 'Users', 'action' => 'view', $whishlist->user->id]) : '' ?></td>
                <td><?= $whishlist->has('hotel') ? $this->Html->link($whishlist->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $whishlist->hotel->id]) : '' ?></td>
                <td><?= $whishlist->has('restaurant') ? $this->Html->link($whishlist->restaurant->name, ['controller' => 'Restaurants', 'action' => 'view', $whishlist->restaurant->id]) : '' ?></td>
                <td><?= $whishlist->has('tour') ? $this->Html->link($whishlist->tour->name, ['controller' => 'Tours', 'action' => 'view', $whishlist->tour->id]) : '' ?></td>
                <td><?= $whishlist->has('vehicle') ? $this->Html->link($whishlist->vehicle->name, ['controller' => 'Vehicles', 'action' => 'view', $whishlist->vehicle->id]) : '' ?></td>
                <td><?= $whishlist->has('food') ? $this->Html->link($whishlist->food->name, ['controller' => 'Foods', 'action' => 'view', $whishlist->food->id]) : '' ?></td>
                <td><?= h($whishlist->created) ?></td>
                <td><?= h($whishlist->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $whishlist->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $whishlist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $whishlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $whishlist->id)]) ?>
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
