<?require 'head.php';?>
<body>
   <div class="main-block">
      <div class="container paper">
         <?require 'header.php';?>
         <div id="main">
            <div id="catalog">
               <h2><a class="post_ttl">Успешная регистрация</a></h2>
               <div id="basket" style="background:none;">
                  <?php
		       if (isset($_SESSION['login'])) {
				echo '<script>location.href="index.php"</script>';
			}
			else {
				$login=htmlspecialchars($_POST['login']);
				$password=htmlspecialchars($_POST['password']);
				$logins=file('files/loginsJ72hds93jSHW82q.txt', FILE_IGNORE_NEW_LINES);
					
				for ($i=0; $i<count($logins); $i++){
					if ($login==$logins[$i]){
						$_SESSION['login_already_exist']=true;
						echo '<script>location.href="registration.php"</script>';
						exit;
					}
				}
					
				file_put_contents('files/loginsJ72hds93jSHW82q.txt', $login."\n", FILE_APPEND);
				file_put_contents('files/passwordsQ78F2hd82saFWAZ212.txt', $password."\n", FILE_APPEND);
				$_SESSION['login']=$login;
				echo '<p align="center" style="font-size:24px;color:#fff;font-weight:bold;"> Вы успешно зарегистрированы!</p>';
			}
		       ?>
               </div>
            </div>
         </div>
         <div class="clear-both"></div>
      </div>
   </div>
   <?require 'footer.php';?>
   </div>
</body>
</html>
