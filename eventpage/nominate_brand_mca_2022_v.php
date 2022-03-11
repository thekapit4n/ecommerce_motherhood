<style>
   <!--
    #scroll_content_top{
		display:none;
	}

	.main-title-color{
		color: #9b7b49;
	}

	.motherhood-title{
		font-size:30px;
		margin-bottom: 35px;
	}

	.error-msg{
		color:#f90012;
		font-size: 12px;
	}

	.card-clickable
	{
		background-color:#f3e8d5;
		box-shadow: 0px 8px #d1c0a7;
    	border-radius: 15px;
	}

	.card-title{
		color:#9b7b49;
		font-size:30px;
	}

	.card-img-bg-parent{
		background: url(https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/Motherhood+Choice+Awards+2022/nominatepage/button/iamparents.png) center center no-repeat;
		background-size: contain;
	}

	.card-img-bg-brand{
		background: url(https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/Motherhood+Choice+Awards+2022/nominatepage/button/iambrand.png) center center no-repeat;
		background-size: contain;
	}

	.card-clickable:hover{
		/* background-image: linear-gradient(#aa814f 80%, #937043 20%); */
		background-image: linear-gradient(180deg,#aa814f,  #937043);
		box-shadow: 0 2px 10px 2px #9b7b49;
	}
	
	.card-clickable:hover .card-img-bg-parent{
		background: url(https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/Motherhood+Choice+Awards+2022/nominatepage/button/whenhover-parent.png ) center center no-repeat;
		background-size: contain;
	}
	
	.card-clickable:hover .card-img-bg-brand{
		background: url(https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/Motherhood+Choice+Awards+2022/nominatepage/button/whenhover-brand.png) center center no-repeat;
		background-size: contain;
	}
	
	.card-clickable:hover .card-title{
		color:#f7ecdc;
	}

	.benefit-title{
		font-size:17px;
		font-weight: bold; 
		padding-top: 10px; 
		padding-bottom: 0px; 
		line-height: 1;
		 min-height: 50px;
	}

	.btn-step-forward, .btn-step-forward:hover, .btn-step-forward:active, .btn-step-forward:focus{
		background-color: #2DA7AC;
		border-color: #2DA7AC;
		color: #FFFFFF;
		font-size: 18px;
		border-radius: 4px;
		padding: 8px 40px;
		min-width: 300px;
		box-shadow:unset;
	}
	
	.btn-submit, .btn-submit:hover, .btn-submit:active, .btn-submit:focus{
		background-color: #2DA7AC;
		border-color: #2DA7AC;
		color: #FFFFFF;
		font-size: 18px;
		border-radius: 4px;
		padding: 8px 40px;
		min-width: 300px;
		box-shadow:unset;
	}

	.btn-primary:disabled {
		color: #FFFFFF;
		background-color: #cccccc !important;
		border-color: #cccccc !important;
	}
	
	.btn-step-back, .btn-step-back:hover, .btn-step-back:active, .btn-step-back:focus{
		background-color: #ffffff;
		border-color: #6E7173;
		color: #6E7173;
		font-size: 18px;
		border-radius: 4px;
		padding: 8px 40px;
		min-width: 300px;
		box-shadow:unset;
	}

	.accordion-button:not(.collapsed) {
		color: #000000;
		box-shadow: unset;
	}

	.accordion-button:focus {
    	box-shadow: unset;
	}

	.tnc-text{
		font-size: 1em; 
		line-height: 1.2; 
		padding: 10px 10px 0px 10px;
	}

	input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus {
		outline: unset;
		outline: unset;
		outline-offset: unset;
	}
      	
	.form-check-input {
		width: 1.3em;
		height: 1.3em;
	}

	.question-font{
		color: #4c4c4d;
		font-size: 1.6em;
		padding-left: 15px;
	}

	@media only screen and (max-width: 600px) {
		.card-title{
			font-size:25px;
		}

		.step-usertype{
			position: relative;
    		left: -10px;
		}

	}
	
	-->
</style>
<div class="row step-usertype">
	<div class="row">
		<div class="col-sm-12 text-center">
			<!--<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/logo-nm.png" alt="newmom logo" width="30%" />-->
			<p style="font-size: 3em; margin-top: 15px; font-weight: bold; line-height: 40px; color:#9b7b49">Nominate Brand Motherhood Choice Award 2022</p>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-sm-6 mb-3">
			<div class="card mb-3 card-clickable" data-usertype="parent" style="max-width: 500px;">
				<div class="row g-0">
					<div class="col-md-4 col-4 text-center card-img-bg-parent">
						
					</div>
					<div class="col-md-8 col-8">
						<div class="card-body" style="padding-top: 12%;padding-bottom: 12%;">
							<h5 class="card-title text-center" style="font-weight:600;">I am a Parent</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 mb-3">
			<div class="card mb-3 card-clickable" data-usertype="brand" style="max-width: 500px;">
				<div class="row g-0">
					<div class="col-md-4 col-4 text-center card-img-bg-brand">
					</div>
					<div class="col-md-8 col-8">
						<div class="card-body" style="padding-top: 12%;padding-bottom: 12%;">
							<h5 class="card-title text-center" style="font-weight:600;">I am a Brand</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="subscriber_question4" id="subscriber_question4" style="margin-bottom: 10px;" /><!-- input for type of preganancy -->
	</div>
</div>
<div class="row step-form" style="display:none;">
	<div class="row mb-2">
		<div class="col-md-12 px-2 text-center">
			<p style="font-size: 3em; color: #9b7b49; font-weight: bold; padding-top: 20px; padding-bottom: 20px; line-height: 1;">
				Nominate Your Brand
			</p>
		</div>
    </div>
	<div class="row my-1">
		<div class="col-md-12 px-2 text-left">
			<label for="" class="form-label required">Mandatory field</label> 
		</div>
    </div>
	<div class="row mb-2 brand-question">
         <div class="col-md-6 px-2">
		 	<label for="" class="form-label required">Company Name</label> 
			 <input type="text" class="form-control" id="company-name" name="subscriber_question2" placeholder="" required="" /> 
			 <small class="error-msg-email"></small>
		</div>
        <div class="col-md-6 px-2">
		 	<label for="" class="form-label">Agency Name (If Any)</label> 
			 <input type="text" class="form-control" id="agency-name" name="subscriber_question3"/> 
			 <small class="error-msg"></small>
		</div>
    </div>
	<div class="row mb-2 brand-question">
        <div class="col-md-6 px-2">
		 	<label for="" class="form-label required">Applicant Name</label> 
			<input type="text" class="form-control" id="applicant-name" name="subscriber_question5"/> 
			<small class="error-msg-email"></small>
		</div>
        <div class="col-md-6 px-2">
		 	<label for="" class="form-label required">Applicant Position</label> 
			
			 <select class="form-select" name="subscriber_question7" id="applicant-position" aria-label="" style="height: 37px;" required="">
               <option value="">Please select position</option>
               <option value="Brand Owner">Brand Owner</option>
               <option value="Brand's Marketing Manager">Brand's Marketing Manager</option>
               <option value="Agency Representative">Agency Representative</option>
            </select>
			 <small class="error-msg"></small>
		</div>
    </div>
	<div class="row mb-2 parent-question">
		<div class="col-md-6 px-2">
			<label for="firstname" class="form-label required">Full name</label> 
			<input type="text" id="full-name" name="subscriber_question8" class="form-control" placeholder="First Name" /> 
			<small class="error-msg"></small>
		</div>
	</div>
	<div class="row mb-2">
		<div class="col-md-6 px-2">
			<label class="form-label required">Mobile Number</label>
			<div class="input-group mb-1"><span class="input-group-text" id="basic-addon1">+6</span> <input type="text" class="form-control" id="mobilenumber" name="subscriber_question1" aria-describedby="basic-addon1" placeholder="Mobile Number" pattern=".{10,}" onkeydown="javascript: return event.keyCode == 69 ? false : true" required="required" /></div>
			<small class="error-msg-contactnum"></small>
		</div>
		<div class="col-md-6 px-2">
			<label for="newEmail" class="form-label required">Email</label> 
			<input type="email" class="form-control" id="emailNew" name="newEmail" placeholder="Email" required="required" /> 
			<small class="error-msg-email"></small>
		</div>
	</div>
	<div class="row mb-2">
         <div class="col-md-6 px-2">
		 	<label for="" class="form-label required">Brand Name</label> 
			 <input type="text" class="form-control" id="brand-name" name="subscriber_question11" placeholder="" required="" /> 
			 <small class="error-msg-email"></small>
		</div>
        <div class="col-md-6 px-2">
		 	<label for="" class="form-label required">Product Name</label> 
			 <input type="text" class="form-control" id="product-name" name="subscriber_question12" required/> 
			 <small class="error-msg"></small>
		</div>
    </div>
	<div class="row mb-2">
		<div class="col-md-6 px-2">
			<label for="firstname" class="form-label required">Main Category</label> 
			<select class="form-select" name="subscriber_question9" id="mca_main_category" aria-label="" style="height: 37px;" required="">
               <option value="">Please Select Category</option>
			   {{option-maincategory}}
			   <option value="other">Other</option>
            </select>
			<small class="error-msg-email"></small>
		</div>
		<div class="col-md-6 px-2">
		 	<label for="" class="form-label required">Sub Category</label> 
			<select class="form-select" name="subscriber_question10" id="mca_sub_category" aria-label="" style="height: 37px;" required="">
               <option value="">Please Select Category</option>
            </select>
			<small class="error-msg-email"></small>
		</div>
	</div>
	<div class="row mb-2">
         <div class="col-md-6 px-2">
		 	<label for="" class="form-label required">Image of the product</label> 
			<input class="form-control noUniform" type="file" id="formFile" name="img_product" style="font-size: 14px;padding-top: 6px; height: 35px;">
			<small>Recommend 1080px Width X 1080px Height</small>
		</div> 
		<div class="col-md-6 px-2 parent-question">
		 	<label for="" class="form-label">Why do you think this brand should win</label> 
			 <textarea class="form-control" id="comment-brand"  name="subscriber_question14" rows="3"></textarea>
			 <small class="error-msg-email"></small>
		</div>
		<div class="col-md-6 px-2 brand-question">
		 	<label for="" class="form-label award-title-label">Award Title</label> 
			 <input type="text" class="form-control" id="award-title" name="subscriber_question13"/> 
			 <small class="error-msg"></small>
		</div>
    </div>
	 
      <div class="row mb-4 mt-4">
        <div class="col-md-12 px-2  text-center">
			<button type="button" class="btn btn-primary btn-step-back step-backform mb-3 mx-2" > Back </button>
			<button type="button" class="btn btn-primary btn-submit btn-submit-form step-forwardform mb-3 mx-2 btn-nominate-submit"> Submit </button>
		</div>
      </div>
</div>
<div id="sponsored_content" sponsored_content="1"></div>
<button type="submit" name="submit" id="btnsubmit" style="display: none;">dummy</button>
<script>

var icon = '<i class="fa fa-info-circle"></i>';
var eventID = 100;
var validatePostcode = function(_this){
	var postcode = _this.val();
	if(postcode != undefined && postcode != '')
	{
		$.ajax({
			url		 : '../modules/enlineamixmod/enlineamixmod-postcode-ajax.php', 
			data	 :{'postcode': postcode},
			dataType :'json',
			method 	 : 'post',
			success	 : function(result){
				if(result.status == true)
				{
					if(result.data.city != undefined && result.data.city != '')
					{
						_this.closest('.row').find('.addr-city').val(result.data.city);
					}
					
					if(result.data.state_name != undefined && result.data.state_name != '')
					{
						_this.closest('.row').find('.addr-state').val(result.data.state_name);
					}
				}
			}
		});
	}
}

var stepview = function(step, direction, usertype){

	if(usertype != '')
	{
		usertype = usertype.toLowerCase();
	}

	console.log("direction = " + direction + " usertype = " + usertype + " step " + step)

	if(step == 1)
	{
		if(direction == 'backward')
		{
			$('body').find('.parent-question').hide();
			$('body').find('.brand-question').hide();
			$('body').find('.step-usertype').show();
			$('body').find('.step-form').hide();
		}
	}
	else if(step == 2)
	{
		if(direction == 'forward')
		{
			var typeofuser = $('body').find('#subscriber_question4').val();
		var company_name = $('body').find('#company-name').val();
		var applicant_name = $('body').find('#applicant-name').val();
		var applicant_position = $('body').find('#applicant-position').val();
		var mobilenumber = $('body').find('#mobilenumber').val();
		var email = $('body').find('#emailNew').val();
		var mca_main_category = $('body').find('#mca_main_category').val();
		var mca_sub_category = $('body').find('#mca_sub_category').val();
		var brand_name = $('body').find('#brand-name').val();
		var award_title = $('body').find('#award-title').val();
		var full_name = $('body').find('#full-name').val();
		var product_name = $('body').find('#product-name').val();
			if(usertype == 'brand')
			{
				$('body').find('.parent-question').hide();
				$('body').find('.brand-question').show();
				$('body').find('.step-backform').attr("data-usertype", "brand");
				$('body').find('.step-backform').attr("data-step", "1");
				$('body').find('#full-name').attr('disabled', true);
				$('body').find('#comment-brand').attr('disabled', true);
				$('body').find('#company-name').attr('disabled', false);
				$('body').find('#applicant-name').attr('disabled', false);
				$('body').find('#applicant-position').attr('disabled', false);
				$('body').find('#award-title').attr('disabled', false);
			}
			else if(usertype == 'parent'){
				$('body').find('.parent-question').show();
				$('body').find('.brand-question').hide();
				$('body').find('.step-backform').attr("data-usertype", "parent");
				$('body').find('.step-backform').attr("data-step", "1");
				$('body').find('#full-name').attr('disabled', false);
				$('body').find('#comment-brand').attr('disabled', false);
				$('body').find('#company-name').attr('disabled', true);
				$('body').find('#applicant-name').attr('disabled', true);
				$('body').find('#applicant-position').attr('disabled', true);
				$('body').find('#award-title').attr('disabled', true);
			}
			else
			{
				alert("Please select user type");
				return false;
			}

			$('body').find('.step-form').show();
			$('body').find('.step-usertype').hide();
		}
	}
}

var getListSubCategory = function(){
	var maincategory = $('body').find('#mca_main_category').val();

	if(maincategory == 'other')
	{
		console.log(maincategory);
		$('body').find('#mca_sub_category option').remove();
		var htmloption = "";
		htmloption += "<option value=''>Please Select Category</option>";
		htmloption += "<option value='other'>Other</option>";
		$('body').find('#mca_sub_category').append(htmloption);
	}
	else{
		$.ajax({
		url		 : '../modules/enlineamixmod/enlineamixmod-subcategory-mca-ajax.php', 
		data	 :{'maincategory': maincategory},
		dataType :'json',
		method 	 : 'post',
		success	 : function(result){
			console.log(result);
			$('body').find('#mca_sub_category option').remove();
			if(result.status == true)
			{
				htmloption += "<option value='other'>Other</option>";
				$('body').find('#mca_sub_category').append(result.html);
				$('body').find('#mca_sub_category').append(htmloption);
				
			}
		}
	});
	}
	
}

var checkMobileNum = function(){
	var phonenumber = $('#mobilenumber').val();
	var phonenumberr = phonenumber.replace("-"," ");
	var phonenumber = phonenumberr.trim();

	if ($.trim(phonenumber) != "") 
	{
		var prefix = phonenumber.substring(0,3);
		var firstNo = phonenumber.substring(0,1);
		var phoneLength = phonenumber.length;
		firstNo = parseInt(firstNo);
		if(firstNo !== 0 && firstNo !== 5)
		{
			$('body').find('.hidden-check-mobile').val(false)
			$("#subscriber_question1").addClass('is-invalid');
			$('body').find('.error-msg-contactnum').html("Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 0123334444 / 0198887777.");
			
			return false;
		}

		if(firstNo == '0')
		{
			if(prefix == '010' || prefix == '011' || prefix == '012' || prefix == '013' || prefix == '014' || prefix == '015' || prefix == '016' || prefix == '017' || prefix == '018' || prefix == '019')
			{
				if(prefix == '011')
				{
					if(phoneLength < 10 || phoneLength > 11)
					{
						$('body').find('.hidden-check-mobile').val(false)
						$("#subscriber_question1").addClass('is-invalid');
						$('body').find('.error-msg-contactnum').html("Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 0123334444 / 0198887777.");
						
						return false;
					}
					
				}
				else
				{
					if(phoneLength < 10 || phoneLength > 10)
					{
						$('body').find('.hidden-check-mobile').val(false)
						$("#subscriber_question1").addClass('is-invalid');
						$('body').find('.error-msg-contactnum').html("Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 0123334444 / 0198887777.");
						
						return false;
					}
				}  

				$('body').find('.hidden-check-mobile').val(true)
			}
			else
			{
				$('body').find('.hidden-check-mobile').val(false)
				$("#subscriber_question1").addClass('is-invalid');
				$('body').find('.error-msg-contactnum').html("Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 0123334444 / 0198887777.");
				return false;
			} 


		}
		else if(firstNo == '5')
		{
			if(phoneLength < 9 || phoneLength > 9)
			{
				$('body').find('.hidden-check-mobile').val(false)
				$("#subscriber_question1").addClass('is-invalid');
				$('body').find('.error-msg-contactnum').html("Invalid Singapore phone number format. Correct Format(5 XXXX XXXX), e.g. 5 66667777.");
				return false;
			}

			$('body').find('.hidden-check-mobile').val(true)
		}
		else
		{
			$('body').find('.hidden-check-mobile').val(false)
			$("#subscriber_question1").addClass('is-invalid');
			$('body').find('.error-msg-contactnum').html("Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019).");
			return false;
		}
	}
}

$(function(){
	$(window).load(function() {
		$.uniform.restore(".noUniform");
	});

	$('body').on('click', '.card-clickable', function(){
		var usertype = $(this).data("usertype");
		$('#subscriber_question4').val(usertype);

		stepview(2,'forward',usertype);
	})

	$('body').on('click', '.btn-step-back', function(){
		var usertype = $(this).attr("data-usertype");
		var step = $(this).attr("data-step");

		stepview(step,'backward',usertype);
	})
	
	$('body').on('change', '#mca_main_category', function(){
		getListSubCategory();
	})
	
	$('body').on('change', '#mca_sub_category', function(){
		var category = $(this).val();
		if(category != 'other')
		{
			$('body').find('.award-title-label').removeClass('required');
		}
		else
		{
			$('body').find('.award-title-label').addClass('required');
		}
	})

	$('body').on('blur', '#mobilenumber', function(){
		checkMobileNum();
	});
		
	$('body').on('click', '.btn-nominate-submit', function(){
		var typeofuser = $('body').find('#subscriber_question4').val();
		var company_name = $('body').find('#company-name').val();
		var applicant_name = $('body').find('#applicant-name').val();
		var applicant_position = $('body').find('#applicant-position').val();
		var mobilenumber = $('body').find('#mobilenumber').val();
		var email = $('body').find('#emailNew').val();
		var mca_main_category = $('body').find('#mca_main_category').val();
		var mca_sub_category = $('body').find('#mca_sub_category').val();
		var brand_name = $('body').find('#brand-name').val();
		var award_title = $('body').find('#award-title').val();
		var full_name = $('body').find('#full-name').val();
		var product_name = $('body').find('#product-name').val();

		if(typeofuser == 'parent')
		{
			if(full_name == '')
			{
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please enter full name',
				});
				return false;
			}
		}
		else if(typeofuser == 'brand')
		{
			if(company_name == '')
			{
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please enter company name',
				});
				return false;
			}
			
			if(applicant_name == '')
			{
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please enter applicant name',
				});
				return false;
			}
			
			if(applicant_position == '')
			{
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please select applicant position',
				});
				return false;
			}
			
			if(award_title == '' && mca_sub_category == 'other')
			{
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please insert award title',
				});
				return false;
			}
		}

			
		if(product_name == '')
		{
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Please enter product name',
			});
			return false;
		}

		if(mobilenumber == '')
		{
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Please enter mobile number',
			});
			return false;
		}
		
		if(email == '')
		{
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Please enter email',
			});
			return false;
		}
		
		if(mca_main_category == '')
		{
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Please select main category',
			});
			return false;
		}
		
		if(mca_sub_category == '')
		{
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Please enter sub category',
			});
			return false;
		}
		
		if(brand_name == '')
		{
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Please enter brand name',
			});
			return false;
		}
 
		/* if ($('#formFile').get(0).files.length === 0) {
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Image of product cannot be empty',
			});
			return false;
		}
		else
		{
			if($('#formFile')[0].files[0].size > (2*1024*1024))
			{
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Image of product size cannot be more than 2MB',
				});
				return false;
			}

			var image =$('#formFile').val();
			console.log(image)
			if(image!='')
			{
				var checkimg = image.toLowerCase();
				if (!checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.jpeg|\.JPEG)$/)){ // validation of file extension using regular expression before file upload
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: 'Image of product must be in .jpeg, .jpg, .png format',
					});
					return false;
				}
			}
		} */

		$('body').find('#btnsubmit').trigger('click');
		$(this).html('Processing <i class="fas fa-spinner fa-spin"></i>');
	});	
	
	
	var selectorMobile = document.getElementById("mobilenumber");
	var phoneNumSettings = {
			'mask' : "***********",
			"placeholder": "",
			"definitions": {
				'*': {
					validator: "[0-9]"
				}
			}
		}
	Inputmask(phoneNumSettings).mask(selectorMobile);

});
</script>