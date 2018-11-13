<?php
/*
	Template Name Posts: single-news
*/
?>
<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>
<!--section news_2 begins-->
    <section class="news_2">
      <div class="wrapper pad">     
        <h2 class="big_h"><?php _e('новости', 'elite');?></h2>
        <div class="content pad">
		<?php the_post(); ?>
          <div class="date"> <?php echo get_the_date(); ?></div>
          <h1 class="small_h"><?php echo get_the_title(); ?></h1>
          <div class="text"><img src="<?php echo get_the_post_thumbnail_url( $post, 'medium' ); ?>"><?php echo the_content(); ?></div>
        </div>
      </div>	  
	  <div class="social">
		<div class="wrapper">          
         <div id="share-buttons">
           <!-- Facebook--><a href="" id="soc_fb" target="_blank" ><img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook"></a>
           <!-- Google+--><a href="" id="soc_goog" target="_blank" ><img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google"></a>
           <!-- LinkedIn--><a href="" id="soc_li" target="_blank" ><img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn"></a>
           <!-- Twitter --><a href="" id="soc_tw" target="_blank" ><img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter"></a>
         </div>
		</div>
	  </div>	  
	  <?php get_template_part('templates/subscribe-news');?>
	      </section>
    <!--section news_2 ends-->

<?php get_footer(); ?>