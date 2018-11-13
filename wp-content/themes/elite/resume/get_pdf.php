<?php
function upload_photo($file_name)
    {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($file_name['name']);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            $check = getimagesize($file_name["tmp_name"]);
            if ($check === false)
            {
                return 0;
            }

            // Check file size
            if ($file_name["size"] > 500000)
            {
                return 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0)
            {
                return 0;
            }
            else
            {
                if (move_uploaded_file($file_name["tmp_name"], $target_file))
                {
                     return 1;
                }
                else
                {
                    return 0;
                }
            }


    }
    function list_block($arr)
    {
        $data="";
        if(isset($arr))
        {
            $block_count=count($arr[1]['list']);
            $data="";
            for($i=0;$i<$block_count;$i++)
            {
                 $data.="<ul>";
                foreach ($arr as $item)
                {
                    $data.="<li>". ($item['title'].':'.$item['list'][$i])."</li>";
                }
                $data.="</ul>";
            }
            $data.="</ul>";
        }
        return $data;
    }
    function list_items($arr)
    {
        $data="";

		if(isset($arr))
        {
            $data.= "<ul>";
            foreach($arr as $item)
            {
                $data.=  "<li>$item</li>";
            }
            $data.=  "</ul>";
        }
        return $data;
    }
    function show_data($data)
    {
        if(isset($data['value']))
        {
            return "<p>".$data['title']."-".$data['value']."</p>";
        }
    }
 
