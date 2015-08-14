<?php
function get_user_by_username($username = '')
{
    $sql = "SELECT * FROM user
            WHERE username = '$username'";
            
    $query	= mysql_query($sql);
	$result	= mysql_fetch_assoc($query);
	
    return $result;
}

function get_user_by_email($email = '')
{
	$sql = "SELECT * FROM user WHERE email = '$email'";
	
	$query = mysql_query($sql);
	$result = mysql_fetch_assoc($query);
	
	return $result;
}

function get_user_by_id($user_id = 0)
{
    $sql = "SELECT * FROM user
            WHERE user_id = $user_id";
	
    $query	= mysql_query($sql);
	$result	= mysql_fetch_assoc($query);
	
    return $result;
}
?>