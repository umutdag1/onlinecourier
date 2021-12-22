<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url("assets/plugins/fontawesome-free/css/all.min.css"); ?>">
	<!-- SELECT2 -->
	<link rel="stylesheet" href="<?php echo base_url("assets/plugins/select2/css/select2.min.css"); ?>">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url("assets/dist/css/adminlte.min.css"); ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<!-- /.login-logo -->
	<div class="card card-outline card-primary">
		<div class="card-header text-center">
			<a href="" class="h1"><b>Online-</b>Courier</a>
		</div>
		<div class="card-body">
			<div id="resultval" class="alert alert-danger" style="display:none; text-align: center;"></div>


			<p class="login-box-msg">Oturum Açmak İçin Giriş Yapın</p>

			<form action="" method="post" id="signform">
				<div class="input-group mb-3">
					<input type="email" class="form-control" name="email"
						   placeholder="Email">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control" name="password"
						   placeholder="Şifre">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-8">
					</div>
					<!-- /.col -->
					<div class="col-4">
						<button type="submit"
								class="btn btn-primary btn-block">Giriş yap</button>
					</div>
					<!-- /.col -->
				</div>
			</form>


		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>


<!-- /.login-box -->
<script src="<?php echo base_url("assets/dist/js/jquery-3.5.1.min.js") ?>"></script>
<!-- jQuery -->
<script src="<?php echo base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
<!-- SELECT 2 -->
<script src="<?php echo base_url("assets/plugins/select2/js/select2.min.js") ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url("assets/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets/dist/js/adminlte.min.js") ?>"></script>
</body>
</html>
<script>
	$(function () {


		$("#signform").submit(function () {
			$.ajax({
				method: "POST",
				url: "<?php echo base_url("sign/SignIn/requestfromAjax");?>",
				data: $("#signform").serialize(),
			}).done(function (msg) {
				console.log(msg);
				if (msg !== "refresh") {
					$("#resultval").show();
					$("#resultval").html(msg);
				} else {
					window.location = "<?php echo base_url('homepage/Home');?>";
				}
			});
			return false;
		})

	});
</script>
