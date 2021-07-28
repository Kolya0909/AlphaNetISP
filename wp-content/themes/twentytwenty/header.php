<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link href="https://fonts.googleapis.com/css2?family=Podkova:wght@800&display=swap" rel="stylesheet">
		<link rel="shortcut icon" href="/wp-content/uploads/2021/02/alfa-logo.jpg" type="image/x-icon">
		
		<meta property="og:image" content="/wp-content/uploads/2021/02/alfa-logo.jpg">
		<title>AlphaNet</title>
		<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=G-YSB9H9LF85"></script>
			<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-YSB9H9LF85');
			</script>
			<script>
/**
* Функция, отслеживающая клик по исходящей ссылке в Google Аналитике.
* Эта функция принимает в качестве аргумента строку с действительным URL и использует ее
* как ярлык события. Если указать beacon в качестве метода передачи, данные обращений
* будут отправляться с использованием метода navigator.sendBeacon в поддерживающих его браузерах.
*/
var captureOutboundLink = function(url) {
   ga('send', 'event', 'outbound', 'click', url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
}
</script>

<!-- Facebook Pixel Code --> <script> !function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 
n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; 
n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, 
document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '875803726349677'); fbq('track', 
'PageView'); fbq('track', 'Lead'); </script> <noscript><img height="1" width="1" style="display:none" 
src="https://www.facebook.com/tr?id=875803726349677&ev=PageView&noscript=1" /></noscript> <!-- End Facebook Pixel Code --> 

<?php wp_head(); ?>

	</head>

	<body>

		<header class="header">
			<div class="container">
				<div class="header__inner">
					<a href="http://alpha-vynogradiv.net/" class="header__logo">
						<img style="max-width:170px;" src="/wp-content/uploads/2021/02/Alpha.png" alt="">
					</a>
					<?php
						wp_nav_menu([
							'menu' => 'header__menu'
						]);
					?>
					<div class="header__telephons">
						<ul>
							<li><a href="tel:0950717109">+38 095 07 17 109</a></li>
							<li><a href="tel:0970717109">+38 097 07 17 109</a></li>
							<li><a href="tel:0730717109">+38 073 07 17 109</a></li>
						</ul>
					</div>
					<div class="header__networks">
						<ul>
							<li><a style="height: 30px; width: 30px; display: block;" href="https://www.facebook.com/vynogradiv.alpha"><img src="/wp-content/uploads/2021/02/facebook_icon-icons.com_59205.png" alt=""></a></li>
							<li><a href="mailto:alpha.vinogradiv@gmail.com"><img src="/wp-content/uploads/2021/02/google_mail_gmail_logo_icon_159346-1.png" alt=""></a></li>
						</ul>
					</div>
					
						<a href="https://next.privat24.ua/payments/form/%7B%22token%22%3A%223a40e495-da4e-451b-ab3b-96bf926a8221%22%7D" class="paysys-link">Оплатити</a>
					<script>
					const link = document.querySelector('.paysys-link')
					link.href= 'https://next.privat24.ua/payments/form/{"token" : "75ab142941f53a2e7bd9aa1f52be7f6f094522ru"}'
					</script>
					<a href="https://172.16.10.2:9443" class="main__account">Особистий<br>кабінет</a>
				</div>
			</div>
		</header>

		
