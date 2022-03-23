<style>
  <!--
  #scroll_content_top {
    display: none;
  }

  .main-title-color {
    color: #4c4c4d;
  }

  .motherhood-title {
    font-size: 30px;
    margin-bottom: 35px;
  }

  .error-msg {
    color: #f90012;
    font-size: 12px;
  }

  .card-clickable:hover {
    box-shadow: 0 0 6px #4c4c4d;
  }

  .benefit-title {
    font-size: 17px;
    font-weight: bold;
    padding-top: 10px;
    padding-bottom: 0px;
    line-height: 1;
    min-height: 50px;
  }

  .btn-step-forward,
  .btn-step-forward:hover,
  .btn-step-forward:active,
  .btn-step-forward:focus {
    background-color: #2DA7AC;
    border-color: #2DA7AC;
    color: #FFFFFF;
    font-size: 18px;
    border-radius: 4px;
    padding: 8px 40px;
    min-width: 300px;
    box-shadow: unset;
  }

  .btn-submit,
  .btn-submit:hover,
  .btn-submit:active,
  .btn-submit:focus {
    background-color: #2DA7AC;
    border-color: #2DA7AC;
    color: #FFFFFF;
    font-size: 18px;
    border-radius: 4px;
    padding: 8px 40px;
    min-width: 300px;
    box-shadow: unset;
  }

  .btn-primary:disabled {
    color: #FFFFFF;
    background-color: #cccccc !important;
    border-color: #cccccc !important;
  }

  .btn-step-back,
  .btn-step-back:hover,
  .btn-step-back:active,
  .btn-step-back:focus {
    background-color: #ffffff;
    border-color: #6E7173;
    color: #6E7173;
    font-size: 18px;
    border-radius: 4px;
    padding: 8px 40px;
    min-width: 300px;
    box-shadow: unset;
  }

  .accordion-button:not(.collapsed) {
    color: #000000;
    box-shadow: unset;
  }

  .accordion-button:focus {
    box-shadow: unset;
  }

  .tnc-text {
    font-size: 1em;
    line-height: 1.2;
    padding: 10px 10px 0px 10px;
  }

  input[type="file"]:focus,
  input[type="radio"]:focus,
  input[type="checkbox"]:focus {
    outline: unset;
    outline: unset;
    outline-offset: unset;
  }

  .form-check-input {
    width: 1.3em;
    height: 1.3em;
  }

  .question-font {
    color: #4c4c4d;
    font-size: 1.6em;
    padding-left: 15px;
  }
  -->
</style>
<div class="row step-usertype">
  <div class="row">
    <div class="col-sm-12 text-center">
      <!--<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2021/Jan/Newmom/logo-nm.png" alt="newmom logo" width="30%" />-->
      <p style="font-size: 20px; margin-top: 15px; font-weight: bold; line-height: 20px; color: #4c4c4d;">Choose your journey here</p>
      <p style="font-size: 20px; margin-top: 15px; font-weight: bold; line-height: 20px; color: #4c4c4d;">Sign up now and receive exclusive privileges on your parenting journey!</p>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-sm-6">
      <div class="card mb-3 card-clickable" data-usertype="pregnant" style="max-width: 500px;">
        <div class="row g-0">
          <div class="col-md-4 col-4">
            <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/Newmom/pregnant-01.svg" class="img-fluid rounded-start" style="width: 85%;" alt="pregnant-image" />
          </div>
          <div class="col-md-8 col-8">
            <div class="card-body">
              <h5 class="card-title text-left" style="color: #4c4c4d; font-weight: 600;">Pregnant</h5>
              <p>Welcome to the journey of Motherhood. Register with us and redeem a free New Mom Kit. T&amp;Cs apply.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card mb-3 card-clickable" data-usertype="babyOut" style="max-width: 500px;">
        <div class="row g-0">
          <div class="col-md-4 col-4">
            <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/Newmom/postpartum-01.svg" class="img-fluid rounded-start" style="width: 85%;" alt="newmom-image" />
          </div>
          <div class="col-md-8 col-8">
            <div class="card-body">
              <h5 class="card-title text-left" style="color: #4c4c4d; font-weight: 600;">New mom</h5>
              <p>Are you new in Motherhood? Don&rsquo;t worry as Motherhood is here to guide you through this parenting journey.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <input type="hidden" name="subscriber_question4" id="subscriber_question4" style="margin-bottom: 10px;" />
    <!-- input for type of preganancy -->
  </div>
