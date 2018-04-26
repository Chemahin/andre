<div class="main-contact">
	<div class="wrap-img" style="background-image: url(<?= URL.'/images/addressDownloadFon.jpg'?>)"></div>
	<div class="wrap-fon"></div>
	<div class="wrap-flex" style="background-image: url(<?= URL.'/images/addressFon.jpg'?>)">
		<div class="contact">
			<h1>Контактная информация:</h1> <hr>
			<p>Телефон: <br> 
				<span><?= $data[0]['phone1']?></span> <br> 
				<span><?= $data[0]['phone2']?></span>	
			</p>
			<p>Email: <br> 
				<span><?= $data[0]['email']?></span> 
			</p>
			<p>Адрес: <br> 
				<span><?= $data[0]['address']?></span> 
			</p>
		</div>
		<div class="andre-img">
			<img src="<?= URL.'/images/'.$data[0]['imageFace'] ?>" alt="" class="andre">
		</div>
		
	</div>
	<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2678.776663671228!2d35.16973322803341!3d47.82454536427148!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd7a07ef5b0ecd2d0!2z0KTQkNCg0JHQmNCvLCDQnNCQ0JPQkNCX0JjQnQ!5e0!3m2!1sru!2sua!4v1524673333084" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	
</div>

<script type="text/javascript">
	var wrapImg = document.getElementsByClassName('wrap-img')[0];
	var wrapFon = document.getElementsByClassName('wrap-fon')[0];
	var userWindHeight = window.innerHeight;
	var elemBody = document.getElementsByTagName('body')[0];
	elemBody.style.overflow="hidden";
	wrapImg.style.height=userWindHeight+"px";
	wrapFon.style.height=userWindHeight+"px";

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

	
	

if(getCookie('side')==1 && getCookie('andre')==1)
	{
		fon();
	}
else{
	if(getCookie('andre')==1 && getCookie('side')==0){
		setTimeout(fon, 4000);
	}
}


	function fon() 
	{
		wrapImg.classList.remove('wrap-img');
		wrapFon.classList.remove('wrap-fon');
		wrapImg.classList.add('none-fon');
		wrapFon.classList.add('none-fon');

	}
</script>