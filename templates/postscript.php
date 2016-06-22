<!-- Scripts for Beautifying Posts -->
<script type="text/javascript">

setTimeout(function(){
	// respond to CSS3 media query state changes within JavaScript with the window.matchMedia API. 
	// this is passed a media query string identical to those used in CSS
	var mq = window.matchMedia( "(min-width: 58em)" );

	// get the source url of the image with the id "featured-portrait" or "featured-landscape"
	var portraitUrl = document.getElementById("featured-portrait").src;
	var landscapeUrl = document.getElementById("featured-landscape").src;

	// assign the div with the identifier of "background" to a variable
	var bkgrndDiv = document.getElementById("background"); 

	// assign the image with the identifier of "header-icon" to a variable
	var headerIcon = document.getElementById("header-icon"); 

	// assign new background image to the div variable and the header icon
	headerIcon.style.width = "200px";
	headerIcon.style.height = "auto";
	headerIcon.style.borderRadius = "2px";
	if (mq.matches) {
		// window width is at least 58em
		headerIcon.src = landscapeUrl;
		bkgrndDiv.style.backgroundImage = "url('" + landscapeUrl + "')";
	} else {
		// window width is less than 58em
		headerIcon.src = portraitUrl;
		bkgrndDiv.style.backgroundImage = "url('" + portraitUrl + "')";
	}
}, 4000);

/* JavaScript Media Queries */
if (matchMedia) {
        var mq = window.matchMedia("(min-width: 58em)");
        mq.addListener(WidthChange);
        WidthChange(mq);
}

// media query change
function WidthChange(mq) {

	if (mq.matches) {
		// window width is at least 58em
		headerIcon.src = landscapeUrl;
		bkgrndDiv.style.backgroundImage = "url('" + landscapeUrl + "')";
	} else {
		// window width is less than 58em
		headerIcon.src = portraitUrl;
		bkgrndDiv.style.backgroundImage = "url('" + portraitUrl + "')";
	}

}
</script>

