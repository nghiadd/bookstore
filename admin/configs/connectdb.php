<?php
//Connect to MySQL
$_connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die('Not connected to MySQL');

//Select database
$_selecteddb = mysql_select_db(DB_DATABASE, $_connection) or die('Not selected database');
?>