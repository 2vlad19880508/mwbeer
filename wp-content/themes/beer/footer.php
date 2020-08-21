	<!-- Footer -->
		<div class="footer-wrapper">



			 <!-- Secondary Footer -->
			<footer class="footer-secondary">
				<div class="container">
					<div class="row">
						<!-- Copyright -->
						<div class="footer-secondary-left col-lg-8 col-md-6 col-sm-6 col-xs-12">


						</div>
						<div class="footer-secondary-right col-lg-4 col-md-6 col-sm-6 col-xs-12">

							<!-- Social Icons -->
							<?php $value_contacts_mail = get_post_meta( 33, 'email', true ); ?>
<?php $value_contacts_fb = get_post_meta( 33, 'fb', true ); ?>
<?php $value_contacts_inst = get_post_meta( 33, 'inst', true ); ?>
							<ul class="social-icons list-unstyled list-inline">
								<li><a class="fa fa-envelope tooltipster" title="Email" href="><?php echo $value_contacts_mail; ?>"></a></li>
								<li><a class="fa fa-facebook tooltipster" title="Facebook" href="<?php echo $value_contacts_fb; ?>"></a></li>
								<li><a class="fa fa-instagram tooltipster" title="Instagram" href="<?php echo $value_contacts_inst; ?>"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Off-Page Content -->

		<!-- Mobile Navigation (Left Panel) -->
		<div id="panel-left">
			<div id="sidebar-wrapper" class="sidebar-wrapper">
				<nav class="mobile-navigation">
					<ul class="list-unstyled">
						<li><a href="http://mwbeer.com.ua">Главная</a></li>
								<li class="has-child"><a href="#">Сырье</a>
									<ul class="submenu submenu-default list-unstyled">
										<li><a href="/solod">Солод</a></li>
										<li><a href="/hmel">Хмель</a></li>
										<li><a href="/droggi">Дрожжи</a></li>
										<li><a href="/dop-ing">Дополнительные ингредиенты</a></li>
									</ul>
								</li>
								<li class="has-child"><a href="javascript:void(0);">Оборудование</a>
									<ul class="submenu submenu-default list-unstyled">
									<li><a href="/ustanovka-30">Пивоваренная установка 30 л</a></li>
										<li><a href="/ustanovka-50">Пивоваренная установка 50 л</a></li>
										<li><a href="/komplekt-100l">КОМПЛЕКТ ОБОРУДОВАНИЕ 100 Л</a></li>
										<li><a href="/bak-50">Ферматационный бак 50 л</a></li>
										<li><a href="/bak-50-chilerom">Ферматационный бак 50 л Чиллером</a></li>
											<li><a href="/%d0%b1%d0%b0%d0%ba-%d0%b4%d0%bb%d1%8f-%d0%b1%d1%80%d0%be%d0%b6%d0%b5%d0%bd%d0%b8%d1%8f/">БАК ИЗ НЕРЖАВЕЮЩЕЙ СТАЛИ</a></li>
									
										<li><a href="/complect-1">Комплект оборудования (Пивоварня, фермент. бак)</a></li>
										<li><a href="/complect-2">Комплект оборудования (Пивоварня, фермент. бак, станция холодильная, дробилка солода)</a></li>
										<li><a href="/drobilka">Дробилка для солода</a></li>
										<li><a href="/rozliv-v-taru">Розлив в тару</a></li>
									</ul>
								</li>


							<!-- Right Menu -->

								<li><a href="/projects">Наши проекты</a></li>
								<li class="has-child"><a href="#">Пивоварение</a>
									<ul class="submenu submenu-default list-unstyled">
										<li><a href="/pivovarenie-m-w">Пиваворение на оборудование M&W</a></li>
										<li><a href="/projects">Наши проекты</a></li>
										<li><a href="/home-pivovar">Курсы домашнего пивоварения</a></li>
									</ul>
								</li>

								<li><a href="/contacts">Контакты</a></li>
					</ul>
				</nav>
				<a class="close-sidebar" href="javascript:void(0)"><i class="fa fa-times"></i></a>
			</div>
		</div>



		<!-- Preloader -->
		<div class="introLoading"></div>

		<!-- Back to Top -->
		<div>
			<a class="back-to-top fa fa-chevron-up" href="javacript_3Avoid(0);"></a>
		</div>

		<!-- Modal Content -->
		<div class="remodal-bg">

	<?php $value = get_post_meta( 27, 'карта', true ); ?>
		<!-- Core -->
		<script src="<?php bloginfo('template_directory')?>/js/vendor/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/jquery-ui.min.js"></script>

		<!-- Vendor -->
		<script src="<?php bloginfo('template_directory')?>/js/vendor/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/jquery.selectric.min.js"></script>
		<script src="<?php echo $value; ?>"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/gmaps.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/jquery.waypoints.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/SmoothScroll.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/jquery.hoverIntent.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/jquery.simpler-sidebar.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/jquery.introLoader.pack.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/featherlight.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/featherlight.gallery.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/slick.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/jquery.tooltipster.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/imagesloaded.pkgd.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/isotope.pkgd.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/packery-mode.pkgd.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/parsley.min.js"></script>

        <script src="<?php bloginfo('template_directory')?>/js/jquery-validation/jquery.validate.js"></script>
        <script src="<?php bloginfo('template_directory')?>/js/jquery-validation/localization/messages_ru.js"></script>

		<!-- Vendor (Page Specific) -->
		<script src="<?php bloginfo('template_directory')?>/js/vendor/remodal.min.js"></script>
		<script src="<?php bloginfo('template_directory')?>/js/vendor/aos.js"></script>

		<!-- Theme -->
		<script src="<?php bloginfo('template_directory')?>/js/main.js"></script>
		<script>
			// (function() {
			// 	var $btns = $('.new-radio', '.cart-data__delivery');
			// 	var $fields = $('input[type=text]', '.cart-data__delivery .cart-data__addresses');
            //
			// 	$btns.click(function() {
			// 		var idx = $btns.index(this);
			// 		$fields.hide()
			// 			.eq(idx)
			// 			.show();
			// 	});
			// })();

			(function() {
				var total = 0;
				$('span', '.cart-products .cart-position__price').each(function() {
					var price =  parseInt($(this).text()) || 0;
					total += price;
				});
				$('#total-price').text(total);

                if ($('form#cart-form').length > 0) {
                    $('form#cart-form').validate({
                        lang : 'ru',
                        rules: {
                            first_name: {
                                required: true
                            },
                            last_name: {
                                required: true
                            },
                            delivery: {
                                required: true
                            },
                            payment: {
                                required: true
                            }
                        }
                    });
                }


			})();
		</script>
	</body>
</html>
