<div class="wrap-admin">
	<form action="">
		<div class="form-group">
			<label for="phone1">Телефон №1:</label>
			<input type="text" class="form-control" id="phone1" value="<?= $data[0]['phone1'] ?>">
		</div>
		<div class="form-group">
			<label for="phone2">Телефон №2:</label>
			<input type="text" class="form-control" id="phone2" value="<?= $data[0]['phone2'] ?>">
		</div>
		<div class="form-group">
			<label for="phone3">Телефон №3:</label>
			<input type="text" class="form-control" id="phone3" value="<?= $data[0]['phone3'] ?>">
		</div>
		<div class="form-group">
			<label for="email">Адрес электронной почты:</label>
			<input type="email" class="form-control" id="email" value="<?= $data[0]['email'] ?>">
		</div>
		<div class="form-group">
			<label for="address">Адрес магазина/студии:</label>
			<input type="text" class="form-control" id="address" value="<?= $data[0]['address'] ?>">
		</div>
		<div class="form-group">
			<label for="socialTwiter">Ссылка на Twiter:</label>
			<input type="text" class="form-control" id="socialTwiter" value="<?= $data[0]['social1'] ?>">
		</div>
		<div class="form-group">
			<label for="socialInstagram">Ссылка на Instagram:</label>
			<input type="text" class="form-control" id="socialInstagram" value="<?= $data[0]['social2'] ?>">
		</div>
		<div class="form-group">
			<label for="socialFacebook">Ссылка на Facebook</label>
			<input type="text" class="form-control" id="socialFacebook" value="<?= $data[0]['social3'] ?>">
		</div>
		
		<button type="submit" class="btn btn-default">Сохранить</button>


	</form>
</div>