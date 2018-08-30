<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Hotel $hotel
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hotel'), ['action' => 'edit', $hotel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hotel'), ['action' => 'delete', $hotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Imagehotels'), ['controller' => 'Imagehotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagehotel'), ['controller' => 'Imagehotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Whishlists'), ['controller' => 'Whishlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Whishlist'), ['controller' => 'Whishlists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hotels view large-9 medium-8 columns content">
    <h3><?= h($hotel->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $hotel->has('user') ? $this->Html->link($hotel->user->name, ['controller' => 'Users', 'action' => 'view', $hotel->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= $hotel->has('region') ? $this->Html->link($hotel->region->name, ['controller' => 'Regions', 'action' => 'view', $hotel->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($hotel->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($hotel->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($hotel->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hotel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Standard') ?></th>
            <td><?= $this->Number->format($hotel->standard) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('View') ?></th>
            <td><?= $this->Number->format($hotel->view) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Open') ?></th>
            <td><?= h($hotel->open) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Close') ?></th>
            <td><?= h($hotel->close) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($hotel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($hotel->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $hotel->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $hotel->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripton') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->descripton)); ?>
    </div>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->address)); ?>
    </div>
    <div class="row">
        <h4><?= __('Latitude') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->latitude)); ?>
    </div>
    <div class="row">
        <h4><?= __('Longitude') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->longitude)); ?>
    </div>
    <div class="row">
        <h4><?= __('Web') ?></h4>
        <?= $this->Text->autoParagraph(h($hotel->web)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($hotel->comments)): ?>
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
            <?php foreach ($hotel->comments as $comments): ?>
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
        <h4><?= __('Related Imagehotels') ?></h4>
        <?php if (!empty($hotel->imagehotels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Hotel Id') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($hotel->imagehotels as $imagehotels): ?>
            <tr>
                <td><?= h($imagehotels->id) ?></td>
                <td><?= h($imagehotels->hotel_id) ?></td>
                <td><?= h($imagehotels->image) ?></td>
                <td><?= h($imagehotels->status) ?></td>
                <td><?= h($imagehotels->featured) ?></td>
                <td><?= h($imagehotels->created) ?></td>
                <td><?= h($imagehotels->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Imagehotels', 'action' => 'view', $imagehotels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Imagehotels', 'action' => 'edit', $imagehotels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Imagehotels', 'action' => 'delete', $imagehotels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagehotels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Rooms') ?></h4>
        <?php if (!empty($hotel->rooms)): ?>
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
            <?php foreach ($hotel->rooms as $rooms): ?>
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
    <div class="related">
        <h4><?= __('Related Whishlists') ?></h4>
        <?php if (!empty($hotel->whishlists)): ?>
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
            <?php foreach ($hotel->whishlists as $whishlists): ?>
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
