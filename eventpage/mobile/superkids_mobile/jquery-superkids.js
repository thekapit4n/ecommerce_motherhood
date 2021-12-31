var calcDivChild = function(){
    var numDivChild = $('body').find('.div-child-detail').length;

    console.log("dalam function " + numDivChild);
    if(numDivChild == 1)
    {
        $('body').find('.remove-child-div').css('display', 'none');
    }
    else
    {
        $('body').find('.remove-child-div').css('display', 'block');
    }

    if(numDivChild >= 3)
    {
        $('body').find('.add-more-child').css('display', 'none');
    }
    else{
        $('body').find('.add-more-child').css('display', 'block');
    }

    return numDivChild;
};

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
        var previousStep   = currentstep + 1; /* this refer step before this*/
        var newNextStep    = currentstep - 1 ;/* this refer to next page when click previous button*/
      
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

    $('body').on('click', '.btn-start-journey', function(){
        $(this).closest('.div-mobile-main').hide('fast');
        $('body').find('.content-2').show('fast');
    });

    $('body').on('click', '.btn-join-superkids', function(){
        $(this).closest('.div-mobile-main').hide('fast');
        $('body').find('.content-3').show('fast');
    });

    calcDivChild();
    $('body').on('click', '.add-more-child', function(evnt){
        evnt.preventDefault();
        
        var numChild = calcDivChild();
        var titleChildno = numChild+1;
        
        var medivchild = $(this).closest('.div-child-detail').clone();
        medivchild.find('input:text').val("");
        medivchild.find('.child-gender-input').val("");
        medivchild.find('.child-currentmilkbrand-input').val("");
        medivchild.find('.child-dob-input').val("");
        medivchild.find('.title-child').html('Child#' + titleChildno);

        $('body').find('.div-child').append(medivchild);

        calcDivChild();
    });

    $('body').on('click', '.remove-child-div', function(evnt){
        evnt.preventDefault();
        $(this).closest('.div-child-detail').remove();
        calcDivChild();
    });
})