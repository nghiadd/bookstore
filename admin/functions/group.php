<?php
function group_add($data = array())
{
    $sql = "INSERT INTO `group`(`name`, `status`, `createdon`, `updatedon`)
            VALUES('".$data['name']."', ".$data['status'].", ".$data['createdon'].", ".$data['updatedon'].")";
    
    $result = mysql_query($sql);
    
    return $result;
}

function group_edit($data = array(), $group_id = 0)
{
    $sql = "UPDATE `group` SET
            `name` = '".$data['name']."', status = ".$data['status'].", updatedon = ".$data['updatedon']."
            WHERE group_id = $group_id";
            
    $result = mysql_query($sql);
    
    return $result;
}

function group_get_group_by_group_id($group_id = 0)
{
    $sql = "SELECT * FROM `group`
            WHERE `group_id` = $group_id";
            
    $query = mysql_query($sql);
    $result = mysql_fetch_assoc($query);
    
    return $result;
}

function group_get_list($start = 0, $limit)
{
    $sql = "SELECT * FROM `group`
            ORDER BY `group_id` DESC
            LIMIT $start, $limit";
            
    $query = mysql_query($sql);
    
    return $query;
}

function group_count_list()
{
    $sql = "SELECT COUNT(group_id) AS number_row
            FROM `group`";
    
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

function group_delete_by_group_id($group_id = 0)
{
    $sql = "DELETE FROM `group`
            WHERE `group_id` = $group_id";
            
    return mysql_query($sql);
}

function group_for_option()
{
	$sql = "SELECT * FROM user_group";
	
    $query = mysql_query($sql);
	
	return $query;
}
?>