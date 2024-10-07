<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'kolokvijumi';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    exit('Greska je ' . $conn->connect_errno);
}
