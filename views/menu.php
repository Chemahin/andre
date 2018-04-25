


	<div  class="menu-block" >
		<header>
			<img src="<?= URL?>/images/logo2.png" alt="" class="logo">
			<h1>Андрей Гаврилов</h1>
			<h2>мастер декоративной штукатурки</h2>
			<img src="<?= URL?>/images/candelabr.png" alt="" class="ckandelabr">
			<nav>

				<ul>
					<li><a href="<?= URL?>" class="<?php echo ($path=="home/main")?'active':'' ; ?>">Главная</a></li>
					<li><a href="<?= URL?>/material" class="<?php echo ($path=="materials/materials")?'active':'' ; ?>">Виды нанесения</a></li>
					<li><a href="#">Галерея</a></li>
					<li><a href="#">Оставить коментарий</a></li>
					<li><a href="<?= URL?>/contact" class="<?php echo ($path=="contact/contact")?'active':'' ; ?>">Контакты</a></li>
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

<script type="text/javascript">

function setCookie(name, val, m){
	if(m!=0)
		{
			var d=new Date(); 
				d.setMonth(d.getMonth()+m);
				document.cookie=name+"="+escape(val)+"; expires="+d.toUTCString()+";"
			}
	else 
		{
			document.cookie=name+"="+escape(val)+";"
		}
	}
	
	
	
	function getCookie(name){
		var end="";
		var cook=document.cookie;// Login=Petya; pass=5678; color=333

		var reg=new RegExp("\\b"+name+"=", "g");
		if(reg.test(cook)==false)
			{return end;}
		else
			{
				var pos=cook.search(reg);//позиция имени(pass= или color=)
				var pos2=cook.indexOf("=", pos);//позиция равно, кот. идет после позиции имени(pass= или color=)
				var pos3=cook.indexOf(";", pos);//позиция ;, кот. идет после позиции имени(pass= или color=)
				if(pos3==-1)
				{
					return unescape(cook.slice(pos2+1))
					}
				else
				{
					return unescape(cook.slice(pos2+1, pos3))
					}
			}
		}





</script>

<?php 
//////////////////////////////////-----------MAIN----------------/////////////////////////
if($path=="home/main"):
 ?>


<script type="text/javascript">
	
	var userWindHeight = window.innerHeight;
	var elemMenu = document.getElementsByClassName('menu-block')[0];
	elemMenu.style.height=userWindHeight+"px";
	elemMenu.style.top= -userWindHeight+"px";

	if(getCookie('andre')=='' && getCookie('side')==''){
		setCookie('andre', 1, 10)
		setCookie('side', 0, 10)
		elemMenu.classList.add('marginCenter');
	}
	else{
		if(getCookie('side')==0){
			setCookie('andre', 1, 10)
			setCookie('side', 0, 10)
			elemMenu.classList.add('marginCenter');
		}
		else{
			setCookie('andre', 1, 10)
			setCookie('side', 0, 10)
			setTimeout(function(){
				elemMenu.classList.add('moveCenter');
				
			},1000);
			setTimeout(function(){
				elemMenu.classList.add('marginCenter');
				
			},3000);
		}
	}


</script>



<?php
//////////////////////////////////-----------SIDE----------------/////////////////////////
 else: ?>

<script type="text/javascript">
	
	var userWindHeight = window.innerHeight;
	var elemMenu = document.getElementsByClassName('menu-block')[0];
	elemMenu.style.height=userWindHeight+"px";
	elemMenu.style.top= "0px";	

	if(getCookie('andre')=='' && getCookie('side')==''){
		setCookie('andre', 1, 10)
		setCookie('side', 1, 10)
		elemMenu.classList.add('marginLeft');
	}
	else{
		if(getCookie('side')==1){
			setCookie('andre', 1, 10)
			setCookie('side', 1, 10)
			elemMenu.classList.add('marginLeft');
		}
		else{
			setCookie('andre', 1, 10)
			setCookie('side', 1, 10)
			elemMenu.classList.add('marginCenter');
			setTimeout(function(){
				elemMenu.classList.add('moveLeft');
			},1000);
			setTimeout(function(){
				elemMenu.classList.remove('marginCenter');
				elemMenu.classList.add('marginLeft');
			},3000);
		}
	}	


</script>
<?php endif; ?>
