<?php
/*
 * Template Name: About team
 */
?>

<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>
    <!--section about_2 begins-->
    <section class="about_1 about_2">
      <div class="wrapper pad">     
        <h1 class="big_h"><?php _e('о компании', 'elite');?></h1>
        <div class="buttons"><a class="bttn selected" href="<?php echo home_url(); ?>/about-team/"><?php _e('О компании', 'elite');?></a><a class="bttn" href="<?php echo home_url(); ?>/about-code-of-ethics/"><?php _e('Этический кодекс', 'elite');?></a></div>
        <div class="content pad">
		<?php global $post; ?>
		<?php if(get_locale() == 'ru_RU') : ?>
			<?php echo $post->post_content; ?>
		<?php elseif(get_locale() == 'en_GB') : ?>
			<?php echo !empty($post->post_content_en) ? $post->post_content_en : $post->post_content; ?>
			<?php elseif(get_locale() == 'kk') : ?>
			<?php echo !empty($post->post_content_kk) ? $post->post_content_kk : $post->post_content; ?>
		<?php endif; ?>
			<?php #the_post(); ?>
			<?php #the_content(); ?>
        </div>
      </div>
      <div class="links">
        <div class="wrapper pad">
          <div class="presentation pad"><a href="https://drive.google.com/open?id=0B-GJ81XzcXQOTENlUUwwNktIajg"><?php _e('Также можете скачать презентацию', 'elite');?></a><span>   (2,4 <?php _e('Мб', 'elite');?>, .pptx)</span></div>

<!--<div class="presentation pad"><a href="<?php get_presentation_link(); ?>"><?php _e('Также можете скачать презентацию', 'elite');?></a><span>   (2,4 <?php _e('Мб', 'elite');?>, .ppsx)</span></div>-->


          <div class="codex pad"> <a href="<?php echo home_url(); ?>/about-code-of-ethics/"><?php _e('Ознакомьтесь с нашим профессионально-этический кодексом консультантов по подбору персонала', 'elite');?></a></div>
        </div>
      </div>
    </section>
    <!--section about_2 ends-->
 

<?php get_footer(); ?>