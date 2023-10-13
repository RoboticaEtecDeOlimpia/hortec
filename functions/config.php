<?php
const HOST = 'sitedoaugusto.com';
const USER = 'sitedoau_admin_hortec';
const DB   = 'sitodoau_db_hortec';
const PASS = 'JKE!I?B-A-WL';
const PORT = '3306';

$conn = mysqli_connect(HOST, USER, PASS, DB, );
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);