<?php


$urls_themes = array(
	'stability' => array('images/slider/','images/portfolio/','images/elements') ,
	'solarize' => array('images/slider/','images/portfolio/','images/elements') ,
	'dart' => array('images/slider/','images/portfolio/','images/elements') ,
	);


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

function ImagenesPortfolio($CategoriasPortfolio, $dst, $template)
{
	global $urls_themes;
	$countCategorias = Count($CategoriasPortfolio);
	$imagesXcategoria = floor(12 / $countCategorias);
	$ImagesForCopy = array();
	for ($i=0; $i <$countCategorias ; $i++) {
		$total=$imagesXcategoria;

		if($i==($countCategorias-1))
			$total=12-($imagesXcategoria * ($countCategorias-1));

		$rutaIamges= $urls_themes[$template][1] . sluggify($CategoriasPortfolio[$i]).'/full/';
		$total_imagenes = count(glob($rutaIamges.'{*.jpg}',GLOB_BRACE));
		$numero_imges= array();
		for ($k=0; $k < $total; $k++) {
			$numero_aleatorio = rand(1, $total_imagenes);
			if (in_array($numero_aleatorio, $numero_imges)) {
			    $k--;
			}
			else{
				$numero_imges[]=$numero_aleatorio;
			}
		}
		for ($k=0; $k < count($numero_imges) ; $k++) {
			$ImagesForCopy[] = $rutaIamges . $numero_imges[$k] . '.jpg';
		}
	}
	for ($i=0; $i < count($ImagesForCopy) ; $i++) {
		copy($ImagesForCopy[$i], $dst . $urls_themes[$template][1] . 'full/'.($i+1).'.jpg');
		copy(str_replace('full','min',$ImagesForCopy[$i]), $dst . $urls_themes[$template][1] . 'min/'.($i+1).'.jpg');
	}
}
function ImagenesSlider($CategoriaSlider, $dst, $template)
{
	global $urls_themes;
	$ImagesForCopy = array();
	$rutaIamges = 'images/slider/'.$template . '/' . sluggify($CategoriaSlider).'/';
	$total_imagenes = count(glob($rutaIamges.'{*.jpg}',GLOB_BRACE));
	$numero_imges = array();
	$total = 3;
	for ($k=0; $k < $total; $k++) {
		$numero_aleatorio = rand(1, $total_imagenes);
		if (in_array($numero_aleatorio, $numero_imges)) {
		    $k--;
		}
		else{
			$numero_imges[]=$numero_aleatorio;
		}
	}
	for ($k=0; $k < count($numero_imges) ; $k++) {
		$ImagesForCopy[] = $rutaIamges . $numero_imges[$k] . '.jpg';
	}
	for ($i=0; $i < count($ImagesForCopy) ; $i++) {
		copy($ImagesForCopy[$i], $dst . $urls_themes[$template][0] . '/'.($i+1).'.jpg');
	}
}

function ImagenesElements($CategoriaElements, $dst, $template)
{
	global $urls_themes;
	$ImagesForCopy = array();
	$rutaIamges = 'images/elements/' . sluggify($CategoriaElements).'/';
	$total_imagenes = count(glob($rutaIamges.'{*.jpg}',GLOB_BRACE));
	$numero_imges = array();
	$total = 6;
	for ($k=0; $k < $total; $k++) {
		$numero_aleatorio = rand(1, $total_imagenes);
		if (in_array($numero_aleatorio, $numero_imges)) {
		    $k--;
		}
		else{
			$numero_imges[]=$numero_aleatorio;
		}
	}
	for ($k=0; $k < count($numero_imges) ; $k++) {
		$ImagesForCopy[] = $rutaIamges . $numero_imges[$k] . '.jpg';
	}
	for ($i=0; $i < count($ImagesForCopy) ; $i++) {
		copy($ImagesForCopy[$i], $dst . $urls_themes[$template][2] . '/bg_'.($i+1).'.jpg');
	}
}
function ImagenesBanner($CategoriaElements, $dst, $template)
{
	global $urls_themes;
	$ImagesForCopy = array();
	$rutaIamges = 'images/banner-mobile/'. sluggify($CategoriaElements).'/';
	$total_imagenes = count(glob($rutaIamges.'{*.jpg}',GLOB_BRACE));
	$numero_imges = rand(1, $total_imagenes);
	$ImagesForCopy = $rutaIamges . $numero_imges . '.jpg';
	copy($ImagesForCopy, $dst . $urls_themes[$template][2] . '/banner-mobile.jpg');
}
function sluggify($url)
{
    # Prep string with some basic normalization
    $url = strtolower($url);
    $url = strip_tags($url);
    $url = stripslashes($url);
    $url = html_entity_decode($url);

    # Remove quotes (can't, etc.)
    $url = str_replace('\'', '', $url);

    # Replace non-alpha numeric with hyphens
    $match = '/[^a-z0-9]+/';
    $replace = '-';
    $url = preg_replace($match, $replace, $url);

    $url = trim($url, '-');

    return $url;
}
?>