<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
        </a> Bảng điều khiển
    </h3>
</div>
<div class="panel-body">
    <div class="content-row dashboard">
        <div class="row">
            <div style="font-size: 14px;">Danh sách dữ liệu:</div>
            <div class="col-md-12">
                <?= $this->Html->link('<i class="fa fa-calendar"></i> Sự kiện',['controller'=>'Events','action'=>'index'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-camera"></i> Địa điểm du lịch',['controller'=>'Places','action'=>'index'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-hotel"></i> Chỗ ở',['controller'=>'Hotels','action'=>'index'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-cutlery"></i> Ăn uống',['controller'=>'Restaurants','action'=>'index'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-bus"></i> Phương tiện',['controller'=>'Vehicles','action'=>'index'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-camera-retro"></i> Tours',['controller'=>'Tours','action'=>'index'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-compass"></i> Bài reviews',['controller'=>'Reviews','action'=>'index'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-plane"></i> Chuyến đi',['controller'=>'Plans','action'=>'index'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-image"></i> Ảnh slide',['controller'=>'Slides','action'=>'index'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-users"></i> Người dùng',['controller'=>'Users','action'=>'index'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-sticky-note"></i> Góp ý',['controller'=>'Feedbacks','action'=>'index'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-signal"></i> Thống kê',['controller'=>'Users','action'=>'statistic'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
            </div>
            <div style="font-size: 14px;">Thêm dữ liệu:</div>
            <div class="col-md-12"> 
                <?= $this->Html->link('<i class="fa fa-calendar"></i> Thêm sự kiện',['controller'=>'Events','action'=>'add'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-camera"></i> Thêm điểm du lịch',['controller'=>'Places','action'=>'add'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-hotel"></i> Thêm chỗ ở',['controller'=>'Hotels','action'=>'add'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-cutlery"></i> Thêm điểm ăn uống',['controller'=>'Restaurants','action'=>'add'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-bus"></i> Thêm phương tiện',['controller'=>'Vehicles','action'=>'add'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-camera-retro"></i> Thêm tours',['controller'=>'Tours','action'=>'add'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-image"></i> Thêm ảnh slide',['controller'=>'Slides','action'=>'add'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
                <?= $this->Html->link('<i class="fa fa-users"></i> Thêm người dùng',['controller'=>'Users','action'=>'add'],['escape'=>false,'class'=>'btn btn-default', 'style'=> 'margin-top: 15px;']); ?>
            </div>
        </div>
    </div>
</div><!-- panel body -->