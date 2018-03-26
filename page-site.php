<?php get_header(); ?>

<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 padbot20">

				<?php the_content(); ?>

			</div>
		</div>
	</div>
	
<?php endwhile; ?>
<?php endif; ?>

<section class="price_block">
	<div class="container">
		<h2>Наши услуги:</h2>
		<div class="price_table_wrapper">
			<div class="price_item" data-appear-top-offset="-100" data-animated="fadeInLeft">
				<div class="price_item_wrapper">
					<div class="price_item_title"><h6>Простой сайт</h6></div>
					<div class="price_item_cost"><h3>9000<span>/р</span></h3></div>
					<div class="price_item_text">Срок создания сайта - 4 дня</div>
					<div class="price_item_text">Готовый дизайн сайта</div>
					<div class="price_item_text">Доменное имя .RU</div>
					<div class="price_item_text">Хостинг (1 месяц)</div>
					<div class="price_item_text">Наполнение 1 страницы сайта</div>
					<div class="price_item_text">Форма обратной связи</div>
					<div class="price_item_text">Счетчик посещаемости</div>
					<div class="price_item_text">CMS Wordpress</div>
					<div class="price_item_btn"><a href="<?php echo get_site_url(); ?>/contact">Отправить заявку!</a></div>
				</div>
			</div>			
			<div class="price_item" data-appear-top-offset="-100" data-animated="fadeInLeft">
				<div class="price_item_wrapper">
					<div class="price_item_title"><h6>Сайт-визитка</h6></div>
					<div class="price_item_cost"><h3>15000<span>/р</span></h3></div>
					<div class="price_item_text">Срок создания сайта - 10 дней</div>
					<div class="price_item_text">Готовый дизайн сайта</div>
					<div class="price_item_text">Доменное имя .RU</div>
					<div class="price_item_text">Хостинг (1 месяц)</div>
					<div class="price_item_text">Наполнение 5 страниц сайта</div>
					<div class="price_item_text">Форма обратной связи</div>
					<div class="price_item_text">Счетчик посещаемости</div>
					<div class="price_item_text">CMS Wordpress</div>
					<div class="price_item_text">Модуль Новости</div>
					<div class="price_item_text">Модуль Слайд-шоу</div>
					<div class="price_item_btn"><a href="<?php echo get_site_url(); ?>/contact">Отправить заявку!</a></div>
				</div>
			</div>
			<div class="price_item most_popular" data-appear-top-offset="-100" data-animated="fadeInRight">
				<div class="price_item_wrapper">
					<div class="price_item_title"><h6>Малый бизнес</h6></div>
					<div class="price_item_cost"><h3>30000<span>/р</span></h3></div>
					<div class="price_item_text">Срок создания сайта - 15 дней</div>
					<div class="price_item_text">Готовый дизайн сайта</div>
					<div class="price_item_text">Доменное имя .RU</div>
					<div class="price_item_text">Хостинг (1 месяц)</div>
					<div class="price_item_text">Наполнение 10 страниц сайта</div>
					<div class="price_item_text">Форма обратной связи</div>
					<div class="price_item_text">Счетчик посещаемости</div>
					<div class="price_item_text">CMS Wordpress</div>
					<div class="price_item_text">Модуль Новости</div>
					<div class="price_item_text">Модуль Слайд-шоу</div>
					<div class="price_item_text">Модуль Каталог</div>
					<div class="price_item_text">Модуль SEO</div>
					<div class="price_item_btn"><a href="<?php echo get_site_url(); ?>/contact">Отправить заявку!</a></div>
				</div>
			</div>
			<div class="price_item" data-appear-top-offset="-100" data-animated="fadeInRight">
				<div class="price_item_wrapper">
					<div class="price_item_title"><h6>Уникальный</h6></div>
					<div class="price_item_cost"><h3>45000<span>/р</span></h3></div>
					<div class="price_item_text">Срок создания сайта - 30 дней</div>
					<div class="price_item_text">Уникальный дизайн сайта</div>
					<div class="price_item_text">Доменное имя .RU</div>
					<div class="price_item_text">Хостинг (1 месяц)</div>
					<div class="price_item_text">Наполнение 10 страниц сайта</div>
					<div class="price_item_text">Форма обратной связи</div>
					<div class="price_item_text">Счетчик посещаемости</div>
					<div class="price_item_text">CMS Wordpress</div>
					<div class="price_item_text">Модуль Новости</div>
					<div class="price_item_text">Модуль Слайд-шоу</div>
					<div class="price_item_text">Модуль Каталог</div>
					<div class="price_item_text">Модуль SEO</div>
					<div class="price_item_btn"><a href="<?php echo get_site_url(); ?>/contact">Отправить заявку!</a></div>
				</div>
			</div>			
			<div class="clear"></div>
		</div>
	</div>
</section>

<section class="inform_block">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 padbot20" data-appear-top-offset="-100" data-animated="fadeInRight">
				
				<p>Цены являются ориентировочными. В каждом конкретном случае, необходимо уточнять Ваши пожелания. Пишите и (или) звоните и мы обязательно свяжемся с Вами для уточнения деталей.</p>
												
			</div>
		</div>
	</div>
</section>

<?php get_footer();
