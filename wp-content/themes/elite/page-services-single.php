<?php
/*
 * Template Name: Услуги (запись)
 */
?>
<?php get_header(); ?>
	<!-- services 2 begins -->
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>

	<div class="services_2">			<div class="wrapper pad">		
			<h2 class="big_h"><?php _e('услуги', 'elite');?></h2>
			<h1 class="title <?php echo get_services_param('color'); ?>"><?php _e(get_the_title(), 'elite'); ?><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/svg/<?php echo get_services_param('icon'); ?>"></h1>
			<!-- classes: bg_red, bg_viol, bg_green, bg_turk, bg_skyblue, bg_blue, bg_yel, bg_purple, bg_ora -->			
			<div class="content pad">
				<?php global $post; ?>				
				<?php if( get_locale() == 'ru_RU' ) : ?>
					<?php echo $post->post_content; ?>
				<?php elseif( get_locale() == 'en_GB' ) : ?>
					<?php echo !empty( $post->post_content_en ) ? $post->post_content_en : $post->post_content; ?>
				
				<?php elseif( get_locale() == 'kk' ) : ?>
					<?php echo !empty( $post->post_content_kk ) ? $post->post_content_kk : $post->post_content; ?>
				<?php endif; ?>
			</div>			
			<div class="grid">
				<?php get_services_list(); ?>
			</div>			
		</div>		
		<?php if(get_locale() == 'ru_RU') { ?>
			<?php echo do_shortcode('[contact-form-7 id="431" title="Закажите эту услугу"]'); ?>
		<?php } elseif(get_locale() == 'en_GB') { ?>
			<?php echo do_shortcode('[contact-form-7 id="432" title="Order this service"]'); } ?> 		
	</div>
	<!-- services 2 ends    -->
<?php get_footer(); ?>