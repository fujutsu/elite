<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>


    <!--section vacancies_3 begins-->
    <section class="vacancies_3">
      <div class="wrapper pad">     
        <h2 class="big_h"><?php _e('вакансии', 'elite');?>        </h2>
		<?php the_post(); ?>
        <h1 class="main_title pad"><?php echo get_the_title(); ?></h1>
        <div class="content pad">
          <div class="date"> <?php echo get_the_date(); ?></div>
			 <div class="text-vacancy"><img src="<?php echo get_the_post_thumbnail_url( $post, 'medium' ); ?>"><?php echo the_content(); ?>
        </div>
      </div></div>
	  
	  <div class="social">
		<div class="wrapper"><a class="bttn" href="<?php echo home_url(); ?>/zagruzka-rezyume/"><?php _e('откликнуться', 'elite');?></a>
			<div id="share-buttons">
				<!-- Facebook--><a href="" id="soc_fb" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook"></a>
				<!-- Google+--><a href="" id="soc_goog" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google"></a>
				<!-- LinkedIn--><a href="" id="soc_li" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn"></a>
				<!-- Twitter --><a href="" id="soc_tw" target="_blank"><img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter"></a>
			</div>
		</div>
	  </div> 
	<?php get_template_part('templates/subscribe-vakansii');?>
    </section>
    <!--section vacancies_3 ends-->




<?php get_footer(); ?>