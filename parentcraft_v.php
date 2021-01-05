<style><!--
h1,
 h2,
 h3,
 h4,
 h5,
 p,
 button,
 input {
 font-family: GothamRounded-medium;
 }
 .onofflinebutton {
 font-size: 5em;
 color: #5d5d5d;
 cursor: pointer;
 }
 .onofflinebutton:hover {
 border-bottom: 15px solid #265e70;
 }
 .onofflinebutton.focus {
 border-bottom: 15px solid #265e70;
 }
 .speakerName {
 border-bottom: 5px solid #265e70;
 color: #5d5d5d;
 margin-left: 50px;
 margin-right: 50px;
 padding-bottom: 5px;
 }
 .speakerDescription {
 color: #5d5d5d;
 color: #5d5d5d;
 margin-left: 30px;
 margin-right: 30px;
 }
 .speakerBox {
 padding-left: 0px;
 padding-right: 0px;
 -moz-box-shadow: inset 0 0 10px #000000;
 -webkit-box-shadow: inset 5px 5px 10px lightgrey;
 box-shadow: 5px 5px 10px lightgrey;
 padding-bottom: 10px;
 min-height: 350px;
 margin-bottom: 20px;
 }
 .checklistText {
 text-align: left;
 color: white;
 font-weight: 100;
 background-color: #265e70;
 padding: 20px 15px;
 font-family: GothamRounded-medium;
 }
 .reviewBox {
 background: #ffe1e7;
 color: #265e70;
 padding: 30px;
 text-align: left;
 font-size: 20px;
 line-height: 1.2;
 -moz-box-shadow: inset 0 0 10px #000000;
 -webkit-box-shadow: inset 5px 5px 10px lightgrey;
 box-shadow: 5px 5px 10px lightgrey;
 min-height: 550px;
 }
 .reviewStars {
 font-size: 40px;
 font-weight: bold;
 }
 .offlineItineraryRow {
 border-bottom: 2px solid #edd0ce;
 font-family: GothamRounded-medium;
 font-size: 20px;
 }
 .ItinerarytimeDate {
 font-family: GothamRounded-medium;
 font-size: 20px;
 color: white;
 }
 .ItineraryTitle {
 font-family: GothamRounded-medium;
 font-size: 20px;
 color: white;
 line-height: 1;
 }
 .offlineItineraryTimeBox {
 width: 49%;
 display: inline-block;
 padding-top: 20px;
 padding-bottom: 20px;
 vertical-align: middle;
 }
 .offlineItineraryTitleBox {
 width: 50%;
 display: inline-block;
 padding-top: 20px;
 padding-bottom: 20px;
 text-align: left;
 padding-left: 60px;
 min-height: 93px;
 vertical-align: middle;
 }
 .ItineraryTitle-small {
 font-weight: 100;
 color: white;
 font-size: 15px;
 font-family: sans-serif;
 }
 .parentcraftDescription {
 line-height: 1.3;
 color: grey;
 font-weight: medium;
 font-size: 25px;
 font-family: GothamRounded-medium;
 text-align: justify;
 }
 .parentcraftTitle {
 color: #265e70;
 display: inline-block;
 font-weight: bold;
 font-size: 32px;
 font-family: GothamRounded-medium;
 }
 .sliderTextTitle{
 font-size: 30px;
 padding-bottom: 20px;
 }
 .sliderTextPoints{
 font-size: 20px;
 text-align: left;
 }
 .epTitle{
 color: #265e70;
 font-weight: bold;
 padding-left: 10px;
 }
 .epDesc{
 font-size: 20px;
 line-height: 1.5;
 padding: 5px 0px 20px 10px;
 }
 #topBtn {
 display: none;
 position: fixed;
 bottom: 20px;
 left: 30px;
 z-index: 9999;
 font-size: 18px;
 border: none;
 outline: none;
 background-color: #ff7fae;
 color: white;
 cursor: pointer;
 padding: 15px;
 border-radius: 4px;
}
 @media only screen and (max-width: 600px) {
 #topBtn {
 bottom: 70px;
 left: 8px;
 font-size: 12px;
 padding: 12px;
 }
 .ItineraryTitle {
 font-size:14px;
 }
 .ItineraryTitle-small{
 font-size:12px;
 }
 .offlineItineraryTitleBox {
 width: 64%;
 padding-left: 10px;
 }
 .offlineItineraryTimeBox {
 width: 32%;
 }
 .ItinerarytimeDate {
 font-size:14px;
 }
 #homepage-sliderforth{
 padding-top:0;
 }
 .love-image{
 width: 24px!important;
 margin-top: -10px!important;
 right: 0;
 position: absolute;
 }
 .love-image-small{
 width: 24px!important;
 margin-top: -10px!important;
 position: absolute;
 }
 .bx-wrapper{
 max-width:1183px!important;
 }
 .epTitle{
 font-size:19px;
 }
 .epDesc{
 font-size: 16px;
 }
 .sliderTextTitle{
 font-size: 19px;
 }
 .sliderTextPoints{
 font-size: 16px;
 }
 .parentcraftDescription {
 font-size: 15px;
 text-align: left;
 line-height: 1.5;
 }
 .parentcraftTitle {
 font-size: 18px;
 }
 .reviewStars {
 font-size: 20px;
 }
 .reviewBox {
 font-size: 13px;
 }
 .onofflinebutton {
 font-size: 2.5em;
 }
 .speakerName {
 margin-left: 10px;
 margin-right: 10px;
 }
 .speakerDescription {
 margin-left: 8px;
 margin-right: 8px;
 font-size: 13px;
 line-height: 1.1;
 }
 .speakerBox {
 min-height: 293px;
 padding-bottom: 5px;
 }
 }
