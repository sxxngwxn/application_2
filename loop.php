<?php
$lang = ["php", "C++", "C#", "Java", "Kotlin", "Python"];

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <?php foreach($lang as $current){?>
                <li><?=$current;?></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>