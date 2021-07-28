<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


get_header();
?>

<div class="burger burger-active">
	<span class="first"></span>
	<span class="second"></span>
	<span class="third"></span>
</div>

<div class="burger-close">
	<span class="first"></span>
	<span class="second"></span>
	<span class="third"></span>
</div>

<section class="home">
	
<div class="container">
	<div class="home__text">
		<h1 style="display:block;"  class="home__title">AlphaNet</h1>
		<p style="display:block;" class="home__descr">
		Обирай якісне підключення
	</p>
		<div class="home__btn">
			<a style="cursor:pointer;">Дізнатися більше</a>
		</div>
	</div>
</div>
	
	
	<div class="slider">
		<div class="slider__item">
				<img src="/wp-content/uploads/2021/02/Новый-проект.jpg" alt="">
		</div>
		<div class="slider__item">
				<img src="/wp-content/uploads/2021/02/Новый-проект-1-min.jpg" alt="">
		</div>
		<div class="slider__item">
				<img src="/wp-content/uploads/2021/02/Новый-проект.jpg" alt="">
		</div>
	</div>
	
	
</section>

<div class="advantages">
	<div class="container">
		<div class="advantages__title">Наші переваги</div>
		<div class="advantages__inner">
			<div class="advantages__item">
				<div class="advantages__item-title advantages__item-title-1">Технологія Gigabit PON</div>
				<div class="advantages__item-descr">
				Послуги надаємо по оптоволоконних мережах
				зі швидкістю до  1 Gb/s.
				</div>
			</div>
			<div class="advantages__item">
				<div class="advantages__item-title advantages__item-title-2">Оперативність</div>
				<div class="advantages__item-descr">
					Наші спеціалісти стараються виконувати
					ваші прохання за короткий термін.
				</div>
			</div>
			<div class="advantages__item">
				<div class="advantages__item-title advantages__item-title-3">Надійність</div>
				<div class="advantages__item-descr">
				Гарантуємо стабільний зв'язок, резервні
				канали зв'язку, безперебійне живлення.
				</div>
			</div>
			<div class="advantages__item">
				<div class="advantages__item-title advantages__item-title-4">Зручність</div>
				<div class="advantages__item-descr">
				Ми зробили особистий кабінет максимально
				комфортним та зручним в користуванні.
				</div>
			</div>
			<div class="advantages__item">
				<div class="advantages__item-title advantages__item-title-5">Безперервний сигнал</div>
				<div class="advantages__item-descr">
				Гроза, сніг або будь яка несприятлива
				погода не приводять до збою сигналу.
				</div>
			</div>
			<div class="advantages__item">
				<div class="advantages__item-title advantages__item-title-6">Ексклюзивна послуга</div>
				<div class="advantages__item-descr">
				Оптика безпосередньо в квартирах багатоповерхівок.
				</div>
			</div>
		</div>
	</div>
</div>

<section class="product">
	 <div class="container">
		<div class="product__title">Тарифні плани ALPHANET</div>
		<!-- <div class="product__items-title">
			<div class="product__item-title product-active">Інтернет</div>
			<div class="product__item-title">Онлайн ТБ</div>
			<div class="product__item-title">Обладнання</div>
		</div> -->
	</div> 
		<hr>
	<div class="container">
		<div class="product__items">
			<div class="product__item">
				<div class="product__item-prise">Лайт</div>
				<ul>
					<li>Швидкість <span>20 Мбіт/c</span></li>
					<li>Вартість <span>80 ₴/міс</span></li>
				</ul>
				<div class="product__item-btn">Підключити</div>
			</div>
			<div class="product__item">
				<div class="product__item-prise">Стандарт</div>
				<ul>
					<li>Швидкість <span>50 Мбіт/c</span></li>
					<li>Вартість <span>100 ₴/міс</span></li>
				</ul>
				<div class="product__item-btn">Підключити</div>
			</div>
			<div class="product__item">
				<div class="product__item-prise">Комфорт</div>
				<ul>
					<li>Швидкість <span>100 Мбіт/c</span></li>
					<li>Вартість <span>130 ₴/міс</span></li>
				</ul>
				<div class="product__item-btn">Підключити</div>
			</div>
		</div>
		<div class="product__item-text">*При переході від іншого провайдера підключення безкоштовне*</div>
	</div>
	
</section>