if(isset($_POST))
{
    require_once 'vendor/autoload.php';
    $data=$_POST;
    $files=$_FILES;
	$main_img=0;
    $cert_img=0;
    $portfolio_img=0;
	print_r($files);
	
	if(isset($_FILES['main_img']))
    {
        if($_FILES['main_img']['error']==0)
        {
            $main_img=upload_photo($_FILES['main_img']);
        }
    }
    if(isset($_FILES['cert']))
    {
        if($_FILES['cert']['error']==0)
        {
            $cert_img=upload_photo($_FILES['cert']);
        }
    }
    if(isset($_FILES['portfolio']))
    {
        if($_FILES['portfolio']['error']==0)
        {
            $portfolio_img=upload_photo($_FILES['portfolio']);
        }
    }
      ob_start(); //Откомментировать для ПДФ
    ?>
<div class="wrapper resume">
		    <img class="logo" src="/wp-content/themes/elite/resume/logo.jpg">  
    <h1>Персональные данные</h1>
		<div class="photo">	
    <?php
	
    if($main_img==1)
		
        echo "<img src='/wp-content/themes/elite/resume/uploads/".$files['main_img']['name']."'>";
    ?>
</div>
	<?php echo "Дата создания резюме:".date('d.n.Y');?>
	<div class="resume">		
    <span class= "name"><p>Имя: <?php echo $data['name'];?></p></span>
    <p>Фамилия: <?php echo $data['surname'];?></p>
    <p>Отчество: <?php echo $data['fathersname'];?></p>
    <p>Дата рождения: <?php echo $data['birthday'];?></p>
    <p>Пол: <?php echo $data['gender'];?></p>
    <p>Город проживания: <?php echo $data['city'];?></p>
    <p>Готовность к переезду: <?php echo $data['pereezd'];?></p>
    <p>Готовность к командировкам: <?php echo $data['kommandirovka'];?></p>
    <p>Гражданство: <?php echo $data['citizen'];?></p>
    <p>Разрешение на работу : <?php echo $data['razreshenie'];?></p>
    <p>Желаемое время до работы  : <?php echo $data['vrema_do_raboty'];?></p>
    <p>Номер телефона   : <?php echo $data['phone_number'];?></p>
    <p>E-mail   : <?php echo $data['email'];?></p>
    <hr>
	
    <!--Второй блок-->
    <h1>Желаемая должность</h1>
    <p>Должность   : <?php echo $data['dolzhnost'];?></p>
    <p>Профессиональная область   : <?php echo $data['prof_oblast'];?></p>
    <p>Желаемая зарплата   : <?php echo $data['salary'];?></p>


    <p>Занятость   : <?php     echo (isset($data['zanyat']) ?list_items($data['zanyat']):"");?></p>
    <p>График работы   : <?php echo (isset($data['grafik'])?list_items($data['grafik']):"");?></p>
    <hr>

    <!--Третий блок-->
    <h1>Опыт работы</h1>
    <?php
        $block=array(
            array('title'=>'Дата начала','list'=>$data['work_start']),
                array('title'=>'Дата окончания','list'=>$data['work_finish']),
                array('title'=>'Название компании','list'=>$data['company_name']),
                array('title'=>'Регион','list'=>$data['work_region']),
                array('title'=>'Сайт компании','list'=>$data['work_web']),
                array('title'=>'Сфера деятельности компании','list'=>$data['work_sphere']),
                array('title'=>'Должность','list'=>$data['work_position']),
                array('title'=>'Обязанности и функции','list'=>$data['work_function']));
        echo list_block($block);
    ?>
<hr>

    <!--Четвертый блок-->
    <h1>Образование</h1>
    <p>Уровень   : <?php echo $data['level'];?></p>
		<?php
	
        $block=array(
             array('title'=>'Учебное заведение','list'=>$data['zavedeniye']),
            array('title'=>'Специальность','list'=>$data['specialnost']),
            array('title'=>'Год окончания','list'=>$data['finish_time']));
        echo list_block($block);
     ?>
<hr>
    <!--Пятый блок-->
    <h1>Курсы / повышение квалификации</h1>
    <?php
    $block=array(
        array('title'=>'Учебное заведение','list'=>$data['kurs_zavedeniye']),
        array('title'=>'Специализация','list'=>$data['kurs_spec']),
        array('title'=>'Дата окончания','list'=>$data['kurs_finish']));
        echo list_block($block);

    ?>
		<hr>
    <h2>Сертификаты / документы</h2>
    <p>Сертификаты   :
        <?php
        if($cert_img==1)
            echo "<img src='uploads/".$files['cert']['name']."'>";
        ?>
    </p>
    <p>Владение языками: <?php echo (isset($data['lang'])?list_items($data['lang']):"");?></p>
<hr>
<!--Шестый блок-->
    <h1>Ключевые навыки</h1>

    <p>Основное   : <?php echo $data['main_navyk'];?></p>
    <p>О себе   : <?php echo $data['about_me'];?></p>
    <p>Личный транспорт   : <?php echo (isset($data['own_car'])? ($data['own_car']):"");?></p>
    <p>Категория прав  : <?php echo $data['license_category'];?></p>
     <h2>Рекомендации</h2>
    <?php

    $block=array(
        array('title'=>'Имя','list'=>$data['recommend_name']),
        array('title'=>'Должность','list'=>$data['recommend_position']),
        array('title'=>'Организация','list'=>$data['recommend_company']));
        echo list_block($block);

    ?>
    <p>Портфолио   :
        <?php
        if($portfolio_img==1)
            echo "<img src='uploads/".$files['portfolio']['name']."'>";
        ?>
    </p>
		<hr>
    <!--Седьмой блок-->
    <h1>Дополнение</h1>

    <p>Комментарии    : <?php echo $data['comments'];?></p>
    <?php
	 
    //Откомментировать блок для ПДФ
    
	/*
	$body = ob_get_clean();
 	$file_name='temp/'.rand(1,10000000).'.pdf';
    $mpdf = new \Mpdf\Mpdf(); 
    $mpdf->WriteHTML( $body);
    $mpdf->Output($file_name,\Mpdf\Output\Destination::FILE);
   echo "<a href='".$file_name."'>Скачать</a>";     */
}

?>
<!--<iframe width="60%" max-height="800" src="<?php echo $file_name?>"></iframe>
</div></div>-->

<style>.wrapper.resume {
    max-width: 80%;
    margin: auto;
}
		img.logo {
    width: 170px;
    float: right;
}
	
		</style>