$(function(){
    $('body').on('click', '.btn-info-next', function(){
        var currentstep = $(this).data('nextstep');
        currentstep     = parseInt(currentstep);
        var nextstep    = currentstep + 1;
        var previousStep   = currentstep - 1;
      
        $('body').find('.info-superkids-' + previousStep).hide('fast');
        $('body').find('.step-' + previousStep).removeClass('step-info-active');
        $('body').find('.step-' + previousStep).addClass('step-info');
        $('body').find('.step-' + previousStep).html(previousStep);
        $('body').find('.info-superkids-' + currentstep).show('fast');
        $('body').find('.step-' + currentstep).removeClass('step-info');
        $('body').find('.step-' + currentstep).addClass('step-info-active');
        $('body').find('.step-' + currentstep).html('Step ' + currentstep);
        $(this).data('currentstep', currentstep);
        $(this).data('nextstep', nextstep);

        $('body').find('.btn-info-previous').data('nextstep', previousStep);

        if(currentstep >= 1)
        {
            $('body').find('.btn-info-previous').css('display', 'block');
        }
        else
        {
            $('body').find('.btn-info-previous').css('display', 'none');
        }

        if(currentstep == 3)
        {
            $('body').find('.btn-info-next').css('display', 'none');
        }
    });
    
    $('body').on('click', '.btn-info-previous', function(){
        var currentstep    = $(this).data('nextstep');
        currentstep        = parseInt(currentstep);
        var previousStep   = currentstep + 1; // this refer step before this
        var newNextStep    = currentstep - 1 ;// this refer to next page when click previous button
      
        $('body').find('.info-superkids-' + previousStep).hide('fast');
        $('body').find('.step-' + previousStep).removeClass('step-info-active');
        $('body').find('.step-' + previousStep).addClass('step-info');
        $('body').find('.step-' + previousStep).html(previousStep);
        $('body').find('.info-superkids-' + currentstep).show('fast');
        $('body').find('.step-' + currentstep).removeClass('step-info');
        $('body').find('.step-' + currentstep).addClass('step-info-active');
        $('body').find('.step-' + currentstep).html('Step ' + currentstep);

        $('body').find('.btn-info-next').data('currentstep', currentstep);
        $('body').find('.btn-info-next').data('nextstep', previousStep);
        console.log("currentStep = " + currentstep + " previousStep = " + previousStep);
      
        $(this).data('nextstep', newNextStep);
        if(newNextStep == 0)
        {
            $('body').find('.btn-info-previous').css('display', 'none');
            $('body').find('.btn-info-next').css('display', 'block');
        }
    });

    $('body').on('click', '.btn-icon-close', function(){
       location.href='/community';
    });
})