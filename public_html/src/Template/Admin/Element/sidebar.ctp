<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
    <ul class="list-group panel">
        <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>Menu Admin</b></li>
        <li class="list-group-item">
            <?= $this->Html->link('<i class="glyphicon glyphicon-home"></i>Bảng điều khiển ',['controller'=>'Users','action'=>'dashboard'],['escape'=>false]); ?>
        </li>

        <li>
            <a href="#events" class="list-group-item " data-toggle="collapse">
                <i class="fa fa-calendar"></i>Lịch sự kiện  <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <div class="collapse" id="events">
                <?= $this->Html->link('<i class="fa fa-pencil-square"></i> Danh sách sự kiện',['controller'=>'Events','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-file-image-o"></i> Hình ảnh sự kiện',['controller'=>'Imageevents','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-star-o"></i>Đánh giá',['controller'=>'Rateevents','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
            </div>
        </li>
        <li>
            <a href="#regions" class="list-group-item " data-toggle="collapse">
                <i class="fa fa-map"></i>Khu vực  <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <div class="collapse" id="regions">
                <?= $this->Html->link('<i class="fa fa-map"></i> Tỉnh',['controller'=>'Provinces','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-pencil-square"></i> Danh sách khu vực',['controller'=>'Regions','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-file-image-o"></i> Hình ảnh khu vực',['controller'=>'Imageregions','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
            </div>
        </li>
        <li>
            <a href="#places" class="list-group-item " data-toggle="collapse">
                <i class="fa fa-camera"></i>Địa điểm du lịch  <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <div class="collapse" id="places">
                <?= $this->Html->link('<i class="fa fa-camera"></i> Danh sách địa điểm',['controller'=>'Places','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-file-image-o"></i> Hình ảnh địa điểm',['controller'=>'Imageplaces','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-star-o"></i>Đánh giá',['controller'=>'Rateplaces','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-navicon"></i>Loại địa điểm',['controller'=>'Typeplaces','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
            </div>
        </li>
        <li>
            <a href="#hotels" class="list-group-item " data-toggle="collapse">
                <i class="fa fa-hotel"></i>Chỗ ở  <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <div class="collapse" id="hotels">
                <?= $this->Html->link('<i class="fa fa-hotel"></i> Danh sách chỗ ở',['controller'=>'Hotels','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-file-image-o"></i> Hình ảnh chổ ở',['controller'=>'Imagehotels','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-star-o"></i>Đánh giá',['controller'=>'Ratehotels','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-navicon"></i>Loại chỗ ở',['controller'=>'Typehotels','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-hotel"></i> Danh sách phòng',['controller'=>'Rooms','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-navicon"></i> Loại phòng',['controller'=>'Typerooms','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
            </div>
        </li>
        <li>
            <a href="#restaurants" class="list-group-item " data-toggle="collapse">
                <i class="fa fa-cutlery"></i>Ăn uống  <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <div class="collapse" id="restaurants">
                <?= $this->Html->link('<i class="fa fa-cutlery"></i> Danh sách quán ăn',['controller'=>'Restaurants','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-file-image-o"></i> Hình ảnh quán ăn',['controller'=>'Imagerestaurants','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-star-o"></i>Đánh giá',['controller'=>'Raterestaurants','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-navicon"></i>Loại quán ăn',['controller'=>'Typerestaurants','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-hotel"></i> Danh sách món ăn',['controller'=>'Foods','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-navicon"></i> Loại món ăn',['controller'=>'Typefoods','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
            </div>
        </li>
        <li>
            <a href="#vehicles" class="list-group-item " data-toggle="collapse">
                <i class="fa fa-bus"></i>Phương tiện  <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <div class="collapse" id="vehicles">
                <?= $this->Html->link('<i class="fa fa-bus"></i> Danh sách phương tiện',['controller'=>'Vehicles','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-file-image-o"></i> Hình ảnh phương tiện',['controller'=>'Imagevehicles','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-star-o"></i>Đánh giá',['controller'=>'Ratevehicles','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-navicon"></i>Loại phương tiện',['controller'=>'Typevehicles','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
            </div>
        </li>
        <li>
            <a href="#tours" class="list-group-item " data-toggle="collapse">
                <i class="fa fa-camera-retro"></i>Tours <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <div class="collapse" id="tours">
                <?= $this->Html->link('<i class="fa fa-camera-retro"></i> Danh sách tour',['controller'=>'Tours','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-file-image-o"></i> Hình ảnh tour',['controller'=>'Imagetours','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-star-o"></i>Đánh giá',['controller'=>'Ratetours','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-navicon"></i>Loại tour',['controller'=>'Typetours','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
            </div>
        </li>
        
        <li>
            <a href="#reviews" class="list-group-item " data-toggle="collapse">
                <i class="fa fa-window-maximize"></i>Bài review  <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <div class="collapse" id="reviews">
                <?= $this->Html->link('<i class="fa fa-window-maximize"></i>Duyệt bài review',['controller'=>'reviews','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>               
                <?= $this->Html->link('<i class="fa fa-file-image-o"></i>Hình ảnh review',['controller'=>'Imagereviews','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-comments-o"></i>Bình luận review',['controller'=>'Comments','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
                <?= $this->Html->link('<i class="fa fa-navicon"></i>Loại bài review',['controller'=>'Typereviews','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>
            </div>
        </li>
        <li>
            <a href="#plans" class="list-group-item " data-toggle="collapse">
                <i class="fa fa-plane"></i>Chuyến đi  <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <div class="collapse" id="plans">
                <?= $this->Html->link('<i class="fa fa-plane"></i>Duyệt chuyến đi',['controller'=>'Plans','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>               
                <?= $this->Html->link('<i class="fa fa-navicon"></i>Chi tiết chuyến đi',['controller'=>'Details','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>               
            </div>
        </li>
        <li class="list-group-item">
            <?= $this->Html->link('<i class="fa fa-image"></i> Ảnh slide',['controller'=>'Slides','action'=>'index'],['escape'=>false]); ?>
        </li> 
        <li>
            <a href="#users" class="list-group-item " data-toggle="collapse">
                <i class="fa fa-users"></i>Người dùng  <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <div class="collapse" id="users">
                <?= $this->Html->link('<i class="fa fa-user"></i>Người dùng',['controller'=>'Users','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>               
                <?= $this->Html->link('<i class="fa fa-user-circle-o"></i>Nhóm người dùng',['controller'=>'Typeusers','action'=>'index'],['escape'=>false,'class'=>'list-group-item']); ?>               
            </div>
        </li>
       
        
        <li class="list-group-item">
            <?= $this->Html->link('<i class="fa fa-sticky-note"></i> Góp ý',['controller'=>'Feedbacks','action'=>'index'],['escape'=>false]); ?>
        </li>
        
        <li class="list-group-item">
            <?= $this->Html->link('<i class="fa fa-signal"></i> Thống kê',['controller'=>'Users','action'=>'statistic'],['escape'=>false]); ?>
        </li>
    </ul>
</div>