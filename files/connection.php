<?php
$hostname="54.159.254.118";
$username="admin";
$password="4BgNp6y1Xqom";
$database="main";
$port="3306";
// creo la connessione
$conn=new mysqli($hostname,$username,$password,$database,$port);
// controllo la connessione
if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
} 
?>