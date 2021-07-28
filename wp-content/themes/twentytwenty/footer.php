<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>


	<footer class="footer">
		<div class="container">
			<div class="footer__inner">
				<div class="footer__top">
				<a href="http://alpha-vynogradiv.net/" class="header__logo">
						<img style="max-width:170px;" src="/wp-content/uploads/2021/02/Alpha.png" alt="">
					</a>
					<?php
						wp_nav_menu([
							'menu' => 'footer__menu'
						]);
					?>
					<div class="footer__telephons">
						<ul>
							<li><a href="tel:0950717109">+38 095 07 17 109</a></li>
							<li><a href="tel:0970717109">+38 097 07 17 109</a></li>
							<li><a href="tel:0730717109">+38 073 07 17 109</a></li>
						</ul>
					</div>
					<a href="#" class="main__account">Особистий<br>кабінет</a>
				</div>
				
			</div>
		</div>
		<div class="footer__bot">
					<a>Сайт створений - <a target="_blank" style="color: #FBDC00; margin-left:5px;" href="https://uh-ty.site/" onclick="captureOutboundLink('https://uh-ty.site/'); return false;" >UHTY</a></a> 
				</div>
				
	</footer>

			<script type="text/javascript">
				var $ = jQuery;
				$(document).ready(function(){
					$('.slider').slick({
						infinite: true,
						autoplay: true,
      					dots: true,
						autoplaySpeed: 3000,
						fade: true,
						slidesToScroll: 1,
						arrows : false,
						draggable: false,
					})
				});
				
				
				$('.tel').mask('+38 (999) 999 99 99');
				$('.slider__second').slick({
					infinite: true,
						autoplay: true,
      					dots: false,
						autoplaySpeed: 5000,
						fade: true,
						slidesToScroll: 1,
						draggable: false,
				})
				
			</script>

					<script>
						$("#menu-item-8").click(function() { 
							$('html, body').animate({
								scrollTop: $("body").offset().top  
							}, 500); 
						});
						$("#menu-item-9").click(function() { 
							$('html, body').animate({
								scrollTop: $(".product").offset().top  
							}, 500); 
						});
						$("#menu-item-10").click(function() { 
							$('html, body').animate({
								scrollTop: $(".advantages").offset().top  
							}, 500); 
						});
						$("#menu-item-11").click(function() { 
							$('html, body').animate({
								scrollTop: $(".reviews").offset().top  
							}, 500); 
						});
						$("#menu-item-12").click(function() { 
							$('html, body').animate({
								scrollTop: $(".contacts").offset().top  
							}, 500);
						});
						$("#menu-item-25").click(function() { 
							$('html, body').animate({
								scrollTop: $("body").offset().top  
							}, 500); 
						});
						$("#menu-item-26").click(function() { 
							$('html, body').animate({
								scrollTop: $(".product").offset().top  
							}, 500); 
						});
						$("#menu-item-27").click(function() { 
							$('html, body').animate({
								scrollTop: $(".advantages").offset().top  
							}, 500); 
						});
						$("#menu-item-28").click(function() { 
							$('html, body').animate({
								scrollTop: $(".reviews").offset().top  
							}, 500); 
						});
						$("#menu-item-29").click(function() { 
							$('html, body').animate({
								scrollTop: $(".contacts").offset().top  
							}, 500);
						});
						$('.home__btn a').click(function(){
							$('html , body').animate({
								scrollTop: $('.advantages').offset().top
							},500)
						})
						$('.product__item-btn').click(function(){
							$('html , body').animate({
								scrollTop: $('.contact__form').offset().top
							},500)
						})
					</script>
					<script>
						
						$('.burger').click(function(){
							$('.header').animate({right:'0'},300)
							$('.burger').animate({opacity:'0'},100)
							$('.burger').removeClass('burger-active')
							$('.burger-close').addClass('burger-close-active')
							$('.burger-close').animate({opacity:'1',},100)
						})
						$('.burger-close').click(function(){
							$('.header').animate({right:'-100%'},300)
							$('.burger-close').animate({opacity:'0'},100)
							$('.burger-close').removeClass('burger-close-active')
							$('.burger').animate({opacity:'1'},100)
							$('.burger').addClass('burger-active')
						})
					</script>
				<script>
					 $('.sub-btn').click(function() {
							var serializeFormData = $('#form').serialize();
							
							$.ajax({
							type: 'POST',
							url: 'https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/form.php',
							data: serializeFormData,
							success: function(data) {
								alert('Дякуємо за вашу заявку, вона успішно відправлена!')
							},
							error:  function(data){
								alert('Внимание! произошла ошибка:' + data);
							}
							});
						});
				</script>
				
				<script>
					const form = document.querySelector('#form')

						let tel = document.querySelector('.tel')
						const adress = document.querySelector('.adress')
						const name = document.querySelector('.name')
						const selectTarif = document.querySelector('.select-tarif')
						const selectStreet = document.querySelector('.select-street')

						const btn = document.querySelector('.sub-btn')
							btn.onclick = () =>{
								tel.value = ''
								name.value = ''
								adress.value = ''
								selectTarif.value = 'Лайт'
								
							}

				</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>

<script type="text/javascript">

    //  $(".select5").chosen();
//	$(".select4").chosen();

</script>

		
<?php wp_footer(); ?>
		
	</body>
</html>
