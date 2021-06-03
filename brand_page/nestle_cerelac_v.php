<style>
   <!--
      .nbs-flexisel-container{
      	   border:0px;
      	}
      	
      	#scroll_content_top{
      		display:none;
      	}
		
		.category-cerelac {cursor: pointer;}
      	
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
		
		.breadcrumb a:after {
			top: 1px;
		}
      -->
</style>
<div class="row mt-4">
   <div class="col-md-12 text-center row-btn">
		<a class="category-cerelac" data-category="cereal"> 
			<img class="img-fluid " src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Nestle+Startwell+2gether/cerelac.svg" style="width:25%;" /> 
		</a> 
		<a class="category-cerelac" data-category="puff"> 	
			<img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Nestle+Startwell+2gether/cerelac-nutripuffs.svg" style="width:20%;" /> 
		</a> 
		<a class="category-cerelac" data-category="citarasa_ibu"> 
			<img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Nestle+Startwell+2gether/cerelac-citarasa-ibu.svg" style="width:25%;" /> 
		</a> 
		<a class="category-cerelac" data-category="bites"> 
			<img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Nestle+Startwell+2gether/cerelac-nutribites.svg" style="width:20%;" /> 
		</a>
	</div>
</div>
<div class="row my-3 div-content div-cereal">
   <div class="col-md-12">
		<img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Nestle+Startwell+2gether/about-cerelac.png" width="100%" />
   </div>
</div>
<div class="row my-3 div-content div-puff" style="display: none;">
   <div class="col-md-12">
     <img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Nestle+Startwell+2gether/about-cerelac-nutripuffs.png" width="100%" />
   </div>
</div>
<div class="row my-3 div-content div-citarasa-ibu" style="display: none;">
   <div class="col-md-12">
		<img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Nestle+Startwell+2gether/about-cerelac-citarasa-ibu.png" width="100%" />
   </div>
</div>
<div class="row my-3 div-content div-bites" style="display: none;">
   <div class="col-md-12">
     <img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Nestle+Startwell+2gether/about-cerelac-nutribites.png" width="100%" />
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
<p>
   <script>// <![CDATA[
	var htmlBreadcrumb = '<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">';
		htmlBreadcrumb += '<a class="home" href="https://www.motherhood.com.my" title="Return to Home" itemprop="item">';
		htmlBreadcrumb += '<span itemprop="name">Home</span>';
		htmlBreadcrumb += '</a><meta itemprop="position" content="1"> </span>';
		htmlBreadcrumb += '<span class="navigation-pipe">&gt;</span>';
		
		htmlBreadcrumb += '<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">';
		htmlBreadcrumb += '<a href="https://www.motherhood.com.my/NestleStartWell/"  title="Events" itemprop="item">';
		htmlBreadcrumb += '<span class="navigation_page" itemprop="name">Nestlé</span>';
		htmlBreadcrumb += '</a><meta itemprop="position" content="2"> </span>';
		htmlBreadcrumb += '<span class="navigation-pipe">&gt;</span>';
		
		htmlBreadcrumb += '<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">';
		htmlBreadcrumb += '<a href="https://www.motherhood.com.my/events/nestle-cerelac" class="last" title="Cerelac" itemprop="item">';
		htmlBreadcrumb += '<span class="navigation_page" itemprop="name">Cerelac</span>';
		htmlBreadcrumb += '</a><meta itemprop="position" content="3"> </span>';
   
      $(function(){
      	$('body').on('click', '.category-cerelac', function(){
      		var category = $(this).data('category');
      		$('body').find('.div-content').hide('fast');
      		console.log(category);
      		if(category == 'cereal')
      		{
      			$('body').find('.div-cereal').show('fast');
      		}
      		else if(category == 'puff')
      		{
				console.log(category + "---- masuk");
      			$('body').find('.div-puff').show('fast');
      		}
      		else if(category == 'citarasa_ibu')
      		{
      			$('body').find('.div-citarasa-ibu').show('fast');
      		}
			else if(category == 'bites')
      		{
      			$('body').find('.div-bites').show('fast');
      		}
      	});
		
		$('body').find('.breadcrumb').html(htmlBreadcrumb);
      });
       
      // ]]>
   </script>
</p>