<?php


  include('bdd.php');

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  </head>
  <body>


    <h2>Connexion</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">

          <?php

            if(isset($_POST['email']) && isset($_POST['password']))
            {
              $email = $_POST['email'];
              $password = $_POST['password'];
              $request = "SELECT * FROM user WHERE email='$email' AND password='$password'";
              $run = mysqli_query($conn,$request) or die(mysqli_error($conn));

              if (mysqli_num_rows($run)==1)
              {
                header("location: index.php");
                exit();
              }else{
                echo "cet utilisateur n'existe pas";
                exit();
              }

          }


           ?>


          <form action="connexion.php" method="post">
           <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Email</label>
             <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required >
             <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
           </div>
           <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
             <input type="password" name="password" class="form-control" id="exampleInputPassword1" required >
           </div>
           <button type="submit" name="submit" class="btn btn-primary">Se connecter</button>
         </form>
       </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  </body>
</html>
