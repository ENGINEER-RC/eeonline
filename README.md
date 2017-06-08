# Empire Earth Online
 Website: [ee.theroyalchampions.in](http://ee.theroyalchampions.in)
***
## Introduction
 This Repository is a replication of the contents on the Empire Earth Downloads Website.
 
 The intention of this website is to get old empire earth players to play this game again.
 
 Also provide players with useful but required resources they may need to play online.

#### To achieve this
 - We must get this website on the top SEO results.
 - Provide clean and free links.
 - Be available to connect and contact easily.
 - Have a simple and generic design.

 ***
## Warning
> Do not use the content of This website on your server since Google will reduce the page rank of the domain due to content replication.
> Instead feel free to use the codes provided through the PHP scripts as a template.

***
## Base Principles
 - The website should be clean and most of the code must be raw. ( without any API )
 - No user should be tracked, hence we don't use cookies.
 - Least 3rd part party javascripts must be use, only from trusted vendors. ( e.g google translate )
 - Any links that are added to the website must not contain redirects.
 - Any download links added to the website must not be uploaded on servers which ask you to view ads or pay to download.

***
## Documentation
#### Prerequisites
>Unpak all the contents of the /eeonline into the root folder of Apache-PHP based client.
>Use [Xampp](https://www.apachefriends.org) for people Running on Windows OS. 
>Make changes locally and test your edits and then send me Pull requests.

#### Adding new Pages
 - Adding New pages is a a little diffcult for beginners but the system may improve overtime.
 - make a .html file and give it an SEO friendly Url Such as **read-this-immediately.html** 
```
{
	"title":"Download - Empire Earth",
	"description":"Download Empire Earth and Play On Gameranger or Neo EE",
	"image":"https://s12.postimg.org/n2cvt9h4d/sfgdsfsdf.png",
	"css":"one.css",
	"js","epic.js"
};;
<!--[YOUR-HTML-CODE-STARTS-FROM-HERE]-->
```
 - This is an example of how your content file must look.
 - Everything between the curly braces is JSON.
>The JSON data is important metadata for Search engine crawlers to index the file 
>Also to create an impression while sharing the pages on Social Media
 - **image** is the reference to the image that will be displayed when your page is shared on Facebook.
 - **css** it is the reference to a single css file in the "./css" folder.
 - **js** it is the reference to a single css file in the "./javascript" folder.
> "**;;**" this is the spliter notation that splits the JSON data and the html body.

For more examples refrence content files in "./docntent" folder.
- To link your files in  the Main Template edit and add the link to the content page.
```
# index.php => Line71
 <nav class="right-container-top">
     <h3>Site <span class="yellow-heading">Menu</span></h3>
     <ul>
        <li><a href="./stop-gameranger-ads.html">Block Gameranger Ads</a></li>
        <li><a href="./civis-hotkeys.html">Civilizations & Hotkeys</a></li>
        <li><a href="./old-games.html">Download Old PC games</a></li>
     </ul>
	 <br>&nbsp;<br>&nbsp;<br>&nbsp;
  </nav>
  ```
### Various scripts info
 - Most of the Documentation of Each PHP Script is present inside them.
> **index.php** is the main site template.
> **dynamicPageLoader.php** this script loads contents files from "/dcontent/"  folder.
> **site_var.php** contains the main variables like homepage-content-file, domain-name, dynamic-content-folder .
> **sitemap.php** generates a sitemap dynamically & automatically.
> The **.htaccess** file in the root folder is responsiblefor the clean SEO friendly Urls.
***


