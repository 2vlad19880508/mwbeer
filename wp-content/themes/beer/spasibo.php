<?php
/**
Template Name: Спасибо!
 */

get_header(); ?>

		<!-- Page Header -->
			<header class="header page-header image-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-title"><span><?php the_title(); ?> </span></h1>
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

			<section class="page-section">
				<div class="container">
					
							<?php while( have_posts() ) : the_post();
                        $more = 1; // отображаем полностью всё содержимое поста
                        the_content(); // выводим контент
                    endwhile; ?>
					
				</div>
			</section>
			
			<!-- Our Locations -->
			<section class="page-section no-padding">
				<div class="container-fluid">
					<div class="row no-gutter">
						<div class="col-md-12">
							<div id="gmap"></div>
						</div>
					</div>
				</div>
			</section>
		</main><!-- /.enry-content -->

<?php get_footer(); ?>
