<?php 
//Funcion para los nuemeros de telefonos
function number_phone_management($number){
	//numero  "ref"
	$numberRef = preg_replace('/\D/', '', $number);
	if (strlen($numberRef) > 10) {
		echo "Numero mayor a 10 digitos";
	}else{
		//numero para mostrar
		$formatNumber = substr_replace($numberRef, '(', 0, 0); 
		$formatNumber = substr_replace($formatNumber, ')', 4, 0); 
		$formatNumber = substr_replace($formatNumber, ' ', 5, 0);
		$formatNumber = substr_replace($formatNumber, '-', 9, 0);
		//numero para seo schema
		$seoNumber =  substr_replace($numberRef, '-', 3, 0);
		$seoNumber =  substr_replace($seoNumber, '-', 7, 0);
		$seoNumber = '+1-'. $seoNumber;
		return array($numberRef, $formatNumber, $seoNumber);
	}
}


?>