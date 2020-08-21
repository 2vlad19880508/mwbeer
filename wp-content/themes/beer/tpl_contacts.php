<?php
/*
Template Name: Котакты
*/
get_header(); ?>
	
			

			
			<!-- Page Header -->
			<header class="header page-header image-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-title"><span>Контакты</span></h1>
						</div>						
					</div>
					<div class="col-md-4">
					<div class="contact-details">
								<ul class="list-unstyled">
								<?php $post_id = get_the_ID(); ?>
<?php $value_contacts_1 = get_post_meta( $post_id, 'адрес', true ); ?>
<?php $value_contacts_tel1 = get_post_meta( $post_id, 'телефон1', true ); ?>
<?php $value_contacts_tel2 = get_post_meta( $post_id, 'телефон2', true ); ?>
									<li><i class="fa fa-map-marker"></i> <strong><?php echo $value_contacts_1; ?></strong></li>
									<li><i class="fa fa-phone"></i> <?php echo $value_contacts_tel1; ?></li>
									<li><i class="fa fa-fax"></i> <?php echo $value_contacts_tel2; ?></li>
								</ul>
		</div>
													
														<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2534.8837951239!2d30.26264831573516!3d50.554930979489946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472b31f91ff7b191%3A0x4e1ac723ce709048!2z0JLRltC00LTRltC7INC_0YDQvtC00LDQttGW0LIgItCf0JDQoNCa0KLQkNCj0J0iIC8gIlBBUktUT1dOIg!5e0!3m2!1sru!2scz!4v1545078321928" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							
						</div>	
				</div>			
			</header>
		</div>

		<main class="entry-content">

			

		</main><!-- /.enry-content -->
		<?php get_footer(); ?>