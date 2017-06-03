<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <h2 class="post_ttl2">Панель управления</h2>
                  <div id="admin_panel">
                     <? 
                        if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                        {
                        echo '<div id="basket" style="font-size:24px;">
                        <p><b>Выбрать новость дня:</b>';
                        
                        $daynews=file('files/key_news.txt', FILE_IGNORE_NEW_LINES);
                        
                        echo '<form action="add_daynews.php" method="POST" >
                        <p><select name="daynews">
                        <option selected value="Мы всегда рады видеть вас в нашем магазине!">Выбрать</option>';
                        for ($i=0; $i<count($daynews); $i++)
                        	{
                        		echo '<option VALUE="', $daynews[$i] ,'">', $daynews[$i] ,'</option>';
                        	}
                        echo '</select></p>
                        <p><input style="height: 50px; width: 200px; font-size: 22px; cursor:pointer;" type="submit" value="Опубликовать"></p>
                        </form></p>';	
                        
                        echo '<p><b>Выбрать рекламный баннер:</b><br>
                        
                        <form method="post" enctype="multipart/form-data" action="add_banner.php">
                        
                        
                        <p>Рекламодатель:<br>
                        <input type="text" size="40" name="bannername" required></p>
                        <p>Изображение рекламного баннера (рекоменд. размер - 600x150px):<br>
                        <input type="file" name="bannerimg" required></p>
                        <p>Ссылка на сайт:<br>
                        <input type="text" size="40" name="bannersrc" required></p>
                        <input style="height: 50px; width: 200px; font-size: 22px; cursor:pointer;"  type="submit" value="Добавить баннер">
                        </form>
                        
                        </p>';	
                        
                        }
                        else 
                        {
                        echo header('Location:index.php');
                        }
                        ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="clear-both"></div>
      </div>
      </div> 
      <?require 'footer.php';?>
   </body>
</html>