<?php

$dbHost = '[Your host]';
$dbUser = '[Your user]';
$dbPass = '[Your password]';
$dbName = '[Your database name]';

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn)
    die("Database connection failed!");

?>