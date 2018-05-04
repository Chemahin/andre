

	<div  class="marginLeft admin" >
			<nav class="nav-admin">

				<ul>
					<li class="panel-admin">ПАНЕЛЬ АДМИНА</li>
					<li><a href="<?= URL?>/admin" class="<?php echo ($path=="admin/adminLogin")?'active-admin':'' ; ?>">Главная</a></li>
					<li><a href="<?= URL?>/admin/material" class="<?php echo ($path=="admin/materials")?'active-admin':'' ; ?>">Виды нанесения</a></li>
					<li><a href="<?= URL?>/admin/gallery" class="<?php echo ($path=="admin/gallery")?'active-admin':'' ; ?>">Галерея</a></li>
					<li><a href="#">Оставить коментарий</a></li>
					<li><a href="<?= URL?>/admin/contact" class="<?php echo ($path=="admin/contact")?'active-admin':'' ; ?>">Контакты</a></li>
				</ul>
			</nav>
			
	</div>

