<?php 
// $user = "c0kElaB94";
// $pass = "B3}W[f}x#7OP";

// $host = "10.148.0.7";
// $dbname = "com.kelabmama";

// $conn2 = mysqli_connect($host, $user, $pass,$dbname);

include '../admin2635/dashboard/events/events_db_config.php';

if ($_POST['export']){
	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=report.xls");
}
header("Pragma: no-cache");
header("Expires: 0");
$productList = array();

error_reporting(E_ALL &~E_NOTICE);
ini_set('display_errors', '1');

$kmmlist = array(
"305318"=>"norasian91@gmail.com",
"305321"=>"hawaaa15@yahoo.com",
"305324"=>"cherry060217@gmail.com",
"305330"=>"yanabaizuri95@gmail.com",
"305332"=>"evonnetang888@gmaul.com",
"305334"=>"ngsoo88@hotmail.com",
"305344"=>"sukiqi520@gmail.com",
"305349"=>"farinamielda93@gmail.com",
"305351"=>"kahyee66@yahoo.com",
"305358"=>"xiaoen1105@hotmail.com",
"305360"=>"yinyin.1987@hotmail.com",
"305369"=>"iekashafika98@gmail.com",
"305374"=>"ahen1709@gmail.com",
"305376"=>"haniza_nuraini@yahoo.com",
"305382"=>"azurinshazwa2706@gmail.com",
"305385"=>"yolandacwt@gmail.com",
"305392"=>"ainelmira97@yahoo.com",
"305396"=>"dj.wr725@gmail.com",
"305401"=>"wweiwentee@gmail.com",
"305403"=>"aidasharmilasharmila@gmail.com",
"305420"=>"azlynahmad2911@gmail.com",
"305422"=>"izzahrostam99@gmail.com",
"305430"=>"chaiyen95.yc@gmail.com",
"305437"=>"farizuljohari94@gmail.com",
"305443"=>"lowsh_365@hotmail.com",
"305449"=>"lauseemei@yahoo.com.sg",
"305461"=>"rohayu84@gmail.com",
"305468"=>"mohyising@gmail.com",
"305474"=>"kzee91@hotmail.com",
"305485"=>"fizahfaz94@gmail.com",
"305500"=>"ema.mustapha@yahoo.com",
"305507"=>"asterng1201@gmail.com",
"305510"=>"lohsieyie@gmail.com",
"305513"=>"ruzaininurdin@gmail.com",
"305520"=>"li_yana0492@yahoo.com",
"305523"=>"chloe.cheng92@yahoo.com.my",
"305531"=>"limahyuz@gmail.com",
"305535"=>"loochiouling@gmail.com",
"305540"=>"iris.sia1025@gmail.com",
"305559"=>"pangyuenhong@gmail.com",
"305566"=>"fatenasmira157@gmail.com",
"305581"=>"syafiqamyra@gmail.com",
"305591"=>"norsyadila733@gmail.com",
"305592"=>"yeexuan0520@icloud.com",
"305608"=>"christabelliew91@gmail.com",
"305615"=>"laurenlara55d@gmail.com",
"305616"=>"jahajiha33@gmail.com",
"305619"=>"hui_0910@hotmail.com",
"305626"=>"wanihazwani076@gmail.com",
"305629"=>"windy612829@gmail.com",
"305631"=>"aieyn_1424@yahoo.com.my",
"305633"=>"yy_ong925@yahoo.com",
"305640"=>"sunihassan821104@gmail.com",
"305644"=>"mcw_mok89@yahoo.com",
"305652"=>"limyen36@gmail.com",
"305657"=>"ieka_007@yahoo.com",
"305659"=>"vaness_see@yahoo.com",
"305672"=>"geokcher@gmail.com",
"305681"=>"ezrasyafiza@gmail.com",
"305707"=>"wunderhom@msn.com",
"305714"=>"jensterz1983@hotmail.com",
"305720"=>"nurhalyzatulip17@gmail.com",
"305731"=>"jolynnloke@gmail.com",
"305761"=>"shinafarouk3@gmail.com",
"305763"=>"syifaafauzi@gmail.com",
"305765"=>"nornasukri@yahoo.com",
"305768"=>"ziyyaduwais@gmail.com",
"305770"=>"lele930518@gmail.com",
"305774"=>"atiqahzam@gmail.com",
"305780"=>"sitirahmahabdkadir98@gmail.com",
"305781"=>"zalieykal325@gmail.com",
"305784"=>"anis0610amyra@gmail.com",
"305793"=>"faraharies63@gmail.com",
"305810"=>"weiweiwang42@gmail.com",
"305816"=>"noroslaileroslan@gmail.com",
"305823"=>"fatihahteha1225@gmail.com",
"305826"=>"bazlinn@gmail.com",
"305827"=>"zafreynna24@gemail.com",
"305835"=>"xiaoj900@gmail.com",
"305838"=>"wei8093@gmail.com",
"305856"=>"syamierae@gmail.com",
"305858"=>"zirah6160@gmail.com",
"305870"=>"nurshafishuha96@gmail.com",
"305874"=>"emyddyana@gmail.com",
"305880"=>"hoshiqian0902@gmail.com",
"305894"=>"vstyp8807@icloud.com",
"305895"=>"celenechow0203@gmail.com",
"305898"=>"saidaya_may@yahoo.com",
"305903"=>"alicegan5020@gmail.com",
"305917"=>"diqnieyr@gmailcom",
"305924"=>"omardhiah1993@gmail.com",
"305928"=>"yannlsg87@gmail.com",
"305937"=>"xiiaowendy1998@gmail.com",
"305944"=>"eiyahidayah9@gmail.com",
"305946"=>"m3i_1985@yahoo.com",
"305952"=>"jujaa0303@gmail.com",
"305953"=>"icesueyee@gmail.com",
"305956"=>"nfariha35@gmail.com",
"305958"=>"peychyi_91@hotmail.com",
"305965"=>"weichiiwong@gmail.com",
"305971"=>"nicoleyang2313@gmail.com",
"305981"=>"wnuruladila@yahoo.com",
"305993"=>"jessiehuang96@yahoo.com",
"306000"=>"fionants@gmail.com",
"306004"=>"wanxin0814@gmail.com",
"306006"=>"nhnabilla@gmail.com",
"306008"=>"mimi_yi1107@yahoo.com",
"306012"=>"sammi.5970@gmail.com",
"306014"=>"haryatiabdulhalim86@gmail.com",
"306015"=>"irenekee23@gmail.com",
"306017"=>"tyrabyblos97@gmail.com",
"306026"=>"nuraisyaamirul9696@gmail.com",
"306036"=>"susulaiman83@gmail.com",
"306049"=>"din_munau@gmail.com",
"306051"=>"melodyho95@gmail.com",
"306066"=>"geeemay15@gmail.com",
"306072"=>"carolineq5248@gmail.com",
"306074"=>"yau_93@hotmail.com",
"306083"=>"abdulrashidbinbasir89@gmail.com",
"306094"=>"iejafaezalfaezal@gmail.com",
"306095"=>"heartfilia04@yahoo.com",
"306105"=>"alia.azhan@gmail.com",
"306107"=>"chuckygirlz87@gmail.com",
"306112"=>"mokshuen@gmail.com",
"306113"=>"cctmunierah@yahoo.com.my",
"306128"=>"nurhafizah5532@gmail.com",
"306130"=>"salwani_ahmad@yahoo.com",
"306137"=>"sharon_lhy@hotmail.com",
"306139"=>"nikkichan94@gmail.com",
"306148"=>"ainurnadiahz93@gmail.com",
"306157"=>"shin1987a@gmail.com",
"306166"=>"ainbella1997@yahoo.com",
"306168"=>"vincy982@gmail.com",
"306183"=>"nisafariha557@gmail.com",
"306192"=>"zaty_baby96@yahoo.com",
"306200"=>"yijinlai98@hotmail.com",
"306204"=>"saidatulhanim.md@gmail.com",
"306214"=>"nurshaliza8673@gmail.com",
"306219"=>"candy_shui_tan@hotmail.com",
"306220"=>"elaine86tung@yahoo.com.sg",
"306232"=>"nurhaslya43@gmail.com",
"306237"=>"cherashidsiti@gmail.co",
"306257"=>"aizie.sharipudin@gmail.com",
"306318"=>"elaind0625@gmail.com",
"306329"=>"hafizah91254@gmail.com",
"306333"=>"firaakmal1993@gmail.com",
"306348"=>"isaacchang27@gmail.com",
"306363"=>"yinsh88@hotmail.com",
"306370"=>"bling1221@hotmail.com",
"306380"=>"syarifaheima90@gmail.com",
"306388"=>"jingwoen@gmail.com",
"306409"=>"assimaabaziz2002@gmail.com",
"306417"=>"fongliangjie92@hotmail.com",
"306421"=>"eidazam1509@gmail.com",
"306431"=>"applepink1010@gmail.com",
"306433"=>"safrawazan123@gmail.com",
"306441"=>"sukting9@gmail.com",
"306448"=>"syazwanaainnur21@yahoo.com",
"306460"=>"nurulnadia030998@gmail.com",
"306468"=>"zahrah_ismail90@yahoo.com",
"306471"=>"manjekiena05@gmail.com",
"306472"=>"mopeo_nightto@yahoo.com",
"306525"=>"chiam5260@hotmail.com",
"306530"=>"steffaniekim92@gmail.com",
"306533"=>"nurnaqibahalwee@gmail.com",
"306534"=>"shenyen1118@gmail.com",
"306547"=>"koh_carmen262@hotmail.com",
"306552"=>"ruhui1991@hotmail.com",
"306557"=>"noorrahizanabrahman86@gmail.com",
"306561"=>"ying021616@gmail.com",
"306568"=>"nurfarahinzackrayyan@gmail.com",
"306572"=>"deannahanis98@gmail.com",
"306574"=>"sumanja211@gmail.com",
"306579"=>"jiaee0130@gmail.com",
"306587"=>"speed13_30@yahoo.com.my",
"306592"=>"ijandaud23@gmail.com",
"306594"=>"sayfikasaera@gmail.com",
"306595"=>"dayahwan981008@gmail.com",
"306603"=>"hiewjoan1992@hotmail.com",
"306608"=>"nurulsyazwaniey9@gmail.com",
"306613"=>"faziraroslan96@gmail.com",
"306616"=>"yesdata88@gmail.com",
"306621"=>"edaidris92@gmail.com",
"306624"=>"nursyuhadah5496@gmail.com",
"306630"=>"syahirahhashim7@gmail.com",
"306633"=>"joetiqah657@gmail.com",
"306638"=>"akalilimuhamad@gmail.com",
"306641"=>"lihuanchin73@gmail.com",
"306643"=>"aishahtajudin2392@gmail.con",
"306653"=>"rosezaliavera90@gmail.com",
"306661"=>"ferwinamuin@gmail.com",
"306666"=>"teah83@yahoo.com",
"306670"=>"shafiqa1411@gmail.com",
"306672"=>"serine9668@gmail.com",
"306673"=>"wendy_lwy0717@hotmail.com",
"306685"=>"shingyi1990@gmail.com",
"306696"=>"nurizzahsyazwaniaziz@gmail.com",
"306701"=>"landy_629@hotmail.com",
"306711"=>"voonvoon93@hotmail.com",
"307445"=>"ayienaaaa97@gmail.com",
"307449"=>"appysin1123@gmail.com",
"308146"=>"yuenbee98@gmail.com",
"308156"=>"azwa1308@ymail.com",
"308159"=>"sitizuleha1992@gmail.com",
"308169"=>"syirahfitriah@gmail.com",
"308171"=>"siewzhenlee97@gmail.com",
"308176"=>"johncr5670@gmail.com",
"308178"=>"lazaruzmat@gmail.com",
"308185"=>"mia-tsy@hotmail.com",
"308188"=>"syazakuwan@gmail.com",
"308190"=>"arhsze96@gmail.com",
"308193"=>"azrinnashahrani89@gmail.com",
"308195"=>"sh030265@gmail.com",
"308209"=>"juselin20@gmail.com",
"308227"=>"janet_lean@hotmail.com",
"308233"=>"eyramohd97@gmail.com",
"308234"=>"eynawann85@gmail.com",
"308237"=>"norazirahzakaria5310@gmail.com",
"308250"=>"angiechong3939@yahoo.com.my",
"308287"=>"nooradilaadila@gmail.com",
"308297"=>"nur.syahirah03@gmail.com",
"308298"=>"boomeiyen@hotmail.com",
"308304"=>"norazila83@gmail.com",
"308310"=>"shiceng20@gmail.com",
"308314"=>"jaslinebaby9926@yahoo.com.sg",
"308320"=>"yijun_1992@hotmail.com",
"308326"=>"chesu7903@gmail.com",
"308331"=>"jennifer.danuskha@gmail.com",
"308342"=>"nurzahidahkamal98@gmail.com",
"308346"=>"ainufarhah94@gmail.com",
"308348"=>"syahirashamsudin95@gmail.com",
"308356"=>"azimamohamadtahir@gmail.com",
"308360"=>"dolorlysa79@gmail.com",
"308363"=>"fararara026@gmail.com",
"308365"=>"nikhazirah15@gmail.com",
"308367"=>"husnarani5243@gmail.com",
"308368"=>"adilamelati51@gmail.com",
"308370"=>"chiali1028@yahoo.com",
"308376"=>"k3.a1302044@gmail.com",
"308378"=>"elinyiap1288@gmail.com",
"308382"=>"fatimatuzzahrasiti@yahoo.com",
"308385"=>"sitiazwanimuhamad@gmail.com",
"308387"=>"nasalya2207@gmail.com",
"308393"=>"ainsyahindah2188@gmail.com",
"308395"=>"didisiti81@gmail.com",
"308399"=>"sinling_tan@hotmail.my",
"308415"=>"sabiha.usim@gmail.com",
"308422"=>"nurulshafiqa383@gmail.com",
"308424"=>"fatin_amira4@yahoo.com",
"308427"=>"sri.mulyatiii218@gmail.com",
"308434"=>"yanieyen@yahoo.com",
"308435"=>"eiraanuar3@gmail.com",
"308442"=>"natashaazmy@gmail.com",
"308448"=>"huiyun32082@gmail.com",
"308457"=>"atinayeen94@gmail.com",
"308462"=>"miicky918@gmail.com",
"308465"=>"vivienne.sim@gmail.com",
"308469"=>"jacakor@hotmail.com",
"308471"=>"nazirahzulaikha2000@gmail.com",
"308477"=>"jennynana1997@gmail.com",
"308486"=>"kelly7940134@gmail.com",
"308489"=>"chewxw@gmail.con",
"308495"=>"mizahhumairah4@gmail.com",
"308504"=>"sofea.qirah@gmail.com",
"308505"=>"emilyacomp@hotmail.com",
"308519"=>"shanshan4elken@gmail.com",
"308525"=>"mengow320@gmail.com",
"308527"=>"lbnaar@usm.my",
"308534"=>"syazanahazieyra@gmail.com",
"308536"=>"yuyumiki@gmail.com",
"308541"=>"khairulmunira9009@gmail.com",
"308544"=>"sheanis9204@gmail.com",
"308546"=>"hooihuang92@yahoo.com",
"308549"=>"pennygoh0313@gmail.com",
"308552"=>"cikesya9@gmail.com",
"308554"=>"nfby97@gmail.com",
"308559"=>"chanpeijia44@gmail.com",
"308565"=>"peggy_0925@icloud.com",
"308569"=>"myariena23@gmail.com",
"308570"=>"peng_0110@yahoo.com",
"308575"=>"hanum5006@gmail.com",
"308584"=>"hafizpopo501@yahoo.com.my",
"308586"=>"syakilafatin71@gmail.com",
"308587"=>"hasyanur17@gmail.com",
"308593"=>"sitizainonbintiajak@gmail.com",
"308600"=>"elaine.tan_88@hotmail.com",
"308603"=>"tongling_1222@live.com",
"308605"=>"manjeaina9@gmail.com",
"308610"=>"norazreen0804@gmail.com",
"308612"=>"efaahusna@yahoo.com",
"308617"=>"nurussyafiekah@gmail.com",
"308618"=>"sathivani9999@gmail.com",
"308620"=>"rachelkoh87@gmail.com",
"308625"=>"elianeboh96@gmail.com",
"308627"=>"chewhsia_ng@hotmail.com",
"308629"=>"maggietanmeekin78@gmail.com",
"308633"=>"behewen@gmail.com",
"308635"=>"missnurashikin@yahoo.com",
"308637"=>"qamashikin96@gmail.com",
"308644"=>"zulaikahbaharom@gmail.com",
"308647"=>"fatinsyakira107@gmail.com",
"308650"=>"albeelee9393@gmail.com",
"308652"=>"yasmin9004@gmail.com",
"308657"=>"cyfeng_0801@hotmail.com",
"308658"=>"eiralan94@gmail.com",
"308661"=>"nur.mai.wani29@gmail.com",
"308663"=>"geniesoh@icloud.com",
"308668"=>"ivytan1333@gmail.com",
"308671"=>"idayu.nurzawani@gmail.com",
"308674"=>"sallysu860409@yahoo.com",
"308677"=>"ashleyngiam0126@icloud.com",
"308680"=>"shaasyazwan@gmail.com",
"308682"=>"nurkhairuinisa@yahoo.com.my",
"308693"=>"miloice916@hotmail.com",
"308695"=>"tashadrm.1a@gmail.com",
"308697"=>"nurhazirah346@gmail.com",
"308698"=>"wenwen.kee88@gmail.com",
"308700"=>"syafiqahfaizul76@gmail.com",
"308706"=>"yiteng91@hotmail.com",
"308719"=>"sweetiepie9313@gmail.com",
"308721"=>"boey9220@gmail.com",
"308722"=>"kaiyin626@gmail.com",
"308729"=>"zwlow90@hotmail.com",
"308731"=>"aneessaaghniya@gmail.com",
"308737"=>"maykee.0519@gmail.com",
"308748"=>"khairulshammahmud@gmail.com",
"308751"=>"sandrasow@ymail.com",
"308752"=>"esther-ping@hotmail.com",
"308755"=>"fizahrazali01@gmail.com",
"308756"=>"annaierah1990@gmail.com",
"308760"=>"sim3857@gmail.com",
"308769"=>"mas.linda@yahoo.com",
"308770"=>"esrinasyahira@gmail.com",
"308771"=>"tanchailing031103@gmail.com",
"308773"=>"irenetiong0162@hotmail.com",
"308775"=>"ayuesachiko9276@gmail.com",
"308781"=>"afizaaffandi5336@gmail.com",
"308785"=>"nuriszaatieynorazli@icloud.com",
"308786"=>"wmkwan91@gmail.com",
"308791"=>"emataha84@gmail.com",
"308793"=>"blossomcherry892@gmail.com",
"308795"=>"irnnairziana1996@gmail.com",
"308802"=>"yuki_ymy@hotmail.com",
"308813"=>"fatinnurizzaty@gmail.com",
"308820"=>"cheongsimmei@gmail.com",
"308822"=>"atiqahzahirah@icloud.com",
"308825"=>"siti5009athirah@gmail.com",
"308828"=>"yuyinyin8406@gmail.com",
"308834"=>"ahsiew1998@gmail.com",
"308836"=>"green_apple1987@yahoo.com.my",
"308841"=>"enny980515@gmail.com",
"308847"=>"nurzaiti39@gmail.com",
"308854"=>"shian.427@hotmail.com",
"308856"=>"nurrieyna987@gmail.com",
"308857"=>"hanisorfina958@gmail.com",
"308864"=>"irisxin94@gmail.com",
"308866"=>"sany110099@gmail.com",
"308872"=>"elannie0721@gmail.com",
"308875"=>"therinachua@gmail.com",
"308878"=>"yushana.1819@gmail.com",
"308880"=>"ally-940409@hotmail.com",
"308881"=>"farzanasalihah97@gmail.com",
"308882"=>"beeyue7141@hotmail.com",
"308883"=>"hemamadkauwasa@yahoo.com",
"308886"=>"joannanatasha@gmail.com",
"308887"=>"nursyahfiqah6770@gmail.com",
"308891"=>"erynrosly@gmail.com",
"308893"=>"vaanni08@gmail.com",
"308895"=>"shahidahraslan@gmail.com",
"308896"=>"dikanini@gmail.com",
"308903"=>"elainediong@hotmail.com",
"308908"=>"joline1024@gmail.com",
"308919"=>"husnasyafie98@gmail.com",
"308926"=>"ainanajeehaa96@icloud.com",
"308933"=>"nrljannah17@gmail.com",
"308935"=>"firaamustafaa3@gmail.com",
"308941"=>"sitinasuha1234567@gmail.com",
"308945"=>"coolhanyun99@gmail.com",
"308949"=>"jw.lolzzz@hotmail.com",
"308954"=>"herlinderjeets@gmail.com",
"308969"=>"cikapplee_9@icloud.com",
"308971"=>"kaylie1017@hotmail.com",
"308973"=>"lavenderpurple.94@gmail.con",
"308974"=>"ainazuni@gmail.com",
"308985"=>"asyadahari@yahoo.com",
"308987"=>"nurhazirah7321@gmail.com",
"308989"=>"hidayahyusop025014@gmail.com",
"308995"=>"nguikoeyuen@gmail.com",
"309005"=>"biella_n91@yahoo.com",
"309011"=>"nurshazleenshari97@gmail.com",
"309013"=>"nursyazwanirahmat@icloud.com",
"309017"=>"nrshmaa@icloud.com",
"309019"=>"athirah0527@gmail.com",
"309021"=>"nuraqilahhamzah_luna93@yahoo.com",
"309023"=>"fazilah.azmi97@gmail.com",
"309034"=>"yushimaroo_92@yahoo.com",
"309036"=>"sitifatimahnasir28@gmail.com",
"309042"=>"nganhanhtran1998@yahoo.com",
"309044"=>"kokmaywoon@yahoo.com",
"309047"=>"ainapizvengers@gmail.com",
"309049"=>"yingy0919@gmail.com",
"309053"=>"aiza_jasmin@yahoo.com",
"309061"=>"asyifa1995@gmail.com",
"309063"=>"ctnorainiyahya@gmail.com",
"309065"=>"nunwauroo49@gmail.com",
"309068"=>"lizafirdaus7818@gmail.com",
"309070"=>"ainzainol1515@gmail.com",
"309076"=>"syera181197@gmail.com",
"309084"=>"naydaniellah5428@gmail.com",
"309087"=>"mikolingling227@gmail.com",
"309104"=>"yikfungsiow@gmail.com",
"309106"=>"nsyafika@rocketmail.com.my",
"309114"=>"ngyiek123@gmail.com",
"309118"=>"fenrukee@gmail.com",
"309125"=>"xuan316@hotmail.com",
"309139"=>"katelove_u3@hotmail.com",
"309141"=>"adisa_81@hotmail.com",
"309142"=>"nickyneo1998@gmail.com",
"309146"=>"en_feng_0309@hotmail.com",
"309147"=>"tgt.tee@gmail.com",
"309151"=>"syahratunnaeemah23@gmail.com",
"309154"=>"yanayanielz314@gmail.com",
"309156"=>"zahirahrosle1@gmail.com",
"309163"=>"monicamonicaatin@gmail.com",
"309173"=>"shermine823@gmail.com",
"309180"=>"raniamikayla2@gmail.com",
"309182"=>"nurizzatieazizul98@gmail.com",
"309189"=>"nurulnuratikahika@gmail.com",
"309195"=>"koayzhixin0815@gmail.com",
"309198"=>"ishiera93@yahoo.com",
"309200"=>"rusheni91@gmail.com",
"309201"=>"alyy0406@gmail.com",
"309207"=>"nuradlina.omar@gmail.com",
"309208"=>"nickyann613.na@gmail.com",
"309215"=>"libna95@gmail.com",
"309218"=>"qilahairi@gmail.com",
"309220"=>"ph118111@gmail.com",
"309221"=>"joeyfongkwanmun@gmail.com",
"309228"=>"norsihatimohdhanafi@gmail.com",
"309231"=>"hambaallah1392@gmail.com",
"309232"=>"shahirahbintishokri@gmail.com",
"309233"=>"azimahazai@gmail.com",
"309236"=>"chrohayu@yahoo.com",
"309244"=>"lovelygirl_ni@hotmail.com",
"309247"=>"ctftimh98@gmail.com",
"309251"=>"ziezanahmed@gmail.com",
"309257"=>"kengchinchin@gmail.com",
"309261"=>"limlokyeen@gmail.com",
"309271"=>"cahaya.simerah@gmail.com",
"309278"=>"yinshean11@gmail.com",
"309286"=>"dynahdina89.mcc1@gmail.com",
"309289"=>"ira98mirul@gmail.com",
"309294"=>"eyradanial98@gmail.com",
"309300"=>"noraziah5814@gmail.com",
"309302"=>"mlchiah@hotmail.com",
"309305"=>"limjiashin@hotmail.com",
"309311"=>"mzakrim299@yahoo.com",
"309314"=>"nurfarahainjalil@gmail.com",
"309318"=>"choongys0822@gmail.com",
"309325"=>"noorazlina470@gmail.com",
"309327"=>"hueheerrain@gmail.com",
"309329"=>"elainebaby891125@hotmail.com",
"309330"=>"chin_patty@hotmail.com",
"309332"=>"faridah8823@gmail.com",
"309334"=>"snurdinajie@gmail.com",
"309338"=>"teng950322@hotmail.com",
"309343"=>"james.shirley@ymail.com",
"309358"=>"lynettexlc@gmail.com",
"309360"=>"ambassador898@gmail.com",
"309364"=>"nazirahshafie1@gmail.com",
"309366"=>"wanieyyyyy98@gmail.com",
"309368"=>"ongyinping@gmail.com",
"309370"=>"zameelabanu715@gmail.com",
"309381"=>"mainisha98@gmail.com",
"309382"=>"noridahabdullahchee82@gmail.com",
"309385"=>"jaclyn.sirm@gmail.com",
"309391"=>"norhanimazmi65@gmail.com",
"309393"=>"farahyantif@gmail.com",
"309398"=>"wongyikyan@gmail.com",
"309399"=>"ynnenrasid@gmail.com",
"309405"=>"liyun_0519@hotmail.com",
"309409"=>"cra.teoh@gmail.com",
"309411"=>"feisanng@yahoo.com.my",
"309415"=>"fatinfitrianis@gmail.com",
"309417"=>"nutty_bobey@yahoo.com",
"309429"=>"shujuanlim88@gmail.com",
"309433"=>"vivien860212@gmail.com",
"309436"=>"shuhayla302@gmail.com",
"309447"=>"mdgallery@ymail.com",
"309448"=>"siew_siah@hotmail.com",
"309451"=>"hamizahaien1111@gmail.com",
"309461"=>"syik.samad@gmail.com",
"309471"=>"chewfanglim@gmail.com",
"309475"=>"farahsyafika015@gmail.com",
"309480"=>"nurazrena180@yahoo.com",
"309486"=>"angelteng3618@gmail.com",
"309493"=>"004barcelona004@gmail.com",
"309495"=>"june.nge@delfimarketing.com",
"309499"=>"tahyenchen523@gmail.com",
"309504"=>"caddietyh1986@gmail.com",
"309506"=>"sitinorainiasman@icloud.com",
"309513"=>"jess_miko92@hotmail.com",
"309515"=>"ieypah_sagitarius@yahoo.com",
"309516"=>"wendymaxx0379@gmail.com",
"309520"=>"na5845360@gmail.com",
"309522"=>"murfarinaaseri@gmail.com",
"309533"=>"natasyarizal73@gmail.com",
"309539"=>"nizamliana7@gamail.com",
"309541"=>"maykiew0224@gmail.com",
"309544"=>"qiqilui0617@gmail.com",
"309548"=>"noramalina@gmail.com.my",
"309555"=>"nur.syuhada@icloud.com",
"309565"=>"thelittleone0103@gmail.com",
"309567"=>"chih_thing@yahoo.com",
"309568"=>"alliswell1108@gmail.com",
"309575"=>"snoopy_wei1030@hotmail.com",
"309578"=>"mar_zie2006@yahoo.com",
"309580"=>"wannurhanin1750@gmail.com",
"309585"=>"lying8063_@hotmail.com",
"309587"=>"jenneevenblue@hotmail.com",
"309588"=>"intanflora94@gmail.com",
"309589"=>"zulaihazainalabidin94@gmail.com",
"309594"=>"nishaerra@gmail.com",
"309601"=>"lihfong95@gmail.com",
"309603"=>"noraini682019@gmail.com",
"309607"=>"natasyarizalwork@gmail.com",
"309614"=>"sunchye_02071989@hotmail.com",
"309616"=>"huihui_1221@hotmail.com",
"309618"=>"hyurnzhaidar12@gmail.com",
"309620"=>"al_shifa81@yahoo.com.my",
"309627"=>"zhixuan9190@gmail.com",
"309631"=>"jiharazak@gmail.com",
"309644"=>"wani91_marzuki@ymail.com",
"309646"=>"jinwen277@gmail.com",
"309649"=>"ssehabakar@gmail.com",
"309650"=>"tengsiawhoui@yahoo.com",
"309656"=>"lee_leng114@hotmail.com",
"309675"=>"nuwda92@gmail.com",
"309676"=>"yannazakaria94@gmail.com",
"309680"=>"shanmugihsharan@gmail.com",
"309687"=>"shaizathulakhma@gmail.com",
"309697"=>"lawrya1313@gmail.com",
"309702"=>"suriani_e4@yahoo.com",
"309705"=>"gohchoicheng@gmail.com",
"309710"=>"nurul@naimrahim.com",
"309713"=>"nralieyfah@gmail.com",
"309731"=>"amyyew1212@yahoo.com",
"309737"=>"fadhilahjalil1996@gmail.com",
"309743"=>"dladydei@yahoo.com",
"309757"=>"mimimie73@gmail.com",
"309761"=>"zilamalek91@gmail.com",
"309768"=>"trishatan@ymail.com",
"309770"=>"hafizahmustaffer@gmail.com",
"309787"=>"jessie_phor@yahoo.com",
"309790"=>"zarifah_alassan@yahoo.com",
"309828"=>"michellelim0516@gmail.com",
"309832"=>"crystalstar8602@yahoo.com",
"309839"=>"asmasalleh92@gmail.com",
"309851"=>"iffahamaninazamri@gmail.com",
"309856"=>"jcjames2202@gmail.com",
"309860"=>"mandyylo0406@gmail.com",
"309874"=>"atynnazihah@gmail.com",
"309881"=>"speky6259@gmail.com",
"309893"=>"nurshafiqah429@gmail.com",
"309901"=>"rohanimohd81@yahoo.com.my",
"309903"=>"ninadiah0808@gmail.com",
"309907"=>"carine0503@gmail.com",
"309915"=>"juanitayap@gmail.com",
"309921"=>"rhapsody_ying90@hotmail.com",
"309926"=>"huichenkhc@gmail.com",
"309931"=>"vannesskuek94@gmail.com",
"309941"=>"salmi_anas@yahoo.com.my",
"309943"=>"natashasahannuwi@gmail.com",
"309944"=>"peysia88@gmail.com",
"309947"=>"beehong05@gmail.com",
"309949"=>"denjenefer@gmail.com",
"309951"=>"hajarmohdannuar@gmail.com",
"309957"=>"miayap@hotmail.com",
"309959"=>"aziechenko@gmail.com",
"309962"=>"nadyadarwin@gmail.com",
"309967"=>"christine990226@gmail.com",
"309969"=>"lailanafisah97@gmail.com",
"309975"=>"fannysygg@gmail.com",
"309977"=>"teranoorfardzilla@gmail.com",
"309978"=>"fendyana80@gmail.com",
"309981"=>"jenykiong93@gmail.com",
"309985"=>"ummibadariah1997@gmail.com",
"309989"=>"faraayanaa@gmail.com",
"309991"=>"ying2795@gmail.com",
);

