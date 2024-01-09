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
    <?php include('../components/Navbar.php');?>

    <div class="container">
        <!--title-->
        <h2>빵빵이의 푸바오</h2>
        <!--date-->
        <p>4시간 전(2024.01.08)</p>
        <!--writer-->
        <div>
            <img
                src="https://i.namu.wiki/i/vrrxAFOllLfXJv81KRPgEGzr4zZEdOvqDbV8g7pvrKEW74ffiCt6jquf1oEvwTM3z_4lI0om7iQuzdAELZ8Qlg.webp"
                class="rounded-"
                width="32px"
                alt="..."
                style="border-radius:50%; margin: 15px 0;"
            >
            <span>빵빵이</span>
        </div>
        <hr>
        <!--content-->
        <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum quae in laudantium obcaecati assumenda eos tempora accusamus reiciendis eaque, molestias adipisci quas dolores deserunt vel id cupiditate ducimus delectus voluptas?</p>
        </div>

        <hr>
        <!--comments-->

        <!--another-->
        <div>
            <img
                        src="https://i.namu.wiki/i/vrrxAFOllLfXJv81KRPgEGzr4zZEdOvqDbV8g7pvrKEW74ffiCt6jquf1oEvwTM3z_4lI0om7iQuzdAELZ8Qlg.webp"
                        class="rounded-"
                        width="27px"
                        alt="..."
                        style="border-radius:50%; margin: 15px 0;"
            >
            <span>빵빵이</span>

            <p class="text-start comment-wrapper">
            
            Start aligned text on all viewport sizes.
        </p>
        </div>

        <!--me-->
        <div class="comment-container-me">
            <p class="text-end comment-wrapper-me">
                End aligned text on all viewport sizes.
            </p>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>