<?php if (!empty($isAdmin)): ?>
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo!empty($data['order_count']) ? $data['order_count'] : 0; ?></h3>

                    <p><?php echo __('Đơn hàng'); ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="<?php echo $BASE_URL; ?>/orders" class="small-box-footer"><?php echo __('LABEL_MORE_INFO'); ?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo!empty($data['customer_count']) ? $data['customer_count'] : 0; ?></h3>

                    <p><?php echo __('Khách hàng'); ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-contacts"></i>
                </div>
                <a href="<?php echo $BASE_URL; ?>/customers" class="small-box-footer"><?php echo __('LABEL_MORE_INFO'); ?> <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- /.row -->
<?php else: ?>
    <section class="content-header">
        <!--        <h1>
                    Thông tin khách hàng
                </h1>-->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo $AppUI['avatar']; ?>" alt="User profile picture">

                        <h3 class="profile-username text-center"><?php echo $AppUI['display_name']; ?></h3>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b><?php echo __('LABEL_ORDER_CODE'); ?>:</b> <a class="pull-right"><span style="font-size: 18px;" class="label label-warning"><?php echo $AppUI['code']; ?></span></a>
                            </li>
                            <li class="list-group-item">
                                <b>Tổng đơn hàng:</b> <a class="pull-right"><?php echo!empty($data['user']['order_count']) ? $data['user']['order_count'] : 0; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Tổng tiền:</b> <a class="pull-right"><?php echo!empty($data['user']['total_amount']) ? number_format($data['user']['total_amount']) : 0; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Tiền đã rút:</b> <a class="pull-right"><?php echo!empty($data['user']['withdraw_amount']) ? number_format($data['user']['withdraw_amount']) : 0; ?></a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-default"><b>Rút tiền</b></a>
                        <a href="<?php echo $BASE_URL; ?>/login/logout" class="btn btn-danger btn-block"><b>Đăng xuất</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#about" data-toggle="tab" aria-expanded="true">Giới thiệu</a></li>
                        <li class=""><a href="#orderHistory" data-toggle="tab" aria-expanded="false">Đơn hàng</a></li>
                        <li class=""><a href="#withdrawHistory" data-toggle="tab" aria-expanded="false">Lịch sử rút tiền</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="about">
                            <ul class="timeline timeline-inverse">
                                <li class="time-label">
                                    <span class="bg-red">
                                        ClickBuy Đà Nẵng
                                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope bg-blue"></i>

                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                        <div class="timeline-body">
                                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                            quora plaxo ideeli hulu weebly balihoo...
                                        </div>
                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-xs">Read more</a>
                                            <a class="btn btn-danger btn-xs">Delete</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="orderHistory">
                            <?php if (!empty($data['order_history'])): ?>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Danh sách đơn hàng</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body table-responsive no-padding">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th><?php echo __('LABEL_ORDER_CODE'); ?></th>
                                                            <th><?php echo __('LABEL_NAME'); ?></th>
                                                            <th><?php echo __('LABEL_TEL'); ?></th>
                                                            <th><?php echo __('LABEL_ADDRESS'); ?></th>
                                                            <th><?php echo __('LABEL_PRODUCT'); ?></th>
                                                            <th><?php echo __('LABEL_PRICE'); ?></th>
                                                        </tr>
                                                        <?php foreach ($data['order_history'] as $k => $v): ?>
                                                            <tr>
                                                                <td><?php echo $k + 1; ?></td>
                                                                <td><span class="label label-primary"><?php echo $v['code']; ?></span></td>
                                                                <td><?php echo $v['name']; ?></td>
                                                                <td><?php echo $v['phone']; ?></td>
                                                                <td><?php echo $v['address']; ?></td>
                                                                <td><?php echo $v['product']; ?></td>
                                                                <td><?php echo number_format($v['price']); ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                </div>
                            <?php else: ?>
                                <p>Bạn chưa có đơn hàng nào</p>
                            <?php endif; ?>
                        </div>
                        <div class="tab-pane" id="withdrawHistory">
                            <?php if (!empty($data['withdraw_history'])): ?>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Lịch sử rút tiền</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body table-responsive no-padding">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th><?php echo __('Số tiền'); ?></th>
                                                            <th><?php echo __('LABEL_NAME'); ?></th>
                                                            <th><?php echo __('LABEL_TEL'); ?></th>
                                                            <th><?php echo __('Số tài khoản'); ?></th>
                                                            <th><?php echo __('Ngân hàng'); ?></th>
                                                            <th><?php echo __('Trạng thái'); ?></th>
                                                            <th><?php echo __('LABEL_CREATED'); ?></th>
                                                        </tr>
                                                        <?php foreach ($data['withdraw_history'] as $k => $v): ?>
                                                            <tr>
                                                                <td><?php echo $k + 1; ?></td>
                                                                <td><strong><?php echo number_format($v['amount']); ?></strong></td>
                                                                <td><?php echo $v['name']; ?></td>
                                                                <td><?php echo $v['phone']; ?></td>
                                                                <td><?php echo $v['card_number']; ?></td>
                                                                <td><?php echo $v['bank_name']; ?></td>
                                                                <td>
                                                                    <?php
                                                                    $className = 'label-info';
                                                                    $statusName = 'Chờ xét duyệt';
                                                                    if ($v['status'] == 1) {
                                                                        $className = 'label-success';
                                                                        $statusName = 'Thành công';
                                                                    } elseif ($v['status'] == 2) {
                                                                        $className = 'label-danger';
                                                                        $statusName = 'Thất bại';
                                                                    }
                                                                    ?>
                                                                    <span class="label <?php echo $className;?>"><?php echo $statusName;?></span>
                                                                </td>
                                                                <td><?php echo date('Y-m-d H:i:s', $v['created']); ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                </div>
                            <?php else: ?>
                                <p>Bạn chưa rút tiền lần nào</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><strong>Yêu cầu rút tiền</strong></h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo $BASE_URL;?>" role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $AppUI['display_name'];?>" placeholder="Nhập họ tên" required="required">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại liên hệ</label>
                                <input type="text" class="form-control" value="<?php echo $AppUI['phone'];?>" name="phone" placeholder="Nhập số điện thoại liên hệ" required="required">
                            </div>
                            <div class="form-group">
                                <label>Số tài khoản</label>
                                <input type="text" class="form-control" name="card_number" placeholder="Nhập số tài khoản ngân hàng" required="required">
                            </div>
                            <div class="form-group">
                                <label>Tên ngân hàng</label>
                                <input type="text" class="form-control" name="bank_name" placeholder="Nhập tên ngân hàng - chi nhánh" required="required">
                            </div>
                            <div class="form-group">
                                <p class="help-block">Vui lòng điền đúng thông tin để chúng tôi có thể hỗ trợ bạn tốt nhất.</p>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer center-block">
                            <button type="submit" class="btn btn-primary">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

<?php endif; ?>

