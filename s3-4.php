<HTML>
    <HEAD>
        <TITLE> Катасонов, Вход в систему</TITLE>
    </HEAD>
<BODY>
    <FORM  method="post" action="<?php print $_SERVER["PHP_SELF"] ?>">
      Здравствуйте! Введите ваш логин:
      <br><INPUT type="text" name="login" size="20">
      <P> <INPUT type="submit" name="obr" value="Войти">
    </FORM>
    <?php
		if (isset($_POST["obr"])) {
			$login = $_POST["login"];
			if (userexist($login)) { 
				echo("Здравствуйте, " . $login);
			} else {
				echo "Вы не зарегистрированный пользователь!";
			}
		}
		function userexist($loginToCheck)
		{
			if($loginToCheck == "Катасонов") return true;
			if($loginToCheck == "Админ") return true;
			if($loginToCheck == "Серафим") return true;
			if($loginToCheck == "Правда") return true;
			return false;
		}			
    ?>
</BODY>
</HTML>