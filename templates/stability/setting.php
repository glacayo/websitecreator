<?php

	/***INFORMACION DEL CLIENTE**/
	$pageName="client_name";
	$pagePhone="client_phone";
	$pageEmail="client_mail";

	/***Meta Author**/
	$author = "client_author";

	//Meta Robots
	$robots ="index, follow";
	$robots2 ="noindex, nofollow";
	$social_img = "http://" . $_SERVER['HTTP_HOST'] . "/" . "img/fb.jpg";//Ejemplo, Dimension de la imagen 1200 x 630px / 600 x 315px
	$social_img2 = "http://" . $_SERVER['HTTP_HOST'] . "/" . "img/tw.jpg";
	

	//Lenguaje de la pagina
	$lang = "en-US";//por defecto

	//Activar el tab services en las siguiente paginas
	$services_Active = array();

	/***Array de nombre de archivos**/

		$file_Title = array('index.php'														=>"Index | $pageName",
							'about.php'														=>"About Us | $pageName",
							'services.php'													=>"Our Services | $pageName",
							'portfolio.php'										    		=>"Portfolio | $pageName",
							'contact.php'													=>"Contact Us | $pageName",
							'blog.php'														=>"Blog  | $pageName",
							'404.php'														=>"Page not Found",
							'thank-you.php'													=>"Thank You",

							// Blog post
							'blog-page.php'													=>"Title_Post",

							//landing page
							//
							'landing-page.php'												=>"name_landing_page",
							);

	//Meta Description
	$DescriptionArray=array('index.php'														=>"index_page_meta_description",
							'about.php'														=>"about_page_meta_description",
							'services.php'													=>"services_page_meta_description",
							'portfolio.php'										    		=>"portfolio_page_meta_description",
							'contact.php'													=>"contact_page_meta_description",
							'blog.php'														=>"blog_page_meta_description",
							'404.php'														=>"404_page_meta_description",
							'thank-you.php'													=>"thank-you_page_meta_description",

							// Blog post
							'blog-page.php'													=>"blog_page_meta_description",

							//landing page
							//
							'landing-page.php'												=>"landing_page_meta_description",
							
						);

?>