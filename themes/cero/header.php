<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">

		<link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>reset.css">
		<link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>css/style.css">
		<script type="text/javascript" language="javascript" src="<?php echo THEMEPATH; ?>js/jquery-1.12.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo THEMEPATH; ?>js/script.js"></script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">
