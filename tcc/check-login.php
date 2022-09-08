<?php
session_start();
include('conectbd.php');
 
if(empty($_POST['email']) || empty($_POST['senha'])) {
    header("location:login.php");
    exit();
} 

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "select userid, email from tbusuario where email='$email' and senha =md5('$senha')";
$result = $pdo->prepare($query);

$result->execute();
$check = $result->fetchAll(PDO::FETCH_ASSOC);
print_r($check);
if($check[0] >= 1) {
    $_SESSION['user'] = $email;
    header('location:certificado.php');
    exit();
} else {
    $_SESSION['semperm'] = true;
    header('location:login.html');
    exit();
}
?>