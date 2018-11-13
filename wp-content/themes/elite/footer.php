    <!-- footer begins-->
    <footer>  
      <div class="wrapper pad">
        <div class="logo">
			 </div>		
        <ul class="col_1">
          <li><a href="<?php echo home_url(); ?>/about-team/"><?php _e('о компании', 'elite');?></a></li>
          <li><a href="<?php echo home_url(); ?>/category/news/"><?php _e('новости', 'elite');?></a></li>
          <li><a href="<?php echo home_url(); ?>/kontakty/"><?php _e('контакты', 'elite');?></a></li>
	<li><?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?></li>
        </ul>
        <ul class="col_2">
          <li><a href="<?php echo home_url(); ?>/uslugi/"><?php _e('Услуги', 'elite');?></a></li>
          <li><a href="<?php echo home_url(); ?>/uslugi/podbor-personala/"><?php _e('Подбор персонала', 'elite');?><?echo $title;?></a></li>
          <li><a href="<?php echo home_url(); ?>/uslugi/autstaffing/"><?php _e('Аутстаффинг', 'elite');?></a></li>
          <li><a href="<?php echo home_url(); ?>/uslugi/obzory-rynka-truda-i-zarabotnyh-plat/"><?php _e('Обзоры рынка труда и заработных плат', 'elite');?></a></li>
          <li><a href="<?php echo home_url(); ?>/uslugi/kadrovoe-administrirovanie/"><?php _e('Кадровое администрирование', 'elite');?></a></li>
		  <li><a href="<?php echo home_url(); ?>/uslugi/raschet-zarabotnyh-plat/"><?php _e('Расчет заработных плат', 'elite');?></a></li>
        </ul>
        <ul class="col_3">
          <li><a href="<?php echo home_url(); ?>/uslugi/yuridicheskij-konsalting-v-upravlenii-personalom/"><?php _e('Аутстаффинг иностранного персонала', 'elite');?></a></li>
          <li><a href="<?php echo home_url(); ?>/uslugi/konsultatsiya-i-pomoshh-sokrashhennomu-personalu/"><?php _e('Помощь сокращенному персоналу', 'elite');?></a></li>
          <li><a href="<?php echo home_url(); ?>/uslugi/vneshnee-upravlenie-biznes-protsessami/"><?php _e('Аутсорсинг персонала', 'elite');?></a></li>
		  <li><a href="<?php echo home_url(); ?>/uslugi/obuchenie-i-razvitie-personala/"><?php _e('Обучение и развитие персонала', 'elite');?></a></li>		 <?php get_search_form(); ?> 
		         </ul>		  
		  <ul class="col_4">
          <li><a href="<?php echo home_url(); ?>/vakansii/"><?php _e('вакансии', 'elite');?></a></li>
          <li><a href="<?php echo home_url(); ?>/category/platforma/"><?php _e('Platforma', 'elite');?></a></li>
          <li><a href="http://youngstaff.kz/" rel="nofollow">Young staff</a></li>
        </ul>
        <div class="copy">Elite © 2018  
          <div class="credits"><?php _e('Разработано в', 'elite');?> <br> <a href="http://elite.kz" rel="nofollow"><?php _e('ELITE', 'elite');?></a></div>
        </div>
      </div> 
	  
<!--Google Analytics start 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100371168-1', 'auto');
  ga('send', 'pageview');

</script>
Google Analytics end -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48418352 = new Ya.Metrika({
                    id:48418352,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48418352" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

		<!-- Markup (JSON-LD) structured in schema.org ver.4.2.1 START -->
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "SiteNavigationElement",
    "name": [
        "Услуги",
        "Вакансии",
        "Подбор персонала",
        "Аутстаффинг",
        "Новости",       
        "Контакты"
    ],
    "url": [
         "http://elite.kz/uslugi/",
        "http://elite.kz/vakansii/",  
        "http://elite.kz/uslugi/podbor-personala/",              
        "http://elite.kz/uslugi/autstaffing/",
        "http://elite.kz/category/news/",
        "http://elite.kz/kontakty/"
    ]
}
</script>
<!-- Markup (JSON-LD) structured in schema.org END -->
		
<!-- RedConnect -->
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
src="https://web.redhelper.ru/service/main.js?c=sales71"></script>
<div style="display: none"><a class="rc-copyright" 
href="http://redconnect.ru">Сервис обратного звонка RedConnect</a></div>
<!--/RedConnect -->

    </footer>
    <!-- footer ends-->
	<?php wp_footer(); ?>
  </body>
</html>
