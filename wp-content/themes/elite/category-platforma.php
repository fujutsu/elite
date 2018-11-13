<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>
    <!--section platforma_1 begins-->
    <section class="platforma_1">
      <div class="wrapper pad">     
        <h1 class="big_h"><?php _e('platforma', 'elite');?></h1>
        <div class="top platforma_slider">
          <div class="platforma_single_slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide1.jpg">
            <div class="text_block">
              <h2 class="mid_h"><?php _e('Преимущества работы', 'elite');?> <br><?php _e('с «платформой»', 'elite');?></h2>
              <p class="text"><?php _e('Все кандидаты, представленые у нас, находятся в активном поиске работы.', 'elite');?><br><?php _e('Вы не тратите время на общение с теми кандидатами, которые', 'elite');?> <br><?php _e('не заинтересованы в трудоустройстве.', 'elite');?></p>
            </div>
          </div>
          <div class="platforma_single_slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide2.jpg">
            <div class="text_block">
              <div class="mid_h"><?php _e('Преимущества работы', 'elite');?> <br><?php _e('с «платформой»', 'elite');?></div>
              <p class="text"><?php _e('Все кандидаты, представленые у нас, находятся в активном поиске работы.', 'elite');?><br><?php _e('Вы не тратите время на общение с теми кандидатами, которые', 'elite');?> <br><?php _e('не заинтересованы в трудоустройстве.', 'elite');?></p>
            </div>
          </div>
          <div class="platforma_single_slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slide3.jpg">
            <div class="text_block">
              <div class="mid_h"><?php _e('Преимущества работы', 'elite');?> <br><?php _e('с «платформой»', 'elite');?></div>
              <p class="text"><?php _e('Все кандидаты, представленые у нас, находятся в активном поиске работы.', 'elite');?><br><?php _e('Вы не тратите время на общение с теми кандидатами, которые', 'elite');?> <br><?php _e('не заинтересованы в трудоустройстве.', 'elite');?></p>
            </div>
          </div>
        </div>
        <div class="grid"> 
          <a class="bttn_cell" href="<?php echo home_url(); ?>/category/platforma/administrativnyj-personal/"><?php _e('Административный персонал', 'elite');?></a>
          <a class="bttn_cell" href="<?php echo home_url(); ?>/category/platforma/prodazhi/"><?php _e('Продажи', 'elite');?></a>
          <a class="bttn_cell" href="<?php echo home_url(); ?>/category/platforma/top-menedzhment/"><?php _e('Топ менеджмент', 'elite');?></a>
          <a class="bttn_cell" href="<?php echo home_url(); ?>/category/platforma/banki-investitsii-lizing-platforma/"><?php _e('Банки/Инвестиции/Лизинг', 'elite');?></a>
          <a class="bttn_cell" href="<?php echo home_url(); ?>/category/platforma/buhgalteriya-finansy-audit-platforma/"><?php _e('Бухгалтерия/Финансы/Аудит', 'elite');?></a>
          <a class="bttn_cell" href="<?php echo home_url(); ?>/category/platforma/marketing-reklama-pr/"><?php _e('Маркетинг/Реклама/PR', 'elite');?></a>
          <a class="bttn_cell" href="<?php echo home_url(); ?>/category/platforma/smi-izdatelstvo/"><?php _e('СМИ/Издательство', 'elite');?></a>
          <a class="bttn_cell" href="<?php echo home_url(); ?>/category/platforma/kadry-upravlenie-personalom/"><?php _e('Кадры/Управление персоналом', 'elite');?></a>
          <a class="bttn_cell" href="<?php echo home_url(); ?>/category/platforma/yurisprudentsiya/"><?php _e('Юриспруденция', 'elite');?></a>
          <a class="bttn_cell" href="<?php echo home_url(); ?>/category/platforma/logistika-transport/"><?php _e('Логистика/Транспорт', 'elite');?></a>
        </div>
      </div>
	  
	  <!-- subscribe vakansii begins-->	  
		<form style="border:1px solid #ccc;padding:3px;text-align:center;" action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=PlatformaElitekz', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
		<div class="subscribe">
			<div class="wrapper">
				<h5 class="tiny_h"><?php _e('Подпишитесь на новые уникальные CV от Рекрутинговой компании Elite.', 'elite');?>    </h5>
				<p class="small_text"><?php _e('Только лучшие кандидаты Казахстана по всем отраслям!', 'elite');?></p>
				<input name="email" placeholder="<?php _e('Электронная почта', 'elite');?>">
				<input type="hidden" value="PlatformaElitekz" name="uri">
				<input type="hidden" name="loc" value="ru_RU">
				<input type="submit" class="bttn" value="<?php _e('ПОДПИСАТЬСЯ', 'elite');?>">
			</div>
	    </div>
	  </form>	
	  <!-- subscribe vakansii ends-->
	  
    </section>
    <!--section platforma_1 ends-->
	
<?php get_footer(); ?>
