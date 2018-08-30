<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Typerestaurant $typerestaurant
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typerestaurant'), ['action' => 'edit', $typerestaurant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typerestaurant'), ['action' => 'delete', $typerestaurant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typerestaurant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typerestaurants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typerestaurant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typerestaurants view large-9 medium-8 columns content">
    <h3><?= h($typerestaurant->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typerestaurant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typerestaurant->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typerestaurant->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($typerestaurant->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Slug') ?></h4>
        <?= $this->Text->autoParagraph(h($typerestaurant->slug)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Restaurants') ?></h4>
        <?php if (!empty($typerestaurant->restaurants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Typerestaurant Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('View') ?></th>
                <th scope="col"><?= __('Branch') ?></th>
                <th scope="col"><?= __('Open') ?></th>
                <th scope="col"><?= __('Close') ?></th>
                <th scope="col"><?= __('Web') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typerestaurant->restaurants as $restaurants): ?>
            <tr>
                <td><?= h($restaurants->id) ?></td>
                <td><?= h($restaurants->user_id) ?></td>
                <td><?= h($restaurants->region_id) ?></td>
                <td><?= h($restaurants->typerestaurant_id) ?></td>
                <td><?= h($restaurants->name) ?></td>
                <td><?= h($restaurants->slug) ?></td>
                <td><?= h($restaurants->image) ?></td>
                <td><?= h($restaurants->address) ?></td>
                <td><?= h($restaurants->longitude) ?></td>
                <td><?= h($restaurants->latitude) ?></td>
                <td><?= h($restaurants->descripton) ?></td>
                <td><?= h($restaurants->view) ?></td>
                <td><?= h($restaurants->branch) ?></td>
                <td><?= h($restaurants->open) ?></td>
                <td><?= h($restaurants->close) ?></td>
                <td><?= h($restaurants->web) ?></td>
                <td><?= h($restaurants->status) ?></td>
                <td><?= h($restaurants->featured) ?></td>
                <td><?= h($restaurants->created) ?></td>
                <td><?= h($restaurants->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Restaurants', 'action' => 'view', $restaurants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Restaurants', 'action' => 'edit', $restaurants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Restaurants', 'action' => 'delete', $restaurants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $restaurants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
