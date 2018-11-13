<?php
/*
Template Name: home-page
*/
?>
<?php get_header(); ?>
<!--section 1 begins-->
<div class="div1">
  <div class="div2">
   <div class="div3">
    <div class="header__video-wrapp">
     <div class="header__video-box">
      <video class="header__video"  loop autoplay>
       <source src="<?php echo home_url(); ?>/wp-content/uploads/shutterstock.mov" type="video/mp4">
         <source src="<?php echo home_url(); ?>/wp-content/uploads/shutterstock.mov" type="video/webm">
		  <source src="<?php echo home_url(); ?>/wp-content/uploads/shutterstock.mov" type="video/mov">
         </video>
       </div>
       <section class="part_1"> 
        <div class="wrapper pad">
         <h1 class="big_h animated invisible"><?php _e('ПРОФЕССИОНАЛЬНОЕ', 'elite');?> <br> <?php _e('УПРАВЛЕНИЕ ПЕРСОНАЛОМ', 'elite');?> —</h1>
         <p class="text animated invisible"><?php _e('надежная платформа', 'elite');?> <br> <?php _e('вашего бизнеса', 'elite');?></p>
         <a href="<?php echo home_url(); ?>/about-team/"><div class="bttn animated invisible"><?php _e('подробнее о компании', 'elite');?></div></a>
       </div>
     </section>
   </div>
 </div>
