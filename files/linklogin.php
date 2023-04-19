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
    $pwd=sha2($pwd);
    $sql="SELECT * FROM users WHERE nickname='$uname' AND password='$pwd'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        $_SESSION['idutente']=$result->fetch_assoc()['id'];
    }else{
        header("Location: index.php");
    }
}

?>