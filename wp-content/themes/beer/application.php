<?php
/*
Template Name: Спасибо
*/
get_header(); ?>
	
			

<meta http-equiv="Refresh" content="3; URL=https://mwbeer.com.ua/"> 			
		
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
			
		<section class="page-section">
				<div class="container">
					<div class="row isotope-wrapper isotope-beers-wrapper">
						<div class="isotope isotope-beers gutter">
						
									<h2>Наш менеджер свяжется с Вами в ближайшее время!</h2>
							
						</div>
					</div>

					<!-- Load More -->
					<!-- <div class="load-more-wrapper">
						<a href="javascript:void(0);"><i class="fa fa-refresh"></i> Load More</a>
					</div> -->
				</div>
			</section>
              
<?php 

$sendto   = "vlad19880508@gmail.com"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['tel']; // номер телефона 
$userenquiry = $_POST['enquiry']; // номер телефона 



// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Номер телефона:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>Описание:</strong> ".$userenquiry."</p>\r\n";

$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center><img src='spasibo.png' width=100%></center>";
} else {
	echo "<center><img src='images/ne-otpravleno.png'></center>";
}

?>

</body>
</html>