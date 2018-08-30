<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> <?= __('Thay đổi mật khẩu'); ?>
    </h3>
</div>
<div class="panel-body">
    <div class="content-row dashboard">
        <div class="row">

            <?= $this->Form->create('User', ['class' => 'form-signin', 'role' => 'form']); ?>
            <?= $this->Flash->render() ?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class=" glyphicon glyphicon-lock "></i>
                    </div>
                    <?=
                    $this->Form->input('old_password', [
                        'type' => 'password',
                        'label' => false,
                        'class' => 'form-control',
                        'placeholder' => 'Mật khẩu hiện tại'
                    ])
                    ?>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class=" glyphicon glyphicon-lock "></i>
                    </div>
                    <?=
                    $this->Form->input('password', [
                        'label' => false,
                        'class' => 'form-control',
                        'placeholder' => 'Mật khẩu mới'
                    ])
                    ?>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class=" glyphicon glyphicon-lock "></i>
                    </div>
                    <?=
                    $this->Form->input('confirm_password', [
                        'type' => 'password',
                        'label' => false,
                        'class' => 'form-control',
                        'placeholder' => 'Nhập lại mật khẩu'
                    ])
                    ?>
                </div>
            </div>
            <?= $this->Form->button(__('Lưu'), ['class' => 'btn btn-lg btn-primary btn-block']); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>