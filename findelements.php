<?php
function findElements() {
	echo "<script>
		window.onload = function(){
			colorBlind(document.body,\"background-color\");
			var elems = document.body.getElementsByTagName(\"*\");
	
			for (var i = 0; i < elems.length; i++) {
				colorBlind(elems[i],\"background-color\");
				colorBlind(elems[i],\"color\");
			}
		};
	</script>";
}