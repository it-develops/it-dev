<?php get_header(); ?>

	<section class="contacts_block">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-sm-7 padbot20" data-animated="fadeIn">
					<h2>Сообщение:</h2>
					
					<div class="contact_form top_form">						
						
						<?php echo do_shortcode( '[wpforms id="62" title="false" description="false"]' ); ?>
						
					</div>
				</div>
				<div class="col-lg-5 col-sm-5 padbot20" data-animated="fadeIn">
					<h2>Контакты:</h2>
					
					<ul class="list4 contacts_info">
						<li><b class="fe icon_mail"></b><span><a href="mailto:info@it-develops.ru" alt="">info@it-develops.ru</a></span></li>
						<li><b class="fe social_skype"></b><span><a href="skype:dmitryrzhev" alt="">dmitryrzhev</a></span></li>
						<li><b class="fe icon_phone"></b><span>+7 910 931 30 37</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();
