<?php if ($categories->count() > 0): ?>
    <ul>
        <?php foreach ($categories as $category): ?>
            <li>
                <?= $this->Html->link('<i class="fa fa-dot-circle-o footer-icon"></i> <span>' . $category->name . '</span>', ['controller' => 'Categories', 'action' => 'view', 'slug' => $category->slug], ['escape' => false]); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>