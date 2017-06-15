<?php
	/***INFORMACION DEL CLIENTE**/
	$pageName="All State Tree & Shrub Corp";
	$pagePhone="(516) 564-4326";
	$pageEmail="allstatetreeservice@yahoo.com";
 /***Meta Author**/
	$author = "All State Tree & Shrub Corp";
 //Meta Robots
	$robots ="index, follow";
	$robots2 ="noindex, nofollow";
	$social_img = "http://" . $_SERVER['HTTP_HOST'] . "/" . "images/fb.jpg";//Ejemplo, Dimension de la imagen 1200 x 630px / 600 x 315px
	$social_img2 = "http://" . $_SERVER['HTTP_HOST'] . "/" . "images/tw.jpg";
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
							//'blog-page.php'													=>"Title_Post",

							//landing page
							//
							'tree-removal.php'												=>"Tree Removal",
							'tree-trimming.php'												=>"Tree Trimming",
							'tree-services.php'												=>"Tree Services"
							);
	//Meta Description
	$DescriptionArray=array('index.php'														=>"Looking for reliable tree services? You have come to the right place! All State Tree & Shrub Corp is a great choice for you due to our experience and kn...",
							'about.php'														=>"All State Tree & Shrub Corp was founded in Hempstead, New York many years ago under the values of integrity, professionalism, and diligence. We have mor...",
							'services.php'													=>"We focus on exceeding clients’ expectations by always delivering top class quality at cost effective prices. The growth of our company is owed to the ...",
							'portfolio.php'										    		=>"Our professionals are skilled and talented enough, to develop your project in a timely manner. Whether you need us to do tree removal, tree trimming or ...",
							'contact.php'													=>"Our reliability and dependability has allowed us to keep growing in the industry and to continue helping more clients in the area.  The main goal of...",
							//'blog.php'														=>"blog_page_meta_description",
							'404.php'														=>"Page Not Found | $pageName",
							'thank-you.php'													=>"Message Has Been Sent, Thank You | $pageName",

							// Blog post
							//'blog-page.php'													=>"blog_page_meta_description",

							//landing page
							//
							'tree-removal.php'												=>"Tree removal is a big decision- one that not should be taken lightly. You need a professional like All State Tree and Shrub Corp, to handle your tree re...",
							'tree-trimming.php'												=>"Give the trees in and around your landscape proper care. If your trees are looking bushy and too messy for your preference, then you came to the right p...",
							'tree-services.php'												=>"All State Tree & Shrub Corp. offers complete, definitive, and reliable tree services for any of your residential or commercial needs. We have more than ..."
						);

?>