 /**
  * jQuery-viewport-checker - v1.8.7 - 2015-12-17
  * https://github.com/dirkgroenen/jQuery-viewport-checker
  *
  * Copyright (c) 2015 Dirk Groenen
  * Licensed MIT <https://github.com/dirkgroenen/jQuery-viewport-checker/blob/master/LICENSE>
  */
 ! function(a) {
   a.fn.viewportChecker = function(b) {
     var c = {
       classToAdd: "visible",
       classToRemove: "invisible",
       classToAddForFullView: "full-visible",
       removeClassAfterAnimation: !
         1,
       offset: 100,
       repeat: !1,
       invertBottomOffset: !0,
       callbackFunction: function(a,
         b) {},
       scrollHorizontal: !1,
       scrollBox: window
     };
     a.extend(c, b);
     var d = this,
       e = {
         height: a(c.scrollBox).height(),
         width: a(c.scrollBox).width()
       },
       f = -1 != navigator.userAgent.toLowerCase()
       .indexOf("webkit") || -1 !=
       navigator.userAgent.toLowerCase()
       .indexOf("windows phone") ?
       "body" : "html";
     return this.checkElements =
       function() {
         var b, g;
         c.scrollHorizontal ? (b = a(
             f).scrollLeft(), g = b +
           e.width) : (b = a(f).scrollTop(),
           g = b + e.height), d.each(
           function() {
             var d = a(this),
               f = {},
               h = {};
             if (d.data(
                 "vp-add-class") &&
               (h.classToAdd = d.data(
                 "vp-add-class")),
               d.data(
                 "vp-remove-class") &&
               (h.classToRemove = d
                 .data(
                   "vp-remove-class"
                 )), d.data(
                 "vp-add-class-full-view"
               ) && (h.classToAddForFullView =
                 d.data(
                   "vp-add-class-full-view"
                 )), d.data(
                 "vp-keep-add-class"
               ) && (h.removeClassAfterAnimation =
                 d.data(
                   "vp-remove-after-animation"
                 )), d.data(
                 "vp-offset") && (h
                 .offset = d.data(
                   "vp-offset")), d
               .data("vp-repeat") &&
               (h.repeat = d.data(
                 "vp-repeat")), d.data(
                 "vp-scrollHorizontal"
               ) && (h.scrollHorizontal =
                 d.data(
                   "vp-scrollHorizontal"
                 )), d.data(
                 "vp-invertBottomOffset"
               ) && (h.scrollHorizontal =
                 d.data(
                   "vp-invertBottomOffset"
                 )), a.extend(f, c),
               a.extend(f, h), !d.data(
                 "vp-animated") ||
               f.repeat) {
               String(f.offset).indexOf(
                 "%") > 0 && (f.offset =
                 parseInt(f.offset) /
                 100 * e.height);
               var i = f.scrollHorizontal ?
                 d.offset().left :
                 d.offset().top,
                 j = f.scrollHorizontal ?
                 i + d.width() : i +
                 d.height(),
                 k = Math.round(i) +
                 f.offset,
                 l = f.scrollHorizontal ?
                 k + d.width() : k +
                 d.height();
               f.invertBottomOffset &&
                 (l -= 2 * f.offset),
                 g > k && l > b ? (
                   d.removeClass(f.classToRemove),
                   d.addClass(f.classToAdd),
                   f.callbackFunction(
                     d, "add"), g >=
                   j && i >= b ? d.addClass(
                     f.classToAddForFullView
                   ) : d.removeClass(
                     f.classToAddForFullView
                   ), d.data(
                     "vp-animated", !
                     0), f.removeClassAfterAnimation &&
                   d.one(
                     "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
                     function() {
                       d.removeClass(
                         f.classToAdd
                       )
                     })) : d.hasClass(
                   f.classToAdd) &&
                 f.repeat && (d.removeClass(
                     f.classToAdd +
                     " " + f.classToAddForFullView
                   ), f.callbackFunction(
                     d, "remove"),
                   d.data(
                     "vp-animated", !
                     1))
             }
           })
       }, ("ontouchstart" in window ||
         "onmsgesturechange" in
         window) && a(document).bind(
         "touchmove MSPointerMove pointermove",
         this.checkElements), a(c.scrollBox)
       .bind("load scroll", this.checkElements),
       a(window).resize(function(b) {
         e = {
           height: a(c.scrollBox)
             .height(),
           width: a(c.scrollBox).width()
         }, d.checkElements()
       }), this.checkElements(), this
   }
 }(jQuery);
 //# sourceMappingURL=jquery.viewportchecker.min.js.map
 $('.animated').viewportChecker({
   classToAdd: 'zoomInRight',
   classToRemove: 'invisible',
 });
 $('.zoom_background').viewportChecker({
   classToAdd: 'zoom',
 });
 $(document).ready(function() {
   if (window.outerWidth < 1025) {
     // $('.header__video-box').css('background', 'url(../wp-content/themes/elite/images/bg.jpg)');
     $('.header__video').css(
       'display', 'none');
   }
 });
 $(
   '.part_5 .grid .cell, .news_1 .grid .cell'
 ).each(function() {
   var src = $(this).find('img').attr(
     'src');
   var img = $(this).find('.img');
   img.css('background-image',
     'url(' + src + ')')
 })
 $('.part_5 .grid .cell .title').on(
   'mouseenter',
   function() {
     $(this).parent().parent().find(
       '.img').addClass('hover');
   })
 $('.part_5 .grid .cell .title').on(
   'mouseleave',
   function() {
     $(this).parent().parent().find(
       '.img').removeClass('hover');
   })
 $('.news_1 .grid .cell .title').on(
   'mouseenter',
   function() {
     $(this).parent().parent().find(
       '.img').addClass('hover');
   })
 $('.news_1  .grid .cell .title').on(
   'mouseleave',
   function() {
     $(this).parent().parent().find(
       '.img').removeClass('hover');
   })
 ymaps.ready(init);
 var myMap,
   AlmatyPlacemark,
   AstanaPlacemark,
   AlmatyX = 43.252234,
   AlmatyY = 76.934415
   AstanaX = 51.113836,
   AstanaY = 71.424878;

 function init() {
   myMap = new ymaps.Map("map", {
     center: [AlmatyX, AlmatyY],
     zoom: 17,
     controls: [],
   });
   AlmatyPlacemark = new ymaps.Placemark(
     [AlmatyX, AlmatyY], {});
   AstanaPlacemark = new ymaps.Placemark(
     [AstanaX, AstanaY], {});
   myMap.geoObjects.add(AlmatyPlacemark);
   myMap.geoObjects.add(AstanaPlacemark);
 }
 $('select').each(function() {
   var $this = $(this),
     numberOfOptions = $(this).children(
       'option').length;
   $this.addClass('select-hidden');
   $this.wrap(
     '<div class="select"></div>'
   );
   $this.after(
     '<div id="arrowbutton" class="select-styled"></div>'
   );
   var $styledSelect = $this.next(
     'div.select-styled');
   $styledSelect.html($this.children(
     'option').eq(0).html());
   var $list = $('<ul />', {
     'class': 'select-options'
   }).insertAfter($styledSelect);
   for (var i = 0; i <
     numberOfOptions; i++) {
     $('<li />', {
       html: $this.children(
         'option').eq(i).html(),
       rel: $this.children(
         'option').eq(i).val()
     }).appendTo($list);
   }
   var $listItems = $list.children(
     'li');
   $listItems.eq(0).addClass(
     'select-hidden');
   $styledSelect.click(function(e) {
     e.stopPropagation();
     $(
       'div.select-styled.active'
     ).not(this).each(
       function() {
         $(this).removeClass(
           'active').next(
           'ul.select-options'
         ).hide();
       });
     $(this).toggleClass(
       'active').next(
       'ul.select-options').toggle();
   });
   $listItems.click(function(e) {
     e.stopPropagation();
     $styledSelect.html($(this)
       .html()).removeClass(
       'active');
     $this.val($(this).attr(
       'rel'));
     $list.hide();
     $listItems.removeClass(
       'select-hidden');
     $(this).addClass(
       'select-hidden');
     //console.log($this.val());
   });
   $(document).click(function() {
     $styledSelect.removeClass(
       'active');
     $list.hide();
   });
 });
 $('.adress_select').each(function() {
   var $this = $(this),
     numberOfOptions = $(this).children(
       'div').length;
   $this.addClass('select-hidden');
   $this.wrap(
     '<div class="select"></div>'
   );
   $this.after(
     '<div id="sele" class="select-styled"></div>'
   );
   var $styledSelect = $this.next(
     'div.select-styled');
   $styledSelect.html($this.children(
     'div').eq(0).html());
   var $list = $('<ul />', {
     'class': 'select-options'
   }).insertAfter($styledSelect);
   for (var i = 0; i <
     numberOfOptions; i++) {
     $('<li />', {
       html: $this.children(
         'div').eq(i).html(),
       rel: $this.children(
         'div').eq(i).val()
     }).appendTo($list);
   }
   var $listItems = $list.children(
     'li');
   $listItems.eq(0).addClass(
     'select-hidden'); //
   $styledSelect.click(function(e) {
     e.stopPropagation();
     $(
       'div.select-styled.active'
     ).not(this).each(
       function() {
         $(this).removeClass(
           'active').next(
           'ul.select-options'
         ).hide();
       });
     $(this).toggleClass(
       'active').next(
       'ul.select-options').toggle();
   });
   $listItems.click(function(e) {
     // e.stopPropagation();
     $styledSelect.html($(this)
       .html()).removeClass(
       'active');
     $this.val($(this).attr(
       'rel'));
     $list.hide();
     $listItems.removeClass(
       'select-hidden'); //
     $(this).addClass(
       'select-hidden'); //
     if ($(this).find('b').text() ==
       "Алматы" || $(this).find(
         'b').text() ==
       "Almaty") {
       myMap.setCenter([AlmatyX,
         AlmatyY
       ], 17);
     } else if ($(this).find(
         'b').text() ==
       "Астана" || $(this).find(
         'b').text() ==
       "Astana") {
       myMap.setCenter([AstanaX,
         AstanaY
       ], 17);
     }
   });
   $(document).click(function() {
     $styledSelect.removeClass(
       'active');
     $list.hide();
   });
 });
 $('.slider_command').slick({
   dots: false,
   slidesToShow: 1,
   adaptiveHeight: true
 });
 $('.slider_reviews').slick({
   dots: true,
   slidesToShow: 1,
   adaptiveHeight: true,
   arrows: false,
   autoplay: true,
   autoplaySpeed: 3000,
 });
 $('.platforma_slider').slick({
   dots: false,
   slidesToShow: 1,
   fade: true,
   autoplay: true,
   autoplaySpeed: 3000,
 });
 $('.partners-slider').slick({
   dots: false,
   infinite: true,
   speed: 300,
   slidesToShow: 1,
   centerMode: true,
   variableWidth: true,
   autoplay: true,
   autoplaySpeed: 3000
 });
 var tab_height_1 = $('section.part_6')
   .innerHeight();
 var tab_height_2 = (function() {
   $('.buttons_vacancy').removeClass(
     'active');
   $('.buttons_resume').addClass(
     'active');
   return $('section.part_6').innerHeight();
 })();
 $('.buttons_resume').removeClass(
   'active');
 $('.buttons_vacancy').addClass(
   'active');

 function setMaxSizeOnTabsBlock() {
   console.log(tab_height_1);
   console.log(tab_height_2);
   if (tab_height_1 > tab_height_2) {
     $('section.part_6').css('height',
       tab_height_1 + 'px')
   } else {
     $('section.part_6').css('height',
       tab_height_2 + 'px')
   }
 }
 setMaxSizeOnTabsBlock();
 //my
 document.querySelector('li[rel="Eng"]')
   .onclick = function() {
	 location.href = location.href +
       '?locale=eng';
 
   }
 document.querySelector('li[rel="Rus"]')
   .onclick = function() {
 location.href = location.href +
       '?locale=rus';
   }
 document.querySelector('li[rel="Kaz"]')
   .onclick = function() {
 location.href = location.href +
       '?locale=kaz'; 
   }
 setTimeout(function() {
   $(".message").fadeOut(1000);
 }, 3000);
 ///////////////////////
 // Button arrow START//
 ///////////////////////
 $(".arrow_leng_up").click(function() {
   if ($('#arrow_but').attr("class") ==
     'arrow_leng_up') {
     document.querySelector(
         '.arrow_leng').className =
       "arrow_leng";
   }
 });
 document.querySelectorAll(
     '#arrowbutton')[1].onclick =
   function() {
     if (this.classList.contains(
         "active"))
       document.querySelector(
         '.arrow_leng').className =
       "arrow_leng_up";
   }
 $(".arrow_leng").click(function() {
   setTimeout(function() {
     if ($('#arrow_but').attr(
         "class") ==
       'arrow_leng') {
       document.querySelector(
           '.arrow_leng').className =
         "arrow_leng_up";
       if (document.querySelectorAll(
           '#arrowbutton')[1]) {
         document.querySelectorAll(
             '.select-options')[
             1].style.display =
           "block";
       }
     } else if ($('#arrow_but')
       .attr("class") ==
       'arrow_leng_up') {
       document.querySelector(
           '.arrow_leng_up').className =
         "arrow_leng";
     }
   }, 50);
 });
 $(document).mouseup(function(e) { // событие клика по веб-документу
   var div = $(".arrow_leng_up"); // тут указываем ID элемента
   if (!div.is(e.target) // если клик был не по нашему блоку
     &&
     div.has(e.target).length ===
     0) { // и не по его дочерним элементам
     if (document.querySelector(
         '.arrow_leng_up')) {
       document.querySelector(
           '.arrow_leng_up').className =
         "arrow_leng"; // скрываем его
     }
   }
 });
 ///////////////////////
 /// Button arrow END///
 ///////////////////////
 document.querySelector(
     'li[rel="Office"]').onclick =
   function() {
     document.querySelector('.tel').innerHTML =
       '<a href="tel:+77013555355">+7 (701) 355-53-55</a>';
   }
 document.querySelector(
     'li[rel="Almaty"]').onclick =
   function() {
     document.querySelector('.tel').innerHTML =
       '<a href="tel:+77272952802">+7 (727) 295-28-02</a>';
   }
 document.querySelector(
     'li[rel="Astana"]').onclick =
   function() {
     document.querySelector('.tel').innerHTML =
       '<a href="tel:+77017941322">+7 (701) 794-13-22</a>';
   }
   // Sharey news
 $('#share-buttons a').each(function() {
   var link = "";
   switch ($(this).attr('id')) {
     case 'soc_fb':
       link =
         'https://www.facebook.com/sharer/sharer.php?u=' +
         location.href;
       break;
     case 'soc_goog':
       link =
         'https://plus.google.com/share?url=' +
         location.href;
       break;
     case 'soc_li':
       link =
         'http://www.linkedin.com/shareArticle?mini=true&amp;url=' +
         location.href;
       break;
     case 'soc_tw':
       link =
         'https://twitter.com/share?url=' +
         location.href;
       break;
   }
   $(this).attr('href', link)
 })
 setInterval(function() {
   if (document.querySelector(
       '#sele').childNodes[0]){
     var elem = document.querySelector(
       '#sele').childNodes[0];
     elem = elem.nodeValue;
     if (elem === 'Алматы' || elem ===
       'Almaty') {
       $('#lstn').remove();
       var ul = document.createElement(
         'ul');
       $(ul).attr('id', 'lstn');
       if (elem === 'Almaty') {
         ul.innerHTML =
           '<li>Phone</li> <li><a style="color: black;" href="tel:+77013555355">+7 (701) 355-53-55,</a></li> <li>+7 (727) 295-28-02,</li> <li>+7 (727) 266-63-89</li> <li>Email</li> <li><a>info@elite.kz</a></li>';
       } else if (elem === 'Алматы') {
         ul.innerHTML =
           '<li>Телефон</li> <li>+7 (727) 295-28-02,</li> <li>+7 (727) 266-63-89</li> <li>Email</li> <li><a>info@elite.kz</a></li>';
       }
       document.querySelector(
         '#tel').appendChild(ul);
     } else if (elem == 'Астана' ||
       elem === 'Astana') {
       $('#lstn').remove();
       var ul = document.createElement(
         'ul');
       $(ul).attr('id', 'lstn');
       if (elem === 'Astana') {
         ul.innerHTML =
           '<li>Phone</li> <li>+7 (701) 794-13-22</li>  <li>Email</li> <li><a>info@elite.kz</a></li>';
       } else if (elem === 'Астана') {
         ul.innerHTML =
           '<li>Телефон</li> <li>+7 (701) 794-13-22</li>  <li>Email</li> <li><a>info@elite.kz</a></li>';
       }
       document.querySelector(
         '#tel').appendChild(ul);
     }
   }
 }, 1000);
 //file upload
 var wrapper = $(".file_upload"),
   inp = wrapper.find("input"),
   btn = wrapper.find("button"),
   lbl = wrapper.find("div");
 btn.focus(function() {
   inp.focus()
 });
 // Crutches for the :focus style:
 inp.focus(function() {
   wrapper.addClass("focus");
 }).blur(function() {
   wrapper.removeClass("focus");
 });
 // Yep, it works!
 btn.add(lbl).click(function() {
   inp.click();
 });
 // Crutches for the :focus style:
 btn.focus(function() {
   wrapper.addClass("focus");
 }).blur(function() {
   wrapper.removeClass("focus");
 });
 var file_api = (window.File && window.FileReader &&
     window.FileList && window.Blob) ?
   true : false;
 inp.change(function() {
       var file_name;
       if (file_api && inp[0].files[0])
         file_name = inp[0].files[0].name;
       else
         file_name = inp.val().replace(
           "C:fakepath", '' );
           if (!file_name.length)
             return;
           if (lbl.is(":visible")) {
             lbl.text(file_name);
             btn.text("Выбрать");
           } else
             btn.text(file_name);
         }).change(); $(window).resize(
       function() {
         $(".file_upload input").triggerHandler(
           "change");
       });
     ////// tabs
     var tab_height_1 = $(
       'section.part_6').innerHeight();
     var tab_height_2 = (function() {
       $('.buttons_vacancy').removeClass(
         'active');
       $('.buttons_resume').addClass(
         'active');
       return $('section.part_6').innerHeight();
     })(); $('.buttons_resume').removeClass(
       'active'); $('.buttons_vacancy')
     .addClass('active');

     function setMaxSizeOnTabsBlock() {
       if (tab_height_1 > tab_height_2) {
         $('section.part_6').css(
           'height', tab_height_1 +
           'px')
       } else {
         $('section.part_6').css(
           'height', tab_height_2 +
           'px')
       }
     }
     setMaxSizeOnTabsBlock();
     //смена вкладок "БАЗА ВАКАНСИЙ" и "БАЗА РЕЗЮМЕ"
     $('.tab_vacancy').on('click',
       function() {
         $(this).addClass('active');
         $('.buttons_vacancy').addClass(
           'active');
         $('.tab_resume').removeClass(
           'active');
         $('.buttons_resume').removeClass(
           'active');
         document.querySelector(
             '.resume_link').style.display =
           'inline';
         $('.vacancy_text').show();
         $('.resume_text').hide();
       })
     //смена вкладок "БАЗА ВАКАНСИЙ" и "БАЗА РЕЗЮМЕ"
     $('.tab_resume').on('click',
       function() {
         $(this).addClass('active');
         $('.buttons_resume').addClass(
           'active');
         $('.tab_vacancy').removeClass(
           'active');
         $('.buttons_vacancy').removeClass(
           'active');
         document.querySelector(
             '.resume_link').style.display =
           'none';
         $('.vacancy_text').hide();
         $('.resume_text').show();
       })
     // Сменить контакты и адресу 1
     document.querySelector(
       'li b[id="almati"]').parentElement
     .onclick = function() {
       console.log("35");
       var elem = document.querySelector(
         '#sele').childNodes[0];
       elem = this.childNodes[0].childNodes[
         0].data;
       if (elem === 'Алматы' || elem ===
         'Almaty') {
         $('#lstn').remove();
         var ul = document.createElement(
           'ul');
         $(ul).attr('id', 'lstn');
         if (elem === 'Almaty') {
           ul.innerHTML =
             '<li>Phone:</li> <li><a style="color: black;" href="tel:+77013555355">+7 (701) 355-53-55,</a></li> <li>+7 (727) 295-28-02/07/11,</li> <li>+7 (727) 266-63-89/91</li> <li>Email:</li> <li><a>info@elite.kz</a></li>';
         } else if (elem === 'Алматы') {
           ul.innerHTML =
             '<li>Телефон:</li> <li>+7 (727) 295-28-02/07/11,</li> <li>+7 (727) 266-63-89/91</li> <li>Email:</li> <li><a>info@elite.kz</a></li>';
         }
         document.querySelector('#tel')
           .appendChild(ul);
       }
     }
     // Сменить контакты и адресу 2
     document.querySelector(
       'li b[id="astana"]').parentElement
     .onclick = function() {
       var elem = document.querySelector(
         '#sele').childNodes[0];
       elem = this.childNodes[0].childNodes[
         0].data;
       if (elem == 'Астана' || elem ===
         'Astana') {
         $('#lstn').remove();
         var ul = document.createElement(
           'ul');
         $(ul).attr('id', 'lstn');
         if (elem === 'Astana') {
           ul.innerHTML =
             '<li>Phone:</li> <li>+7 (701) 794-13-22</li>  <li>Email:</li> <li><a>info@elite.kz</a></li>';
         } else if (elem === 'Астана') {
           ul.innerHTML =
             '<li>Телефон:</li> <li>+7 (701) 794-13-22</li>  <li>Email:</li> <li><a>info@elite.kz</a></li>';
         }
         document.querySelector('#tel')
           .appendChild(ul);
       }
     };