$kmmlist2 = array();
$count = 0;
foreach($kmmlist as $subcriberid => $email)
{
	++$count;
	// $kmmlist2[] =  trim("'" . htmlentities($val) . "'");
	
	
	if($count <= 100)
	{
		$date = '2021-08-01 ';
	}
	elseif($count > 200 && $count <= 300)
	{
		$date = '2021-08-02 ';
	}
	elseif($count > 300 && $count <= 400)
	{
		$date = '2021-08-03 ';
	}
	elseif($count > 400 && $count <= 500)
	{
		$date = '2021-08-04 ';
	}
	else
	{
		$date = '2021-08-05 ';
	}
	
	$sql = "SELECT 
			subscriber_id,
			subscriber_created_at,
			subscriber_updated_at,
			subscriber_event_id
		FROM
			 ps_events_subscriber a
		WHERE
			1 = 1 AND subscriber_event_id = 100
			AND newEmail = '" .  $email . "' AND subscriber_id = '" . $subcriberid . "' LIMIT 1";
	
	$result = $conn->query($sql);
	
	
	// while ($r = $result->fetch_row()) {
	while ($r = mysqli_fetch_row($result)) {
		foreach ($r as $indx => $kolonne) {
		
			if($indx == 0){
				$subscriber_id = $kolonne;
			}
			
			if($indx == 1)
			{
				$subscriber_created 	 = $kolonne;
				$subscriber_created_time = date('H:i:s', strtotime($kolonne));
				$newsubscriber_created   = $date . $subscriber_created_time;
			}
			
			if($indx == 2)
			{
				$subscriber_updated      = $kolonne;
				$subscriber_updated_time = date('H:i:s', strtotime($kolonne));
				$newsubscriber_update    = $date . $subscriber_updated_time;
			}
			
			if($indx == 3)
			{
				$subscriber_eventid = $kolonne;
				
			}
		}
	}
	
	echo "subscriber_id = " . $subscriber_id . " subscriber_eventid = " . $subscriber_eventid . " newsubscriber_created = " . $newsubscriber_created . " newsubscriber_update" . $newsubscriber_update . "<br/>";
	if($subscriber_id > 0 && $subscriber_eventid > 0 && $newsubscriber_created != '0000-00-00 00:00:00' && $newsubscriber_update != '0000-00-00 00:00:00')
	{
		$sqlUpdate   = "UPDATE  ps_events_subscriber SET subscriber_created_at = '" . $newsubscriber_created . "', subscriber_updated_at = '" . $newsubscriber_update . "' WHERE `subscriber_id` = " . $subscriber_id . " AND `subscriber_event_id` = " .  $subscriber_eventid . " LIMIT 1";
		echo $sqlUpdate . "<br><br>";
		$queryUpdate = $conn->query($sqlUpdate);
		echo $subscriber_id . " --- updated";
		echo $sqlUpdate . "<br><br>";
		print_r($queryUpdate);
	}
}

