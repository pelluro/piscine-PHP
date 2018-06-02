<?php
$db = mysqli_connect(null, 'root', 'toto3008', null, 0, '/Users/mipham/Desktop/mamp/mysql/tmp/mysql.sock');

if (mysqli_connect_errno())
{
    echo 'Failed to connect to MySQL:' . mysqli_connect_error();
    exit;
}

function check_query($db, $insert)
{
    if (!mysqli_query($db, $insert))
    {
        echo("Error description: " . mysqli_error($db));
    }
}