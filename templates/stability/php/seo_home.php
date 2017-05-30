  <script type="application/ld+json">
            { "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "<?php echo $Company;?>",
            "url" : "<?php echo $Domain;?>/",
            "sameAs" : [ "<?php echo $facebook;?>",
                         "<?php echo $googleplus;?>",
                         "<?php echo $twitter;?>"
                       ]
            }
    </script>

    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "url": "<?php echo $Domain;?>/",
          "logo": "<?php echo $Domain;?>/images/logo.png"
        }
    </script>
    <script type="application/ld+json">
  		{ "@context" : "http://schema.org",
    	"@type" : "Organization",
    	"url" : "<?php echo $Domain;?>/",
    	"contactPoint" : [
    	{ "@type" : "ContactPoint",
      	"telephone" : "<?php echo $SEOPhone;?>",
      	"contactType" : "customer service"
    	} ] }
  	</script>

  	<script type="application/ld+json">
    	{
      	"@context": "http://schema.org",
      	"@type": "LocalBusiness",
      	"address": {
        "@type": "PostalAddress",
         "addressLocality": "<?php echo $Locality;?>",
		    "addressRegion": "<?php echo $Region;?>",
		    "streetAddress": "<?php echo $StreetAddress;?>"
      	},
      	"description": "<?php echo $Company;?> <?php echo $ex2About;?>",
      	"name": "<?php echo $Company;?>",
      	"telephone": "<?php echo $SEOPhone;?>"
    	}
  	</script>