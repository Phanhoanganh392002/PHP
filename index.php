<?php
$title = "Nhat bao tai chinh ngay 2-2-2023";
$sv = [
    "name"=> "Phan Hoang Anh",
    "age"=> 21,
    "address"=> "So 8 Ton That Thuyet"
];
$monans = [
        "Pho bo","Pho ga","Bun Hue"
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T2204M PHP</title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <h2>Sinh vien: <?php echo $sv["name"];?></h2>
    <p>Dia chi: <?php echo $sv["address"];?></p>
    <?php if ($sv["age"]>=18): ?>
    <p><i>Da du 18 tuoi</i></p>
    <?php else: ?>
    <p><i>Chua du 18 tuoi</i></p>
    <?php endif; ?>

    <ul>
        <?php foreach ($monans as $m): ?>
        <li><?php echo $m;?></li>
        <?php endforeach; ?>
    </ul>
    <a href="demo.php">Chuyen qua demo</a>
</body>
</html>
