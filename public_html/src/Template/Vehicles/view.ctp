<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Vehicle $vehicle
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vehicle'), ['action' => 'edit', $vehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehicle'), ['action' => 'delete', $vehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typevehicles'), ['controller' => 'Typevehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typevehicle'), ['controller' => 'Typevehicles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Imagevehicles'), ['controller' => 'Imagevehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagevehicle'), ['controller' => 'Imagevehicles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Whishlists'), ['controller' => 'Whishlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Whishlist'), ['controller' => 'Whishlists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vehicles view large-9 medium-8 columns content">
    <h3><?= h($vehicle->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $vehicle->has('user') ? $this->Html->link($vehicle->user->name, ['controller' => 'Users', 'action' => 'view', $vehicle->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typevehicle') ?></th>
            <td><?= $vehicle->has('typevehicle') ? $this->Html->link($vehicle->typevehicle->name, ['controller' => 'Typevehicles', 'action' => 'view', $vehicle->typevehicle->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= $vehicle->has('region') ? $this->Html->link($vehicle->region->name, ['controller' => 'Regions', 'action' => 'view', $vehicle->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($vehicle->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($vehicle->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($vehicle->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vehicle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($vehicle->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($vehicle->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $vehicle->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $vehicle->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripton') ?></h4>
        <?= $this->Text->autoParagraph(h($vehicle->descripton)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($vehicle->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Tour Id') ?></th>
                <th scope="col"><?= __('Vehicle Id') ?></th>
                <th scope="col"><?= __('Hotel Id') ?></th>
                <th scope="col"><?= __('Food Id') ?></th>
                <th scope="col"><?= __('Place Id') ?></th>
                <th scope="col"><?= __('Restaurant Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Point') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicle->comments as $comments): ?>
            <tr>
                <td><?= h($comments->id) ?></td>
                <td><?= h($comments->user_id) ?></td>
                <td><?= h($comments->tour_id) ?></td>
                <td><?= h($comments->vehicle_id) ?></td>
                <td><?= h($comments->hotel_id) ?></td>
                <td><?= h($comments->food_id) ?></td>
                <td><?= h($comments->place_id) ?></td>
                <td><?= h($comments->restaurant_id) ?></td>
                <td><?= h($comments->title) ?></td>
                <td><?= h($comments->content) ?></td>
                <td><?= h($comments->point) ?></td>
                <td><?= h($comments->status) ?></td>
                <td><?= h($comments->featured) ?></td>
                <td><?= h($comments->created) ?></td>
                <td><?= h($comments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Imagevehicles') ?></h4>
        <?php if (!empty($vehicle->imagevehicles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Vehicle Id') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicle->imagevehicles as $imagevehicles): ?>
            <tr>
                <td><?= h($imagevehicles->id) ?></td>
                <td><?= h($imagevehicles->vehicle_id) ?></td>
                <td><?= h($imagevehicles->image) ?></td>
                <td><?= h($imagevehicles->status) ?></td>
                <td><?= h($imagevehicles->featured) ?></td>
                <td><?= h($imagevehicles->created) ?></td>
                <td><?= h($imagevehicles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Imagevehicles', 'action' => 'view', $imagevehicles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Imagevehicles', 'action' => 'edit', $imagevehicles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Imagevehicles', 'action' => 'delete', $imagevehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagevehicles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Whishlists') ?></h4>
        <?php if (!empty($vehicle->whishlists)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Hotel Id') ?></th>
                <th scope="col"><?= __('Restaurant Id') ?></th>
                <th scope="col"><?= __('Tour Id') ?></th>
                <th scope="col"><?= __('Vehicle Id') ?></th>
                <th scope="col"><?= __('Food Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vehicle->whishlists as $whishlists): ?>
            <tr>
                <td><?= h($whishlists->id) ?></td>
                <td><?= h($whishlists->user_id) ?></td>
                <td><?= h($whishlists->hotel_id) ?></td>
                <td><?= h($whishlists->restaurant_id) ?></td>
                <td><?= h($whishlists->tour_id) ?></td>
                <td><?= h($whishlists->vehicle_id) ?></td>
                <td><?= h($whishlists->food_id) ?></td>
                <td><?= h($whishlists->created) ?></td>
                <td><?= h($whishlists->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Whishlists', 'action' => 'view', $whishlists->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Whishlists', 'action' => 'edit', $whishlists->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Whishlists', 'action' => 'delete', $whishlists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $whishlists->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
