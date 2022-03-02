<?php

/*
This file is part of SecureSystem.
Copyright (C) 2022 Santiago Fernández, Airgold3 
    SecureSystem is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.
    SecureSystem is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with SecureSystem.  If not, see <https://www.gnu.org/licenses/>.
*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

</head>
<body>
<section class="wrapper">
<?php
    include_once("includes/functions.php");
    include_once("includes/process.php");
    if (isset($_SESSION['email'])) {
      header('location: index.php');
  }else{
    include_once("includes/capcha.php");
?>
        <div class="main-content">
          <h3>Sign Up</h3>
          <form method="POST">
        
            <div class="input-group">
              <label for="fullname">Username</label>
              <input type="text" name="username" placeholder="Fullname" id="fullname" required>
            </div>
            <div class="input-group">
              <label for="email">Email</label>
              <input type="email" name="email" placeholder="Email" id="email" required>
            </div>
            <div class="input-group">
              <label for="password">Password</label>
              <input type="password" name="password" placeholder="Password" id="password" required>
            </div>
            <div class="input-group">
              <label for="password">Repit Password</label>
              <input type="password" name="password2" placeholder="Password" id="password" required>
            </div>
             
              <div class="input-group">
              <label><b><?php echo $first_num . " " . $operator . " " . $second_num . " = "; ?></b></label>
            <input type="number" name="answer" placeholder="Solve the captcha" required>
              </div>
            <div class="input-group">
            <input type="submit" name="register_btn">
            </div>
          </form>
          <div class="social">
          <p>Already member? <a href="login.php" style="color: #2aff; text-decoration: none; ">Sign In</a></p>
        </div>
      </section>
      <br><br><br>
      <p class="footer"><a href="https://github.com/Airgold3/Securesystem/" class="securesystem">Securesystem</a> is under license (GPLv3) - Copyright © 2022 </p>
   <p class="footer">By <a href="https://github.com/Airgold3" class="button"><b>Airgold3</b></a> <i class="fab fa-github"></i></p>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
<?php
}
?>