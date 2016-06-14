/*!
 * Feature Images
 */

(function(){
	var imageUrl = document.querySelector('img').src;
	document.getElementById('header-background').innerHTML = '<ul><li></li></ul>';
	document.querySelector('#header-background').innerHTML = '<ul><li></li></ul>';
	document.querySelector('#header-background.ul.li').style.backgroundImage = 'url(' + imageUrl + ')';
})();
