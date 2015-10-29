<?php

function getArrayFromFile($file){
	return json_decode(file_get_contents($file));
}

function getCategories(){
	return explode(PHP_EOL, file_get_contents($_SERVER['DOCUMENT_ROOT'].'/spb/data/categories.txt'));
}

function addCategoriesComboBox($id, $class = 'categories'){
	$categories = array_merge(array("ANY"), getCategories());
	
	echo "<select id='$id' class='$class'>";
	for($i = 0; $i < count($categories); $i++){
		$cat = $categories[$i];
		echo "<option value='$cat'>$cat</option>";
	}
	echo "</select>";
}

?>