<!DOCTYPE html>
<html lang="pt-BR" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			<?php echo APP_NAME ?> | Login
		</title>
		<meta name="description" content="Sistema de gestão de delivery para restaurantes">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="<?php echo base_url('/themes/default') ?>/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('/themes/default') ?>/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="<?php echo base_url('/themes/default') ?>/assets/demo/default/media/img/logo/favicon.ico" />
        <?php $this->load->view('login/css') ?>
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
					<div class="m-stack m-stack--hor m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid">
							<div class="m-login__wrapper">
								<div class="m-login__logo">
									<H1>Delivery</H1>
									
									
								</div>
								<div class="m-login__signin">
									<div class="m-login__head">
										<h3 class="m-login__title">
											Bem vindo de volta
										</h3>
									</div>
									<form class="m-login__form m-form" method="POST" action="<?php echo base_url('dashboard/painel') ?>">
										<div class="form-group m-form__group">
											<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off" aria-describedby="emailHelp">
										</div>
										<div class="form-group m-form__group">
											<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
										</div>
										<div class="row m-login__form-sub">
											<div class="col m--align-left">
											</div>
											<div class="col m--align-right">
												<a href="javascript:;" id="m_login_forget_password" class="m-link">
													Esqueci minha senha
												</a>
											</div>
										</div>
										<div class="m-login__form-action">
											<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
												Entrar
											</button>
										</div>
									</form>
								</div>

								<div class="m-login__forget-password">
									<div class="m-login__head">
										<h3 class="m-login__title">
											Esqueceu a senha ?
										</h3>
										<div class="m-login__desc">
											Enter your email to reset your password:
										</div>
									</div>
									<form class="m-login__form m-form" action="">
										<div class="form-group m-form__group">
											<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
										</div>
										<div class="m-login__form-action">
											<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
												Request
											</button>
											<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
												Cancel
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" >
				<img src="https://st2.depositphotos.com/3957801/5642/i/600/depositphotos_56423065-stock-photo-bacon-burger.jpg" alt="">
			</div>
			</div>
		</div>

		
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="<?php echo base_url('/themes/default') ?>/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url('/themes/default') ?>/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
	</body>
	<!-- end::Body -->
</html>
