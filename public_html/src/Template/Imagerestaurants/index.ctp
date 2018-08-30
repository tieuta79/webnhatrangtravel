<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Imagerestaurant[]|\Cake\Collection\CollectionInterface $imagerestaurants
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imagerestaurant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagerestaurants index large-9 medium-8 columns content">
    <h3><?= __('Imagerestaurants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('restaurant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imagerestaurants as $imagerestaurant): ?>
            <tr>
                <td><?= $this->Number->format($imagerestaurant->id) ?></td>
                <td><?= $imagerestaurant->has('restaurant') ? $this->Html->link($imagerestaurant->restaurant->name, ['controller' => 'Restaurants', 'action' => 'view', $imagerestaurant->restaurant->id]) : '' ?></td>
                <td><?= h($imagerestaurant->image) ?></td>
                <td><?= h($imagerestaurant->status) ?></td>
                <td><?= h($imagerestaurant->featured) ?></td>
                <td><?= h($imagerestaurant->created) ?></td>
                <td><?= h($imagerestaurant->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagerestaurant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagerestaurant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagerestaurant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagerestaurant->id)]) ?>
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
