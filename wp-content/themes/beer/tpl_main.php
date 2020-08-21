<?php
/*
Template Name: Главная
*/
get_header(); ?>
<!-- Hero Header -->
			<header class="header header-hero">
				<div class="content">
					<div class="container">
						<div class="row">
							
							<div class="col-md-push-5 col-md-7 col-sm-12 col-xs-12">
								<div class="header-content">
								<?php $post_id = get_the_ID(); ?>
<?php $value2 = get_post_meta( $post_id, 'заголовок_в_шапке', true ); ?>
									<h1 class="title"><strong><?php echo $value2; ?></strong></h1>
									<?php while( have_posts() ) : the_post();
                        $more = 1; // отображаем полностью всё содержимое поста ?>
                       <?php  the_content(); // выводим контент ?>
                    <?php endwhile; ?>
									
								</div>
							</div>
						</div>
					</div>
				</div>				
			</header>		
			
			
	
			<!-- Hero Start -->
			<a class="fa fa-chevron-down animated flash infinite hero-start " href="javascript:void(0);"></a>
		</div>
<!-- Page Content -->
		<main class="entry-content">
			<section class="page-section home-section no-padding no-margin">
				<div class="feature-wrapper">
					<div class="container-fluid">
						<div class="row no-gutter">
							<div class="col-md-4">
								<div class="features-grid">
									<a href="/solod">
										<figure>
											<img alt="" src="<?php bloginfo('template_directory')?>/img/home/feature-jobs.jpg" />
											<figcaption>
												<h2><strong>СЫРЬЕ</strong></h2>
												<p>Узнать подробнее</p>
											</figcaption>				
										</figure>
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="features-grid">
									<a href="/ustanovka-30">
										<figure>
											<img alt="" src="<?php bloginfo('template_directory')?>/img/home/feature-events.jpg" />
											<figcaption>
												<h2><strong>ОБОРУДОВАНИЕ</strong></h2>
												<p>Узнать подробнее</p>
											</figcaption>				
										</figure>
									</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="features-grid">
									<a href="/individualnaya-varka/">
										<figure>
											<img alt="" src="<?php bloginfo('template_directory')?>/img/home/feature-contact.jpg" />
											<figcaption>
												<h2><strong>ЗАКАЗНАЯ ВАРКА</strong></h2>
												<p>Узнать подробнее</p>
											</figcaption>				
										</figure>
									</a>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</section>

			<!-- Our Beers -->
			<section class="page-section home-section">
				<div class="container" data-aos="fade-up" data-aos-offset="200">
					<h3 class="section-heading"><span>Пиво M&W</span></h3>
					<div class="row">
						<div class="col-md-12">
							<div class="isotope-filters" role="group">
								<!--<div class="btn-group">
									<button type="button" class="btn our-beers-btn is-checked" data-filter="*">Все</button>
									<button type="button" class="btn our-beers-btn" data-filter=".bottles">Солод</button>
									<button type="button" class="btn our-beers-btn" data-filter=".taps">Хмель</button>
									<button type="button" class="btn our-beers-btn" data-filter=".speciality">Дрожжи</button>
									<button type="button" class="btn our-beers-btn" data-filter=".other">Другие ингредиенты</button>
								</div>-->
							</div>
						</div>
					</div>
					<div class="row isotope-wrapper isotope-beers-wrapper">
						<div class="isotope isotope-beers gutter">
						  <?php
											if ( have_posts() ) : 
											query_posts('cat=37&posts_per_page=-1'); 
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="grid-wrapper">
									<a href="javascript:void(0);" data-remodal-target="<?php echo $post_id; ?>">
										<figure style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
											<figcaption class="grid-content">
												<h5 class="grid-title"><span><?php the_title(); ?></span></h5>
											</figcaption>
										</figure>
									</a>
								</div>
							</div>
							<!-- Item One -->
			<div class="remodal modal-beers" data-remodal-id="<?php echo $post_id; ?>">
				<button data-remodal-action="close" class="remodal-close"></button>
				<div class="row">
					<div class="col-md-5 col-sm-12 col-xs-12">
						<div class="item-modal-image">
							<a class="image-lightbox" href="<?php the_post_thumbnail_url(); ?>"><img alt="" src="<?php the_post_thumbnail_url(); ?>" /></a>
							
							
						</div>
					</div>
					
					<div class="col-md-7 col-sm-12 col-xs-12">
						<h3><?php the_title(); ?></h3>
						<?php the_content() ?>
						<br><center><h5><strong>Для заказа оставьте свое имя и телефон</strong></h5></center>
							<?php echo do_shortcode(  '[contact-form-7 id="673" title="Без названия"]' ); ?> 
							
						
						
					
					</div>
				</div>
			</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							
					
							 
						</div>
					</div>

					
				</div>
			</section>

			<!-- Technologies / Clients -->
			<!--<section class="page-section home-section">
				<div class="container" data-aos="fade-up" data-aos-offset="200">
					<h3 class="section-heading"><span>Наши награды</span></h3>
					<div class="row">
						<div class="clients-carousel">
						<?php
											if ( have_posts() ) : 
											query_posts('cat=3');  
											while (have_posts()) : the_post();  
											?>
							<div class="client-item">
								<a href="javascript:void(0);"><img alt="" src="<?php the_post_thumbnail_url(); ?>" /></a>
								<h4 class="award-title"><?php the_title(); ?></h4>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</section>-->

			<!-- Our Locations -->
			<section class="page-section home-section" >
				<div class="container" data-aos="fade-up" data-aos-offset="200">
					<h3 class="section-heading"><span>Наши контакты</span></h3>
					<div class="row">
						<div class="col-md-6">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2534.8837951239!2d30.26264831573516!3d50.554930979489946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472b31f91ff7b191%3A0x4e1ac723ce709048!2z0JLRltC00LTRltC7INC_0YDQvtC00LDQttGW0LIgItCf0JDQoNCa0KLQkNCj0J0iIC8gIlBBUktUT1dOIg!5e0!3m2!1sru!2scz!4v1545078321928" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="col-md-6">
							<p><?php $my_post_id = '27'; $my_post_obj = get_post( $my_post_id ); // параметр функции - ID поста, содержимое которого нужно вывести
