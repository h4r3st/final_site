<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<?php
include("./elements/head.html");
?>
<link rel="stylesheet" href="./styles/style_c.css" />

<body>
  <?php
  include("./elements/header.php");
  include("./elements/button_and_fixed.html");
  ?>
  <div class="container">
    <div class="text">
      <p>
        C++ is a general-purpose programming language created by Bjarne
        Stroustrup as an extension of the C language. Known for its high
        performance and fine-grained memory control, it's widely used in
        system programming, game development, and embedded systems. Combines
        both low-level and high-level features.
      </p>

      <div class="cta-section">
        <p class="cta-text">Start</p>
        <a
          href="https://www.youtube.com/watch?v=-TkoO8Z07hI"
          class="cta-link">
          You can do that
        </a>
        <div class="download-section">
          <p>Download</p>
          <a href="https://visualstudio.microsoft.com/downloads/" class="download-link">
            Visual Studio
          </a>
          <br />
          <a href="https://code.visualstudio.com/" class="download-link">
            Visual Studio Code
          </a>
        </div>
      </div>
    </div>

    <div class="photo">
      <img
        src="/public/images/c-logo-black-and-white-880528962.png"
        alt="java icon"
        class="java-image" />
    </div>
  </div>
  <div class="yt-player">
  <iframe width="720" height="405" src="https://www.youtube.com/embed/MNeX4EGtR5Y?si=N14YUqFO_1rHH0TS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <a href="https://www.w3schools.com/cpp/default.asp"><img src="https://www.svgrepo.com/show/330494/geeksforgeeks.svg" alt=""></a>
  </div>
  
  <div class="fottext">
    <p>

      The C programming language is one of the most influential and widely used programming languages in the history of computing. Developed in the early 1970s by Dennis Ritchie at Bell Labs, C was designed to provide low-level access to memory, efficient performance, and a simple yet powerful syntax. It has since become the foundation for many modern programming languages, including C++, Java, and Python.
      <br>
      <br>
      <big>Key Features of C:</big>
      <br>
      1. Low-Level Programming: C allows direct manipulation of hardware and memory, making it ideal for system-level programming.
      <br>
      2. Portability: Programs written in C can be compiled and run on various platforms with minimal changes.
      <br>
      3. Efficiency: C is known for its high performance and minimal runtime overhead, making it suitable for resource-constrained environments.
      <br>
      4. Structured Programming: C supports functions, loops, and conditional statements, enabling modular and organized code.
      <br>
      <br>
      <big> Where is C Used?</big>
      <br>
      C is a versatile language used in a wide range of applications, including:
      <br>
      1. Operating Systems: C is the backbone of many operating systems, including Unix, Linux, and Windows. It is used to write kernels, device drivers, and system utilities.
      <br>
      2. Embedded Systems: Due to its efficiency and low-level capabilities, C is widely used in embedded systems, such as microcontrollers, IoT devices, and automotive systems.
      <br>
      3. Game Development: C is often used in game engines and performance-critical parts of games, where speed and control are essential.
      <br>
      4. Compilers and Interpreters: Many programming languages, including Python and PHP, are implemented using C.
      <br>
      5. Databases: Popular database systems like MySQL and PostgreSQL are written in C.
      <br>
      6. Networking: C is used to develop network protocols and communication software.
      <br>
      7. Scientific Computing: C is employed in high-performance computing and simulations due to its speed and precision.


    </p>
  </div>

  <?php
  include("./elements/footer.html");
  include("./elements/script.html");
  ?>
</body>

</html>