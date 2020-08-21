<?php
/*
Template Name: Шаблон пивоварение
Template Post Type: post
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


			
			<section class="page-section" style="color:#000;">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<article class="news-single grid-item">
								<header>
									<div class="format-image">
										<figure data-image="img/general/1.jpg" class="post-image"><a href="img/general/1.jpg" ><img alt="" src="img/general/1.jpg" /></a></figure>
									</div>
								</header>
								<section class="post-content">
									<h2 class="post-title"><?php the_title(); ?></h2>
									<div class="post-meta">
										<ul class="list-inline">
											<li class="meta-date"><span><?php echo get_the_date(); ?></span></li>

										</ul>
									</div>
									
									<?php while( have_posts() ) : the_post();
                        $more = 1; // отображаем полностью всё содержимое поста
                 
                        the_content(); // выводим контент
                    endwhile; ?>
					</section>
							</article>
						</div>
					</div>
				</div>
			</section>
		</main><!-- /.enry-content -->

<?php get_footer(); ?>
