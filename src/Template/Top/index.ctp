<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo !empty($data['order_count']) ? $data['order_count'] : 0;?></h3>

                <p><?php echo __('Đơn hàng');?></p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo $BASE_URL;?>/orders" class="small-box-footer"><?php echo __('LABEL_MORE_INFO');?> <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo !empty($data['customer_count']) ? $data['customer_count'] : 0;?></h3>

                <p><?php echo __('Khách hàng');?></p>
            </div>
            <div class="icon">
                <i class="ion ion-android-contacts"></i>
            </div>
            <a href="<?php echo $BASE_URL;?>/customers" class="small-box-footer"><?php echo __('LABEL_MORE_INFO');?> <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<!-- /.row -->
