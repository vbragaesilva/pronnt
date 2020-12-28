const level_div = document.getElementsByClassName('level')[0];
const audio = document.getElementsByTagName('audio')[0]

document.addEventListener('click', () => {
	level_div.style = 'display: none;';
	audio.play();
})
