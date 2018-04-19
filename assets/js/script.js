
window.onload = setSize();


function setSize()
		{
			var userWindHeight = window.innerHeight;
			var elemMain = document.getElementsByClassName('main-div')[0];
			var elemMenu = document.getElementsByClassName('menu-block')[0];
			elemMain.style.height=userWindHeight+"px";
			elemMenu.style.height=userWindHeight+"px";
			elemMenu.style.top= - userWindHeight+"px";
			console.log(userWindHeight);
		}
function moveFonMainDiv() {
	var elemMain = document.getElementsByClassName('main-div')[0];
	elemMain.style.transition= 'all 5s ease-out';
	elemMain.style.transform= 'scale(1.3)';

}
setTimeout(moveFonMainDiv, 400);

	