--></style>
<!-- Online Offline button-->
<div class="row">
<div class="hidden-xs col-md-2 col-lg-2"></div>
<div class="col-md-4 col-lg-4 col-xs-6">
<h1 class="onlineBtn onofflinebutton focus">ONLINE</h1>
</div>
<div class="col-md-4 col-lg-4 col-xs-6">
<h1 class="offlineBtn onofflinebutton">OFFLINE</h1>
</div>
</div>
<!-- Online Offline Button END-->
<p></p>
<!-- Online Content -->
<div class="online-content">
<div class="row">
<div class="col-md-12 col-lg-12 col-xs-12"><img src="https://
s3.amazonaws.com/motherhood.com.my/assets/images/uploads/
PARENTCRAFT+CLASS/2020/landing+page/online+class/coveronlineclass.png"
width="100%" alt="onlineBanner" /></div>
<!-- Motherhood Antenatal Class -->
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">What is Motherhood Antenatal Class?</h1>
<img class="love-image" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" />
<p class="parentcraftDescription">Dear expecting parents, do you know about
antenatal class? How exactly is antenatal care and how does these two relate? 
An antenatal class can help parents, especially new parents, to prepare for
labour, birth, and your parenthood journey.&nbsp; Motherhood welcomes you
to our online antenatal class to guide you on the essential measure of antenatal
and prenatal care. If you are expecting a baby soon, do come and join
Motherhood Antenatal Class - the premium online antenatal class in Malaysia -
for an enjoyable yet educational antenatal class for all parents.</p>
</div>
<!-- Antenatal Care -->
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">The Importance of Antenatal Care</h1>
<img class="love-image" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" />
<p class="parentcraftDescription">Antenatal classes help expecting parents to
focus on your pregnancy and forthcoming labour and birth. It could help you
with your antenatal care during pregnancy, antenatal diet and plan, exercises,
childbirth, and many more. Most importantly, it covers all the general
information about the process of labour, childbirth, and after delivery.</p>
</div>
<!-- Programme Highlights -->
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">Programme Highlights</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" /> <!--<img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/tittle/ph_tittle.png" width="100%"
alt="programmeHighlight" />--></div>
<div class="clearfix"></div>
<!-- Gallery slider -->
<div id="slider_row" class="col-md-6 col-lg-6 col-xs-12" style="marginbottom: 10px; padding: 0;">
<div id="homepage-slidersecond" class="home_slider" style="padding-top:
0;">
<ul id="homeslidersecond">
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/slide1_speaker.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/onlineprogrammehighlight2.png" width="100%" /
></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/onlineprogrammehighlight3.png" width="100%" /
></div>
</li>
</ul>
</div>
</div>
<!-- Gallery Slider END -->
<div class="col-md-6 col-lg-6 col-xs-12" style="background-color: #265e70;
padding: 39px 50px; height: 100%; color: white; line-height: 1.5; display:
block;">
<p class="sliderTextTitle">What Will You Learn?</p>
<p class="sliderTextPoints">
⭐
 Pregnancy and baby nutrition.</p>
