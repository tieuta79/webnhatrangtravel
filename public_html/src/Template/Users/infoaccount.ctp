<section class="main-page container">
    <div class="main-container col1-layout">
        <div class="main">
            <div class="col-main">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a href="javascript:void(0);" class="toggle-sidebar">
                            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
                        </a> View User <?= $user->name ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="content-row">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group">
                                    <li class="list-group-item"><?= __('Username') ?>: <?= $user->username ?></li>
                                    <li class="list-group-item"><?= __('Name') ?>: <?= $user->name ?></li>
                                    <li class="list-group-item"><?= __('Email') ?>: <?= $user->email ?></li>
                                    <li class="list-group-item"><?= __('Phone') ?>: <?= $user->phone ?></li>
                                    <li class="list-group-item"><?= __('Role') ?>: <?= $user->role_id; ?></li>
                                    <li class="list-group-item"><?= __('Birthday') ?>: <?= $user->birthday ?></li>
                                    <li class="list-group-item"><?= __('Gender') ?>: <?= $user->gender ? __('Nam') : __('Nữ'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- panel body -->
            </div>
        </div>
    </div>
</section>