</div>
</div>
    <!--section 1 ends-->
  <!--section 2 begins-->
  <section class="part_2"> 
    <div class="wrapper pad">
      <div class="left">
        <div class="big_h"><?php _e('НА РЫНКЕ', 'elite');?></div>
        <div class="mine"><img src="/wp-content/uploads/2018/04/21-year-new.png" ></div>
        <p class="text"><?php _e('С успехом и радостью для Вас', 'elite');?></p>
        <a href="<?php echo home_url(); ?>/about-team/"><div class="bttn"><?php _e('подробнее о компании', 'elite');?></div></a>
      </div>
      <div class="right">
        <div class="cell animated invisible"><?php _e('Ваши интересы-превыше собственных', 'elite');?>.</div>
        <div class="cell animated invisible"><?php _e('Для Вас, 24 часа в сутки/7 дней в неделю/365 дней в году', 'elite');?>.</div>
        <div class="cell animated invisible"><?php _e('Разнообразие профессиональных решений', 'elite');?>.</div>
        <div class="cell animated invisible"><?php _e('Жесткие стандарты контроля качества', 'elite');?>.</div>
        <div class="cell animated invisible"><?php _e('Широкая география возможностей', 'elite');?>.</div>
        <div class="cell animated invisible"><?php _e('Высокая культура партнерства и этики бизнеса', 'elite');?>.</div>
      </div>
    </div>
  </section>
    <!--section 2 ends-->
  <section class="banner">
    <div class="wrapper pad">
      <div class="banner-right banner-center">
        <div class="banner-right-header"><?php _e('Наши награды', 'elite');?></div>
        <p class="banner-right-underheader"><?php _e('Национальный бизнес-рейтинг в Республики Казахстан ', 'elite');?> <font face="Bold" color="#333333"><?php _e('«Лидер отрасли»', 'elite');?></font></p>
        <div class="star star-bronze">
          <img src="/wp-content/themes/elite/images/bronze.png" alt="">
          <div class="star-text">
            <p class="star-text-top"><?php _e('Бронза', 'elite');?></p>
            <p class="star-text-bottom"><?php _e('2013 год', 'elite');?></p>
          </div>
        </div>
        <div class="star star-silver">
          <img src="/wp-content/themes/elite/images/silver.png" alt="">
          <div class="star-text">
            <p class="star-text-top"><?php _e('Серебро', 'elite');?></p>
            <p class="star-text-bottom"><?php _e('2014 год', 'elite');?></p>
          </div>
        </div>
        <div class="star star-gold">
          <img src="/wp-content/themes/elite/images/gold.png" alt="">
          <div class="star-text">
            <p class="star-text-top"><?php _e('Золото', 'elite');?></p>
            <p class="star-text-bottom"><?php _e('2015-2018 год', 'elite');?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--section 3 begins-->
  <section class="part_3"> 
    <div class="wrapper pad">
      <div class="top">
        <h2 class="big_h"><?php _e('услуги', 'elite');?>          </h2>
        <p class="text"><?php _e('Нашими консультантами реализуются проекты для крупнейших казахстанских и международных компаний в различных отраслях экономики.', 'elite');?></p>
        <a href="<?php echo home_url(); ?>/uslugi/"><div class="bttn"><?php _e('больше об услугах', 'elite');?></div></a>
      </div>
      <div class="grid">
       <a href="<?php echo home_url(); ?>/uslugi/podbor-personala/"><h3 class="cell animated invisible bg_red"><?php _e('Подбор персонала', 'elite');?></h3></a>
       <a href="<?php echo home_url(); ?>/uslugi/autstaffing/"><h3  class="cell animated invisible bg_viol"><?php _e('Аутстаффинг', 'elite');?></h3 ></a>
       <a href="<?php echo home_url(); ?>/uslugi/obzory-rynka-truda-i-zarabotnyh-plat/"><h3  class="cell animated invisible bg_green"><?php _e('Обзоры рынка труда и заработных плат', 'elite');?></h3 ></a>
       <a href="<?php echo home_url(); ?>/uslugi/kadrovoe-administrirovanie/"><h3  class="cell animated invisible bg_turk"><?php _e('Кадровое администрирование', 'elite');?></h3 ></a>
       <a href="<?php echo home_url(); ?>/uslugi/yuridicheskij-konsalting-v-upravlenii-personalom/"><h3  class="cell animated invisible bg_skyblue"><?php _e('Аутстаффинг иностранного персонала', 'elite');?></h3 ></a>
       <a href="<?php echo home_url(); ?>/uslugi/konsultatsiya-i-pomoshh-sokrashhennomu-personalu/"><h3  class="cell animated invisible bg_blue"><?php _e('Помощь сокращаемому персоналу', 'elite');?></h3 ></a>
       <a href="<?php echo home_url(); ?>/uslugi/vneshnee-upravlenie-biznes-protsessami/"><h3  class="cell animated invisible bg_yel"><?php _e('Аутсорсинг персонала', 'elite');?></h3 ></a>
       <a href="<?php echo home_url(); ?>/uslugi/raschet-zarabotnyh-plat/"><h3  class="cell animated invisible bg_purple"><?php _e('Расчет заработных плат', 'elite');?></h3 ></a>
       <a href="<?php echo home_url(); ?>/uslugi/obuchenie-i-razvitie-personala/"><h3  class="cell animated invisible bg_ora"><?php _e('Обучение и развитие персонала', 'elite');?></h3 ></a>
     </div>
   </div>
 </section>
 <!--section 3 ends-->
 <!--section 4 begins-->
 <section class="part_4">
  <div class="wrapper partners-slider">
	   <div>
		 <a href="http://lmexperts.ru" target="_blank" rel="nofollow"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/partners_1.jpg"></a>
	   </div>
	   <div>
		 <a href="https://www.gigroup.com/en/index.aspx" target="_blank" rel="nofollow"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/partners_2.jpg"></a>
	   </div>
	   <div>
		 <a href="http://mira-personal.ru" target="_blank rel="nofollow""><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/partners_3.jpg"></a>
	   </div>
	   <div>
		 <a href="http://www.apsc.ru" target="_blank rel="nofollow""><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/partners_4.jpg"></a>
	   </div>
  </div>
 </section>
<!--section 4 ends-->


<!--section 6 begins-->
<section class="part_6">
  <div class="zoom_background"></div>
  <div class="wrapper pad">
    <div class="top">
      <div class="title">
       <h2 class="big_h"><span class="tab_vacancy active"><?php _e('база вакансий /', 'elite');?></span> <span class="tab_resume"><?php _e('база резюме', 'elite');?></span> </h2>
       <p class="text vacancy_text"><?php _e('Находясь в поиске работы, вы, безусловно, нуждаетесь в помощи профессионала. Сотрудничество с рекрутерами Elite поможет Вам быстро сориентироваться на рынке труда, правильно оценить свои силы и выбрать тот путь, который больше всего соответствует данному этапу развития вашей карьеры.', 'elite');?></p>
       <p class="text resume_text"><?php _e('Все кандидаты, представленные у нас находятся в активном поиске работы. Вы не тратите время на общение, с теми кандидатами, которые не заинтересованы в трудоустройстве.', 'elite');?></p>
     </div>
   </div>
   <div class="buttons buttons_vacancy active">
     <?php get_vakansii_categories('home'); ?>
   </div>
   <div class="buttons buttons_resume">
     <?php get_platforma_categories(); ?>
	    
   </div>
   <a class="resume_link" href="<?php echo home_url(); ?>/zagruzka-rezyume/"><div class="bttn"><?php _e('РАЗМЕСТИТЬ РЕЗЮМЕ', 'elite');?></div></a>
 </div>
