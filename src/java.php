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
  include("./elements/header.php");
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

  <div class="yt-player">
    <iframe width="720" height="405" src="https://www.youtube.com/embed/l9AzO1FMgM8?si=DRIarMjQNuXZ_ryV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <a href="https://www.w3schools.com/java/default.asp"><img src="https://www.svgrepo.com/show/330494/geeksforgeeks.svg" alt=""></a>
    </div>

  <div class="fottext">
    <p>

      Java is one of the most widely used and enduring programming languages in the world. Developed by Sun Microsystems (now owned by Oracle) and released in 1995, Java was designed with the principle of "write once, run anywhere" (WORA), meaning that Java code can run on any device equipped with a Java Virtual Machine (JVM). Its robustness, portability, and object-oriented nature have made it a cornerstone of enterprise software development.
      <br>
      <br>
      Key Features of Java:
      <br>
      <br>
      Platform Independence: Java programs are compiled into bytecode, which can run on any platform with a JVM, making Java highly portable.

      Object-Oriented Programming (OOP): Java’s OOP principles, such as encapsulation, inheritance, and polymorphism, promote modular and reusable code.

      Strong Ecosystem: Java has a vast ecosystem of libraries, frameworks, and tools that simplify development for various applications.

      Automatic Memory Management: Java uses a garbage collector to automatically manage memory, reducing the risk of memory leaks.

      Multithreading: Java provides built-in support for multithreading, enabling the development of high-performance, concurrent applications.

      Security: Java’s runtime environment includes features like bytecode verification and a security manager, making it a secure choice for enterprise applications.
      <br>
      <br>
      Where is Java Used?
      <br>
      <br>
      Java’s versatility and reliability have made it a popular choice for a wide range of applications, including:

      Enterprise Software: Java is the backbone of many large-scale enterprise applications, including customer relationship management (CRM) systems, enterprise resource planning (ERP) systems, and banking software.

      Web Development: Frameworks like Spring, Hibernate, and JavaServer Faces (JSF) are widely used to build scalable and secure web applications.

      Android Development: Java has historically been the primary language for Android app development, though Kotlin is now also widely used.

      Big Data: Java is used in big data technologies like Apache Hadoop and Apache Spark for processing and analyzing large datasets.

      Cloud Computing: Java is a popular choice for building cloud-based applications and microservices, thanks to frameworks like Spring Boot and Micronaut.

      Internet of Things (IoT): Java’s portability and scalability make it suitable for developing IoT applications.

      Scientific Applications: Java is used in scientific research and high-performance computing due to its stability and performance.

      Game Development: Java is used in game development, particularly for mobile and desktop games, with frameworks like LibGDX.
      <br>
      <br>
      Demand for Java Developers:
      <br>
      <br>
      Java remains one of the most in-demand programming languages, and its popularity shows no signs of waning. Here’s why:

      Enterprise Adoption: Java is the preferred language for many large organizations, ensuring a steady demand for Java developers.

      Android Ecosystem: Despite the rise of Kotlin, Java remains widely used in Android development, creating opportunities for mobile app developers.

      Big Data and Cloud Computing: The growth of big data and cloud computing has increased the demand for Java developers skilled in these areas.

      Legacy Systems: Many legacy systems are written in Java, requiring maintenance and updates, which keeps Java developers in demand.

      Strong Community: Java has a large and active community, providing extensive resources, libraries, and frameworks for developers.

      High Salaries: Java developers are among the highest-paid professionals in the tech industry, reflecting the language’s importance and widespread use.
    </p>
  </div>
  <?php
  include("./elements/footer.html");
  include("./elements/script.html");
  ?>

</body>

</html>