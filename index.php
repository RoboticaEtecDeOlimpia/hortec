<?php
//conecta o banco
include_once('functions/config.php');
//inicia sessão
session_start();
if($_SESSION['usuario_logado'] == 1){
    header("Location:home.php");
}else{
    header("Location:login.html");
}
?>