<?php
$this->assign('two-col-right', true);
$this->Html->addCrumb('Tài khoản', $this->request->here);
?>
<section class="account-page">
    <div class="page-title margin-bottom"><span>Tài khoản</span></div>
    <div class="account-form">
        <div class="account-form-inner">
            <div class="account-details-wrap">
                <div class="title-box padding-30">
                    <span class="sub-title ">Tài khoản</span>
                </div>
                <div class="account-area">
                    <ul>
                        <li>
                            <?= $this->Html->link('Thông tin tài khoản',['controller'=>'Users','action'=>'infoaccount'],['escape'=>false]); ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Sửa đổi thông tin tài khoản',['controller'=>'Users','action'=>'edit_info_account'],['escape'=>false]); ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Thay đổi mật khẩu',['controller'=>'Users','action'=>'change_pass'],['escape'=>false]); ?>
                        </li>
                    </ul>
                </div>
                <div class="title-box padding-30">
                    <span class="sub-title"> Bình luận</span>
                </div>
                <div class="account-area ">
                    <ul>
                        <li>
                            <?= $this->Html->link('Lịch sử bình luận',['controller'=>'Users','action'=>'comment'],['escape'=>false]); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>