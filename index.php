<?php
// $serverPost = $_SERVER['REQUEST_METHOD'] == 'POST';
// if ($serverPost) {
//    echo "1"; 
// }
//   print_r($_COOKIE["user"]);
  
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Нёрдс</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css">
  <script src="testing.js"></script>
  <script src="clocks.js"></script>
  <link rel="icon" type="image/png" href="img/fav-icon.png" sizes="16x16">
</head>
<body>
  <header class="main__header">
    <div class="container">
      <nav class="main-navigation">
        <a href="index.php" class="header__logo">
          <img src="img/nerds-logo.svg" alt="Нёрдс" width="160" height="65">
        </a>
          <ul class="site-navigation list">
                <li class="nav-current"><a href="#">Главная</a></li>
                <li><a href="index.php#about-us">О нас</a></li>
                <li><a href="catalog.php">Магазин</a></li>
                <li><a href="#contacts">Контакты</a></li>
                <? if ( isset( $_COOKIE["user"])): ?>
                  <li><a href="edit.php"><?=$_COOKIE["user"]?></a></li>
                <? endif; ?>
          </ul>        
          <ul class="user-navigation list">
          <li class="nav-cursor"><a href="basket.php"><img src="img/shopping-cart.svg "  alt="Корзина"></a></li>
          <? if ( isset( $_COOKIE["user"])): ?>
                  <li><a href="logout.php">Выход</a></li>
                  <? else: ?>
                    <li class="nav-cursor"><a href="authorization.php"><img src="img/user.svg"  alt="Авторизация"></a></li>
                  <? endif; ?>                                                  
          </ul>
      </nav>
    </div>
  </header>

  <main>
    <h1 class="visually-hidden">Нёрдс</h1>

<section class="slider">
  <div class="container">
    <div id="clock"></div>
    <h2 class="visually-hidden">Преимущества</h2>
    <input type="radio" class="visually-hidden" id="product-1" name="toggle" checked>
    <input type="radio" class="visually-hidden" id="product-2" name="toggle">
    <input type="radio" class="visually-hidden" id="product-3" name="toggle">
   <div class="slider__controls">
         <label for="product-1" class="slider__controls--item slider__controls-item--1">Первый</label>
         <label for="product-2" class="slider__controls--item slider__controls-item--2">Второй</label>
         <label for="product-3" class="slider__controls--item slider__controls-item--3">Третий</label>
   </div>

       <ul class="slider__list list">
         <li class="slider-item">
           <h3>Долго, дорого, скрупулезно.</h3>
           <p>Математически выверенный дизайн<br>
             для вашего сайта или мобильного приложения.</p>
           <a class="button slider__button" href="#">Узнать больше</a>
         </li>
         <li class="slider-item">
           <h3>Любим математику как никто другой</h3>
           <p>Никакого креатива, только математические формулы<br>
             для расчета идеальных пропорций.</p>
           <a class="button slider__button" href="#">Узнать больше</a>
         </li>
         <li class="slider-item">
           <h3>Только ночь,<br>
              только хардкор</h3>
           <p>Работать днем, как все? Мы против этого.<br>
             Ближе к полуночи работа только начинается.</p>
           <a class="button slider__button" href="#">Узнать больше</a>
         </li>
       </ul>
  </div>
