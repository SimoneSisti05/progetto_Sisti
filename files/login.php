<!DOCTYPE html>
<html>
    <head>
      <title>login</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="style.css" rel="stylesheet">
    </head>
  <body>
    <center>
    
    <main class="form-signin w-100 m-auto">
     <form action="linklogin.php" method="post">
     <div class="separatore" style="border:100px solid white;">
     </div>
     <div class="bordo" style="text-align:center; width:25%; background-color:#ffffff; vertical-align:middle; text-align:center; border:3px solid black; border-radius:30px;" >
        <h1 class="h3 mb-3 fw-normal" style="whidth:50px; height:50px">Accedi</h1>
    
        <div style="text-align:center; justify-content: center; padding-left: 15%;">
          <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username" style="text-align:center; width:80%;" required>
        </div>
        <div style="text-align:center; justify-content: center; padding-left: 15%;">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" style="text-align:center; width:80%;" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-,.]).{8,30}$" title="deve contenere almeno un carattere maiuscolo, uno minuscolo, uno speciale e deve essere lungo almeno 8 caratteri" reqiured>
        </div>

        <div style="text-align:center; padding-top: 10px; padding-bottom: 10px;">
          <button class="btn btn-primary" type="submit" style="align: center;">Accedi</button>
        </div>

      </div>
      </form>
    </main>
   </center>
  </body>
</html>