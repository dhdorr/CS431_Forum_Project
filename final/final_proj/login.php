<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1">
    <title>My Log In</title>
    <!-- Insert Navbar -->
    <?php require "header.php"; ?>
  </head>
  <body>
    <div class="container-fluid">
      <h2>We are logging in.</h2>
      <form class="form-login" action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="pwd" placeholder="Password">
        <button type="submit" name="login_submit" class="btn btn-dark">LOG IN</button>
      </form>
    </div>
  </body>
</html>
