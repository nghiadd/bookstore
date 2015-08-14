<?php
function get_user_by_id($user_id = 0)
{
    $sql = "SELECT * FROM user
            WHERE user_id = $user_id";
	
    $query	= mysql_query($sql);
	$result	= mysql_fetch_assoc($query);
	
    return $result;
}

function get_user_by_username($username = '')
{
    $sql = "SELECT * FROM user
            WHERE username = '".addslashes($username)."'";
            
    $query	= mysql_query($sql);
	$result	= mysql_fetch_assoc($query);
	
    return $result;
}

function user_add($data = array())
{
    $sql = "INSERT INTO user(group_id, username, password, fullname, email, birthday, gender)
			VALUES(".$data['group_id'].", '".$data['username']."', '".$data['password']."', '".$data['fullname']."', '".$data['email']."', '".$data['birthday']."', ".$data['gender'].")";
	
    $result = mysql_query($sql);
	
    return $result;
}

function user_edit($data = array(), $user_id = 0)
{
    $sql = "UPDATE user SET group_id = ".$data['group_id'].", username = '".$data['username']."', 
	password = '".$data['password']."', fullname = '".$data['fullname']."', 
	email = '".$data['email']."', birthday = '".$data['birthday']."', gender = ".$data['gender']."
	WHERE user_id = ".$user_id;
	
    $result = mysql_query($sql);
	
    return $result;
}

function user_get_list($start = 0, $limit)
{   
    $sql = "SELECT user.*, user_group.name FROM user
            INNER JOIN user_group ON user.group_id = user_group.group_id
            ORDER BY user_id DESC
            LIMIT $start, $limit";
	
    $query = mysql_query($sql);
	
    return $query;
}

function user_count_list()
{
	$sql = "SELECT COUNT(user_id) AS row_number FROM user";
	
    $query = mysql_query($sql);
    $result = mysql_fetch_assoc($query);
	
    if($result !== false)
    {
        return $result['row_number'];
    }
    else
    {
        return 0;
    }
}

function user_delete_by_user_id($user_id = 0)
{
    $sql = "DELETE FROM `user`
            WHERE `user_id` = $user_id";
            
    return mysql_query($sql);
}
?>