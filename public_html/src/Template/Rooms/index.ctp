<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Room[]|\Cake\Collection\CollectionInterface $rooms
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typerooms'), ['controller' => 'Typerooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeroom'), ['controller' => 'Typerooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Preferentials'), ['controller' => 'Preferentials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Preferential'), ['controller' => 'Preferentials', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rooms index large-9 medium-8 columns content">
    <h3><?= __('Rooms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hotel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typeroom_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('people') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bedroom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bathroom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('smokingroom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bathtub') ?></th>
                <th scope="col"><?= $this->Paginator->sort('balcony') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wifi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rooms as $room): ?>
            <tr>
                <td><?= $this->Number->format($room->id) ?></td>
                <td><?= $room->has('hotel') ? $this->Html->link($room->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $room->hotel->id]) : '' ?></td>
                <td><?= $room->has('typeroom') ? $this->Html->link($room->typeroom->name, ['controller' => 'Typerooms', 'action' => 'view', $room->typeroom->id]) : '' ?></td>
                <td><?= h($room->name) ?></td>
                <td><?= h($room->slug) ?></td>
                <td><?= h($room->image) ?></td>
                <td><?= $this->Number->format($room->people) ?></td>
                <td><?= $this->Number->format($room->price) ?></td>
                <td><?= $this->Number->format($room->bedroom) ?></td>
                <td><?= h($room->bathroom) ?></td>
                <td><?= h($room->smokingroom) ?></td>
                <td><?= h($room->bathtub) ?></td>
                <td><?= h($room->balcony) ?></td>
                <td><?= h($room->wifi) ?></td>
                <td><?= h($room->status) ?></td>
                <td><?= h($room->featured) ?></td>
                <td><?= h($room->created) ?></td>
                <td><?= h($room->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $room->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $room->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?>
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
