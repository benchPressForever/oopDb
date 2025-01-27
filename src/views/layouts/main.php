<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?=$menu?>
<?=$content?>

<?php
if (!isset($_COOKIE['count']))
{
    $cookie = 1;
    setcookie("count", $cookie);
}
else {
    $cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie);
} ?>
<p>Ты посетил эту страницу <?= $_COOKIE['count'] ?> раз(a).</p>

</body>
</html>