</div>
<div class="row step-pregnant" style="display: none;">
  <div class="row">
    <div class="col-sm-12 text-center">
      <p style="font-weight: bold;" class="main-title-color motherhood-title">Motherhood New Mom Privilege - Pregnant</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-1 d-none d-sm-block"></div>
    <div class="col-md-3 col-12">
      <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/Newmom/pc.png" width="100%" alt="parentcart voucher" />
      <p class="main-title-color benefit-title">Parentcraft Online Class</p>
      <p>Get 50% off to prepare for your pregnancy journey.</p>
    </div>
    <div class="col-md-3 col-12">
      <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/March/Newmom/newmom-giftse.png" width="100%" alt="exclusive rewards" />
      <p class="main-title-color benefit-title">Free Gift &amp; Exclusive Rewards</p>
      <p>RM20 voucher, add. 5% off every time you shop, free welcome gift. (T&amp;C apply)</p>
    </div>
    <div class="col-md-3 col-12">
      <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/March/Newmom/newmom-gift-march.png" width="100%" alt="lucky draw" />
      <p class="main-title-color benefit-title">Lucky Draw</p>
      <p>Exclusive Baby Box. Limited to first 50 mums per month. (T&amp;C apply)</p>
    </div>
    <div class="col-md-1 d-none d-sm-block"></div>
  </div>
  <div class="row my-4">
    <div class="col-md-12 text-center">
      <button type="button" class="btn btn-primary btn-step-back mb-3 mx-2" data-usertype="pregnant" data-step="1"> Back </button>
      <button type="button" class="btn btn-primary btn-step-forward mb-3 mx-2" data-usertype="pregnant" data-step="3"> Next </button>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md-6 px-2">
      <p style="font-size: 2em; font-weight: bold;">Terms &amp; Conditions</p>
      <div class="accordion" id="tncaccordian">
        <div class="accordion-item">
          <h2 class="accordion-header" id="tnc1header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tnc1" aria-expanded="true" aria-controls="tnc1"> Details </button>
          </h2>
          <div id="tnc1" class="accordion-collapse collapse show" aria-labelledby="tnc1header" data-bs-parent="#tncaccordian">
            <div class="accordion-body">
              <ul style="list-style: disc;">
                <li class="mb-3">For formula milk sample request, I agree that the Milk Brand and/or its affiliates (collectively, &ldquo;MB&rdquo;) and/or any third party under contract with MB, may contact me from time to time, by telephone, mail, or other electronic means to market/promote/sell MB products and services and/or information related to MB (collectively referred to as &ldquo;Purpose&rdquo;). I agree the collection and use of my information by MB is in accordance with the Privacy Policy that I have read and understood. I have the option to withdraw at any time from receiving calls, SMS, mail, or other electronic communications about information related to the Purpose.</li>
                <li class="mb-3">Only pregnant moms who has not redeemed the samples from the period of 17 July 2021 to this date are eligible to receive particular MB samples.</li>
                <li class="mb-3">Each registered family is entitled to receive ONE (1) New Mom gift set (includes RM20 cash voucher, New Mom member e-card, New Mom Kit, special VIP invites). Multiple registrations from the same family will be disqualified.</li>
                <li class="mb-3">Gifts may vary depending on the availability. In the case of insufficient stocks, the organiser has the right to use other products for replacement at any time without prior notice.</li>
                <li class="mb-3">Motherhood.com.my will not be responsible nor liable for unsuccessful registrations due to interruptions in internet connectivity.</li>
                <li class="mb-3">Motherhood.com.my reserves the right to alter, cancel, terminate, or suspend an application and/or any part thereof without any liability and prior notice at any time upon its sole and absolute discretion.</li>
                <li class="mb-3">Registrations will only be accepted with the FULL postal address provided.</li>
                <li class="mb-3">Incomplete registration forms will not be accepted.</li>
                <li class="mb-3">Members who successfully sign up can complete the redemption of the new mom gift set and pay the associated shipping fee at the checkout page.</li>
                <li class="mb-3">By registering, I agree that Motherhood.com.my and its sponsors may collect, obtain, store and process my personal data that I provide in this form for the purpose of receiving updates, news, promotional and marketing mails or materials.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 px-2">
      <p style="font-size: 2em; font-weight: bold;">FAQs</p>
      <div class="accordion" id="faqaccordian">
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq1header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1"> How do I apply for a New Mom member card? </button>
          </h2>
          <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">Complete our online registration form (click &ldquo;NEXT&rdquo; to fill up the form) to enjoy exclusive member benefits.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq2header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2"> Can I register again if I am already a member? </button>
          </h2>
          <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">This programme is reserved for new users ONLY.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq3header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3"> Can I apply for the programme if I am not a Malaysian citizen? </button>
          </h2>
          <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">Yes, all moms and dads are welcomed to join the programme.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq4header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4"> How much is the New Mom Program fee? </button>
          </h2>
          <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq3header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">Our New Mom gift set is FREE (excluding shipping fee of RM5.50).</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq5header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5"> How do I redeem the free gift(s)? </button>
          </h2>
          <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">A step-by-step instruction will appear on the page after you have filled up your details accordingly.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq6header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6"> How long does it take to deliver my gift(s)? </button>
          </h2>
          <div id="faq6" class="accordion-collapse collapse" aria-labelledby="faq6header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">About 3-7 working days upon verification. Kindly expect shipping delays due to a high volume of orders at the moment. Unsuccessful delivery due to incorrect information provided will be returned back to Motherhood.com.my and we will not be able to reship it again.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq7header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7"> What are the benefits of having a New Mom member card? </button>
          </h2>
          <div id="faq7" class="accordion-collapse collapse" aria-labelledby="faq7header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">Learn more about our New Mom member card benefits here: www.motherhood.com.my/membersprivilege</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq8header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8"> When will my New Mom member card expire? </button>
          </h2>
          <div id="faq8" class="accordion-collapse collapse" aria-labelledby="faq8header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">The expiration date for an inactive New Mom member card is TWO (2) months upon activation.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq9header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false" aria-controls="faq9"> How do I renew my New Mom member card? </button>
          </h2>
          <div id="faq9" class="accordion-collapse collapse" aria-labelledby="faq9header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">Spend a min. of RM100 on Motherhood.com.my and your card will be auto-converted to a 1-year membership.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row step-newmom" style="display: none;">
  <div class="row">
    <div class="col-sm-12 text-center">
      <p style="font-weight: bold;" class="main-title-color motherhood-title">Motherhood New Mom Privilege</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 d-none d-sm-block"></div>
    <div class="col-md-3 col-12">
      <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/Newmom/pc.png" width="100%" alt="parentcart voucher" />
      <p class="main-title-color benefit-title">Parentcraft Online Class</p>
      <p>Get 50% off to prepare for your pregnancy journey</p>
    </div>
    <div class="col-md-3 col-12">
      <img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/2022/Jan/Newmom/new-mom-gift.png" width="100%" alt="exclusive rewards" />
      <p class="main-title-color benefit-title">Free Gift &amp; Exclusive Rewards</p>
      <p>RM20 voucher, add. 5% off every time you shop, free welcome gift. (T&amp;C apply)</p>
    </div>
    <div class="col-md-3 d-none d-sm-block"></div>
  </div>
  <div class="row my-4">
    <div class="col-md-12 text-center">
      <button type="button" class="btn btn-primary btn-step-back mb-3 mx-2" data-usertype="babyout" data-step="1"> Back </button>
      <button type="button" class="btn btn-primary btn-step-forward mb-3 mx-2" data-usertype="babyout" data-step="3"> Next </button>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md-6 px-2">
      <p style="font-size: 2em; font-weight: bold;">Terms &amp; Conditions</p>
      <div class="accordion" id="tncaccordian">
        <div class="accordion-item">
          <h2 class="accordion-header" id="tnc1header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tnc1" aria-expanded="true" aria-controls="tnc1"> Details </button>
          </h2>
          <div id="tnc1" class="accordion-collapse collapse show" aria-labelledby="tnc1header" data-bs-parent="#tncaccordian">
            <div class="accordion-body">
              <ul style="list-style: disc;">
                <li class="mb-3">For formula milk sample request, I agree that the Milk Brand and/or its affiliates (collectively, &ldquo;MB&rdquo;) and/or any third party under contract with MB, may contact me from time to time, by telephone, mail, or other electronic means to market/promote/sell MB products and services and/or information related to MB (collectively referred to as &ldquo;Purpose&rdquo;). I agree the collection and use of my information by MB is in accordance with the Privacy Policy that I have read and understood. I have the option to withdraw at any time from receiving calls, SMS, mail, or other electronic communications about information related to the Purpose.</li>
                <li class="mb-3">Only pregnant moms who has not redeemed the samples from the period of 17 July 2021 to this date are eligible to receive particular MB samples.</li>
                <li class="mb-3">Each registered family is entitled to receive ONE (1) New Mom gift set (includes RM20 cash voucher, New Mom member e-card, New Mom Kit, special VIP invites). Multiple registrations from the same family will be disqualified.</li>
                <li class="mb-3">Gifts may vary depending on the availability. In the case of insufficient stocks, the organiser has the right to use other products for replacement at any time without prior notice.</li>
                <li class="mb-3">Motherhood.com.my will not be responsible nor liable for unsuccessful registrations due to interruptions in internet connectivity.</li>
                <li class="mb-3">Motherhood.com.my reserves the right to alter, cancel, terminate, or suspend an application and/or any part thereof without any liability and prior notice at any time upon its sole and absolute discretion.</li>
                <li class="mb-3">Registrations will only be accepted with the FULL postal address provided.</li>
                <li class="mb-3">Incomplete registration forms will not be accepted.</li>
                <li class="mb-3">Members who successfully sign up can complete the redemption of the new mom gift set and pay the associated shipping fee at the checkout page.</li>
                <li class="mb-3">By registering, I agree that Motherhood.com.my and its sponsors may collect, obtain, store and process my personal data that I provide in this form for the purpose of receiving updates, news, promotional and marketing mails or materials.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 px-2">
      <p style="font-size: 2em; font-weight: bold;">FAQs</p>
      <div class="accordion" id="faqaccordian">
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq1header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1"> How do I apply for a New Mom member card? </button>
          </h2>
          <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">Complete our online registration form (click &ldquo;NEXT&rdquo; to fill up the form) to enjoy exclusive member benefits.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq2header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2"> Can I register again if I am already a member? </button>
          </h2>
          <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">This programme is reserved for new users ONLY.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq3header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3"> Can I apply for the programme if I am not a Malaysian citizen? </button>
          </h2>
          <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">Yes, all moms and dads are welcomed to join the programme.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq4header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4"> How much is the New Mom Program fee? </button>
          </h2>
          <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq3header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">Our New Mom gift set is FREE (excluding shipping fee of RM5.50).</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq5header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5"> How do I redeem the free gift(s)? </button>
          </h2>
          <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">A step-by-step instruction will appear on the page after you have filled up your details accordingly.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq6header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6"> How long does it take to deliver my gift(s)? </button>
          </h2>
          <div id="faq6" class="accordion-collapse collapse" aria-labelledby="faq6header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">About 3-7 working days upon verification. Kindly expect shipping delays due to a high volume of orders at the moment. Unsuccessful delivery due to incorrect information provided will be returned back to Motherhood.com.my and we will not be able to reship it again.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq7header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7"> What are the benefits of having a New Mom member card? </button>
          </h2>
          <div id="faq7" class="accordion-collapse collapse" aria-labelledby="faq7header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">Learn more about our New Mom member card benefits here: www.motherhood.com.my/membersprivilege</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq8header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8"> When will my New Mom member card expire? </button>
          </h2>
          <div id="faq8" class="accordion-collapse collapse" aria-labelledby="faq8header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">The expiration date for an inactive New Mom member card is TWO (2) months upon activation.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="faq9header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false" aria-controls="faq9"> How do I renew my New Mom member card? </button>
          </h2>
          <div id="faq9" class="accordion-collapse collapse" aria-labelledby="faq9header" data-bs-parent="#faqaccordian">
            <div class="accordion-body">Spend a min. of RM100 on Motherhood.com.my and your card will be auto-converted to a 1-year membership.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row step-newbaby-dob" style="display: none;">
  <div class="row mb-2">
    <div class="col-md-12 px-2 text-center">
      <h1 style="padding: 0 20px; font-weight: bold; margin-top: 75px;" class="question-font">New baby's Date of Birth</h1>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-4 px-2 mb-3 mb-md-1">
      <select id="babyYear" class="form-select">
        <option value="" disabled="disabled" selected="selected">Year</option>
      </select>
      <small class="error-msg"></small>
    </div>
    <div class="col-md-4 px-2 mb-3 mb-md-1">
      <select id="babyMonth" disabled="disabled" class="form-select">
        <option value="" disabled="disabled" selected="selected">Month</option>
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
      </select>
      <small class="error-msg"></small>
    </div>
    <div class="col-md-4 px-2 mb-3 mb-md-1">
      <select id="babyDay" disabled="disabled" class="form-select">
        <option value="" disabled="disabled" selected="selected">Day</option>
      </select>
      <input type="hidden" name="subscriber_question3" id="subscriber_question3" />
      <small class="error-msg"></small>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center" style="padding-top: 20px;">
      <p>If you have children above 1 year old, please redeem your free Activity Box by joining <a href="../../../events/motherhood-superkids">Motherhood Superkids Club</a>
      </p>
      <button type="button" class="btn btn-primary btn-step-back mb-3 mx-2" data-usertype="babyout" data-step="2"> Back </button>
      <button type="button" class="btn btn-primary btn-step-forward mb-3 mx-2" data-usertype="babyout" data-step="4"> Next </button>
    </div>
  </div>
