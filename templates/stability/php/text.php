<?php
//Get Sercer URL
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
//Info
	$Company='';
	$Domain='';
	$Address='';
	//No dejar pleca al final del dominio
	//Para SEO
		//$Locality='Locality';
		//$Region='Region';
		//$StreetAddress='Address';
	$Phone='';
	$PhoneRef='';
	$Phone2='';
	$PhoneRef2='';
	$SEOPhone='';//Formato Obligatorio
	$Mail='';
	$Mail2='';
	$Services='';//
	$Payment='';
	$Experience='';//
	$Schedule='';
	$Bilingual='';//
	$Estimates='';//
	$Cover='';//

	$facebook='';
	$twitter='';
	$googleplus='';
	$bbb='';
	$homeadvisor=''; 
	$manta='';
	$yelp='';
	$buildzoom='';
	$houzz='';
	$yelp=''; 
	$yellowpages='';
	$GoogleMap='';
	$YouTube='';
//Phrases
	$Phrase1='';
	$Phrase2='';
	$Phrase3='';
	$Phrase4='';
	$Phrase5='';

//Home - Mission, etc.
	$Description='';
	$Home='';
	$About='';
	$Why='';
	$Mission='';
	$Vision='';
//Services
	$servicesMatrix = array();

//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About) > 10){$ExAbout=substr($About, 0,246).'...'.'</p>';};
	if (strlen($About) > 10){$Ex2About=substr($About, 0,263).'...'.'</p>';};//Si es Footer2 dejarlo en 350
//Testimonials
	$Date='<i class="fa fa-calendar t_blue-3"></i>&nbsp;<strong>Date:</strong>&nbsp;';
	$Review='<i class="fa fa-user t_blue-3"></i>&nbsp;<strong>Review By:</strong>&nbsp;';
	$Project='<i class="fa fa-wrench t_blue-3"></i>&nbsp;<strong>Project:</strong>&nbsp;';
	$Comment='<i class="fa fa-comment t_blue-3"></i>&nbsp;';
	//$Testimonial = array("date", "review", "project","comment");
	$Testimonial1= array("date", "review", "project","comment");
	$Testimonial2= array("date", "review", "project","comment");
//Landing Pages	
	$LN1="landing page name";
	$LD1=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	";
//Services Landing Page List
	$ListServices1= array("landing service", "landing service", "landing service","landing service");
	$ListServices2= array("landing service", "landing service", "landing service","landing service");
	$ListServices3= array("landing service", "landing service", "landing service","landing service");

//Blog
	$BlogEntryT1="Blog Entry Title";
	$BlogEntryD1=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	";
	$BlogDate1="1/Jan/2016";
	$BlogAuthor1="Author Name";

	$BlogEntryT2="Blog Entry Title";
	$BlogEntryD2=
	"
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sed nisl sit amet tincidunt. Nullam urna neque, posuere vel nunc id, condimentum vestibulum leo. Donec placerat pulvinar elementum. Sed congue auctor nisi, et auctor risus dapibus in. Suspendisse consectetur eget leo eu imperdiet. Mauris.</p>
	";
	$BlogDate2="1/Jan/2016";
	$BlogAuthor2="Author Name";

//BlogEcxerpt
	if (strlen($BlogEntryD1) > 10){$ExBlogEntryD1=substr($BlogEntryD1, 0,250).'...';};
	if (strlen($BlogEntryD2) > 10){$ExBlogEntryD2=substr($BlogEntryD2, 0,160).'...';};
?>