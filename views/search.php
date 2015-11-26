<?php
function searchbar(){
		$defaultText = htmlentities($_GET['keywords']);
		echo "
		
		<form name="input" action="search.php" method= "get">
		<input type="text" id="keywords" name="keywords" size="50" class="searchbox" value="$defaultText"/>
		</div>
	";
		echo "
		<input type ="submit" value="Search" class="button"/> ";
		



}


?>