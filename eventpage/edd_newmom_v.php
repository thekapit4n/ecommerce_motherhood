<style>
   <!--
      .wrapper {
      			width: 100%;
      		}
                   
      		section {
      			width: 100%;
      			float: left;
      			margin: 0 2%;
      		}
                   
      		input[type="checkbox"] {
      			position: relative;
      			top: 1px;
      		}
                   
      		.isSelected {
      			background-color: lightgreen;
      		}
                   
      		div.checker{
      			height:0!IMPORTANT;
      		}
            
      		div.checker span{
      			background-image:none!IMPORTANT;
      		}
            	
      		.label-custom{
      			display: block;
      			padding: 5px 10px;
      			margin: 5px 0;
      			font: Arial, sans-serif;
      			background-color: white;
      			border:1px solid #d6d4d4;
      			border-radius: 7px;
      			color:grey;
      			font-size:1.6em!IMPORTANT;
      			font-weight:lighter!IMPORTANT;
      			text-align: left;
      			padding-left: 20px;
      			padding-top: 10px;
      			padding-bottom: 10px;
      			font-size: 1.1em !important;
      			line-height: 10px;
      		}
      		
      		.label-custom:hover{
      			background-color: #ededed;
      			cursor: pointer;
      		}
      	  
      		.label-form-kapitan{
      			display: inline-block;
      			max-width: 100%;
      			margin-bottom: 5px;
      			font-weight: 700; 
      		}
            
      		.btn-step1{
      			background-color: #38a7ac;
      			color: #fff;
      			font-size: 18px;
      			border-radius: 4px;
      			padding: 8px 40px;
      			min-width: 300px;
      		}
            
      		.btn-step1:hover, .btn-step1:focus{
      			background-color: #1C6F74;
      			color: white;
      		}
      		
      		.btn-step1[disabled], .btn-step1[disabled]:hover{
      			background-color: #38a7ac87 !important;
      		}
      		
      	  
      		.question-font{
      			color: #4c4c4d;
      			font-size: 1.6em;
      			padding-left: 15px;
      		}
      		
      		.question-welcomekit{
      			padding-right: 5px; 
      			padding-left: 5px; 
      			padding-top: 5px;
      		}
      		
      		.tnc-word-color{
      			color:#b4b3b4;
      		}
      		
      		.main-title-color{
      			color: #4c4c4d;
      		}
      		
      		.has-error-validation{
      			border: solid 2px #f90012 !important;
      		}
      		
      		.error-msg{
      			color:#f90012;
      			font-size: 12px;
      		}
      		
      		.question-welcomekit .form-control{
      			background-color:white;
      		}
      		
      		.benefit-div{
      			min-height:240px;
      		}
      		
      		@media only screen and (max-width: 600px){
      			.benefit-div{
      				min-height:188px;
      			}
      		}
            }
      -->
</style>
<div class="row edd-row">
   <p style="font-size: 3em; color: #005b9c; font-weight: bold; padding-top: 20px; padding-bottom: 20px; line-height: 1;">Lucky Draw Of The Month</p>
   <div class="container" style="position: relative; text-align: center; margin-bottom: 30px;">
	<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/March/Newmom/new-banneer.png" width="100%" alt="banner-edd" />
