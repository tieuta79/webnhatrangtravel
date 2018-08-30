<div class="left-recent-post padding-30">
    <div class="left-recent-post-inner">
        <div class="hadding"><span>Bình luận gần đây</span></div>
        <?php if ($comments->count() > 0): ?>
            <?php foreach ($comments as $comment): ?>
                <div class="recent-media">
                    <div class="resent-media-img">
                        <a href="">
                            <?= $this->Html->image('/front/img/resent-comment_img.png'); ?>
                        </a>
                    </div>
                    <div class="media-content">
                        <div class="product-name"><a href=""><?= $comment->user->name; ?></a></div>
                        <div class="post-meta">
                            <p><?= $comment->description; ?></p>
                            <ul>
                                <li><span class="fa fa-clock-o"></span> <?= $comment->created->timeAgoInWords(); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>