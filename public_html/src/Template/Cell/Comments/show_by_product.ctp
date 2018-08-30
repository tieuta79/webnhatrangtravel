<div class="hadding"><span>Bình luận</span></div>
<?php if ($comments->count() > 0): ?>
    <div class="comments">
        <?php foreach ($comments as $comment): ?>
            <div class="athor">
                <div class="comment-img">
                    <?= $this->Html->image('/front/img/resent-comment_img.png'); ?>
                </div>
                <div class="media-content">
                    <div class="athor">
                        <div class="product-name">
                            <?= $comment->user->name; ?>
                        </div>
                        <div class="comment-time">
                            <span class="fa fa-clock-o"> <?= $comment->created->timeAgoInWords(); ?></span>
                        </div>
                        <div class="post-meta">
                            <p>
                                <?= $comment->description; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>