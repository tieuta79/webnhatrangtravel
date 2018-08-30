<?php if ($categories->count() > 0): ?>
    <ul class="children" style="display: none;">
        <?php foreach ($categories as $category): ?>
            <li <?= count($category->children) > 0 ? 'class="parent"' : ''; ?>>
                <?= $this->Html->link($category->name, ['controller' => 'Categories', 'action' => 'view', 'slug' => $category->slug], ['escape' => false]); ?>
                <?php if (count($category->children) > 0): ?>
                    <ul class="children" style="display: none;">
                        <?php foreach ($category->children as $children): ?>
                            <li>
                                <?= $this->Html->link($children->name, ['controller' => 'Categories', 'action' => 'view', 'slug' => $children->slug], ['escape' => false]); ?>
                            </li>            
                        <?php endforeach; ?>
                    </ul>
                    <span class="down-up">&nbsp;</span>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>