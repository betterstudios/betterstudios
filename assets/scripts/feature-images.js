/*!
 * Feature Images
 */

(function(){
	var imageUrl = document.querySelector('#featured-image').src;
	document.querySelector('#header-background').innerHTML = '<ul><li></li></ul>';
	document.querySelector('#header-background.ul.li').style.backgroundImage = 'url(' + imageUrl + ')';
})();
