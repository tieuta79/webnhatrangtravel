<section class="full-width-product-area padding-45">
    <!-- product hadding -->
    <div class="product-hadding text-center">
        <h2 class="no-margin">Sản phẩm liên quan</h2>
        <p class="no-margin">Những sản phẩm cùng thuộc một danh mục</p>
    </div>
    <?php if ($products->count() > 0): ?>
        <div class="related-product2 product-container product-column-1 padding-40">
            <?php foreach ($products as $product): ?>
                <div class="single-item">
                    <div class="single-item-inner">
                        <div class="single-item-img">
                            <?= $this->Html->image('/uploads/' . $product->image); ?>
                            <?php if (!empty($product->price_promotion)): ?>
                                <div class="item-lable">
                                    <span class="lable-new">-<?= $product->price_promotion; ?>%</span>
                                    <span class="lable-sale">sale</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="item-content">
                            <div class="product-name"><?= $this->Html->link($product->name, ['controller' => 'Products', 'action' => 'view', 'slug' => $product->slug], ['escape' => false]); ?></div>
                            <div class="product-price">
                                <?php if (!empty($product->price_promotion)): ?>
                                    <span class="old-price"><?= $this->Layout->formatCurrency($product->price, 'đ'); ?></span>
                                    <span class="new-price"><?= $this->Layout->formatCurrency($this->Layout->price_promotion($product->price, $product->price_promotion), 'đ'); ?></span>
                                <?php else: ?>
                                    <span class="new-price"><?= $this->Layout->formatCurrency($product->price, 'đ'); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>