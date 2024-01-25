    <!--프로필 영역-->
    <?php include('components/Profile.php');?>

    <!--게시물 영역-->
    <div class="container">
        <div id="feed-container" class="row">
        </div>
    </div>

    <div id="create-button">
        <a href="create">
            <button type="button" class="btn btn-primary">새 게시글</button>
        </a>
    </div>


    <!--Script-->
    <script>
        const d1 = document.getElementById("create-button");
        const d2 = $('#create-button');

        function getData() { // 
            $.ajax({
                url: '/api/feeds',
                type: 'get',
                success: (response)=> {
                    console.log('data :', response);

                    const feedContainer = $("#feed-container");

                    let views = ``;

                    response.forEach((item, index) => {
                        console.log(index, item);
                        views += `
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="card" style="width: 18rem; margin-bottom:15px;">
                                    <a href="feedDetail">
                                        <img src="${item.image}" class="card-img-top" width="269" height="165" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">${item.title}</h5>
                                            <p class="card-text">${item.content}</p>
                                            <a href="#" class="btn btn-primary btn-sm">좋아요(${item.like})</a>
                                            <a href="#" class="btn btn-primary btn-sm">댓글(${item.comments})</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        `;
                    })

                    console.log('views : ', views);
                    feedContainer.html(views)
                }
            })
        }

        getData()


        // 콜백 함수 이해 예시
        function callback1(cb = null) {
            const data = "callback 1"

            if (cb) {
                cb(data)
            }
        }

        callback1((res)=>{console.log(res)})

    </script>