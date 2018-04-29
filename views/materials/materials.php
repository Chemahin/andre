<div class="main-material" style="background-image: url(<?= URL.'/images/materialFon.jpg' ?>)">
	<div class="wrap">

		<?php for ($i=0; $i < count($data1); $i++): ?>
			
			<div class="material-item">
				<div class="item-image" style="background-image: url(<?= URL.'/images/'.$data1[$i]['imagesPathMain'] ?>)">
					<div class="image-text">
						<p class="it-text"> <?= $data1[$i]['imagesTextMain']?></p>
					</div>
				</div>
				<div class="item-text">
					<div class="text-wrap">
						<h1><?= $data1[$i]['zagolovok']?></h1>
						<p><?= $data1[$i]['mainText']?></p>
						<div class="itemText-img">
							<div class="img">
								<img class="small-img" src="<?= URL.'/images/'.$data1[$i]['imagesPathSide1']?>" alt="img" data-img="<?= URL.'/images/'.$data1[$i]['imagesPathSide1']?>" data-text="<?= $data1[$i]['imagesTextSide1']?>" />
							</div>
							<div class="img">
								<img class="small-img" src="<?= URL.'/images/'.$data1[$i]['imagesPathSide2']?>" alt="img" data-img="<?= URL.'/images/'.$data1[$i]['imagesPathSide2']?>" data-text="<?= $data1[$i]['imagesTextSide2']?>"/>
							</div>
							<div class="img">
								<img class="small-img" src="<?= URL.'/images/'.$data1[$i]['imagesPathSide3']?>" alt="img" data-img="<?= URL.'/images/'.$data1[$i]['imagesPathSide3']?>" data-text="<?= $data1[$i]['imagesTextSide3']?>" />
							</div>
							<div class="img">
								<img class="small-img" src="<?= URL.'/images/'.$data1[$i]['imagesPathSide4']?>" alt="img" data-img="<?= URL.'/images/'.$data1[$i]['imagesPathSide4']?>" data-text="<?= $data1[$i]['imagesTextSide4']?>" />
							</div>
							
						</div>
					</div>
				</div>
			</div>

		<?php endfor; ?>



		
	</div>

<script>
	var mainImg = document.getElementsByClassName('item-image')[0];
	var mainText = document.getElementsByClassName('it-text')[0];
	var img = document.getElementsByClassName('small-img');
	


	for (let i = 0; i < img.length+1; i++) {
		img[i].addEventListener('click', function(){
			let src = img[i].dataset.img;
			let text = img[i].dataset.text;
			mainImg.style.backgroundImage="url("+src+")";
			mainText.innerHTML= text;

			})
	}
	
	
</script>




		