<style>
   <!--
   #scroll_content_top{
		display:none;
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
	
	.error-msg{
		color:red;
	}
      -->
</style>
<!-- 
   Note:
   all the wording start with "{{ sometext}}" it will be replace when load this page. can see on controller enlieneaevents under this event id
   -->
   <div class="row mb-2">
		<div class="col-md-12 px-2 text-center">
			<h2>{{register-from-title}}</h2>
		</div>
	</div>
    <div class="row mb-2">
		<div class="col-md-6 px-2">
			<label for="firstname" class="form-label required">Name</label> 
			<input type="text" readonly class="form-control-plaintext" value="{{registered-name}}">
		</div>
		<div class="col-md-6 px-2">
			<label for="newemail" class="form-label required">Email</label>
			<input type="text" readonly class="form-control-plaintext" id="registered-email" value="{{registered-email}}">
			<input type="hidden" class="form-control subscriberid" id="registered-subscriberid" value="{{subscriberid}}">
		</div>
	</div>
   <div class="row mb-2">
		
		<div class="col-md-6 px-2">
			<label for="lastname" class="form-label required">Mobile No.</label> 
			<input type="text" readonly class="form-control-plaintext" value="{{registered-mobileno}}">
		</div>
		<div class="col-md-6 px-2">
			<label for="address" class="form-label required">Address</label> 
			<input type="text" readonly class="form-control-plaintext" value="{{registered-address}}">
		</div>
   </div>
	<div class="row mb-2" style="display:{{btn-redeem}}">
		<div class="col-md-6 px-2 mb-3 mb-md-1">
			<label for="location-redeem" class="form-label required">Where would you like to redeem your new mom gift?</label>
			<select class="form-select" id="location-redeem" aria-label="" required>
				<option value="">Redeem location</option>
				<option value="Columbia Asia Hospital - Bukit Rimau">Columbia Asia Hospital - Bukit Rimau</option>
				<option value="Columbia Asia Hospital - Puchong" >Columbia Asia Hospital - Puchong</option>
				<option value="Sunway Medical Centre - Velocity">Sunway Medical Centre - Velocity</option>
				<option value="Confinement Centre" >Confinement Centre</option>
				<option value="Other" >Other</option>
			</select>
		</div>
	</div>   
   <div class="row mb-2" style="display:{{row-redeem-info}}">
		<div class="col-md-6 px-2">
			<label for="locationredeem" class="form-label required">Redeem location</label> 
			<input type="text" readonly class="form-control-plaintext" value="{{registered-locationredeem}}">
		</div>
   </div>  
   <div class="row mb-2" style="display:{{row-redeem-info}}">
		<div class="col-md-6 px-2">
			<label for="lastname" class="form-label required">Status</label> 
			<input type="text" readonly class="form-control-plaintext" value="{{registered-redeem}}">
		</div>
		<div class="col-md-6 px-2">
			<label for="address" class="form-label required">Date redeem</label> 
			<input type="text" readonly class="form-control-plaintext" value="{{registered-redeemdate}}">
		</div>
   </div> 
	<div class="row my-4 align-items-center"  style="display:{{btn-redeem}}">
		<button type="button" class="btn btn-primary btn-submit-redeem redeem" style="padding-top:10px;padding-bottom:10px;font-size:14px;">
			Redeem Now
		</button>
	</div>
   <div id="sponsored_content" sponsored_content="1"></div>
   <!-- disabled overlay banner --->
   <div style="display: none;"><a id="tncpopupimg" href="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/June/Wishlist/tnc.jpg"> </a></div>
    <script>// <![CDATA[
	
	
    $(function(){
		$(window).load(function() {
			$.uniform.restore(".noUniform");
		});
		
		
		// validateEmail(true);
      	$('body').on('click', '.btn-submit-redeem', function(){
			var location_redeem 	= $('body').find('#location-redeem').val();
			
			if(location_redeem == '' || location_redeem == null || location_redeem == undefined)
			{
				$('body').find('#location-redeem').addClass('is-invalid');
				
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please select location to redeem.',
				});
				return false;
			}
			else
			{
				var checkemail   = $('body').find('#registered-email').val();
				var subscriberid = $('body').find('#registered-subscriberid').val();
			
				Swal.fire({
				  title: 'Are you sure you want to redeem now?',
				  text: " Please redeem only when you are present at the counter. Once clicked, considered redeemed.",
				  icon: 'info',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes'
				}).then((result_opt1) => {
					if (result_opt1.isConfirmed)
					{
						$.ajax({
							url		 : '../modules/enlineamixmod/enlineamixmod-checkcustemailevent-ajax.php', 
							data	 :{'checkemail': checkemail, 'subscriberid' : subscriberid, 'location_redeem':location_redeem,'eventid': 142},
							dataType :'json',
							method 	 : 'post',
							success	 : function(result){
								console.log(result);
								
								if(result.status == true && result.status_code == 'update_redeem_success')
								{
									location.reload();
								}
								else
								{
									
								}
							}
						});
					}
				})
			}
		});
	});
  
</script>
