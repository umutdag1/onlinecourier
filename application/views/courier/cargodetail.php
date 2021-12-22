<div class="content">
	<div class="container-fluid p-5">
		<h1 class="display-4 font-weight-bold">Gönderi Detayı</h1>
		<div class="row">
			<div class="col-md-12">
				<div class="d-flex justify-content-center my-2">
					<form id="orderfrom" method="post" action="">
						<input type="hidden" name="subscriber_user_id"
							   value="<?php echo $this->session->userdata("user_id") ?>">
						<input type="hidden" name="subscriber_cargo_id"
							   value="<?php echo $result_arr["cargo_id"] ?>">
				</div>
				<div class="d-flex justify-content-center my-2" id="weight"></div>
				<div class="col-md-8 mx-auto">
					<div class="card">
						<div class="card-body">
							<label>Çıkış Adresi</label>
							<br>
							<label>İsim</label>
							<input type="text" class="form-control"
								   value="<?php echo $result_arr["user_name"] ?>" disabled>
							<label>Soyisim</label>
							<input type="text" class="form-control"
								   value="<?php echo $result_arr["user_surname"] ?>" disabled>
							<label>Numara</label>
							<input type="text" class="form-control phone"
								   value="<?php echo $result_arr["user_phone_num"] ?>" disabled>

							<label>Adres</label>
							<select class="form-control mb-3"  id="city_from" disabled>
								<option  selected><?php echo $result_arr["city_title_from"]?></option>
							</select>
							<select class="form-control mb-3"  id="district_from"disabled>
								<option  selected><?php echo $result_arr["ilce_title_from"]?></option>
							</select>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i
													class="fas fa-map-marker-alt"></i></span>
								</div>
								<input type="text" class="form-control"  value="<?php echo $result_arr["cargo_address_from"] ?>" disabled>
							</div>
							<span id="date" class="col-md-12 "></span>
						</div>
					</div>
				</div>
				<div class="col-md-8 mx-auto">
					<div class="card">
						<div class="card-body">
							<label>Varış Adresi</label>
							<br>
							<label>İsim</label>
							<input type="text" class="form-control"  value="<?php echo $result_arr["cargo_name_to"] ?>" disabled>
							<label>Soyisim</label>
							<input type="text" class="form-control" value="<?php echo $result_arr["cargo_surname_to"] ?>" disabled>
							<label>Numara</label>
							<input type="text" class="form-control phone"  value="<?php echo $result_arr["cargo_phone_num_to"] ?>" disabled>

							<label>Adres</label>
							<select class="form-control mb-3" id="city_to" disabled>
								<option  selected><?php echo $result_arr["city_title_to"] ;?></option>
							</select>
							<select class="form-control mb-3"  id="district_to" disabled>
								<option  selected><?php echo $result_arr["ilce_title_to"] ;?></option>
							</select>
							<div class="input-group mb-3">
								<div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span></div>
								<input type="text" class="form-control"
									   aria-label="Username"
									   aria-describedby="basic-addon1"  value="<?php echo $result_arr["cargo_address_to"]; ?>" disabled>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 mx-auto">
					<div class="card">
						<div class="card-body">
							<label>Gönderi İçeriği</label>
							<input type="text" class="form-control" value="<?php echo $result_arr["cargo_description"]; ?>" disabled >
							<label>Hacim</label>
							<input type="number" class="form-control"  min="1" value="<?php echo $result_arr["cargo_volume"]; ?>" disabled>
							<label>Araç Tipi</label>
							<input type="text" class="form-control" value="<?php echo $result_arr["vehicle_type"]; ?>" disabled>
							<label>Kargo Ağırlığı</label>
							<input type="text" class="form-control" value="<?php echo $result_arr["cargo_weight"] ." " .$result_arr["cargo_weight_unit"]; ?>" disabled>
							<label>Teslim Tarihi</label>
							<input type="text" class="form-control" value="<?php echo $result_arr["cargo_delivery_time"]; ?>" disabled>

						</div>
					</div>
				</div>
				<h4 class="display-4" id="totalprice">Tutar: <?php echo $result_arr["cargo_price"] ?> TL</h4>
				<div class="col-md-8 mx-auto">
					<button type="submit" class="btn btn-outline-success" id="gondersave">Gönderiyi Sahiplen</button>

				</div>
				</form>
			</div>
		</div>
	</div>
</div>



