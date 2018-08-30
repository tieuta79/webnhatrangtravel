<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Typeplace $typeplace
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typeplace'), ['action' => 'edit', $typeplace->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typeplace'), ['action' => 'delete', $typeplace->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeplace->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typeplaces'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeplace'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeplaces view large-9 medium-8 columns content">
    <h3><?= h($typeplace->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($typeplace->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeplace->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typeplace->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typeplace->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Places') ?></h4>
        <?php if (!empty($typeplace->places)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Typeplace Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typeplace->places as $places): ?>
            <tr>
                <td><?= h($places->id) ?></td>
                <td><?= h($places->typeplace_id) ?></td>
                <td><?= h($places->region_id) ?></td>
                <td><?= h($places->name) ?></td>
                <td><?= h($places->slug) ?></td>
                <td><?= h($places->image) ?></td>
                <td><?= h($places->descripton) ?></td>
                <td><?= h($places->latitude) ?></td>
                <td><?= h($places->longitude) ?></td>
                <td><?= h($places->status) ?></td>
                <td><?= h($places->featured) ?></td>
                <td><?= h($places->created) ?></td>
                <td><?= h($places->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Places', 'action' => 'view', $places->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Places', 'action' => 'edit', $places->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Places', 'action' => 'delete', $places->id], ['confirm' => __('Are you sure you want to delete # {0}?', $places->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
