<?php
header('Content-Type: text/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
require_once('./site_var.php'); 

function writePageX($url)
  //$url must be in the format "downloads.html"
{		
	global $websiteDomain;
	echo "<url><loc>http:/"."/".$websiteDomain."/".$url."</loc><priority>0.9</priority><changefreq>weekly</changefreq></url>";
}




//Lists the main Homepage of the Website in the site map
echo "<url><loc>http:/"."/".$websiteDomain."</loc><priority>1.0</priority><changefreq>weekly</changefreq></url>";

// Parses the $dcontent folder and lists all the files
$files = array_diff(scandir($dcontent), array('.', '..',$defaultFile.".html",".htaccess"));
foreach ($files as &$value){
	writePageX($value);
}
?>

</urlset>