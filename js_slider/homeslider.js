/*
 * 2007-2014 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author PrestaShop SA <contact@prestashop.com>
 *  @copyright  2007-2014 PrestaShop SA
 *  @version  Release: $Revision$
 *  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

$(document).ready(function () {
  if (typeof homeslider_speed == "undefined") homeslider_speed = 500;
  // if (typeof homeslider_pause == "undefined")
  homeslider_pause = 5000;
  if (typeof homeslider_loop == "undefined") homeslider_loop = true;
  if (typeof homeslider_width == "undefined") homeslider_width = 779;

  $(".homeslider-description").click(function () {
    window.location.href = $(this).prev("a").prop("href");
  });

  $("#homepage-slider").closest("#columns").addClass("home-columns");
  //if ($('#htmlcontent_top').length > 0)
  //	$('#homepage-slider').addClass('col-xs-8');
  //else
  //	$('#homepage-slider').addClass('col-xs-12');

  $("#best_price_content ul").flexisel({
    visibleItems: 1,
    flipPage: true,
    animationSpeed: 500,
    clone: true,
    autoPlay: false,
  });

  if (!!$.prototype.bxSlider) {
    //var firstLI = $('ul#homeslider>li:first');

    //if (firstLI.length > 0) {
    //    var firstbg = firstLI.data("bgcolor");

    //    if (firstbg && firstbg != "") {
    //        $("div#homepage-slider").css("background-color", firstbg);
    //    }
    //}

    $("#homeslider").bxSlider({
		useCSS: false,
		//mode: "fade",
		maxSlides: 1,
		slideWidth: homeslider_width,
		infiniteLoop: homeslider_loop,
		hideControlOnEnd: true,
		pager: false,
		autoHover: true,
		auto: homeslider_loop,
		speed: parseInt(homeslider_speed),
		pause: homeslider_pause,
		controls: true,
		onSlideBefore: function ($slideElement) {
        var bgcolor = $slideElement.data("bgcolor");
			$("div#homepage-slider").animate(
          { backgroundColor: bgcolor },
          homeslider_speed
        );
      },
    }); 
	
	$(".homeslider").bxSlider({
		useCSS: false,
		//mode: "fade",
		maxSlides: 1,
		slideWidth: homeslider_width,
		infiniteLoop: homeslider_loop,
		hideControlOnEnd: true,
		pager: false,
		autoHover: true,
		auto: homeslider_loop,
		speed: parseInt(homeslider_speed),
		pause: homeslider_pause,
		controls: true,
		onSlideBefore: function ($slideElement) {
        var bgcolor = $slideElement.data("bgcolor");
			$("div#homepage-slider").animate(
          { backgroundColor: bgcolor },
          homeslider_speed
        );
      },
    });
	
	$(".mamacubatryslider").bxSlider({
		useCSS: false,
		//mode: "fade",
		maxSlides: 1,
		slideWidth: homeslider_width,
		infiniteLoop: homeslider_loop,
		hideControlOnEnd: true,
		pager: false,
		autoHover: true,
		auto: homeslider_loop,
		speed: parseInt(homeslider_speed),
		pause: homeslider_pause,
		controls: true,
		onSlideBefore: function ($slideElement) {
        var bgcolor = $slideElement.data("bgcolor");
			$("div#homepage-slider").animate(
			{ backgroundColor: bgcolor },
			homeslider_speed
        );
      },
    });
  }
});
