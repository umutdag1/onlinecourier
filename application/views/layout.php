<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo "Online Courier" ." | ".date("d/m/Y")?></title>
	<?php foreach($header_styles as $style) : ?>
		<link rel="stylesheet" href="<?php echo $style;?>">
	<?php endforeach;?>
	<?php foreach($custom_styles as $style) : ?>
		<link rel="stylesheet" href="<?php echo $style;?>">
	<?php endforeach; ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
	<?php foreach($master_pages as $master_p =>$params):?>
		<?php $this->load->view($master_p,$params) ?>
	<?php endforeach;?>
</div>

<?php foreach($footer_layout as $footer => $params) :?>
	<?php $this->load->view($footer,$params) ?>
<?php endforeach;?>

<?php foreach($footer_scripts as $script) : ?>
	<script src="<?php echo $script;?>"></script>
<?php endforeach;?>

<?php foreach($custom_scripts as $script => $params) : ?>
	<?php $this->load->view($script,$params);?>
<?php endforeach;?>

</body>
</html>
