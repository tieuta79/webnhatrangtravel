<?php if ($contents->count() > 0): ?>
    <ul class="row">
        <?php foreach ($contents as $content): ?>
            <li class="col-sm-6 col-md-6 col-lg-6">
                <div class="custom-block-box">
                    <h2 class="custom-block-title">
                        <?=
                        $this->Html->link($this->Text->truncate($content->name, 30, [
                                    'ellipsis' => '...',
                                    'exact' => false
                                ]), ['controller' => 'Contents', 'action' => 'view', 'type' => 'post', 'slug' => $content->slug], ['escape' => false]);
                        ?>
                    </h2>
                    <div class="custom-block-content">
                        <p class="dsc">
                            <?= $this->Html->image('/uploads/' . $content->image, ['style' => 'width:150px']); ?> 
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
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>