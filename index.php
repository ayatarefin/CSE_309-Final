<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Software Firm Management</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  include "verification.php";
  ?>
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Alkatra&display=swap%27');


    * {
      margin: 0;
      padding: 0;
      font-family: 'Alkatra';
    }
  </style>
  <div class="main">
    <div class="main_container">

      <form class="form" id="loginForm" method="POST">
        <h1>LOGIN</h1>
        <?php if ($error_msg != '') {
          echo "<div class='text-red-500 text-sm mb-3'>$error_msg</div>";
        } ?>
        <input type="text" name="userId" required placeholder="User name" id="username">
        <input type="password" name="password" required placeholder="Password" id="pass">
        <button type="submit" name="submit">Log in </button>

        <p class="para-2">
          Not have an account? <a href="signup.html">Sign Up Here</a>
        </p>
      </form>
    </div>
  </div>
</body>

</html>