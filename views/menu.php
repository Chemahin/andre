
	<div class="menu-block" style="background: black,">
		<header>
			<img src="<?= URL?>/images/logo2.png" alt="" class="logo">
			<h1>Андрей Гаврилов</h1>
			<h2>мастер декоративной штукатурки</h2>
			<img src="<?= URL?>/images/candelabr.png" alt="" class="ckandelabr">
			<nav>
				<ul>
					<li><a href="#">Главная</a></li>
					<li><a href="#">Виды нанесения</a></li>
					<li><a href="#">Галерея</a></li>
					<li><a href="#">Оставить коментарий</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</nav>
			<img src="<?= URL?>/images/candelabr.png" alt="" class="ckandelabr ckandelabr-down">
		</header>
		<footer>
			<div class="phone">
				<p><?= $data[0]['phone1']?></p>
				<p><?= $data[0]['phone2']?></p>
				
			</div>
			
			<p><?= $data[0]['address']?></p>
			<div class="social">
				<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</div>
		</footer>
	</div>
