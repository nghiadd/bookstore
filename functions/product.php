<?php
function product_get_by_id($product_id = 0)
{
    $sql = "SELECT * FROM product
            WHERE product_id = $product_id";
	
    $query	= mysql_query($sql);
	$result	= mysql_fetch_assoc($query);
	
    return $result;
}

function product_get_list($start = 0, $limit)
{
    $sql = "SELECT * FROM product
            ORDER BY product_id DESC
            LIMIT $start, $limit";
            
    $query = mysql_query($sql);
    
    return $query;
}

function product_get_list_by_category($start = 0, $limit, $category_id)
{
    $sql = "SELECT * FROM product WHERE category_id = $category_id
            ORDER BY product_id DESC
            LIMIT $start, $limit";
            
    $query = mysql_query($sql);
    
    return $query;
}


function product_count_list()
{
    $sql = "SELECT COUNT(product_id) AS number_row
            FROM product";
    
    $query = mysql_query($sql);
    $result = mysql_fetch_assoc($query);
    
    if($result !== false)
    {
        return $result['number_row'];
    }
    else
    {
        return 0;
    }
}

function product_count_list_by_category($category_id)
{
    $sql = "SELECT COUNT(product_id) AS number_row
            FROM product WHERE category_id = $category_id";
    
    $query = mysql_query($sql);
    $result = mysql_fetch_assoc($query);
    
    if($result !== false)
    {
        return $result['number_row'];
    }
    else
    {
        return 0;
    }
}

function product_add($data = array())
{
    $sql = "INSERT INTO product(category_id, name, detail, image, author, translator, publisher, length, size, cover, price, status)
            VALUES(".$data['category_id'].", '".$data['name']."', '".$data['detail']."', '".$data['image']."', '".$data['author']."', 
			'".$data['translator']."', '".$data['publisher']."', ".$data['length'].", '".$data['size']."', '".$data['cover']."', 
			".$data['price'].", ".$data['status'].")";
 
    $result = mysql_query($sql);
 
    return $result;
}

function product_edit($data = array(), $product_id = 0)
{
    $sql = "UPDATE product SET category_id = ".$data['category_id'].", name = '".$data['name']."', detail = '".$data['detail']."', 
	image = '".$data['image']."', author = '".$data['author']."', translator = '".$data['translator']."', publisher = '".$data['publisher']."',
	length = ".$data['author'].", size = '".$data['size']."', cover = '".$data['cover']."', price = ".$data['price'].", status = ".$data['status']."	
    WHERE product_id = ".$product_id;
	
    $result = mysql_query($sql);
	
    return $result;
}

function product_delete_by_product_id($product_id = 0)
{
    $sql = "DELETE FROM product
            WHERE product_id = $product_id";
			
    return mysql_query($sql);
}

?>

