<!-- Scripts for Beautifying Posts -->
<script type="text/javascript">
(function(){
	// get the source url of the imaged with the id "featured-image"
	var imgUrl = document.getElementById("featured-image").src;

	// remove the child nodes 0, 1 and 2
	var list = document.getElementById("keyframe-post-fader"); 
	list.removeChild(list.childNodes[0]);
	list.removeChild(list.childNodes[1]);
	list.removeChild(list.childNodes[2]);

	// create new list item	
	var listItem = document.createElement("li");

	// give the new list item an id attribute called 'background'
	listItem.id = "background";

	// now append the new list item to the unordered list
	list.appendChild(listItem);

	// assign new background image to the first list item
	listItem.style.backgroundImage = "url('" + imgUrl + "')";
})();
</script>

