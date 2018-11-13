<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>
    <!--section platforma_2 begins-->
    <section class="platforma_2">
      <div class="wrapper pad">     
        <h1 class="big_h">platforma</h1>
        <div class="title <?php get_platforma_blok('color'); ?>"><?php _e(trim(wp_title("", false)), 'elite');?> <img src="<?php get_platforma_blok('image'); ?>"></div>
        <!-- classes: purple, light_green, turquoise, pale_green, blue, dark_red, violet, yellow, pink-->
        <div class="grid"> 
		<?php global $cat; query_posts('category__in=' . $cat . '&showposts=10'); ?>
		<?php while (have_posts()) : the_post(); ?>
			<a class="cell" <?php if( get_pdf_link(get_the_ID()) ) echo 'href="' . get_pdf_link(get_the_ID()) . '" target="_blank"'; ?> >
				<?php echo strip_text(get_the_title(), 160); ?>
			</a>
		<?php endwhile; ?>
        </div>
      </div>
    </section>
    <!--section platforma_2 ends-->
<?php get_footer(); ?>