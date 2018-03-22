			<footer class="full_width footer_block">
				<div class="container">
					<div class="row" data-animated="fadeInUp">
						<div class="col-lg-7 col-md-8 col-sm-8">

							<?php
								wp_nav_menu([
									'theme_location'  => 'bottom',									
									'container_id'    => 'collapsibleNavbarBottom',
									'menu_class'      => 'foot_menu',
									'walker'          => new WP_Bootstrap_Navwalker(),
								]);
							?>
							
							<hr>
							
							<ul class="foot_info">								
								<li><i class="fe icon_phone"></i>+79109313037</li>
								<li><i class="fe social_skype"></i>dmitryrzhev</li>
								<li><i class="fe icon_mail"></i>info@it-develops.ru</li>
							</ul>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-4 pull-right foot_social_block">
							<h2>IT develops - разработка и поддержка</h2>
							
							<hr>
							
							<div class="social">
								<a href="javascript:void(0);" ><i class="fe social_googleplus"></i></a>
								<a href="javascript:void(0);" ><i class="fe social_linkedin"></i></a>
								<a href="javascript:void(0);" ><i class="fe social_facebook"></i></a>
								<a href="javascript:void(0);" ><i class="fe social_twitter"></i></a>
								<a href="javascript:void(0);" ><i class="fe social_vimeo"></i></a>
								<a href="javascript:void(0);" ><i class="fe social_flickr"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="copyright clearfix">
					<div class="container">
						<div class="center padbot20">
							<a class="copyright_logo" href="javascript:void(0);">IT develops - Ваши идеи - наши решения!</a> <span> &copy; Copyright 2018</span>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
