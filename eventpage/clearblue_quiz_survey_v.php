<style>
	<!--
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	
	.noUniform:focus{
		outline: unset !important;
 		outline-offset: unset !important;
		box-shadow: unset !important;
	}

	.font-clearblue{
		font-family: 'Montserrat', sans-serif;
	}

	.font-header{
		color: #00457c;
		font-weight: 600.5px;
		font-size: 27px;
	}

	.img-center-size{
		display: block;
		margin-left: auto;
		margin-right: auto;
		height: 200px;
		width: 1100px;
	}

	.div-qnum{
		font-size: 15px;
		color: #00b0eb; 
		font-weight: 600;
	}

	.font-question{
		font-weight: 550;
		font-size: 2rem;
		color: #00457c;
	}

	.progress-container{
		height: 2rem; 
		background-color: #e0e7f1; 
		border-radius: 175px;
		padding-top: 3.25px;
		padding-left: 3px;
		padding-right: 3px;
	}

	.progress-bar {
		border-radius: 175px;
    	transition: all .25s ease-out;
    	background-color: #00457c;
    	background-image: linear-gradient(to right,#00457c 0,#00b0eb 100%);
		width: 12.5%; 
		height: 20px;
	}

	.btn-primary:hover{
		background-color: #00457c;
		border-color: #00457c;
	}

	.btn-primary:active{
		background-color: #00457c;
		border-color: #00457c;
	}

	.big-checkbox{
		width: 20px; height: 20px;
	}

	.font-checkbox-label{
		color: #626262;
		font-weight: 400;
	}

	.btn-nxt-question{
		border-radius=7px; 
		font-weight=200; 
		background-color: #00457c; 
		border-color: #00457c; 
		padding: 10px 20px; 
		font-size=14px;
	}

	.margin-lt{
		margin-left: 10px;
		margin-top: 4.5px;
	}

	.card-tips{
		display:none;
	}

	-->
</style> 

<div class="container-fluid p-5 bg-white text-center font-clearblue">
  <label class="font-header">Am I Pregnant? - Quiz</label>
</div>

<div class="background">
	<img class="img-center-size" alt="Woman testing for pregnancy" src="https://www.clearblue.com/sites/default/files/wysiwyg/pages/images/pages/category-pregnancy-tests-new.jpg">
</div>

<div class="row my-3 font-clearblue">
	<div class="col-md-12 text-center">
		<button type="button" class="btn btn-primary btn-start-quiz">Start Quiz</button>  
	</div>
</div>

<div class="container mt-5 font-clearblue" id="quiz" style="margin-top:10px">
	<div class="row">
		<div class="col-md-9">
			<div class="progress progress-container">
				<div class="progress-bar" role="progress-bar" data-animation="true" data-pbar="12.5"></div>
			</div>
		</div>
		<div class="col-md-3 text-right div-qnum">
		Question 1/8
		</div>
	</div>

	<div class="row text-center font-question">
		<div class="col-md-12">
			<p>When is your next period due?</p>
		</div>
	</div>

	<div class="row">
		<div class=col-md-12>
			<div class="row my-3">
				<div class="col-md-12">
					<form action="/action_page.php">
						<div class="form-check">
							<input type="checkbox" class="form-check-input noUniform big-checkbox check-option" data-question="1" data-option="a" value="In 2 weeks or more">
							<label class="form-check-label margin-lt font-checkbox-label" for="check1">In 2 weeks or more</label>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input noUniform big-checkbox check-option" data-question="1" data-option="b" value="In a few days">
							<label class="form-check-label margin-lt font-checkbox-label" for="check2">In a few days</label>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input noUniform big-checkbox" name="option3" value="something">
							<label class="form-check-label margin-lt font-checkbox-label" for="check3">I'm a few days late</label>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input noUniform big-checkbox" name="option4" value="something">
							<label class="form-check-label margin-lt font-checkbox-label" for="check4">I'm more than a week late</label>
						</div>
						<div class="form-check">
							<input type="checkbox" class="form-check-input noUniform big-checkbox" name="option5" value="something">
							<label class="form-check-label margin-lt font-checkbox-label" for="check2">I don't know/I don't have regular periods</label>
						</div>
					</form>
				</div>
			</div>
			<div class="row my-3">
				<div class="col-md-12">
					<div class="card card-tips question_1_a">
						<div class="card-body">
							<h4 class="card-title">In 2 weeks or more :</h4>
							<p class="card-text">Find out when you can take a pregnancy test</p>
							<a href="#" class="card-link">When can I take a pregnancy test?</a>
						</div>
					</div>
					<div class="card card-tips question_1_b">
						<div class="card-body">
						<h4 class="card-title">In a few days :</h4>
						<p class="card-text">You don’t need to wait for your missed period before you do a pregnancy test. The Clearblue® Early Detection Pregnancy Test can be used up to 6 days before your missed period.</p>
						<a href="#" class="card-link">Clearblue® Early Detection Pregnancy Test</a> 
						<a href="#" class="card-link">When can I take a pregnancy test?</a>
						</div>
					</div>
					<div class="card card-tips ">
						<div class="card-body">
						<h4 class="card-title">I'm a few days late :</h4>
						<p class="card-text">For many women, a late period is often the earliest physical sign of pregnancy. Find the right test for you.</p>
						<a href="#" class="card-link">Clearblue Pregnancy Tests</a> 
						<a href="#" class="card-link">Early pregnancy symptoms</a>
						</div>
					</div>
					<div class="card card-tips ">
						<div class="card-body">
						<h4 class="card-title">I'm more than a week late :</h4>
						<p class="card-text">For many women, a late period is often the earliest physical sign of pregnancy. Find the right test for you.</p>
						<a href="#" class="card-link">Clearblue Pregnancy Tests</a> 
						<a href="#" class="card-link">Early pregnancy symptoms</a>
						</div>
					</div>
					<div class="card card-tips ">
						<div class="card-body">
						<h4 class="card-title">I don't know/I don't have regular periods :</h4>
						<p class="card-text">Find out when you can take a pregnancy test</p>
						<a href="#" class="card-link">When can I take a pregnancy test?</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row my-3">
				<div class="col-md-12 text-center">
					<button type="button" class="btn btn-primary noUniform mt-2 btn-nxt-question" data-qnum="1" style="display:none;">Next question</button> 
				</div>
			</div>
		</div>
	</div>
</div>


<script>
$(function(){
	$(window).load(function() {
		$.uniform.restore(".noUniform");
	});

	$('.btn-nxt-question').on('click', function(){
		var question = $(this).attr('data-qnum');
		var progressbar = $('.progress-bar').attr('data-pbar');
		
		if (question < 8) {
			question++;
			$(this).attr('data-qnum', question);
			$('.div-qnum').html('Question ' + question + '/8');
			progressbar = parseFloat(progressbar);
			progressbar = progressbar + 12.5;
			$('.progress-bar').attr('data-pbar', progressbar);
			$('.progress-bar').css('width', progressbar + '%');
		}
	});

	$(".btn-start-quiz").click(function() {
    	$('html,body').animate({
        	scrollTop: $("#quiz").offset().top},'slow');
	}); /* kinda buggy and weird */


	$('body').on('click', '.check-option', function(){
		$('body').find('.card-tips').hide();
		var no_checked = $(".check-option:checked").length;
		console.log("number of checked" + no_checked);

		if(no_checked > 0)
		{
			$('.check-option').not(this).prop('checked', false);
		}
		else
		{
			$(this).prop('checked', true); /* for current click check box to check, coz we dont want to allow user uncheck all */
		}
		
		var ischecked = $(this).is(":checked");

		/* https://stackoverflow.com/questions/17785010/jquery-uncheck-other-checkbox-on-one-checked */
		if (ischecked == true) {
		
			$('body').find('.btn-nxt-question').show();
			var answer = $(this).val();
			var quest_option = $(this).data('option');// method 1 how to get data attribute;
			var quest_num = $(this).attr('data-question'); // method 2 how to get data attribute;
			
			console.log("answer :" + answer);
			console.log("question no :" + quest_num);
			console.log("quest_option :" + quest_option);

			var showclass = 'question_' + quest_num + '_' + quest_option;
			console.log("card to show :" + showclass);

			$('body').find('.' + showclass).show();
		}
	
	})



	/* $('#check1').click(function(){
		var ischecked = $(this).is(":checked");
		if (ischecked == true) {
			$('body').find('.card1').show('slow');
		} else {
			$('body').find('.card1').hide('slow');
		}
	}); */
});

</script>
