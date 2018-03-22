<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>Character | responsive bootstrap3 html5 template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="images/favicon.ico">

	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<?php wp_head(); ?>
</head>
<body>

<!-- PRELOADER -->
<div id="preloader"><img src="<?php echo get_template_directory_uri(); ?>/images/preloader.gif" alt="" /></div>
<!-- //PRELOADER -->
	
<!-- PAGE -->
<div id="page">
	<!-- PRELOADER HIDE -->
	<div class="preloader_hide">
		<!-- PAGE BLOCK -->
		<div class="page_block">
			<!-- HEADER -->
			<header>
				<!-- MENU -->
				<div class="menu_block clearfix">
					<!-- CONTAINER -->
					<div class="container clearfix">
						<!-- LOGO -->
						<div class="logo">
							<a href="<?php echo get_site_url(); ?>" >IT develops</a>
						</div>
						<!-- LOGO -->

						<!-- RESPONSIVE BUTTON MENU -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<em></em><em></em><em></em><em></em>
							</button>
						</div>
						<!-- //RESPONSIVE BUTTON MENU -->

						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li class="first active"><a href="index.html" >Главная страница</a></li>
								<li class="sub-menu"><a href="javascript:void(0);" >Features</a>
									<!-- Mega Menu -->
									<ul class="mega_menu left">
										<h4>Two columns and paragraph</h4>
										<li class="col">
											<h5>Page Layouts</h5>
											<ol>
												<li><a href="typography.html" ><span>-</span>Typography</a></li>
												<li><a href="shortcodes.html" ><span>-</span>Shortcodes</a></li>
												<li><a href="full-width.html" ><span>-</span>Full Width</a></li>
											</ol>
										</li>
										<li class="col">
											<h5>Other Pages</h5>
											<ol>
												<li><a href="404.html" ><span>-</span>404 Page</a></li>
												<li><a href="shop.html" ><span>-</span>Shop</a></li>
												<li><a href="product-page.html" ><span>-</span>Product Page</a></li>
											</ol>
										</li>
										<li class="col">
											<h5>Paragraph</h5>
											<p>This <span class="color_text">Mega Menu</span> can handle everything. Lists, paragraphs, forms...</p>
										</li>
										<div class="clear"></div>
									</ul>
									<!-- //Mega Menu -->
								</li>
								<li class="sub-menu menu_middle"><a href="javascript:void(0);" >Pages</a>
									<ul>
										<li><a href="about.html" ><span>-</span>About</a></li>
										<li><a href="shop.html" ><span>-</span>Shop</a></li>
										<li><a href="product-page.html" ><span>-</span>Product Page</a></li>
										<li><a href="full-width.html" ><span>-</span>Full Width</a></li>
										<li><a href="404.html" ><span>-</span>404 Page</a></li>
									</ul>
								</li>
								<li class="sub-menu"><a href="javascript:void(0);" >Portfolio</a>
									<ul>
										<li><a href="portfolio1.html" ><span>-</span>1 Column</a></li>
										<li><a href="portfolio2.html" ><span>-</span>2 Column</a></li>
										<li><a href="portfolio3.html" ><span>-</span>3 Column</a></li>
										<li><a href="portfolio4.html" ><span>-</span>4 Column</a></li>
										<li><a href="portfolio-post.html" ><span>-</span>Portfolio Post</a></li>
									</ul>
								</li>
								<li class="sub-menu"><a href="javascript:void(0);" >Blog</a>
									<ul>
										<li><a href="blog.html" ><span>-</span>Blog with sidebar</a></li>
										<li><a href="blog-post.html" ><span>-</span>Blog Post</a></li>
									</ul>
								</li>
								<li class="last"><a href="contacts.html" >Contacts</a></li>
							</ul>
						</div>
					</div>
					<!-- //CONTAINER -->					
				</div>
				<!-- //MENU -->				
			</header>
			<!-- //HEADER -->
