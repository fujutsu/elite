<?php
/*
 * Elite functions 
 *
 * @since Elite 1.0
 */
 
/*
function elite_scripts() {
	
	wp_enqueue_style( 'elite-style', esc_url( get_template_directory_uri() ) . '/stylesheets/style.css');

	wp_enqueue_script( 'elite-script', esc_url( get_template_directory_uri() ) . '/js/script.js', array(), false, true  );
	
}
add_action( 'wp_enqueue_scripts', 'elite_scripts', 11); 
 */

 
/* Включаем админ панель не в админке */
if(is_admin()){
	add_filter('show_admin_bar', '__return_true'); // включить
	show_admin_bar( $show );
}



/* Отправка формы "Напишите нам" */
function mail_send(){
	if(  isset($_POST['form_name']) and trim($_POST['form_name']) != '' and  isset($_POST['form_email']) and trim($_POST['form_email']) != '' and isset($_POST['form_message']) and trim($_POST['form_message']) != '' ){ //Проверка отправилось ли наше поля name и не пустые ли они	
	
	// Проверка капчи
	require_once __DIR__ . '/recaptchalib.php';
	$secret = "6LfC3FMUAAAAAI_JgmIL38DP2O_l5qYSWcGz6jks";
	$response = null; // пустой ответ каптчи
	// Проверка вашего секретного ключа
	$reCaptcha = new ReCaptcha($secret);
	if ($_POST["g-recaptcha-response"]) {
	$response = $reCaptcha->verifyResponse(
			$_SERVER["REMOTE_ADDR"],
			$_POST["g-recaptcha-response"]
		);
	} if ($response != null && $response->success) {
		$to = 'cv2@elite.kz,sanjar-home@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
		
		$message = "Имя: ".$_POST['form_name']."<br>";
		$message .= "E-mail: ".$_POST['form_email']."<br><br>";
		$message .= "Сообщение: ".$_POST['form_message']; //Текст нащего сообщения можно использовать HTML теги
		
		$headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: ".$_POST['form_name']." <info@elite.kz>\r\n";
		//$headers = "From: " . $_POST['form_name'] . " <" . $_POST['form_email'] . ">\r\nContent-type: text/plain; charset=utf-8 \r\n";
		
		if( mail( $to, 'Письмо от посетителя: ' . $_POST['form_name'], $message, $headers) ){ //Отправка письма с помощью функции mail
			if( get_locale() == 'ru_RU' )
				echo '<div class="message">Сообщение отправлено</div>';
			elseif( get_locale() == 'en_GB' )
				echo '<div class="message">Message sent</div>';
			elseif( get_locale() == 'kk' )
				echo '<div class="message">Сіздің хабарламаңыз жіберілді</div>';
		}
		else{
			if( get_locale() == 'ru_RU' )
				echo '<div class="message" style="background: #df2336;color: white;">Сообщение не  отправлено</div>';
			elseif( get_locale() == 'en_GB' )
				echo '<div class="message" style="background: #df2336;color: white;">Message not sent</div>';
			elseif( get_locale() == 'kk' )
				echo '<div class="message" style="background: #df2336;color: white;">Сіздің хабарламаңыз жіберілмеді</div>';
		}
	  }	else { 
			if( get_locale() == 'ru_RU' )
				echo '<div class="message" style="background: #df2336;color: white;">Вы не прошли проверку каптчей</div>';
			elseif( get_locale() == 'en_GB' )
				echo '<div class="message" style="background: #df2336;color: white;">Check the captcha check box</div>';
		elseif( get_locale() == 'kk' )
				echo '<div class="message" style="background: #df2336;color: white;">Сіз тексеруді өткізген жоқсыз</div>';
	  }
	}
}

