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

  <main class="container">
    <div class="text">
      <p>Create your dreams</p>
      <p></p>
      <p>Start now</p>
      <p></p>
      <p>It's your choice</p>
    </div>
    <div class="QRcode">
      <img src="/public/images/QRcode_a1.png" alt="QR-code" />
    </div>

    <div class="subtext">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
        provident dicta labore sint enim minima iusto officia distinctio id.
        Quos, architecto tempora! Deserunt eligendi rerum necessitatibus cum
        illum quibusdam reiciendis!
      </p>
    </div>
  </main>

  <?php
  include("./elements/footer.html");
  include("./elements/script.html");
  ?>
</body>

</html>