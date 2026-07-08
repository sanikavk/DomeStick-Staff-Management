<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer Login</title>
    <link rel="stylesheet" href="log_style.css">
  </head>
  <body>
    <div class="center">
      <h1 style="color: white;"> Login </h1>
      <form method="post" action="login.php">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input name="login_user" type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="../customer_register/register.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
</body>
</html>