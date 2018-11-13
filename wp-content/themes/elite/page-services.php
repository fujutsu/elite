<?php
/*
 * Template Name: Услуги
 */
?>

<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>

    <!-- services 1 begins -->
    <div class="services_1">
      <div class="wrapper pad">
        <h1 class="big_h"><?php _e('услуги', 'elite');?></h1>
        <div class="grid">
        <div class="grid">
			<a href="<?php home_url(); ?>/uslugi/podbor-personala/"><h2 class="cell animated invisible bg_red"><?php _e('Подбор персонала', 'elite');?></h2></a>
			<a href="<?php home_url(); ?>/uslugi/autstaffing/"><h2 class="cell animated invisible bg_viol"><?php _e('Аутстаффинг', 'elite');?></h2></a>
			<a href="<?php home_url(); ?>/uslugi/obzory-rynka-truda-i-zarabotnyh-plat/"><h3 class="cell animated invisible bg_green"><?php _e('Обзоры рынка труда и заработных плат', 'elite');?></h3></a>
			<a href="<?php home_url(); ?>/uslugi/kadrovoe-administrirovanie/"><h2 class="cell animated invisible bg_turk"><?php _e('Кадровое администрирование', 'elite');?></h2></a>
			<a href="<?php home_url(); ?>/uslugi/yuridicheskij-konsalting-v-upravlenii-personalom/"><h2 class="cell animated invisible bg_skyblue"><?php _e('Аутстаффинг иностранного персонала', 'elite');?></h2></a>
			<a href="<?php home_url(); ?>/uslugi/konsultatsiya-i-pomoshh-sokrashhennomu-personalu/"><h3 class="cell animated invisible bg_blue"><?php _e('Помощь сокращаемому персоналу', 'elite');?></h3></a>
			<a href="<?php home_url(); ?>/uslugi/vneshnee-upravlenie-biznes-protsessami/"><h2 class="cell animated invisible bg_yel"><?php _e('Аутсорсинг персонала', 'elite');?></h2></a>
			<a href="<?php home_url(); ?>/uslugi/raschet-zarabotnyh-plat/"><h3 class="cell animated invisible bg_purple"><?php _e('Расчет заработных плат', 'elite');?></h3></a>
			<a href="<?php home_url(); ?>/uslugi/obuchenie-i-razvitie-personala/"><h3 class="cell animated invisible bg_ora"><?php _e('Обучение и развитие персонала', 'elite');?></h3></a>
        </div>
        </div>
      </div>  
    </div>
    <!-- services 1 ends -->

<?php get_footer(); ?>