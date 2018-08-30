<div class="col-md-4">
    <div class="header-search">
        <?= $this->Form->create('Products', ['url' => ['controller' => 'Products', 'action' => 'search']]); ?>
        <span class="fa fa-ellipsis-v"></span>
        <?= $this->Form->input('s', ['type' => 'text', 'label' => false, 'class' => 'form-control font-capitalize', 'placeholder' => 'Nhập từ khóa tìm kiếm...']); ?>
        <button type="submit">
            <i class="fa fa-search"></i>
        </button>
        <?= $this->Form->end(); ?>
    </div>
</div>