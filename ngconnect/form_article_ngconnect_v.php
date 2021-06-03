<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<script src="https://www.motherhood.com.my/themes/default-bootstrap/dashboard-assets/sweetalert2-v10.13.0/dist/sweetalert2.all.min.js" type="text/javascript"></script>

<style>
.form-mb
{
	margin-bottom:10px;
}

.form-mt{
	margin-top:30px;
}

.border-input{
	border: 1px solid #ccc !important;
    border-radius: 4px !important;
}

.input-field{
	box-shadow: none !important;
}

.input-label{
	font-size: 15px !important;
}

.select-input{
	width:100%; 
	font-size:15px;
}

.btn.active.focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn:active:focus, .btn:focus {
    outline: none;
}

.invalid-input{
	border-color: #ef0a0a !important;
}

.input-msg{
	font-size:65%;
	color: #ef0a0a !important;
}
</style>
<form id="form-article" style="min-height: 370px;">
	<div class="row form-mb">
		<div class="col-md-6 input-col">
			<input type="hidden" id="title-article" name="title" value="" />
			<input type="hidden" id="id-article" name="article_id" value="" />
			<input type="hidden" id="source" name="source" value="" />
			<input type="hidden" name="formId" value="16" />
			<label for="inputName" class="form-label input-label">Name</label>
			<input type="text" name="customer_name" class="form-control border-input input-field input-sm input-customer-name" id="inputEmail4">
			<small class="input-msg"></small>
		</div>
		<div class="col-md-6 input-col">
			<label for="inputContactNo" class="form-label input-label">Contact No.</label>
			<input type="text" name="customer_contactno" class="form-control border-input input-field input-sm input-contactno" id="inputContactNo">
			<small class="input-msg"></small>
		</div>
	</div>
	<div class="row form-mb">
		<div class="col-md-12 input-col">
			<label for="inputEmail" class="form-label input-label">Email</label>
			<input type="email" name="customer_email" class="form-control border-input input-field input-sm input-email" id="inputEmail">
			<small class="input-msg"></small>
		</div>
	</div>
	<div class="row form-mb">
		<div class="col-md-12 input-col">
			<label for="inputQuestion1" class="form-label input-label">EDD (if you are pregnant)</label>
			<input type="date" name="pregnant_edd" class="form-control border-input input-field input-sm" id="inputQuestion1" style="width:100%;-webkit-appearance: none;">
		</div>
	</div>
	<div class="row form-mb">
		<div class="col-md-12 input-col">
			<label for="inputQuestion2" class="form-label input-label">Which confinement center do you preferred?</label>
			<select id="inputQuestion2" class="form-select border-input input-field select-input input-sm" name="confinement_center">
				<option value="">Please select</option>
				<option value="Esther Postpartum Care">Esther Postpartum Care</option>
				<option value="Kimporo Postnatal Rejuvenation Centre">Kimporo Postnatal Rejuvenation Centre</option>
				<option value="Bonda Villa Confinement Centre">Bonda Villa Confinement Centre</option>
				<option value="Best Month Confinement Centre">Best Month Confinement Centre</option>
				<option value="Gina's Place">Gina&#039s Place</option>
				<option value="TLC Confinement Centre">TLC Confinement Centre</option>
				<option value="Mom Retreat Confinement Centre">Mom Retreat Confinement Centre</option>
				<option value="SW Confinement Centre">SW Confinement Centre</option>
				<option value="Serenity Confinement Centre">Serenity Confinement Centre</option>
				<option value="First Month Confinement Centre">First Month Confinement Centre</option>
			</select>
		</div>
	</div>
	<div class="row form-mb form-mt">
		<div class="col-md-12">
			<button type="button" class="btn btn-primary btn-submit">Submit</button>
		</div>
  </div>
</form>



<script type="text/javascript">
	$(function(){
		var article_title  = $('#form-article').closest('.nuren-tag').attr('data-nuren-posttitle');
		var articlezone    = $('#form-article').closest('.nuren-tag').attr('data-nuren-zone');
		var article_id 	   = $('#form-article').closest('.nuren-tag').attr('data-nuren-articleid');
		var source 		   = $('#form-article').closest('.nuren-tag').attr('data-nuren-source');
		
		if(article_title != '' && article_title != undefined && article_title != null)
		{
			$('body').find('#form-article #title-article').val(article_title);
		}
		
		if(article_id != '' && article_id != undefined && article_id != null)
		{
			$('body').find('#form-article #id-article').val(article_id);
		}
		
		if(source != '' && source != undefined && source != null)
		{
			$('body').find('#form-article #source').val(source);
		}
		
		$('body').on('click', '.btn-submit', function(){
			var cust_name 		= $('body').find('.input-customer-name').val();
			var cust_contactno  = $('body').find('.input-contactno').val();
			var cust_email  	= $('body').find('.input-email').val();
			var flagerror 		= false;
			$('body').find('.input-field').removeClass('invalid-input');
			$('body').find('.input-msg').html("");
			
			if(cust_name == '')
			{
				var msg = '<span class="glyphicon glyphicon-info-sign"></span> Please insert name';
				$('body').find('.input-customer-name').addClass('invalid-input');
				$('body').find('.input-customer-name').closest('.input-col').find('.input-msg').html(msg);
				flagerror = true
			}
			
			if(cust_contactno == '')
			{
				var msg = '<span class="glyphicon glyphicon-info-sign"></span> Please insert contact no';
				$('body').find('.input-contactno').addClass('invalid-input');
				$('body').find('.input-contactno').closest('.input-col').find('.input-msg').html(msg);
				flagerror = true
			}
			
			if(cust_email == '')
			{
				var msg = '<span class="glyphicon glyphicon-info-sign"></span> Please insert email';
				$('body').find('.input-email').addClass('invalid-input');
				$('body').find('.input-email').closest('.input-col').find('.input-msg').html(msg);
				flagerror = true
			}
			
			if(flagerror == true)
			{
				return false;
			}
			else
			{
				var dataform = $('body').find('#form-article').serialize();
				$('body').find('.btn-submit').html("Processing...");
				$('body').find('.btn-submit').attr("disabled", true);
				
				$.ajax({
      				url		 : 'https://visual.nuren.co/media/dynamicnuren_form.php', 
      				data	 : dataform,
      				dataType :'json',
      				method 	 : 'post',
      				success	 : function(result){
						$('body').find('.btn-submit').html("Submit");
						$('body').find('.btn-submit').attr("disabled", false);
						
      					if(result.status == true)
						{
							$('body').find('.btn-submit').html("Submitted");
							$('body').find('.btn-submit').attr("disabled", true);
							alert("thank you for submitting");
						}
						else if(result.status == false)
						{
							
							alert("An error occur during process");
						}
      				}
      			});
			}	
			
			
		});
	});
</script>
