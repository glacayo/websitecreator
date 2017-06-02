<?php 
require_once('function.php');
//Get Sercer URL
//$getfull_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
//Template que se va utilizar
$template = $_POST['template'];
	

//Funcion para crear la carpeta del website creado, comprimirlo en un zip, descargalo, y eliminar el directorio temporal y el zip
function write_info($template){
	//si no se selecciono un tema indicar que la variable esta vacia
	if (empty($template)) {
		echo "Seleccionar un template";
	}else{
		//preparando los archivos del template que se utilizaran
		$src = 'templates/'.$template.'/'; // template que se selecciono
		$dst = 'download/'.$template.'/'; // destino donde se copiara en todo caso sera la carpeta dowload
		//http://php.net/manual/es/function.copy.php
		//Funcion para crear el directorio
		function recurse_copy($src,$dst) { 
		    $dir = opendir($src); 
		    @mkdir($dst); 
		    while(false !== ( $file = readdir($dir)) ) { 
		        if (( $file != '.' ) && ( $file != '..' )) { 
		            if ( is_dir($src . '/' . $file) ) { 
		                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
		            } 
		            else { 
		                copy($src . '/' . $file,$dst . '/' . $file); 
		            } 
		        } 
		    } 
		    closedir($dir); 
		}
		recurse_copy($src,$dst);// listo, se ha creado una copia de los archivos que se utilizaran

		// escribiremos sobre el archivo text.php
		$dirTemplate = 'download/'.$template.'/php/text.php';// varible constante
		$getFileName = isset($_POST['fileName']) ? $_POST['fileName'] : 'tupaginaweb';
		//obtenemos las varibles que se necesitan
		$getCompany= isset($_POST['nameCompany']) ? $_POST['nameCompany'] : 'Nombre de la Comania';
		$getDomain= isset($_POST['domain']) ? $_POST['domain'] : 'http://www.example.com/';
		$getAddress= isset($_POST['address']) ? $_POST['address'] : 'Address';
		//*********************************************************************
		//formatiando los numero 1
		$number = isset($_POST['phone']) ? $_POST['phone'] : '000-000-0020';
		$getPhone = number_phone_management($number)[1];
		$getPhoneRef = number_phone_management($number)[0];
		$getSEOPhone = number_phone_management($number)[2];
		//formatiando los numero 2
		$number= isset($_POST['phone2']) ? $_POST['phone2'] : '111-111-1111';
		$getPhone2 = number_phone_management($number)[1];
		$getPhoneRef2 = number_phone_management($number)[0];
		//*********************************************************************
		$getMail= isset($_POST['email']) ? $_POST['email'] : 'example@domain.com';
		$getMail2= isset($_POST['email2']) ? $_POST['email2'] : 'example2@domain.com';
		$getServices= isset($_POST['phraseServices']) ? $_POST['phraseServices'] : '';
		$getPayment= isset($_POST['payment']) ? $_POST['payment'] : '';
		$getExperience= isset($_POST['experience']) ? $_POST['experience'] : '';
		$getSchedule= isset($_POST['schedule']) ? $_POST['schedule'] : '';
		$getBilingual= isset($_POST['bilingual']) ? $_POST['bilingual'] : '';
		$getEstimates= isset($_POST['estimates']) ? $_POST['estimates'] : '';
		$getCover= isset($_POST['coverArea']) ? $_POST['coverArea'] : '';
		$getfacebook= isset($_POST['facebook']) ? $_POST['facebook'] : '';
		$gettwitter= isset($_POST['twitter']) ? $_POST['twitter'] : '';
		$getgoogleplus= isset($_POST['gplus']) ? $_POST['gplus'] : '';
		$getbbb= isset($_POST['bbb']) ? $_POST['bbb'] : '';
		$gethomeadvisor= isset($_POST['homeAdvisor']) ? $_POST['homeAdvisor'] : '';
		$getmanta= isset($_POST['manta']) ? $_POST['manta'] : '';
		$getyelp= isset($_POST['yelp']) ? $_POST['yelp'] : '';
		$getbuildzoom= isset($_POST['buildZooom']) ? $_POST['buildZooom'] : '';
		$gethouzz= isset($_POST['houzz']) ? $_POST['houzz'] : '';
		$getyellowpages= isset($_POST['yellowPages']) ? $_POST['yellowPages'] : '';
		$getGoogleMap= isset($_POST['googleMap']) ? $_POST['googleMap'] : '';
		$getYouTube= isset($_POST['youtube']) ? $_POST['youtube'] : '';
		$getPhrase1= isset($_POST['phrase1']) ? $_POST['phrase1'] : '';
		$getPhrase2= isset($_POST['phrase2']) ? $_POST['phrase2'] : '';
		$getPhrase3= isset($_POST['phrase3']) ? $_POST['phrase3'] : '';
		$getPhrase4= isset($_POST['phrase4']) ? $_POST['phrase4'] : '';
		$getPhrase5= isset($_POST['phrase5']) ? $_POST['phrase5'] : '';
		$getDescription= isset($_POST['description']) ? $_POST['description'] : '';
		$getHome=isset($_POST['home']) ? $_POST['home'] : '';
		$getAbout=isset($_POST['about']) ? $_POST['about'] : '';
		$getWhy = isset($_POST['whyChooseUse']) ? $_POST['whyChooseUse'] : '';
		$getMission = isset($_POST['mission']) ? $_POST['mission'] : '';
		$getVision = isset($_POST['vision']) ? $_POST['vision'] : '';
		$getCantidadServicios = isset($_POST['cantidadServicios']) ? $_POST['cantidadServicios'] : '';
		$getColor1 = isset($_POST['color1']) ? $_POST['color1'] : '';
		$getColor2 = isset($_POST['color2']) ? $_POST['color2'] : '';
		$getColor3 = isset($_POST['color3']) ? $_POST['color3'] : '';

		/**** Inicio de la Funcion de los Logos y Favicon ****/
			$ruta="download/$template/img/"; //Carpeta en la que subiremos los Logos
			$logo_footer="logo-upload";
			$logo_footer="logo-footer-upload";
			$logo_footer="favicon-upload";
			$uploadfile_temporal=$_FILES['logo-upload']['tmp_name']; 
			$uploadfile_nombre=$ruta.$_FILES['logo-upload']['name'];
			$nombrelogo="logo";
			$uploadfooter_temporal=$_FILES['logo-footer-upload']['tmp_name']; 
			$uploadfooter_nombre=$ruta.$_FILES['logo-footer-upload']['name'];
			$nombrelogo_footer="logo-footer";
			$uploadfavicon_temporal=$_FILES['favicon-upload']['tmp_name']; 
			$uploadfavicon_nombre=$ruta.$_FILES['favicon-upload']['name'];
			$nombrelogo="favicon";
			if (is_uploaded_file($uploadfile_temporal))
			{ 
				if($template=="stability"){move_uploaded_file($uploadfile_temporal, 'download/'.$template.'/images/logo.png');}/*
				elseif($template=="dart"){move_uploaded_file($uploadfile_temporal, 'download/'.$template.'/images/logo.png');}
				elseif($template=="prikitiw"){move_uploaded_file($uploadfile_temporal, 'download/'.$template.'/img/logo.png');}
				elseif($template=="solarise"){move_uploaded_file($uploadfile_temporal, 'download/'.$template.'/img/logo.png');}*/
				
				if (is_uploaded_file($uploadfooter_temporal))
					{ 
						if($template=="stability"){move_uploaded_file($uploadfooter_temporal, 'download/'.$template.'/images/logo-footer.png');}/*
						elseif($template=="dart"){move_uploaded_file($uploadfooter_temporal, 'download/'.$template.'/images/logo-footer.png');}
						elseif($template=="prikitiw"){move_uploaded_file($uploadfooter_temporal, 'download/'.$template.'/img/logo-footer.png');}
						elseif($template=="solarise"){move_uploaded_file($uploadfooter_temporal, 'download/'.$template.'/img/logo-footer.png');}*/

						if (is_uploaded_file($uploadfavicon_temporal))
							{ 
								if($template=="stability"){move_uploaded_file($uploadfavicon_temporal, 'download/'.$template.'/images/favicon.png');}/*
								elseif($template=="dart"){move_uploaded_file($uploadfavicon_temporal, 'download/'.$template.'/images/favicon.png');}
								elseif($template=="prikitiw"){move_uploaded_file($uploadfavicon_temporal, 'download/'.$template.'/img/favicon.png');}
								elseif($template=="solarise"){move_uploaded_file($uploadfavicon_temporal, 'download/'.$template.'/img/favicon.png');}*/
							}
					}
			}
			else { echo "Error al Subir el Archivo"; } 
			
		/**** Fin de la Funcion de los Logos y Favicon ****/

		/**************************************************
		*var_export() obtiene información estructurada sobre la variable dada. 
		*Es similar a la función var_dump() con una excepción: 
		*la representación devuelta es código PHP válido.
		***************************************************/
		$varPHPCompany = var_export($getCompany, true);
		$varPHPDomain = var_export($getDomain, true);
		$varPHPAddress = var_export($getAddress, true);
		$varPHPPhone= var_export($getPhone, true);
		$varPHPPhoneRef = var_export($getPhoneRef, true);
		$varPHPSEOPhone = var_export($getSEOPhone, true);
		$varPHPPhone2= var_export($getPhone2, true);
		$varPHPPhoneRef2 = var_export($getPhoneRef2, true);
		$varPHPMail= var_export($getMail, true);
		$varPHPMail2= var_export($getMail2, true);
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
		$varPHPColor1 =  var_export($getColor1, true);
		$varPHPColor2 =  var_export($getColor2, true);
		$varPHPColor3 =  var_export($getColor3, true);
		//Creamos las varibles que se escribiran en el archivo text
		$var = "<?php
		\$Company = $varPHPCompany;
		\$Domain = $varPHPDomain;
		\$Address = $varPHPAddress;
		\$Phone = $varPHPPhone;
		\$PhoneRef = $varPHPPhoneRef;
		\$SEOPhone= $varPHPSEOPhone;
		\$Phone2= $varPHPPhone2;
		\$PhoneRef2 = $varPHPPhoneRef2;
		\$Mail= $varPHPMail;
		\$Mail2=$varPHPMail2 ;
		\$Services= $varPHPServices;
		\$Payment= $varPHPPayment;
		\$Experience= $varPHPExperience;
		\$Schedule= $varPHPSchedule;
		\$Bilingual= $varPHPBilingual;
		\$Estimates= $varPHPEstimates;
		\$Cover= $varPHPCover;
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
		\$Color1 = $varPHPColor1;
		\$Color2 = $varPHPColor2;
		\$Color3 = $varPHPColor3;
		?>";
		file_put_contents($dirTemplate, $var);// se ha escrito toda la informacion que se necesita en el archivo text

		//Funcion para comprimir los archivos en un ZIP
		function comprimir($dst, $zip_salida, $handle = false, $recursivo = false){
			 /* Declara el handle del objeto */
			 if(!$handle){
				  $handle = new ZipArchive;
				  if ($handle->open($zip_salida, ZipArchive::CREATE) === false){
				   return false; /* Imposible crear el archivo ZIP */
				  }
			 }
			 /* Procesa directorio */
			 if(is_dir($dst)){
				  /* Aseguramos que sea un directorio sin carácteres corruptos */
				  $dst = dirname($dst.'/arch.ext'); 
				  $handle->addEmptyDir($dst); /* Agrega el directorio comprimido */
				  foreach(glob($dst.'/*') as $url){ /* Procesa cada directorio o archivo dentro de el */
				   comprimir($url, $zip_salida, $handle, true); /* Comprime el subdirectorio o archivo */
			  }

			 /* Procesa archivo */
			 }else{
			  	$handle->addFile($dst);
			 }

			 /* Finaliza el ZIP si no se está ejecutando una acción recursiva en progreso */
			 if(!$recursivo){
			  	$handle->close();
			 }

			 return true; /* Retorno satisfactorio */
		}
		if(comprimir($dst, "$template.zip")){
		 echo 'Ok';
		}else{
		 echo 'Error al comprimir el archivo';
		}
		//Para forzar su descarga creamos las cabeceras necesarias indicando que es un archivo de tipo zip y especificando su nombre.
		 header("Content-type: application/octet-stream");
		 header("Content-disposition: attachment; filename=$template.zip");
		 // leemos el archivo creado
		 readfile("$template.zip");
		 // Por último eliminamos el archivo temporal creado
		 unlink("$template.zip");//Destruye archivo temporal
		 //como ultimo paso eliminamos el directorio que hemos creado anteriormente
		 function delTree($dst) { 
		   $files = array_diff(scandir($dst), array('.','..')); 
		    foreach ($files as $file) { 
		      (is_dir("$dst/$file")) ? delTree("$dst/$file") : unlink("$dst/$file"); 
		    } 
		    return rmdir($dst); 
		  }
		  delTree($dst);
	}
}
write_info($template);
?>