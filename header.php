<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<header id="header-main" class="header-main">
			<!-- Comment 3 -->
			<a id="rel-top"></a>
			<div class="logo"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></div>
			<nav id="nav-main" role="navigation" class="nav-main cf">
				<?php wp_nav_menu(array(
					'menu'			=> 'Left menu',
					'menu_class'	=> 'menu cf',
					'walker'		=> new Flotheme_Nav_Walker(),
					'container'		=> '',
				)); ?>
				<?php wp_nav_menu(array(
					'menu'			=> 'Right Menu',
					'menu_class'	=> 'menu cf',
					'walker'		=> new Flotheme_Nav_Walker(),
					'container'		=> true,
				)); ?>
			</nav>
		</header>
		<!-- Comment2 -->
		<div id="content-main" class="content-main" role="main">