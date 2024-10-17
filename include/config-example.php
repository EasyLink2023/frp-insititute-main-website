<?php

#Project BASE URL
define('BASE_URL', 'http://localhost/easylink/frpinstititue/');

#database connection

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'frpinstititue';
$db_connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (!$db_connect) {
    die("Database connection failed: " . mysqli_connect_error());
}

#TimeZone of project
date_default_timezone_set('Asia/Calcutta');
