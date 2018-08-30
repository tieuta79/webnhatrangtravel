<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Raterestaurant[]|\Cake\Collection\CollectionInterface $raterestaurants
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Raterestaurant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="raterestaurants index large-9 medium-8 columns content">
    <h3><?= __('Raterestaurants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('restaurant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('point') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($raterestaurants as $raterestaurant): ?>
            <tr>
                <td><?= $this->Number->format($raterestaurant->id) ?></td>
                <td><?= $raterestaurant->has('user') ? $this->Html->link($raterestaurant->user->name, ['controller' => 'Users', 'action' => 'view', $raterestaurant->user->id]) : '' ?></td>
                <td><?= $raterestaurant->has('restaurant') ? $this->Html->link($raterestaurant->restaurant->name, ['controller' => 'Restaurants', 'action' => 'view', $raterestaurant->restaurant->id]) : '' ?></td>
                <td><?= $this->Number->format($raterestaurant->point) ?></td>
                <td><?= h($raterestaurant->status) ?></td>
                <td><?= h($raterestaurant->featured) ?></td>
                <td><?= h($raterestaurant->created) ?></td>
                <td><?= h($raterestaurant->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $raterestaurant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $raterestaurant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $raterestaurant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $raterestaurant->id)]) ?>
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
