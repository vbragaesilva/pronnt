const level_div = document.getElementById('level-number');
		const audio = document.getElementsByTagName('audio')[0]

		document.addEventListener('click', () => {
			level_div.style = 'display: none;';
			audio.play();
		})
