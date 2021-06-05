<?php include "catalogAdd.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Каталог</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css">
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
          <? if ( isset( $_COOKIE["user"])): ?>
                  <li><a href="logout.php">Выход</a></li>
                  <? else: ?>
                    <li class="nav-cursor"><a href="authorization.php"><img src="img/user.svg"  alt="Авторизация"></a></li>
                  <? endif; ?>                                                  
          </ul>
      </nav>
      <h1 class="title">Магазин готовых шаблонов</h1>
    </div>
  </header>

  <main>
   <h1 class="visually-hidden">Каталог</h1>
  <div class="container">

    <div class="catalog-columns">
    <section class="filters">
      <h2 class="visually-hidden">Фильтр товаров</h2>
      <form action="https://echo.htmlacademy.ru" class="filters__form" method="get">

        <fieldset>
          <legend>Стоимость:</legend>
           <div class="range-filter">
             <div class="range-controls">
               <div class="scale">
                 <div class="bar"></div>
               </div>
               <div class="toggle toggle-min"></div>
               <div class="toggle toggle-max"></div>
             </div>
             <div class="price-controls">
                  <label for="" class="min-price">от <input type="text" name="min-price" placeholder="0"></label>
                  <label for="" class="max-price">до <input type="text" name="max-price" placeholder="15 000"></label>
             </div>
           </div>
        </fieldset>

        <fieldset>
          <legend>Сетка:</legend>

              <ul class="list">
                <li class="filters__option">
                <input class="visually-hidden filters__input filters__input--radio" type="radio" id="filter-adaptive" name="product-group" value="shaving" checked>
                <label for="filter-adaptive">Адаптивная</label>
                </li>

                <li class="filters__option">
                <input class="visually-hidden filters__input filters__input--radio" type="radio" id="filter-fix" name="product-group" value="hair-cave">
                <label for="filter-fix">Фиксированная</label>
                </li>

                <li class="filters__option">
                <input class="visually-hidden filters__input filters__input--radio" type="radio" id="filter-rubber" name="product-group" value="acessories">
                <label for="filter-rubber">Резиновая</label>
                </li>
              </ul>
        </fieldset>
        <fieldset>

          <legend>Особенности:</legend>

          <ul class="list">
              <li class="filters__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-slider" checked>
              <label for="filter-slider">Слайдер</label>
              </li>

              <li class="filters__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-block">
              <label for="filter-block">Блок преимуществ</label>
              </li>

              <li class="filters__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-news" checked>
              <label for="filter-news">Новости</label>
              </li>

              <li class="filters__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-gallery">
              <label for="filter-gallery">Галерея</label>
              </li>

              <li class="filters__option">
              <input class="visually-hidden filters__input filters__input--checkbox" type="checkbox" id="filter-basket">
              <label for="filter-basket">Корзина</label>
              </li>
          <button class="button button--filters" type="button">Показать</button>
        </fieldset>

      </form>
    </section>

    <section class="market">
      <h2 class="visually-hidden">Каталог товаров</h2>

      <div class="sorting">
        <b>Сортировать:</b>
          <ul class="sorting__list list">
            <li><a class="sorting-current" href="#">По цене</a></li>
            <li><a href="#" class="sorting__item">По типу</a></li>
            <li><a href="#" class="sorting__item">По названию</a></li>
            <li><a href="#" class="sorting__item-nav sorting__item-nav-down"><span class="visually-hidden">Вниз</span></a></li>
            <li><a href="#" class="sorting__item-nav sorting__item-nav-up"><span class="visually-hidden">Вверх</span></a></li>
          </ul>

          <ul class="catalog list" >

        

        <?php foreach ($info as $mypost): ?>

            <li class="catalog__item">
            <div class="catalog__wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="360" height="40" viewBox="0 0 360 40"><path fill="#eeeeee" d="M356 0H4C1.8 0 0 1.8 0 4v36h360V4c0-2.2-1.8-4-4-4zM22.991 27a7 7 0 1 1 0-14 7 7 0 0 1 0 14zm23.011 0a7 7 0 1 1 0-14 7 7 0 0 1 0 14zm23.011 0a7 7 0 1 1 0-14 7 7 0 0 1 0 14z"/></svg>
                 <div class="catalog-block">
                     <h3>
                           <span class="catalog__item-title"><?= $mypost['name'];?></span>
                           <span class="catalog__category"><?= $mypost['description'];?></span>
                     </h3>
                     <p class="catalog__item-price">
                  <? 
                      $mycookie= $_COOKIE["user"]; 
                      $con= new  mysqli('localhost','root','root','nerds'); 
                      $sql=("SELECT `status`  FROM `registration` WHERE `login`='$mycookie'" ); 
                      $result = mysqli_query($con, $sql); 
                      $row = mysqli_fetch_assoc($result);
                   ?>
                     <? if ( $row['status']==10 ): ?>
                    <a href="delete.php?id=<?= $mypost['id']?>" class="button">Удалить</a>
                  <? else: ?>
                    <a href="#" class="button button--buy"><?= $mypost['price'];?> грн</a>
                  <? endif; ?>                        
                     </p>
                 </div>
                  <p class="catalog__item-image">
                          <img src=<?= $mypost['url'];?> width="360" height="576" alt="<?= $post['name'];?>">
                  </p>
            </div>
            </li>
            <?php endforeach; ?>
          </ul>

            <ul class="catalog__pagination-list list">
                <!-- <li class="pagination-item pagination-item--current"><a href="#">1</a></li>
                <li class="pagination-item"><a href="#">2</a></li>
                <li class="pagination-item"><a href="#">3</a></li>
                <li class="pagination-item--next"><a href="#">Следующая</a></li> -->
                <? if ( isset( $_COOKIE["user"])): ?>
                  <?php
                   $mycookie= $_COOKIE["user"]; 
                   $con= new  mysqli('localhost','root','root','nerds'); 
                   $sql=("SELECT `status`  FROM `registration` WHERE `login`='$mycookie'" ); 
                   $result = mysqli_query($con, $sql); 
                   $row = mysqli_fetch_assoc($result); 
                    if( $row['status']==10 ): ?>
                     <li class="pagination-item--next"><a href="addItem.php">Добавить товар</a></li>
                     <?php  endif;  
                    mysqli_close($con);  ?>
                <? endif; ?>
               
                
            </ul>

    </section>
    </div>
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
    <form class="login-form" method="post">
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

<section class="modal modal-item">
  <div>
    <h2>Напишите нам</h2>
    <form class="login-form" method="post">
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
        <label for="user-message">Доп информация:</label><br>
        <textarea name="message" id="user-message" placeholder="В свободной форме"></textarea>
      </p>
    </form>
  </div>
  <button class="button modal-button modal-button2">ОТПРАВИТЬ</button>
  <button class="modal-close modal-close2" type="button"><span class="visually-hidden">Закрыть</span></button>
</section>

  <script type="text/javascript" src="script.js"></script>
</body>
</html>
