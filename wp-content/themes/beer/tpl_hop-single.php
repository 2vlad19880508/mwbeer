<?php
/*
Template Name: Сырье с товарами
*/
get_header(); ?>
	
			

			
		
			<!-- Page Header -->
			<header class="header page-header image-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-title"><span><?php the_title(); ?></span></h1>
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
									<a itemprop="item" href="https://mwbeer.com.ua"><span itemprop="name">Главная</span></a>
									<meta itemprop="position" content="1" />
								</li>
								<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
									if (strpos($url, 'ua/solod/ma') !== false) {?>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<a itemprop="item" href="https://mwbeer.com.ua/solod/"><span itemprop="name">Солод</span></a>
									<meta itemprop="position" content="2" />
								</li>
									<?php } elseif (strpos($url, 'ua/hmel/ho') !== false) { ?>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<a itemprop="item" href="https://mwbeer.com.ua/hmel/"><span itemprop="name">Хмель</span></a>
									<meta itemprop="position" content="2" />
								</li>
									<?php } elseif (strpos($url, 'ua/droggi/') !== false) { ?>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<a itemprop="item" href="https://mwbeer.com.ua/droggi/"><span itemprop="name">Дрожжи</span></a>
									<meta itemprop="position" content="2" />
								</li>
								<?php } elseif (strpos($url, 'ua/dop-ing/') !== false) { ?>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<a itemprop="item" href="https://mwbeer.com.ua/dop-ing/"><span itemprop="name">ДОПОЛНИТЕЛЬНЫЕ ИНГРЕДИЕНТЫ</span></a>
									<meta itemprop="position" content="2" />
								</li>
								<?php } else; { ?>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<span itemprop="name"><?php the_title(); ?></span>
									<meta itemprop="position" content="3" />
								</li>
								<?php } ?>
								
							</ol>
						</div>
					</div>
				</div>
			</div>


			<section class="page-section">
				<div class="container">
				<h3 class="section-heading"><span>ПЕРЕЧЕНЬ ТОВАРОВ</span></h3>
					<div class="row isotope-wrapper isotope-beers-wrapper">
						<div class="isotope isotope-beers gutter">
							
								<?php $post_id = get_the_ID(); ?>

	<?php if ($post_id == '61') { ?>
						                   <?php
											if ( have_posts() ) : 
											query_posts('cat=7');  
											while (have_posts()) : the_post();  
											?>
												<?php $post_id = get_the_ID(); ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?>
										<p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
	<?php } elseif ($post_id == '63') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=8');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 <?php } elseif ($post_id == '65') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=9');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?>
										<p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>				
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
		
		
		<?php } elseif ($post_id == '67') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=10');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
			
		
		
		<?php } elseif ($post_id == '69') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=11');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
		
		
		<?php } elseif ($post_id == '71') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=12');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 
							 <?php } elseif ($post_id == '73') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=13');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
	
	<?php } elseif ($post_id == '75') { ?>
											<?php
											if ( have_posts() ) : 
											query_posts('cat=14');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 
							 <?php } elseif ($post_id == '71') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=12');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 
							 <?php } elseif ($post_id == '131') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=28');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 
							 
							  
							 <?php } elseif ($post_id == '135') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=29');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
	 
							 <?php } elseif ($post_id == '133') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=30');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 
							 	 <?php } elseif ($post_id == '137') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=31');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							  
							 <?php } elseif ($post_id == '139') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=32');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 
							 
							 
							  <?php } elseif ($post_id == '141') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=33');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 
							  
							  <?php } elseif ($post_id == '143') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=34');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 
							   <?php } elseif ($post_id == '145') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=35');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							    <?php } elseif ($post_id == '151') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=24');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 
							 
							     <?php } elseif ($post_id == '153') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=25');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 
							  
							     <?php } elseif ($post_id == '155') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=26');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
							 
							  <?php } elseif ($post_id == '157') { ?>
	
											<?php
											if ( have_posts() ) : 
											query_posts('cat=27');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
							 
	<?php } else { ?>
	
	
	<?php
											if ( have_posts() ) : 
											query_posts('cat=36');  
											while (have_posts()) : the_post();  
											?>
											<?php $post_id = get_the_ID(); ?>
								<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="grid-wrapper">
									
	<?php $value1 = get_post_meta( $post_id, 'thumb', true ); ?>
										<img src="<?php echo $value1; ?>">
										<?php the_content() ?><p>Цена - <?php $value = get_post_meta( $post_id, 'цена', true ); echo $value; ?> грн.</p>
										<a href="javascript:void(0);" onclick="order(<?= $post_id ?>);" class="btns btns-default"><center>Добавить в корзину</center></a>
									
								</div>
							</div>
							 <?php endwhile; endif; wp_reset_query(); ?>
	<?php } ?>
										
																
						</div>
					</div>
					
					<div style="color:#fff; padding-top:70px;">
					<?php while( have_posts() ) : the_post();?>
                        <?php $more = 1; // отображаем полностью всё содержимое поста ?>
                        <h2 style="color:#fff;"><?php the_title(); // эта функция выводит заголовок ?></h2>
                        <?php the_content(); // выводим контент ?>
                    <?php endwhile; ?>
					</div>
					<!-- Load More -->
					<!-- <div class="load-more-wrapper">
						<a href="javascript:void(0);"><i class="fa fa-refresh"></i> Load More</a>
					</div> -->
				</div>
			</section>

		</main><!-- /.enry-content -->
		<?php get_footer(); ?>