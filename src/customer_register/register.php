<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Customer Register</title>
    <link rel="stylesheet" href="reg_style.css" />
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="register.php" method="post" class="form">
      <?php include('errors.php'); ?>
        <div class="input-box">
          <label>Userame</label>
          <input type="text" placeholder="Enter full name" name="username"  required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Email Address</label>
            <input type="email" placeholder="Enter email address" name="email" required />
          </div>
          <div class="input-box">
           <label>Phone Number</label>
           <input type="tel" pattern="[0-9]{10}" maxlength="10"  placeholder="Enter phone number" name="phone" required />
          </div>
        </div>
        <div class="column">
          <div class="input-box">
            <label>Password</label>
            <input type="password" placeholder="Enter password" name="password_1" required />
          </div>
          <div class="input-box">
            <label>Confirm Your Password</label>
            <input type="password" placeholder="Enter password" name="password_2" required />
          </div>
        </div>
        <button name="reg_user">Submit</button>
        <div class="sign">
          Have an account? <a href="../customer_register/login.php">Sign in</a>
        </div>
      </form>
    </section>
  </body>
</html>

