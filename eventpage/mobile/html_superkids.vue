<style>
      .row-mobile{
          display: flex;
          flex-wrap: wrap;
          padding-left: 15px;
          padding-right: 15px;
      }
      
      .div-mobile-main
      {
          /* padding-left:25px;
          padding-right:25px; */
      }
      
      .fullwidth{
          width:100%;
      }
      
      .mobile-title{
          font-size: 24px;
          font-weight: 600;
      }
      
      .mobile-description{
          font-size:16px;
      }
      
      .btn-journey, .btn-journey:hover, .btn-journey:active, .btn-journey:focus{
          background-color:#2DA7AC;
          border-color:#2DA7AC;
      }
      
    #button-skip,.btn-skip{
        color:#313030  !important;
        background-color:white !important;
        border-color:white  !important;
        box-shadow:unset  !important;
        border-radius: 20px;
        width: 60px;
    }

    .btn-skip:hover, .btn-skip:active, .btn-skip:focus, .btn-skip:focus-visible{
        color:#313030  !important;
        background-color:white !important;
        border-color:white  !important;
        box-shadow:unset  !important;
        border-radius: 20px;
        width: 60px;
    
    }
      
    .btn-icon-close{
        background-color: transparent !important;
        border: 0px !important;
        box-shadow:unset  !important;
    }

    .btn-icon-close:hover, .btn-icon-close:active, .btn-icon-close:focus, .btn-icon-close:focus-visible{
        background-color: transparent !important;
        border: 0px !important;
        box-shadow:unset  !important;
    }
      
    .btn-info-next, .btn-info-next:hover, .btn-info-next:active, .btn-info-next:focus, .btn-info-next:focus-visible,
    .btn-info-previous, .btn-info-previous:hover, .btn-info-previous:active, .btn-info-previous:focus, .btn-info-previous:focus-visible
    {
        background-color: transparent !important;
        border: 0px !important;
        box-shadow:unset  !important;
        padding:0px;
    }
      
    .btn-info-next svg{
        width:100%;
    }
      
    .btn-info-previous svg{
        width:100%;
    }
      
    .step-info-active{
        padding-top: 12px;
        padding-bottom: 12px;
        width: 70px;
        font-weight: 600;
        background-color: #2da7ac;
        font-size: 13px;
        border-radius: 20px;
    }
      
    .step-info{
        border-radius: 50%;
        width: 40px;
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: white;
        font-size: 13px;
        color: #6E7173;
        font-weight: 600;
    }
    
    .animationtry{
        animation-direction: normal;
    }
    
}
</style>
<div class="div-mobile-main px-4">
   <div class="row-mobile my-4">
        <button type="button" id="button-skip" class="btn btn-light btn-sm btn-skip">Skip</button>
         <button type="button" class="btn btn-outline-light btn-sm ml-auto btn-icon-close">
             <img src="../../../icons/community/x-lg.svg" />
         </button>
    </div>
    <div class="row-mobile info-superkids-1">
      <div class="d-flex justify-content-center fullwidth"><img src="../../../images/superkids/picture_superkid1.svg" style="width: 70%;" /></div>
      <div class="justify-content-center fullwidth">
         <p class="mobile-title text-center">Welcome to Motherhood SuperKids Club.</p>
         <p class="text-center mobile-description">Join us on a journey of fun learning through play, adventure and Expirement</p>
      </div>
    </div>
    <div class="row-mobile info-superkids-2" style="display:none;">
        <div class="d-flex justify-content-center fullwidth">
            <img src="../../../images/superkids/picture_superkid2.svg" style="width: 70%;" />
        </div>
        <div class="justify-content-center fullwidth">
            <p class="mobile-title text-center">Enjoy Super Kid Activity Box.</p>
            <p class="text-center mobile-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet nulla
            </p>
        </div>
    </div>
    <div class="row-mobile info-superkids-3" style="display:none;">
        <div class="d-flex justify-content-center fullwidth">
            <img src="../../../images/superkids/picture_superkid3.svg" style="width: 70%;" />
        </div>
        <div class="justify-content-center fullwidth">
            <p class="mobile-title text-center">Up to 50% Off To Theme Parks & Playgrounds.</p>
            <p class="text-center mobile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet nulla</p>
        </div>
    </div>
    <div class="row-mobile my-3">
        <div class="d-flex justify-content-center fullwidth">
            <button type="button" class="btn btn-sm btn-info-previous mr-3" style="display:none;">
                <svg width="31" height="31" viewbox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.3558 15.9725C28.352 16.2211 28.2495 16.458 28.0709 16.631C27.8924 16.8041 27.6524 16.8991 27.4038 16.8952L5.29464 16.5499L11.1024 22.5401C11.2757 22.7189 11.3708 22.9591 11.367 23.2081C11.3631 23.457 11.2605 23.6942 11.0817 23.8674C10.9029 24.0407 10.6627 24.1359 10.4137 24.132C10.1648 24.1281 9.92762 24.0255 9.75436 23.8467L2.3724 16.2305C2.28646 16.1421 2.21882 16.0375 2.17334 15.9229C2.12787 15.8083 2.10545 15.6858 2.10737 15.5625C2.1093 15.4392 2.13553 15.3175 2.18457 15.2044C2.2336 15.0912 2.30448 14.9889 2.39313 14.9032L10.0093 7.5212C10.1881 7.34793 10.4284 7.25278 10.6773 7.25666C10.9262 7.26055 11.1634 7.36316 11.3367 7.54193C11.51 7.72069 11.6051 7.96097 11.6012 8.20989C11.5973 8.45882 11.4947 8.696 11.316 8.86927L5.32392 14.6751L27.4331 15.0205C27.6817 15.0244 27.9186 15.1268 28.0916 15.3054C28.2647 15.4839 28.3597 15.7239 28.3558 15.9725Z" fill="#347277"></path>
                </svg>
            </button>
            <span class="badge badge-secondary mx-1 step-1 step-info-active"> Step 1 </span> 
            <span class="badge badge-secondary mx-1 step-2 step-info">2</span> 
            <span class="badge badge-secondary mx-1 step-3 step-info">3</span> 
            <button type="button" class="btn btn-sm btn-info-next ml-3" data-currentstep="1" data-nextstep="2">
                <svg width="30" height="30" viewbox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.875 15.0002C1.875 14.7516 1.97377 14.5131 2.14959 14.3373C2.3254 14.1615 2.56386 14.0627 2.8125 14.0627H24.9244L19.0238 8.16396C18.8477 7.98792 18.7488 7.74916 18.7488 7.50021C18.7488 7.25125 18.8477 7.01249 19.0238 6.83646C19.1998 6.66042 19.4385 6.56152 19.6875 6.56152C19.9365 6.56152 20.1752 6.66042 20.3513 6.83646L27.8513 14.3365C27.9386 14.4235 28.0078 14.527 28.0551 14.6409C28.1024 14.7548 28.1267 14.8769 28.1267 15.0002C28.1267 15.1235 28.1024 15.2456 28.0551 15.3595C28.0078 15.4734 27.9386 15.5769 27.8513 15.664L20.3513 23.164C20.1752 23.34 19.9365 23.4389 19.6875 23.4389C19.4385 23.4389 19.1998 23.34 19.0238 23.164C18.8477 22.9879 18.7488 22.7492 18.7488 22.5002C18.7488 22.2513 18.8477 22.0125 19.0238 21.8365L24.9244 15.9377H2.8125C2.56386 15.9377 2.3254 15.8389 2.14959 15.6631C1.97377 15.4873 1.875 15.2488 1.875 15.0002Z" fill="#347277"></path>
                </svg>
            </button>
        </div>
    </div>
   <div class="row-mobile"><button type="button" class="btn btn-primary btn-lg btn-block btn-journey"> Start You Journey </button></div>
</div>
