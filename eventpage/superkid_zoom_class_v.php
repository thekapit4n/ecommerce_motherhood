<style>
<!--
	#scroll_content_top{
		display:none;
	}
		
	input[type="checkbox"], input[type="radio"]{
		outline:none !important;
	}
-->
</style>


<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px; margin-bottom: 0;">
	<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2020/November/Online+Sale/page/super-kids-1.png" width="100%" />
</div>
<div class="row my-3">
	<div class="col-md-12 px-3">
		<label for="input-parentname" class="form-label">Zoom Live Class Date</label>
		<select class="form-select" aria-label=".form-select-sm example">
		 	<option value="">--Select Date--</option>
			<option value="23-02-2021">7 February 2021 - Video Sensing-Collect the Ang Pow!</option>
			<option value="27-02-2021">27 February 2021 - What are these shapes?</option>
			<option value="27-03-2021">27 March 2021 - Eye Magic</option>
			<option value="28-03-2021">28 March 2021 - Decorate your Easter Egg!</option>
		</select>
	</div>
</div>
<div class="row text-left">
	<div class="col-md-12 px-3">
		<p style="font-size: 1.6em; color: #4c4c4d; font-weight: bold; padding-top: 20px; line-height: 1; text-align: left;">Parent Info</p>
		<hr style="border: 2px solid; margin-top: 2px;" />
	</div>
</div>
<div class="row my-3">
	<div class="col-md-6 px-3">
		<label for="input-parentname" class="form-label">Parent Name</label>
		<input type="text" class="form-control" id="input-parentname">
	</div>
	<div class="col-md-6 px-3">
		<label for="input-parentemail" class="form-label">Parent Email</label>
		<input type="text" class="form-control" id="input-parentemail">
	</div>
</div>
<div class="row my-3">
	<div class="col-md-6 px-3">
		<label for="input-parentcontact" class="form-label">Parent Contact No</label>
		<input type="text" class="form-control" id="input-parentcontact">
	</div>
	<div class="col-md-6 px-3">
		<div class="row">
			<label for="input-parentcontact" class="form-label">Are you a member of Motherhood Superkids Club?</label>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-check form-check-inline">
					<input class="form-check-input noUniform" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
					<label class="form-check-label" for="flexRadioDefault1">
						Yes
					</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input noUniform" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
					<label class="form-check-label" for="flexRadioDefault1">
						No
					</label>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row text-left">
	<div class="col-md-12 px-3">
		<p style="font-size: 1.6em; color: #4c4c4d; font-weight: bold; padding-top: 20px; line-height: 1; text-align: left;">Child Info</p>
		<hr style="border: 2px solid; margin-top: 2px;" />
	</div>
</div>
<div class="row my-3">
	<div class="col-md-6 px-3">
		<label for="input-parentname" class="form-label">Child Name</label>
		<input type="text" class="form-control" id="input-parentname">
	</div>
	<div class="col-md-6 px-3">
		<label for="input-parentemail" class="form-label">Childe DOB</label>
		<input type="text" class="form-control" id="input-parentemail">
	</div>
</div>
<div class="row my-3">
  <div class="col-12 px-3">
    <button type="submit" class="btn btn-primary">Sign up</button>
  </div>
</div>
<div id="sponsored_content" sponsored_content="1"></div> <!-- disabled overlay banner --->
<!--
<div class="col-md-8 col-lg-8 col-xs-12" style="padding-right: 0; text-align: left;"><input style="color: black; box-shadow: none !important; border-radius: 0; font-size: 18px; padding: 13px 10px; margin-top: 0; width: 100%;" name="subscriber_question1" id="subscriber_question1" type="number" title="xxx xxxxx" placeholder="XXX-XXXXXXX" pattern=".{10,}" onkeydown="javascript: return event.keyCode == 69 ? false : true" required="required" /> <label style="color: red; display: none;" id="phoneNoError">Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 012 3334444 / 019-8887777.&lt;/label &gt; <label style="color: red; display: none;" id="phoneNoPrefixError">Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019).&lt;/label &gt; <label style="color: red; display: none;" id="phoneNoErrorSg">Invalid Singapore phone number format. Correct Format(5 XXXX XXXX), e.g. 5 66667777.&lt;/label &gt; </label></label></label></div>
<button type="submit" value="submit" name="submit" class="btn btn-default button button-medium submitbtn" style="text-align: center; width: 100%; padding: 10px;"> Submit </button></div>
-->

