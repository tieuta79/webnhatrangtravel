<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Room $room
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typerooms'), ['controller' => 'Typerooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeroom'), ['controller' => 'Typerooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Preferentials'), ['controller' => 'Preferentials', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Preferential'), ['controller' => 'Preferentials', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Hotel') ?></th>
            <td><?= $room->has('hotel') ? $this->Html->link($room->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $room->hotel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typeroom') ?></th>
            <td><?= $room->has('typeroom') ? $this->Html->link($room->typeroom->name, ['controller' => 'Typerooms', 'action' => 'view', $room->typeroom->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($room->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($room->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($room->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('People') ?></th>
            <td><?= $this->Number->format($room->people) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($room->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bedroom') ?></th>
            <td><?= $this->Number->format($room->bedroom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($room->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bathroom') ?></th>
            <td><?= $room->bathroom ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Smokingroom') ?></th>
            <td><?= $room->smokingroom ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bathtub') ?></th>
            <td><?= $room->bathtub ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Balcony') ?></th>
            <td><?= $room->balcony ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wifi') ?></th>
            <td><?= $room->wifi ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $room->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $room->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Directions') ?></h4>
        <?= $this->Text->autoParagraph(h($room->directions)); ?>
    </div>
    <div class="row">
        <h4><?= __('Acreage') ?></h4>
        <?= $this->Text->autoParagraph(h($room->acreage)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Preferentials') ?></h4>
        <?php if (!empty($room->preferentials)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Room Id') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($room->preferentials as $preferentials): ?>
            <tr>
                <td><?= h($preferentials->id) ?></td>
                <td><?= h($preferentials->room_id) ?></td>
                <td><?= h($preferentials->descripton) ?></td>
                <td><?= h($preferentials->created) ?></td>
                <td><?= h($preferentials->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Preferentials', 'action' => 'view', $preferentials->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Preferentials', 'action' => 'edit', $preferentials->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Preferentials', 'action' => 'delete', $preferentials->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preferentials->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