// $string_email = '';
// $string_email = implode(",", $kmmlist2);

// $sql = "SELECT 
		// subscriber_id, subscriber_created_at, subscriber_updated_at, subscriber_event_id, newFirstName, newLastName,  subscriber_question4
		// FROM ps_events_subscriber a 
		// WHERE 1=1 AND subscriber_event_id=115 
		// AND newEmail IN (" . $string_email . ")";

// $queryResult = $conn->query($sql);

// $count = 0;
// while ($r = mysqli_fetch_row($queryResult)) {
	// $count++;

	// foreach ($r as $indx => $kolonne) {
	
		// if($indx == 0){
			// $subscriber_id = $kolonne;
			
		// }
		
		// if($indx == 1)
		// {
			// $subscriber_created 	 = $kolonne;
			// $subscriber_created_time = date('H:i:s', strtotime($kolonne));
			// $newsubscriber_created   = '2021-03-01 ' . $subscriber_created_time;
		// }
		
		// if($indx == 2)
		// {
			// $subscriber_updated      = $kolonne;
			// $subscriber_updated_time = date('H:i:s', strtotime($kolonne));
			// $newsubscriber_update    = '2021-03-01 ' . $subscriber_updated_time;
		// }
		
		// if($indx == 3)
		// {
			// $subscriber_eventid = $kolonne;
			
		// }
	// }
	
	// if($subscriber_id > 0 && $subscriber_eventid > 0 && $newsubscriber_created != '0000-00-00 00:00:00' && $newsubscriber_update != '0000-00-00 00:00:00')
	// {
		// $sqlUpdate   = "UPDATE ps_events_subscriber SET subscriber_created_at = '" . $newsubscriber_created . "', subscriber_updated_at = '" . $newsubscriber_update . "' WHERE `subscriber_id` = " . $subscriber_id . " AND `subscriber_event_id` = " .  $subscriber_eventid . " LIMIT 1";
		// $queryUpdate = $conn->query($sqlUpdate);
		
		// echo $subscriber_id . " --- updated";
		// print_r($queryUpdate);
	// }
// }

$result->close();
mysqli_close($conn);

?>