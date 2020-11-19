<?php
$servername = "localhost";
$email = "email";
$password = "password";

// Create connection
$conn = new mysqli($servername, $email, $password);
mysql_select_db("brokenauth");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<html>

  <head>
    <meta charset="utf-8"
  </head>
  <body>
    <main>
      <p>log in met je account</p>
      <form class="contact-form" action="signup.php" method="post">
      <input type="text" name="email" placeholder="email">
      <input type="password" name="password">
      <button type="submit" name="submit">log in</button>
      <p><a href="lostpsw.php">password reset</a></p>

      

    </main>
  </body>


</html>