<!-- <section class="about">
	<div class="container">
		<div class="about__title">Про AlphaNet</div>
		<div class="about__inner">
			<div class="about__img">
				<img src="/wp-content/uploads/2021/02/4040580-zakon-yarovoy-est-li-vykhod-min.jpg" alt="">
			</div>
			<div class="about__text">
			<span>ALPHA</span> - інтерет провайдер, який надає свої послуги в місті Виноградів Послуги надаються по 
			оптоволоконних лініях зі швидкістю до 1Gb/s Завдяки технології Gigabit PON, сучасному 
			устаткуванню і європейським стандартам роботи з клієнтами, - 
			абоненти AlphaNet забезпечені надійним інтернетом.
			</div>
		</div>
	</div>
</section> -->

<hr class="alpha-hr">
<?php

?>
<section class="contact__form">
	<div class="container">
		<div class="contact__form-inner">
			<div class="contact__form-text">
				<div class="contact__form-title">Заявка на підключення</div>
				<div class="contact__form-descr">Заповніть форму нижче і ми з'яжемося з Вами в найближчий термін</div>
			</div>
			<div class="contact__form-block">
				<!-- <div class="form-title">Заявка на підключення</div> -->
				<form id="form"  method="post">
				
					<p>Оберіть тариф</p>
					<select name="select" class="select-tarif">	
						<option value="Лайт">Лайт</option>
						<option value="Стандар">Стандарт</option>
						<option value="Комфорт">Комфорт</option>
					</select>
					<p>Ім'я та прізвище</p>
					<input type="text" class="name" placeholder="Зубенко Михайло" name="name">
					<p>Ваш номер телефон</p>
					<input type="tel" class="tel" placeholder="+38 050 432 11 00" name="tel">
					<p>Виберіть населений пункт</p>

					<input type="text" class="search__street">
					<script type="text/javascript">
						document.querySelector('.search__street').oninput = function(){
							let val = this.value.trim()
							let allItems = document.querySelectorAll('.livesearch option')
							// for (let i=0;i<allItems.length;i++){
							// 	if(allItems.innerText.search(val) == -1){
							// 		allItems.style.display = 'none'
							// 	}
							// 	else
							// 	allItems.style.display = 'block'
							// }
							let choose = document.querySelector('.livesearch')
							let input = document.querySelector('.search__street')
							choose.onclick = () =>{
								choose.style.display = 'none'
								input.style.zIndex = '10'
							}
							
						}
					</script>
						<select name="select4" class="select-street select4" >
						<option>Оберіть</option>
						<?php
							$host = '127.0.0.1:3306'; // адрес сервера 
							$database = 'wordpress'; // імя бази даних
							$user = 'wordpressuser'; // імя користувача
							$password = '123456'; // пароль
							$link = mysqli_connect($host, $user, $password, $database) ;
							$sql = mysqli_query($link,"SELECT * FROM `cityes`");
							$count = mysqli_num_rows($sql);

							for($i=0;$i<$count;$i++){
								$text = mysqli_fetch_assoc($sql);
							//if($text['name']=='Виноградів'){
							//		echo '<option selected value="' . $text['name'] . '"' . '>' . $text['name'] . '</option>';
							//	}
							//	else
								echo '<option value="' . $text['name'] . '"' . '>' . $text['name'] . '</option>';
							}


						//?>
					</select>
					<p>Виберіть вулицю</p>
					<select  class="select-street select5 " name="select2"> 
					  <option>Оберіть</option>
						//<?php
                                                  //      $host = '127.0.0.1:3306'; // адрес сервера
                                                    //    $database = 'wordpress'; // імя бази даних
                                                      //  $user = 'wordpressuser'; // імя користувача
                                                       // $password = '123456'; // пароль
                                                      //  $link = mysqli_connect($host, $user, $password, $database) ;
                                                       // $sql = mysqli_query($link,"SELECT * FROM `vinStrit`");
                                                       // $count = mysqli_num_rows($sql);

                                                      //  for($i=0;$i<$count;$i++){
                                                        //        $text = mysqli_fetch_assoc($sql);
                                                              
                                                         //       echo '<option value="' . $text['name'] . '"' . '>' . $text['street'] . '</option>';
                                                       // }


                                                //?>

					</select>
			<script type="text/javascript">
					    const select5 = document.querySelector('.select-street')

    select5.addEventListener('change', ()=>{
        
        if(select5.value=="Комяти"){
            const xhr = new XMLHttpRequest
            xhr.onreadystatechange = function(){
                if(this.status == 200 && this.readyState == 4){
                    myFunction(this.response)
                }
            }

            xhr.open("GET","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/getKomyatyStreets.php")
            xhr.send()
            
            function myFunction(data){
                const myData = JSON.parse(data)
                let HTML = ``
                let select6 = document.querySelector('.select5')
                myData.forEach(mydata=> {
                    HTML+=`
                        <option value="${mydata['name']}" >${mydata['name']}</option>
                    `
                    

                });
                select6.innerHTML = HTML
               // console.log(HTML)
            }
            
        }
        else if(select5.value=="Виноградів"){
            const xhr = new XMLHttpRequest
            xhr.onreadystatechange = function(){
                if(this.status == 200 && this.readyState == 4){
                    myFunction(this.response)
                }
            }

            xhr.open("GET","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/getVynogradivStreets.php")
            xhr.send()
            
            function myFunction(data){
                const myData = JSON.parse(data)
                let HTML = ``
                let select6 = document.querySelector('.select5')
                myData.forEach(mydata=> {
                    HTML+=`
                        <option value="${mydata['name']}">${mydata['name']}</option>
                    `
                    

                });
                select6.innerHTML = HTML
                //console.log(HTML)
            }
            
        }
        else if(select5.value=="Лемаковиця"){
            const xhr = new XMLHttpRequest
            xhr.onreadystatechange = function(){
                if(this.status == 200 && this.readyState == 4){
                    myFunction(this.response)
                }
            }

            xhr.open("GET","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/getLemakovycyaStreets.php")
            xhr.send()
            
            function myFunction(data){
                const myData = JSON.parse(data)
                let HTML = ``
                let select6 = document.querySelector('.select5')
                myData.forEach(mydata=> {
                    HTML+=`
                        <option value="${mydata['name']}">${mydata['name']}</option>
                    `
                    

                });
                select6.innerHTML = HTML
               // console.log(HTML)
            }
            
        }
        else if(select5.value=="Олешник"){
            const xhr = new XMLHttpRequest
            xhr.onreadystatechange = function(){
                if(this.status == 200 && this.readyState == 4){
                    myFunction(this.response)
                }
            }

            xhr.open("GET","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/getOleshnykStreets.php")
            xhr.send()
            
            function myFunction(data){
                const myData = JSON.parse(data)
                let HTML = ``
                let select6 = document.querySelector('.select5')
                myData.forEach(mydata=> {
                    HTML+=`
                        <option value="${mydata['name']}">${mydata['name']}</option>
                    `
                    

                });
                select6.innerHTML = HTML
                //console.log(HTML)
            }
            
        }
        else if(select5.value=="Букове"){
            const xhr = new XMLHttpRequest
            xhr.onreadystatechange = function(){
                if(this.status == 200 && this.readyState == 4){
                    myFunction(this.response)
                }
            }

            xhr.open("GET","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/getBukoveStreets.php")
            xhr.send()
            
            function myFunction(data){
                const myData = JSON.parse(data)
                let HTML = ``
                let select6 = document.querySelector('.select5')
                myData.forEach(mydata=> {
                    HTML+=`
                        <option value="${mydata['name']}">${mydata['name']}</option>
                    `
                    

                });
                select6.innerHTML = HTML
               // console.log(HTML)
            }
            
        }
        else if(select5.value=="Онок"){
            const xhr = new XMLHttpRequest
            xhr.onreadystatechange = function(){
                if(this.status == 200 && this.readyState == 4){
                    myFunction(this.response)
                }
            }

            xhr.open("GET","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/getOnokStreets.php")
            xhr.send()
            
            function myFunction(data){
                const myData = JSON.parse(data)
                let HTML = ``
                let select6 = document.querySelector('.select5')
                myData.forEach(mydata=> {
                    HTML+=`
                        <option value ="${mydata['name']}">${mydata['name']}</option>
                    `
                    

                });
                select6.innerHTML = HTML
               // console.log(HTML)
            }
            
        }

    })
					</script>
				<!-- <select name="select3" class="select-street livesearch" > -->
						<?php
						//	$host = '127.0.0.1:3306'; // адрес сервера 
						//	$database = 'wordpress'; // імя бази даних
						//	$user = 'wordpressuser'; // імя користувача
						//	$password = '123456'; // пароль
						//	$link = mysqli_connect($host, $user, $password, $database) ;
						//	
						//	if($link == false){
  						//	echo 'не удалось подключится к базе';
  						//	echo mysqli_connect_error();
  						//	exit();
						//	}
						//	$sql = mysqli_query($link,"SELECT * FROM `streetsKomyaty`");
						//	$count = mysqli_num_rows($sql);
						//	for($i=0;$i<$count;$i++){
						//		$text = mysqli_fetch_assoc($sql);
						//		echo '<option value="' . $text['name'] . '"' . '>' . $text['name'] . '</option>';
						//	}

						//	mysqli_close($link);
						?>
				<!-- </select>-->

					<p>Номер квартири або будинка</p>
					<input class="adress" type="text" placeholder="№99 або 9/99" name="adress">
					
					<a  class="sub-btn">Замовити</a>
					
				</form>
				
			</div>
		</div>
	</div>
