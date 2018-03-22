<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="images/favicon.ico">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<?php wp_head(); ?>
</head>
<body>

<div id="preloader"><img src="<?php echo get_template_directory_uri(); ?>/images/preloader.gif" alt="" /></div>
	
<div id="page">
	<div class="preloader_hide">
		<div class="page_block">
			<header>
				<div class="menu_block clearfix">
					<div class="container clearfix">
						<div class="logo">
							<a href="<?php echo get_site_url(); ?>" >IT develops</a>
						</div>

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<em></em><em></em><em></em><em></em>
							</button>
						</div>
						
						<?php
							wp_nav_menu([
								'theme_location'  => 'top',									
								'container_class' => 'collapse navbar-collapse', 
								'container_id'    => 'collapsibleNavbar',
								'menu_class'      => 'nav navbar-nav',
								'walker'          => new WP_Bootstrap_Navwalker(),
							]);
						?>
					</div>					
				</div>				
			</header>			
