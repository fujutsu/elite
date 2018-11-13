<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
<div class="wrapper pad">    
&nbsp;
	&nbsp;
	&nbsp;
								
									<h1 class="header" style="padding-left: 30px;">Запрашиваемая станица не найдена</h1>
&nbsp;
<p style="padding-left: 30px; text-align: left;">Что-то пошло не так. <br/>Возможно, вы ошиблись, набирая адрес в строке браузера — так бывает. <br/>Если вы уверены, что адрес набран верно, <br/>то страница, скорее всего, была удалена и ее больше нет.</p>
&nbsp;
<p style="padding-left: 30px; text-align: left;">Но не отчаивайтесь! перейдите на&nbsp;<span style="color: #0000ff;"><a style="color: #0000ff;" href="http://elite.kz">главную страницу</a></span></p>
<p style="padding-left: 30px; text-align: left;">или воспользуйтесь ссылками ниже:</p>
	
&nbsp;
	
<div class="error-text">
<ul style="list-style-type: square;">
 	<li><a title="Вакансии" href="http://elite.kz/vakansii/"><span style="color: #0000ff;">Поиск вакансий</span></a></li>
 	<li><a href="http://elite.kz/zagruzka-rezyume/"><span style="color: #0000ff;">Загрузка резюме</span></a></li>
 	<li><a href="http://elite.kz/uslugi"><span style="color: #0000ff;">Полный список услуг</span></a></li>
</ul>
</div>
<div class="error"><img class="size-full wp-image-2192 alignright" src="http://elite.kz/wp-content/uploads/2018/04/404.jpg" alt="404" width="245" height="280"></div>		</div>
	
<?php get_footer(); ?>