</div>
<div class="row step-form" style="display: none;">
  <div class="row mb-2">
    <div class="col-md-12 px-2 text-center">
      <p style="font-size: 3em; color: #4c4c4d; font-weight: bold; padding-top: 20px; padding-bottom: 20px; line-height: 1;">It&rsquo;s time to receive your welcome kit!</p>
    </div>
  </div>
  <div class="row my-1">
    <div class="col-md-12 px-2 text-left">
      <label for="newEmail" class="form-label required">Mandotary field</label>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6 px-2">
      <label for="newEmail" class="form-label required">Email</label>
      <input type="email" class="form-control" id="emailNew" name="newEmail" placeholder="Email" required="required" />
      <small class="error-msg-email"></small>
    </div>
    <div class="col-md-6 px-2">
      <label for="newPassword" class="form-label required">Password</label>
      <input type="password" class="form-control" id="newPassword" name="newPassword" minlength="6/" placeholder="Password" required="required" />
      <small class="error-msg"></small>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6 px-2">
      <label for="firstname" class="form-label required">First name</label>
      <input type="text" id="newFirstName" name="newFirstName" class="form-control" placeholder="First Name" required="required" />
      <small class="error-msg"></small>
    </div>
    <div class="col-md-6 px-2">
      <label for="lastname" class="form-label required">Last Name</label>
      <input type="text" id="newLastName" name="newLastName" class="form-control" placeholder="Last Name" required="required" />
      <small class="error-msg"></small>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6 px-2">
      <label class="form-label required">Mobile Number</label>
      <div class="input-group mb-1">
        <span class="input-group-text" id="basic-addon1">+6</span>
        <input type="text" class="form-control" id="mobilenumber" name="subscriber_question1" aria-describedby="basic-addon1" placeholder="Mobile Number" pattern=".{10,}" onkeydown="javascript: return event.keyCode == 69 ? false : true" required="required" />
      </div>
      <small class="error-msg-contactnum"></small>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-12 px-2">
      <label for="fulladdress" class="form-label required">Full Address</label>
      <input type="text" id="subscriber_question8" name="subscriber_question8" class="form-control" placeholder="Full Address" required="required" />
      <small class="error-msg"></small>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-4 px-2 mb-3 mb-md-1 div-postcode">
      <label for="postcode-address" class="form-label required">Postcode</label>
      <input type="text" class="form-control addr-postcode" id="postcode-address" name="subscriber_question9" required="" placeholder="Postcode" />
      <small class="error-msg"></small>
    </div>
    <div class="col-md-4 px-2 mb-3 mb-md-1">
      <label for="city-address" class="form-label required">City</label>
      <input type="text" class="form-control addr-city" id="city-address" name="subscriber_question10" required="" placeholder="City" />
      <small class="error-msg"></small>
    </div>
    <div class="col-md-4 px-2 mb-3 mb-md-1">
      <label for="state-address" class="form-label required">State</label>
      <select class="form-select addr-state" name="subscriber_question11" id="state-address" aria-label="" style="height: 37px;" required="">
        <option value="">State</option>
        <option value="Johor" dataselected-johor="">Johor</option>
        <option value="Kedah" dataselected-kedah="">Kedah</option>
        <option value="Kelantan" dataselected-kelantan="">Kelantan</option>
        <option value="Kuala Lumpur" dataselected-kuala_lumpur="">Kuala Lumpur</option>
        <option value="Labuan" dataselected-labuan="">Labuan</option>
        <option value="Melaka" dataselected-melaka="">Melaka</option>
        <option value="Negeri Sembilan" dataselected-negeri_sembilan="">Negeri Sembilan</option>
        <option value="Pahang" dataselected-pahang="">Pahang</option>
        <option value="Perak" dataselected-perak="">Perak</option>
        <option value="Perlis" dataselected-perlis="">Perlis</option>
        <option value="Pulau Pinang" dataselected-pulau_pinang="">Pulau Pinang</option>
        <option value="Putrajaya" dataselected-putrajaya="">Putrajaya</option>
        <option value="Sabah" dataselected-sabah="">Sabah</option>
        <option value="Sarawak" dataselected-sarawak="">Sarawak</option>
        <option value="Selangor" dataselected-selangor="">Selangor</option>
        <option value="Terengganu" dataselected-terengganu="">Terengganu</option>
      </select>
      <small class="error-msg"></small>
    </div>
  </div>
  <div class="row mb-2">
    <div class="col-md-6 px-2">
      <label for="fulladdress" class="form-label required">Your Date of Birth</label>
      <input type="text" id="dobParent" name="subscriber_question14" class="form-control" placeholder="your dob" required="required" />
      <small class="error-msg"></small>
    </div>
    <div class="col-md-6 px-2 div-edd-question">
      <label for="fulladdress" class="form-label required">Estimated Date of Delivery(EDD)</label>
      <input type="text" id="pregnantedd" name="subscriber_question20" class="form-control" placeholder="EDD" required="required" />
      <small class="error-msg"></small>
    </div>
  </div>
  <div class="row mb-2 row-mommymilk">
    <div class="col-md-6 px-2">
      <label class="form-label required">What brand of milk does mommy like or is currently consuming?</label>
      <select class="form-select selection-mommymilk" id="materna-milk-brand" name="subscriber_question18" aria-label="" style="height: 37px;" required="">
        <option disabled="disabled" selected="selected" value="">Choose one</option>
        <option value="a2 Nutrition for Mothers">a2 Nutrition for Mothers</option>
        <option value="Anmum Lacta">Anmum Lacta</option>
        <option value="Anmum Materna">Anmum Materna</option>
        <option value="Aptamom">Aptamom</option>
        <option value="Bellamy&rsquo;s Organic Pregnancy Formula">Bellamy&rsquo;s Organic Pregnancy Formula</option>
        <option value="Bonlife Purenat Mom Goat&rsquo;s Milk">Bonlife Purenat Mom Goat&rsquo;s Milk</option>
        <option value="Dumex Mamil&reg; Mama">Dumex Mamil&reg; Mama</option>
        <option value="Enfamama A+">Enfamama A+</option>
        <option value="Fresh Goat Milk">Fresh Goat Milk</option>
        <option value="Fresh Milk">Fresh Milk</option>
        <option value="Frisomum Gold">Frisomum Gold</option>
        <option value="MOMMA Evermom Non-GMO Soy">MOMMA Evermom Non-GMO Soy</option>
        <option value="MOMMA Pregolact">MOMMA Pregolact</option>
        <option value="Natrel Milk">Natrel Milk</option>
        <option value="NatureOne Dairy Pregnancy Formula">NatureOne Dairy Pregnancy Formula</option>
        <option value="Nestl&eacute; MOM">Nestl&eacute; MOM</option>
        <option value="Similac Mom">Similac Mom</option>
        <option value="Snow Maternity">Snow Maternity</option>
        <option value="Susu Efferty Ikhtiar Hamil">Susu Efferty Ikhtiar Hamil</option>
        <option value="WILDAN Mama Premium">WILDAN Mama Premium</option>
        <option value="Wyeth Promama">Wyeth Promama</option>
        <option value="Others">Others</option>
        <option value="Not consuming any milk">Not consuming any milk</option>
      </select>
      <small class="error-msg"></small>
    </div>
    <div class="col-md-6 px-2">
      <label class="form-label required">What milk brand is your kid currently consuming?</label>
      <select class="form-select selection-kidmilk" id="kid-milk-brand" name="subscriber_question19" aria-label="" style="height: 37px;" required="">
        <option disabled="disabled" selected="selected" value="">Choose one</option>
        <option value="4m">4m</option>
        <option value="Abbott">Abbott</option>
        <option value="Anmum">Anmum</option>
        <option value="Appeton">Appeton</option>
        <option value="AptaGro">AptaGro</option>
        <option value="AptaGro Prosyneo">AptaGro Prosyneo</option>
        <option value="Aptamil">Aptamil</option>
        <option value="Awarua">Awarua</option>
        <option value="Baby Bio">Baby Bio</option>
        <option value="Baby Steps">Baby Steps</option>
        <option value="Bellamy's">Bellamy's</option>
        <option value="Bonlife Organic Bonmilk">Bonlife Organic Bonmilk</option>
        <option value="Bonlife Purenat Goat's Milk">Bonlife Purenat Goat's Milk</option>
        <option value="Colostrum">Colostrum</option>
        <option value="Dugro">Dugro</option>
        <option value="Dumex">Dumex</option>
        <option value="Dupro">Dupro</option>
        <option value="Dutch Baby">Dutch Baby</option>
        <option value="Dutch Lady">Dutch Lady</option>
        <option value="Enfagrow">Enfagrow</option>
        <option value="Enfalac">Enfalac</option>
        <option value="Enfamil">Enfamil</option>
        <option value="Farmers">Farmers</option>
        <option value="Fernleaf">Fernleaf</option>
        <option value="Friso Gold">Friso Gold</option>
        <option value="Friso">Friso</option>
        <option value="Frisolac">Frisolac</option>
        <option value="G-Star">G-Star</option>
        <option value="Glucerna">Glucerna</option>
        <option value="Habib">Habib</option>
        <option value="Isomil">Isomil</option>
        <option value="Karihome">Karihome</option>
        <option value="Lactogen">Lactogen</option>
        <option value="Lactogrow">Lactogrow</option>
        <option value="Lazz">Lazz</option>
        <option value="Mamex">Mamex</option>
        <option value="Mamil">Mamil</option>
        <option value="Merry Nation">Merry Nation</option>
        <option value="Miwako">Miwako</option>
        <option value="Morinaga Milk">Morinaga Milk</option>
        <option value="Nana">Nana</option>
        <option value="Nankid">Nankid</option>
        <option value="Nestle">Nestle</option>
        <option value="Novalac">Novalac</option>
        <option value="Pediasure">Pediasure</option>
        <option value="S26 Reg">S26 Reg</option>
        <option value="S26 Gold">S26 Gold</option>
        <option value="Similac Gold">Similac Gold</option>
        <option value="Similac Intelli-Pro">Similac Intelli-Pro</option>
        <option value="Snow">Snow</option>
        <option value="Suffy">Suffy</option>
        <option value="Sustagen">Sustagen</option>
        <option value="Wildan">Wildan</option>
        <option value="Wyeth">Wyeth</option>
        <option value="Others">Others</option>
        <option value="Not consuming any milk">Not consuming any milk</option>
      </select>
      <small class="error-msg"></small>
    </div>
  </div>
  <div class="row my-2">
    <div class="col-md-12 px-2">
      <div class="row" style="margin-left: 1px;">
        <label class="form-label">Would you like to learn more about Maternity and Newborn Insurance?</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input noUniform" type="checkbox" value="yes" name="subscriber_question22" />
        <label class="form-check-label noUniform px-3 py-1" style="font-weight: 400;"> Yes </label>
      </div>
    </div>
  </div>
  <div class="row my-2 row-sample-milk">
    <div class="col-md-12 px-2">
      <div class="row" style="margin-left: 1px;">
        <label class="form-label">Are you interested to receive other free gifts/samples from brands below? If yes, please select:</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input noUniform option-other-milkbrand" type="checkbox" value="Enfamama A+" id="option-milk-a" />
        <label class="form-check-label noUniform px-3 py-1" for="option-milk-b" style="font-weight: 400;"> Enfamama A+ </label>
      </div>
      <!--
            <div class="form-check form-check-inline"><input class="form-check-input noUniform option-other-milkbrand" type="checkbox" value="Wyeth Promama" id="option-milk-b" /><label class="form-check-label noUniform px-3 py-1" for="option-milk-a" style="font-weight: 400;">  Wyeth Promama </label></div>
            -->
      <input type="hidden" id="other_milk_brand_input" name="subscriber_question21" class="other-milk-brand-input" />
    </div>
  </div>
  <div class="row mb-4 mt-4">
    <div class="col-md-12 px-2  text-center">
      <button type="button" class="btn btn-primary btn-step-back step-backform mb-3 mx-2"> Back </button>
      <button type="button" class="btn btn-primary btn-submit btn-submit-form step-forwardform mb-3 mx-2"> Submit </button>
    </div>
  </div>
