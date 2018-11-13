<div class="form">
	<div class="title"><?php _e('Напишите нам', 'elite');?></div>
	<form action="" method="POST">
		<input placeholder="<?php _e('Ваше имя', 'elite');?>" name="form_name" required>
		<input placeholder="E-mail"  name="form_email" required>
		<textarea placeholder="<?php _e('Сообщение', 'elite');?>" name="form_message" required></textarea>
		<button class="bttn" type="submit"><?php _e('Отправить', 'elite');?></button>
		<div class="g-recaptcha" data-sitekey="6LfC3FMUAAAAAP0_EYHmjEJEzLpH9XD8g6fRH8wj"></div>
	</form>
</div>