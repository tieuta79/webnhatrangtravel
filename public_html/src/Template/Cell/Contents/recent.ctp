<?php if ($contents->count() > 0): ?>
    <div class="left-recent-post padding-30">
        <div class="left-recent-post-inner">
            <div class="hadding"><span>Tin mới</span></div>
            <?php foreach ($contents as $content): ?>
                <div class="recent-media">
                    <div class="resent-media-img">
                        <?=
                        $this->Html->link($this->Html->image('/uploads/' . $content->image, ['style' => 'width:100px']), ['controller' => 'Contents', 'action' => 'view', 'type' => 'post', 'slug' => $content->slug], ['escape' => false]);
                        ?>                        
                    </div>
                    <div class="media-content">
                        <div class="product-name">
                            <?=
                            $this->Html->link($content->name, ['controller' => 'Contents', 'action' => 'view', 'type' => 'post', 'slug' => $content->slug], ['escape' => false]);
                            ?>
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li><?= $content->created->format('d, M Y'); ?></li>
                                <li><span class="fa fa-comment"></span><a href=""><?= count($content->comments); ?> bình luận</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>