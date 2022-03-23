<style>
   <!--

   @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
   #scroll_content_top{
		display:none;
	}

	.main-title-color{
		color: #9b7b49;
	}

    .font-family-pregnancytools, .swal2-container{
        font-family: 'Poppins', sans-serif !important;
    }

    .swal2-container{
        z-index:9999 !important;
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
		font-size:20px;
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
		/* background-image: linear-gradient(180deg,#aa814f,  #937043);
		box-shadow: 0 2px 10px 2px #9b7b49; */
	}
	
	/* .card-clickable:hover .card-img-bg-parent{
		background: url(https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/Motherhood+Choice+Awards+2022/nominatepage/button/whenhover-parent.png ) center center no-repeat;
		background-size: contain;
	}
	
	.card-clickable:hover .card-img-bg-brand{
		background: url(https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/Motherhood+Choice+Awards+2022/nominatepage/button/whenhover-brand.png) center center no-repeat;
		background-size: contain;
	} */
	
	.card-clickable:hover .card-title{
		/* color:#f7ecdc; */
	}

	@media only screen and (max-width: 600px) {
		

	}
	
	-->
</style>
<div class="font-family-pregnancytools">
    <div class="row step-select-pregnancy-tools">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4>Pregnancy Tools</h4>
                <p>
                    Carrying a bun in the oven? You've come to the right place to get all your burning questions about pregnancy answered. 
                    Go ahead, test out our pregnancy features and thank us later
                </p>
            </div>
        </div>
        <div class="row mt-3 row-select-tools">
            <div class="col-sm-6 mb-3">
                <div class="card mb-3 card-clickable" data-tooltype="due_date_calculator" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-4 col-4 text-center card-img-bg-brand">
                        </div>
                        <div class="col-md-8 col-8">
                            <div class="card-body" style="padding-top: 12%;padding-bottom: 12%;">
                                <h5 class="card-title text-center" style="font-weight:600;">Due Date Calculator</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card mb-3 card-clickable" data-tooltype="ovulation_calculator" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-4 col-4 text-center card-img-bg-brand">
                        </div>
                        <div class="col-md-8 col-8">
                            <div class="card-body" style="padding-top: 12%;padding-bottom: 12%;">
                                <h5 class="card-title text-center" style="font-weight:600;">Ovulation Calculator</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <div class="row row-tool due-date-calculator text-center" style="display:none;">
        <div class="row mb-3>
            <h4>Due Date Calculator</h4>
        </div>
        <div class="row mb-2">
            <div class="col-md-4 px-2">
                <label for="" class="form-label required">Calculation Method</label> 
                <select class="form-select" id="calc_method" aria-label="" style="height: 37px;">
                <option value="">Please select position</option>
                <option value="last_period">Last Period</option>
                <option value="conception_date">Conception Date</option>
                <option value="ivf">IVF</option>
                <option value="ultrasound">Ultrasound</option>
                </select>
                <small class="error-msg"></small>
            </div>
            <div class="col-md-4 px-2 row-date-question" style="display:none;">
                <label for="" class="form-label required date-question"></label> 
                <input type="text" class="form-control" id="date-selection"/> 
            </div>
            <div class="col-md-4 px-2 unique-method-question last-period-question" style="display:none;">
                <label for="" class="form-label required">What is the average length of your menstrual cycle?</label> 
                <select class="form-select" id="avg-length-menstrual-cycle" aria-label="" style="height: 37px;">
                    <option value="">Please select day</option>
                    <option value="20">20 Days</option>
                    <option value="21">21 Days</option>
                    <option value="22">22 Days</option>
                    <option value="23">23 Days</option>
                    <option value="24">24 Days</option>
                    <option value="25">25 Days</option>
                    <option value="26">26 Days</option>
                    <option value="27">27 Days</option>
                    <option value="28">28 Days</option>
                </select>
            </div>
            <div class="col-md-4 px-2 unique-method-question ivf-question" style="display:none;">
                <label for="" class="form-label required">Days of Embryo Transfers </label> 
                <select class="form-select" id="ivf-transfer" aria-label="" style="height: 37px;">
                    <option value="">Please select day</option>
                    <option value="3">IVF 3 Day</option>
                    <option value="5">IVF 5 Day</option>
                </select>
            </div>
            <div class="col-md-2 px-2 unique-method-question ultrasound-question" style="display:none;">
                <label for="" class="form-label required">Weeks </label> 
                <select class="form-select" id="ultrasound-week" aria-label="" style="height: 37px;">
                    <option value="">Please select weeks</option>
                </select>
            </div>
            <div class="col-md-2 px-2 unique-method-question ultrasound-question" style="display:none;">
                <label for="" class="form-label required">Days </label> 
                <select class="form-select" id="ultrasound-day" aria-label="" style="height: 37px;">
                    <option value="">Please select day</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-12">
                <button type="button" class="btn btn-primary btn-calculate-due-date">Calculate my due date</button>
            </div>
        </div>
    </div>
    <div class="row row-tool ovulation-calculator text-center" style="display:none;">
        <div class="row mb-3>
            <h4> Ovulation Calculator</h4>
        </div>
        <div class="row mb-2">
            <div class="col-md-4 px-2">
                <label for="" class="form-label required">What is the start date of your period?</label> 
                <input type="text" class="form-control" id="date-ovulation"/>
            </div>
            <div class="col-md-4 px-2">
                <label for="" class="form-label required">What is the average length of your menstrual cycle?</label> 
                <select class="form-select" id="ovulation-days" aria-label="" style="height: 37px;">
                    <option value="">Please select day</option>
                </select>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-12">
                <button type="button" class="btn btn-primary btn-calculate-ovulation-date">Calculate my due date</button>
            </div>
        </div>
    </div>
    <div class="row" >
        <div class="col-md-12">
            <button type="button" class="btn btn-primary btn-back-tool-selection" style="display:none;"> Back to tools</button>
        </div>
    </div>
