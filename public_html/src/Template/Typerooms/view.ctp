<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Typeroom $typeroom
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typeroom'), ['action' => 'edit', $typeroom->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typeroom'), ['action' => 'delete', $typeroom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeroom->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typerooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeroom'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typerooms view large-9 medium-8 columns content">
    <h3><?= h($typeroom->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($typeroom->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeroom->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typeroom->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typeroom->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Rooms') ?></h4>
        <?php if (!empty($typeroom->rooms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Hotel Id') ?></th>
                <th scope="col"><?= __('Typeroom Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('People') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Directions') ?></th>
                <th scope="col"><?= __('Acreage') ?></th>
                <th scope="col"><?= __('Bedroom') ?></th>
                <th scope="col"><?= __('Bathroom') ?></th>
                <th scope="col"><?= __('Smokingroom') ?></th>
                <th scope="col"><?= __('Bathtub') ?></th>
                <th scope="col"><?= __('Balcony') ?></th>
                <th scope="col"><?= __('Wifi') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typeroom->rooms as $rooms): ?>
            <tr>
                <td><?= h($rooms->id) ?></td>
                <td><?= h($rooms->hotel_id) ?></td>
                <td><?= h($rooms->typeroom_id) ?></td>
                <td><?= h($rooms->name) ?></td>
                <td><?= h($rooms->slug) ?></td>
                <td><?= h($rooms->image) ?></td>
                <td><?= h($rooms->people) ?></td>
                <td><?= h($rooms->price) ?></td>
                <td><?= h($rooms->directions) ?></td>
                <td><?= h($rooms->acreage) ?></td>
                <td><?= h($rooms->bedroom) ?></td>
                <td><?= h($rooms->bathroom) ?></td>
                <td><?= h($rooms->smokingroom) ?></td>
                <td><?= h($rooms->bathtub) ?></td>
                <td><?= h($rooms->balcony) ?></td>
                <td><?= h($rooms->wifi) ?></td>
                <td><?= h($rooms->status) ?></td>
                <td><?= h($rooms->featured) ?></td>
                <td><?= h($rooms->created) ?></td>
                <td><?= h($rooms->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Rooms', 'action' => 'view', $rooms->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Rooms', 'action' => 'edit', $rooms->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rooms', 'action' => 'delete', $rooms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rooms->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