<p class="sliderTextPoints"> Delivery process and procedures.</p>
<p class="sliderTextPoints"> Antenatal exercise.</p>
<p class="sliderTextPoints"> Breatfeeding tips, tricks, do's and don'ts.</p>
<p class="sliderTextPoints"> Baby Bath - safe, fun and exciting bath time.</
p>
<p class="sliderTextPoints"> Oral care for babies.</p>
<p class="sliderTextPoints"> First 100 get Free Parentcraft Kit worth
RM75.</p>
<p class="sliderTextPoints"> Unlimited replay and access directly to panel
experts.</p>
</div>
<div class="clearfix"></div>
<!-- Content under programme highlight -->
<div class="col-md-12 col-lg-12 col-xs-12" style="padding-right: 0; paddingleft: 0;">
<h1 class="parentcraftTitle">Upcoming Webinar</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" /> <!-- <img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/tittle/upcomingevent_tittle.png" width="100%"
alt="image1" />--></div>
<!-- UPCOMING EVENT SLIDER -->
<div id="slider_rowwwww" class="row-fluid">
<div id="homepage-sliderrrrr" class="home_sliderrrrr col-md-12 col-xs-12" 
style="margin-bottom: 0 !important;">
<ul id="homesliderrrr" style="width: 100%;">
<li class="homeslider-container" style="width: 100%;" rel="noopener"><a
rel="noopener"> <img src="https://s3.amazonaws.com/motherhood.com.my/
assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/
online+class/1170x481_sarah-ong.png" width="100%" /> </a></li>
</ul>
</div>
</div>
<div class="clearfix"></div>
<!-- Content under programme highlight -->
<div class="col-md-12 col-lg-12 col-xs-12" style="padding-right: 0; paddingleft: 0;">
<h1 class="parentcraftTitle">Past Webinars</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" /> <!-- <img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/tittle/pastevent_tittle.png" width="100%"
alt="image1" />--></div>
<!-- PAST EVENT SLIDER -->
<div id="slider_row" class="row-fluid">
<div id="homepage-sliderforth" class="home_slider col-md-12 col-xs-12"
style="margin-bottom: 0 !important;">
<ul id="homesliderforth" style="width: 100%;">
<li class="homeslider-container" style="width: 100%;"><a rel="noopener">
<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/
uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/
lavinia_pastevent.png" alt="slider" width="100%" /></a></li>
<!-- 30 -->
<li class="homeslider-container" style="width: 100%;"><a rel="noopener">
<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/
uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/
parencraft_zarinaended.png" alt="slider" width="100%" /></a></li>
<!-- 31 -->
<li class="homeslider-container" style="width: 100%;"><a rel="noopener">
<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/
uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/
jayden_pastevent.png" alt="slider" width="100%" /></a></li>
<!-- 32 -->
<li class="homeslider-container" style="width: 100%;"><a rel="noopener">
<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/
uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/
parencraft_elpenipastevent.png" alt="slider" width="100%" /></a></li>
<!-- 33 -->
<li class="homeslider-container" style="width: 100%;"><a rel="noopener">
<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/
uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/
pastevent_limsiewpei.png" alt="slider" width="100%" /></a></li>
<!-- Content under programme highlight END --></ul>
</div>
<div class="clearfix"></div>
<!-- Video testimonial -->
<div class="col-md-12 col-lg-12 col-xs-12" style="margin-top: 9px;">
<h1 class="parentcraftTitle">Video</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" /> <!-- <img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/tittle/video_tittle.png" width="100%"
alt="videoTestimonial" />--></div>
<div class="col-lg-12 col-md-12" style="padding-left: 25px; padding-right:
25px;"><video controls="controls" width="100%" poster="https://
s3.amazonaws.com/motherhood.com.my/assets/images/parentcraft/
parentcraft_videothumbnail.png" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/Parentcraft+on9+ADS+Revised+(1).mp4"></
video></div>
<div class="clearfix"></div>
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">Speakers</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" />
<p class="parentcraftDescription">Motherhood.com.my's parentcraft classes
are facilitated by experienced consultants, gynaecologist, nurses,
physiotherapist, nutritional therapist and certified Pilates instrutor.</p>
</div>
<div class="clearfix"></div>
<!-- Join Now Speaker END --> <!-- Speakers-->
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_drcaryn.png" width="100%"
alt="Physiotherapy" />
<p class="speakerName">DATIN DR CARYN</p>
<p class="speakerDescription">Dental Surgeon, Kuala Lumpur International
Dental Center, BDS (MAHE), AACD (USA)</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_drtan-cheng.png"
width="100%" alt="Physiotherapy" />
<p class="speakerName">DR. TAN CHENG</p>
<p class="speakerDescription">Consultant Obstetrician &amp; Gynaecologist
in Tung Shin Hospital. MBChb (Bristol, UK) MRCOG (London, UK)</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_lavinia.png" width="100%"
alt="Physiotherapy" />
<p class="speakerName">LAVINIA CHEW MEI SUM</p>
<p class="speakerDescription">Bachelor of Physiotherapy (Hons), Physiofitness practitioner, Founder of Flexmob Studios and WWB.</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_kexin.png" width="100%"
alt="Physiotherapy" />
<p class="speakerName">DR. YIP KE XIN</p>
<p class="speakerDescription">Pediatrician of HappyKids Child Specialist
Clinic, Paediatric Clinical Specialist.</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_druma.png" width="100%"
alt="Physiotherapy" />
<p class="speakerName">DR. UMA SOTHINATHAN</p>
<p class="speakerDescription">Consultant Neonatologist from Pantai Hospital
Kuala Lumpur.</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_leechunhsien.png"
width="100%" alt="Physiotherapy" />
<p class="speakerName">LEE CHUN HSIEN</p>
<p class="speakerDescription">Nutritional Therapist for Pregnancy Nutrition,
B.Sc. Degree in Nutrition Science, Certified in Nutritional Medicine</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_drnada.png" width="100%"
alt="Physiotherapy" />
<p class="speakerName">DR. NADA SUDHAKARAN</p>
<p class="speakerDescription">Consultant Paediatric General &amp; Urology
Surgeon</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_drzarina.png" width="100%"
alt="Physiotherapy" />
<p class="speakerName">DR. ZARINA RAHMAN</p>
<p class="speakerDescription">Family Doctor at Klinik Famili Gravidities and a
certified lactation counsellor.</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_pamilia.png" width="100%"
alt="Physiotherapy" />
<p class="speakerName">PAMILIA</p>
<p class="speakerDescription">Clinical Psychologist and Health Coach</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_drshahrul.png" width="100%"
alt="Physiotherapy" />
<p class="speakerName">DR. SHAHRUL NIZAM</p>
<p class="speakerDescription">Emergency Medicine Specialist and FirstAid
Trainer, Klinik Famili Gravidities &amp; Gravidities Academy Wangsa Maju</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_elpeni.png" width="100%"
alt="Physiotherapy" />
<p class="speakerName">ELPENI BINTI RAMLI</p>
<p class="speakerDescription">Staff Nurse 2010, Certified Lactation
Counselor, National Lactation Centre 2015.</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_pavithra.png" width="100%"
alt="Physiotherapy" />
<p class="speakerName">PAVITHRA CHANDERAN</p>
<p class="speakerDescription">Pilates Instructor, Diploma in Physiotherapy,
Pre- &amp; Post-natal Pilates and Rehabilitation Pilates.</p>
</div>
</div>
<div class="col-md-3 col-lg-3 col-xs-6">
<div class="speakerBox"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker+bg/speaker_sarah.png" width="100%"
alt="Physiotherapy" />
<p class="speakerName">SARAH ONG</p>
<p class="speakerDescription">Baby Sleep Coach, Member of the Association
of Professional Sleep Consultants.</p>
</div>
</div>
<!-- Speakers END-->
<div class="clearfix"></div>
<ul>
<ul><!-- Email Question --></ul>
</ul>
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">Checklists</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" />
<p class="parentcraftDescription">To ease your pregnancy journey,
Motherhood prepared exclusive checklists for all expecting parents. Download
now !</p>
</div>
<div class="clearfix"></div>
<div class="checklistBox col-md-4 col-lg-4 col-xs-12"><img width="100%"
class="img-responsive checklistImage" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/checklist+image/hospitalbagchecklist_image.png" /
>
<p class="checklistText"><span style="font-size: 16px;">Hospital Bag
Checklist</span><br /><br /> Here is an extensive list of what you will need to
pack for labour and after delivery in your hospital bag. It is better to pack early!
</p>
</div>
<div class="checklistBox col-md-4 col-lg-4 col-xs-12"><img width="100%"
class="img-responsive checklistImage" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/checklist+image/mommytodolist_image.png" />
<p class="checklistText"><span style="font-size: 16px;">The Mommy To-DoList</span> <br /><br /> From the first trimester up until your last weeks, here
are the essential things that you should do before the birth of your baby.</p>
</div>
<div class="checklistBox col-md-4 col-lg-4 col-xs-12"><img width="100%"
class="img-responsive checklistImage" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/checklist+image/shoppinglist_image.png" />
<p class="checklistText"><span style="font-size: 16px;">Baby Shopping List</
span> <br /><br /> Overwhelmed (and excited) with the countless baby
products? Here is the perfect List of what you should get - and don't - for your
newborn.</p>
</div>
<div class="clearfix"></div>
<div class="col-md-12 col-lg-12 col-xs-12" style="background: #ffe1e7;
padding: 25px 0px 85px 0px;">
<div class="col-md-4 col-lg-4 col-xs-12" style="padding-left: 25px;">
<h3 style="color: #265e70; font-weight: bold; font-size: 25px;">Get free
checklists</h3>
</div>
<div class="col-md-5 col-lg-5 col-xs-8" style="padding-right: 0;"><input
id="newEmail" placeholder="Insert Your Email" style="color: black; boxshadow: none !important; border-radius: 0; font-size: 18px; padding: 13px 10px;
margin-top: 0;" name="newEmail" required="required" type="email" /></div>
<div class="col-md-2 col-lg-2 col-xs-4" style="padding-left: 0; padding-right:
25px;"><button class="btn btn-default button button-medium pull-right"
style="font-size: 18px; background: #ff7fae; width: 100%; border: none;
padding: 15px 15px 15px 15px; color: white; margin-top: 0;" name="submit"
type="submit"> Submit </button></div>
</div>
<div class="clearfix"></div>
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">Topics</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" /></div>
</div>
<div class="row" style="margin-left: -10px; margin-right: -10px; color:
#265e70; background: #ffcfda; padding: 50px 10px; text-align: left;">
<div class="col-md-3 col-lg-3 hidden-xs"></div>
<div class="col-md-7 col-lg-7 col-xs-12">
<h1 class="epTitle">EPISODE 1 :</h1>
<p class="epDesc">CHANGES IN HORMONES AND POSTURES</p>
<h1 class="epTitle">EPISODE 2 :</h1>
<p class="epDesc">COMMON ACHES AND PAIN</p>
<h1 class="epTitle">EPISODE 3 :</h1>
<p class="epDesc">VAGINAL BIRTH AND CESAREAN BIRTH</p>
<h1 class="epTitle">EPISODE 4 :</h1>
<p class="epDesc">CONTRACTION AND RELAXATION</p>
<h1 class="epTitle">EPISODE 5 :</h1>
<p class="epDesc">PREGNANCY NUTRITION</p>
<h1 class="epTitle">EPISODE 6 :</h1>
<p class="epDesc">PRE-NATAL PILATES PRACTICAL SESSIONS</p>
<h1 class="epTitle">EPISODE 7 :</h1>
<p class="epDesc">HOW TO PREPARE YOUR MIND DURING AND AFTER
PREGNANCY</p>
<h1 class="epTitle">EPISODE 8 :</h1>
<p class="epDesc">INFANT AND TODDLER NUTRITION</p>
<h1 class="epTitle">EPISODE 9 :</h1>
<p class="epDesc">CHILDBIRTH - ASSISTED VAGINAL BIRTH</p>
<h1 class="epTitle">EPISODE 10 :</h1>
<p class="epDesc">SUCCESSFUL BREASTFEEDING</p>
<h1 class="epTitle">EPISODE 11 :</h1>
<p class="epDesc">BABY BATH &amp; BABY BURPING &amp; BABY
MASSAGE</p>
<h1 class="epTitle">EPISODE 12 :</h1>
<p class="epDesc">DENTISTRY IN PREGNANCY &amp; NEWBORN ORAL
CARE</p>
<h1 class="epTitle">EPISODE 13 :</h1>
<p class="epDesc">PAEDIATRIC - DECISIONS TO MAKE ABOUT YOUR
NEWBORN</p>
<h1 class="epTitle">EPISODE 14 :</h1>
<p class="epDesc">PAEDIATRIC - CARING FOR INFANT DURING THE FIRST 30
DAYS - PART 1</p>
<h1 class="epTitle">EPISODE 15 :</h1>
<p class="epDesc">WHEN DOES A NEWBRON NEED TO GO THROUGH
SURGERY?</p>
<h1 class="epTitle">EPISODE 16 :</h1>
<p class="epDesc">NEWBORN SLEEPING TIPS FOR NEW PARENTS</p>
<h1 class="epTitle">EPISODE 17 :</h1>
<p class="epDesc">BABY CHOKING 101</p>
<p style="float: right; font-size: bold; font-style: italic;">*Subject to change.</
p>
</div>
<!--<img src="https://s3.amazonaws.com/motherhood.com.my/assets/images/
uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/
Parencraft_websitedesigntopicnew.png" width="100%" alt="topicImage" />--
></div>
<div class="clearfix"></div>
<!-- Reviews -->
<div class="col-md-12 enlinea_slider" style="padding-top: 20px;">
<div class="slider_container">
<ul id="nestlearticle_list_car">
<li class="product-box item" style="min-width: 178px;">
<div class="reviewBox">
<p>25/06/2020</p>
<p style="font-weight: bold;">Yuki Au Yong</p>
<p class="reviewStars">★ ★ ★ ★</p>
<p style="font-weight: bold;">I Like The Q&amp;A Session As I Get My
Questions Answered As Well</p>
<p>While the course is nice and short with all the necessary information
highlighted on the go. It is easy to understand for busy moms who needs to
know the essentials.</p>
</div>
</li>
<li class="product-box item" style="min-width: 178px;">
<div class="reviewBox">
<p>24/06/2020</p>
<p style="font-weight: bold;">Loi Pei Lui</p>
<p class="reviewStars">★ ★ ★ ★</p>
<p style="font-weight: bold;">I Like The COVID-19 Talk &amp; How Can
Pregnant Mums Protect Themselves</p>
<p>It is an amazing and a great class for new mums. It is a good talk to help
pregnant mum. I just want to say that I highly recommended these programmes
to all my pregnant friend. Attending this programme was a valuable experience
for me.</p>
</div>
</li>
<li class="product-box item" style="min-width: 178px;">
<div class="reviewBox">
<p>22/06/2020</p>
<p style="font-weight: bold;">Sofia Sarena Michael</p>
<p class="reviewStars">★ ★ ★ ★</p>
<p style="font-weight: bold;">It Was Informative Especially The Question And
Answer Session.</p>
<p>It was an informative class and Dr Zarina was great. As a first-time mum to
be, some questions were answered and it also assured me that I need to be
positive in tackling my breastfeeding journey. Thanks again doctor and
motherhood!</p>
</div>
</li>
<li class="product-box item" style="min-width: 178px;">
<div class="reviewBox">
<p>19/06/2020</p>
<p style="font-weight: bold;">Phoebe Lee</p>
<p class="reviewStars">★ ★ ★ ★</p>
<p style="font-weight: bold;">Sharing Talk By Dr Caryn</p>
<p>I feel lucky to be able to join this talk for free. Looking forward to more
similar talks in the future and experience sharing by the professionals. It would
be a great help to all the mothers or soon-to-be mothers out there.</p>
</div>
</li>
<li class="product-box item" style="min-width: 178px;">
<div class="reviewBox">
<p>16/06/2020</p>
<p style="font-weight: bold;">Joanna Oh</p>
<p class="reviewStars">★ ★ ★ ★</p>
<p style="font-weight: bold;">Made Me Realise That I Have To Prepare More
On How To Handle Baby</p>
<p>This is a very good session for us pregnant mum during this pandemic as it
is indeed a very worrying time and knowing that there are mums out there who
are as worried and share is very comforting.</p>
</div>
</li>
<li class="product-box item" style="min-width: 178px;">
<div class="reviewBox">
<p>20/05/2020</p>
<p style="font-weight: bold;">Elaine T</p>
<p class="reviewStars">★ ★ ★ ★</p>
<p style="font-weight: bold;">Learned A Lot And Feel More Prepared</p>
<p>Joined the class just about a week ago, has been quite a week especially
with this MCO. I'm really glad me and my husband signed up for it, as I am
expected to deliver in another 2 weeks, and I feel a lot more prepared. Thank
you Motherhood.</p>
</div>
</li>
</ul>
</div>
</div>
<!-- Reviews END-->
<div class="clearfix"></div>
<div class="col-md-12 col-lg-12 col-xs-12"><img src="https://
s3.amazonaws.com/motherhood.com.my/assets/images/uploads/
PARENTCRAFT+CLASS/2020/landing+page/online+class/
Parencraft_taglinenew.png" width="100%" alt="parentCraftTagline" /></div>
<div class="clearfix"></div>
<div class="col-md-12 col-lg-12 col-xs-12" style="padding-bottom: 20px;">
<h1 class="parentcraftTitle">Lesson You Don't Want To Miss</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" /> <!-- <img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/tittle/tittle_lesson.png" width="75%"
alt="titlelesson" />--></div>
<div class="clearfix"></div>
<div class="col-md-6 col-lg-6 col-xs-12"><video controls="controls"
width="100%" poster="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/
thumbnail_jay.png" src="https://s3.amazonaws.com/motherhood.com.my/
assets/images/uploads/PARENTCRAFT+CLASS/2020/landing+page/
online+class/Jay+-+Cryocord+-+Sub+-+Final.mp4"></video></div>
<div class="col-md-6 col-lg-6 col-xs-12"><iframe width="100%" height="315"
src="https://www.youtube.com/embed/eUbX5JrSEqE" frameborder="0"
allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-inpicture" allowfullscreen=""></iframe></div>
<div class="clearfix"></div>
<!-- ParentCraft Tagline END --></div>
<!-- Online Content END --></div>
<div class="online-content" style="background-color: #ffcfda; padding: 15px;
z-index: 999; position: fixed; bottom: 0; width: 100%; left: 0; box-shadow: 0px
0px 13px #ff7fae;">
<div class="col-md-offset-4 col-lg-offset-4 col-md-4 col-lg-4 col-xs-12"><a
href="../../../campaign-nurengroup/education/baby-learning/baby-enrichmentclasses/parentcraft-online-class-online-antenatal-classes.html"
target="_blank" rel="noopener"> <img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/gif/joinnowbutton.gif" width="100%"
alt="joinNowBtn" /> </a></div>
</div>
<!-- Offline Content-->
<div class="offline-content row"><!-- Offline Banner -->
<div class="col-md-12 col-lg-12 col-xs-12"><img src="https://
s3.amazonaws.com/motherhood.com.my/assets/images/uploads/
PARENTCRAFT+CLASS/2020/landing+page/offline+class/
mainbanner_offlinenew.png" width="100%" alt="offlineBanner" /></div>
<!-- Offline Banner END--> <!--==================== HIGHLIGHT 
====================-->
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">Programme Highlights</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" />
<div class="clearfix"></div>
<!--<img
 src="https://s3.amazonaws.com/motherhood.com.my/assets/images/
uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
programmehighlight_tittle.png" width="100%" /></div>
 <!========================== GALLERY
==========================-->
<div id="slider_row" class="col-md-6 col-lg-6 col-xs-12" style="marginbottom: 20px; padding-left: 0; padding-right: 0;">
<div id="homepage-sliderthird" class="home_slider">
<ul id="homesliderthird">
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_1.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_2.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_3.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_4.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_5.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_6.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_7.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_8.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_9.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_10.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_11.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_12.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; padding-
left: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_13.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_14.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_15.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_16.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_17.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_18.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_19.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_20.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_21.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_22.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_23.png" width="100%" /></div>
</li>
<li class="homeslider-container">
<div class="col-xs-12 col-md-12 col-lg-12" style="padding-right: 0; paddingleft: 0;"><img class="img-responsive" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
programme+highlights+image/pc_24.png" width="100%" /></div>
</li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xs-12" style="background-color: #265e70;
padding: 19px 50px; height: 100%; color: white; line-height: 1.5; display:
block;">
<p class="sliderTextTitle">What Will You Learn?</p>
<p class="sliderTextPoints">Pregnancy and baby nutrition.</p>
<p class="sliderTextPoints">Delivery process and procedures.</p>
<p class="sliderTextPoints">Antenatal exercise.</p>
<p class="sliderTextPoints">Breastfeeding tips, tricks, do's and don'ts.</p>
<p class="sliderTextPoints">Baby Bath - safe, fun and exciting bath time.</p>
<p class="sliderTextPoints">Oral care for babies.</p>
<p class="sliderTextPoints">First aid and CPR awareness for newborn babies.</
p>
</div>
</div>
<div class="clearfix"></div>
<!--==================== VIDEO ===================-->
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">Video</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" /> <!--<img
 src="https://s3.amazonaws.com/motherhood.com.my/assets/images/
