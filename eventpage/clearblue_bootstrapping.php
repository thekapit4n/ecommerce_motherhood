<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>quiz clearblue !</h1>
</div>

<div class="container mt-1 text-center">
	<div class="row">
		<div class="col-md-10">
			<div class="progress">
				<div class="progress-bar bg-warning" role="progress-bar"  style="width:38%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		</div>
	<div class="col-sm-2">1/8</div>
	<h2>When is your next period due?<h2>
</div>
  
<div class="container mt-2">
	<form action="/action_page.php">
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
			<label class="form-check-label" for="check1">In 2 weeks or more</label>
		</div>
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
			<label class="form-check-label" for="check2">In a few days</label>
		</div>
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="check3" name="option3" value="something">
			<label class="form-check-label" for="check3">I'm a few days late</label>
		</div>
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="check4" name="option4" value="something">
			<label class="form-check-label" for="check4">I'm more than a week late</label>
		</div>
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="check5" name="option5" value="something">
			<label class="form-check-label" for="check2">I don't know/I don't have regular periods</label>
		</div>
		<button type="submit" class="btn btn-primary mt-2">Next question</button> 
	</form>
</div>

<div class="container mt-3">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">In 2 weeks or more :</h4>
      <p class="card-text">Find out when you can take a pregnancy test</p>
      <a href="#" class="card-link">When can I take a pregnancy test?</a>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">In a few days :</h4>
      <p class="card-text">You don’t need to wait for your missed period before you do a pregnancy test. The Clearblue® Early Detection Pregnancy Test can be used up to 6 days before your missed period.</p>
	  <a href="#" class="card-link">Clearblue® Early Detection Pregnancy Test</a> 
	  <a href="#" class="card-link">When can I take a pregnancy test?</a>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">I'm a few days late :</h4>
      <p class="card-text">For many women, a late period is often the earliest physical sign of pregnancy. Find the right test for you.</p>
	  <a href="#" class="card-link">Clearblue Pregnancy Tests</a> 
	  <a href="#" class="card-link">Early pregnancy symptoms</a>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">I'm more than a week late :</h4>
      <p class="card-text">For many women, a late period is often the earliest physical sign of pregnancy. Find the right test for you.</p>
	  <a href="#" class="card-link">Clearblue Pregnancy Tests</a> 
	  <a href="#" class="card-link">Early pregnancy symptoms</a>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">I don't know/I don't have regular periods :</h4>
      <p class="card-text">Find out when you can take a pregnancy test</p>
	  <a href="#" class="card-link">When can I take a pregnancy test?</a>
    </div>
  </div>

</div>

<script>

$(function(){
	/* $(window).load(function() {
		$.uniform.restore(".noUniform");
	});*/

});
</script>