function get_presentation_link(){
	global $wpdb;	
	if( get_locale() == 'ru_RU')
		$getPresentationLink = $wpdb->get_results( "SELECT post_content FROM wp_posts WHERE ID = 43 " );
	elseif( get_locale() == 'en_GB')
		$getPresentationLink = $wpdb->get_results( "SELECT post_content FROM wp_posts WHERE ID = 456 " );
	preg_match('/^<a.*?href=(["\'])(.*?)\1.*$/', $getPresentationLink[0]->post_content, $cutedPresentationLink);
	echo $cutedPresentationLink[2];
}
add_theme_support( 'post-thumbnails' );
if( function_exists('add_theme_support') )
	the_post_thumbnail( array(250,9999), array('class' => 'img-polaroid') );
function strip_text($string, $lengh = 250 ){
	$string = strip_tags($string);
	if(strlen($string) > $lengh){
		$string = substr($string, 0, $lengh);
		$string = rtrim($string, "!,.-");
		$string = substr($string, 0, strrpos($string, ' '));
		echo $string."… ";
	}
	else
		echo $string;
}

/**
 * Определим константу, которая будет хранить путь к папке single
 */
define( SINGLE_PATH, TEMPLATEPATH . '/single' );
/**
 * Добавим фильтр, который будет запускать функцию подбора шаблонов
 */
add_filter( 'single_template', 'my_single_template' );

/**
 * Функция для подбора шаблона
 */
