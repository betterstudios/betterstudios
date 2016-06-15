<!-- Scripts for Beautifying Posts -->
<script type="text/javascript">
(function(){
	var imgUrl = document.getElementById("featured-image").src;
	var bkgDiv = document.querySelector(".keyframe-post-fader");
	bkgDiv.innerHTML = "<li></li>";
	bkgDiv.style.backgroundImage = "url('" + imgUrl + "')";
})();
</script>