</div>
   <label class="text-left" style="padding-left: 15px;paading-right:15px; padding-bottom: 5px;">When is your Estimated Date of Delivery (EDD)?</label>
   <div class="col-md-4 text-left" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
      <select id="momYear" style="width: 100%; font-size: 1.1em; box-shadow: none!IMPORTANT; color: #512f2e;">
         <option value="" disabled="disabled" selected="selected">Year</option>
         <option value="2021">2021</option>
         <option value="2022">2022</option>
      </select>
      <small class="error-msg"></small>
   </div>
   <div class="col-md-4 text-left" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
      <select id="momMonth" disabled="disabled" style="width: 100%; font-size: 1.1em; box-shadow: none!IMPORTANT; color: #512f2e;">
         <option value="" disabled="disabled" selected="selected">Month</option>
         <option value="1">January</option>
         <option value="2">February</option>
         <option value="3">March</option>
         <option value="4">April</option>
         <option value="5">May</option>
         <option value="6">June</option>
         <option value="7">July</option>
         <option value="8">August</option>
         <option value="9">September</option>
         <option value="10">October</option>
         <option value="11">November</option>
         <option value="12">December</option>
      </select>
      <small class="error-msg"></small>
   </div>
   <div class="col-md-4 text-left" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
      <select id="momDay" disabled="disabled" style="width: 100%; font-size: 1.1em; box-shadow: none!IMPORTANT; color: #512f2e;">
         <option value="" disabled="disabled" selected="selected">Day</option>
      </select>
      <small class="error-msg"></small> <input type="hidden" name="subscriber_question2" id="subscriber_question2" /> <!-- date EDD -->
   </div>
   <div class="clearfix"></div>
   <div class="row">
	<div class="col-md-6 text-left question-welcomekit row-mommymilk" style="padding-left: 25px; padding-right: 25px; padding-bottom: 10px;">
		<label style="padding-left: 5px;padding-right:5px; padding-bottom: 5px;">What brand of milk does mommy like or is currently consuming?</label> 
		<select class="selection-mommymilk" name="subscriber_question18" type="text" style="width: 100%; font-size: 1.1em; box-shadow: none!IMPORTANT; color: #512f2e;" required>
			<option disabled="disabled" selected="selected" value="">Choose one</option>
			<option value="a2 Nutrition for Mothers">a2 Nutrition for Mothers</option>
			<option value="Anmum Lacta">Anmum Lacta</option>
			<option value="Anmum Materna">Anmum Materna</option>
			<option value="Aptamom">Aptamom</option>
			<option value="Bellamy’s Organic Pregnancy Formula">Bellamy’s Organic Pregnancy Formula</option>
			<option value="Dumex Mamil® Mama">Dumex Mamil® Mama</option>
			<option value="Enfamama A+">Enfamama A+</option>
			<option value="Fresh Goat Milk">Fresh Goat Milk</option>
			<option value="Fresh Milk">Fresh Milk</option>
			<option value="Frisomum Gold">Frisomum Gold</option>
			<option value="MOMMA Evermom Non-GMO Soy">MOMMA Evermom Non-GMO Soy</option>
			<option value="MOMMA Pregolact">MOMMA Pregolact</option>
			<option value="Natrel Milk">Natrel Milk</option>
			<option value="NatureOne Dairy Pregnancy Formula">NatureOne Dairy Pregnancy Formula</option>
			<option value="Nestlé MOM">Nestlé MOM</option>
			<option value="Similac Mom">Similac Mom</option>
			<option value="Snow Maternity">Snow Maternity</option>
			<option value="Susu Efferty Ikhtiar Hamil">Susu Efferty Ikhtiar Hamil</option>
			<option value="WILDAN Mama Premium">WILDAN Mama Premium</option>
			<option value="Wyeth Promama">Wyeth Promama</option>
			<option value="Others">Others</option>
			<option value="Not consuming any milk">Not consuming any milk</option>
		</select>
		<small class="error-msg"></small>
	</div>
	<div class="col-md-6 text-left question-welcomekit row-kidmilk" style="padding-left: 25px; padding-right: 25px; padding-bottom: 10px;">
		<label style="padding-left: 5px;padding-right:5px; padding-bottom: 5px;">
			What milk brand is your kid currently consuming?
		</label> 
		<select class="selection-kidmilk" name="subscriber_question19" type="text" style="width: 100%; font-size: 1.1em; box-shadow: none!IMPORTANT; color: #512f2e;" required>
			<option disabled="disabled" selected="selected" value="">Choose one</option>
			<option value="4m">4m</option>
			<option value="Abbott">Abbott</option>
			<option value="Anmum">Anmum</option>
			<option value="Appeton">Appeton</option>
			<option value="AptaGro">AptaGro</option>
			<option value="Aptamil">Aptamil</option>
			<option value="Awarua">Awarua</option>
			<option value="Baby Bio">Baby Bio</option>
			<option value="Baby Steps">Baby Steps</option>
			<option value="Bellamy's">Bellamy's</option>
			<option value="Colostrum">Colostrum</option>
			<option value="Dugro">Dugro</option>
			<option value="Dumex">Dumex</option>
			<option value="Dupro">Dupro</option>
			<option value="Dutch Baby">Dutch Baby</option>
			<option value="Dutch Lady">Dutch Lady</option>
			<option value="Enfagrow">Enfagrow</option>
			<option value="Enfalac">Enfalac</option>
			<option value="Enfamil">Enfamil</option>
			<option value="Farmers">Farmers</option>
			<option value="Fernleaf">Fernleaf</option>
			<option value="Friso">Friso</option>
			<option value="Frisolac">Frisolac</option>
			<option value="G-Star">G-Star</option>
			<option value="Glucerna">Glucerna</option>
			<option value="Habib">Habib</option>
			<option value="Isomil">Isomil</option>
			<option value="Karihome">Karihome</option>
			<option value="Lactogen">Lactogen</option>
			<option value="Lactogrow">Lactogrow</option>
			<option value="Lazz">Lazz</option>
			<option value="Mamex">Mamex</option>
			<option value="Mamil">Mamil</option>
			<option value="Merry Nation">Merry Nation</option>
			<option value="Miwako">Miwako</option>
			<option value="Morinaga Milk">Morinaga Milk</option>
			<option value="Nana">Nana</option>
			<option value="Nankid">Nankid</option>
			<option value="Nestle">Nestle</option>
			<option value="Novalac">Novalac</option>
			<option value="Pediasure">Pediasure</option>
			<option value="S26">S26</option>
			<option value="Similac">Similac</option>
			<option value="Snow">Snow</option>
			<option value="Suffy">Suffy</option>
			<option value="Sustagen">Sustagen</option>
			<option value="Wildan">Wildan</option>
			<option value="Wyeth">Wyeth</option>
			<option value="Others">Others</option>
			<option value="Not consuming any milk">Not consuming any milk</option>
		</select>
		<small class="error-msg"></small>
	</div>
	
	<div class="col-md-4 col-md-offset-4" style="padding-top: 20px;">
		<button type="submit" name="submit" id="btn-submit-form2" class="btn btn-default btn-step1 " disabled="disabled"> Submit </button>
	</div>
	<input type="hidden" id="newEmail" name="newEmail" value="{{currentEmail}}" style="width: 100%; font-size: 1.2em; box-shadow: none!IMPORTANT; border-radius: 0!IMPORTANT;" placeholder="Email" required="required" />
