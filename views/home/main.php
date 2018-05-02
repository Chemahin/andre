<div class="main-div" style="background-image: url(<?= URL.'/images/'.$data[0]['imageMain'] ?>)"></div>

<script type="text/javascript">
	window.onload = setSize();


	function setSize()
	{
		
		var elemMain = document.getElementsByClassName('main-div')[0];
		var elemBody = document.getElementsByTagName('body')[0];
		elemMain.style.height="100vh";
		elemBody.style.overflow="hidden";
		
	}

	function moveFonMainDiv() 
	{
		var elemMain = document.getElementsByClassName('main-div')[0];
		elemMain.style.transition= 'all 5s ease-out';
		elemMain.style.transform= 'scale(1.3)';

	}
	
	setTimeout(moveFonMainDiv, 400);
</script>


