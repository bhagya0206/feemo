<?php

$server_name="localhost";
$user_na,e="root";
$user_pass='';
$database_name="music_user";

$con =mysqli_connect($server_name,$user_name,$user_pass,$database_name);
if (!$con) {
    die('connection failed' .mysql_error());
} else {
    echo('database successfully connected');
}

?>