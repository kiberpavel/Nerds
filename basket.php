<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="autostyle.css">
    <title>Корзина</title>
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
                <li><a href="index.php#contacts">Контакты</a></li>
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
      <h1 class="title">Корзина</h1>
    </div>
  </header>

      
      <section class="basket-decor">
          <div class="basket-main" >
           <div >
              <p>ID</p>
           </div>
           <div>
              <p>Фото</p>
           </div>
           <div>
              <p>Название</p>
           </div>
           <div>
              <p>Цена</p>
           </div>
           <div>
            <p>Удалить</p>
           </div>           
        </div>     
        <div class="basket-info" >
          <div >
            <p>1</p>
          </div>
          <div class="basket-info__image">
            <p><img src="img/karazin_logo.png" alt=""></p>
          </div>
          <div>
            <p>Borodinski</p>
          </div>
          <div>
            <p>1500</p>
          </div>
          <div >
            <p><img src="img/cancel 1.svg" alt="Удалить"></p>
          </div>  
        </div>
        <div class="basket-info" >
          <div >
            <p>2</p>
          </div>
          <div class="basket-info__image">
            <img src="img/logo-scs-key484687.png" alt="">
          </div>
          <div>
            <p>Pink</p>
          </div>
          <div>
            <p>100</p>
          </div>
          <div >
            <img src="img/cancel 1.svg" alt="Удалить">
          </div>  
        </div>
      </section>
      <section class="basket-result">
        <div class="basket-pay" >
          <div>
            <p>Итого:1600</p>
          <button>Купить</button>
          </div>
          
        </div>
      </section>

      <footer class="main__footer container">
        <footer>
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