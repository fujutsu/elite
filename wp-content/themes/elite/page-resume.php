<?php
/*
	* Template Name: Резюме
 */


?>

<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>
    <!--section 9 begins-->
    <section class="part_9">
      <div class="wrapper pad">
        <h1 class="title_resume"><?php _e('Загрузка резюме', 'elite');?></h1>
        <div class="content pad">
			<div class="text"></div>
	
			<?php if(get_locale() == 'ru_RU') { ?>
			<?php echo do_shortcode('[contact-form-7 id="402" title="Загрузка резюме"]'); ?>
			<?php } elseif(get_locale() == 'en_GB') { ?>
			<?php echo do_shortcode('[contact-form-7 id="406" title="Download resume"]'); } ?>
					
        </div>
      </div>
    </section>
    <!--section 9 ends-->
	
<?php get_footer(); ?>