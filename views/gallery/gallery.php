<div class="galley-wrap">
	<h2>Галерея</h2>

	<div id="gallery" style="display:none;">
		<?php for ($i=0; $i < count($data1); $i++): ?>
			
			<img alt="<?= $data1[$i]['imagesText']?>"
			     src="<?= URL.'/images/'.$data1[$i]['imagesPath']?>"
			     data-image="<?= URL.'/images/'.$data1[$i]['imagesPath']?>"
			     data-description="<?= $data1[$i]['imagesText']?>"
			     style="display:none">
			
		<?php endfor; ?>
	</div>




</div>
<script>

		(function($, undefined){
		$(function(){

			$("#gallery").unitegallery();
			

			});

})(jQuery);
		
	</script>