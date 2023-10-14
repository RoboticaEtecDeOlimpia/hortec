<?php
include_once 'config.php';

if(isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['senha'])){
    $user = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //var_dump($user.$email.$senha);
    $sql = "insert into tbl_usuarios (user_nome, user_email, user_senha) values ('$user', '$email', CONCAT('ABL', md5('$senha')));";
    if($conn->query($sql)){
        echo true;
    }else{
    echo false;
    }
}else{
}
$conn->close();