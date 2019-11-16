<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $AppUI['avatar']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $AppUI['display_name']; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="<?php if (in_array($controller, array('top')) && $action == 'index') echo ' active ' ?>">
                <a href="<?php echo $BASE_URL; ?>">
                    <i class="fa fa-dashboard"></i> <span><?php echo __('LABEL_DASHBOARD'); ?></span>
                </a>
            </li>
            
            <li class="<?php if (in_array($controller, array('orders'))) echo ' active ' ?>">
                <a href="<?php echo $BASE_URL; ?>/orders">
                    <i class="fa fa-cart-plus"></i>
                    <span><?php echo __('LABEL_ORDER_MANAGEMENT'); ?></span>
                </a>
            </li>
            
            <li class="<?php if (in_array($controller, array('customers'))) echo ' active ' ?>">
                <a href="<?php echo $BASE_URL; ?>/customers">
                    <i class="fa fa-user"></i>
                    <span><?php echo __('LABEL_CUSTOMER_MANAGEMENT'); ?></span>
                </a>
            </li>
            
            <li class="<?php if (in_array($controller, array('requests'))) echo ' active ' ?>">
                <a href="<?php echo $BASE_URL; ?>/requests">
                    <i class="fa fa-bank"></i>
                    <span><?php echo __('Yêu cầu rút tiền'); ?></span>
                </a>
            </li>
            
            <li class="treeview <?php if (in_array($controller, array('admins', 'companies', 'about'))) echo ' active ' ?>">
                <a href="#">
                    <i class="fa fa-cogs"></i> 
                    <span><span><?php echo __('LABEL_SETTING_MANAGEMENT'); ?></span></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($controller == 'admins' && in_array($action, array('updateprofile'))) echo ' active ' ?>">
                        <a href="<?php echo $BASE_URL; ?>/admins/updateprofile">
                            <i class="fa fa-circle-o"></i> <?php echo __('LABEL_UPDATE_PROFILE');?>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