</section>

      <div class="container">
        <section class="features">
          <h2 class="visually-hidden">Преимущества</h2>
          <ul class="features-list list">
            <li class="features-item"><img src="img/illustration-1.jpg" alt="Веб-сайт" width="300" height="146">
            <h3>Веб-сайты</h3>
            <p>Мир никогда не будет прежним<br>
               после того как увидит ваш сайт!</p>
            <button class="button">Заказать</button>
            </li>

            <li class="features-item"><img src="img/illustration-2.jpg" alt="Приложения" width="300" height="146">
            <h3>Приложения</h3>
            <p>Покорите топ-10 приложений в<br>
               AppStore и Google Play</p>
            <button class="button button--green">Заказать</button>
            </li>

            <li class="features-item"><img src="img/illustration-3.jpg" alt="Презентации" width="300" height="146">
            <h3>Презентации</h3>
            <p>Вы даже не подозреваете,<br>
               насколько вы изумительны!</p>
            <button class="button button--yellow">Заказать</button>
            </li>
          </ul>
      </section>

      <section class="about-us" id="about-us">
        <div class="about-us__info-block">
          <h2>Мы — маленькая, но гордая
            дизайн-студия из Харькова.</h2>
          <p>Исповедуем принципы минимализма и чистоты. Ставим математический расчет
            превыше креатива. Работаем не покладая рук, как роботы.</p>
          <b>Выполняем заказы на разработку:</b>

          <ul class="about-us__info-block__list list">
              <li>Веб-сайтов любой сложности</li>
              <li>Мобильных приложений для iOS и Android</li>
              <li>Слайдшоу и видео для корпоративных презентаций</li>
          </ul>
        </div>

        <div class="about-us__schedule-block">
          <img src="img/nerds-illustration.jpg" alt="Нёрдс"><br>
          <b>С 2019 года Любим точность во всем:</b>
          <ul class="about-us__schedule-block__list list">
              <li class="about-us__schedule-block__item--top">100<sup class="procent">%</sup></li>
              <li class="about-us__schedule-block__item--top">100<sup class="procent">%</sup></li>
              <li class="about-us__schedule-block__item--top">50<sup class="procent">%</sup></li>
              <li class="about-us__schedule-block__item--bottom">Уровень самоотдачи</li>
              <li class="about-us__schedule-block__item--bottom">Соблюдение сроков</li>
              <li class="about-us__schedule-block__item--bottom">Минимальная предоплата</li>
          </ul>
        </div>
      </section>
      <section class="logo-block">
        <h2 class="visually-hidden">Лого</h2>
          <ul class="logo-block__partners list container">
            <li><a href="#"><img src="img/logo-scs-key484687.png" class="logo-block__partners__img" alt="HTML academy" width="199" height="68"></a></li>
            <li><a href="#"><img src="img/NTU_KhPI_Logo-1.png" class="logo-block__partners__img" alt="Barbershop Borodinski" width="209" height="90"></a></li>
            <li><a href="#"><img src="img/beketova_logo.png" class="logo-block__partners__img" alt="Pink" width="185" height="52"></a></li>
            <li><a href="#"><img src="img/karazin_logo.png" class="logo-block__partners__img" alt="Mishka" width="173" height="84"></a></li>
          </ul>
      </section>
  </div>

      <section class="contacts">
        <h2 class="visually-hidden">Контанты</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.8166878060233!2d36.22630211571564!3d50.014790979417555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a1243f9e69d1%3A0x6daed05394f03251!2z0KXQsNGA0YzQutC-0LLRgdC60LjQuSDQvdCw0YbQuNC-0L3QsNC70YzQvdGL0Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDRgNCw0LTQuNC-0Y3Qu9C10LrRgtGA0L7QvdC40LrQuA!5e0!3m2!1sru!2sua!4v1619101096819!5m2!1sru!2sua"  width="100%" height="416" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>

      <div class="contacts__info" id="contacts">
        <b>NЁRDS DESIGN STUDIO</b>
        <p>61000, Харьков,<br>
          проспект Науки 14<br><br>
          тел. +380999639843
          <button class="button contacts__button">Напишите нам</button>
        </p>
      </div>
  </main>

  <footer class="main__footer container">

    <div class="social--block">
      <a class="icon icon--fb" href="https://www.facebook.com/userregular" target="_blank"><span class="visually-hidden">Фейсбук</span></a>
      <a class="icon icon--ig" href="https://www.instagram.com/p_butenk0/" target="_blank"><span class="visually-hidden">Инстарам</span></a>
    </div>

   <div class="info--block">
    <h2>Давайте дружить, это выгодно!</h2>
    <p>Скидки 10% для друзей из социальных сетей.</p>
   </div>
  </footer>

  <section class="modal modal-login">
    <h2>Напишите нам</h2>
    <form action="https://echo.html-academy.ru" class="login-form" method="post">
    <div class="modal-login__block">
      <p>
        <label for="user-login">Ваше имя:</label><br>
        <input id="user-login" type="text" name="login" placeholder="Имя Фамилия">
      </p>

      <p>
        <label for="user-email">Ваш e-mail:</label><br>
        <input id="user-email" type="password" name="password" placeholder="email@example.com">
      </p>
    </div>

      <p>
        <label for="user-message">Текст письма:</label><br>
        <textarea name="message" id="user-message" placeholder="В свободной форме"></textarea>
      </p>
    </form>
    <button class="button modal-button">ОТПРАВИТЬ</button>
    <button class="modal-close" type="button"><span class="visually-hidden">Закрыть</span></button>
  </section>

  <script type="text/javascript" src="script.js"></script>
</body>
</html>
