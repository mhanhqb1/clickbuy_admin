<div class="register-box">
    <div class="register-box-body">
        <p class="login-box-msg">Đăng ký tài khoản</p>

        <form action="<?php echo $BASE_URL;?>/register" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Tên tài khoản" name="account" required="required">
                <span class="glyphicon glyphicon-cloud form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required="required">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Họ Tên" name="name" required="required">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email" required="required">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Số điện thoại" name="phone" required="required">
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Địa chỉ" name="address" required="required">
                <span class="glyphicon glyphicon-bed form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng ký</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="<?php echo $BASE_URL;?>/login" class="text-center">Đã có tài khoản, bấm vào đây để đăng nhập</a>
    </div> 
</div>
