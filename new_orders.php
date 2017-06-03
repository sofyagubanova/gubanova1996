<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <h2><a class="post_ttl" title="НОВЫЕ ЗАКАЗЫ">НОВЫЕ ЗАКАЗЫ</a></h2>
                  <? 
                     if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                     {?>
                  <div id="basket" style="background:none;">
                     <?php $logins=file('files/orderslogins9hQ8Iwd2J3F2dsQRsvV2.txt', FILE_IGNORE_NEW_LINES);
                        $fullnames=file('files/ordersfullnames9hQ8Iwd2J3F2dsQRsvV2.txt', FILE_IGNORE_NEW_LINES);
                        $phonenumbers=file('files/ordersphonenumbers9hQ8Iwd2J3F2dsQRsvV2.txt', FILE_IGNORE_NEW_LINES);
                        $emails=file('files/ordersemails9hQ8Iwd2J3F2dsQRsvV2.txt', FILE_IGNORE_NEW_LINES);
                        $addresses=file('files/ordersaddresses9hQ8Iwd2J3F2dsQRsvV2.txt', FILE_IGNORE_NEW_LINES);
                        $dates=file('files/ordersdates9hQ8Iwd2J3F2dsQRsvV2.txt', FILE_IGNORE_NEW_LINES);
						$orderingdates=file('files/orderscurrentdates9hQ8Iwd2J3F2dsQRsvV2.txt', FILE_IGNORE_NEW_LINES);
                        $items=file('files/ordersitems9hQ8Iwd2J3F2dsQRsvV2.txt', FILE_IGNORE_NEW_LINES);
						if (count($items)>0){
							echo '<form action="cleanorders.php" align="right" style="margin:5px;">
                        <input style="height: 50px; width: 200px; font-size: 22px; cursor:pointer;" type="submit" value="Очистить заказы" >
						</form>';}
						else
							echo '<p align="center" style="font-size:28px;color:#fff;">Новые заказы отсутствуют</p>';
                        for ($i=0; $i<count($items); $i++)
                        {
                        	echo ' <table style="margin-top:50px;"  id="gradient"><tr><th><h2 class="post_ttl2">Заказ №',$i+1,'</h2></th></tr>
                        <tr><th><h2 class="post_ttl2" style="margin-bottom:0px;border-radius:0px;">Данные о заказчике</h2></th></tr>
                        <tr><td><table><tr><th>Наименование</th><th>Значение</th></tr>
                        <tr><td>Логин</td><td>', $logins[$i], '</td></tr>
                        <tr><td>Дата оформления заказа</td><td>', $orderingdates[$i], '</td></tr>
                        <tr><td>Ф.И.О.</td><td>', $fullnames[$i], '</td></tr>
                        <tr><td>Тел. номер</td><td>', $phonenumbers[$i], '</td></tr>
                        <tr><td>E-mail</td><td>', $emails[$i], ' </td></tr>
                        <tr><td>Адрес доставки</td><td>', $addresses[$i], '</td></tr>
                        <tr><td>Желаемае дата получения заказа</td><td>', $dates[$i], '</td></tr>
                        </table></td></tr>
                        <tr><th><h2 class="post_ttl2" style="margin-bottom:0px;border-radius:0px;">Данные о заказе</h2></th></tr>
                        <tr><td><table><tr style="matgin-bottom:0px;"><th>Артикул</th><th>Наименование</th><th>Количество</th><th>Сумма к оплате</th></tr>
                        ',$items[$i],'
                        </table></td></tr></table>';
                        }
                        ?>
                  </div>
                  <?	
                     }
                     else 
                     {
                     echo header('Location:index.php');
                     }
                     ?>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
      </div>
   </body>
</html>