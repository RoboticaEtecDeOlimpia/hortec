<?php
const HOST = 'sitedoaugusto.com';
const USER = 'sitedoau_hortec_admin';
const DB   = 'sitedoau_db_hortec';
const PASS = 'JKE!I?B-A-WL';
const PORT = '3306'; 

$conn = new mysqli(HOST, USER, PASS, DB);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


