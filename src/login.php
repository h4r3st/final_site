<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<?php
include("./elements/head.html");
?>
<link rel="stylesheet" href="./styles/style.css" />

<body>
  <?php
  include("./elements/header.php");
  include("./elements/button_and_fixed.html");
  ?>

  <main class="form-main">
    <form action="login.php" class="form" method="post">
      <label>Username</label> <br><input type="text" name="username" value=""><br>
      <label>Password</label> <br><input type="password" name="password" value="">
      <br>
      <input class="login" type="submit" name="login" value="login">
    </form>
  </main>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
      echo "<script>alert('You didn\'t pass a Username and/or Password');</script>";
    }
  }

  ?>
  <?php
  include("./elements/footer.html");
  include("./elements/script.html");
  ?>
</body>

</html>