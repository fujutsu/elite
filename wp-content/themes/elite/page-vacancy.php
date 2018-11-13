<?php
/*
 * Template Name: Вакансии
 */
?>

<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>

    <!--section vacancies_1 begins-->
    <section class="vacancies_1">
      <div class="wrapper pad">     
        <h1 class="big_h"><?php _e('вакансии', 'elite');?>  </h1>
        <div class="buttons">
			<?php get_vakansii_categories('vakansii'); ?>
        </div>
        <div class="top_text pad animated invisible">
          <h2 class="min_h"><?php _e('Сотрудничество с Elite в построении карьеры', 'elite');?></h2>
          <p class="text"><?php _e('Находясь в поиске работы, вы, безусловно, нуждаетесь в помощи профессионала. Сотрудничество с рекрутерами Elite поможет Вам быстро сориентироваться на рынке труда, правильно оценить свои силы и выбрать тот путь, который больше всего соответствует данному этапу развития вашей карьеры.', 'elite');?></p>
          <p class="small_text"><?php _e('Большое значение мы придаем тому, чтобы взаимодействие с Elite было максимально удобным и эффективным как для компаний — наших клиентов, так и для тех, кто заинтересован в поиске или смене работы.', 'elite');?></p>
        </div>
        <div class="load_resume pad animated invisible">
          <div class="left">
            <div class="min_h"><?php _e('Зачем откладывать?', 'elite');?></div>
            <p class="small_text"><?php _e('Отправьте нам свое резюме, и оно будет использоваться в первоочередном порядке при поиске кандидатов соответствующих Вашему профилю.', 'elite');?></p>
          </div>
          <div class="right animated invisible">
              <a href="<?php echo home_url(); ?>/zagruzka-rezyume/"><h3 class="bttn"><?php _e('ЗАГРУЗИТЬ РЕЗЮМЕ', 'elite');?></h3></a>
            <p class="tiny_text"><?php _e('Максимальный размер 10MB. Только', 'elite');?> PDF, DOC, TXT</p>
          </div>
        </div>
        <div class="bottom_text pad animated invisible">
          <p class="small_text"><?php _e('Все услуги соискателям в нашей компании предоставляются бесплатно.', 'elite');?> <br><?php _e('Для того чтобы Elite имел возможность рассматривать вашу кандидатуру на открывающиеся позиции, вам достаточно однажды прислать резюме по адресу электронной почты нашей компании. Просим вас также регулярно сообщать нам об изменениях в вашей карьере или контактной информации. Наши консультанты свяжутся с вами, если в портфеле заказов Elite появится позиция, соответствующая вашему опыту, планам и ожиданиям.', 'elite');?> <br><?php _e('Получение от Вас персональных данных отраженных в резюме, рассматривается нами как Ваше согласие на дальнейшую их бессрочную обработку, хранение и неограниченную передачу третьим лицам с целью содействия в трудоустройстве.', 'elite');?> </p>
        </div>
      </div>
	  <?php get_template_part('templates/subscribe-vakansii');?>
    </section>
    <!--section vacancies_1 ends-->

<?php get_footer(); ?>