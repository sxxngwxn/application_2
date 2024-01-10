<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .comment-container-me{
        display: flex;
        justify-content: flex-end;
    }
    .comment-wrapper{
        border-radius: 0 15px 15px 15px ;
        padding: 15px;
        background-color: #1988a8 !important;
        color: #fff;
        max-width: 55%;
    }

    .comment-wrapper-me{
        background-color: #ededed !important;
        color: black;
        padding: 15px;
        border-radius: 15px 0px 15px 15px ;
        max-width: 55%;
    }
</style>
<body>
    <!--네비게이션 영역-->
    <?php 
    include('components/Navbar.php');
    include($page);
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>