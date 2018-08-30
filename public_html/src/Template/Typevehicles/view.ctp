<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Typevehicle $typevehicle
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typevehicle'), ['action' => 'edit', $typevehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typevehicle'), ['action' => 'delete', $typevehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typevehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typevehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typevehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typevehicles view large-9 medium-8 columns content">
    <h3><?= h($typevehicle->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($typevehicle->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typevehicle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typevehicle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typevehicle->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Vehicles') ?></h4>
        <?php if (!empty($typevehicle->vehicles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Typevehicle Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typevehicle->vehicles as $vehicles): ?>
            <tr>
                <td><?= h($vehicles->id) ?></td>
                <td><?= h($vehicles->user_id) ?></td>
                <td><?= h($vehicles->typevehicle_id) ?></td>
                <td><?= h($vehicles->region_id) ?></td>
                <td><?= h($vehicles->name) ?></td>
                <td><?= h($vehicles->slug) ?></td>
                <td><?= h($vehicles->image) ?></td>
                <td><?= h($vehicles->descripton) ?></td>
                <td><?= h($vehicles->status) ?></td>
                <td><?= h($vehicles->featured) ?></td>
                <td><?= h($vehicles->created) ?></td>
                <td><?= h($vehicles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vehicles', 'action' => 'view', $vehicles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vehicles', 'action' => 'edit', $vehicles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vehicles', 'action' => 'delete', $vehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
