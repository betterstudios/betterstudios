/*!
 * Feature Images
 */

(function(){
	var imageUrl = document.querySelector('img').src;
	document.getElementById('keyframe-post-fader').innerHTML = '<li></li>';
	document.querySelector('keyframe-post-fader.ul.li').style.backgroundImage = 'url(' + imageUrl + ')';
})();
