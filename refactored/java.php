<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<?php
include("./elements/head.html");
?>
<link rel="stylesheet" href="./styles/style_java.css" />

<body>
  <?php
  include("./elements/header.html");
  include("./elements/button_and_fixed.html");
  ?>
  <div class="container">
    <div class="text">
      <p>
        Java is a high-level programming language developed by Sun
        Microsystems. It was originally designed for developing programs for
        set-top boxes and handheld devices, but later became a popular choice
        for creating web applications.
      </p>

      <div class="cta-section">
        <p class="cta-text">Start</p>
        <a
          href="https://github.com/data-flair/java-tutorial"
          class="cta-link">
          Your first step
        </a>
        <div class="download-section">
          <p>Download</p>
          <a
            href="https://www.oracle.com/java/technologies/javase-jdk11-downloads.html"
            class="download-link">
            JDK
          </a>
        </div>
      </div>
    </div>

    <div class="photo">
      <img
        src="/public/images/java-1024-1487088243.png"
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