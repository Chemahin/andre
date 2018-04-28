<div class="main-contact" style="background-image: url(<?= URL.'/images/main.jpg' ?>)">
	
	<div class="non-flex" >
		<div class="contact">
			<h1>Контактная информация:</h1> <hr>
			<p>Телефон: </p>
				<span><?= $data[0]['phone1']?></span> <br> 
				<span><?= $data[0]['phone2']?></span>	
			
			<p>Email: </p>
				<span><?= $data[0]['email']?></span> 
			
			<p>Адрес: </p> 
				<span><?= $data[0]['address']?></span> 
			
			<hr>

			<div class="contact-social">
				<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="andre-img">
			<img src="<?= URL.'/images/addressDownloadFon.jpg' ?>" alt="" class="andre-fon">
			<img src="<?= URL.'/images/'.$data[0]['imageFace'] ?>" alt="" class="andre">
		</div>


		
	</div>
	
	
</div>

<script type="text/javascript">

	var wrap = document.getElementsByClassName('non-flex')[0];


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
		wrap.classList.remove('non-flex');
		wrap.classList.add('wrap-flex');

	}
</script>