<?php 
$fileName = isset($_POST['fileName']) ? $_POST['fileName']: 'nombredeldominio';
$domain = isset($_POST['domain']) ? $_POST['domain']: 'http://www.example.com/';
$companyName = isset($_POST['companyName']) ? $_POST['companyName']: 'Nombre de la Compañia';
$companyPhone = isset($_POST['companyPhone']) ? $_POST['companyPhone']: 'Numero de la compañia';
$companyPhone2 = isset($_POST['companyPhone2']) ? $_POST['companyPhone2']: 'Numero de la compañia 2';
$companyEmail = isset($_POST['companyEmail']) ? $_POST['companyEmail']: 'example@example.com';
$companyEmail2 = isset($_POST['companyEmail2']) ? $_POST['companyEmail2']: 'example2@example.com';



echo $fileName."<br>";
echo $domain."<br>";
echo $companyName."<br>";
echo $companyPhone."<br>";
echo $companyPhone2."<br>";
echo $companyEmail."<br>";
echo $companyEmail2."<br>";

?>