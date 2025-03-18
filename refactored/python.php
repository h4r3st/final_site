<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<?php
include("./elements/head.html");
?>
<link rel="stylesheet" href="./styles/style_python.css" />

<body>
  <?php
  include("./elements/header.html");
  include("./elements/button_and_fixed.html");
  ?>
  <div class="container">
    <div class="text">
      <p>
        Python is a high-level, interpreted programming language created by
        Guido van Rossum in 1991. Known for its clear syntax and readability,
        Python is widely used in web development, data science, artificial
        intelligence, and scripting. Its philosophy emphasizes code simplicity
        with the famous "Zen of Python" principles.
      </p>

      <div class="cta-section">
        <p class="cta-text">Start</p>
        <a
          href="https://www.youtube.com/watch?v=ix9cRaBkVe0"
          class="cta-link">
          Make your first step
        </a>
        <div class="download-section">
          <p>Download</p>
          <a href="https://www.python.org/downloads/" class="download-link">
            Python
          </a>
        </div>
      </div>
    </div>

    <div class="photo">
      <img
        src="/public/images/5968286-4256631643.png"
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