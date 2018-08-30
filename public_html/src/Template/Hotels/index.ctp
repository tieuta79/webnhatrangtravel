<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Hotel[]|\Cake\Collection\CollectionInterface $hotels
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imagehotels'), ['controller' => 'Imagehotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagehotel'), ['controller' => 'Imagehotels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Whishlists'), ['controller' => 'Whishlists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Whishlist'), ['controller' => 'Whishlists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hotels index large-9 medium-8 columns content">
    <h3><?= __('Hotels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('standard') ?></th>
                <th scope="col"><?= $this->Paginator->sort('view') ?></th>
                <th scope="col"><?= $this->Paginator->sort('open') ?></th>
                <th scope="col"><?= $this->Paginator->sort('close') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel): ?>
            <tr>
                <td><?= $this->Number->format($hotel->id) ?></td>
                <td><?= $hotel->has('user') ? $this->Html->link($hotel->user->name, ['controller' => 'Users', 'action' => 'view', $hotel->user->id]) : '' ?></td>
                <td><?= $hotel->has('region') ? $this->Html->link($hotel->region->name, ['controller' => 'Regions', 'action' => 'view', $hotel->region->id]) : '' ?></td>
                <td><?= h($hotel->name) ?></td>
                <td><?= h($hotel->slug) ?></td>
                <td><?= h($hotel->image) ?></td>
                <td><?= $this->Number->format($hotel->standard) ?></td>
                <td><?= $this->Number->format($hotel->view) ?></td>
                <td><?= h($hotel->open) ?></td>
                <td><?= h($hotel->close) ?></td>
                <td><?= h($hotel->status) ?></td>
                <td><?= h($hotel->featured) ?></td>
                <td><?= h($hotel->created) ?></td>
                <td><?= h($hotel->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hotel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hotel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id)]) ?>
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
