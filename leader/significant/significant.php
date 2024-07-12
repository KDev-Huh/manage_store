<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="css/significant.css">
</head> 
<body>
    <nav>
        <a href=""  style="margin-top: 5px;"><span class="travel">여행길</span></a>
        <a href="../notification.html" style="margin-left: -50px;"><span class="notification">공지사항</span></a>
        <a href="../open/open.php"><span class="open">오픈</span></a>
        <a href="../mission/mission.php"><span class="mission">오늘의 미션</span></a>
        <a href="../close/close.php"><span class="close">마감</span></a>
        <a href="significant_time.html"><span class="significant">특이사항</span></a>
        <a href="../../login.html" class="logout_a">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path d="M2 18C1.45 18 0.979333 17.8043 0.588 17.413C0.196667 17.0217 0.000666667 16.5507 0 16V2C0 1.45 0.196 0.979333 0.588 0.588C0.98 0.196667 1.45067 0.000666667 2 0H9V2H2V16H9V18H2ZM13 14L11.625 12.55L14.175 10H6V8H14.175L11.625 5.45L13 4L18 9L13 14Z" fill="black"/>
        </svg>
        <span class="logout">로그아웃</span>
        </a>
    </nav>
    <div id="significant_box">
        <h1>특이사항</h1>
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
            if(mysqli_connect_errno()){
                echo "MYSQL 접속 실패".mysqli_connect_errno();
                exit();
            }
            $query = "select receive, answer from significant where time='".$_POST['time']."';";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            echo "<div class='significant_section'>".$row['receive']."</div>";
            echo "<hr>
            <h1>답변</h1>
            <div id='respond_box'>
                <form action='significant_post.php' method='post'>
                    <textarea name='answer' id='respond'>".$row['answer']."</textarea>
                    <input type='submit' value='확인'>
                </form>
            </div>";
        ?>
    </div>
</body>
</html>