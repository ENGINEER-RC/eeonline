<?php
/** This PHP script is a Simple flat file based CMS cum Dynamic-Content-Loader
 *
 * The Dynamic Page is Loaded via a special scheme
 * it takes input from the get query parameter "url"
 * example: http://ee.theroyalchampions.in/?url=downloads
 *			or  http://ee.theroyalchampions.in/downloads.html 
 *				if the .htaccess file has these lines in it
 *				RewriteEngine on
 *				RewriteRule ^(.*).html$ ./index.php?url=$1
 * 
 * Further it finds the url parameter related file in the $dcontent folder.
 * example: ./dcontent/downloads.html
 * 
 * scheme>>>
 * 
 *		 {
 *			"title":"Download - Empire Earth",
 *			"description":"Download Empire Earth and Play On Gameranger or Neo EE",
 *			"image":"https://s12.postimg.org/n2cvt9h4d/sfgdsfsdf.png",
 *			"css":"one.css"
  *			"js":"javascript.css"
 *		};;
 *		<!--[YOUR-BODY-STARTS-FROM-HERE]-->
 *		<h1>Hello Welcome to your New Page</h1>
 *
 *  <<<EOF
 *
 * The script splits data from the dcontent folder into header and body data viathe $spliter=";;" and returns data respectively  
 * 
 * @author Tomrock D'souza, St. Francis Institute Of Technology, University of Mumbai, 2017
 * @copyright GNU General Public License v3
 * No reproduction in whole or part without maintaining this copyright notice
 * and imposing this condition on any subsequent users.
 */
 
 
require_once('./site_var.php'); 
//This PHP Script Contains the Main Variables of The CMS

	//String Which Splits the head and body of the content file.
	$spliter = ";;";


	
	
//This is the main output function which distinguishes if the url is empty of filed
function writeHead($varx)
{
	global $defaultFile;
    if (isset($_GET[$varx])) {
        return metaTag($_GET[$varx]);
    } else {
        return metaTag($defaultFile);
    }
}

//metaTag is the main integrator function which applies logic and adds all smaller functionsto itself
function metaTag($fileLink)
{
	    global $dcontent,$defaultFile,$spliter;
		$fileLink    = preg_replace("/[&=<>\/\\|~%*:\"?*^']/", "", $fileLink);
		
		//Check if Document is Present in the $dcontent folder
		if (!file_exists($dcontent . "/" . $fileLink . ".html")) {exiter();}
	
	
        $headJson = explode($spliter, file_get_contents($dcontent . "/" . $fileLink . ".html"), 2);
        if (isset($headJson[1])) {
            $bodyData = $headJson[1];
        } else {exiter();}
        
        $headJson = json_decode($headJson[0]);
        if (json_last_error() === 0) {
			//Calls titleDescImage & writeCannon if no Json error else shows 404 error
            $headerData = titleDescImage($headJson);
            $headerData = $headerData . writeCannon($fileLink);
            return array(
                $headerData,
                $bodyData
            );
        } else {exiter();}
	 
}


//This Function parses the Json operation Data and Creates title,description,image,javascript,css  
function titleDescImage($headJson)
{
    $headString = "";
    if (isset($headJson->title)) {
        $headString = $headString . "<title>" . $headJson->title . "</title>\r\n";
    } else {
        $headString = $headString . "<title>Default Title</title>\r\n";
    }
    if (isset($headJson->description)) {
        $headString = $headString . "<meta name=\"description\" content=\"" . $headJson->description . "\"/>\r\n";
    }
    if (isset($headJson->image)) {
        $headString = $headString . "<meta property=\"og:image\" content=\"" . $headJson->image . "\"/>\r\n";
    }
	if (isset($headJson->css)) {
		//save your css files in "./css" folder
        $headString = $headString . "<link href=\"./css/" . $headJson->css ."\" rel=\"stylesheet\" type=\"text/css\">\r\n";
    }
	if (isset($headJson->js)) {
        //save your css files in "./javascript" folder
		$headString = $headString . "<script src=\"./javascript/" . $headJson->js ."\" ></script>\r\n";
    }
    return $headString;
}


//This Function Provides a canonical url so that multiple copies of this page aren't cached by search engine crawlers 
function writeCannon($fileLink)
{	
	global $websiteDomain, $defaultFile;
    $link = ('http:/'.'/'.$websiteDomain. $_SERVER['SCRIPT_NAME']);
    
    if ($fileLink == $defaultFile) {
        $fileLink = "";
		$link = substr($link, 0, strrpos($link, "/"));
    } else {
        $fileLink = $fileLink . ".html";
		$link = substr($link, 0, strrpos($link, "/") + 1);
    }
    
    return "<link rel=\"canonical\" href=\"" . $link . $fileLink . "\"/>";
}







?>