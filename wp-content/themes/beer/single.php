<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
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
					<div class="row">
						<div class="col-md-6">
							<div class="about-slider">
							
							<?php $post_id = get_the_ID(); ?>
							<?php if ( get_post_meta($post->ID, 'thumb', true) ) : ?>
							
<a class="about-single-gallery" href="<?php echo get_post_meta($post->ID, 'thumb', true) ?>" rel="bookmark"><img alt="<?php the_title(); ?>" src="<?php echo get_post_meta($post->ID, 'thumb', true) ?>"></a>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'thumb1', true) ) : ?>
<a class="about-single-gallery" href="<?php echo get_post_meta($post->ID, 'thumb1', true) ?>" rel="bookmark"><img alt="<?php the_title(); ?>" src="<?php echo get_post_meta($post->ID, 'thumb1', true) ?>"></a>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'thumb2', true) ) : ?>
<a class="about-single-gallery" href="<?php echo get_post_meta($post->ID, 'thumb2', true) ?>" rel="bookmark"><img alt="<?php the_title(); ?>" src="<?php echo get_post_meta($post->ID, 'thumb2', true) ?>"></a>
<?php endif; ?>
<?php if ( get_post_meta($post->ID, 'thumb3', true) ) : ?>
<a class="about-single-gallery" href="<?php echo get_post_meta($post->ID, 'thumb3', true) ?>" rel="bookmark"><img alt="<?php the_title(); ?>" src="<?php echo get_post_meta($post->ID, 'thumb3', true) ?>"></a>
<?php endif; ?>
					
							</div>
						</div>
						<div class="col-md-6">
							<?php while( have_posts() ) : the_post();
                        $more = 1; // отображаем полностью всё содержимое поста
                        the_content(); // выводим контент
                    endwhile; ?>
					<p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
					<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btn btn-default" style="background-color: #ffc930;"><center>Добавить в корзину</center></a>
						</div>
					</div>
					
					<div style="color:#fff; padding-top:70px;">
					<?php $post_id = get_the_ID(); ?>
					<?php echo get_post_meta($post->ID, 'описание', true) ?>
					</div>
					
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
