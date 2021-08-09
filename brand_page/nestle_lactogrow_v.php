<style>
   <!--
      .nbs-flexisel-container{
	   border:0px;
	}
	
	#scroll_content_top{
		display:none;
	}
	
	.category-img
	{
		cursor: pointer;
		border-bottom:0px;
		transition: border-bottom 2s ease 2s, 
	}
	
	.category-img:hover{
		border-bottom: 5px solid #0b51a0;
	}
	
	.category-img-active{
		border-bottom: 5px solid #0b51a0;
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
	
	.breadcrumb a:after {
		top: 1px;
	}
	
	
	
      -->
</style>
<div class="row mt-4">
   <div class="col-md-12 text-center row-btn"><a class="category-lactogrow" data-category="lactogrow"> 
   <img class="img-fluid category-img category-img-active" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Nestle+Startwell+2gether/logo-nestle-lactogrow.png" style="width: 25%;" /> </a> 
   &nbsp;&nbsp; <a class="category-lactogrow" data-category="lactogrow-aktif"> <img class="img-fluid category-img" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Nestle+Startwell+2gether/logo-nestle-lactogrow-aktif.png" style="width: 25%;" /> </a></div>
</div>
<div class="row my-3 div-content div-lactogrow">
   <div class="row">
      <div class="col-md-12"><img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Nestle+Startwell+2gether/bantu-tingkatkan-fungsi-penghadaman-si-manja-untuk-growhappy.png" width="100%" /></div>
   </div>
   <div class="row">
      <div class="col-md-12"><img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Nestle+Startwell+2gether/apakah-kultur-probiotik-l-reuteri.png" width="100%" /></div>
   </div>
   <div class="row">
      <div class="col-md-12"><img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Nestle+Startwell+2gether/ketahuilah-manfaatnya.png" width="100%" /></div>
   </div>
   <div class="row">
      <div class="col-md-12"><img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Nestle+Startwell+2gether/kenapa-pilih-nestle-lactogrow.png" width="100%" /></div>
   </div>
   <div class="row">
      <div class="col-md-12"><img class="img-fluid " src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/May/Nestle+Startwell+2gether/nestle-lactogrow-3and4.png" width="100%" /></div>
   </div>
   <div class="mmyslider" data-sliderid="199" data-imagepos="left" data-slidercount="2"></div>
   <div class="mmyslider" data-sliderid="200" data-imagepos="left" data-slidercount="2"></div>
</div>
<div class="row my-3 div-content div-lactogrow-aktif" style="display: none;">
   <div class="col-md-12"><img class="img-fluid" src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Nestle+Startwell+2gether/about-Lactogrow-Aktif.jpg" width="100%" /></div>
   <div class="mmyslider" data-sliderid="212" data-imagepos="left" data-slidercount="1"></div>
</div>
<p>
   <!--=================== CAROUSEL =====================-->
</p>
<p></p>
<div class="mmyslider" data-sliderid="207" data-sellerid="695" data-imagepos="left" data-slidercount="5"></div>
<p>
   <script>// <![CDATA[
      var htmlBreadcrumb = '<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">';
            		htmlBreadcrumb += '<a class="home" href="https://www.motherhood.com.my" title="Return to Home" itemprop="item">';
            		htmlBreadcrumb += '<span itemprop="name">Home</span>';
            		htmlBreadcrumb += '</a><meta itemprop="position" content="1"> </span>';
            		htmlBreadcrumb += '<span class="navigation-pipe">></span>';
            		
            		htmlBreadcrumb += '<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">';
            		htmlBreadcrumb += '<a href="https://www.motherhood.com.my/NestleStartWell/"  title="Events" itemprop="item">';
            		htmlBreadcrumb += '<span class="navigation_page" itemprop="name">Nestlé Nutrition</span>';
            		htmlBreadcrumb += '</a><meta itemprop="position" content="2"> </span>';
            		htmlBreadcrumb += '<span class="navigation-pipe">></span>';
            		
            		htmlBreadcrumb += '<span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">';
            		htmlBreadcrumb += '<a href="https://www.motherhood.com.my/events/nestle-lactogrow" class="last" title="Lactogrow" itemprop="item">';
            		htmlBreadcrumb += '<span class="navigation_page" itemprop="name">Lactogrow</span>';
            		htmlBreadcrumb += '</a><meta itemprop="position" content="3"> </span>';
               
                  $(function(){
                  	$('body').on('click', '.category-lactogrow', function(){
                  		var category = $(this).data('category');
      					$('body').find('.category-img').removeClass('category-img-active');
      					$(this).find('.category-img').addClass('category-img-active');
                  		$('body').find('.div-content').hide('fast');
                  		console.log(category);
                  		if(category == 'lactogrow')
                  		{
                  			$('body').find('.div-lactogrow').show('fast');
                  		}
                  		else if(category == 'lactogrow-aktif')
                  		{
                  			$('body').find('.div-lactogrow-aktif').show('fast');
                  		}
                  	});
            		
            		$('body').find('.breadcrumb').html(htmlBreadcrumb);
                  });
       
      // ]]>
   </script>
</p>