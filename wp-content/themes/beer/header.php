<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?>
<?php if ( $_SERVER['REQUEST_URI'] != strtolower( $_SERVER['REQUEST_URI']) ) {
    header('Location: https://'.$_SERVER['HTTP_HOST'] . 
            strtolower($_SERVER['REQUEST_URI']), true, 301);
    exit();
} ?>
<!doctype html>
<html class="no-js" lang="ru">
	<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136312458-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136312458-1');
</script>


		<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
		<title><?php the_title(); ?></title>		
		<?php wp_head(); ?> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-57.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-114.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-72.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-144.png" />

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Anonymous+Pro%7CAnton" rel="stylesheet">

		<!-- Vendor -->
		<!--<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/normalize.css">-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/animate.min.css">
		<!--<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/introLoader.min.css">-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/featherlight.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/slick.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/slick-theme.css">
		<!--<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/tooltipster.css">-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/selectric.custom.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/main.css">

		<!-- Page Specific Styles -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/aos.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/remodal.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/remodal-default-theme.custom.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/custom.css">

		<!-- Modernizr -->
		<script src="<?php bloginfo('template_directory')?>/js/vendor/modernizr.js"></script>


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
            var cena = "<? echo $value ?>";
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
	<div class="cart-tag__count" id="text"><?= @Cart::getCount() ?></div>
	<span>КОРЗИНА</span>
	
</a>

	<!--Корзина-->
 <a href="#win2" class="cons-tag" >
	
	<span>Заказать <br>звонок</span>
	
</a>

  <!-- Модальное окно 2 -->
        <a href="#x" class="overlay" id="win2"></a>
        <div class="popup">
            <center>
            <h2>Укажите Ваше имя и телефон</h2>
			 <h3>Наш менеджер свяжется с Вами в ближайшее время</h3>
			<form id="application" action="https://mwbeer.com.ua/application.php" method="POST" name=" application ">
				<input name="name" id="applicationName" maxlength="20" placeholder="Имя" required />
				<input name="stel" type="tel" id="applicationStel" pattern="+38[0-9]{10}" minlength="12" maxlength="12" placeholder="Тел. +38(000)000 000 00"  />
				<button class="applicationButton" type="submit" form="application"> ЗАКАЗАТЬ ЗВОНОК</button>  
			</form>
            <a class="close" title="Закрыть" href="#close"></a>
			</center>
        </div>


	</head>

	<?php $post_id = get_the_ID(); ?>
<?php $value = get_post_meta( $post_id, 'изображение_в_шапке_сайта', true ); ?>
	<?php if ($post_id == '2') { ?>
		<body class="home">
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div class="hero-wrap" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">

			<?php } elseif ($post_id == '570') { ?>
			
			<body class="home">
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div class="hero-wrap" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">

			<?php } elseif ($post_id == '33') { ?>

			<body class="page contact">
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../../../browsehappy.com/default.htm">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div class="hero-wrap" style="background-image: url(<?php the_post_thumbnail_url(); ?>); height: 120vh;">

		<?php } elseif ($post_id == '51' || $post_id == '82' || $post_id == '99') { ?>

		<body class="page dark">
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../../../browsehappy.com/default.htm">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div class="header-wrap" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">

		<?php } else { ?>
		<body class="page dark equipment">
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../../../browsehappy.com/default.htm">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div class="header-wrap" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
			<?php } ?>

			<!-- Navigation -->
			<div class="container-fluid">
				<div class="topbar topbar-hero row">
					<div class="nav-wrapper col-md-12 hidden-sm hidden-xs">
						<nav class="list-unstyled main-navigation">

							<!-- Left Menu -->
								<ul class="list-unstyled list-inline topbar-left col-md-5">
								<?php if ($post_id == '2') { ?><li class="current"><?php } else { ?><li><?php } ?><a href="http://mwbeer.com.ua">Главная</a></li>
								<?php if ($post_id == '2') { ?><li class="has-child current"><?php } else { ?><li class="has-child current"><?php } ?><a href="#">Сырье</a>
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
										<li><a href="/%d0%b1%d0%b0%d0%ba-%d0%b4%d0%bb%d1%8f-%d0%b1%d1%80%d0%be%d0%b6%d0%b5%d0%bd%d0%b8%d1%8f/">БАК ИЗ НЕРЖАВЕЮЩЕЙ СТАЛИ</a></li>
										<li><a href="/komplekt-100l">КОМПЛЕКТ ОБОРУДОВАНИЕ 100 Л</a></li>
										
										<li><a href="/complect-1">Комплект оборудования MWC-05</a></li>
										<li><a href="/complect-2">Комплект оборудования MWC-050F</a></li>
										<li><a href="/dop-oborudovanie-2">ДИСТИЛЯТОР</a></li>
										<li><a href="/drobilka">Дробилка для солода</a></li>
										<li><a href="/rozliv-v-taru">Розлив в тару</a></li>
									</ul>
								</li>
							</ul>

							<!-- Right Menu -->
							<ul class="list-unstyled list-inline topbar-right col-md-5">
								<?php if ($post_id == '38' || $post_id == '42' || $post_id == '45' || $post_id == '47' ) { ?><li class="current"><?php } else { ?><li><?php } ?><a href="/projects">Наши проекты</a></li>
								<li class="has-child"><a href="#">Пивоварение</a>
									<ul class="submenu submenu-default list-unstyled">
								        <li><a href="/individualnaya-varka/">Заказная варка</a></li>
										<li><a href="/home-pivovar">Курсы домашнего пивоварения</a></li>
										<li><a href="https://mwbeer.com.ua/oborudovanie-dla-pivovareniya-cena/">Оборудование для пивоварни цена</a></li>
										<li><a href="/pivovarenie-m-w">Пиваворение на оборудование M&W</a></li>
										<li><a href="/kupit-domashnuu-pivovarnu-v-kieve-2">КУПИТЬ ДОМАШНЮЮ ПИВОВАРНЮ В КИЕВЕ</a></li>

									</ul>
								</li>

								<?php if ($post_id == '33') { ?><li class="current"><?php } else { ?><li><?php } ?><a href="/contacts">Контакты</a></li>
							</ul>
						</nav>
					</div>

					<!-- Branding -->
					<div class="branding-wrapper">
						<a class="branding-logo" href="http://mwbeer.com.ua"><img alt="" src="<?php bloginfo('template_directory')?>/img/logo.png" /></a>
					</div>

					<!-- Mobile Navigation Toggle -->
					<div class="mobile-toggle topbar-right col-sm-6 col-xs-6 hidden-md hidden-lg">
						<a href="javascript:void(0);" class="toggle-panel"><i class="fa fa-bars"></i></a>
					</div>
				</div>
			</div>
