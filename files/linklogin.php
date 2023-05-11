<?php
require_once 'connection.php';
$uname=$_POST["nickname"];
$pwd=$_POST["password"];

$sql="SELECT * FROM users WHERE nickname='$uname'";
$result=$conn->query($sql);
if($result->num_rows==0){
    echo "ERRORE: Credenziali errate.";
    sleep(3);
    header("Location: login.php");
}else{
    $pwd=hash('ripemd160', $pwd);
    $sql="SELECT * FROM users WHERE nickname='$uname' AND password='$pwd'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $_SESSION['utente']=$uname;
        header("Location:index.php");
    }else{
        header("Location:login.php");
    }
}

?>