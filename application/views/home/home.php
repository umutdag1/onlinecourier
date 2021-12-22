<div class="content">
	<div class="container-fluid">
		<div class="row mt-2">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3>2</h3>
						<p>Yeni Kargo</p>
					</div>
					<div class="icon">
						<i class="fas fa-boxes"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<h3>1</h3>

						<p>Sistemi keşfeden müşteriler</p>
					</div>
					<div class="icon">
						<i class="fas fa-envelope"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
					<div class="inner">
						<h3>2</h3>

						<p>Kayıtlı Kullanıcı</p>
					</div>
					<div class="icon">
						<i class="fas fa-user"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">
						<h3>1</h3>

						<p>Teslim Edilen Kargolar</p>
					</div>
					<div class="icon">
						<i class="fas fa-truck"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>

		<div class="col-md-12 position-relative">
			<img src="<?php echo base_url("assets/dist/img/header-promo.svg"); ?>" alt="" class="w-100 big-image">
			<div class="position-absolute col-md-12 px-5 pt-3" style="left:0; top:0;">
				<div class="row">
					<div class="col-md-6 p-4 text-break">
						<h1 class="display-4" style="color : #333c4e;">60 Dakikada</h1>
						<h1 class="display-4" style="color : #333c4e;">Teslimat</h1>
					</div>
					<div class="offset-md-1 col-md-5 bg-light p-4 rounded shadow ">
						<form>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
								</div>
								<input type="text" list="city-from" class="form-control" placeholder="Çıkış Şehiri ...">
								<datalist name="city-from" id="city-from">
									<option>Istanbul</option>
								</datalist>
							</div>
							<div class="input-group pt-2">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
								</div>
								<input type="text" list="city-to" class="form-control" placeholder="Varış Şehiri ...">
								<datalist name="city-to" id="city-to">
									<option>Istanbul</option>
								</datalist>
							</div>
							<div class="input-group pt-2">
								<button class="btn btn-primary col-md-12">Kurye Çağır</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row text-center">
				<div class="col-md-3 ">
					<img src="<?php echo base_url("assets/dist/img/car.svg"); ?>" class="w-50">
					<a href="<?php echo base_url("courier/Ordercourier/")?>" class="btn btn-outline-success btn-md col-md-6 d-block mx-auto">Arabalı Kurye</a>
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url("assets/dist/img/motorbike.svg"); ?>" class="w-50">
					<a href="<?php echo base_url("courier/Ordercourier/")?>" class="btn btn-outline-success btn-md col-md-6 d-block mx-auto">Motor Kurye</a>
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url("assets/dist/img/walk.svg"); ?>" class="w-50">
					<a href="<?php echo base_url("courier/Ordercourier/")?>" class="btn btn-outline-success btn-md col-md-6 d-block mx-auto">Yaya Kurye</a>
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url("assets/dist/img/truck.png"); ?>" class="w-50">
					<a href="<?php echo base_url("courier/Ordercourier/")?>" class="btn btn-outline-success btn-md col-md-6 d-block mx-auto">Kamyon Kurye</a>
				</div>
			</div>
		</div>
	</div>
</div>

