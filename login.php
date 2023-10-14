<?php
include 'connection.php';
ob_start();
session_start();

$user = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "select user_id, user_nome, user_email from tbl_usuarios where user_email = '$user' and user_senha = CONCAT('ABL',md5('$senha'));";

$query = mysqli_query($conn, $sql);
$total = mysqli_num_rows($query);
$linha = $query -> fetch_assoc();
if($total === 1){
    $_SESSION['usuario_logado'] = 1;
    $_SESSION['codigoUsuario'] = $linha['user_id'];
    $_SESSION['nomeUsuario'] = $linha['user_nome'];
    
    echo true;
}else{
    echo false;
}

$conn->close();
?>