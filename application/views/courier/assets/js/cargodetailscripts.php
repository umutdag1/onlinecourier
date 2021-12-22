<script>
	$("#orderfrom").submit(function () {
		let orderformdata = $("#orderfrom").serialize();

		$.ajax({
			method:"POST",
			url:"<?php echo base_url('courier/Cargodetail/saveToApi')?>",
			data:orderformdata,
		}).done(function(data){
			//console.log(data)
			window.location = "<?php echo base_url('courier/Poolcourier');?>";

		})
		return false;
	});

</script>
