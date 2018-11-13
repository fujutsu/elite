<?php
/*
 * Template Name: Категории вакансий
 */
?>

<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>

    <!--section vacancies_2 begins-->
    <section class="vacancies_2">
      <div class="wrapper pad">     
        <h2 class="big_h"><?php _e('вакансии', 'elite');?>        </h2>
        <h1 class="main_title pad animated invisible"><?php _e( single_cat_title('', 0), 'elite' ); ?></h1>
        <div class="grid">
			

		  <?php global $cat;  query_posts('category__in=' . $cat . '&showposts=9999'); ?>
		  <?php while (have_posts()) : the_post(); ?>
			  <a href="<?php the_permalink(); ?>">
				  <div class="cell animated invisible">
					<div class="text">
					  <div class="title"><span><?php echo strip_text(get_the_title(), 185); ?></span></div>
					  <div class="date"><?php echo get_the_date(); ?></div>
					  <p class="inner_text"><?php echo strip_text(get_the_content(), 250); ?></p>
					</div>
				  </div>
			  </a>
		  <?php endwhile; ?>
        </div>
      </div>
	  <?php get_template_part('templates/subscribe-vakansii');?>
    </section>
    <!--section vacancies_2 ends-->
<?php get_footer(); ?>