$(document).ready(function () {
    var current_section_title='personalData';
    var current_section_id=0;
    var section_count=$(".fw-wizard-step-header").length;
     var Data={};
	 // wait for the DOM to be loaded
        var options = {
        success:       showResponse,  // post-submit callback
        url:       '/wp-content/themes/elite/resume/get_pdf.php',
        type:      'post' ,       // 'get' or 'post', override for form's 'method' attribute
        dataType:  'html' ,       // 'xml', 'script', or 'json' (expected server response type)
        timeout:   3000
    };

    function showResponse(responseText, statusText, xhr, $form)  {

        is_open=true;
        $("#submit_form").text(close_text);
        $("#summary").html(responseText);
        $("#summary").show();

    }
    $('#main_form').ajaxForm(options);
 
    activate_section();
	var is_open=false;
	var original_text='Предварительный просмотр';
	var loading_text='Идет загрузка';
	var close_text='Свернуть';
	
    $("#submit_form").on("click",function(){
		if(is_open)
		{
			$("#summary").html('');
			$("#summary").hide();			
			$("#submit_form").text(original_text);
			is_open=false;
		}
		else
		{

		 $("#main_form").ajaxSubmit(options); 
			/*
			$.ajax({
				url: '/wp-content/themes/elite/resume/get_pdf.php',
				data: $( "form#main_form" ).serializeArray(),
				method:'POST',
				dataType: 'html',
				beforeSend: function(){
						$("#submit_form").text(loading_text);
				   },
				   complete: function(){
						$("#submit_form").text(close_text);
				   },
				
				success: function(html)
				{
					is_open=true;
					$("#submit_form").text(close_text);
					$("#summary").html(html);
					$("#summary").show();				
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
        	});	
			*/
		}
		

    });

    $("button[name='remove_recommendation']").on("click",function() {
        var parent = $(this).closest('div[id^="recommendation"]');
        parent.remove();
    });
    $("button[name='add_recommendation']").on("click",function(){
        var count=$('div[id^="recommendation"]').length;
        if(count<5)
        {
            var $div = $('div[id^="recommendation"]:last');
            var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
            var  klon = $div.clone(true).prop('id', 'recommendation'+num );
            klon.find("input[type='text']").val("");
            klon.find("textarea").text("");
            $div.after(klon);
            $(this).prev("button[name='remove_recommendation']").show();
            $(this).remove();
        }
    });


    $("button[name='remove_language']").on("click",function() {
        var parent = $(this).closest('div[id^="language"]');
        parent.remove();
    });
    $("button[name='add_language']").on("click",function(){
        var count=$('div[id^="language"]').length;
        if(count<5)
        {
            var $div = $('div[id^="language"]:last');
            var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
            var  klon = $div.clone(true).prop('id', 'language'+num );
            klon.find("input[type='text']").val("");
            klon.find("textarea").text("");
            $div.after(klon);
            $(this).prev("button[name='remove_language']").show();
            $(this).remove();
        }
    });

    $("button[name='remove_kurs']").on("click",function() {
        var parent = $(this).closest('div[id^="kurs"]');
        parent.remove();
    });
    $("button[name='add_kurs']").on("click",function(){
        var count=$('div[id^="kurs"]').length;
        if(count<5)
        {
            var $div = $('div[id^="kurs"]:last');
            var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
            var  klon = $div.clone(true).prop('id', 'kurs'+num );
            klon.find("input[type='text']").val("");
            klon.find("textarea").text("");
            $div.after(klon);
            $(this).prev("button[name='remove_kurs']").show();
            $(this).remove();
        }
    });

    $("button[name='remove_education']").on("click",function() {
        var parent = $(this).closest('div[id^="education"]');
        parent.remove();
    });
    $("button[name='add_education']").on("click",function(){
        var count=$('div[id^="education"]').length;
        if(count<5)
        {
            var $div = $('div[id^="education"]:last');
            var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
            var  klon = $div.clone(true).prop('id', 'education'+num );
            klon.find("input[type='text']").val("");
            klon.find("textarea").text("");
            $div.after(klon);
            $(this).prev("button[name='remove_education']").show();
            $(this).remove();
        }
    });

    $("button[name='remove_work']").on("click",function() {
        var parent = $(this).closest('div[id^="work"]');
         parent.remove();
    });
    $("button[name='add_work']").on("click",function(){
        var count=$('div[id^="work"]').length;
        if(count<5)
        {
            var $div = $('div[id^="work"]:last');
            var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
            var  klon = $div.clone(true).prop('id', 'work'+num );
            klon.find("input[type='text']").val("");
            klon.find("textarea").text("");
            $div.after(klon);
            $(this).prev("button[name='remove_work']").show();
            $(this).remove();
        }
    });

    $("span.fw-txt-ellipsis").on("click",function(){
        current_section_id=$(this).data('id');
        activate_section();
    });
    $(".fw-button-next").on("click",function(){
		//        saveData(current_section_id);
        if(current_section_id<(section_count-1))
        {
            current_section_id++;
            activate_section();
        }

    });
    $(".fw-button-previous").on("click",function(){
        if(current_section_id>0)
        {
            current_section_id--;
            activate_section();
        }
    });
    function activate_section()
    {
        if(current_section_id==6)
		{
			$("button.fw-button-next").text('Отправить');
		}
		else
		{
			$("button.fw-button-next").text('Далее');			
		}
        $(".fw-wizard-step.fw-current").removeClass('fw-current');
        $(".fw-progress-step.fw-active").removeClass('fw-active');
        $("div[data-stepid='"+current_section_id+"']").addClass('fw-current');
        $("li[data-id='"+current_section_id+"']").addClass('fw-active');
    }
    function saveData(section)
    {
        step=$(".fw-wizard-step[data-stepid='"+section+"']");
        inputs=$(step).find("input");
        Data[section]=inputs.serializeArray();
        alert(JSON.stringify(Data));
    }
});