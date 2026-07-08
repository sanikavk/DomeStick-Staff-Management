<?php include('adminserver.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin_style.css">
  </head>
  <body>
    <div class="center">
      <h1 style="color: white;"> Login </h1>
      <form method="post" action="admin_login.php">
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
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
         <a href=""></a>
        </div>
      </form>
    </div>
  </body>
</html>
</body>
</html>