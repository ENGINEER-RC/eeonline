<?php
	
	//Name of subfolder that stores all of your html content files
    $dcontent= "dcontent"; 

	//Name of the html file when there is no Query.
    $defaultFile= "#index"; 

	$websiteDomain='ee.theroyalchampions.in';
	
	 //Pushes 404 Header and redirects to the 404 page
	function exiter()
	{
			ob_clean();
			http_response_code(404);
			readfile('./noaccess/404.htm');
			exit();
	}
	
	if (basename($_SERVER['SCRIPT_NAME'])==basename($_SERVER['REQUEST_URI'])){exiter();};

?>