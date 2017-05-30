<?php 
//Get Sercer URL
//$getfull_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
//Info
$getCompany='4 Brothers Ceilings Inc';
$getDomain='www.4brothersceilingsinc.com';
$getAddress='5891 Kay Dr, Norcross, GA 30093';
$getPhone='(678) 278-5363';
$getPhoneRef='tel:6782785363';
$getPhone2='';
$getPhoneRef2='';
$getSEOPhone='+1'.'678-278-5363';
$getMail='elvinramirez64@yahoo.com';
$getMailRef='mailto:elvinramirez64@yahoo.com';
$getMail2='elvinramirez64@gmail.com';
$getMailRef2='mailto:elvinramirez64@gmail.com';
$getServices='Residential & Commercial Services!';
$getPayment='Payment: Checks';
$getExperience='12 years of experience';
$getSchedule='Monday to Friday, from 7:00 am to 5:00 pm';
$getBilingual='We are bilingual';
$getEstimates='We offer free estimates';
$getCover='We cover 30 miles around local area';
$getfacebook='';
$gettwitter='';
$getgoogleplus='';
$getbbb='';
$gethomeadvisor='';
$getmanta='';
$getyelp='';
$getbuildzoom='';
$gethouzz='';
$getyelp='';
$getyellowpages='';
$getGoogleMap='';
$getYouTube='';
$getPhrase1='';
$getPhrase2='';
$getPhrase3='';
$getPhrase4='';
$getPhrase5='';
$getDescription='';
$getHome='';
$getAbout='';
$getWhy = '';
$getMission = '';
$getVision = '';

/**************************************************
*var_export() obtiene información estructurada sobre la variable dada. 
*Es similar a la función var_dump() con una excepción: 
*la representación devuelta es código PHP válido.
***************************************************/
$varPHPCompany = var_export($getCompany, true);
$varPHPDomain = var_export($getDomain, true);
$varPHPAddress = var_export($getAddress, true);
$varPHPPhone= var_export($getPhone, true);
$varPHPPhoneRef= var_export($getPhoneRef, true);
$varPHPPhone2= var_export($getPhone2, true);
$varPHPPhoneRef2= var_export($getPhoneRef2, true);
$varPHPSEOPhone= var_export($getSEOPhone, true);
$varPHPMail= var_export($getMail, true);
$varPHPMailRef= var_export($getMailRef, true);
$varPHPMail2= var_export($getMail2, true);
$varPHPMailRef2= var_export($getMailRef2, true);
$varPHPServices= var_export($getServices, true);
$varPHPPayment= var_export($getPayment, true);
$varPHPExperience= var_export($getExperience, true);
$varPHPSchedule= var_export($getSchedule, true);
$varPHPBilingual= var_export($getBilingual, true);
$varPHPEstimates= var_export($getEstimates, true);
$varPHPCover= var_export($getCover, true);
$varPHPfacebook= var_export($getfacebook, true);
$varPHPtwitter= var_export($gettwitter, true);
$varPHPgoogleplus= var_export($getgoogleplus, true);
$varPHPbbb= var_export($getbbb, true);
$varPHPhomeadvisor= var_export($gethomeadvisor, true);
$varPHPmanta= var_export($getmanta, true);
$varPHPyelp= var_export($getyelp, true);
$varPHPbuildzoom= var_export($getbuildzoom, true);
$varPHPhouzz= var_export($gethouzz, true);
$varPHPyelp= var_export($getyelp, true);
$varPHPyellowpages= var_export($getyellowpages, true);
$varPHPGoogleMap= var_export($getGoogleMap, true);
$varPHPYouTube= var_export($getYouTube, true);
$varPHPPhrase1= var_export($getPhrase1, true);
$varPHPPhrase2= var_export($getPhrase2, true);
$varPHPPhrase3= var_export($getPhrase3, true);
$varPHPPhrase4= var_export($getPhrase4, true);
$varPHPPhrase5= var_export($getPhrase5, true);
$varPHPDescription= var_export($getDescription, true);
$varPHPHome= var_export($getHome, true);
$varPHPAbout= var_export($getAbout, true);
$varPHPWhy =  var_export($getWhy, true);
$varPHPMission =  var_export($getMission, true);
$varPHPVision =  var_export($getVision, true);

$var = "<?php
\$Company = $getCompany;
\$Domain = $varPHPDomain;
\$Address = $varPHPAddress;
\$Phone = $varPHPPhone;
\$facebook= $varPHPfacebook;
\$twitter= $varPHPtwitter;
\$googleplus= $varPHPgoogleplus;
\$bbb= $varPHPbbb;
\$homeadvisor= $varPHPhomeadvisor;
\$manta= $varPHPmanta;
\$yelp= $varPHPyelp;
\$buildzoom= $varPHPbuildzoom;
\$houzz= $varPHPhouzz;
\$yelp= $varPHPyelp;
\$yellowpages= $varPHPyellowpages;
\$GoogleMap= $varPHPGoogleMap;
\$YouTube= $varPHPYouTube;
\$Phrase1= $varPHPPhrase1;
\$Phrase2= $varPHPPhrase2;
\$Phrase3= $varPHPPhrase3;
\$Phrase4= $varPHPPhrase4;
\$Phrase5= $varPHPPhrase5;
\$Description= $varPHPDescription;
\$Home= $varPHPHome;
\$About= $varPHPAbout;
\$Why =  $varPHPWhy;
\$Mission =  $varPHPMission;
\$Vision =  $varPHPVision;
?>";
file_put_contents('templates/stability/php/text.php', $var);
?>