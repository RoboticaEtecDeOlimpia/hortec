<?php
const HOST = 'sitedoaugusto.com';
const USER = 'sitedoau_hortec_admin';
const DB   = 'sitodoau_db_hortec';
const PASS = 'JKE!I?B-A-WL';
const PORT = '3306'; 

$conn = new mysqli(HOST, USER, PASS);

$sensorAr = "select sns_nome from tbl_sensores where sns_localizacao = 'CantoDireito'";


