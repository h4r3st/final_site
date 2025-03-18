<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<?php
include("./elements/head.html");
?>
<link rel="stylesheet" href="./styles/style_contact.css" />

<body>
  <?php
  include("./elements/header.html");
  include("./elements/button_and_fixed.html");
  ?>
  <div class="container">
    <div class="text">
      <p>You can contact with me</p>
      <ul type="none">
        <li class="refer"><a href="">Telegram</a></li>
        <li class="refer"><a href="">Email</a></li>
        <li class="refer"><a href="">Somewhere else </a></li>
      </ul>
    </div>

    <div class="photo">
      <img
        src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fc.tenor.com%2F8R2DqGM5GMwAAAAM%2Fgachi-billy-herrington.gif&f=1&nofb=1&ipt=1bbeb4cd76338072ca13e717dabb5abeb1c387a349489cca53a12f5f8a3bd433&ipo=images"
        alt="java icon"
        class="java-image" />
    </div>
  </div>

  <?php
  include("./elements/footer.html");
  include("./elements/script.html");
  ?>
</body>

</html>