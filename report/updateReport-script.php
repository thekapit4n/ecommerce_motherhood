<?php 
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
	"250334"=>"nurulanisha411@gmail.com",
	"250335"=>"sa8565425@gmail.com",
	"250339"=>"loveberry_nicky@hotmail.com",
	"250346"=>"haih_c90@hotmail.com",
	"250353"=>"anizafazil3@gmail.com",
	"250362"=>"raven729c@gmail.com",
	"250366"=>"maychai28@gmail.com",
	"250368"=>"ytnrl_07@yahoo.com",
	"250383"=>"nurshuhadacheomar2@gmail.com",
	"250391"=>"far.farhana702@gmail.com",
	"250392"=>"kaykar44@gmail.com",
	"250394"=>"alienprawn@gmail.com",
	"250396"=>"andol9555@gmail.com",
	"250414"=>"evelynchw8895@gmail.com",
	"250417"=>"suteng_87@hotmail.com",
	"250423"=>"noraqidahothman@gmail.com",
	"250428"=>"linxzilim801212@gmail.com",
	"250435"=>"rafidahfida112@gmail.com",
	"250441"=>"kelisa5096@gmail.com",
	"250450"=>"mahmudahhashim@gmail.com",
	"250471"=>"norida.johari@yahoo.com",
	"250478"=>"ivyyow69@gmail.com",
	"250483"=>"zwei4017@gmail.com",
	"250500"=>"darlingwan42@yahoo.com",
	"250501"=>"yogiyogibear90@hotmail.com",
	"250517"=>"aidilladeeraadam@gmail.com",
	"250530"=>"ainafira92@gmail.com",
	"250534"=>"adamzulfariz@gmail.com",
	"250537"=>"azurainyaa@gmail.com",
	"250548"=>"audreyphang2914@gmail.com",
	"250549"=>"joannelai0115@gmail.com",
	"250550"=>"cahayakirah@gmail.com",
	"250566"=>"nurahadiahmohdood11@gmail.com",
	"250568"=>"sunsun_89@hotmail.com",
	"250573"=>"wannurasmaa8@gmail.com",
	"250585"=>"shahirahbahar17@gmail.com",
	"250614"=>"norsyafika239@gmail.com",
	"250620"=>"elykanor35@gmail.com",
	"250636"=>"cahayabmh@gmail.com",
	"250640"=>"syifaina1201@gmail.com",
	"250647"=>"ladybalqis90@gmail.com",
	"250653"=>"ewen4267@gmail.com",
	"250669"=>"annisafiqahatarmidzi@gmail.com",
	"250729"=>"wanyee510@hotmail.com",
	"250734"=>"masitah_mokhtar@yahoo.com",
	"250745"=>"nr.lydiaa@gmail.com",
	"250747"=>"farhanasyafawati@yahoo.com",
	"250751"=>"nurulshahidahisham@gmail.com",
	"250766"=>"abdullahaisyah665@gmail.com",
	"250782"=>"zabinab009@gmail.com",
	"250786"=>"norain.samuri@gmail.com",
	"250810"=>"pieqa217@yahoo.com",
	"250815"=>"syifaasolehah17@gmail.com",
	"250818"=>"peck6661@gmail.com",
	"250834"=>"ngkooihiang@gmail.com",
	"250850"=>"yun_wings22@hotmail.com",
	"250861"=>"ivylee900901@hotmail.com",
	"250865"=>"xiiaoyan1118@gmail.com",
	"250882"=>"yierine@yahoo.com",
	"250887"=>"sheffamohamad@gmail.com",
	"250892"=>"cherylchew_91@hotmail.com",
	"250894"=>"evone.saw@gmail.com",
	"250901"=>"mamasyaurah123@gmail.com",
	"250911"=>"yianru@yahoo.com",
	"250919"=>"nursalasiah8805@gmail.com",
	"250921"=>"norizaali353@gmail.com",
	"250939"=>"peixin_ng86@hotmail.com",
	"250944"=>"joey31chan@gmail.com",
	"250958"=>"nirawatijouhari@gmail.com",
	"250964"=>"aidazaini94@gmail.com1",
	"250973"=>"wuliaoha963@hotmail.com",
	"250990"=>"ziying930311@gmail.com",
	"251008"=>"adibahfatin2394@yahoo.com",
	"251047"=>"anneyen@outlook.my",
	"251062"=>"girl_hanny@yahoo.com",
	"251075"=>"maizatulakma2309@gmail.com",
	"251087"=>"seline9968@hotmail.com",
	"251088"=>"atiqahnabila09@gmail.com",
	"251095"=>"amanina.nh95651@gmail.com",
	"251100"=>"ezzaty930@gmail.com",
	"251106"=>"choo@skk.com.my",
	"251124"=>"natasharasidi00@gmail.com",
	"251128"=>"zalikhahashim@icloud.com",
	"251159"=>"sayangara2507@yahoo.com",
	"251161"=>"liesamaliesa@gmail.com",
	"251185"=>"ericaerrydeh@gmail.com",
	"251202"=>"pooh7263@gmail.com",
	"251218"=>"jhu1072@yahoo.com.my",
	"251220"=>"heroivyivan@gmail.com",
	"251240"=>"nurul210591@gmail.com",
	"251260"=>"www.faizalfoundationsdnbhd@gmail.com",
	"251281"=>"winnie_920318@hotmail.com",
	"251286"=>"hasiah_zani@yahoo.com",
	"251288"=>"estherinena_gie@yahoo.com.my",
	"251323"=>"ziyi940201@hotmail.com",
	"251331"=>"nurul1abdullah@yahoo.com",
	"251340"=>"sabrinasaliman@hotmail.com",
	"251346"=>"dayahh678@gmial.com",
	"251351"=>"janewong890408@gmail.com",
	"251404"=>"emily_yee24@hotmail.com",
	"251422"=>"yuching_94@hotmail.com",
	"251446"=>"atiqahhhy@gmail.com",
	"251447"=>"lifang_yap@hotmail.com",
	"251449"=>"maslindanor45@gmail.com",
	"251462"=>"sheenafina87@gmail.com",
	"251466"=>"vieelvina@gmail.com",
	"251476"=>"mohdrosniaziz@gmail.com",
	"251493"=>"nanikartina.afendi@gmail.com",
	"251500"=>"kusyaliza95@gmail.com",
	"251515"=>"elainely.pp@gmail.com",
	"251567"=>"jihanmaughni770@gmail.com",
	"251590"=>"irene1988ng@gmail.com",
	"251604"=>"lady.miraz88@gmail.com",
	"251631"=>"nuaprincess7@gmail.com",
	"251654"=>"nurnadzirah96@gmail.com",
	"251663"=>"ruknoe@gmail.com",
	"251667"=>"raineyan9084@gmail.com",
	"251672"=>"mahyudinmusheedi@gmail.com",
	"251717"=>"fazulmeerapolarbear@gmail.com",
	"251727"=>"huinee87@gmail.com",
	"251730"=>"neyzamuyalin@yahoo.com",
	"251733"=>"adeliaarell27@gmail.com",
	"251749"=>"jeremyth87@gmail.com",
	"251764"=>"nuratifah61@gmail.com",
	"251767"=>"yasmin_mynn@yahoo.com",
	"251770"=>"rosshinabdlatif@gmail.com",
	"251781"=>"ftnnblh1234@gmail.com",
	"251782"=>"shjssnzns@gmail.com",
	"251799"=>"mama_minz07@yahoo.com",
	"251801"=>"nurulalianadira@yahoo.com",
	"251806"=>"sitiaisya8582@gmail.com",
	"251808"=>"nazmirul08@gmail.com",
	"251812"=>"ginnpsc@yahoo.com",
	"251848"=>"huiiee@live.com",
	"251864"=>"meane_mea@yahoo.com",
	"251873"=>"bbycha20@gmail.com",
	"251883"=>"szeyeeyeow@gmail.com",
	"251887"=>"alicepei128@gmail.com",
	"251891"=>"arianaukm@gmail.com",
	"251902"=>"zoebeatrycze@gmail.com",
	"251914"=>"lingsimmoi@gmail.com",
	"251920"=>"meiee326@gmail.com",
	"251922"=>"rainbow-boutique@hotmail.com",
	"251931"=>"miki-chika@hotmail.com",
	"251932"=>"shafirahshafie@hotmail.com",
	"251944"=>"sitizawanizaini@gmail.com",
	"251953"=>"nfattywho@gmail.com",
	"251954"=>"sure4cheal@gmail.com",
	"251955"=>"nurulaida_cute9328@yahoo.com",
	"251960"=>"norsyahidahishak2016@gmail.com",
	"251965"=>"samrinahussain20@gamil.com",
	"251968"=>"shariffah8780@gmail.com",
	"251985"=>"nurulpuad89@gmail.com",
	"251993"=>"paihui427@gmail.com",
	"251996"=>"alfiee.qharliff1711@gmail.com",
	"251997"=>"haryanihassan4@gmail.com",
	"252004"=>"nanasharina8@gmail.com",
	"252007"=>"akifahaliff@gmail.com",
	"252021"=>"tyraqaisarah@gmail.com",
	"252028"=>"asmidar21@gmail.com",
	"252040"=>"eyrashah91@gmail.com",
	"252049"=>"milaaamalik@gmail.com",
	"252061"=>"rajanorzarina7@gmail.com",
	"252068"=>"siti.rohidayu@gmail.com",
	"252072"=>"jaslene_eo@hotmail.com",
	"252089"=>"shuxin7371@gmail.com",
	"252092"=>"shafekaezlyn2@gmail.com",
	"252114"=>"jenny_chentee@hotmail.com",
	"252116"=>"jess.jaetravel@gmail.com",
	"252123"=>"jenyin860416@yahoo.com",
	"252153"=>"kityee_tang0727@hotmail.com",
	"252173"=>"yunyi1212@hotmail.com",
	"252180"=>"nnabillahh@gmail.com",
	"252193"=>"izzatul_shahira93@hotmail.com",
	"252198"=>"nurumirahbintiali@yahoo.com.my",
	"252220"=>"ibucool86@gmail.com",
	"252222"=>"fazlinayusof483@gmail.com",
	"252233"=>"mariea_matesa@yahoo.com",
	"252245"=>"aretin91.ff@gmail.com",
	"252284"=>"zaliaoyuyu6060@gmail.com",
	"252304"=>"bluesky3560@hotmail.com",
	"252313"=>"nurzatie015@gmail.com",
	"252319"=>"sudiramsaliahcia@yahoo.com",
	"252354"=>"amalinamuhamad93@yahoo.com",
	"252358"=>"nurwahidahyazaid@gmail.com",
	"252385"=>"kwaty81@yahoo.com",
	"252390"=>"ainijannah88@gmail.com",
	"252398"=>"fatinnaemi08@gmail.com",
	"252408"=>"miminordin2110@gmail.com",
	"252413"=>"shelley.90@hotmail.com",
	"252451"=>"luv_stargal@yahoo.com.sg",
	"252456"=>"eshalamyra@gmail.com",
	"252458"=>"vkhee95@gmail.com",
	"252473"=>"voonmean@gmail.com",
	"252478"=>"peishantan85@gmail.com",
	"252480"=>"mlee54270@gmail.com",
	"252509"=>"amalina_shahli@yahoo.com",
	"252518"=>"quine_house@hotmail.com",
	"252519"=>"fionnefl@hotmail.com",
	"252527"=>"sassilass414@outlook.com",
	"252534"=>"harwani1991@gmail.com",
	"252540"=>"misseida62@gmail.com",
	"252542"=>"iemarose5270@gmail.com",
	"252547"=>"adrinatan@gmail.com",
	"252555"=>"zatiyaya5648@gmail.com",
	"252565"=>"mizshuda@gmail.com",
	"252571"=>"mahirahainaa95@gmail.com",
	"252576"=>"fiefa9102@yahoo.com",
	"252579"=>"ginniekhoo@yahoo.com",
	"252588"=>"mabelle_wong@hotmail.com",
	"252621"=>"lady_monalizsa@yahoo.com",
	"252626"=>"cityangle88@hotmail.com",
	"252630"=>"anamedivieon91@gmail.com",
	"252637"=>"aina.faqihah1996@gmail.com",
	"252641"=>"azzarosli@yahoo.com",
	"252644"=>"xiaowei_0805@hotmail.com",
	"252648"=>"aiffa_2803@yahoo.com",
	"252684"=>"melissachan2262@gmail.com",
	"252692"=>"kuan_ng_88@hotmail.com",
	"252701"=>"zakiahmdisa88@gmail.com",
	"252706"=>"kongsheaujo@gmail.com",
	"252711"=>"edynisa87@gmail.com",
	"252714"=>"boeylim87@hotmail.com",
	"252733"=>"ainanabilah04@gmail.com",
	"252739"=>"khairelanuarft88@gmail.com",
	"252745"=>"sitinurullubnabintimadkamal@gmail.com",
	"252750"=>"kieyla.ismail@gmail.com",
	"252758"=>"nadia.nzakaria@gmail.com",
	"252760"=>"farahaz89@gmail.com",
	"252763"=>"jessz88@hotmail.com",
	"252770"=>"biiyaoyao@hotmail.com",
	"252774"=>"esther.tay92@yahoo.com",
	"252784"=>"mcmug_wws@yahoo.com",
	"252817"=>"grace_tang83@yahoo.com",
	"252842"=>"sukiqi520@gmail.com",
	"252859"=>"sukichin520@gmail.com",
	"252881"=>"zaaraa1336@gmail.com",
	"252887"=>"nshahirah@y7mail.com",
	"252919"=>"bbyzureen@gmail.com",
	"252939"=>"youngpororo2019@gmail.com",
	"252944"=>"thanilassakathevan@yahoo.com",
	"252952"=>"khadijah890212@gmail.com",
	"252954"=>"nialurun85@yahoo.com",
	"252966"=>"jessicasfchong@gmail.com",
	"252968"=>"liseiviviana913@gmail.com",
	"253019"=>"joanne_ma@hotmail.my",
	"253048"=>"pei840927@gmail.com",
	"253066"=>"ainsahira11@gmail.com",
	"253070"=>"ninani.wong@gmail.com",
	"253073"=>"yeeching1320@gmail.com",
	"253095"=>"zatystarlite@gmail.com",
	"253126"=>"petpet_candy@hotmail.com",
	"253129"=>"syaminaida98@gmail.com",
	"253132"=>"tenglv1990@hotmail.com",
	"253135"=>"syidainani@gmail.com",
	"253148"=>"suguna_1205@yahoo.com",
	"253177"=>"farazila88@gmail.com",
	"253194"=>"nooraniza.abdsamad@gmail.com",
	"253208"=>"aidaazura.rahim@gmail.com",
	"253230"=>"ezahfaizal8487@gmail.com",
	"253234"=>"chan_harley@ymail.com",
	"253241"=>"koshvani@yahoo.com",
	"253257"=>"sheejia0301@gmail.com",
	"253263"=>"noorafzaniidris@gmail.com",
	"253300"=>"y.c.l.8888@hotmail.com",
	"253302"=>"jynnlooitv@gmail.com",
	"253303"=>"munney2099@gmail.com",
	"253335"=>"yinilim@hotmail.com",
	"253361"=>"viwian21@hotmail.com",
	"253367"=>"pnyasmin03@gmail.com",
	"253375"=>"nizra.syafini@yahoo.com",
	"253381"=>"fatinfairuzi12@gmail.com",
	"253386"=>"atikahaminah293@gmail.com",
	"253413"=>"stella890622@gmail.com",
	"253451"=>"adiellah140@gmail.com",
	"253470"=>"bibi3506@gmail.com",
	"253495"=>"noratikah.shamsuri94@gmail.com",
	"253505"=>"farrahniz@yahoo.com",
	"253518"=>"hannahzulkarnain23@gmail.com",
	"253535"=>"stephiniereyes1998@gmail.com",
	"253561"=>"maisarahnazri08@gmail.com",
	"253564"=>"amirahmazli27@gmail.com",
	"253582"=>"aidazaini94@gmail.com",
	"253587"=>"aminrmc08@yahoo.com",
	"253592"=>"nadiahmohamad93@gmail.com",
	"253615"=>"syeira92@yahoo.com",
	"253635"=>"barkatnisha.bn97@gmail.com",
	"253639"=>"xiao_niu520@live.com",
	"253647"=>"caueyin00@gmail.com",
	"253670"=>"echakygpnya@yahoo.com",
	"253716"=>"evon3921@gmail.com",
	"253745"=>"isma1991.ii@gmail.com",
	"253763"=>"nzsheera635@gmail.com",
	"253768"=>"ieqa2806@gmail.com",
	"253770"=>"kit.pc@hotmail.com",
	"253775"=>"khairunnisams@gmail.com",
	"253804"=>"candy_strawberry5@hotmail.com",
	"253811"=>"perryluvlady@yahoo.com",
	"253825"=>"wsnh11@gmail.com",
	"253827"=>"drcarol1991@gmail.com",
	"253837"=>"anglelylimshuching@gmail.com",
	"253839"=>"mindykang123@gmail.com",
	"253854"=>"michellewct75@gmail.com",
	"253861"=>"eqazainudin@gmail.com",
	"253870"=>"zuraizazainal@gmail.com",
	"253903"=>"maliahdanny@gmail.com",
	"253907"=>"afiqahaisyah804@gmail.com",
	"253923"=>"nina.yusrina97@gmail.com",
	"253929"=>"shakiramat@gmail.com",
	"253941"=>"projectb89@gmail.com",
	"253953"=>"nicolelkm785@yahoo.com.sg",
	"254653"=>"tina@gmail.com",
	"254659"=>"anis.s.basri@gmail.com",
	"254664"=>"misznuri@gmail.com",
	"254669"=>"zeila0712@gmail.com",
	"254688"=>"nurhanisaqilah.az@gmail.com",
	"254689"=>"farahaieda94@gmail.com",
	"254701"=>"clarmen_kit@hotmail.com",
	"254703"=>"asdfsdjfa@gmail.com",
	"254707"=>"ctwoglobal09@gmail.com",
	"254720"=>"asdfjads@gmail.com",
	"254729"=>"abdu35217@gmail.com",
	"254738"=>"daintlylilgirl@yahoo.com",
	"254748"=>"alynshah84@gmail.com",
	"254757"=>"xiaoying_orange9@hotmail.com",
	"254796"=>"kumuthatigger@gmail.com",
	"254811"=>"kellylim868@gmail.com",
	"254818"=>"syidah92.ss@gmail.com",
	"254826"=>"myamy19@gmail.com",
	"254868"=>"jwhy512@outlook.com",
	"254914"=>"emylin_55@yahoo.com",
	"254935"=>"tiengneit@gmail.com",
	"254945"=>"farahhanan.ahmad@gmail.com",
	"254954"=>"hajar6622@yahoo.com",
	"254968"=>"jolynnchua.28@hotmail.com",
	"254972"=>"ccw_18@hotmail.com",
	"254977"=>"zulaiqhazulqarnain@gmail.com",
	"254988"=>"253riana@gmail.com",
	"255008"=>"jasmin970519@gmail.com",
	"255010"=>"angelynwongchinchei@gmail.com",
	"255020"=>"jayden.tan92@gmail.com",
	"255021"=>"shaylee0608@yahoo.com",
	"255031"=>"suzielarazak@gmail.com",
	"255101"=>"liyanajulian@gmail.com",
	"255110"=>"poorani_90@yahoo.com",
	"255120"=>"masdahmawi@gmail.com",
	"255122"=>"tengkufatinnadzirah8@gmail.com",
	"255138"=>"alice_low88@hotmail.com",
	"255146"=>"izyawati@gmail.com",
	"255154"=>"sugasha09@gmail.com",
	"255157"=>"kartini.mustakim@gmail.com",
	"255203"=>"hazimahnizar27@yahoo.com",
	"255222"=>"imanfaroha80@gmail.com",
	"255226"=>"sherlleynau9406@gmail.com",
	"255266"=>"norashikinmb90@gmail.com",
	"255286"=>"aizannuraihan@gmail.com",
	"255290"=>"gww_325@hotmail.com",
	"255305"=>"aslinaazib@gmail.com",
	"255317"=>"rabiatuladawiyahalwi90@gmail.com",
	"255324"=>"kerintan1005@gmail.com",
	"255336"=>"sayangawaks130@gmail.com",
	"255348"=>"sitisyahirainani90@gmail.com",
	"255354"=>"nshaeera@gmail.com",
	"255359"=>"najwaasyukri@gmail.com",
	"255374"=>"mohdsahrilismail@gmail.com",
	"255382"=>"niharafnia30@gmail.com",
	"255384"=>"intannurhanissa95@gmail.com",
	"255397"=>"mekayu93@yahoo.com",
	"255424"=>"natikah2020@gmail.com",
	"255432"=>"ainarahman3@gmail.com",
	"255442"=>"nurulzahri@icloud.com",
	"255457"=>"arifsaifullah05@gmail.com",
	"255459"=>"zakiahaziz0@gmail.com",
	"255469"=>"nurulafiqah2712@gmail.com",
	"255498"=>"syifaina12011994@gmail.com",
	"255549"=>"ps_33_33@hotmail.com",
	"255567"=>"sitinorfaezahahmadrizuwah@gmail.com",
	"255573"=>"nurliana804@gmail.com",
	"255595"=>"sizuranas@gmail.com",
	"255618"=>"anieyzhassan58@gmail.com",
	"255633"=>"norsyzanazaher@gmail.com",
	"255716"=>"tarmidzisaliza@gmail.com",
	"255732"=>"adrianfarish2812@gmail.com",
	"255778"=>"nuradawiah54@gmail.com",
	"255831"=>"vivian_chiam@hotmail.com",
	"255871"=>"nurzaimizainalabidin@gmail.com",
	"255927"=>"ilham.fscc@gmail.com",
	"255940"=>"norhana.mohamad14@gmail.com",
	"255954"=>"lynlyner95@rocketmail.com",
	"255988"=>"kaichyi1521@gmail.com",
	"256010"=>"yeohhonglee@gmail.com",
	"256051"=>"winchssy@gmail.com",
	"256082"=>"arilmnso8285@gmail.com",
	"256097"=>"crystal.michael88@gmail.com",
	"256114"=>"drycc@hotmail.com",
	"256137"=>"azlya.azly@gmail.com",
	"256178"=>"jiahui010323@gmail.com",
	"256188"=>"shirlykhiew21@gmail.com",
	"256204"=>"dylamuslan@gmail.com",
	"256212"=>"adira981122@gmail.com",
	"256241"=>"pijahalims92@gmail.com",
	"256266"=>"nezdiani81@gmail.com",
	"256269"=>"farhanalahuddin96@gmail.com",
	"256326"=>"nabiladianah@gmail.com",
	"256329"=>"zulaika12591@gmail.com",
	"256343"=>"dayah270198@gmail.com",
	"256396"=>"nurainbtibrahim@ymail.com",
	"256457"=>"fiezabahari93@gmail.com",
	"256464"=>"penny970322@gmail.com",
	"256467"=>"ccyee_1208@hotmail.com",
	"256473"=>"jytan91@live.com",
	"256476"=>"intannursyahirah@ymail.com",
	"256494"=>"qiqa87@rocketmail.com",
	"256600"=>"miraadzlia@yahoo.com",
	"256616"=>"ida.shahida96@yahoo.com",
	"256649"=>"vertrine.yap@hotmail.com",
	"256675"=>"weisuncheah@gmail.com",
	"256848"=>"fiontan8989@gmail.com",
	"256888"=>"sukie0721@hotmail.co.uk",
	"256916"=>"cikmyrazakaria94@gmail.com",
	"256971"=>"basyirahbakhtiar@yahoo.com",
	"257118"=>"caroltanglk@gmail.com",
	"257275"=>"asydanial88@gmail.com",
	"257287"=>"matrahedkhairunnisa@yahoo.com",
	"257296"=>"ezayazam@gmail.com",
	"257347"=>"ivy_86@hotmail.com",
	"257375"=>"amylia1911@gmail.com",
	"257395"=>"ekaothman6504@gmail.com",
	"257397"=>"rosellishaaa@gmail.com",
	"257490"=>"tyhamukti@gmail.com",
	"257495"=>"dayangmariana90@gmail.com",
	"257550"=>"yongyenling.yyl@gmail.com",
	"257555"=>"chinemma0@gmail.com",
	"257581"=>"joeyyhoi@gmail.com",
	"257599"=>"emilyeng9808@gmail.com",
	"257725"=>"atiawang427@gmail.com",
	"257736"=>"rebecca_lingling88@hotmail.com",
	"257956"=>"belle_tbs_0424@hotmail.com",
	"257997"=>"tohsling.4877@gmail.com",
	"258046"=>"meiping66@gmail.com",
	"258173"=>"qurratu2312@yahoo.com",
	"258227"=>"najiehanasir@gmail.com",
	"258361"=>"novera92@hotmail.com",
	"258377"=>"senny5972@gmail.com",
	"258398"=>"shinwoankee@gmail.com",
	"258458"=>"haniirdina755@gmail.com",
	"258524"=>"peiting.peiting@gmail.com",
	"258593"=>"ninathedins@gmail.com",
	"258608"=>"sayakakishopping@gmail.com",
	"258616"=>"shin990@hotmail.com",
	"258696"=>"sarrabiajid@gmail.com",
	"258727"=>"tjyong88@hotmail.com",
	"258796"=>"kellyliklee1234@gmail.com",
	"258879"=>"luvfortunia@gmail.com",
	"259035"=>"hafraharfah@yahoo.con",
	"259129"=>"michelle_waiwai@hotmail.com",
	"259259"=>"sharifahshakinah491@gmail.com",
	"259263"=>"farraizzati75@gmail.com",
	"259284"=>"ainarafli01@gmail.com",
	"259318"=>"selicia.mun@gmail.com",
	"259355"=>"iyllienaz@yahoo.com",
	"259373"=>"firah88@yahoo.com",
	"259376"=>"joyceleongyf@yahoo.com",
	"259385"=>"rachelng7496@gmail.com",
	"259390"=>"zatinnabila@yahoo.com",
	"259394"=>"loveshoppingparadise@yahoo.com",
	"259402"=>"caryn_karyi87@hotmail.com",
	"259406"=>"veena17_87@yahoo.com",
	"259412"=>"urrmilaranie@gmail.com",
	"259424"=>"wancheet@gmail.com",
	"259437"=>"jiabinxiao81@gmail.com",
	"259460"=>"anis_anisa93@yahoo.com",
	"259468"=>"betliewy@hotmail.com",
	"259470"=>"ainarafli01@gmaill.com",
	"259475"=>"sky70745@yahoo.com",
	"259476"=>"ganmeiyue93@gmail.com",
	"259479"=>"laureene_tan@hotmail.com",
	"259487"=>"holla5678@gmail.com",
	"259489"=>"yeeshuangkp@gmail.com",
	"259511"=>"syjiaang@gmail.com",
	"259523"=>"adasy_edayu@yahoo.com",
	"259537"=>"peiteng1012@gmail.com",
	"259560"=>"odahtaims@gmail.com",
	"259579"=>"yik_fong@hotmail.com",
	"259581"=>"eleanhau@gmail.com",
	"259589"=>"xiikecikciputt@gmail.com",
	"259597"=>"elvinewe@live.com",
	"259620"=>"faraazman21@gmail.com",
	"259634"=>"aida.abskarim@gmail.com",
	"259641"=>"aida.abdkarim@gmail.com",
	"259669"=>"elainebang@hotmail.com",
	"259684"=>"waiteng.lou@gmail.com",
	"259686"=>"umiara59@gmail.com",
	"259706"=>"hamzahismail91@yahoo.com",
	"259710"=>"pearlylim10@gmail.com",
	"259713"=>"intansuhada@gmail.com",
	"259720"=>"siewyen87@live.com",
	"259726"=>"ladyiera2013@gmail.com",
	"259738"=>"shfkafiona@gmail.com",
	"259744"=>"evonne1007@live.com",
	"259747"=>"clkjoice@gmail.com",
	"259752"=>"sinmun_1991@hotmail.com",
	"259801"=>"hazeyweather@hotmail.com",
	"259805"=>"syadede920113@gmail.com",
	"259814"=>"shikinaris@gmail.com",
	"259817"=>"puaneswaree@gmail.com",
	"259821"=>"yingfong88@gmail.com",
	"259827"=>"nurulatikahjali@gmail.com",
	"259830"=>"misshajaromar@gmail.com.my",
	"259848"=>"mayazmi99@icloud.com",
	"259854"=>"joyestelle11@gmail.com",
	"259862"=>"vvthepooh@gmail.com",
	"259871"=>"rosma19wati88@gmail",
	"259875"=>"low_sn@yahoo.com",

);

