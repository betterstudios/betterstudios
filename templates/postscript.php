<!-- Scripts for Beautifying Posts -->
<script type="text/javascript">
(function(){
	// get the source url of the imaged with the id "featured-image"
	var imgUrl = document.getElementById("featured-image").src;

	// remove the child nodes 0 and 1
	var list = document.getElementById("backgrounds"); 
	list.removeChild(list.childNodes);
	
	// assign new background image to the first list item
	list.style.backgroundImage = "url('" + imgUrl + "')";
})();
</script>

