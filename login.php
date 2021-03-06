<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mon site !</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="assets/css/style.css">
    
  </head>
  <body>
    <?php
    include("nav_bar.php"); // on appelle le fichier
    ?>
    <div class="container">
      <h1 class="text-xs-center">Connexion</h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <form action="login.php" method="post" class="p-y-3 p-x-2" novalidate>
            <input type="email" name="email" class="form-control" placeholder="Adresse e-mail">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe">
            <input type="submit" class="btn btn-success m-b-1" value="Connexion">
            <a href="oubli.php" class="text-success">Mot de passe oublié ?</a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>