
<div class="col-sm-4 col-md-3 col-lg-3">
    <?= $this->cell('Products::categories',[1])->render('menuleft_categories'); ?>
    <?= $this->cell('Contents::recent'); ?>
    <?= $this->cell('Comments::recent'); ?>
</div>
