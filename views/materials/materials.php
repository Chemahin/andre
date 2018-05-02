<div class="main-material" style="background-image: url(<?= URL.'/images/materialFon.jpg' ?>)">
	<div class="wrap">

		<?php for ($i=0; $i < count($data1); $i++): ?>
			
			<div class="material-item">
				<div class="item-image" style="background-image: url(<?= URL.'/images/'.$data1[$i]['imagesPathMain'] ?>)" data-img="<?= URL.'/images/'.$data1[$i]['imagesPathMain']?>" data-text="<?= $data1[$i]['imagesTextMain']?>">
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
	


	for (let i = 0; i < img.length; i++) {
		img[i].addEventListener('click', function(){
			let src = this.dataset.img;
			let text = this.dataset.text;
			let mainDataImg = mainImg.dataset.img;
			let mainDataText = mainImg.dataset.text;
			this.src=mainDataImg;
			mainImg.style.backgroundImage="url("+src+")";
			mainText.innerHTML= text;
			this.dataset.img = mainDataImg;
			this.dataset.text = mainDataText;
			mainImg.dataset.img = src;
			mainImg.dataset.text = text;
		})
	}
	
	
</script>




		