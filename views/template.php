<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Youtube</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/template.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/script.js"></script>
</head>

<body>
	<div class="topo">
		Youtube
		<a href="<?php echo BASE_URL ?>">Home</a>
		<a href="<?php echo BASE_URL ?>sobre">Sobre</a>
		<a href="<?php echo BASE_URL ?>contato">Contato</a>
	</div>

	<?php
	$this->loadViewInTemplate($viewName, $viewData);
	?>
</body>

</html>