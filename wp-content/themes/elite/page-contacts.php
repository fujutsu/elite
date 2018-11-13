<?php
/*
	* Template Name: Contacts
 */
?>

<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>
    <!--section 9 begins-->
    <section class="part_9">
      <div class="wrapper pad">
        <h1 class="big_h"><?php _e('Контакты', 'elite');?>  </h1>
        <p class="text"><span><?php _e('Офисы Elite предоставлены в Алматы, Астане, Актау и Актобе', 'elite');?></span></p>
        <div class="adress">
		<?php get_template_part( 'templates/contacts' ); ?>
          <div class="right animated invisible">
            <div id="map"> </div>
          </div>
          <!--!= map-->
        </div>
		<!--contact form begins-->
			<?php get_template_part( 'templates/contacts-form' ); ?>
		<!--contact form ens-->
      </div>
    </section>
    <!--section 9 ends-->

<?php get_footer(); ?>