<!doctype html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1, minimum-scale=1, height=device-height">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class( $class ); ?> >

		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">

		<header id="mainHeader" <?php echo (!is_home()) ? "compact" : "" ; ?> >
			<div class="wrapper">
				<a class="logo" href="<?php echo site_url(); ?>">
					<img class="log1 compact" src="<?php echo THEMEPATH; ?>images/logo/logo-1.svg">
					<img class="log2 hidden" src="<?php echo THEMEPATH; ?>images/logo/logo-2.svg">
				</a>
				<div class="menu">
					<a class="menu-btn" href="<?php echo site_url('about'); ?>">acerca de</a>
					<!-- <a class="menu-btn" href="#">archivo</a> -->
					<nav class="social">
						<div class="searchbar">
							<form action="<?php echo site_url(); ?>" method="GET" >
								<input type="text" placeholder="Búsqueda" name="s">
								<a><img src="<?php echo THEMEPATH; ?>images/social/search_cut.png"></a>
							</form>
						</div>
						<a class="social-btn apag" href="#"><img src="<?php echo THEMEPATH; ?>images/social/search.png"></a>
						<a class="social-btn respon" href="https://www.facebook.com/ceroceromx/" target="_blank"><img src="<?php echo THEMEPATH; ?>images/social/fb.png"></a>
						<a class="social-btn respon" href="https://medium.com/cerocero-mx" target="_blank"><img src="<?php echo THEMEPATH; ?>images/social/medium.png"></a>
						<a class="social-btn respon" href="https://twitter.com/ceroceromx" target="_blank"><img src="<?php echo THEMEPATH; ?>images/social/tw.png"></a>
						<a class="social-btn respon" href="https://www.youtube.com/channel/UCui0dr0bhgLgmWPe--uOvIg" target="_blank"><img src="<?php echo THEMEPATH; ?>images/social/yt.png"></a>
						<a class="social-btn respon" href="https://www.instagram.com/ceroceromx/" target="_blank"><img src="<?php echo THEMEPATH; ?>images/social/in.png"></a>
					</nav>
				</div>
			</div>
		</header>