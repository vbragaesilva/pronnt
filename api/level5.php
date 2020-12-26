<?php
	if(($_SERVER['PHP_AUTH_USER'] != 'admin' || $_SERVER['PHP_AUTH_PW'] != 'admin')){
		header("WWW-Authenticate: Basic realm=\"dica certa\"");
		echo '<h1> Unauthorized</h1>';
		exit;
	}
?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello Level 5!!!!</p>'; ?> 
  </body>
</html>
