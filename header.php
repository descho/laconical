
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Dessy&nbsp;Chongarova</title>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	</head>
	<body <?php body_class(); ?>>
		<h1 class="site-title" id="responsive_headline">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
		<div class="wrap">
			<nav class="nav main-nav">
				<?php
					$args = array(
						'menu' => 'main-menu' 
					);

					wp_nav_menu( $args );
				?>
			</nav>
			<section class="main">