<?php
session_start();

if(!isset($_SESSION['utente'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>    
    <title>Index-post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
</head>
<body>
    <?php
    if(!isset($_SESSION['utente'])){
    ?>
        <a href="login.php"><button class="btn btn-outline-danger">Loggati</button></a>
    <?php
    }
    ?>
    <br>
    <label>tecnologie usate:</label>
    <br>
    -AWS (Amazon Web Service)
    -Docker
    -Linux
    <br>
    <label>svolgimento:</label>
    <br>
    - creazione di un'istanza con base Ubuntu e creazione di una chiave .pem
    <br>
    -installazione di docker tramite il terminale powershell
    <br>
    -creazione del container di docker
    <br>
    -aggiunta della pagina index e del login
    <br>
    -creazione del certificato SSL
</body>