<?php get_header(); ?>
<?php
echo do_shortcode( '[breadcrumb]' ); 
?>
	<!-- section news_1 begins -->

		<section class="news_1">
			<div class="wrapper pad"> 
			
				<h1 class="big_h">
					<?php _e('новости', 'elite');?>
				</h1>    
				
				<div class="grid">			
					<?php			
						$args=array(			
							'post_status' => 'publish',			
							'paged' => paged(),				
							'posts_per_page' => 12,			
							'caller_get_posts'=> 1,			
							'cat' => 2			
						);	
						
						$temp = $wp_query;		
						$wp_query = null;		
						$wp_query = new WP_Query();		
						$wp_query->query($args);			
					?>	
					
					<?php if( $wp_query->have_posts() ): ?>	
						<?php while($wp_query->have_posts()) : $wp_query->the_post(); ?>			
							<a href="<?php the_permalink(); ?>">			
								<div class="cell"><img src="<?php echo get_the_post_thumbnail_url(); ?>" >		
									<div class="img"></div>		
									<div class="text">							
										<div class="title">
											<span><?php echo strip_text(get_the_title(), 185); ?></span>
										</div>					
										<div class="date"><?php echo get_the_date(); ?></div>		
										<div class="inner_text"><?php echo strip_text(get_the_content(), 155); ?></div>				
									</div>			
								</div>		
							</a>			
						<?php endwhile; ?>		
					<?php wp_reset_postdata(); ?>		
					<?php endif; ?> 
				</div>  
				
			</div>	
			
			<div class="pages_nav">
				<?php my_pagenavi(); ?>
			</div>  	
			<?php wp_reset_query(); ?>	
			
			<?php get_template_part('templates/subscribe-news');?>
			
		</section>  

	<!--section news_1 ends-->

<?php get_footer(); ?>					