<script>// <![CDATA[
    $(document).ready(function () {
		
		$(window).load(function() {
			$.uniform.restore(".noUniform");
		});
		
        $("#subscriber_question1").on("change", function (event) {
              var phonenumber = $("#subscriber_question1").val();
              var phonenumber = phonenumber.replace(/-/g, " ");
              var phonenumber = phonenumber.trim();
              if ($.trim(phonenumber) != "") {
                var prefix = phonenumber.substring(0, 3);
                var firstNo = phonenumber.substring(0, 1);
                var phoneLength = phonenumber.length;
                if (firstNo !== 0 || firstNo !== 5) {
                  $("#phoneNoError").show();
                  $("#subscriber_question1").css("background-color", "red");
                  $("#newUserSpan").attr("disabled", true);
                }
                if (firstNo == "0") {
                  if (
                    prefix == "010" ||
                    prefix == "011" ||
                    prefix == "012" ||
                    prefix == "013" ||
                    prefix == "014" ||
                    prefix == "015" ||
                    prefix == "016" ||
                    prefix == "017" ||
                    prefix == "018" ||
                    prefix == "019"
                  ) {
                    $("#phoneNoPrefixError").hide();
                    $("#subscriber_question1").css("background-color", "white");
                    $("#newUserSpan").attr("disabled", false);
                    if (prefix == "011") {
                      if (phoneLength < 10 || phoneLength > 11) {
                        $("#phoneNoError").show();
                        $("#subscriber_question1").css("background-color", "red");
                        $("#newUserSpan").attr("disabled", true);
                      } else {
                        $("#phoneNoError").hide();
                        $("#phoneNoErrorSg").hide();
                        $("#subscriber_question1").css("background-color", "white");
                        $("#newUserSpan").attr("disabled", false);
                      }
                    } else {
                      if (phoneLength < 10 || phoneLength > 10) {
                        $("#phoneNoError").show();
                        $("#subscriber_question1").css("background-color", "red");
                        $("#newUserSpan").attr("disabled", true);
                      } else {
                        $("#phoneNoError").hide();
                        $("#phoneNoErrorSg").hide();
                        $("#subscriber_question1").css("background-color", "white");
                        $("#newUserSpan").attr("disabled", false);
                      }
                    }
                  } else {
                    $("#phoneNoPrefixError").show();
                    $("#subscriber_question1").css("background-color", "red");
                    $("#newUserSpan").attr("disabled", true);
                  }
                } else if (firstNo == "5") {
                  $("#phoneNoErrorSg").hide();
                  $("#phoneNoError").hide();
                  $("#subscriber_question1").css("background-color", "white");
                  $("#newUserSpan").attr("disabled", false);
                  if (phoneLength < 9 || phoneLength > 9) {
                    $("#phoneNoErrorSg").show();
                    $("#subscriber_question1").css("background-color", "red");
                    $("#newUserSpan").attr("disabled", true);
                  } else {
                    $("#phoneNoErrorSg").hide();
                    $("#phoneNoError").hide();
                    $("#subscriber_question1").css("background-color", "white");
                    $("#newUserSpan").attr("disabled", false);
                  }
                } else {
                  $("#phoneNoPrefixError").show();
                  $("#subscriber_question1").css("background-color", "red");
                  $("#newUserSpan").attr("disabled", true);
                }
              }
        });
    });
       
      // ]]>
   </script>
