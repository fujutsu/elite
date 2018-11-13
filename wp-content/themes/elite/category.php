<?php
/*
 * Template Name: Вакансии
 */
?>

<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>

   <!--section 6 begins-->
<div class="part_6_1">
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
      </div>
	 
   
	  
	
<!--section 6 ends-->

	  
   

<?php get_footer(); ?>