<!-- Scripts for Beautifying Posts -->
<script type="text/javascript">
setTimeout(function(){
	// get the source url of the imaged with the id "featured-image"
	var imgUrl = document.getElementById("featured-image").src;

	// assign the div with the identifier of "background" to a variable
	var bkgrndDiv = document.getElementById("background"); 

	// assign the image with the identifier of "header-icon" to a variable
	var headerIcon = document.getElementById("header-icon"); 

	// assign new background image to the div variable and the header icon
	bkgrndDiv.style.backgroundImage = "";
	bkgrndDiv.style.backgroundImage = "url('" + imgUrl + "')";
	headerIcon.style.width = "200px";
	headerIcon.style.height = "auto";
	headerIcon.style.borderRadius = "2px";
	headerIcon.src = imgUrl;
}, 5000);
</script>

