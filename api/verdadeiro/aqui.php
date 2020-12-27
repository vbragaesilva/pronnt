<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/stuff/fstyle.css">
    <title>Card suit</title>
</head>
<body>
	<audio src="/stuff/mus1.mp3" loop autoplay type="audio/mpeg"></audio>
	<div class="level" id="level-number">
		<h1>Nível 3</h1>
	</div>
	<script type="text/javascript">
		const level_div = document.getElementById('level-number');
		const audio = document.getElementsByTagName('audio')[0]

		document.addEventListener('click', () => {
			level_div.style = 'display: none;';
			audio.play();
		})
	</script>
    <!--<audio preload="auto" src="../stuff/mus1.mp3" autoplay loop></audio>-->
    <script> document.getElementsByTagName('audio')[0].volume = 0.25;</script>
    <div class="center">
    	<img src="/images/tela3.jpg" alt="Vish..." class="grand3"/>
    	<img src="/stuff/google.png" alt="Google..." class="google">
    	<p class="p-dica">Tenho coração mas não tenho bigode</p>
    	<div align="center" class="bw">
      		<button onclick="check()">Responder</button>
    	</div>
    </div>

<!-- Vida longa ao rei!! -->
</body>
</html>
