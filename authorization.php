<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="autostyle.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <script src="validateLogin.js"></script>
    <title>Авторизация </title>
</head>

<body class="auth-page">  
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
      <h1 class="title">Авторизация</h1>
    </div>
  </header>
   
      <section class="container-auto">
        <div class="auth-content">
          <form class="content" action="auth.php" method="POST" onsubmit="return validateLogin(this);">
            <div class="dws-input">
                <input type="text" placeholder="Введите логин" name="login" class="form__item__input--login" >
                <span class="form__error">Введите корректный логин</span>
            </div>
            <div class="dws-input">
                <input type="password" placeholder="Введите пароль" name="password" class="form__item__input--pass" >
                <span class="form__error">Введите корректный пароль</span>
            </div> 
            <br>
            <div>
              <div class="sub-login">
                <a href="registration.php" >Регистрация</a>
              </div>  
              <br>           
              <div >
                <button type="submit" >Авторизация</button>               
              </div>
            </div>
          </form>
        </div>
          <div class="nerds-about">
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
          </div>        
      </section>

<footer class="main__footer container ">

    <div class="social--block">
      <a class="icon icon--fb" href="https://www.facebook.com/userregular" target="_blank"><span class="visually-hidden">Фейсбук</span></a>
      <a class="icon icon--ig" href="https://www.instagram.com/p_butenk0/" target="_blank"><span class="visually-hidden">Инстарам</span></a>
    </div>

   <div class="info--block">
    <h2>Давайте дружить, это выгодно!</h2>
    <p>Скидки 10% для друзей из социальных сетей.</p>
   </div>
  </footer>
</body>
</html>