<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Youtube</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/template.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
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
<script src="<?php echo BASE_URL ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/script.js"></script>

</html>