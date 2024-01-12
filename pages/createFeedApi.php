<?php
// 선언
$title = isset($_GET['title'])? $_GET['title'] : null;
$content = isset($_GET['content'])? $_GET['content'] : null;
$image = isset($_GET['image'])? $_GET['image'] : null;
$writer = isset($_GET['writer'])? $_GET['writer'] : null;

// 로직
$q = "INSERT INTO `post` (title, content, image, writer, created_at, updated_at) VALUES (:title, :content, :image, :writer, now(), now())";
$stmt = $db->prepare($q);
$stmt->bindParam(":title", $title, PDO::PARAM_STR);
$stmt->bindParam(":content", $content, PDO::PARAM_STR);
$stmt->bindParam(":image", $image, PDO::PARAM_STR);
$stmt->bindParam(":writer", $writer, PDO::PARAM_INT);
$stmt->execute();

//응답
echo "받아온 데이터 : {$title} / {$content} / {$image} / {$writer}";
?>