</div>

<script>

    $(function(){
        $(window).load(function() {
            $.uniform.restore(".noUniform");
        });

        var optionHtml = "";
        for (var i = 1; i <= 24; i++) {
            optionHtml += "<option value='" + i + "'>" + i + "</option>";
        }
        $('body').find('#ultrasound-week').append(optionHtml); 
        
        var optionHtml2 = "";
        for (var j = 20; j <= 40; j++) {
            optionHtml2 += "<option value='" + j + "'>" + j + "</option>";
        }
        $('body').find('#ovulation-days').append(optionHtml2);

        $('body').on('click', '.card-clickable', function(){
            var toolType = $(this).attr("data-tooltype");
            $('body').find('.step-select-pregnancy-tools').hide();
            $('body').find('.row-tool').hide();
            $('body').find('.btn-back-tool-selection').show();

            if(toolType == "due_date_calculator")
            {
                $('body').find('.due-date-calculator').show();
            }
            else if(toolType == "ovulation_calculator")
            {
                $('body').find('.ovulation-calculator').show();
            }
        });
        
        $('body').on('click', '.btn-back-tool-selection', function(){
            $(this).hide();
            $('body').find('.step-select-pregnancy-tools').show();
            $('body').find('.row-tool').hide();
        });
        
        $('body').on('change', '#calc_method', function(){
           var calc_method = $(this).val();
           $('body').find('.unique-method-question').hide();
           $('body').find('.row-date-question').hide();

           if(calc_method != '')
           {    
               if(calc_method == 'last_period')
               {
                   $('body').find('.date-question').html('The first day of your last period?');
                   $('body').find('.last-period-question').show();
               }
               else if(calc_method == 'conception_date')
               {
                    $('body').find('.date-question').html('Date of Conception');
               }  
               else if(calc_method == 'ivf')
               {
                    $('body').find('.date-question').html('Date of Transfer');
                    $('body').find('.ivf-question').show();
               }
                else if(calc_method == 'ultrasound')
               {
                    $('body').find('.date-question').html('Date of Ultrasound');
                    $('body').find('.ultrasound-question').show();
               }

                $('body').find('.row-date-question').show();
           }
        });
        
        $('body').on('click', '.btn-calculate-due-date', function(){
            var calc_method = $('body').find('#calc_method').val();
            var date_selection = $('body').find('#date-selection').val();
            var avg_cycle = $('body').find('#avg-length-menstrual-cycle').val();
            var ivf_transfer = $('body').find('#ivf-transfer').val();
            var ultrasound_day = $('body').find('#ultrasound-day').val();
            var ultrasound_week = $('body').find('#ultrasound-week').val();

            var myArray = {
                "type_tool" : "due_date_calculator",
                "calc_method": calc_method, 
                "date_selection": date_selection, 
                "avg_cycle": avg_cycle,
                "ivf_transfer": ivf_transfer,
                "ultrasound_day": ultrasound_day,
                "ultrasound_week": ultrasound_week,
            };

            $.ajax({
      			url		 : '../modules/enlineamixmod/enlineamixmod-pregnancy-tools.php', 
      			data	 :myArray,
      			dataType :'json',
      			method 	 : 'post',
      			success	 : function(result){
                    if(result.status == true)
                    {
                        Swal.fire({
                            title: 'Congratulations!',
                            html:
                                '<h3 style="color:black;">Your due date is ' + result.data.due_date + '</h3>' +
                                '<font style="font-size:14px;">You are ' + result.data.pregnant_date + ' pregnant</font>',
                            imageUrl: 'https://s3.amazonaws.com/motherhood.com.my/assets/images/pregnancytool/due-date-result.png',
                            imageAlt: 'Due date result image',
                        });
                    }
      			}
      		});
        });
        
        $('body').on('click', '.btn-calculate-ovulation-date', function(){
            var date_selection = $('body').find('#date-ovulation').val();
            var avg_cycle = $('body').find('#ovulation-days').val();

            var myArray = {
                "type_tool" : "ovulation_calculator",
                "date_selection": date_selection, 
                "avg_cycle": avg_cycle,
            };

            $.ajax({
      			url		 : '../modules/enlineamixmod/enlineamixmod-pregnancy-tools.php', 
      			data	 :myArray,
      			dataType :'json',
      			method 	 : 'post',
      			success	 : function(result){
                    if(result.status == true)
                    {
                        Swal.fire({
                            title: 'Resutl!',
                            html:
                                '<h5 style="color:black;">IF YOUR PERIOD STARTS :</h5>' +
                                '<font style="font-size:14px;">' + result.data.data_selection + '</font>'
                                +'<h5 style="color:black;">IF YOUR MENSTRUAL CYCLE IS :</h5>'
                                +'<font style="font-size:14px;">' + result.data.avg_cycle + ' days</font>'
                                +'<h5 style="color:black;">YOUR ESTIMATED FERTILE WINDOW IS :</h5>'
                                +'<font style="font-size:14px;">' + result.data.estimateFertileStart + " - " + result.data.estimateFertileEnd + '</font>'
                                +'<h5 style="color:black;">YOUR ESTIMATED OVULATION DATE IS:</h5>'
                                +'<font style="font-size:14px;">' + result.data.estimateOvulation + '</font>'
                                ,
                        });
                    }
      			}
      		});
        });

        var selector = document.getElementById("date-selection");
      	Inputmask('datetime',{
      		alias 		 :'datetime',
      		inputFormat  : "dd/mm/yyyy", 
      		outputFormat : "yyyy-mm-dd",
            placeholder  : "dd/mm/yyyy",
      		leapday: "29.02."
      	}).mask(selector); 
          
        var selector = document.getElementById("date-ovulation");
      	Inputmask('datetime',{
      		alias 		 :'datetime',
      		inputFormat  : "dd/mm/yyyy", 
      		outputFormat : "yyyy-mm-dd",
            placeholder  : "dd/mm/yyyy",
      		leapday: "29.02."
      	}).mask(selector);
      	
    })

</script>