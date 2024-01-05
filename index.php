<?php
$findname = "C#";
$lang = ["php", "C++", "C#", "Java", "Kotlin", "Python"];

$cnt = count($lang);
$resultM = "원하는 값을 못찾음";
for ($i=0; $i < $cnt ; $i++) { 
    if($findname === $lang[$i]){
        $resultM = $lang[$i];
    }
}
//echo $resultM;
?>

<!-- <h1><?=$resultM;?></h1> -->