<?php
if (!empty($_POST['login']) && !empty($_POST['password'])) {
  setCookie('login', $_POST['login'], time() + 800, null, null, false, true);
  setCookie('password', $_POST['password'], time() + 800, null, null, false, true);
}
 ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <title>Exercice 5</title>
  </head>
  <body>
      <div class="container">
          <div class="row justify-content-center bg-dark text-white">
    <p>
    <?php
      if (!empty($_POST['login']) && !empty($_POST['password'])) {
          echo !empty($_COOKIE['login']) && !empty($_COOKIE['password']) ? $_COOKIE['login'] . ' ' . $_COOKIE['password'] : '';
          ?>
          <form action="index.php" method="post">
            <label for="login">Pseudo : </label><input type="text" name="login" >
            <label for="password">Mot de passe : </label><input type="password" name="password">
            <input type="submit" name="submit" value="Valider">
          </form>
          <?php
      } else {
        ?>
        <form action="index.php" method="post">
          <label for="login">Pseudo : </label><input type="text" name="login" >
          <label for="password">Mot de passe : </label><input type="password" name="password">
          <input type="submit" name="submit" value="Valider">
        </form>
        <?php
      }
      ?>
    </p>
          </div>
      </div>
  </body>
</html>
