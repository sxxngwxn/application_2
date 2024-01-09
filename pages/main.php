<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!--네비게이션 영역-->
    <?php include('components/Navbar.php');?>

    <!--프로필 영역-->
    <?php include('components/Profile.php');?>

    <!--게시물 영역-->
    <div class="container">
        <div class="row">
            <?php
            $items = [
                [
                    "title"=>"빵빵이의 푸바오",
                    "image"=> "https://i.ytimg.com/vi/IBG4hCwqq6U/maxresdefault.jpg",
                    "content"=> "Some quick example text to build on the card title and make up the bulk of the card's content.",
                    "comments"=>3090,
                    "like"=> 1932,
                    "writer"=> "빵빵이",
                ],
                [
                    "title"=>"빵빵이의 흑화",
                    "image"=> "https://i.ytimg.com/vi/z-FGKPVGv9s/maxresdefault.jpg",
                    "content"=> "Some quick example text to build on the card title and make up the bulk of the card's content.",
                    "comments"=>3467,
                    "like"=> 1230,
                    "writer"=> "빵빵이",
                ],
                [
                    "title"=>"빵빵이의 태권도",
                    "image"=> "https://i.ytimg.com/vi/_7-Z2MDx7YU/maxresdefault.jpg",
                    "content"=> "Some quick example text to build on the card title and make up the bulk of the card's content.",
                    "comments"=>7432,
                    "like"=> 3780,
                    "writer"=> "빵빵이",
                ],
                [
                    "title"=>"빵빵이의 삐융삐융",
                    "image"=> "https://i.ytimg.com/vi/xvqAl_n1VnE/maxresdefault.jpg",
                    "content"=> "Some quick example text to build on the card title and make up the bulk of the card's content.",
                    "comments"=>4532,
                    "like"=> 3720,
                    "writer"=> "빵빵이",
                ],
                [
                    "title"=>"빵빵이의 금연",
                    "image"=> "https://i.ytimg.com/vi/FoPV2LZtobs/maxresdefault.jpg",
                    "content"=> "Some quick example text to build on the card title and make up the bulk of the card's content.",
                    "comments"=>3482,
                    "like"=> 3789,
                    "writer"=> "빵빵이",
                ],
                [
                    "title"=>"빵빵이의 옷정리",
                    "image"=> "https://i.ytimg.com/vi/jPQU5m09Z8Q/maxresdefault.jpg",
                    "content"=> "Some quick example text to build on the card title and make up the bulk of the card's content.",
                    "comments"=>3437,
                    "like"=> 1236,
                    "writer"=> "빵빵이",
                ],
                [
                    "title"=>"빵빵이의 생일선물",
                    "image"=> "https://i.ytimg.com/vi/diEa2yFSlDM/maxresdefault.jpg",
                    "content"=> "Some quick example text to build on the card title and make up the bulk of the card's content.",
                    "comments"=>4732,
                    "like"=> 3743,
                    "writer"=> "빵빵이",
                ],
                [
                    "title"=>"빵빵이의 마술쇼",
                    "image"=> "https://i.ytimg.com/vi/5PFnrhz89p8/maxresdefault.jpg",
                    "content"=> "Some quick example text to build on the card title and make up the bulk of the card's content.",
                    "comments"=>3478,
                    "like"=> 2378,
                    "writer"=> "빵빵이",
                ],
                
            ] ;
            foreach ($items as $item) {
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                <div class="card" style="width: 18rem; margin-bottom:15px;">
                    <a href="feedDetail">
                        <img src="<?=$item['image'];?>" class="card-img-top" width="269" height="165" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$item['title'];?></h5>
                            <p class="card-text"><?=$item['content'];?></p>
                            <a href="#" class="btn btn-primary btn-sm">좋아요(<?=$item['like'];?>)</a>
                            <a href="#" class="btn btn-primary btn-sm">댓글(<?=$item['comments'];?>)</a>
                        </div>
                    </a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>