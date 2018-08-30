<?= $this->Form->create('User', ['class' => 'form-signin', 'role' => 'form']); ?>
<h3 class="form-signin-heading"><?= __('Đăng nhập'); ?></h3>
<?= $this->Flash->render() ?>
<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">
            <i class="glyphicon glyphicon-user"></i>
        </div>
        <?=
        $this->Form->input('username', [
            'label' => false,
            'class' => 'form-control',
            'placeholder' => 'Username'
        ]);
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
            'placeholder' => 'Password'
        ])
        ?>
    </div>
</div>

<label class="checkbox">
    <input type="checkbox" value="remember-me"> &nbsp Ghi nhớ
</label>
<?= $this->Form->button(__('Đăng nhập'), ['class' => 'btn btn-lg btn-primary btn-block']); ?>
<?= $this->Form->end() ?>