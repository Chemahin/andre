<div class="main-contact" style="background-image: url(<?= URL.'/images/mainContact.jpg' ?>)">
	
	<div class="non-flex" >
		<div class="contact">
			<p><i class="fa fa-phone-square" aria-hidden="true"></i></p> <br>
				<span><?= $data[0]['phone1']?></span>  
				<span><?= $data[0]['phone2']?></span>	<br>
			
			<p><i class="fa fa-envelope-o" aria-hidden="true"></i></p> <br>
				<span><?= $data[0]['email']?></span> <br>
			
			<p><i class="fa fa-map-marker" aria-hidden="true"></i></p>  <br>
				<span><?= $data[0]['address']?></span> 
			<br>
			

			<div class="contact-map">
				<!-- <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a> -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2678.638714870925!2d35.17196747858978!3d47.82721840740205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd7a07ef5b0ecd2d0!2z0KTQkNCg0JHQmNCvLCDQnNCQ0JPQkNCX0JjQnQ!5e0!3m2!1sru!2sua!4v1525448631457" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="andre-img">
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