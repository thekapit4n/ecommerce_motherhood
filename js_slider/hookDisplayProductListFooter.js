$(document).ready(function () {
    if (!!$.prototype.bxSlider) {
        var sliderWidth       = $(".enlinea_slider").width();
        var sliderWidthcustom = $(".enlinea_slider_custom").width();

        parentcrafttestWidth = sliderWidth - 40;
        parentcrafttestWidth = (parentcrafttestWidth / 2) - 20;

        $('#parentcrafttest_list_car').bxSlider({
            minSlides: 1,
            maxSlides: 2,
            slideWidth: parentcrafttestWidth,
            slideMargin: 13,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });

        recommendProdWidth = sliderWidth - 40;
        recommendProdWidth = (recommendProdWidth / 5) - 20;
		
		if($(window).width()<=1200)
		{
			listCarMinSlide = 2
			listCarMaxSlide = 2
			recommendProdWidth = 125
		}
		else
		{
			listCarMinSlide = 2
			listCarMaxSlide = 5
		}

        $('#recommendprods_list_car').bxSlider({
            minSlides: listCarMinSlide,
            maxSlides: listCarMaxSlide,
            slideWidth: recommendProdWidth,
            slideMargin: 13,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });

        brandonsaleWidth = sliderWidth - 40;
        brandonsaleWidth = (brandonsaleWidth / 3) - 20;

        $('#brandonsales_list_car').bxSlider({
            minSlides: 2,
            maxSlides: 3,
            slideWidth: brandonsaleWidth,
            slideMargin: 20,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });

        nestlearticleWidth = sliderWidth - 40;
        nestlearticleWidth = (nestlearticleWidth / 3) - 20;

        $('#nestlearticle_list_car').bxSlider({
            minSlides: 2,
            maxSlides: 3,
            slideWidth: nestlearticleWidth,
            slideMargin: 20,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });

        nestlekolWidth = sliderWidth - 40;
        nestlekolWidth = (nestlekolWidth / 3) - 20;

        $('#nestlekol_list_car').bxSlider({
            minSlides: 2,
            maxSlides: 3,
            slideWidth: nestlekolWidth,
            slideMargin: 20,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });

        featureWidth = sliderWidth - 40;
        featureWidth = (featureWidth / 5) - 13;

        $('#featuredProducts_list_car').bxSlider({
            minSlides: 2,
            maxSlides: 5,
            slideWidth: featureWidth,
            slideMargin: 13,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });
        
        pregnancy_tracker_Width = sliderWidth - 40;
        pregnancy_tracker_Width = (pregnancy_tracker_Width / 3) - 20;

        $('#pregnancy_tracker_slider').bxSlider({
            minSlides: 6,
            maxSlides: 8,
            slideWidth: pregnancy_tracker_Width,
            slideMargin: 8,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });

        weekly_baby_tracker_Width = sliderWidth - 40;
        weekly_baby_tracker_Width = (weekly_baby_tracker_Width / 3) - 20;

        $('#weekly_baby_tracker_slider').bxSlider({
            minSlides: 6,
            maxSlides: 8,
            slideWidth: weekly_baby_tracker_Width,
            slideMargin: 8,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });

        warehousesale_voucher_Width = sliderWidth - 40;
		var warehouseSaleNumber=3
		if ($(window).width()<=1200)
				warehouseSaleNumber=1;
        warehousesale_voucher_Width = (warehousesale_voucher_Width / warehouseSaleNumber) - 20;

        $('#warehouse_voucher_slider').bxSlider({
            minSlides: 1,
            maxSlides: 3,
            slideWidth: warehousesale_voucher_Width,
            slideMargin: 3,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });
	
		if (typeof catBrandSize == 'undefined')
				catBrandSize=8;		
		
		if ($(window).width()<=1200)
				catBrandSize=2;

        catBrandWidth = sliderWidth - 40;
        catBrandWidth = (catBrandWidth / catBrandSize) - 20;

        $('#categoryBrands_list_car').bxSlider({
            minSlides: 2,
            maxSlides: catBrandSize,
            slideWidth: catBrandWidth,
            slideMargin: 13,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });
		
		/** 
		* The reason, use class because in same page, user can use multiple time same slider so it wont clash, compare to we use id to initiate 
		* haiqal halim <haiqal.halim@nurengroup.com>
		* 29/12/2020
		**/
		if($(window).width()<=1200)
		{
			calendarMinSlide = 1
			calendarMaxSlide = 1
			calendarSliderWidth = 170
		}
		else
		{
			calendarMinSlide = 2
			calendarMaxSlide = 3
			var calendarSliderWidth = sliderWidth - 40;
			var calendarSliderWidth = (calendarSliderWidth / 3) - 20;
		}

        $('.calendar-slider').bxSlider({
            minSlides: calendarMinSlide,
            maxSlides: calendarMaxSlide,
            slideWidth: calendarSliderWidth,
            slideMargin: 20,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });
		
		
		if($(window).width()<=1200)
		{
			calendarMinSlide = 2
			calendarMaxSlide = 2
			calendarSliderWidth = 180
		}
		else
		{
			calendarMinSlide = 2
			calendarMaxSlide = 3
			var calendarSliderWidth = sliderWidth - 40;
			var calendarSliderWidth = (calendarSliderWidth / 3) - 20;
		}

        $('.calendar-slider-superkid').bxSlider({
            minSlides: calendarMinSlide,
            maxSlides: calendarMaxSlide,
            slideWidth: calendarSliderWidth,
            slideMargin: 20,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: false
        });
		
		
		if($(window).width() <= 680)
		{
			preganancyMinSlide = 1
			pregnancyMaxSlide = 1
			pregnancySliderWidth = 180
		}
		else
		{
			preganancyMinSlide = 6
			pregnancyMaxSlide = 8
			var pregnancySliderWidth = sliderWidthcustom - 40;
			var pregnancySliderWidth = (pregnancySliderWidth / 3) - 20;
		}
		
        $('.pregnancy-tracker').bxSlider({
            minSlides: preganancyMinSlide,
            maxSlides: pregnancyMaxSlide,
            slideWidth: pregnancySliderWidth,
            slideMargin: 8,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: false
        });
		
		if($(window).width()<=1200)
		{
			cubatryMinSlide = 2
			cubatryMaxSlide = 2
			cubatrySliderWidth = 180
		}
		else
		{
			cubatryMinSlide = 2
			cubatryMaxSlide = 3
			var cubatrySliderWidth = sliderWidth - 40;
			var cubatrySliderWidth = (cubatrySliderWidth / 3) - 20;
		}

        $('.cubatry-slider').bxSlider({
            minSlides: cubatryMinSlide,
            maxSlides: cubatryMaxSlide,
            slideWidth: cubatrySliderWidth,
            slideMargin: 20,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });
		
    }
});

enlineaProductListFooter = new Object();

enlineaProductListFooter.Dummy = function () {

}
