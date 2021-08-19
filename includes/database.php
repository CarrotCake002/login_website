<?php

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'login_website';

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn)
    die("Database connection failed!");