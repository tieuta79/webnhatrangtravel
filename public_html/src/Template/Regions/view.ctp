<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Region $region
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->id], ['confirm' => __('Are you sure you want to delete # {0}?', $region->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Imageregions'), ['controller' => 'Imageregions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imageregion'), ['controller' => 'Imageregions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Restaurants'), ['controller' => 'Restaurants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Restaurant'), ['controller' => 'Restaurants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tours'), ['controller' => 'Tours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tour'), ['controller' => 'Tours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="regions view large-9 medium-8 columns content">
    <h3><?= h($region->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Province') ?></th>
            <td><?= $region->has('province') ? $this->Html->link($region->province->name, ['controller' => 'Provinces', 'action' => 'view', $region->province->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($region->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($region->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($region->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($region->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($region->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($region->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($region->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($region->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripton') ?></h4>
        <?= $this->Text->autoParagraph(h($region->descripton)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Hotels') ?></h4>
        <?php if (!empty($region->hotels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('Standard') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
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
            <?php foreach ($region->hotels as $hotels): ?>
            <tr>
                <td><?= h($hotels->id) ?></td>
                <td><?= h($hotels->user_id) ?></td>
                <td><?= h($hotels->region_id) ?></td>
                <td><?= h($hotels->name) ?></td>
                <td><?= h($hotels->slug) ?></td>
                <td><?= h($hotels->image) ?></td>
                <td><?= h($hotels->descripton) ?></td>
                <td><?= h($hotels->standard) ?></td>
                <td><?= h($hotels->address) ?></td>
                <td><?= h($hotels->latitude) ?></td>
                <td><?= h($hotels->longitude) ?></td>
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
    <div class="related">
        <h4><?= __('Related Imageregions') ?></h4>
        <?php if (!empty($region->imageregions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($region->imageregions as $imageregions): ?>
            <tr>
                <td><?= h($imageregions->id) ?></td>
                <td><?= h($imageregions->region_id) ?></td>
                <td><?= h($imageregions->image) ?></td>
                <td><?= h($imageregions->status) ?></td>
                <td><?= h($imageregions->featured) ?></td>
                <td><?= h($imageregions->created) ?></td>
                <td><?= h($imageregions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Imageregions', 'action' => 'view', $imageregions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Imageregions', 'action' => 'edit', $imageregions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Imageregions', 'action' => 'delete', $imageregions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageregions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Places') ?></h4>
        <?php if (!empty($region->places)): ?>
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
            <?php foreach ($region->places as $places): ?>
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
    <div class="related">
        <h4><?= __('Related Restaurants') ?></h4>
        <?php if (!empty($region->restaurants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
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
            <?php foreach ($region->restaurants as $restaurants): ?>
            <tr>
                <td><?= h($restaurants->id) ?></td>
                <td><?= h($restaurants->user_id) ?></td>
                <td><?= h($restaurants->region_id) ?></td>
                <td><?= h($restaurants->name) ?></td>
                <td><?= h($restaurants->slug) ?></td>
                <td><?= h($restaurants->image) ?></td>
                <td><?= h($restaurants->address) ?></td>
                <td><?= h($restaurants->latitude) ?></td>
                <td><?= h($restaurants->longitude) ?></td>
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
    <div class="related">
        <h4><?= __('Related Tours') ?></h4>
        <?php if (!empty($region->tours)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Region Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Descripton') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('View') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($region->tours as $tours): ?>
            <tr>
                <td><?= h($tours->id) ?></td>
                <td><?= h($tours->user_id) ?></td>
                <td><?= h($tours->region_id) ?></td>
                <td><?= h($tours->name) ?></td>
                <td><?= h($tours->slug) ?></td>
                <td><?= h($tours->image) ?></td>
                <td><?= h($tours->descripton) ?></td>
                <td><?= h($tours->start) ?></td>
                <td><?= h($tours->end) ?></td>
                <td><?= h($tours->view) ?></td>
                <td><?= h($tours->status) ?></td>
                <td><?= h($tours->featured) ?></td>
                <td><?= h($tours->created) ?></td>
                <td><?= h($tours->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tours', 'action' => 'view', $tours->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tours', 'action' => 'edit', $tours->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tours', 'action' => 'delete', $tours->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tours->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vehicles') ?></h4>
        <?php if (!empty($region->vehicles)): ?>
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
            <?php foreach ($region->vehicles as $vehicles): ?>
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
