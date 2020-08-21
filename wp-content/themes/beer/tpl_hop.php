<?php
/*
Template Name: Хмель
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
					<div class="row isotope-wrapper isotope-beers-wrapper">
						<div class="isotope isotope-beers gutter">
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
								<?php $post_id = get_the_ID(); ?>
<?php $value_hop_usa_1 = get_post_meta( $post_id, 'США_Заголовок', true ); ?>
<?php $value_hop_usa_2 = get_post_meta( $post_id, 'США_Картинка', true ); ?>
<?php $value_hop_usa_3 = get_post_meta( $post_id, 'США_флаг', true ); ?>
									<h5><image class="flag" src="<?php echo $value_hop_usa_3; ?>"><?php echo $value_hop_usa_1; ?></h5>
								</div>
								<div class="grid-wrapper">
									<?php $post_id = get_the_ID(); ?>
	<?php if ($post_id == '51') { ?><a href="/hop-1"><?php } elseif ($post_id == '126') { ?><a href="/malt-1"><?php } elseif ($post_id == '147') { ?><a href="/yeast-1"><?php } else { ?><a href="/dop-ing-1"><?php } ?>
										<figure style="background-image: url('<?php echo $value_hop_usa_2; ?>')">
											<figcaption class="grid-content">
												<h5 class="grid-title"><span><?php echo $value_hop_usa_1; ?></span></h5>
											</figcaption>
										</figure>
									</a>
								</div>
							</div>
							
															<?php $post_id = get_the_ID(); ?>
<?php $value_hop_usa_4 = get_post_meta( $post_id, 'Страна_0_Заголовок', true ); ?>
<?php $value_hop_usa_5 = get_post_meta( $post_id, 'Страна_0_Картинка', true ); ?>
<?php $value_hop_usa_6 = get_post_meta( $post_id, 'Страна_0_флаг', true ); ?>
<?php if ($value_hop_usa_4 !== '') { ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
									<h5><image class="flag" src="<?php echo $value_hop_usa_6; ?>"><?php echo $value_hop_usa_4; ?></h5>
								</div>
								<div class="grid-wrapper">
									<?php if ($post_id == '51') { ?><a href="/hop-2"><?php } elseif ($post_id == '126') { ?><a href="/malt-2"><?php } elseif($post_id == '147') { ?><a href="/yeast-2"><?php } else { ?><a href="/dop-ing-2"><?php } ?>
										<figure style="background-image: url('<?php echo $value_hop_usa_5; ?>')">
											<figcaption class="grid-content">
												<h5 class="grid-title"><span><?php echo $value_hop_usa_4; ?></span></h5>
											</figcaption>
										</figure>
									</a>
								</div>
							</div>
<?php } ?>									
					
					
					
																				<?php $post_id = get_the_ID(); ?>
<?php $value_hop_usa_7 = get_post_meta( $post_id, 'Страна_1_Заголовок', true ); ?>
<?php $value_hop_usa_8 = get_post_meta( $post_id, 'Страна_1_Картинка', true ); ?>
<?php $value_hop_usa_9 = get_post_meta( $post_id, 'Страна_1_Флаг', true ); ?>
<?php if ($value_hop_usa_7 !== '') { ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
									<h5><image class="flag" src="<?php echo $value_hop_usa_9; ?>"><?php echo $value_hop_usa_7; ?></h5>
								</div>
								<div class="grid-wrapper">
									<?php if ($post_id == '51') { ?><a href="/hop-3"><?php } elseif ($post_id == '126') { ?><a href="/malt-3"><?php } elseif ($post_id == '147') { ?><a href="/yeast-3"><?php } else { ?><a href="/dop-ing-3"><?php } ?>
										<figure style="background-image: url('<?php echo $value_hop_usa_8; ?>')">
											<figcaption class="grid-content">
												<h5 class="grid-title"><span><?php echo $value_hop_usa_7; ?></span></h5>
											</figcaption>
										</figure>
									</a>
								</div>
							</div>
<?php } ?>					



																				<?php $post_id = get_the_ID(); ?>
<?php $value_hop_usa_10 = get_post_meta( $post_id, 'Страна_2_Заголовок', true ); ?>
<?php $value_hop_usa_11 = get_post_meta( $post_id, 'Страна_2_Картинка', true ); ?>
<?php $value_hop_usa_12 = get_post_meta( $post_id, 'Страна_2_Флаг', true ); ?>
<?php if ($value_hop_usa_10 !== '') { ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
									<h5><image class="flag" src="<?php echo $value_hop_usa_12; ?>"><?php echo $value_hop_usa_10; ?></h5>
								</div>
								<div class="grid-wrapper">
									<?php if ($post_id == '51') { ?><a href="/hop-4"><?php } elseif ($post_id == '126') { ?><a href="/malt-4"><?php } elseif ($post_id == '147') { ?><a href="/yeast-4"><?php } else { ?><a href="/dop-ing-4"><?php } ?>
										<figure style="background-image: url('<?php echo $value_hop_usa_11; ?>')">
											<figcaption class="grid-content">
												<h5 class="grid-title"><span><?php echo $value_hop_usa_10; ?></span></h5>
											</figcaption>
										</figure>
									</a>
								</div>
							</div>
<?php } ?>													




																				<?php $post_id = get_the_ID(); ?>
<?php $value_hop_usa_13 = get_post_meta( $post_id, 'Страна_3_Заголовок', true ); ?>
<?php $value_hop_usa_14 = get_post_meta( $post_id, 'Страна_3_Картинка', true ); ?>
<?php $value_hop_usa_15 = get_post_meta( $post_id, 'Страна_3_Флаг', true ); ?>
<?php if ($value_hop_usa_13 !== '') { ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
									<h5><image class="flag" src="<?php echo $value_hop_usa_14; ?>"><?php echo $value_hop_usa_13; ?></h5>
								</div>
								<div class="grid-wrapper">
									<?php if ($post_id == '51') { ?><a href="/hop-5"><?php } elseif ($post_id == '126') { ?><a href="/malt-5"><?php } elseif ($post_id == '147') { ?><a href="/yeast-5"><?php } else { ?><a href="/dop-ing-5"><?php } ?>
										<figure style="background-image: url('<?php echo $value_hop_usa_15; ?>')">
											<figcaption class="grid-content">
												<h5 class="grid-title"><span><?php echo $value_hop_usa_13; ?></span></h5>
											</figcaption>
										</figure>
									</a>
								</div>
							</div>
<?php } ?>										






																				<?php $post_id = get_the_ID(); ?>
<?php $value_hop_usa_16 = get_post_meta( $post_id, 'Страна_4_Заголовок', true ); ?>
<?php $value_hop_usa_17 = get_post_meta( $post_id, 'Страна_4_Картинка', true ); ?>
<?php $value_hop_usa_18 = get_post_meta( $post_id, 'Страна_4_Флаг', true ); ?>
<?php if ($value_hop_usa_16 !== '') { ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
									<h5><image class="flag" src="<?php echo $value_hop_usa_17; ?>"><?php echo $value_hop_usa_16; ?></h5>
								</div>
								<div class="grid-wrapper">
									<?php if ($post_id == '51') { ?><a href="/hop-6"><?php } elseif ($post_id == '126') { ?><a href="/malt-6"><?php } elseif ($post_id == '147') { ?><a href="/yeast-6"><?php } else { ?><a href="/dop-ing-6"><?php } ?>
										<figure style="background-image: url('<?php echo $value_hop_usa_18; ?>')">
											<figcaption class="grid-content">
												<h5 class="grid-title"><span><?php echo $value_hop_usa_16; ?></span></h5>
											</figcaption>
										</figure>
									</a>
								</div>
							</div>
<?php } ?>										






																				<?php $post_id = get_the_ID(); ?>
<?php $value_hop_usa_19 = get_post_meta( $post_id, 'Страна_5_Заголовок', true ); ?>
<?php $value_hop_usa_20 = get_post_meta( $post_id, 'Страна_5_Картинка', true ); ?>
<?php $value_hop_usa_21 = get_post_meta( $post_id, 'Страна_5_Флаг', true ); ?>
<?php if ($value_hop_usa_19 !== '') { ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
									<h5><image class="flag" src="<?php echo $value_hop_usa_20; ?>"><?php echo $value_hop_usa_19; ?></h5>
								</div>
								<div class="grid-wrapper">
									<?php if ($post_id == '51') { ?><a href="/hop-7"><?php } elseif ($post_id == '126') { ?><a href="/malt-7"><?php } elseif ($post_id == '147') { ?><a href="/yeast-7"><?php } else { ?><a href="/dop-ing-7"><?php } ?>
										<figure style="background-image: url('<?php echo $value_hop_usa_21; ?>')">
											<figcaption class="grid-content">
												<h5 class="grid-title"><span><?php echo $value_hop_usa_19; ?></span></h5>
											</figcaption>
										</figure>
									</a>
								</div>
							</div>
<?php } ?>			





																				<?php $post_id = get_the_ID(); ?>
<?php $value_hop_usa_22 = get_post_meta( $post_id, 'Страна_6_Заголовок', true ); ?>
<?php $value_hop_usa_23 = get_post_meta( $post_id, 'Страна_6_Картинка', true ); ?>
<?php $value_hop_usa_24 = get_post_meta( $post_id, 'Страна_6_Флаг', true ); ?>
<?php if ($value_hop_usa_22 !== '') { ?>
							<div class="grid-item col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12 bottles">
								<div class="title-product">
									<h5><image class="flag" src="<?php echo $value_hop_usa_23; ?>"><?php echo $value_hop_usa_22; ?></h5>
								</div>
								<div class="grid-wrapper">
									<?php if ($post_id == '51') { ?><a href="/hop-8"><?php } elseif ($post_id == '126') { ?><a href="/malt-8"><?php } elseif ($post_id == '147') { ?><a href="/yeast-8"><?php } else { ?><a href="/dop-ing-8"><?php } ?>
										<figure style="background-image: url('<?php echo $value_hop_usa_24; ?>')">
											<figcaption class="grid-content">
												<h5 class="grid-title"><span><?php echo $value_hop_usa_22; ?></span></h5>
											</figcaption>
										</figure>
									</a>
								</div>
							</div>
<?php } ?>																	
						</div>
					</div>

					<!-- Load More -->
					<!-- <div class="load-more-wrapper">
						<a href="javascript:void(0);"><i class="fa fa-refresh"></i> Load More</a>
					</div> -->
				</div>
			</section>

		</main><!-- /.enry-content -->
		<?php get_footer(); ?>