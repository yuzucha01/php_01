<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eat Shop</title>
    <link rel="stylesheet" href="css/top-page.css" />
  </head>
  <body>
    <header>
      <h1>
        <a href="/">EAT SHOP</a>
      </h1>
      <div class="content">
        <ul>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">MEAT</a></li>
          <li><a href="#">CAKE</a></li>
          <li><a href="#">FRUITS</a></li>
        </ul>
      </div>
    </header>
    <section class="wrapper">
      <div class="container">
        <div class="content">
          <div class="content-item">
            <img src="img/料理top.png" class="image" />
          </div>
          <div class="content-item">
            <div class="text">
              <h2 class="heading">What do you eat today?</h2>
              <p>毎日の食事が楽しみになるサイトです</p>
            </div>
          </div>
        </div>
      </div>
    </section>





    <main>
      <div class="main-top">

      </div>
    </main>






    <div class="footer-contents">
      <div class="logout">
        <a href="logout.php" class="btn btn-malformation">LOGOUT</a>
      </div>
      <div class="form">
        <a href="form.html" class="btn btn-malformation">お問い合わせ</a>
      </div>
    </div>

    <footer>
    <svg viewBox="0 0 120 28">
      <defs>
        <mask id="xxx">
          <circle cx="7" cy="12" r="40" fill="#fff" />
        </mask>

        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="
                1 0 0 0 0
                0 1 0 0 0
                0 0 1 0 0
                0 0 0 13 -9" result="goo" />
            <feBlend in="SourceGraphic" in2="goo" />
          </filter>
        <path id="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
      </defs>

      <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2" ></use>
      <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0" ></use>
      <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
    </svg>
    </footer>
  </body>
</html>
