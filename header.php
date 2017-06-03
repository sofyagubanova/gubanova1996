<div id="header">
<div class="daynews">
         <?		
            $daynews=file('files/daynews.txt', FILE_IGNORE_NEW_LINES);
            for ($i=0; $i<count($daynews); $i++) {
            	echo $daynews[$i];
            }
            ?>
      </div>
   <div class="logo">
      <a href="index.php"><img src="images/logo.png"></a>
   </div>
    <div class="reg">
         <?php
		if (isset($_SESSION['login'])) {
		    if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
			echo '<p>Здравствуйте, ', $_SESSION['login'], '  Роль: администратор </p><p> <a href="exit.php">Выйти</a>  <a href="cabinet.php">Панель управления</a> </p>';
		    } else {
			echo '<p>Здравствуйте, ', $_SESSION['login'], '  Роль: пользователь <a href="exit.php">Выйти</a></p>';
		    }
		}

		else
		    echo '<form method="post" action="login.php">
			    <p>Авторизация <input type="text" placeholder="Логин" name="login" required>
			    <input type="password" placeholder="Пароль" name="password" required>
			    <input type="submit" value="Войти"></p>
			    <p align="right"><a href="registration.php">Зарегистрироваться</a></p>
			  </form>';
		?>
		      </div>
		   <div class="basket" class="float-right">
	<?php
			if (isset($_SESSION['login'])) {
			    if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
				$orderscount = file('files/ordersitems9hQ8Iwd2J3F2dsQRsvV2.txt', FILE_IGNORE_NEW_LINES);
				echo '<a href="new_orders.php">  Новые заказы: ', count($orderscount), '</a>
				 ';
			    } else {
				echo ' <a href="basket.php"> Товаров в корзине: ', $_SESSION['basketcounter'], '</a>
				 ';
			    }
			} else
			    echo '<a href="basket.php"> Товаров в корзине: ', $_SESSION['basketcounter'], '</a>
				 ';
			?>
   </div>
   <div class="clear-both"></div>
</div>

<div class="tmenu">
<ul class="menu">
    <li><a href="index.php">ЖЕНСКОЕ</a></li>
	<li><a href="clothes_for_men.php">МУЖСКОЕ</a></li>
    <li><a href="shipping.php">ДОСТАВКА</a></li>
	<li><a href="quest.php">ГОСТЕВАЯ</a></li>
	<li><a href="help.php">ПОМОЩЬ</a></li>
</ul>
</div>

  

