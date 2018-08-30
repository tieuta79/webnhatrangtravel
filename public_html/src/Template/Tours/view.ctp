<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Tour $tour
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tour'), ['action' => 'edit', $tour->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tour'), ['action' => 'delete', $tour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tour->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tour'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Details'), ['controller' => 'Details', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detail'), ['controller' => 'Details', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Imagetours'), ['controller' => 'Imagetours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagetour'), ['controller' => 'Imagetours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Whishlists'), ['controller' => 'Whishlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Whishlist'), ['controller' => 'Whishlists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tours view large-9 medium-8 columns content">
    <h3><?= h($tour->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $tour->has('user') ? $this->Html->link($tour->user->name, ['controller' => 'Users', 'action' => 'view', $tour->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= $tour->has('region') ? $this->Html->link($tour->region->name, ['controller' => 'Regions', 'action' => 'view', $tour->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($tour->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($tour->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($tour->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tour->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('View') ?></th>
            <td><?= $this->Number->format($tour->view) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($tour->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($tour->end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tour->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tour->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $tour->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured') ?></th>
            <td><?= $tour->featured ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripton') ?></h4>
        <?= $this->Text->autoParagraph(h($tour->descripton)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($tour->comments)): ?>
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
            <?php foreach ($tour->comments as $comments): ?>
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
        <h4><?= __('Related Details') ?></h4>
        <?php if (!empty($tour->details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tour Id') ?></th>
                <th scope="col"><?= __('Place Id') ?></th>
                <th scope="col"><?= __('Timevisit') ?></th>
                <th scope="col"><?= __('Timemove') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tour->details as $details): ?>
            <tr>
                <td><?= h($details->id) ?></td>
                <td><?= h($details->tour_id) ?></td>
                <td><?= h($details->place_id) ?></td>
                <td><?= h($details->timevisit) ?></td>
                <td><?= h($details->timemove) ?></td>
                <td><?= h($details->date) ?></td>
                <td><?= h($details->note) ?></td>
                <td><?= h($details->status) ?></td>
                <td><?= h($details->featured) ?></td>
                <td><?= h($details->created) ?></td>
                <td><?= h($details->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Details', 'action' => 'view', $details->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Details', 'action' => 'edit', $details->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Details', 'action' => 'delete', $details->id], ['confirm' => __('Are you sure you want to delete # {0}?', $details->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Imagetours') ?></h4>
        <?php if (!empty($tour->imagetours)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tour Id') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tour->imagetours as $imagetours): ?>
            <tr>
                <td><?= h($imagetours->id) ?></td>
                <td><?= h($imagetours->tour_id) ?></td>
                <td><?= h($imagetours->image) ?></td>
                <td><?= h($imagetours->status) ?></td>
                <td><?= h($imagetours->featured) ?></td>
                <td><?= h($imagetours->created) ?></td>
                <td><?= h($imagetours->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Imagetours', 'action' => 'view', $imagetours->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Imagetours', 'action' => 'edit', $imagetours->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Imagetours', 'action' => 'delete', $imagetours->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagetours->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Whishlists') ?></h4>
        <?php if (!empty($tour->whishlists)): ?>
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
            <?php foreach ($tour->whishlists as $whishlists): ?>
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
