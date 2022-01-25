<HTML>
    <HEAD>
        <TITLE> Катасонов</TITLE>
    </HEAD>
<BODY>
    <FORM  method="post" action="<?php print $_SERVER["PHP_SELF"] ?>">
        Здравствуйте! Введите ваше имя:
        <br><INPUT type="text" name="name" size="20">
            <p>1. Считаете ли Вы, что у многих ваших знакомых хороший характер? <p> да <INPUT type="checkbox" checked="checked" name="1"> <p> нет <INPUT type="checkbox" name="1-">
            <p>2. Раздражают ли Вас мелкие повседневные обязанности? <p> да  <INPUT type="checkbox" checked="checked" name="2">  <p> нет <INPUT type="checkbox" name="2-">
            <p>3. Верите ли Вы, что ваши друзья преданы Вам? <p> да  <INPUT type="checkbox" checked="checked" name="3">  <p> нет <INPUT type="checkbox" name="3-">
            <p>4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание? <p> да  <INPUT type="checkbox" checked="checked" name="4">  <p> нет <INPUT type="checkbox" name="4-">
            <p>5. Способны ли Вы ударить собаку или кошку? <p> да  <INPUT type="checkbox" checked="checked" name="5">  <p> нет <INPUT type="checkbox" name="5-">
            <p>6. Часто ли Вы принимаете лекарства? <p> да  <INPUT type="checkbox" checked="checked" name="6">  <p> нет <INPUT type="checkbox" name="6-">
            <p>7. Часто ли Вы меняете магазин, в который ходите за продуктами? <p> да  <INPUT type="checkbox"  checked="checked" name="7">  <p> нет <INPUT type="checkbox" name="7-">
            <p>8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись? <p> да  <INPUT type="checkbox" checked="checked" name="8">  <p> нет <INPUT type="checkbox" name="8-">
            <p>9. Тяготят ли Вас общественные обязанности? <p> да  <INPUT type="checkbox" checked="checked" name="9">  <p> нет <INPUT type="checkbox" name="9-">
            <p>10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства? <p> да  <INPUT type="checkbox" checked="checked"  name="10">  <p> нет <INPUT type="checkbox" name="10-">
            <p>11. Часто ли Вам приходят в голову мысли о Вашей невезучести? <p> да  <INPUT type="checkbox" checked="checked" name="11">  <p> нет <INPUT type="checkbox" name="11-">
            <p>12. Сохранилась ли у Вас фигура по сравнению с прошлым? <p> да  <INPUT type="checkbox" checked="checked" name="12">  <p> нет <INPUT type="checkbox" name="12-">
            <p>13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?  <p> да <INPUT type="checkbox" checked="checked" name="13">  <p> нет <INPUT type="checkbox" name="13-">
            <p>14. Нравится ли Вам семейная жизнь? <p> да  <INPUT type="checkbox" checked="checked" name="14">  <p> нет <INPUT type="checkbox" name="14-">
            <p>15. Злопамятны ли Вы? <p> да  <INPUT type="checkbox" checked="checked" name="15">  <p> нет <INPUT type="checkbox" name="15-">
            <p>16. Находите ли Вы, что стоит погода, типичная для данного времени года? <p> да  <INPUT type="checkbox" checked="checked" name="16">  <p> нет <INPUT type="checkbox" name="16-">
            <p>17. Случается ли Вам с утра быть в плохом настроении? <p> да  <INPUT type="checkbox" checked="checked" name="17">  <p> нет <INPUT type="checkbox" name="17-">
            <p>18. Раздражает ли Вас современная живопись? <p> да  <INPUT type="checkbox" checked="checked" name="18">  <p> нет <INPUT type="checkbox" name="18-">
            <p>19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?  <p> да <INPUT type="checkbox" checked="checked" name="19">  <p> нет <INPUT type="checkbox" name="19-">
            <p>20. Надоедает ли Вам делать лабораторные по PHP?  <p> да <INPUT type="checkbox" checked="checked" name="20">  <p> нет <INPUT type="checkbox" name="20-">
            <br>
            <P> <INPUT type="submit" name="_check" value="Проверить">
    </FORM>
    <?php
      if(isset($_POST["_check"])) {
	$answerschecked = array( 3,9,10,13,14,19);
	$answersmissed = array( 1,2,4,5,6,7,8,11,12,15,16,17,20);
	$score = 0;
	for($k = 0; $k<count($answerschecked); $k++)
	{
		if (isset($_POST[$answerschecked[$k]]))
            $score++;
	}
	for($k = 0; $k<count($answersmissed); $k++)
	{
		if (isset($_POST[$answersmissed[$k]."-"]))
            $score++;
	}
	if ($score > 15){
		echo 'У Вас покладистый характер';}
	else if ($score >= 8 || $score <= 15){
		echo 'Вы не лишены недостатков, но с вами можно ладить';}
	else if ($score <8){
		echo 'Вашим друзьям можно посочувствовать';}
  }
    ?>
</BODY>
</HTML>