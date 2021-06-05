<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="autostyle.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <title>Добавление товара</title>
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
                    <li><a href="index.php#contacts">Контакты</a></li>
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
          <h1 class="title">Добавление товара</h1>
        </div>
      </header>

      <section class="container-auto">
      <div class="auth-content">
        <form class="content" action="add.php" method="POST" enctype="multipart/form-data">
          <div class="dws-input">
              <input type="text" placeholder="Введите название товара" name="name" required>
          </div>
          <div class="dws-input">
              <input type="text" placeholder="Напишите описание товара" name="description" required>
          </div>
          <div class="dws-input">
              <input type="text" placeholder="Напишите цену" name="price"  required>
          </div>
          <div class="dws-input">
              <input type="file" placeholder="Добавить фото" name="photo" required>
          </div> 
          <br>
          <div class="reg-submit">
            <button type="submit" class="sub-login">Добавить товар</button>
          </div>
          
      </form>
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
</body>
</html>