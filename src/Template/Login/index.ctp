<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="box login-box">
            <div class="login-image">
                <img src="<?php echo $BASE_URL;?>/img/login.jpg" alt="login image" />
            </div>
            <div class="box-header">
                <h3 class="box-title">Đăng nhập</h3>
            </div>
            <div class="box-body">
                <?php 
                    echo $this->SimpleForm->render($loginForm); 
                ?>
                <a href="<?php echo $BASE_URL;?>/register" class="text-center">Bấm vào đây để đăng ký</a>
            </div>
        </div>
    </div>
</div>
