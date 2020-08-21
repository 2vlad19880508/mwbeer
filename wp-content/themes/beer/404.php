<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
		<title>M&amp;W | Солод</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-57.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-114.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-72.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-144.png" />

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Anonymous+Pro%7CAnton" rel="stylesheet">

		<!-- Vendor -->
		<!--<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/normalize.css">-->
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/animate.min.css">
		<!--<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/introLoader.min.css">-->
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/featherlight.min.css">
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/slick.css">
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/slick-theme.css">
		<!--<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/tooltipster.css">-->
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/selectric.custom.css">
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/main.css">

		<!-- Page Specific Styles -->
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/aos.css">
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/remodal.css">
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/remodal-default-theme.custom.css">
		<link rel="stylesheet" type="text/css" href="https://mwbeer.com.ua/wp-content/themes/beer/css/custom.css">

		<!-- Modernizr -->
		<script src="https://mwbeer.com.ua/wp-content/themes/beer/js/vendor/modernizr.js"></script>


		<!--Корзина-->

<script>
function order(productID)
{
    $.ajax({
        url:'/wp-admin/admin-ajax.php?action=add_to_cart',
        method: 'POST',
        data: {
            product_id: productID
        },
        success: function(){
            var ord = 0;
            document.getElementById("text").innerHTML = parseInt(document.getElementById("text").innerHTML)+1
            ord = ord +1;
            var cena = "";
            document.getElementById("text2").innerHTML = parseInt(document.getElementById("text2").innerHTML)+cena
        }
    });
}

function sendOrder()
{
    $.ajax({
        url:'/wp-admin/admin-ajax.php?action=order_cart',
        method: 'POST',
        dataType: 'JSON',
        data: $('form#cart-form').serialize(),
        success: function (response) {
            if (response.laqpay_form != undefined) {
                $('h3.section-heading').html('Спасибо! Оплатите ваш заказ');
                $('form#cart-form').after(
                    '<div style="text-align: center">' + response.laqpay_form + '</div>'
                );
            } else {
                $('h3.section-heading').html('Спасибо! Ваш заказ принят');
            }

            $('form#cart-form').remove();
        }
    });
}

function deleteProduct(productID)
{
    $.ajax({
        url:'/wp-admin/admin-ajax.php?action=delete_from_cart',
        method: 'POST',
        data: {
            product_id: productID
        },
        success: function(){
            // перезагрузка страницы
            document.location.href = document.location.href;
        }
    });
}
</script>


<a class="cart-tag" href="http://mwbeer.com.ua/cart">
	<!-- <span>товары</span> -->
	<div class="cart-tag__count" id="text">0</div>
	<span>КОРЗИНА</span>
	
</a>

	<!--Корзина-->
	</head>

				<body class="page dark equipment">
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../../../browsehappy.com/default.htm">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div class="header-wrap" style="background-image: url(https://mwbeer.com.ua/wp-content/uploads/2018/09/11.jpg);">
			
			<!-- Navigation -->
			<div class="container-fluid">
				<div class="topbar topbar-hero row">
					<div class="nav-wrapper col-md-12 hidden-sm hidden-xs">
						<nav class="list-unstyled main-navigation">

							<!-- Left Menu -->
								<ul class="list-unstyled list-inline topbar-left col-md-5">
								<li><a href="http://mwbeer.com.ua">Главная</a></li>
								<li class="has-child current"><a href="#">Сырье</a>
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
										<li><a href="/bak-50">Ферматационный бак 50 л</a></li>
										<li><a href="/bak-50-chilerom">Ферматационный бак 50 л Чиллером</a></li>
										<li><a href="/komplekt-100l">КОМПЛЕКТ ОБОРУДОВАНИЕ 100 Л</a></li>
										<li><a href="/complect-1">Комплект оборудования MWC-05</a></li>
										<li><a href="/complect-2">Комплект оборудования MWC-050F</a></li>
										<li><a href="/drobilka">Дробилка для солода</a></li>
										<li><a href="/rozliv-v-taru">Розлив в тару</a></li>
									</ul>
								</li>
							</ul>

							<!-- Right Menu -->
							<ul class="list-unstyled list-inline topbar-right col-md-5">
								<li><a href="/projects">Наши проекты</a></li>
								<li class="has-child"><a href="#">Пивоварение</a>
									<ul class="submenu submenu-default list-unstyled">
										<li><a href="/pivovarenie-m-w">Пиваворение на оборудование M&W</a></li>
										<li><a href="/individualnaya-varka/">Индивидуальная варка</a></li>
										<li><a href="/home-pivovar">Курсы домашнего пивоварения</a></li>
									</ul>
								</li>

								<li><a href="/contacts">Контакты</a></li>
							</ul>
						</nav>
					</div>

					<!-- Branding -->
					<div class="branding-wrapper">
						<a class="branding-logo" href="http://mwbeer.com.ua"><img alt="" src="https://mwbeer.com.ua/wp-content/themes/beer/img/logo.png" /></a>
					</div>

					<!-- Mobile Navigation Toggle -->
					<div class="mobile-toggle topbar-right col-sm-6 col-xs-6 hidden-md hidden-lg">
						<a href="javascript:void(0);" class="toggle-panel"><i class="fa fa-bars"></i></a>
					</div>
				</div>
			</div>
	
			

			
		
			<!-- Page Header -->
			<header class="header page-header image-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-title"><span>404 Страница</span></h1>
						</div>
					</div>
				</div>			
			</header>
		</div>

		<!-- Page Content -->
		<main class="entry-content">
			
		


			<section class="page-section">
				<div class="container">
				<h3 class="section-heading"><span>Страница не найдена! Прейти на <a href="<?php echo get_home_url(); ?>" style="color:#e0dfde; text-decoration:underline;" >главную</a></span></h3>
					<div class="row isotope-wrapper isotope-beers-wrapper">
						<div class="isotope isotope-beers gutter">
							
								
																
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