<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <title>Кадровое агентство Elite - рекрутинг, подбор персонала в Алматы и Астане</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
   <!-- <meta name="viewport" content="width=1280">-->
	<!--<meta name="viewport" content="width=1280, maximum-scale=1, user-scalable=yes">	 -->
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">	
	<meta name="yandex-verification" content="f8f2b9ea34a436a0" />
	<link rel="alternate" href="elite.kz" hreflang="ru" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
    <!--<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"> -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/stylesheets/style.css?1712191950">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js" defer></script>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js", defer> </script>-->
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" defer></script>
    <!--<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js" defer> </script>-->
	<script src="/wp-content/themes/elite/js/script.js" defer></script>
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.png" >	
	  <link href="/wp-content/themes/elite/resume/css/style.css" rel="stylesheet">   
    <script src="/wp-content/themes/elite/resume/js/jquery.form.js"></script>
	<script src="/wp-content/themes/elite/resume/js/main.js"></script>
<style>
.part_2 .wrapper .left .mine img{
  width: 183px;
}
.g-recaptcha{
  float: left;
  margin: -30px 0 0 50px;
}
</style>
	<?php wp_head(); ?>
  </head>
  <body <?php get_elite_body_class(); ?> >	
    <!-- header begins-->
	<?php mail_send(); ?>
    <header> 
      <div class="wrapper pad">
        <a href="<?php echo home_url(); ?>/"><div class="logo"></div></a>
        <nav>
          <ul class="nav">
           <li><a href="<?php echo home_url(); ?>/about-team/"><?php _e('О компании', 'elite');?></a></li>
            <li><a href="<?php echo home_url(); ?>/category/news/"><?php _e('Новости', 'elite');?></a></li>
            <li><a href="<?php echo home_url(); ?>/uslugi/"><?php _e('Услуги', 'elite');?></a></li>
            <li><a href="<?php echo home_url(); ?>/vakansii/"><?php _e('Вакансии', 'elite');?></a></li>
            <li><a href="<?php echo home_url(); ?>/category/platforma/">Platforma</a></li>
            <li><a href="http://youngstaff.kz/" target="_blank" rel="nofollow">Young staff</a></li>
            <li><a href="<?php echo home_url(); ?>/kontakty/"><?php _e('Контакты', 'elite');?></a></li>
          </ul>
        </nav>
        <div class="contacts"> 
          <div class="city">
            <select> 
			  <option>Office </option>
			  <option>Almaty </option>
              <option>Astana </option>
            </select>
          </div>
          <div class="tel"><a href="tel:+77013555355">+7 (701) 355-53-55</a></div>		   
          <div class="lang">
            <select>
              <?php get_locale_list(); ?>
				            </select>			<?php
echo do_shortcode( '[popup_trigger id="3285" tag="iso9001" classes="iso9001"]ISO 9001:2015[/popup_trigger]' ); 
?>	
          </div>		
	
		  <div id="arrow_but" class="arrow_leng"></div>				
  	<?php if(get_locale() == 'ru_RU')
		echo ('<div class="button-present"><a title="Видеопрезентация &quot;Elite&quot;" href="https://elite.kz/wp-content/uploads/2018/05/Elite_21_video_full.mp4" class="button-present2" target="_blank" rel="noopener">Видеопрезентация</a></div>');
	else if(get_locale()=='kk')
		echo ('<div class="button-present"><a title="Бейне-презентацияміз &quot;Elite&quot;" href="https://elite.kz/wp-content/uploads/2018/05/Elite_21_video_full_KZ_2.mp4" class="button-present2" target="_blank" rel="noopener">Бейне-презентацияміз</a></div>');
	else if(get_locale()=='en_GB')
		echo ('<div class="button-present"><a title="Video presentation &quot;Elite&quot;" href="https://elite.kz/wp-content/uploads/2018/05/Elite_21_video_full_ENG_4.mp4" class="button-present2" target="_blank" rel="noopener">Video presentation</a></div>');
?>  			    </div>	 	   </div>
		
    </header>
    <!-- header ends-->
	
	