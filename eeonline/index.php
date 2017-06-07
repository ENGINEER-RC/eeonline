<?php

//This is the main page that loads all content of the site dynamically

//This "if" statement validates the owner of this Website on google Webmasters
// http://ee.theroyalchampions.in
if(isset($_GET['url'])){
		if($_GET['url']=="google9d617b281d226051"){
			echo "google-site-verification: google9d617b281d226051.html";
			exit();
		}
	}

//This statement includes the dynamic page loader which renders data to the user as per the url 
// i.e ./{LINK}.html and parses files "./dcontent/{LINK}.html"
require_once('./dynamicPageLoader.php'); 


//writehead saves the Header data and the main body data into the variable called bdata
//url= is the get parameter set in the .htaccess file for SEo friendly URLs
//#index is the default page to load when no url is provided.
$bdata=writeHead("url");
	
?><!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta charset="UTF-8">
	  <?php echo $bdata[0]; 
	   /* This head is loaded by $bdata[0] includes meta tags such as 
	    * Title
	    * Description 
	    * Css files
	    * Js files 
		* Canonical-URL
	    * Also the image displayed for Facebook sharing aka (og:image)
	    */
	  ?>
	  
	  <!-- This is the main css file of the website -->
      <link href="./css/style.css?vers4.0" rel="stylesheet" type="text/css">
	  
	  <!-- This is script prevents the site from opening in a frame -->
	  <script>	  if( window!= window.top ) {top.location.href = location.href;}</script>
   </head>
   <body>
      <div id="beast">
		 
		 <!-- Static header must be filled manually -->
         <header>
            <div id="banner"><a href="./"><div id="banner-main" ></div></a>
			<div id="banner-clan" ></div>
			</div>
            <nav id="main-nav">
               <ul>
                  <li><a href="./">Home</a></li>
                  <li><a style="font-weight: bold;" href="./downloads.html">Downloads</a></li>
                  <li><a href="http://www.theroyalchampions.in">RC Website</a></li>
                  <li><a href="https://www.facebook.com/EmpireEarth1/">Facebook</a></li>
                  <li><a href="http://save-ee.com">Save-EE</a></li>
                  <li style="border: medium none ;"><a href="http://rcpatch.blogspot.com">RC 2.2 Patch</a></li>
               </ul>
			   <br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;
            </nav>
         </header>
		 
		 <!-- Main Body of the Webpage -->
            <div class="mid-wraper-top">
				<div class="right-container">
				
				
                  <nav class="right-container-top">
                     <h3>Site <span class="yellow-heading">Menu</span></h3>
                     <ul>
                        <li><a href="./stop-gameranger-ads.html">Block Gameranger Ads</a></li>
                        <li><a href="./civis-hotkeys.html">Civilizations & Hotkeys</a></li>
                        <li><a href="./old-games.html">Download Old PC games</a></li>
                     </ul>
					 <br>&nbsp;<br>&nbsp;<br>&nbsp;
                  </nav>
				  
                  <div class="right-container-dwn" >
                     <h4>Empire Earth News</h4>
						<?php 
							// Reads File from "./dcontent/news.htm" and prints it here as empire earth news 
							readfile('./noaccess/news.htm'); 
						?>
                     <strong><a href="https://www.facebook.com/EmpireEarth1/" class="read-more-right">read more...</a></strong> 
                  </div>
               
			   
			   </div>
			   
               <main><?php 
			   echo $bdata[1];
			   //Here on this Line the Main Content will be added from the html files located at "./dcontent/{LINK}.html"
			   ?></main>
            
			
			</div>
         
		 <!-- Static footer must be filled manually -->
		 <footer>
            <nav class="footer-side">
                  <a href="./">Home</a>
                  <a href="./downloads.html">Downloads</a>
                  <a href="http://www.theroyalchampions.in">Main Website</a>
                  <a href="https://www.facebook.com/EmpireEarth1/">Facebook</a>
                  <a href="http://save-ee.com">Save-EE</a>
                  <a href="http://rcpatch.blogspot.com">RC Patch</a>
            </nav>
			
			
			<!-- Google Translate for Users who don't speak english  -->
			<div id="google_translate_element" style="float:left;"></div>
			<script type="text/javascript">
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,de,en,es,fr,it,nl,pt,ru', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
			}
			</script>
			<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            
			
			<div class="footer-right">www.TheRoyalChampions.in&nbsp;&copy; Copyright <?php echo date("Y"); ?>.</div>
         </footer>
      </div>
   </body>
</html>
