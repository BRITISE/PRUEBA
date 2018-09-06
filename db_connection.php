<?php

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "xmd7550"; // MySQL user. eg. root ( if your on localserver)
$password = "XMD7550"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "infofs"; // MySQL Database name

// Connect to MySQL Database 
$db = mysql_connect($host, $user, $password) or die("Could not connect to database");

// Select MySQL Database 
mysql_select_db($database, $db);

?>