</div>

<p>
   <script>// <![CDATA[
		var errorSelector 	 = '.error-msg';
		var hasValidation 	 = 'has-error-validation';
		var icon 	  		 = '<i class="fa fa-info-circle"></i>';
		
		var manageBtnSubmitEdd = function(){
			var eddYear  = $('body').find('#momYear').val();
			var eddMonth = $('body').find('#momMonth').val();
			var eddDay   = $('body').find('#momDay').val();
			
			if((eddYear != '' && eddYear != null) && (eddMonth != '' && eddMonth != null) && (eddDay != '' && eddDay != null))
			{
				$('body').find('#btn-submit-form2').prop('disabled', false);
			}
			else
			{
				$('body').find('#btn-submit-form2').prop('disabled', true)
			}
		}
			
		$(document).ready(function(){
			$("#momYear").on("change",function(){
				$('#momMonth').prop('disabled', false);
				var year = $(this).val()
				if(year != '' && year != null)
				{
					$('#momYear').removeClass(hasValidation);
					$('#momYear').closest('div').find(errorSelector).html('');
				}
				manageBtnSubmitEdd();
			});
      			
			$("#momMonth").on("change",function(){
				var year  = $('#momYear').val();
				var month = $('#momMonth').val();
				if(year !== '' && month !== ''){
					$('#momDay').prop('disabled', false);
					$('#momDay').find('option').remove().end();
					$('#momMonth').removeClass(hasValidation);
					$('#momMonth').closest('div').find(errorSelector).html('');
				}
				
				var days = new Date(year, month, 0).getDate(); 
				$('#momDay').append('<option value=" " disabled selected> Day </option>');
				for (var i = 1; i <= days; i++) {
					$('#momDay').append('<option value="' + i + '">' + i + '</option>');
				}
				
				manageBtnSubmitEdd();
			});
      			
			$("#momDay").on("change",function(){
				var year  = $('#momYear').val();
				var month = $('#momMonth').val();
				var day	  = $('#momDay').val();
				var month = ("0" + month).slice(-2);
				var day   = ("0" + day).slice(-2);
				$('#subscriber_question2').val(day+'-'+month+'-'+year);
				$('#momDay').removeClass(hasValidation);
				$('#momDay').closest('div').find(errorSelector).html('');
				manageBtnSubmitEdd();
			});
      			
			$('body').on('click', '#btn-submit-form2', function(e){
				var year  = $('#momYear').val();
				var month = $('#momMonth').val();
				var day   = $('#momDay').val();
				var flagError = false; 
				
				if(year == ''|| year == null)
				{
					flagError = true;
					msg = icon + " Please select year";
					$('#momYear').addClass(hasValidation);
					$('#momYear').closest('div').find(errorSelector).html(msg);
				}
				else
				{
					$('#momYear').removeClass(hasValidation);
					$('#momYear').closest('div').find(errorSelector).html('');
				}
				
				if(month == '' || month == null)
				{
					flagError = true;
					msg = icon + " Please select month";
					$('#momMonth').addClass(hasValidation);
					$('#momMonth').closest('div').find(errorSelector).html(msg);
				}
				else
				{
					$('#momMonth').removeClass(hasValidation);
					$('#momMonth').closest('div').find(errorSelector).html('');
				}
				
				if(day == '' || day == null)
				{
					flagError = true;
					msg = icon + " Please select day";
					$('#momDay').addClass(hasValidation);
					$('#momDay').closest('div').find(errorSelector).html(msg);
				}
				else
				{
					$('#momDay').removeClass(hasValidation);
					$('#momDay').closest('div').find(errorSelector).html('');
				}
			});
		});
    // ]]>
   </script>
</p>