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
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!-- This is the main css file of the website -->
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link href="./css/style.css?vers3.0" rel="stylesheet" type="text/css">
		<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}
		

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0; // For Chrome, Safari and Opera 
			document.documentElement.scrollTop = 0; // For IE and Firefox
		}</script>
	  
	  <!-- This is script prevents the site from opening in a frame -->
	  <script>	  if( window!= window.top ) {top.location.href = location.href;}</script>
   </head>
   <body>
   <button class="w3-round w3-xlarge w3-card-2 w3-btn gtp" onclick="topFunction()" id="myBtn" title="Go to top">^</button>
      <div id="beast" class="w3-content w3-card-4 w3-round-large" style="background:rgba(255,255,255,0.7);">
		 
		 <!-- Static header must be filled manually -->
         <header class="w3-teal" style="border-radius:8px 8px 0px 0px;">
            <div id="banner" class="w3-bar" style="border-radius:8px 8px 0px 0px;">
				<a href="./">
					<img class="w3-bar-item w3-section w3-mobile" src="https://s27.postimg.org/4c9blespv/haha.png" />
				</a>
				<div id="banner-clan" class="w3-bar-item w3-right w3-hide-small w3-hide-medium" ></div>
			</div>

            <nav class="w3-bar w3-padding">
			
                  <a class="w3-button w3-mobile w3-bar-item" href="./">Home</a>
                  <a class="w3-button w3-mobile w3-bar-item" href="./downloads.html"><b>Downloads</b></a>
                  <a class="w3-button w3-mobile w3-bar-item" href="https://www.facebook.com/EmpireEarth1/">Facebook Page</a>
				  <a class="w3-button w3-mobile w3-bar-item" href="http://www.theroyalchampions.in">Clan Website</a>
				  
				<!-- Google Translate for Users who don't speak english  -->
				<div class="w3-button w3-mobile w3-bar-item w3-right" id="google_translate_element" style="padding:6px" ></div>
				<!-- Google Translate for Users who don't speak english  -->
				<script type="text/javascript">
				function googleTranslateElementInit() {
					new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,de,en,es,fr,it,nl,pt,ru', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
				}
				</script>
				<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            
			</nav>
         </header>
		 
		 <!-- Main Body of the Webpage -->
            <div class="w3-responsive">
			
			    <main class="w3-container w3-right w3-threequarter"><?php 
			   echo $bdata[1];
			   //Here on this Line the Main Content will be added from the html files located at "./dcontent/{LINK}.html"
			   ?></main>	
			
			
			
				<div class="w3-card-4 w3-left w3-quarter w3-light-grey">
                  <aside class="w3-center">
                     <h3>Site <span class="w3-text-orange">Menu</span></h3>
                     <div class="w3-bar-block w3-center">
                        <a class="w3-button w3-round w3-mobile w3-bar-item" href="./stop-gameranger-ads.html">Block Gameranger Ads</a>
                        <a class="w3-button w3-round w3-mobile w3-bar-item" href="./civis-hotkeys.html">Civilizations & Hotkeys</a>
                        <a class="w3-button w3-round w3-mobile w3-bar-item" href="./old-games.html">Download Old PC games</a>
                     </div>
                  </aside>
				  <hr>
				  
				  
                  <div class="w3-container w3-teal w3-text-small w3-center" style="padding:0px;padding-bottom:8px;" >
                     <h3 style="box-shadow: 0 6px 2px -4px #000;margin-bottom:0px;">Empire Earth <span class="w3-text-orange">News</span></h3>
						<?php 
							// Reads File from "./dcontent/news.htm" and prints it here as empire earth news 
							readfile('./noaccess/news.htm'); 
						?>
						<div class="w3-container" style="width:100%;height:10px;box-shadow: 0 -6px 2px -4px black;"></div>
                     <a class="w3-button w3-right" onclick="show_more(this);" href="javascript:;" >read more</a>
					 
					 
                  </div>
               
			   
			   </div>
			   

            
			
			</div>
         
		 <!-- Static footer must be filled manually -->
		 <footer class="w3-container w3-teal w3-center w3-padding-16" style="border-radius:0px 0px 8px 8px;">
			www.TheRoyalChampions.in &copy;&nbsp;Copyright <?php echo date("Y"); ?>.
         </footer>
      </div>
   </body>
</html>
