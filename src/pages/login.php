<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
        name="description"
        content="Hrst Studio - профессиональная разработка программного обеспечения" />
    <title>_hrst Studio</title>
    <link rel="stylesheet" href="./styles/style_login.css" />
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap"
        rel="stylesheet" />
    <!-- FONTS -->
    <!-- ICON -->
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="/public/favicon/apple-touch-icon.png" />

    <link rel="icon" sizes="16x16" href="/public/favicon/favicon.ico" />
    <!-- ICON -->
</head>

<body>
    <header>
        <div
            style="
          background-color: black;
          display: flex;
          height: 65px;
          justify-content: flex-end;
          align-items: center;
        ">
            <p style="display: inline-block">_hrst Studio</p>
            <img
                src="/public/images/image.png"
                alt=""
                style="
            display: inline-block;
            position: relative;
            bottom: 5px;
            margin-right: 75px;
          " />
        </div>
        <div class="marquee">
            <div class="marquee-content">
                <span class="marquee-text"> Продам гараж. Не дорого </span>
                <span class="marquee-text">Тут должно быть что-то умное </span>
            </div>
        </div>
    </header>


    <div class="sticky">
        <p style="font-size: 35px; margin: 8px">Made with</p>
        <img src="/public/images/heart.png" alt="heart" style="height: 30px" />
    </div>
    <!-- Бургер-кнопка -->
    <div class="burger-button" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Меню, которое будет появляться под кнопкой -->
    <nav class="menu">
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="index.html">Home</a></li>
            <li><a href="java.html">Java</a></li>
            <li><a href="python.html">Python</a></li>
            <li><a href="c.html">C/C++</a></li>
            <li><a href="contact.html">Contacts</a></li>
        </ul>
    </nav>

    <!-- Затемнение и блюр для всей страницы -->
    <div class="overlay" onclick="toggleMenu()"></div>

    <script>
        // Кэшируем элементы при загрузке
        const menuElements = {
            menu: document.querySelector(".menu"),
            button: document.querySelector(".burger-button"),
            overlay: document.querySelector(".overlay"),
        };

        function toggleMenu() {
            const {
                menu,
                button,
                overlay
            } = menuElements;

            button.classList.toggle("active");
            menu.classList.toggle("open");
            overlay.classList.toggle("active");

            // Обновляем доступность
            const isOpen = menu.classList.contains("open");
            menu.setAttribute("aria-hidden", !isOpen);
            button.setAttribute("aria-expanded", isOpen);
        }

        // Закрытие меню по ESC
        document.addEventListener("keydown", (e) => {
            if (
                e.key === "Escape" &&
                menuElements.menu.classList.contains("open")
            ) {
                toggleMenu();
            }
        });
    </script>

    <main class="login-form">
        <form action="login.php" method="post">
            <label>username</label> <input type="text" name="username"><br>
            <label>password</label> <input type="password" name="password">
        </form>
    </main>

    <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}
</style>

<div class="footer">
  <p>Footer</p>
</div> 
</body>

</html>