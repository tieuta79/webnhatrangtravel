<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Typereview $typereview
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typereview'), ['action' => 'edit', $typereview->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typereview'), ['action' => 'delete', $typereview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typereview->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typereviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typereview'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['controller' => 'Reviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['controller' => 'Reviews', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typereviews view large-9 medium-8 columns content">
    <h3><?= h($typereview->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($typereview->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($typereview->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typereview->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typereview->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typereview->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Reviews') ?></h4>
        <?php if (!empty($typereview->reviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Typereview Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Open') ?></th>
                <th scope="col"><?= __('Close') ?></th>
                <th scope="col"><?= __('Rate') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typereview->reviews as $reviews): ?>
            <tr>
                <td><?= h($reviews->id) ?></td>
                <td><?= h($reviews->user_id) ?></td>
                <td><?= h($reviews->typereview_id) ?></td>
                <td><?= h($reviews->name) ?></td>
                <td><?= h($reviews->slug) ?></td>
                <td><?= h($reviews->image) ?></td>
                <td><?= h($reviews->description) ?></td>
                <td><?= h($reviews->address) ?></td>
                <td><?= h($reviews->open) ?></td>
                <td><?= h($reviews->close) ?></td>
                <td><?= h($reviews->rate) ?></td>
                <td><?= h($reviews->status) ?></td>
                <td><?= h($reviews->featured) ?></td>
                <td><?= h($reviews->created) ?></td>
                <td><?= h($reviews->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reviews', 'action' => 'view', $reviews->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reviews', 'action' => 'edit', $reviews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reviews', 'action' => 'delete', $reviews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reviews->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
