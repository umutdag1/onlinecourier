<script>
	$(() => {
		//$('.select2').select2();
		let isClicked = null;
		let clicked_btn_val = null;
		let clicked_vechicle_btn_val = null;
		let clicked_time_btn_val = null;
		let price = 0;
		$("#carbtn").click(function () {
			if (isClicked == null || isClicked != "car") {
				if ($("#weight").children().length > 0) {
					$("#weight").empty();
				}
				let weights = [20, 50, 100, 200];
				for (let i = 0; i < 4; i++) {
					let button = document.createElement("button");
					button.className = "btn btn-outline-success mx-2 vehicle-weight-btn";
					button.setAttribute("value", weights[i]);
					button.innerText = weights[i] + " kg kadar";
					$("#weight").append(button);
				}
				isClicked = "car";
			}

		});

		$("#motorbtn").click(function () {
			if (isClicked == null || isClicked != "motor") {
				if ($("#weight").children().length > 0) {
					$("#weight").empty();
				}
				let weights = [2, 5, 10, 15];
				for (let i = 0; i < 4; i++) {
					let button = document.createElement("button");
					button.className = "btn btn-outline-success mx-2 vehicle-weight-btn";
					button.setAttribute("value", weights[i]);
					button.innerText = weights[i] + " kg kadar";
					$("#weight").append(button);
				}
				isClicked = "motor";
			}
		});

		$("#truckbtn").click(function () {
			if (isClicked == null || isClicked != "truck") {
				if ($("#weight").children().length > 0) {
					$("#weight").empty();
				}
				let weights = [250, 500, 700, 900];
				for (let i = 0; i < 4; i++) {
					let button = document.createElement("button");
					button.className = "btn btn-outline-success mx-2 vehicle-weight-btn";
					button.setAttribute("value", weights[i]);
					button.innerText = weights[i] + " kg kadar";
					$("#weight").append(button);
				}
				isClicked = "truck";
			}
		});


		$(document).on("click",".vehicle-weight-btn",function (){
			clicked_btn_val = $(this).val();
			$(".vehicle-weight-btn").each(function(){
				if($(this).val() == clicked_btn_val){
					$(this).attr("class","btn btn-success mx-2 vehicle-weight-btn");
				} else {
					$(this).attr("class","btn btn-outline-success mx-2 vehicle-weight-btn");
				}
			})

			price = clicked_btn_val * 0.75;
			$("#totalprice").text("Tutar: "+price+" TL");
			return false;
		})

		$(document).on("click",".vehicle-type-btn",function (){
			clicked_vechicle_btn_val = $(this).val();
			$(".vehicle-type-btn").each(function(){
				if($(this).val() == clicked_vechicle_btn_val){
					$(this).attr("class","btn btn-success mx-2 vehicle-type-btn");
				} else {
					$(this).attr("class","btn btn-outline-success mx-2 vehicle-type-btn");
				}
			})

			return false;
		})

		$(document).on("click",".select_time",function (){
			clicked_time_btn_val = $(this).val();
			$(".select_time").each(function(){
				if($(this).val() == clicked_time_btn_val){
					$(this).attr("class","btn btn-success btn-lg mx-2 select_time");
				} else {
					$(this).attr("class","btn btn-outline-success btn-lg mx-2 select_time");
				}
			})

			return false;
		})


		$("#chooseDate").click(function () {

			$("#date").html('<label>Teslim tarihi</label><input type="date" id="kargotarih" name="kargotarih" class="form-control">');
		})

		$.ajax({
			method: "GET",
			url: "<?php echo base_url() . "courier/Poolcourier/getCityfromApi"?>"
		}).done(function (data) {
			let decoded_data = JSON.parse(data);
			decoded_data.resultcity.result.forEach(function (item) {
				$("#city_from").append("<option value='" + item.sehir_key + "'>" + item.sehir_title + "</option>");
				$("#city_to").append("<option value='" + item.sehir_key + "'>" + item.sehir_title + "</option>");
			})
		})

		$("#city_from").change(function () {
			if ($("#city_from").val() != 0) {
				$("#district_from").html("<option value='0'>Çıkış İlçesi</option>");
				$.ajax({
					method: "POST",
					url: "<?php echo base_url() . "courier/Poolcourier/getDistrictfromApi"?>",
					data: {
						"plaka": $("#city_from").val()
					}
				}).done(function (data) {
					let decoded_data = JSON.parse(data);
					decoded_data.resultdistrict.result.forEach(function (item) {
						$("#district_from").append("<option value='" + item.ilce_id + "'>" + item.ilce_title + "</option>");
					})

				})
			} else {
				$("#district_from").html("<option value='0'>Çıkış İlçesi</option>");
			}
		})

		$("#city_to").change(function () {
			if ($("#city_to").val() != 0) {
				$("#district_to").html("<option value='0'>Varış İlçesi</option>");
				$.ajax({
					method: "POST",
					url: "<?php echo base_url() . "courier/Poolcourier/getDistrictfromApi"?>",
					data: {
						"plaka": $("#city_to").val()
					}
				}).done(function (data) {
					let decoded_data = JSON.parse(data);
					decoded_data.resultdistrict.result.forEach(function (item) {
						$("#district_to").append("<option value='" + item.ilce_id + "'>" + item.ilce_title + "</option>");
					})

				})
			} else {
				$("#district_to").html("<option value='0'>Varış İlçesi</option>");
			}
		})

		$("#orderfrom").submit(function () {
			let orderformdata = $("#orderfrom").serialize();
			orderformdata += "&kilo=" + clicked_btn_val+"&cargo_vehicle_id="+clicked_vechicle_btn_val+"&cargo_price="+price+"&kargotarih="+$("#kargotarih").val();
			//console.log(orderformdata);
			$.ajax({
				method:"POST",
				url:"<?php echo base_url('courier/Ordercourier/saveToApi')?>",
				data:orderformdata,
			}).done(function(data){
				//console.log(data);
				window.location = "<?php echo base_url('courier/Poolcourier');?>";
			})
			return false;
		});

		$(".phone").inputmask({"mask": "(999) 999-9999"});

	})
</script>
