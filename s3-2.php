<head>
    <meta charset="UTF-8">
    <title>Katasonov2</title>
</head>

<?php
	if (is_numeric($_POST["a"]) and is_numeric($_POST["a1"])) {

    } else {
       echo "Введите числа";
       exit();
    }
	switch ($_POST["z"]) {
		 case 1:
			$s1= $_POST["a"]+$_POST["a1"];
			break;
		 case 2:
			$s1= $_POST["a"]-$_POST["a1"];
			break;
		 case 3:
			$s1= $_POST["a"]*$_POST["a1"];
			break;
		 case 4:
			$a2 = $_POST["a1"];
			if($a2==0)
				$s1 = "Делитель = 0";
			else
				$s1= $_POST["a"]/$_POST["a1"];
			break;
	}
	echo "Результат:";
	echo $s1;
?>