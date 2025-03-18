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
  include("./elements/header.html");
  include("./elements/button_and_fixed.html");
  ?>

    <main class="form-main">
        <form action="login.php" class="form">
        <label>Username</label> <br><input type="text" name="username"><br>
        <label>Password</label> <br><input type="password" name="password">
        <br>
        <input class="login"type="submit" name="login" value="login">
        </form>
    </main>

<?php
  include("./elements/footer.html");
  include("./elements/script.html");
  ?>
</body>
</html>