uploads/PARENTCRAFT+CLASS/2020/landing+page/online+class/
videotittle.png" width="100%" alt="videotestimonialtitleoffline" /></div>
 <!================= VIDEO FULLSCREEN
===================-->
<div class="col-lg-12 col-md-12"><iframe src="https://www.youtube.com/
embed/XOpQyBybiBs" allowfullscreen="allowfullscreen" width="100%"
height="500px" frameborder="0"></iframe></div>
</div>
<!--====================== CTA BUTTON
==========================-->
<div class="col-lg-12"><a href="../../../campaign-nurengroup/education/babylearning/baby-enrichment-classes/parentcraft-class-limited-seatsavailable.html" target="_blank" rel="noopener"> <img class="" src="https://
s3.amazonaws.com/motherhood.com.my/assets/images/uploads/
PARENTCRAFT+CLASS/2020/landing+page/online+class/gif/joinnowbutton.gif"
width="100%" /> </a></div>
<!--==================== SPEAKER ====================-->
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">Speakers</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" /> <!--<img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/offline+class/speaker_tittle.png" width="100%" alt="speaker" /
>--></div>
<div class="clearfix"></div>
<!-- SPEAKERS -->
<div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; paddingright: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker/speaker_lavinia.png" width="100%" /></
div>
<div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; paddingright: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker/speaker_jayden.png" width="100%" /></
div>
<div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; paddingright: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker/speaker_pavitranew.png" width="100%" /
></div>
<div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; paddingright: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/offline+class/speaker/speaker_lim.png" width="100%" /></div>
<div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; paddingright: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/speaker/speaker_pam.png" width="100%" /></div>
<div class="col-lg-3 col-md-3 col-xs-4" style="padding-left: 7px; paddingright: 7px; padding-bottom: 15px;"><img src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/offline+class/speaker/speaker_drtan.png" width="100%" /></
div>
<!-- Speakers END -->
<div class="clearfix"></div>
<!--========================== EVENT INFO
==========================-->
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">Event Info</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" />
<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right:
0px;"><img src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
venue_new.png" width="100%" /></div>
</div>
<p><!--====================== SCHEDULE
========================--></p>
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">Schedule</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" />
<div class="clearfix"></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-02.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-03.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-04.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-05.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-06.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-07.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-08.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-09.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-10.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-11.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-12.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-13.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-14.png" width="100%" /></div>
<div class="col-lg-2 col-md-2 col-xs-4" style="padding-left: 5px; paddingright: 5px; padding-bottom: 5px; min-height: 120px;"><img class="imgresponsive" src="https://s3.amazonaws.com/motherhood.com.my/assets/
images/uploads/PARENTCRAFT+CLASS/2020/landing+page/offline+class/
newdate/date/offlinedate_new-15.png" width="100%" /></div>
</div>
<p><!--================== ITINERARY TITTLE ===============--></
p>
<div class="clearfix"></div>
<div class="col-md-12 col-lg-12 col-xs-12">
<h1 class="parentcraftTitle">Itinerary</h1>
<img class="love-image-small" src="https://s3.amazonaws.com/
motherhood.com.my/assets/images/uploads/PARENTCRAFT+CLASS/2020/
landing+page/online+class/love-03.png" style="width: 35px; margin-top:
-40px;" alt="love" />
<div class="clearfix"></div>
<!-- Offline Itinerary Background -->
<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right: 0px;
background-color: #265e70;">
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">8.00 am - 8.45 am</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Arrivals and Registrations</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">9.00 am - 9.10 am</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Welcome Speech &amp; Ice Breaking</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">9.10 am - 9.45 am</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Pre-natal Pilates</p>
<p class="ItineraryTitle-small">-- Pavithra Chanderan - Pilates Instructor</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">9.50 am - 10.20 am</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Changes In Your Body During and After Pregnancy</
p>
<p class="ItineraryTitle-small">-- Lavinia Chew - Physio-fitness Practitioner</
p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">10.20 am - 10.35 am</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Contraction and Relaxations</p>
<p class="ItineraryTitle-small">-- Lavinia Chew - Physio-fitness Practinioner</
p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">10.40 am - 11.05 am</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Pregnancy Nutrition</p>
<p class="ItineraryTitle-small">-- Jayden Lee - Nutritional Therapist</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">11.35 am - 12.05 pm</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Delivery Process and Post-partum Care</p>
<p class="ItineraryTitle-small">-- Lim Siew Pei - Maternity Nurse</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">12.10 pm - 12.30 pm</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">The Wonders of Umbilical Cord Care</p>
<p class="ItineraryTitle-small">-- Cryocord</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">12.35 pm - 1.30 pm</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Lunch Break</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">1.35 pm - 2.00 pm</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Breastfeeding and Baby Burping</p>
<p class="ItineraryTitle-small">-- Lim Siew Pei - Maternity Nurse</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">2.05 pm - 2.35 pm</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Baby Bath</p>
<p class="ItineraryTitle-small">-- Lim Siew Pei - Maternity Nurse</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">2.40 pm - 3.10 pm</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Sharing of Baby Safety and First Aid Awareness</p>
<p class="ItineraryTitle-small">-- Lim Siew Pei - Maternity Nurse</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">3.30 pm - 3.45 pm</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Mental Preparation and Post-partum Depression
Awareness</p>
<p class="ItineraryTitle-small">-- Pamilia - Clinical Psychologist</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">3.30 pm - 3.45 pm</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Lucky Draw</p>
</div>
</div>
<div class="offlineItineraryRow">
<div class="offlineItineraryTimeBox">
<p class="ItinerarytimeDate">3.45 pm - 3.55 pm</p>
</div>
<div class="offlineItineraryTitleBox">
<p class="ItineraryTitle">Announcement &amp; Closing</p>
</div>
</div>
</div>
<!-- Offline Itinerary Background END -->
<div class="clearfix"></div>
<p><!--====================== CTA BUTTON
==========================--></p>
<div class="col-lg-12&rdquo; style="><a href="../../../campaign-nurengroup/
education/baby-learning/baby-enrichment-classes/parentcraft-class-limitedseats-available.html" target="_blank" rel="noopener"><img class=""
src="https://s3.amazonaws.com/motherhood.com.my/assets/images/uploads/
PARENTCRAFT+CLASS/2020/landing+page/online+class/gif/joinnowbutton.gif"
width="100%" /></a></div>
<p><!--================== TAGLINE =================--></p>
<div class="clearfix"></div>
<div class="col-lg-12 col-md-12" style="padding-left: 0px; padding-right:
0px;"><img class="" src="https://s3.amazonaws.com/motherhood.com.my/
assets/images/uploads/PARENTCRAFT+CLASS/2020/tagline01-pc.png"
width="100%" /></div>
</div>
</div>
<p><a href="#" onclick="topFunction()" id="topBtn" title="Go to top"> <i 
class="fa fa-arrow-up" aria-hidden="true"></i> </a></p>
<!-- Offline Content END -->
<p>
<script>// <![CDATA[
var mybutton = document.getElementById("topBtn");
 // When the user scrolls down 20px from the top of the document, show