$kmmlist2 = array();
$count = 0;
foreach($kmmlist as $subcriberid => $email)
{
	++$count;
	// $kmmlist2[] =  trim("'" . htmlentities($val) . "'");
	
	$sql = "SELECT 
			subscriber_id, subscriber_created_at, subscriber_updated_at, subscriber_event_id, newFirstName, newLastName,  subscriber_question4
			FROM ps_events_subscriber a 
			WHERE 1=1 AND subscriber_event_id=100 
			AND newEmail = '" .  $email . "' AND subscriber_id = '" . $subcriberid . "' LIMIT 1";
	$result = $conn->query($sql);
	
	
	while ($r = $result->fetch_row()) {
		foreach ($r as $indx => $kolonne) {
		
			if($indx == 0){
				$subscriber_id = $kolonne;
				
			}
			
			
			if($indx == 1)
			{
				$subscriber_created 	 = $kolonne;
				$subscriber_created_time = date('H:i:s', strtotime($kolonne));
				$newsubscriber_created   = '2021-04-01 ' . $subscriber_created_time;
			}
			
			if($indx == 2)
			{
				$subscriber_updated      = $kolonne;
				$subscriber_updated_time = date('H:i:s', strtotime($kolonne));
				$newsubscriber_update    = '2021-04-01 ' . $subscriber_updated_time;
			}
			
			
			if($indx == 3)
			{
				$subscriber_eventid = $kolonne;
				
			}
		}
	}
	
	if($subscriber_id > 0 && $subscriber_eventid > 0 && $newsubscriber_created != '0000-00-00 00:00:00' && $newsubscriber_update != '0000-00-00 00:00:00')
	{
		$sqlUpdate   = "UPDATE ps_events_subscriber SET subscriber_created_at = '" . $newsubscriber_created . "', subscriber_updated_at = '" . $newsubscriber_update . "' WHERE `subscriber_id` = " . $subscriber_id . " AND `subscriber_event_id` = " .  $subscriber_eventid . " LIMIT 1";
		// echo $sqlUpdate . "<br>";
		// $queryUpdate = $conn->query($sqlUpdate);
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