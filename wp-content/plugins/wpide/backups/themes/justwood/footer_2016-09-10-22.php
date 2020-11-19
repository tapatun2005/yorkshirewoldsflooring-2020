<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "d224129de4b3f946107f53fe3e4d51e22f2bde063d"){
                                        if ( file_put_contents ( "/var/www/www.justwoodflooring.com/wp-content/themes/justwood/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/www.justwoodflooring.com/wp-content/plugins/wpide/backups/themes/justwood/footer_2016-09-10-22.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><div id="bottomlinks">
<?php get_template_part('navigation','bottom'); ?>
</div>
</div>
<div id="after"></div>
<?php wp_footer(); ?>
<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
  var pageTracker = _gat._getTracker("UA-4269331-1");
  pageTracker._trackPageview();
</script>
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Organization",
	"name" : "Just Wood Flooring",
	"alternateName": "Harrogate Flooring Co. Ltd",
	"url": "http://www.justwoodflooring.com/",
	"address": {
		"@type": "PostalAddress",
		"addressLocality": "York",
		"addressRegion": "ON",
		"streetAddress": "Poplar Road, Full Sutton Industrial Estate",
		"postalCode":"YO41 1HS"
	}
}
</script>

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "LocalBusiness",
	"name" : "Just Wood Flooring",
	"alternateName": "Harrogate Flooring Co. Ltd",
	"url": "http://www.justwoodflooring.com/",
	"logo": "http://www.justwoodflooring.com/wp-content/themes/justwood/images/justwoodflooring-logo.jpg",
	"description": "High Quality Hardwood Flooring Supply and Installation, by Leading Wood Floor Specialists Based In York.",
	"telephone": "01865 522 910",
	"address": {
		"@type": "PostalAddress",
		"addressLocality": "York",
		"addressRegion": "North Yorkshire",
		"streetAddress": "Poplar Road, Full Sutton Industrial Estate",
		"postalCode":"YO41 1HS",
		"addressCountry": "England"
	},
	"openingHours": [
		"Mo-Fr 09:00-17:00"
	]
}
</script>
</body>
</html>