the button
 window.onscroll = function() {scrollFunction()};
 function scrollFunction() {
 if (document.body.scrollTop > 20 ||
document.documentElement.scrollTop > 20) {
 mybutton.style.display = "block";
 } else {
 mybutton.style.display = "none";
 }
 }
 // When the user clicks on the button, scroll to the top of the document
 function topFunction() {
 document.body.scrollTop = 0;
 document.documentElement.scrollTop = 0;
 }
 $(".onlineBtn").on("click", function () {
 //$('.online-content').show();
 //$('.offline-content').hide();
 $(".onofflinebutton").removeClass("focus");
 $(".onlineBtn").addClass("focus");
 $(".offline-content").addClass("visuallyhidden");
 $(".online-content").removeClass("visuallyhidden");
 $(window).resize();
 $("img").trigger("unveil");
 });
 $(".offlineBtn").on("click", function () {
 //$('.offline-content').show();
 //$('.online-content').hide();
 $(".onofflinebutton").removeClass("focus");
 $(".offlineBtn").addClass("focus");
 $(".online-content").addClass("visuallyhidden");
 $(".offline-content").removeClass("visuallyhidden");
 $(window).resize();
 $("img").trigger("unveil");
 });
 $(window).load(function () {
 $(".offline-content").addClass("visuallyhidden");
 });
// ]]></script>
</p>