<?php
/*
Template Name: Проекты
*/
get_header(); ?>
	
			

			
		<!-- Page Header -->
			<header class="header page-header image-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-title"><span>Наши проекты</span></h1>
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
									<a itemprop="item" href="index.html"><span itemprop="name">Home</span></a>
									<meta itemprop="position" content="1" />
								</li>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<span itemprop="name">Events</span>
									<meta itemprop="position" content="2" />
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>

			<section class="page-section">
				<div class="container">
					<div class="row">
					<?php
											if ( have_posts() ) : 
											query_posts('cat=4');  
											while (have_posts()) : the_post();  
											?>
						<div class="col-md-3" style="margin-top:20px;">
							<div class="events-wrapper">
								<img alt="" src="<?php the_post_thumbnail_url(); ?>" />
								<h3 class="event-title" style="font-size:19px;"><?php the_title(); ?></h3>
								<p><?php echo kama_excerpt( array('maxchar'=>200) ); ?></p>

								<a class="event-btn btn btn-sm btn-default" href="<?php the_permalink(); ?>">Читать далее</a>
							</div>
						</div>
									<?php endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</section>

			
		</main><!-- /.enry-content -->
		<?php get_footer(); ?>