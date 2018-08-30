<?php if ($categories->count() > 0): ?>
    <ul class="mmenuffect">
        <li class="row">
            <?php foreach ($categories as $category): ?>
                <div class="col-md-6 col-sm-12">
                    <?= $this->Html->link($category->name, ['controller' => 'Categories', 'action' => 'view', 'slug' => $category->slug], ['class' => 'sub-heading', 'escape' => false]); ?>
                    <?php if (count($category->children) > 0): ?>
                        <ul>
                            <?php foreach ($category->children as $children): ?>
                                <li>
                                    <?= $this->Html->link($children->name, ['controller' => 'Categories', 'action' => 'view', 'slug' => $children->slug], ['escape' => false]); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>            
        </li>
    </ul>
<?php endif; ?>