</section>
<!--section 6 ends-->
<!--section 5 begins-->
<section class="part_5">
  <div class="wrapper pad">
    <div class="top">
      <div class="title">
        <h4 class="big_h"><?php _e('новости', 'elite');?>      </h4><a href="<?php echo home_url(); ?>/category/news/" class="subscribe"><?php _e('Подписаться на новости', 'elite');?>         </a>
      </div>
      <a href="<?php echo home_url(); ?>/category/news/"><div class="bttn"><?php _e('все новости', 'elite');?></div></a>
    </div>
    <div class="grid">      
      <?php query_posts('category__in=2&showposts=3'); ?>
      <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>"><div class="cell"><img src="<?php echo get_the_post_thumbnail_url(); ?>" >
         <div class="img"></div>
         <div class="text">
           <div class="title"><span><?php echo strip_text(get_the_title(), 185); ?></span></div>
           <div class="date"><?php echo get_the_date(); ?></div>
           <div class="inner_text"><?php echo strip_text(get_the_content(), 250); ?></div>
         </div>
       </div></a>
     <?php endwhile; ?>
   </div>
 </div>
</section>
<!--section 5 ends-->

<!--section 7 begins-->
<section class="part_7">
  <div class="wrapper pad">
    <div class="big_h"><?php _e('Команда', 'elite');?>                        </div>
    <div class="slider_command"> 
      <div class="slide_person"><img class="person_photo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Mask Group 4.png">
        <div class="text">
          <div class="person_name"><?php _e('Олег Парахин', 'elite');?></div>
          <div class="person_quality text_blue"><?php _e('владелец', 'elite');?></div>
          <div class="person_comment"><?php _e('Владелец и генеральный директор компании Elite. Член координационного совета Ассоциации консультантов по подбору персонала (АКПП). Имеет степень Магистра делового администрирования.', 'elite');?><br><br> <?php _e('Успешно защитил первую в РК диссертацию на тему: «Рекрутинговые услуги в казахстанском бизнесе: развитие рынка и стратегии поставщиков».', 'elite');?></div>
        </div>
      </div>
    </div>
  </section>
  <!--section 7 ends-->
  <!--section 8 begins-->
  <section class="part_8">
    <div class="zoom_background"></div>
    <div class="wrapper pad">
      <h5 class="big_h"><?php _e('Отзывы', 'elite');?>                       </h5>
      <div class="slider_reviews"> 
        <div class="slide_review">
          <div class="arrow_next"></div>
          <div class="arrow_prev"></div>
          <div class="text"><?php _e('По результатам рейтинга, проведенного Национальным бизнес-рейтингом Республики Казахстан, Компания Elite признана «Лидером отрасли 2016».', 'elite');?></div><img class="photo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon.png">
        </div>
        <div class="slide_review"> 
          <div class="arrow_next"></div>
          <div class="arrow_prev"></div>
          <div class="text"><?php _e('Компания Elite - одна из первых кадровых компаний на рынке Республики Казахстан, созданная в 1997 году, как структурное подразделение «Центрально-азиатского фонда системных исследований»', 'elite');?></div><img class="photo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon2.png">
        </div>
      </div>
    </div>
  </section>
  <!--section 8 ends-->
  <!--section 9 begins-->
  <section class="part_9">
    <div class="wrapper pad">
      <h6 class="big_h"><?php _e('Контакты', 'elite');?>  </h6>
      <p class="text"><span><?php _e('Офисы Elite предоставлены в Алматы, Астане, Актау и Актобе', 'elite');?></span></p>
      <div class="adress">
        <?php get_template_part( 'templates/contacts' ); ?>
        <div class="right animated invisible">
          <div id="map"> </div>
        </div>
        <!--!= map-->
      </div>
      <!--contact form begins-->
      <?php get_template_part( 'templates/contacts-form' ); ?>
      <!--contact form ens-->
    </div>
  </section>
  <!--section 9 ends-->
	
  <?php get_footer(); ?>