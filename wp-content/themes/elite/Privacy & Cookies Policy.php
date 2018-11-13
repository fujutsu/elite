<?php
/*
 * Template Name: Privacy & Cookies Policy
 */
?>

<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>
    <section class="news_2">
      <div class="wrapper pad">     
        <h2 class="big_h"><?php _e('Cookie файлы', 'elite');?></h2>
        <div class="content pad">
		<?php the_post(); ?>
			<h1 class="small_h"><?php echo get_the_title(); ?></h1>
                  <div class="text"><img src="<?php echo get_the_post_thumbnail_url( $post, 'medium' ); ?>"><?php echo the_content(); ?></div>
        </div>
      </div>	  
	  
	      </section>
 

<?php get_footer(); ?>