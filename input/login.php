<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="/toko_native/assets/style/login.css">
  </head>
  <body>
    <header>
      <h1>LOGIN</h1>
    </header>
    <?php
    if(count($_GET)!=0){
      if($_GET["fail"] == "true"){echo("<script>alert(\"Salah Password\")</script>");}
    }
    ?>
    <form action=<?php echo(htmlspecialchars("/toko_native/input/input.php")) ?> method="post">
      <input type="text" name="user" placeholder="Username"> <br>
      <input type="password" name="pass" placeholder="Password"> <br>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
