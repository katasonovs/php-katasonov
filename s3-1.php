<head>
    <title>KatasonovSA-1</title>
</head>
<?
if ($_POST["a"]>$_POST["b"]) {
	echo ("Наибольшее число a=" . $_POST["a"]);
} elseif ($_POST["a"] == $_POST["b"]) {
    echo "Числа a и b равны";
} else {
    echo ("Наибольшее число b=" . $_POST["b"]);
}
?>