<?php
function category_for_option()
{
    $sql = "SELECT * FROM category";
 
    $query = mysql_query($sql);
 
    return $query;
}

function category_get_by_id($category_id) 
{
	$sql = "SELECT * FROM category WHERE category_id = $category_id";
	
	$query = mysql_query($sql);
	$result = mysql_fetch_assoc($query);
	
	return $result;
}

?>