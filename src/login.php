<?php
session_start();
include("./database.php");
?>

<!DOCTYPE html>
<html lang="en">
<?php
include("./elements/head.html");
?>
<link rel="stylesheet" href="../src/styles/style.css" />

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
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($username)) {
      echo "<script>alert('Please, provide username');</script>";
    } elseif (empty($password)) {
      echo "<script>alert('Please, provide password');</script>";
    } else {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
      try {
        mysqli_query($conn, $sql);
        echo "<script>
      alert('Регистрация прошла успешно!');
      window.location.href = './index.php';
  </script>";
      } catch (mysqli_sql_exception) {
        echo "<script>alert('This username is taken')</script>";
      }
    }
  }
  mysqli_close($conn);
  ?>

  <?php


  ?>
  <?php
  include("./elements/footer.html");
  include("./elements/script.html");
  ?>
</body>

</html>