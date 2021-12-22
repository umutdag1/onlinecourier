<nav class="navbar navbar-expand navbar-white navbar-light sticky-top shadow p-3 px-3">

	<a class="navbar-brand text-info" href="#" style="color: #A3FFFA; font-family: Helvetica Neue, sans-serif">Online
		Courier</a>

	<ul class="navbar-nav ml-auto">
		<?php if($this->session->userdata("login_status")!=1){?>
		<li class="nav-item mx-2">
			<a href="<?php echo base_url("sign/SignIn")?>" class="nav-link btn btn-outline-info" ><i class="fas fa-user-lock"></i> Giriş Yap !</a>
		</li>
		<li class="nav-item mx-2">
			<a href="<?php echo base_url("sign/SignUp")?>" class="nav-link btn btn-outline-info" ><i class="fas fa-user-plus"></i> Kayıt Ol !</a>
		</li>
		<?php }else{
			echo '
			<li class="nav-item mx-2">'."Hoş Geldin ".$this->session->userdata("name") ." ".$this->session->userdata("surname").'</li>';
	}?>
		<li class="nav-item mx-2">
			<a href="<?php echo base_url("courier/Ordercourier/")?>" class="nav-link btn btn-outline-primary" ><i class="fas fa-people-carry"></i> Hemen Gönder !</a>
		</li>
		<?php if($this->session->userdata("login_status")==1){?>
			<li class="nav-item mx-2">
			<a href="<?php echo base_url("sessioncontrol/SessionControl/destroy_session")?>" class="nav-link btn btn-outline-danger" > Çıkış</a>
		</li>
		<?php } ?>

	</ul>
</nav>

