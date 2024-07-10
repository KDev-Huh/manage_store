<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/open.css">
    <link rel="stylesheet" href="../css/nav.css">
    <style>
        img{
            display: none;
            width: 20px;
            margin-left: -28px;
            margin-right: 10px;
        }
        .open_box{
            height: auto;
        }
    </style>
</head> 
<body>
    <nav>
        <a href=""  style="margin-top: 5px;"><span class="travel">여행길</span></a>
        <a href="../notification.html" style="margin-left: -50px;"><span class="notification">공지사항</span></a>
        <a href="open.php"><span class="open">오픈</span></a>
        <a href="../mission/mission.php"><span class="mission">오늘의 미션</span></a>
        <a href=""><span class="close">마감</span></a>
        <a href=""><span class="significant">특이사항</span></a>
        <a href="../../login.html" class="logout_a">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M2 18C1.45 18 0.979333 17.8043 0.588 17.413C0.196667 17.0217 0.000666667 16.5507 0 16V2C0 1.45 0.196 0.979333 0.588 0.588C0.98 0.196667 1.45067 0.000666667 2 0H9V2H2V16H9V18H2ZM13 14L11.625 12.55L14.175 10H6V8H14.175L11.625 5.45L13 4L18 9L13 14Z" fill="black"/>
        </svg>
        <span class="logout">로그아웃</span>
        </a>
    </nav>
    <div class="open_box">
        <h1>오픈준비</h1>
        <div id="select">
            <?php 
                $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
                if(mysqli_connect_errno()){
                    echo 'MySQL 접속 실패 : '.mysqli_connect_error();
                    exit();
                }
            
                $query = "select id, open_work, doit, detail from open;";
                $result = mysqli_query($conn, $query);
                $count = mysqli_num_rows($result); //튜플 갯수
                for($i = 0 ; $i < $count ; $i+=1)
                {
                    $row = mysqli_fetch_assoc($result);
                    echo "<div class='open_section'><span class='id'>".$row['id'].".</span>
                    <span class='open_work'>".$row['open_work']."</span>
                    <div id='doit'></div><img src='../image/체크문자.png' alt='체크' id='check".$row['id']."'>
                    <span class='detailBut' onclick='ShowDetail(".$row['id'].")'>세부사항</span>
                    <div class='details' id='detail".$row['id']."'>".$row['detail']."</div></div>
                    ";
                    if($row['doit']=='1')
                        echo "<script>document.getElementById('check".$row['id']."').style.display = 'inline-block';</script>";
                }
            ?>
        </div>
        <hr>
        <h1>추가</h1>
        <div id="add">
            <form action="open_post.php" method="post">
                <input type="submit" value="+" id="sub">
                <input type="text" name="addText" placeholder="텍스트입력" id="addText"><br>
                <textarea name="moreText" placeholder="세부입력" id="moreAddText"></textarea>
            </form>
        </div>
    </div>
    <script>
        function ShowDetail(id){
            let detail_text = document.getElementById('detail'+id);
            if(detail_text.style.display === 'block')
                detail_text.style.display = 'none';
            else
                detail_text.style.display = 'block';
        }
    </script>
</body>
</html>