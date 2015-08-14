<?php
function category_for_option()
{
    $sql = "SELECT * FROM category";
 
    $query = mysql_query($sql);
 
    return $query;
}
?>