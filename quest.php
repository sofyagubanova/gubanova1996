<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
                <div id="contacts">
                  <h2 class="post_ttl2">Гостевая книга</h2>
				  <div id="quest" style="background:none;">
                  <div style="margin:40px; text-align:justify;">
                     <form action="add_mail.php" method="post">
                        <p><b>Хотите оставить нам свое пожелание или сообщение в гостевой книге?</b></p>
                        <p><b>Введите свое имя и сообщение</b></p>
                        <p>
                           <input type="text" name="name" placeholder="Имя" required><br><br>
                           <textarea rows="10" cols="45" placeholder="Сообщение" name="mail" required></textarea>
                        </p>
                        <p><input style="margin-top:20px; font-size: 22px; width:150px; height:50px;" type="submit" value="Отправить"></p>
                     </form>
                  </div>
                  <?	
					 $names=file('files/quest_name.txt', FILE_IGNORE_NEW_LINES);
                     $mails=file('files/quest_text.txt', FILE_IGNORE_NEW_LINES);
                     $mails_dates=file('files/quest_date.txt', FILE_IGNORE_NEW_LINES);
                     $mails_times=file('files/quest_time.txt', FILE_IGNORE_NEW_LINES);
                     for ($i=0; $i<count($names); $i++)
                     {
                     	echo '<div id="addmail">
                     <p><b>',$names[$i],' (',$mails_dates[$i],' ',$mails_times[$i],')</b></p>
                     <p>',$mails[$i],'</p>
                     </div>';
                     }
                     
                     ?>
               </div>
			   </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
   </body>
</html>