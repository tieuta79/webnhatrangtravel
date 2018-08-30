<section class="latest-blog full-width-blog padding-45">
    <div class="container">
        <div class="latest-blog-hadding product-hadding text-center">
            <h2 class="no-margin">Blog</h2>
            <p class="no-margin">Tin tức những sản phẩm được người dùng đánh giá.</p>
        </div>

        <?php if ($contents->count() > 0): ?>
            <div class="latest-blog-slide blog-container product-container product-column-1 padding-40">
                <?php foreach ($contents as $content): ?>
                    <div class="single-blog">
                        <div class="blog-image">
                            <?= $this->Html->image('/uploads/' . $content->image, ['style' => 'width:270px']); ?>
                        </div>
                        <div class="blog-contant">
                            <div class="blog-content-inner">
                                <h2 class="blog-name">
                                    <?= $this->Html->link($content->name, ['controller' => 'Contents', 'action' => 'view', 'type' => 'post', 'slug' => $content->slug], ['escape' => false]); ?>
                                </h2>
                                <div class="post-content">
                                    <ul class="post-meta">
                                        <li><span class="fa fa-comment"></span><?= count($content->comments); ?> bình luận</li>
                                        <li><span class="fa fa-user"></span>đăng bởi admin</li>
                                    </ul>
                                </div>
                                <div class="post-detail">
                                    <p>
                                        <?=
                                        $this->Text->truncate(
                                                strip_tags($content->description), 100, [
                                            'ellipsis' => '...',
                                            'exact' => false
                                                ]
                                        );
                                        ?>
                                    </p>
                                </div>
                                <div class="post-dae"><?= $content->created->format('d/m/Y'); ?></div>
                                <?= $this->Html->link('Xem thêm', ['controller' => 'Contents', 'action' => 'view', 'type' => 'post', 'slug' => $content->slug], ['class' => 'btn readmore']); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>