</div>
<div class="row step-cryocord" style="display: none;">
  <div class="row">
    <div class="col-hidden-xs col-hidden-sm col-md-2 col-lg-2"></div>
    <div class="col-md-8 text-left" style="margin-top: 50px;">
      <div class="row" style="margin-bottom: 15px;">
        <p class="question-font">Have you&nbsp;considered&nbsp;banking your baby's precious cord blood?&nbsp;Are you interested to learn more about cord blood banking?</p>
        <div class="col-md-6">
          <label class="label-custom lblcordblood">
            <input type="radio" name="subscriber_question12" class="cordblood maincordblood" value="Yes" required="" />Yes </label>
        </div>
        <div class="col-md-6">
          <label class="label-custom lblcordblood">
            <input type="radio" name="subscriber_question12" class="cordblood" value="No" />No </label>
        </div>
        <small class="cord-msg" style="padding-left: 15px; display: none;">By selecting "yes", you acknowledge and provide your consent to Cyrocord to contact you via phone call regarding to cord blood banking.</small>
      </div>
      <div class="row">
        <p class="question-font">Are you planning to deliver at a private or government hospital?</p>
        <div class="col-md-6">
          <label class="label-custom lblhospquest">
            <input type="radio" name="subscriber_question13" class="hospitalquestion mainhospitalquestion" value="PRIVATE" required="" />Private </label>
        </div>
        <div class="col-md-6">
          <label class="label-custom lblhospquest">
            <input type="radio" name="subscriber_question13" class="hospitalquestion" value="GOVERNMENT" />Government </label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center" style="padding-top: 20px;">
        <button type="button" class="btn btn-primary btn-step-back step-backform-cryocord mb-3 mx-2"> Back </button>
        <button type="button" class="btn btn-default btn-submit btn-pregnant-submit mb-3 mx-2"> Submit </button>
      </div>
    </div>
  </div>
  <input type="hidden" class="hidden-check-edd" value="false" />
  <input type="hidden" class="hidden-check-mobile" value="false" />
  <input type="hidden" class="hidden-check-email" value="false" />
  <input type="hidden" class="hidden-list-sampling" value="" />
  <button type="submit" name="submit" id="btnsubmit" style="display: none;">dummy</button>
  <script>
  
    var icon = '<i class="fa fa-info-circle"></i>';
        var eventID = 100;
        var stepview = function(step, direction, usertype) {
          if (usertype != '') {
            usertype = usertype.toLowerCase();
          }
          console.log("direction = " + direction + " usertype = " + usertype + " step " + step)
          if (step == 1) {
            if (direction == 'backward') {
              $('body').find('.step-pregnant').hide();
              $('body').find('.step-newmom').hide();
              $('body').find('.step-usertype').show();
            }
          } else if (step == 2) // benefit page
          {
            if (direction == 'forward') {
              if (usertype == 'pregnant') {
                $('body').find('.step-pregnant').show();
                $('body').find('.step-newmom').hide();
              } else if (usertype == 'babyout') {
                $('body').find('.step-pregnant').hide();
                $('body').find('.step-newmom').show();
              } else {
                alert("Please select user type");
                return false;
              }
              $('body').find('.step-usertype').hide();
            } else if (direction == 'backward') {
              if (usertype == 'pregnant') {
                $('body').find('.step-pregnant').show();
                $('body').find('.step-newmom').hide();
                $('body').find('.step-form').hide();
              } else if (usertype == 'babyout') {
                $('body').find('.step-newmom').show();
                $('body').find('.step-newbaby-dob').hide();
                $('body').find('.step-pregnant').hide();
              }
            }
          } else if (step == 3) {
            if (direction == 'forward') {
              if (usertype == 'pregnant') // form page
              {
                $('body').find('.step-form').show();
                $('body').find('.step-newbaby-dob').hide();
                $('body').find('.step-backform').attr("data-usertype", "pregnant");
                $('body').find('.step-backform').attr("data-step", "2");
                $('body').find('.step-forwardform').attr("data-usertype", "pregnant");
                $('body').find('.step-forwardform').attr("data-step", "4");
                $('body').find('.step-forwardform').attr("type", "button");
                $('body').find('.step-forwardform').attr("name", "button-next");
                $('body').find('.step-forwardform').html("Next");
              } else if (usertype == 'babyout') // child dob page
              {
                $('body').find('.step-newbaby-dob').show();
                $('body').find('.step-form').hide();
                $('body').find('.step-cryocord').hide();
                $('body').find('.step-backform').attr("data-usertype", "babyout");
                $('body').find('.step-backform').attr("data-step", "2");
                $('body').find('.step-forwardform').attr("data-usertype", "");
                $('body').find('.step-forwardform').attr("data-step", "");
                $('body').find('.step-forwardform').attr("type", "button");
                $('body').find('.step-forwardform').attr("name", "button-next");
                $('body').find('.step-forwardform').html("Submit");
              }
              $('body').find('.step-pregnant').hide();
              $('body').find('.step-newmom').hide();
              $('body').find('.step-usertype').hide();
            } else if (direction == 'backward') {
              if (usertype == 'babyout') // child dob page
              {
                $('body').find('.step-newbaby-dob').show();
                $('body').find('.step-pregnant').hide();
                $('body').find('.step-newmom').hide();
                $('body').find('.step-form').hide();
              } else if (usertype == 'pregnant') {
                $('body').find('.step-form').show();
                $('body').find('.step-cryocord').hide();
                $('body').find('.step-backform').attr("data-usertype", "pregnant");
                $('body').find('.step-backform').attr("data-step", "2");
                $('body').find('.step-forwardform').attr("data-usertype", "pregnant");
                $('body').find('.step-forwardform').attr("data-step", "4");
                $('body').find('.step-forwardform').attr("type", "button");
                $('body').find('.step-forwardform').attr("name", "button-next");
                $('body').find('.step-forwardform').html("Next");
              }
              $('body').find('.step-cryocord').hide();
              $('body').find('.step-usertype').hide();
            }
          } else if (step == 4) {
            if (direction == 'forward') {
              if (usertype == 'babyout') {
                var year = $('#babyYear').val();
                var month = $('#babyMonth').val();
                var day = $('#babyDay').val();
                var datecheck = $('#subscriber_question3').val();
                console.log("year" + year + " month " + month + " day " + day);
                if (year == '' || year == null || year == undefined) {
                  Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: "Please select year",
                  });
                  return false;
                }
                if (month == '' || month == null || month == undefined) {
                  Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: "Please select month",
                  });
                  return false;
                }
                if (day == '' || day == null || day == undefined) {
                  Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: "Please select day",
                  });
                  return false;
                }
                $('body').find('.step-form').show();
                $('body').find('.step-cryocord').hide();
                $('body').find('.step-backform').attr("data-usertype", "babyout");
                $('body').find('.step-backform').attr("data-step", "3");
              } else if (usertype == 'pregnant') {
                var usertype = $('#subscriber_question4').val();
                var checkmobile = $('body').find('.hidden-check-mobile').val();
                var checkedd = $('body').find('.hidden-check-edd').val();
                var res = checkbasic_input_form();
                if (res == false) {
                  return false;
                }
                if (checkmobile == 'false') {
                  Swal.fire({
                    icon: 'error',
                    title: 'Error Mobile Number',
                    text: 'Please check mobile number input',
                  });
                  return false;
                }
                if (usertype == 'pregnant' && checkedd == 'false') {
                  return false;
                }
                $('body').find('.step-form').hide();
                $('body').find('.step-cryocord').show();
                $('body').find('.step-backform-cryocord').attr("data-usertype", "pregnant");
                $('body').find('.step-backform-cryocord').attr("data-step", "3");
              }
              $('body').find('.step-newbaby-dob').hide();
              $('body').find('.step-pregnant').hide();
              $('body').find('.step-newmom').hide();
              $('body').find('.step-usertype').hide();
            }
          }
        }
        var setYearChildBirth = function() {
          var today = new Date();
          var currentYear = today.getFullYear();
          var startYear = currentYear - 1;
          for (var i = startYear; i <= currentYear; i++) {
            $('#babyYear').append('<option value="' + i + '">' + i + '</option>');
          }
        }
        var hidequestion_in_mainForm = function(usertype) {
          if (usertype != '') {
            usertype = usertype.toLowerCase();
          }
          if (usertype == 'pregnant') {
            $('body').find('.div-edd-question').show();
            $('body').find('.row-sample-milk').show();
            $('body').find('#pregnantedd').attr("required", true);
            $('body').find('.btn-submit-form').removeClass('btn-pregnant-submit');
            $('body').find('.btn-submit-form').removeClass('btn-newmom-submit');
            $('body').find('.maincordblood').prop('required', true);
            $('body').find('.mainhospitalquestion').prop('required', true);
            $('body').find('#subscriber_question3').prop('disabled', true); // remove answer newborn birth
            $('body').find('#pregnantedd').prop('disabled', false); // edd answer
            $('body').find('#other_milk_brand_input').prop('disabled', false); // sampling milk
            $('body').find('.cordblood').prop('disabled', false); //learning cord blood
            $('body').find('.hospitalquestion').prop('disabled', false); // hospital
          } else {
            $('body').find('.div-edd-question').hide();
            $('body').find('.row-sample-milk').hide();
            $('body').find('#pregnantedd').attr("required", false);
            $('body').find('.btn-submit-form').addClass('btn-newmom-submit');
            $('body').find('.maincordblood').prop('required', false);
            $('body').find('.mainhospitalquestion').prop('required', false);
            $('body').find('#subscriber_question3').prop('disabled', false); // newborn birth
            $('body').find('#pregnantedd').prop('disabled', true); // remove answer edd
            $('body').find('#other_milk_brand_input').prop('disabled', true); // remove sampling milk
            $('body').find('.cordblood').prop('disabled', true); //remove cord blood answer
            $('body').find('.hospitalquestion').prop('disabled', true); //remove hospital answer
          }
        }
        var validatePostcode = function(_this) {
          var postcode = _this.val();
          if (postcode != undefined && postcode != '') {
            $.ajax({
              url: '../modules/enlineamixmod/enlineamixmod-postcode-ajax.php',
              data: {
                'postcode': postcode
              },
              dataType: 'json',
              method: 'post',
              success: function(result) {
                if (result.status == true) {
                  if (result.data.city != undefined && result.data.city != '') {
                    _this.closest('.row').find('.addr-city').val(result.data.city);
                  }
                  if (result.data.state_name != undefined && result.data.state_name != '') {
                    _this.closest('.row').find('.addr-state').val(result.data.state_name);
                  }
                }
              }
            });
          }
        }
        var checkEdd = function() {
          var edd = $('body').find('#pregnantedd').val();
          if (edd != '') {
            var arryDate = edd.split("/");
            if (arryDate.length == 3) {
              if (isNaN(arryDate[0]) || isNaN(arryDate[1]) || isNaN(arryDate[2])) {
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Please enter your edd in correct format',
                });
                return false;
              }
              var dateEdd = arryDate[2] + "-" + arryDate[1] + "-" + arryDate[0];
              $.ajax({
                url: '../modules/enlineamixmod/enlineamixmod-edd-newmom-ajax.php',
                data: {
                  'edd': dateEdd,
                  'eventid': 100
                },
                dataType: 'json',
                method: 'post',
                success: function(result) {
                  if (result.status == false) {
                    $('body').find('.hidden-check-edd').val(false);
                    Swal.fire({
                      icon: 'error',
                      title: 'Error EDD',
                      text: result.msg,
                    });
                  } else {
                    $('body').find('.hidden-check-edd').val(true);
                  }
                }
              });
            }
          }
        }
        var checkMobileNum = function() {
          var phonenumber = $('#mobilenumber').val();
          var phonenumberr = phonenumber.replace("-", " ");
          var phonenumber = phonenumberr.trim();
          if ($.trim(phonenumber) != "") {
            var prefix = phonenumber.substring(0, 3);
            var firstNo = phonenumber.substring(0, 1);
            var phoneLength = phonenumber.length;
            firstNo = parseInt(firstNo);
            if (firstNo !== 0 && firstNo !== 5) {
              $('body').find('.hidden-check-mobile').val(false)
              $("#subscriber_question1").addClass('is-invalid');
              $('body').find('.error-msg-contactnum').html("Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 0123334444 / 0198887777.");
              return false;
            }
            if (firstNo == '0') {
              if (prefix == '010' || prefix == '011' || prefix == '012' || prefix == '013' || prefix == '014' || prefix == '015' || prefix == '016' || prefix == '017' || prefix == '018' || prefix == '019') {
                if (prefix == '011') {
                  if (phoneLength < 10 || phoneLength > 11) {
                    $('body').find('.hidden-check-mobile').val(false)
                    $("#subscriber_question1").addClass('is-invalid');
                    $('body').find('.error-msg-contactnum').html("Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 0123334444 / 0198887777.");
                    return false;
                  }
                } else {
                  if (phoneLength < 10 || phoneLength > 10) {
                    $('body').find('.hidden-check-mobile').val(false)
                    $("#subscriber_question1").addClass('is-invalid');
                    $('body').find('.error-msg-contactnum').html("Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 0123334444 / 0198887777.");
                    return false;
                  }
                }
                $('body').find('.hidden-check-mobile').val(true)
              } else {
                $('body').find('.hidden-check-mobile').val(false)
                $("#subscriber_question1").addClass('is-invalid');
                $('body').find('.error-msg-contactnum').html("Invalid phone number format. Correct format(XXX XXXXXXXX), e.g. 0123334444 / 0198887777.");
                return false;
              }
            } else if (firstNo == '5') {
              if (phoneLength < 9 || phoneLength > 9) {
                $('body').find('.hidden-check-mobile').val(false)
                $("#subscriber_question1").addClass('is-invalid');
                $('body').find('.error-msg-contactnum').html("Invalid Singapore phone number format. Correct Format(5 XXXX XXXX), e.g. 5 66667777.");
                return false;
              }
              $('body').find('.hidden-check-mobile').val(true)
            } else {
              $('body').find('.hidden-check-mobile').val(false)
              $("#subscriber_question1").addClass('is-invalid');
              $('body').find('.error-msg-contactnum').html("Invalid phone number prefix. Correct Prefix (010,011,012,013,014,015,016,017,018,019).");
              return false;
            }
          }
        }
        var optionOthermilk = function() {
          var optionselected = "";
          $('.option-other-milkbrand').each(function(indx, ele) {
            if ($(ele).is(":checked")) {
              optionselected += (optionselected != "" ? "," : "") + $(ele).val();
            }
          });
          $('body').find('.other-milk-brand-input').val(optionselected);
        }
        var checkbasic_input_form = function() {
          var email = $('body').find('#emailNew').val();
          var password = $('body').find('#newPassword').val();
          var firstname = $('body').find('#newFirstName').val();
          var lastname = $('body').find('#newLastName').val();
          var address = $('body').find('#subscriber_question8').val();
          var postcode = $('body').find('#postcode-address').val();
          var city = $('body').find('#city-address').val();
          var state = $('body').find('#state-address').val();
          var dobParent = $('body').find('#dobParent').val();
          var maternaMilk = $('body').find('#materna-milk-brand').val();
          var kidMilk = $('body').find('#kid-milk-brand').val();
          console.log("dobParent = " + dobParent)
          if (email == '') {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Please enter email',
            });
            return false;
          }
          if (password == '' || password.length < 6) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Please enter password and password minimum length is 6',
            });
            return false;
          }
          if (firstname == '' || firstname == null || firstname == undefined) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Please enter first name',
            });
            return false;
          }
          if (lastname == '' || lastname == null || lastname == undefined) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Please enter last name',
            });
            return false;
          }
          if (address == '' || address == null || address == undefined) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Please enter address',
            });
            return false;
          }
          if (postcode == '' || postcode == null || postcode == undefined) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Please enter postcode',
            });
            return false;
          }
          if (city == '' || city == null || city == undefined) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Please enter city',
            });
            return false;
          }
          if (state == '' || state == null || state == undefined) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Please enter state',
            });
            return false;
          }
          if (maternaMilk == '' || maternaMilk == null || maternaMilk == undefined) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Please select brand of milk for mum',
            });
            return false;
          }
          if (kidMilk == '' || kidMilk == null || kidMilk == undefined) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Please select brand of milk for kid',
            });
            return false;
          }
          if (dobParent == '' || dobParent == null || dobParent == undefined) {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Please enter your Date of Birth',
            });
            return false;
          } else {
            var arryDateDob = dobParent.split("/");
            if (arryDateDob.length == 3) {
              if (isNaN(arryDateDob[0]) || isNaN(arryDateDob[1]) || isNaN(arryDateDob[2])) {
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Please enter your birthday in correct format',
                });
                return false;
              }
            }
          }
          return true;
        }
        var checkEmail = function(sample = false, autorun = false) {
          var checkemail = $('body').find('#emailNew').val();
          var msgEmail = $('body').find('.error-msg-email');
          msgEmail.html("");
          $('body').find('.hidden-list-sampling').val("");
          $('body').find('#other_milk_brand_input').val("");
          $('body').find('.option-other-milkbrand').prop('checked', false)
          if (checkemail != undefined && checkemail != '') {
            msg = "<i class='fas fa-spinner fa-spin'></i> Please wait while we checking your email...";
            msgEmail.html(msg);
            $.ajax({
              url: '../modules/enlineamixmod/enlineamixmod-checkcustemailevent-ajax.php',
              data: {
                'checkemail': checkemail,
                'eventid': eventID,
                'checksample': sample
              },
              dataType: 'json',
              method: 'post',
              success: function(result) {
                $('body').find('.btn-submit-form').attr('disabled', false);
                if (result.status == false) {
                  if (result.status_code == 'exist_customer_event') {
                    $('body').find('.btn-submit-form').attr('disabled', true);
                    Swal.fire({
                      icon: 'error',
                      title: 'Error',
                      text: 'This email has been registered',
                    });
                    $('body').find('.hidden-check-email').val(false);
                    msgEmail.html("");
                    return false;
                  }
                } else {
                  msgEmail.html("");
                  $('body').find('.hidden-check-email').val(true);
                }
                if (result.data.str_sampling != undefined && result.data.str_sampling != '') {
                  $('body').find('.hidden-list-sampling').val(result.data.str_sampling);
                }
              }
            });
          } else {
            if (autorun != true) {
              emailSelector.addClass('is-invalid');
              emailSelector.closest('div').find(errorSelector).html("<font style='color:#e9322d'>" + icon + " Please enter your email</font>");
              return false;
            }
            return true;
          }
        }
        $(function() {
          $(window).load(function() {
            $.uniform.restore(".noUniform");
          });
          $('body').on('click', '.card-clickable', function() {
            var usertype = $(this).data("usertype");
            $('#subscriber_question4').val(usertype);
            hidequestion_in_mainForm(usertype);
            stepview(2, 'forward', usertype);
          })
          $('body').on('click', '.btn-step-back', function() {
            var usertype = $(this).attr("data-usertype");
            var step = $(this).attr("data-step");
            stepview(step, 'backward', usertype);
          })
          $('body').on('click', '.btn-step-forward, .step-forwardform', function() {
            var usertype = $(this).data("usertype");
            var step = $(this).data("step");
            stepview(step, 'forward', usertype);
          });
          setYearChildBirth();
          $("#babyYear").on("change", function() {
            $('#babyMonth').prop('disabled', false);
          });
          $("#babyMonth").on("change", function() {
            var year = $('#babyYear').val();
            var month = $('#babyMonth').val();
            if (year !== '' && month !== '') {
              $('#babyDay').prop('disabled', false);
              $('#babyDay').find('option').remove().end();
              var days = new Date(year, month, 0).getDate();
              $('#babyDay').append('<option value=" " disabled selected> Day </option>');
              for (var i = 1; i <= days; i++) {
                $('#babyDay').append('<option value="' + i + '">' + i + '</option>');
              }
            }
          });
          $("#babyDay").on("change", function() {
            var year = $('#babyYear').val();
            var month = $('#babyMonth').val();
            var day = $('#babyDay').val();
            var month = ("0" + month).slice(-2);
            var day = ("0" + day).slice(-2);
            $('#subscriber_question3').val(day + '-' + month + '-' + year);
          });
          $('body').on('blur', '.addr-postcode', function() {
            validatePostcode($(this));
          });
          $('body').on('blur', '#pregnantedd', function() {
            checkEdd();
          });
          $('body').on('blur', '#mobilenumber', function() {
            checkMobileNum();
          });
          $('body').on('click', '.btn-pregnant-submit, .btn-newmom-submit', function() {
            var usertype = $('#subscriber_question4').val();
            var checkmobile = $('body').find('.hidden-check-mobile').val();
            var checkedd = $('body').find('.hidden-check-edd').val();
            var res = checkbasic_input_form();
            if (res == false) {
              return false;
            }
            if (checkmobile == 'false') {
              Swal.fire({
                icon: 'error',
                title: 'Error Mobile Number',
                text: 'Please check mobile number input',
              });
              return false;
            }
            if (usertype == 'pregnant') {
              var cordblodd = $("input[name='subscriber_question12']:checked").val();
              var hospital = $("input[name='subscriber_question13']:checked").val();
              if (checkedd == 'false') {
                return false;
              }
              if (cordblodd == undefined || cordblodd == null || cordblodd == '') {
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: ' Are you interested to learn more about cord blood banking?',
                });
                return false;
              }
              if (hospital == undefined || hospital == null || hospital == '') {
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'Are you planning to deliver at a private or government hospital?',
                });
                return false;
              }
            }
            $('body').find('#btnsubmit').trigger('click');
            $(this).html('Processing <i class="fas fa-spinner fa-spin"></i>');
          });
          $('body').on('change', '.option-other-milkbrand', function() {
            var sample = $(this).val();
            var listsampling = $('body').find('.hidden-list-sampling').val();
            if (sample != '') {
              sample = sample.toLowerCase();
              if (sample == 'wyeth promama') {
                sample = "redeem_wyeth_promama"
              } else if (sample == 'enfamama a+') {
                sample = "redeem_enfamama"
              }
            }
            if (listsampling != '') {
              arr_redeem = listsampling.split(",")
              if (arr_redeem.length > 0) {
                console.log("sample = " + sample);
                console.log("array redeem = " + arr_redeem);
                console.log($.inArray(sample, arr_redeem));
                if ($.inArray(sample, arr_redeem) !== -1) {
                  if (sample == 'redeem_enfamama') {
                    Swal.fire({
                      icon: 'info',
                      title: 'Info',
                      text: 'This email already redeem enfamama sample',
                    });
                    $(this).prop('checked', false);
                  } else if (sample == 'redeem_wyeth_promama') {
                    Swal.fire({
                      icon: 'info',
                      title: 'Info',
                      text: 'This email already redeem wyeth promama sample',
                    });
                    $(this).prop('checked', false);
                  }
                }
              }
            }
            optionOthermilk();
          });
          $('body').on('change', '.cordblood', function() {
            var isCordBloodCheck = $('body').find('.cordblood').is(':checked');
            var valCordBloodCheck = $(this).val();
            if (valCordBloodCheck != '' && valCordBloodCheck.toLowerCase() == 'yes') {
              $('body').find('.cord-msg').show('slow');
            } else {
              $('body').find('.cord-msg').hide('slow');
            }
          });
          $('body').on('change', '#emailNew', function() {
            checkEmail();
          });
          var today = new Date();
          var currentYear = today.getFullYear();
          var yearage18 = currentYear - 18;
          var yearage70 = currentYear - 70;
          var maxAge = "31/12/" + yearage18;
          var minAge = "01/01/" + yearage70;
          console.log("Year for 70 age = " + minAge);
          console.log("Year for 18 age = " + maxAge);
          var selector = document.getElementById("dobParent");
          Inputmask('datetime', {
            alias: 'datetime',
            inputFormat: "dd/mm/yyyy",
            outputFormat: "yyyy-mm-dd",
            leapday: "29.02.",
            min: minAge,
            max: maxAge,
          }).mask(selector);
          var selector = document.getElementById("pregnantedd");
          Inputmask('datetime', {
            alias: 'datetime',
            inputFormat: "dd/mm/yyyy",
            outputFormat: "yyyy-mm-dd",
            leapday: "29.02."
          }).mask(selector);
          var selectorPostcode = document.getElementById("postcode-address");
          var postcodeSettings = {
            'mask': "*****",
            "placeholder": "",
            "definitions": {
              '*': {
                validator: "[0-9]"
              }
            }
          }
          Inputmask(postcodeSettings).mask(selectorPostcode);
          var selectorMobile = document.getElementById("mobilenumber");
          var phoneNumSettings = {
            'mask': "***********",
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
</div>