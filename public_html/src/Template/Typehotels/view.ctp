<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Typehotel $typehotel
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typehotel'), ['action' => 'edit', $typehotel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typehotel'), ['action' => 'delete', $typehotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typehotel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typehotels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typehotel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typehotels view large-9 medium-8 columns content">
    <h3><?= h($typehotel->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typehotel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typehotel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typehotel->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($typehotel->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Slug') ?></h4>
        <?= $this->Text->autoParagraph(h($typehotel->slug)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Hotels') ?></h4>
        <?php if (!empty($typehotel->hotels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Typehotel Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('Standard') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('View') ?></th>
                <th scope="col"><?= __('Open') ?></th>
                <th scope="col"><?= __('Close') ?></th>
                <th scope="col"><?= __('Web') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typehotel->hotels as $hotels): ?>
            <tr>
                <td><?= h($hotels->id) ?></td>
                <td><?= h($hotels->user_id) ?></td>
                <td><?= h($hotels->region_id) ?></td>
                <td><?= h($hotels->typehotel_id) ?></td>
                <td><?= h($hotels->name) ?></td>
                <td><?= h($hotels->slug) ?></td>
                <td><?= h($hotels->image) ?></td>
                <td><?= h($hotels->descripton) ?></td>
                <td><?= h($hotels->standard) ?></td>
                <td><?= h($hotels->address) ?></td>
                <td><?= h($hotels->longitude) ?></td>
                <td><?= h($hotels->latitude) ?></td>
                <td><?= h($hotels->view) ?></td>
                <td><?= h($hotels->open) ?></td>
                <td><?= h($hotels->close) ?></td>
                <td><?= h($hotels->web) ?></td>
                <td><?= h($hotels->status) ?></td>
                <td><?= h($hotels->featured) ?></td>
                <td><?= h($hotels->created) ?></td>
                <td><?= h($hotels->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Hotels', 'action' => 'view', $hotels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Hotels', 'action' => 'edit', $hotels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hotels', 'action' => 'delete', $hotels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
