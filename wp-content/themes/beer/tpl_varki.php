<?php
/*
Template Name: Заказные варки
*/
get_header(); ?>
	
			

			
		
			<!-- Page Header -->
			<header class="header page-header image-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-title"><span><?php the_title() ?></span></h1>
						</div>
					</div>
				</div>			
			</header>
		</div>

		<!-- Page Content -->
		<main class="entry-content">
			
			<!-- Breadcrumbs -->
			<div class="page-breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ol class="list-inline list-unstyled" itemscope itemtype="http://schema.org/BreadcrumbList">
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<a itemprop="item" href="http://mwbeer.com.ua"><span itemprop="name">Главная</span></a>
									<meta itemprop="position" content="1" />
								</li>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<span itemprop="name"><?php the_title(); ?></span>
									<meta itemprop="position" content="2" />
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			
			<section class="page-section" style="background-color:#1b2330;">
				<div class="pivovar">
				

		<?php while( have_posts() ) : the_post();
                        $more = 1; // отображаем полностью всё содержимое поста
                       
                        the_content(); // выводим контент
                    endwhile; ?>
					
				
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
	
		</main><!-- /.enry-content -->
		<?php get_footer(); ?>