echo $my_post_obj->post_content; ?></p>

							<a class="btn btn-default" href="/contacts">Подробнее</a>
						</div>
					</div>
					<center><h1>Купить оборудование для приготовления пива дома в Киеве</h1></center>
					<p>Благодаря современным технологиям теперь можно <strong>купить оборудование для приготовления пива дома в Киеве</strong>. Весь процесс варения пива в небольших объемах для личного потребления будет автоматизирован. <strong>Заказать мини-пивоварню</strong> <a href="https://mwbeer.com.ua/pivovarenie-m-w/">для пивоварения</a> в домашних условиях вы можете в нашем интернет-магазине Maltzer&Wheatman. У нас есть установки с объёмом <a href="https://mwbeer.com.ua/ustanovka-30">сусловарочного котла от 30 литров.</a></p>
<p><strong>Критерии выбора пивоваренного оборудования</strong> </p>
<p>Покупая крафтовое пиво в городских лавках, или заказывая его в кафе и ресторанах, многие, наверное, задумывались, как хорошо было бы изготавливать его самому в <a href="https://mwbeer.com.ua/domashnaya-pivovarna-kupit-kiev/">домашних условиях</a>. Технологии не стоят на месте. Сегодня можно <strong>купить оборудование для приготовления пива дома в Киеве</strong> по доступным ценам среднестатистическому потребителю. Как его правильно выбрать, чтобы не переплатить и остаться довольным качеством? </p>
<p><strong>Мы подобрали для вас основные критерии выбора:</strong></p>
<p>Комплектация - оборудование является составной частью или замкнутым комплексом для приготовления пива.</p>
<p>Консистенция закладки - установка может быть для сухого или жидкого сусла, а также быть универсальной.</p>
<p>Тип конструкции - монолитная или разборная.</p>
<p>Объем емкости - он должен быть достаточным для личных потребностей, но не превышать их, чтобы не выпитый продукт не пропадал.</p>
<p>Тип материала - самым качественным является нержавеющая сталь. </p>
<p>Стоимость - на нее влияют все предыдущие критерии.</p>
<p>Новички в этом деле могут сразу не разобраться, достаточно ли приобретенный мини-установки для замкнутого цикла <a href="https://mwbeer.com.ua/home-pivovar/">домашнего пивоварения</a>. Поэтому советуем консультироваться у продавцов, всё ли вы приобрели, чтобы начать варить собственное пиво. </p>
<p>Вы можете <strong>купить оборудование для приготовления пива дома в Киеве</strong> разборной конструкции. Она облегчит хранение в период, когда вы не пользуетесь установкой. Некоторые модели могут поместиться в обычный кухонный шкаф. Стремитесь приобрести сусловарочный котёл, с которым можно применять жидкое сусло. С ним у вас не будет комочков, которые бывают с сухим суслом. </p>
<p>Лучшим выбором для небольшой семьи, которая любит устраивать посиделки с друзьями по выходным, будет минипивоварня на 30 литров. В таком случае не будет оставаться лишний продукт, который испортится спустя неделю. Также хочется отметить, что дизайнерское исполнение никак не влияет на качество сваренного пива. На дизайн оборудования обращать внимание стоит в самый последний момент.</p>
<p>Мини-установка для варки пива от M&W</p>
<p>Наша компания предлагает <strong>купить оборудование для приготовления пива дома в Киеве</strong>. Из всего ассортимента для новичка подойдет минипивоварня с сусловарочного котлом объемом 30 литров. Он изготовлен из пищевой нержавейки сорта SS304. В состав комплекта входят:</p>
<ul>
<li>солодоприемочная корзина</li>
<li>котел</li>
<li>электрический тен</li>
<li>чиллер, состоящий из 10 колец</li>
<li>насос для циркуляции, позволяющий регулировать поток </li>
<li>автоматический блок управления с ручными настройками.</li>
</ul>
<p>Установка представляет собой готовый комплекс, который обеспечит вас домашним живым пивом на долгие годы. Цена на него - одна из лучших в регионе. Также в нашем интернет-магазине можно заказать качественные ингредиенты для варки крафтового пива. У нас есть украинский и европейский солод разных сортов, хмель из Германии и США, дрожжи для верхнего и низового брожения. Чтобы <strong>купить оборудование для приготовления пива дома в Киеве</strong>, перейдите в соответствующий раздел на сайте.

				</div>
			</section>
			
			
			


		</main><!-- /.enry-content -->
		<?php get_footer(); ?>