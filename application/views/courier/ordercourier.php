<div class="content">
	<div class="container-fluid p-5">
		<h1 class="display-4 font-weight-bold">Gönderi</h1>
		<div class="row">

			<div class="col-md-12 text-center font-weight-bold">Ne zaman alınmalı ve teslim edilmeli?</div>
			<div class="col-md-12">
				<div class="d-flex justify-content-center my-2">
					<div class="mx-2">
						<form id="orderfrom" method="post" action="">
							<button type="button" class="btn btn-outline-success btn-lg select_time" value="time1">
								<div class="d-flex align-items-center">
									<i class="fas fa-running"></i>
									<span class="mx-2">En Kısa Sürede</span>
								</div>
							</button>
					</div>
					<div class="mx-2">
						<button type="button" class="btn btn-outline-success btn-lg select_time" id="chooseDate"  value="time2">
							<div class="d-flex align-items-center">
								<i class="far fa-clock"></i>
								<span class="mx-2">Belirtilen Zamanda</span>
							</div>
						</button>
					</div>
				</div>
				<div class="col-md-12 text-center font-weight-bold my-2">
					Araç Tipi
				</div>
				<div class="d-flex justify-content-center">
					<div class="mx-2">
						<button class="btn btn-outline-success btn-md vehicle-type-btn" value="1" id="carbtn"><i
									class="fas fa-car-side"></i> Araba
						</button>
					</div>
					<div class="mx-2">
						<button class="btn btn-outline-success btn-md vehicle-type-btn" value="2" id="motorbtn"><i
									class="fas fa-motorcycle"></i> Motor
						</button>
					</div>
					<div class="mx-2">
						<button class="btn btn-outline-success btn-md vehicle-type-btn" value="3" id="truckbtn"><i
									class="fas fa-truck"></i> Kamyon
						</button>
					</div>

				</div>
				<div class="d-flex justify-content-center my-2" id="weight"></div>
				<div class="col-md-8 mx-auto">
					<div class="card">
						<div class="card-body">
							<label>Çıkış Adresi</label>
							<br>
							<label>İsim</label>
							<input type="text" class="form-control" name="gonderici_isim"
								   value="<?php echo $this->session->userdata("name") ?>" disabled>
							<label>Soyisim</label>
							<input type="text" class="form-control" name="gonderici_soyisim"
								   value="<?php echo $this->session->userdata("surname") ?>" disabled>
							<label>Numara</label>
							<input type="text" class="form-control phone" name="gonderici_numara"
								   value="<?php echo $this->session->userdata("phone_num") ?>" disabled>
							<input type="hidden" name="user_id"
								   value="<?php echo $this->session->userdata("user_id") ?>">
							<label>Adres</label>
							<select class="form-control mb-3" name="cikis_il" id="city_from">
								<option value="0">İl</option>
							</select>
							<select class="form-control mb-3" name="cikis_ilce" id="district_from">
								<option value="0">İlçe</option>
							</select>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i
												class="fas fa-map-marker-alt"></i></span>
								</div>
								<input type="text" class="form-control" name="gonderici_adres"
									   placeholder="Çıkış Adresi...">
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
							<input type="text" class="form-control" name="alici_isim" placeholder="İsim">
							<label>Soyisim</label>
							<input type="text" class="form-control" name="alici_soyisim" placeholder="Soyisim">
							<label>Numara</label>
							<input type="text" class="form-control phone" name="alici_numara" placeholder="Numara">
							<label>Adres</label>
							<label>Adres</label>
							<select class="form-control mb-3" name="varis_il" id="city_to">
								<option value="0">İl</option>
							</select>
							<select class="form-control mb-3" name="varis_ilce" id="district_to">
								<option value="0">İlçe</option>
							</select>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1"><i
												class="fas fa-map-marker-alt"></i></span>
								</div>
								<input type="text" class="form-control" name="alici_adres" placeholder="Varış Adresi..."
									   aria-label="Username"
									   aria-describedby="basic-addon1">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 mx-auto">
					<div class="card">
						<div class="card-body">
							<label>Gönderi İçeriği</label>
							<input type="text" class="form-control" name="gonderi_icerik" placeholder="Gönderi İçeriği">
							<label>Hacim</label>
							<input type="number" class="form-control" name="hacim" min="1" value="1">
						</div>
					</div>
				</div>
				<h4 class="display-4" id="totalprice">Tutar: 0 TL</h4>
				<div class="col-md-8 mx-auto">
					<button type="submit" class="btn btn-outline-success" id="gondersave">Gönderi Oluştur</button>

				</div>
				</form>
			</div>
		</div>
	</div>
</div>



