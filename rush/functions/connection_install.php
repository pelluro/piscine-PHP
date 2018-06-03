<?php
require_once dirname(__FILE__)."/mysql_logins.php";
$db = mysqli_connect(NULL, $logindb, $passworddb, NULL,0,'/run/mysqld/mysqld10.sock');

if (mysqli_connect_errno())
{
    echo 'Failed to connect to MySQL:' . mysqli_connect_error();
    exit;
}
?>