function my_single_template( $single ) {
    global $wp_query, $post;
    /**
     * Проверяем наличие шаблонов по ID поста.
     * Формат имени файла: single-ID.php
     */
    if ( file_exists( SINGLE_PATH . '/single-' . $post->ID . '.php' ) ) {
        return SINGLE_PATH . '/single-' . $post->ID . '.php';
    }
    /**
     * Проверяем наличие шаблонов для категорий, ищем по ID категории или слагу
     * Формат имени файла: single-cat-SLUG.php или single-cat-ID.php
     */
    foreach ( (array) get_the_category() as $cat ) :
        if ( file_exists( SINGLE_PATH . '/single-cat-' . $cat->slug . '.php' ) ) {
            return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
        } elseif ( file_exists( SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php' ) ) {
            return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
        }		
    endforeach;

    /**
     * Проверяем наличие шаблонов для тэгов, ищем по ID тэга или слагу
     * Формат имени файла: single-tag-SLUG.php или single-tag-ID.php
     */
    $wp_query->in_the_loop = true;
    foreach ( (array) get_the_tags() as $tag ) :	
        if ( file_exists( SINGLE_PATH . '/single-tag-' . $tag->slug . '.php' ) ) {
            return SINGLE_PATH . '/single-tag-' . $tag->slug . '.php';
        } elseif ( file_exists( SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php' ) ) {
            return SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php';
        }
    endforeach;
    $wp_query->in_the_loop = false;

    /**
     * Если ничего не найдено открываем стандартный single.php
     */
    if ( file_exists( SINGLE_PATH . '/single.php' ) ) {
        return SINGLE_PATH . '/single.php';
    }	
    return $single;
}
 
function get_services_param( $param  ) {
	global $post;
    $post_slug = $post->post_name;
	if($param == 'icon') {	
		if( $post_slug == 'podbor-personala' )
			return 'uslugi_icon_1.svg';
		elseif( $post_slug == 'autstaffing' )
			return 'uslugi_icon_2.svg';
		elseif( $post_slug == 'obzory-rynka-truda-i-zarabotnyh-plat' )
			return 'uslugi_icon_3.svg';
		elseif( $post_slug == 'kadrovoe-administrirovanie' )
			return 'uslugi_icon_4.svg';
		elseif( $post_slug == 'yuridicheskij-konsalting-v-upravlenii-personalom' )
			return 'uslugi_icon_5.svg';
		elseif( $post_slug == 'konsultatsiya-i-pomoshh-sokrashhennomu-personalu' )
			return 'uslugi_icon_6.svg';
		elseif( $post_slug == 'vneshnee-upravlenie-biznes-protsessami' )
			return '../uslugi_icon_8.png';
		elseif( $post_slug == 'raschet-zarabotnyh-plat' )
			return '../uslugi_icon_9.png';
		elseif( $post_slug == 'obuchenie-i-razvitie-personala' )
			return 'uslugi_icon_7.svg';
	}
	elseif($param == 'color'){	
		if( $post_slug == 'podbor-personala' )
			return 'bg_red';
		elseif( $post_slug == 'autstaffing' )
			return 'bg_viol';
		elseif( $post_slug == 'obzory-rynka-truda-i-zarabotnyh-plat' )
			return 'bg_green';
		elseif( $post_slug == 'kadrovoe-administrirovanie' )
			return 'bg_turk';
		elseif( $post_slug == 'yuridicheskij-konsalting-v-upravlenii-personalom' )
			return 'bg_skyblue';
		elseif( $post_slug == 'konsultatsiya-i-pomoshh-sokrashhennomu-personalu' )
			return 'bg_blue';
		elseif( $post_slug == 'vneshnee-upravlenie-biznes-protsessami' )
			return 'bg_yel';
		elseif( $post_slug == 'raschet-zarabotnyh-plat' )
			return 'bg_purple';
		elseif( $post_slug == 'obuchenie-i-razvitie-personala' )
			return 'bg_ora';
	}
}

	/**	 * Плучает страницу пагинации	 */	function paged(){				$paged = get_url();		end($paged);				if( $paged[key( $paged )-2] == 'page' and is_numeric( (int) $paged[key( $paged )-1] ) )			$paged = (int) $paged[key( $paged )-1];		else			$paged = 1;				return $paged;	}

function get_services_list() {
	global $post;
    $post_slug = $post->post_name;	
	if( $post_slug == 'podbor-personala' ){
		echo '	<a href="' . $home_url . '/uslugi/autstaffing/"><div class="cell animated invisible bg_viol">'. __('Аутстаффинг', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obzory-rynka-truda-i-zarabotnyh-plat/"><div class="cell animated invisible bg_green">'. __('Обзоры рынка труда и заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/kadrovoe-administrirovanie/"><div class="cell animated invisible bg_turk">'. __('Кадровое администрирование', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/yuridicheskij-konsalting-v-upravlenii-personalom/"><div class="cell animated invisible bg_skyblue">'. __('Аутстаффинг иностранного персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/konsultatsiya-i-pomoshh-sokrashhennomu-personalu/"><div class="cell animated invisible bg_blue">'. __('Помощь сокращаемому персоналу', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/vneshnee-upravlenie-biznes-protsessami/"><div class="cell animated invisible bg_yel">'. __('Аутсорсинг персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/raschet-zarabotnyh-plat/"><div class="cell animated invisible bg_purple">'. __('Расчет заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obuchenie-i-razvitie-personala/"><div class="cell animated invisible bg_ora">'. __('Обучение и развитие персонала', 'elite') .'</div></a>';
		;
	}
	elseif( $post_slug == 'autstaffing' ){
		echo '	<a href="' . $home_url . '/uslugi/podbor-personala/"><div class="cell animated invisible bg_red">'. __('Подбор персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obzory-rynka-truda-i-zarabotnyh-plat/"><div class="cell animated invisible bg_green">'. __('Обзоры рынка труда и заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/kadrovoe-administrirovanie/"><div class="cell animated invisible bg_turk">'. __('Кадровое администрирование', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/yuridicheskij-konsalting-v-upravlenii-personalom/"><div class="cell animated invisible bg_skyblue">'. __('Аутстаффинг иностранного персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/konsultatsiya-i-pomoshh-sokrashhennomu-personalu/"><div class="cell animated invisible bg_blue">'. __('Помощь сокращаемому персоналу', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/vneshnee-upravlenie-biznes-protsessami/"><div class="cell animated invisible bg_yel">'. __('Аутсорсинг персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/raschet-zarabotnyh-plat/"><div class="cell animated invisible bg_purple">'. __('Расчет заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obuchenie-i-razvitie-personala/"><div class="cell animated invisible bg_ora">'. __('Обучение и развитие персонала', 'elite') .'</div></a>';
		;
	}
	elseif( $post_slug == 'obzory-rynka-truda-i-zarabotnyh-plat' ){
		echo '	<a href="' . $home_url . '/uslugi/podbor-personala/"><div class="cell animated invisible bg_red">'. __('Подбор персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/autstaffing/"><div class="cell animated invisible bg_viol">'. __('Аутстаффинг', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/kadrovoe-administrirovanie/"><div class="cell animated invisible bg_turk">'. __('Кадровое администрирование', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/yuridicheskij-konsalting-v-upravlenii-personalom/"><div class="cell animated invisible bg_skyblue">'. __('Аутстаффинг иностранного персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/konsultatsiya-i-pomoshh-sokrashhennomu-personalu/"><div class="cell animated invisible bg_blue">'. __('Помощь сокращаемому персоналу', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/vneshnee-upravlenie-biznes-protsessami/"><div class="cell animated invisible bg_yel">'. __('Аутсорсинг персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/raschet-zarabotnyh-plat/"><div class="cell animated invisible bg_purple">'. __('Расчет заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obuchenie-i-razvitie-personala/"><div class="cell animated invisible bg_ora">'. __('Обучение и развитие персонала', 'elite') .'</div></a>';
		;
	}
	elseif( $post_slug == 'kadrovoe-administrirovanie' ){
		echo '	<a href="' . $home_url . '/uslugi/podbor-personala/"><div class="cell animated invisible bg_red">'. __('Подбор персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/autstaffing/"><div class="cell animated invisible bg_viol">'. __('Аутстаффинг', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obzory-rynka-truda-i-zarabotnyh-plat/"><div class="cell animated invisible bg_green">'. __('Обзоры рынка труда и заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/yuridicheskij-konsalting-v-upravlenii-personalom/"><div class="cell animated invisible bg_skyblue">'. __('Аутстаффинг иностранного персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/konsultatsiya-i-pomoshh-sokrashhennomu-personalu/"><div class="cell animated invisible bg_blue">'. __('Помощь сокращаемому персоналу', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/vneshnee-upravlenie-biznes-protsessami/"><div class="cell animated invisible bg_yel">'. __('Аутсорсинг персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/raschet-zarabotnyh-plat/"><div class="cell animated invisible bg_purple">'. __('Расчет заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obuchenie-i-razvitie-personala/"><div class="cell animated invisible bg_ora">'. __('Обучение и развитие персонала', 'elite') .'</div></a>';
		;
	}
	elseif( $post_slug == 'yuridicheskij-konsalting-v-upravlenii-personalom' ){
		echo '	<a href="' . $home_url . '/uslugi/podbor-personala/"><div class="cell animated invisible bg_red">'. __('Подбор персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/autstaffing/"><div class="cell animated invisible bg_viol">'. __('Аутстаффинг', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obzory-rynka-truda-i-zarabotnyh-plat/"><div class="cell animated invisible bg_green">'. __('Обзоры рынка труда и заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/kadrovoe-administrirovanie/"><div class="cell animated invisible bg_turk">'. __('Кадровое администрирование', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/konsultatsiya-i-pomoshh-sokrashhennomu-personalu/"><div class="cell animated invisible bg_blue">'. __('Помощь сокращаемому персоналу', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/vneshnee-upravlenie-biznes-protsessami/"><div class="cell animated invisible bg_yel">'. __('Аутсорсинг персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/raschet-zarabotnyh-plat/"><div class="cell animated invisible bg_purple">'. __('Расчет заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obuchenie-i-razvitie-personala/"><div class="cell animated invisible bg_ora">'. __('Обучение и развитие персонала', 'elite') .'</div></a>';
		;
	}
	elseif( $post_slug == 'konsultatsiya-i-pomoshh-sokrashhennomu-personalu' ){
		echo '	<a href="' . $home_url . '/uslugi/podbor-personala/"><div class="cell animated invisible bg_red">'. __('Подбор персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/autstaffing/"><div class="cell animated invisible bg_viol">'. __('Аутстаффинг', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obzory-rynka-truda-i-zarabotnyh-plat/"><div class="cell animated invisible bg_green">'. __('Обзоры рынка труда и заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/kadrovoe-administrirovanie/"><div class="cell animated invisible bg_turk">'. __('Кадровое администрирование', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/yuridicheskij-konsalting-v-upravlenii-personalom/"><div class="cell animated invisible bg_skyblue">'. __('Аутстаффинг иностранного персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/vneshnee-upravlenie-biznes-protsessami/"><div class="cell animated invisible bg_yel">'. __('Аутсорсинг персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/raschet-zarabotnyh-plat/"><div class="cell animated invisible bg_purple">'. __('Расчет заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obuchenie-i-razvitie-personala/"><div class="cell animated invisible bg_ora">'. __('Обучение и развитие персонала', 'elite') .'</div></a>';
		;
	}
	elseif( $post_slug == 'vneshnee-upravlenie-biznes-protsessami' ){
		echo '	<a href="' . $home_url . '/uslugi/podbor-personala/"><div class="cell animated invisible bg_red">'. __('Подбор персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/autstaffing/"><div class="cell animated invisible bg_viol">'. __('Аутстаффинг', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obzory-rynka-truda-i-zarabotnyh-plat/"><div class="cell animated invisible bg_green">'. __('Обзоры рынка труда и заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/kadrovoe-administrirovanie/"><div class="cell animated invisible bg_turk">'. __('Кадровое администрирование', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/yuridicheskij-konsalting-v-upravlenii-personalom/"><div class="cell animated invisible bg_skyblue">'. __('Аутстаффинг иностранного персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/konsultatsiya-i-pomoshh-sokrashhennomu-personalu/"><div class="cell animated invisible bg_blue">'. __('Помощь сокращаемому персоналу', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/raschet-zarabotnyh-plat/"><div class="cell animated invisible bg_purple">'. __('Расчет заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obuchenie-i-razvitie-personala/"><div class="cell animated invisible bg_ora">'. __('Обучение и развитие персонала', 'elite') .'</div></a>';
		;
	}
	elseif( $post_slug == 'raschet-zarabotnyh-plat' ){
		echo '	<a href="' . $home_url . '/uslugi/podbor-personala/"><div class="cell animated invisible bg_red">'. __('Подбор персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/autstaffing/"><div class="cell animated invisible bg_viol">'. __('Аутстаффинг', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obzory-rynka-truda-i-zarabotnyh-plat/"><div class="cell animated invisible bg_green">'. __('Обзоры рынка труда и заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/kadrovoe-administrirovanie/"><div class="cell animated invisible bg_turk">'. __('Кадровое администрирование', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/yuridicheskij-konsalting-v-upravlenii-personalom/"><div class="cell animated invisible bg_skyblue">'. __('Аутстаффинг иностранного персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/konsultatsiya-i-pomoshh-sokrashhennomu-personalu/"><div class="cell animated invisible bg_blue">'. __('Помощь сокращаемому персоналу', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/vneshnee-upravlenie-biznes-protsessami/"><div class="cell animated invisible bg_yel">'. __('Аутсорсинг персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obuchenie-i-razvitie-personala/"><div class="cell animated invisible bg_ora">'. __('Обучение и развитие персонала', 'elite') .'</div></a>';
		;
	}
	elseif( $post_slug == 'obuchenie-i-razvitie-personala' ){
		echo '	<a href="' . $home_url . '/uslugi/podbor-personala/"><div class="cell animated invisible bg_red">'. __('Подбор персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/autstaffing/"><div class="cell animated invisible bg_viol">'. __('Аутстаффинг', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/obzory-rynka-truda-i-zarabotnyh-plat/"><div class="cell animated invisible bg_green">'. __('Обзоры рынка труда и заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/kadrovoe-administrirovanie/"><div class="cell animated invisible bg_turk">'. __('Кадровое администрирование', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/yuridicheskij-konsalting-v-upravlenii-personalom/"><div class="cell animated invisible bg_skyblue">'. __('Аутстаффинг иностранного персонала', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/konsultatsiya-i-pomoshh-sokrashhennomu-personalu/"><div class="cell animated invisible bg_blue">'. __('Помощь сокращаемому персоналу', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/raschet-zarabotnyh-plat/"><div class="cell animated invisible bg_purple">'. __('Расчет заработных плат', 'elite') .'</div></a>
				<a href="' . $home_url . '/uslugi/vneshnee-upravlenie-biznes-protsessami/"><div class="cell animated invisible bg_yel">'. __('Аутсорсинг персонала', 'elite') .'</div></a>'
		;
	}
}

function get_elite_body_class() {
	
	$cat_id = get_the_category();  
	$get_url = get_url();
	
	if( is_page_template('page-about-team.php') ){
		echo 'class="about_2_page"';
	}	
	elseif( is_page_template('page-about-code-of-ethics.php') ){
		echo 'class="about_1_page"';
		return;
	}
	elseif( is_page_template('page-vacancy.php') ){
		echo 'class="vacancies_1_page"';
		return;
	}
		
	elseif( is_single() and isset($cat_id[0]->category_parent) and $cat_id[0]->category_parent == 4 ){
		echo 'class="vacancies_3_page"';
		return;
	}
	elseif( isset($cat_id[0]->category_parent) and $cat_id[0]->category_parent == 4 and !is_home()){
		echo 'class="vacancies_2_page"'; 
		return;
	}	
	elseif( $get_url[2] == 'platforma' and empty($get_url[3]) ){
		echo 'class="platforma_1_page"';
	}
	elseif( $get_url[2] == 'platforma' and !empty($get_url[3]) ){
		echo 'class="platforma_2_page"';
	}	
	elseif( is_page_template('page-contacts.php') ){
		echo 'class="contact_page"';
	}
	elseif( $get_url[2] == 'news' ){
		echo 'class="news_1_page"';
	}
	elseif( $get_url[1] == 'uslugi' and empty($get_url[2]) ){
		echo 'class="services_1_page"';
	}
	elseif( $get_url[1] == 'uslugi' and !empty($get_url[2]) ){
		echo 'class="services_2_page"';
	}
	elseif( is_page_template('page-all-vacancy.php') ){
		echo 'class="vacancies_2_page"';
	}
}

function get_vakansii_categories( $page ){
	
	$get_categories = get_categories( array(
										'type'  => 'post',
										'child_of'     => 0,
										'parent'       => 4,
										
										'orderby'       => 'name',
										'order'       => 'ASC',
										'hide_empty'       => 0,
									  ));
	
	if($page == 'home'){
		foreach( $get_categories as $index => $value )
			echo $array = '<a style="color:white; " href="' . $home_url . '/' . $value->slug . '/" class="bttn bttn_thin animated invisible">' . __($value->name, 'elite') . '<!--счетчик вакансии (<span class="amount"> ' . $value->category_count . ' </span>)--></a>';
	}
	elseif($page == 'vakansii'){
		foreach( $get_categories as $index => $value )
			echo $array = '<a href="' . $home_url . '/' . $value->slug . '/" class="bttn bttn_thin animated invisible">' . __($value->name, 'elite') . ' <!--счетчик вакансии(<span class="amount"> ' . $value->category_count . ' </span>)--></a>';
	}
}

function get_platforma_categories(){
	
	$get_categories = get_categories( array(
										'type'  => 'post',
										'child_of'     => 0,
										'parent'       => 8,
										'orderby'       => 'name',
										'order'       => 'ASC',
										'hide_empty'       => 0,
									  ));
		foreach( $get_categories as $index => $value )
			echo $array = '<a style="color:white; " href="' . $home_url . '/category/platforma/' . $value->slug . '/" class="bttn bttn_thin">' . $value->name . ' <!--счетчик резюме(<span class="amount"> ' . $value->category_count . ' </span>)--></a>';
}

add_action('category_template', 'delf1i_load_cat_parent_template');
function delf1i_load_cat_parent_template($template) {
    $cat_ID = absint( get_query_var('cat') );
    $category = get_category( $cat_ID );
    if($category->category_parent > 0) {
        $templates = array();
            
        if(!is_wp_error($category)) {
            $templates[] = "category-{$category->slug}.php";
        }
        $templates[] = "category-$cat_ID.php";
        
        $parentCategory = get_category($category->category_parent);
        if(!is_wp_error($parentCategory)) {
            $templates[] = "subcategory-{$parentCategory->slug}.php";
            $templates[] = "subcategory-{$parentCategory->term_id}.php";
        }
        
       $templates[] = "category.php";		
        $template = locate_template($templates);
    }
    return $template;
}

function get_pdf_link($post_id){
	global $wpdb;
	$get_pdf_link = $wpdb->get_results( "SELECT meta_value FROM wp_postmeta WHERE meta_key = 'cpt_pdf_attachment1' AND post_id = " . $post_id . " LIMIT 1");
	
	if($get_pdf_link[0]->meta_value)
		return $get_pdf_link[0]->meta_value;
	else
		return false;
}



function get_url(){
	$parsed_url = explode('/', $_SERVER['REQUEST_URI']);
	return $parsed_url;	
}



function get_platforma_blok($param){
	$get_category = get_url();
	
	if($param == 'color'){
		if($get_category[3] == 'administrativnyj-personal')
			echo "purple";
		elseif($get_category[3] == 'prodazhi')
			echo "light_green";
		elseif($get_category[3] == 'top-menedzhment')
			echo "turquoise";
		elseif($get_category[3] == 'banki-investitsii-lizing-platforma')
			echo "pale_green";
		elseif($get_category[3] == 'buhgalteriya-finansy-audit-platforma')
			echo "blue";
		elseif($get_category[3] == 'marketing-reklama-pr')
			echo "dark_red";
		elseif($get_category[3] == 'smi-izdatelstvo')
			echo "violet";
		elseif($get_category[3] == 'kadry-upravlenie-personalom')
			echo "yellow";
		elseif($get_category[3] == 'yurisprudentsiya')
			echo "pink";
		elseif($get_category[3] == 'logistika-transport')
			echo "violet";
	}
	elseif($param == 'image'){
		$home_url = esc_url( get_template_directory_uri() );
		
		if($get_category[3] == 'administrativnyj-personal'){ 
			echo $home_url . "/images/icon_pl_1.png"; return;
		}
		elseif($get_category[3] == 'prodazhi'){
			echo $home_url . "/images/icon_pl_2.png"; return;
		}
		elseif($get_category[3] == 'top-menedzhment'){
			echo $home_url . "/images/icon_pl_3.png"; return;
		}
		elseif($get_category[3] == 'yurisprudentsiya'){
			echo $home_url . "/images/icon_pl_9.png"; return;
		}	
		elseif($get_category[3] == 'logistika-transport'){
			echo $home_url . "/images/icon_pl_10.png"; return;
		}
		elseif($get_category[3] == 'marketing-reklama-pr'){
			echo $home_url . "/images/icon_pl_6.png"; return;
		}
		elseif($get_category[3] == 'smi-izdatelstvo'){
			echo $home_url . "/images/icon_pl_7.png"; return;
		}
		elseif($get_category[3] == 'kadry-upravlenie-personalom'){
			echo $home_url . "/images/icon_pl_8.png"; return;
		}
		elseif($get_category[3] == 'buhgalteriya-finansy-audit-platforma'){
			echo $home_url . "/images/icon_pl_5.png"; return;
		}
		elseif($get_category[3] == 'banki-investitsii-lizing-platforma'){
			echo $home_url . "/images/icon_pl_4.png"; return;
		}	
	}
	
}



function true_load_theme_textdomain(){
	load_theme_textdomain( 'elite', get_template_directory() . '/languages' );
}
add_action('after_setup_theme', 'true_load_theme_textdomain');

function true_localize_theme( $locale )
{	 
  	if( isset( $_GET['locale'] ) and $_GET['locale'] == 'eng' ){
		$_SESSION['locale'] = 'eng';
		header('Location:' . $_SERVER['HTTP_REFERER']);
	}
	elseif( isset( $_GET['locale'] ) and $_GET['locale'] == 'rus' ){
		$_SESSION['locale'] = 'rus';
		header('Location:' . $_SERVER['HTTP_REFERER']);
	}
	elseif( isset( $_GET['locale'] ) and $_GET['locale'] == 'kaz' ){
		$_SESSION['locale'] = 'kaz';
		header('Location:' . $_SERVER['HTTP_REFERER']);
	}	
	
	if( isset($_SESSION['locale']) and $_SESSION['locale'] == 'eng'){
		return esc_attr( 'en_GB' );
	}
	elseif( isset($_SESSION['locale']) and $_SESSION['locale'] == 'kaz')
	{
		return esc_attr( 'kk' );	 
	}	
	elseif(!isset($_SESSION['locale']) or isset($_SESSION['locale']) and $_SESSION['locale'] == 'rus'){
		return esc_attr( 'ru_RU' );	 
	}
	

}
add_filter( 'locale', 'true_localize_theme' );


function get_locale_list(){
  	if( get_locale() == 'en_GB')
		echo '<option>Eng </option> <option><a>Rus </a></option> <option><a>Kaz </a></option>';
	else if(get_locale()=='ru_RU')
		echo '<option>Rus </option> <option><a>Eng </a></option><option><a>Kaz </a></option>';
	else if(get_locale()=='kk')
		echo '<option>Kaz </option> <option><a>Eng </a></option><option><a>Rus </a></option>';
}


/**
 * Для работы пагинации в адресной строке
 */
function codernote_request($query_string ) {
  if ( isset( $query_string['page'] ) ) {
    if ( ''!=$query_string['page'] ) {
      if ( isset( $query_string['name'] ) ) {
        unset( $query_string['name'] ); }
      }
    }
    return $query_string;
}
add_filter('request', 'codernote_request');

add_action('pre_get_posts', 'codernote_pre_get_posts');
function codernote_pre_get_posts( $query ) {
  if ( $query->is_main_query() && !$query->is_feed() && !is_admin() ) {
    $query->set( 'paged', str_replace( '/', '', get_query_var( 'page' ) ) );
  }
}


/**
 * Пагинация
 */
function my_pagenavi() {
	global $wp_query;

	$big = 999999999; // уникальное число для замены


	$args = array(
		'base'         => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		'format'       => '',
		'total'        => $wp_query->max_num_pages,
		'current'      => max( 1, paged() ),
		'show_all'     => False,
		'end_size'     => 1,
		'mid_size'     => 2,
		'prev_next'    => True,
		'prev_text'    => __('<div class="bttn prev">Предыдущая страница</div>'),
		'next_text'    => __('<div class="bttn next">Следующая страница</div>'),
		'type'         => 'plain',
		'add_args'     => False,
		'add_fragment' => '',
		'before_page_number' => '<li class="show">',
		'after_page_number'  => '</li>'
	); 
			


	$result = paginate_links( $args );

	// удаляем добавку к пагинации для первой страницы
	$result = str_replace( '/page/1/', '', $result );
		
	$result = str_replace( '<li class="show">' . paged(), '<li class="show active">' . paged(), $result );

	print_r($result) ;
}



// Register new shortcode for getting pages where contact form was send
function hidden($tag) {
    if ( ! is_array( $tag ) )
        return '';
	
	global $wpdb;
	$link  = get_url();
	$post_title = $wpdb->get_results(" SELECT post_title FROM wp_posts WHERE post_name='" . $link[2] . "' ");
	
    $html = '<input type="'.$tag['basetype'].'" name="' . $tag['name'] . '" value="'. $post_title[0]->post_title .'" />';
    return $html;
}
if(function_exists("wpcf7_add_shortcode")){
    wpcf7_add_shortcode('hidden', 'hidden', true);
}
//вывод стандартной формы поиска шорткодом start
function wph_display_search_form() {
    return get_search_form(false);
}
add_shortcode('search_form', 'wph_display_search_form');
//вывод стандартной формы поиска шорткодом end
 /**
 * Выводим 50 записей на странице поиска
 *
 * @param type $query
 * @return type
 */

 function onwp_search_results_per_page_func($query) {
 // запрос на странице поиска
 if (!is_admin() && $query->is_main_query() && $query->is_search()) {
 $query->set('posts_per_page', 50);
 }
return $query;
 }
add_action('pre_get_posts', 'onwp_search_results_per_page_func');

?>
