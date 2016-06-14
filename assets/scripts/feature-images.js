/*!
 * Feature Images
 */

(function(){
	var imageUrl = document.querySelector('img').src;
	document.getElementById('header-background').innerHTML = '<li></li>';
	document.querySelector('header-background.ul.li').style.backgroundImage = 'url(' + imageUrl + ')';
})();
