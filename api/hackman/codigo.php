<?php 
	if( $_SERVER['PHP_AUTH_USER'] !== 'quatro' || $_SERVER['PHP_AUTH_PW'] !== 'naipes' ){
		header("WWW-Authenticate: Basic realm=\"Olhe no escuro\" ");
		echo '<h1>Unauthorized</h1>';
		exit;
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nas entranhas</title>
	<link rel="stylesheet" type="text/css" href="/stuff/fstyle.css">
</head>
<body>
	<audio preload="auto" src="/stuff/mus1.mp3" autoplay loop></audio>
	<script> document.getElementsByTagName('audio')[0].volume = 0.25;</script>
	
	<div class="level">
		<h1>Level 5</h1>
	</div>

	<script type="text/javascript" src="/stuff/listener.js"></script>
	<div class="center">
		<img src="/images/quatro/tela5.png" usemap="#no">
		<map name="no">
			<area shape="poly" coords="398, 162, 431, 144, 407, 125" href="/api/deck/games.php" />
		</map>
		<p class="p-dica"> Linguagem dos computadores </p>
	</div>
	<!-- sem -->
	<!-- tempo  -->
</body>
</html>
