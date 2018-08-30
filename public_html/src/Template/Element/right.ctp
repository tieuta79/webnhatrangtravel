<div class="col-sm-3 col-md-3 col-lg-3">
    <div class="account-list">
        <div class="account-list-inner">
            <div class="title-box">
                <span class="sub-title">Thông tin tài khoản</span>
            </div>
            <div class="account-list-box">
                <ul>
                    <li class="account-item"><a><span class="fa fa-angle-double-right"></span><?= $this->Html->link('Thông tin tài khoản',['controller'=>'Users','action'=>'infoaccount'],['escape'=>false]); ?> </a></li>
                    <li class="account-item"><a><span class="fa fa-angle-double-right"></span><?= $this->Html->link('Sửa đổi thông tin tài khoản',['controller'=>'Users','action'=>'edit_info_account'],['escape'=>false]); ?></a></li>
                    <li class="account-item"><a><span class="fa fa-angle-double-right"></span><?= $this->Html->link('Thay đổi mật khẩu',['controller'=>'Users','action'=>'change_pass'],['escape'=>false]); ?></a></li>
                    <li class="account-item"><a><span class="fa fa-angle-double-right"></span><?= $this->Html->link('Lịch sử bình luận',['controller'=>'Users','action'=>'comment'],['escape'=>false]); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>