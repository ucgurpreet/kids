<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo">
						<a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png"></a>
					</div>
				</div>
				<div class="col-sm-9 ">
					<div class="top-right-sec">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<nav id="menu" role="navigation">
<div id="search">
<?php //get_search_form(); ?>
</div>
<?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container">