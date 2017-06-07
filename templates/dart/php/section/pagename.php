<section itemscope itemtype="http://schema.org/WPHeader">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br>
				<h1 itemprop="headline" itemprop="name" class="uppercase t_black breadcumb-title">
					<?php 
			            if($page_name=='index.php'){echo "Home";}
			            elseif ($page_name=='about.php') {echo "About Us";}
			            elseif ($page_name=='services.php') {echo "Services";}
			            elseif ($page_name=='services.php') {echo "Services";}
				            elseif ($page_name=='tree-removal.php') {echo "Tree Removal ";}
				            elseif ($page_name=='tree-trimming.php') {echo "Tree Trimming ";}
				            elseif ($page_name=='tree-services.php') {echo "Tree Services";}
				            elseif ($page_name=='rug-cleaning.php') {echo "Rug Cleaning";}
			            elseif ($page_name=='portfolio.php') {echo "Portfolio";}
			            // elseif ($page_name=='testimonials.php') {echo "Testimonials";}
			            // elseif ($page_name=='landing-page.php') {echo "$LN1";}
			            // elseif ($page_name=='blog-page.php') {echo "$BlogEntryT1";}
			            // elseif ($page_name=='blog.php') {echo "Blog";}
			            elseif ($page_name=='contact.php') {echo "Contact";}
			        ?> 
				</h1>
		    </div>
		    <div class="col-md-12">
		    	<ol class="breadcrumb breadcumb-margin" vocab="http://schema.org/" typeof="BreadcrumbList">
		    		<li property="itemListElement" typeof="ListItem">
		    			<a href="index.php" title="Home" property="item" typeof="WebPage" class="uppercase t_gray-7"><i class="fa fa-home"></i> <span property="name">Home</span></a>
					  	<meta property="position" content="1">
		    		</li>
		    		<?php if ($page_name=='tree-removal.php'){?>
		    		<li property="itemListElement" typeof="ListItem">
		    			<a href="services.php" title="Landing Page" property="item" typeof="WebPage" class="uppercase t_red-3"><span property="name">Services</span></a>
					  	<meta property="position" content="2">
		    		</li>
		    		<?php } elseif  ($page_name=='tree-trimming.php'){?>
		    		<li property="itemListElement" typeof="ListItem">
		    			<a href="services.php" title="Landing Page" property="item" typeof="WebPage" class="uppercase t_red-3"><span property="name">Services</span></a>
					  	<meta property="position" content="2">
		    		</li>
		    		<?php } elseif  ($page_name=='tree-services.php'){?>
		    		<li property="itemListElement" typeof="ListItem">
		    			<a href="services.php" title="Landing Page" property="item" typeof="WebPage" class="uppercase t_red-3"><span property="name">Services</span></a>
					  	<meta property="position" content="2">
		    		</li>
		    		<?php } elseif  ($page_name=='rug-cleaning.php'){?>
		    		<li property="itemListElement" typeof="ListItem">
		    			<a href="services.php" title="Landing Page" property="item" typeof="WebPage" class="uppercase t_red-3"><span property="name">Services</span></a>
					  	<meta property="position" content="2">
		    		</li>
		    		<?php } elseif ($page_name=='blog-page.php'){?>
		    		<li property="itemListElement" typeof="ListItem">
		    			<a href="blog.php" title="Blog" property="item" typeof="WebPage" class="uppercase t_red-3"><span property="name">Blog</span></a>
					  	<meta property="position" content="2">
		    		</li>
		    		<?php }?>
		    		<li property="itemListElement" typeof="ListItem">
					  	<span class="uppercase t_black" property="item" typeof="WebPage">
					  		<span property="name">
				    			<?php 
					            if($page_name=='index.php'){echo "Home";}
					            elseif ($page_name=='about.php') {echo "About Us";}
					            elseif ($page_name=='services.php') {echo "Services";}
					            	elseif ($page_name=='tree-removal.php') {echo "Tree Removal ";}
						            elseif ($page_name=='tree-trimming.php') {echo "Tree Trimming ";}
						            elseif ($page_name=='tree-services.php') {echo "Tree Services";}
						            elseif ($page_name=='rug-cleaning.php') {echo "Rug Cleaning";}
					            elseif ($page_name=='portfolio.php') {echo "Portfolio";}
					            // elseif ($page_name=='testimonials.php') {echo "Testimonials";}
					            // elseif ($page_name=='landing-page.php') {echo "$LN1";}
					            // elseif ($page_name=='blog-page.php') {echo "$BlogEntryT1";}
					            // elseif ($page_name=='blog.php') {echo "Blog";}
					            elseif ($page_name=='contact.php') {echo "Contact";}?>
				            </span>
			    		</span>
			    		<meta property="position" content="<?php if ($page_name=='landing-page.php'||$page_name=='blog-page.php'){echo "3";}else{echo "2";};?>">
		    		</li>
		    	</ol>
		    </div>
		</div>
	</div>
</section>