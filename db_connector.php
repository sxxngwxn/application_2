<?php
// DB address
$DB_HOST = '127.0.0.1';
// ID
$DB_ID = 'root';
// PW
$DB_PW = '';
// PORT
$DB_PORT = '3306';
// DB name
$DB_NAME = 'instagram';
// LINK
$DB_LINK = "mysql:host={$DB_HOST};port={$DB_PORT};dbname={$DB_NAME};"; // without space

// DB connect module = PDO, 예외 처리
try {
    $db = new PDO($DB_LINK, $DB_ID, $DB_PW);
} catch (PDOException $e) {
    echo "<script>alert('DB 연결에 실패하였습니다.')</script>";
}


$query = "SELECT * FROM `user`";
$result = $db->prepare($query);
$result->execute();
$data = $result->fetchAll(PDO::FETCH_ASSOC); // 리스트 형태로 가져와라(PDO의 한 열 씩 방식으로)
echo json_encode($data);
?>