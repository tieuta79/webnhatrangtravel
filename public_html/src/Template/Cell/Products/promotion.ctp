<section class="deal-product full-width-products padding-45">
    <div class="deal-product-inner">
        <div class="container">

            <div class="deal-hadding product-hadding text-center">
                <h2 class="no-margin">Sản phẩm giảm giá</h2>
                <p class="no-margin">Những sản phẩm được giảm giá trong ngày.</p>
            </div>
            <?php if ($products->count() > 0): ?>
                <div class="deal-slide product-container product-column-1 padding-40">
                    <?php foreach ($products as $product): ?>
                        <div class="single-item">
                            <div class="single-item-inner">
                                <div class="single-item-img">
                                    <?= $this->Html->image('/uploads/' . $product->image,['style'=>'width:270px']); ?>
                                    <div class="hover-box">
                                        <!--<button title="Add to cart" data-toggle="tooltip" data-placement="top" type="button" class="btn btn-button cart-button">add to cart</button>-->
                                        <?= $this->Html->link('<i class="fa fa-eye"></i>', ['controller' => 'Products', 'action' => 'view', 'slug'=>$product->slug], ['class' => 'quickview', 'escape' => false]); ?>
                                        <!--
                                        <ul class="product-buttons">
                                            <li>
                                                <button title="wishlist" data-toggle="tooltip" data-placement="top" class="btn btn-button button-wishlist lagoon-blue-bg" type="button"><i class="fa fa-retweet"></i>Wishlist</button>
                                            </li>
                                            <li>
                                                <button title="compare" data-toggle="tooltip" data-placement="top" class="btn btn-button button-compare lagoon-blue-bg" type="button"><i class="fa fa-heart"></i>Compare</button>
                                            </li>
                                        </ul>
                                        -->
                                    </div>

                                    <?php if (!empty($product->price_promotion)): ?>
                                        <div class="item-lable">
                                            <span class="lable-new">-<?= $product->price_promotion; ?>%</span>
                                            <span class="lable-sale">sale</span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="product-content">
                                    <div class="item-content">
                                        <div class="product-name">
                                            <?= $this->Html->link($product->name, ['controller' => 'Products', 'action' => 'view', 'slug'=>$product->slug], ['escape' => false]); ?>
                                        </div>
                                        <div class="product-price">
                                            <?php if (!empty($product->price_promotion)): ?>
                                                <span class="old-price"><?= $this->Layout->formatCurrency($product->price, 'đ'); ?></span>
                                                <span class="new-price"><?= $this->Layout->formatCurrency($this->Layout->price_promotion($product->price, $product->price_promotion), 'đ'); ?></span>
                                            <?php else: ?>
                                                <span class="new-price"><?= $this->Layout->formatCurrency($product->price, 'đ'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <p class="dsc">
                                            <?=
                                            $this->Text->truncate(
                                                    strip_tags($product->description), 150, [
                                                'ellipsis' => '...',
                                                'exact' => false
                                                    ]
                                            );
                                            ?>
                                        </p>
                                    </div>
                                    <div class="timer">
                                        <div class="timer-inner countbox">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>