</section>

<hr style="height: 2px;
	background-color: #C4C4C4; border:none; margin-bottom:0;">

<section class="reviews">
	<div class="container">
		<div class="reviews__title">
		Відгуки про нас
		</div>
		<div class="reviews__sub-title">
		Більше відгуків про нас ви знайдете в нашому <a href="https://www.facebook.com/alpha.vynogradiv/">Facebook</a>
		</div>
		<div class="slider__second">
		<div class="slider__second-item">
				<div class="slider__second-img">
					<img src="/wp-content/uploads/2021/02/photo_2021-02-17_12-17-12-2.jpg" alt="">
				</div>
					<div class="slider__second-inner">
						<div class="slider__second-title">Василь Андрійчук</div>
						<div class="slider__second-text">
							Хай каже хто що хоче, але при заявлених 50мб/cек,
							навіть ввечері швидкість доходить до 52мб/cек. Супер!
						</div>
					</div>
			</div>
			<div class="slider__second-item">
				<div class="slider__second-img">
					<img src="/wp-content/uploads/2021/02/photo_2021-02-17_12-30-25.jpg" alt="">
				</div>
					<div class="slider__second-inner">
						<div class="slider__second-title">Йосип Роман</div>
						<div class="slider__second-text">
							Рекомендую, інтернет супер, користуємося і задоволені
						</div>
					</div>
			</div>
			<div class="slider__second-item">
				<div class="slider__second-img">
					<img src="/wp-content/uploads/2021/02/photo_2021-02-17_12-17-12.jpg" alt="">
				</div>
					<div class="slider__second-inner">
						<div class="slider__second-title">Людмила Сворень</div>
						<div class="slider__second-text">
							Якість і ціна на вищому рівні. Рекомендую!
						</div>
					</div>
			</div>
			<div class="slider__second-item">
				<div class="slider__second-img">
					<img src="/wp-content/uploads/2021/02/photo_2021-02-17_12-30-24.jpg" alt="">
				</div>
					<div class="slider__second-inner">
						<div class="slider__second-title">Наталія Феєр</div>
						<div class="slider__second-text">
							Інтернет працює без перебоїв. Дякую!
						</div>
					</div>
			</div>
			<div class="slider__second-item">
				<div class="slider__second-img">
					<img src="/wp-content/uploads/2021/02/photo_2021-02-17_12-30-27.jpg" alt="">
				</div>
					<div class="slider__second-inner">
						<div class="slider__second-title">Алла Гевкан</div>
						<div class="slider__second-text">
							Рекомендую, чудовий інтернет, класні умови для переходу
							та самі кращі тарифи
						</div>
					</div>
			</div>
		</div>
	</div>
</section>
<section class="contacts">
	<div class="container">
		<div class="contacts__title">
		Наші контакти
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.465643743378!2d23.024205551404933!3d48.13982747912172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47383bcef4144b4b%3A0x4e7f1113274974e7!2z0JDQu9GM0YTQsNC90LXRgiDQktC40L3QvtCz0YDQsNC00ZbQsiAo0JDQu9GM0YTQsCAtINCG0L3RgtC10YDQvdC10YIg0L_RgNC-0LLQsNC50LTQtdGAKQ!5e0!3m2!1sru!2sua!4v1616747354845!5m2!1sru!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			<div class="contacts__inner">
				<a href="tel:0950717109" class="telephone__vodafone">095 071 71 09</a>
				<a href="tel:0970717109" class="telephone__kyivstar">097 071 71 09</a>
				<a href="tel:0730717109" class="telephone__life">073 071 71 09</a>
				<a href="mailto:alpha.vinogradiv@gmail.com" class="contacts__mail">alpha.vinogradiv@gmail.com</a>
				<a class="contacts__adress">
				<?php




?>м. Виноградів, вул. Миру, 43</a>
			</div>
		</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
					



<?php get_footer(); 


