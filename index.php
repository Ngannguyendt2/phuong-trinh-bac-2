<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Number a:<input type="text" name="a"><br>
    Number b:<input type="text" name="b"><br>
    Number c:<input type="text" name="c"><br>
    <input type="submit" value="Calculator">
</form>

<?php

include "QuadraticEquation.php";

function solve()
{
    $equation = new QuadraticEquation($_POST['a'], $_POST['b'], $_POST['c']);
    if ($equation->getDiscriminant() > 0) {
        echo "Nghiem thu nhat: " . $equation->getRoot1() . "<br>";
        echo "Nghiem thu 2: " . $equation->getRoot2();
    } elseif ($equation->getDiscriminant() == 0) {
        echo "Nghiem duy nhat " . $equation->getRoot1();
    } else {
        echo "Phuong trinh vo nghiem";
    }
}

solve();
?>
</body>
</html>
