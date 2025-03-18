<header>
  <div
    style="
        background-color: black;
        display: flex;
        height: 65px;
        justify-content: flex-end;
        align-items: center;
      ">
    <p class="quote"> <?php $quotes = array("// Don’t comment bad code – rewrite it // ", 
                                            "// Fix the cause, not the symptom // ",
                                            "// Code is read much more often than it is written // ",
                                            "// Code is like humor. When you have to explain it, it’s bad // ");
        $i = rand(0, 3);
        echo $quotes[$i]; ?> </p>
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