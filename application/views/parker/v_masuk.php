<!DOCTYPE html>
<html lang="en">
<head>
	<title>SEWAPARKIR - Masuk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="css-login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-login/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('media/parker/') ?>css-login/css/main.css">
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('css-login/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" >
			<form class="login100-form validate-form" action="<?= base_url('user_login') ?>" method="post">
				<span class="login100-form-title p-b-37">
					Masuk
				</span>
                    <?php if(!empty($this->session->flashdata('success'))) { ?>
                    <div class="alert alert-success">
                        <b><?= $this->session->flashdata('success') ?></b>
                    </div>
                    <?php } ?>
                <?php if(!empty($this->session->flashdata('error'))) { ?>
                    <div class="alert alert-danger">
                        <b><?= $this->session->flashdata('error') ?></b>
                    </div>
                    <?php } ?>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
						Masuk
					</button>
				</div>
				<div class="text-center">
					<a href="daftar" class="txt2 hov1">
						Daftar
					</a>
					<p>|</p>
					<a href="index" class="txt2 hov1">
						SEWAPARKIR
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('media/parker/') ?>css-login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('media/parker/') ?>css-login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('media/parker/') ?>css-login/js/main.js"></script>

</body>
</html>
