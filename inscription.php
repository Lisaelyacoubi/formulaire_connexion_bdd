<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  </head>
  <body>





    <h2>Inscription</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <?php
          $bdd = new PDO('mysql:host=localhost;dbname=Formulaire', 'lisaelyacoubi', 'Tsou56VWP', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

          if(isset($_POST['submit'])){
            if(isset($_POST['email']) AND isset($_POST['password'])){
              $email = $_POST['email'];
              $password = $_POST['password'];
              $requete = "INSERT INTO user (password, email) VALUES ('$password','$email')";
              $bdd -> exec($requete);
              header('Location: index.php');

            }

          }

           ?>


          <form action="inscription.php" method="post">
           <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Email address</label>
             <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
           </div>
           <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">Password</label>
             <input type="password" name="password" class="form-control" id="exampleInputPassword1">
           </div>
           <button type="submit" name="submit" class="btn btn-primary">Submit</button>
         </form>
       </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  </body>
</html>