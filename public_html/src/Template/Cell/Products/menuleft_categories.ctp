<?php if ($categories->count() > 0): ?>
    <div class="nav_vmmenu-area hidden-xs">
        <div class="nav_inner">
            <div class="vmmenu-title gray9-bg"><i class="fa fa-list"></i><span>Danh mục sản phẩm</span></div>
            <div class="category-list">
                <div class="category-list-inner">
                    <ul class="sf-vartical-menu2 accordion">
                        <?php foreach ($categories as $category): ?>
                            <li <?= (count($category->children) > 0) ? 'class="parent"' : '' ?>>
                                <?= $this->Html->link($category->name, ['controller' => 'Categories', 'action' => 'view', 'slug' => $category->slug], ['class' => 'sub-heading', 'escape' => false]); ?>
                                <?php if (count($category->children) > 0): ?>
                                    <ul>
                                        <?php foreach ($category->children as $children): ?>
                                            <li><?= $this->Html->link($children->name, ['controller' => 'Categories', 'action' => 'view', 'slug' => $children->slug], ['escape' => false]); ?> </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>