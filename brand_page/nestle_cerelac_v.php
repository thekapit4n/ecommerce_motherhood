<style>
<!-- 
	.nbs-flexisel-container{
	   border:0px;
	}
	
	#scroll_content_top{
		display:none;
	}
	
	input[type="checkbox"]{
		outline:none !important;
	}

	.btn-category{
		width: 30%;
		padding-top: 10px;
		padding-bottom: 10px;
		font-size: 15px;
		background-color:#f5a377 !important;
		outline:#f5a377 !important;
		border:#f5a377 !important;
		font-family: 'Varela Round', sans-serif;
	}
	
	.btn-category:hover, .btn-category:active, .btn-category:focus, .row-btn .btn-primary.active{
		width: 30%;
		padding-top: 10px;
		padding-bottom: 10px;
		font-size: 15px;
		background-color:#e5222d !important;
		outline:#e5222d !important;
		border:#e5222d !important;
		box-shadow: unset !important;
	}
-->
</style>

<div class="row mt-4">
	<div class="col-md-12 text-center row-btn">
		<button type="button" class="btn btn-primary btn-category active" data-category="cereal">Cereal</button>&nbsp;
		<button type="button" class="btn btn-primary btn-category" data-category="puff">Puff</button>&nbsp;
		<button type="button" class="btn btn-primary btn-category" data-category="bites">Bites</button>
	</div>
</div>

<div class="row my-3 div-content div-cereal" >
	<div class="col-md-12">
		<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px;"><img class="background" id="background" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Nestle+Startwell+2gether/nestle-cerelac-citarasa-ibu.png" width="100%" /></div>
		<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px;"><img class="background" id="background" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Nestle+Startwell+2gether/kebaikan-citarasa-ibu.png" width="100%" /></div>
		<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px;"><img class="background" id="background" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Nestle+Startwell+2gether/arahan-penyediaan.png" width="100%" /></div>
		<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px;"><img class="background" id="background" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Nestle+Startwell+2gether/maklumat-pemakanan.png" width="100%" /></div>
	</div>
</div>

<div class="row my-3 div-content div-puff" style="display:none;">
	<div class="col-md-12">
		<h1>PUFFF</h1>
	</div>
</div>

<div class="row my-3 div-content div-bites" style="display:none;">
	<div class="col-md-12">
		<h1>bites</h1>
	</div>
</div>





<p>
   <!--=================== CAROUSEL =====================-->
</p>
<div class="mmyslider" data-sliderid="209" data-imagepos="left" data-slidercount="3"></div>
<div class="mmyslider" data-sliderid="210" data-imagepos="left" data-slidercount="2"></div>
<div class="mmyslider" data-sliderid="202" data-imagepos="left" data-slidercount="3"></div>
<p></p>
<div class="mmyslider" data-sliderid="207" data-sellerid="695" data-imagepos="left" data-slidercount="5"></div>

<script>
$(function(){
	$('body').on('click', '.btn-category', function(){
		$('body').find('.btn-category').removeClass('active');
		$(this).addClass('active');
		$('body').find('.div-content').css('display', 'none');
		var category = $(this).data('category');
		
		console.log(category);
		if(category == 'cereal')
		{
			$('body').find('.div-cereal').show('fast');
		}
		else if(category == 'puff')
		{
			$('body').find('.div-puff').show('fast');
		}
		else if(category == 'bites')
		{
			$('body').find('.div-bites').show('fast');
		}
	})
});
</script>
