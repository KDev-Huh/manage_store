<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/close.css">
    <link rel="stylesheet" href="../css/nav.css"> -->
    <style>
        nav{
            margin-left: -8px;
            margin-top: -8px;
            width: 101.5%;
            height: 50px;
            border: solid 1px black;
        }
        .board{
            /* background-color: aqua; */
            margin: 0 auto;
            width: 950px;
            display: flex;
            justify-content: space-around;
        }

        nav a{
            color: #000;
            font-size: 20px;
            font-weight : 900;
            margin-top: 14px;
            text-decoration-line: none;
        }
        .logout{
            font-size: 15px;
        }
        svg{
            width: 10px;
            margin-right: 3px;
        }
        .logout_a{
            text-shadow: 
                -0.5px -0.5px 0 #000,  
                0.5px -0.5px 0 #000,
                -0.5px  0.5px 0 #000,
                0.5px  0.5px 0 #000; /* 테두리 색상 */
            color: white;
            margin-top: 18px;
            display: flex;
            justify-content: center;
            margin-left: 80px;
        }
        .logo{
            margin-top: -6px;
            width: 70px;
            height: 50px;
            margin-right: 80px;
        }
        .logo img{
            width: 100%;
        }
        /*여기까지 nav */
        .work{
            width: 130px;
            /* background-color: aqua; */
            margin-left: 180px;
            float: left;
            margin-top: 70px;
        }
        .work_text{
            font-size: 17px;
            font-weight: 700;
        }
        #check1{
            margin-top: 5px;
        }
        .check{
            width: 5px;
            height: 15px;
            border: 0.4px solid white;
            background-color: white;
            display: inline-block;
            /*
            background-color: #FD0;
            border: solid 0.4px black;
            */
        }
        .work a{
            color: #6D6D6D;    /*color: #000;*/
            font-size: 15px;
            font-weight: 600;
            text-decoration-line: none;
            margin-right: 10px;
        }

        .work #open,#mission,#close{
            color: #6D6D6D;
            font-size: 13px;
            font-weight: 700;
        }
        .navs{
            margin-top: 6px;
        }

        #check4 div{
            background-color: #FD0;
            border: solid 0.4px black;
        }
        #check4 a{
            color: #000;
        }
        aside{
            float: right;
        }
        #imgbox{
            width: 200px;
            height: 200px;
            margin-left: 35px;
            margin-top: 45px;
        }
        #imgbox img{
            width: 100%;
            opacity: 0.9;
        }
        #today{
            border: solid 0.4px #000;
            border-radius: 10px;
            height: 200px;
            width: 220px;
            /* background-color: aqua; */
            margin-right: 45px;
            margin-top: 70px;
            padding: 20px;
        }
        .EnToday{
            margin-left: 10px;
            font-size: 15px;
            font-weight: 1000;
        }
        .today li{
            list-style: none;
            margin-left: -20px;
            margin-bottom: 7px;
            font-size: 13px;
            font-weight: 900;
        }
        .money{
            margin-left: 5px;
            font-size: 13px;
            font-weight: 900;
        }
        .employees{
            margin-left: 3px;
            font-size: 13px;
            font-weight: 900;
        }
        .emps{
            margin-left: 11px;
            margin-top: 3px;
            color: #8C8C8C;
        }
        .close_box{
            margin: 0 auto;
            height: auto;
            width: 850px;
        }
        .close_box h1{
            margin-left: 40px;
            margin-top: 35px;
        }
        #select{
            margin: 0 auto;
            width: 650px;
            margin-bottom: 50px;
        }
        .close_section{
            margin-bottom: 10px;
        }
        .id{
            font-size: 20px;
            font-weight: 1000;
            margin-right: 15px;
        }
        .close_work{
            font-weight: bold;
            margin-right: 15px;
        }
        #doit{
            border: solid 1px black;
            width: 10px;
            height: 10px;
            display:inline-block;
            margin-right: 15px;
        }
        .details{
            display: none;
            padding-top: 10px;
            width: 600px;
            margin: 0 auto;
            /* border: solid 1px black;*/ /*div 크기 확인 하기 위해*/  
        }
        .detailBut{
            cursor: pointer;
        }
        hr{
            width: 750px;
        }
        #sub{
            background-color: white;
            font-size: 25px;
            border: none;
            cursor: pointer;
        }
        #add{
            margin: 0 auto;
            width: 650px;
            margin-bottom: 50px;
        }
        #addbox{
            display: inline-block;
            width: 500px;
        }
        #addText{
            width: 575px;
            margin-bottom: 10px;
            padding: 10px;
            border: none;
            background-color: #F0ECEC;
            border-radius: 5px;
        }
        #moreAddText{
            width: 575px;
            padding: 10px;
            height: 250px;
            margin-left: 32px;
            border: none;
            background-color: #F0ECEC;
            border-radius: 5px;
        }
        .checkimg{
            display: none;
            width: 20px;
            margin-left: -28px;
            margin-right: 10px;
        }
    </style>
</head> 
<body>
    <nav>
        <div class="board">
            <a href="https://www.instagram.com/yeohaenggil_souvenir_shop"  style="margin-top: 5px;"><div class="logo"><img src="../../image/main_logo.png"></div></a>
            <a href="../notification.php" style="margin-left: -50px;"><span class="notification">공지사항</span></a>
            <a href="../open/open.php"><span class="open">오픈</span></a>
            <a href="../mission/mission.php"><span class="mission">오늘의 미션</span></a>
            <a href="../close/close.php"><span class="close">마감</span></a>
            <a href="../significant/significant_time.html"><span class="significant">특이사항</span></a>
            <a href="../../login.html" class="logout_a">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M2 18C1.45 18 0.979333 17.8043 0.588 17.413C0.196667 17.0217 0.000666667 16.5507 0 16V2C0 1.45 0.196 0.979333 0.588 0.588C0.98 0.196667 1.45067 0.000666667 2 0H9V2H2V16H9V18H2ZM13 14L11.625 12.55L14.175 10H6V8H14.175L11.625 5.45L13 4L18 9L13 14Z" fill="black"/>
            </svg>
            <span class="logout">로그아웃</span>
            </a>
        </div>
    </nav>
    <div id="container">
        <div class="work">
            <span class="work_text">업무 완료도</span>
            <div id="check1" class="navs">
                <div class="check"></div>
                <a href="../notification.php">공지사항</a>
            </div>
            <div class="navs" id="check2">
                <div class="check"></div>
                <a href="../open/open.php">오픈</a><span id="open"></span>
            </div>
            <div class="navs" id="check3">
                <div class="check"></div>
                <a href="../mission/mission.php">오늘의 미션</a><span id="mission"></span>
            </div>
            <div class="navs" id="check4">
                <div class="check"></div>
                <a href="./close.php">마감</a><span id="close"></span>
            </div>
            <div class="navs" id="check5">
                <div class="check"></div>
                <a href="../significant/significant.php">특이사항</a>
            </div>
        </div>
        <aside>
            <div id="today">
                <span class="EnToday">TODAY</span>
                <ul class="today">
                    <li>목표 매출 <span id="goal" class="money"></span></li>
                    <li>실제 매출 <span id="now"  class="money"></span></li>
                    <li>보너스 금액 <span id="bonus"  class="money"></span></li>
                </ul>
                <span class="EnToday">1호점 지킴이</span>
                <div id="emps"></div>
            </div>
            <div id="imgbox"><img src="../../image/main_logo.png"></div>
        </aside>
        <div class="close_box">
            <h1>마감</h1>
            <div id="select">
                <?php 
                    $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
                    if(mysqli_connect_errno()){
                        echo 'MySQL 접속 실패 : '.mysqli_connect_error();
                        exit();
                    }
                
                    $query = "select id, close_work, doit, detail from close;";
                    $result = mysqli_query($conn, $query);
                    $count = mysqli_num_rows($result); //튜플 갯수
                    for($i = 0 ; $i < $count ; $i+=1)
                    {
                        $row = mysqli_fetch_assoc($result);
                        echo "<div class='close_section'><span class='id'>".$row['id'].".</span>
                        <span class='close_work'>".$row['close_work']."</span>
                        <div id='doit'></div><img class='checkimg' src='../image/체크문자.png' alt='체크' id='checkimg".$row['id']."'>
                        <span class='detailBut' onclick='ShowDetail(".$row['id'].")'>세부사항</span>
                        <div class='details' id='detail".$row['id']."'>".$row['detail']."</div></div>
                        ";
                        if($row['doit']=='1')
                            echo "<script>document.getElementById('checkimg".$row['id']."').style.display = 'inline-block';</script>";
                    }
                ?>
            </div>
            <hr>
            <h1>추가</h1>
            <div id="add">
                <form action="close_post.php" method="post">
                    <input type="submit" value="+" id="sub">
                    <input type="text" name="addText" placeholder="텍스트입력" id="addText"><br>
                    <textarea name="moreText" placeholder="세부입력" id="moreAddText"></textarea>
                </form>
            </div>
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
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
            if(mysqli_connect_errno()){
                echo 'MySQL 접속 실패 : '.mysqli_connect_error();
                exit();
            }
            $query = "select * from employee;";
            $result1 = mysqli_query($conn, $query);
            $i=1;
            while($row1 = mysqli_fetch_assoc($result1)){
                echo "document.getElementById('emps').insertAdjacentHTML('beforeend', \"<div id='emp".$i."' class='emps'><div id='div".$i."' class='check'></div><span id='employee".$i."' class='employees'>".$row1['em_name']."</span></div>\");";
                // 여기서 innerHTML을 사용하게 되면 그 전 내용을 덮어 쓰게 된다. 하지만 insertAdjacentHTML('beforeend',...);는 모든 것을 다 추가할 수 있다.
                $i+=1;
            }

            $days = array("일", "월", "화", "수", "목", "금", "토");
            $day = $days[date('w')];
            $query = "select e.em_id, e.em_name from employee e join work_date d on e.em_id = d.em_id where d.date='".$day."';";
            $result1 = mysqli_query($conn, $query);
            while ($row2 = mysqli_fetch_assoc($result1)){
                echo "document.getElementById('div".$row2['em_id']."').style.backgroundColor = '#FD0';";
                echo "document.getElementById('div".$row2['em_id']."').style.borderColor = 'black';";
                echo "document.getElementById('employee".$row2['em_id']."').style.color = 'black';";
            }
                
        ?>;
        let goal_price = <?php
            $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
            if(mysqli_connect_errno()){
                echo 'MySQL 접속 실패 : '.mysqli_connect_error();
                exit();
            }
            $today = date("Y-m-d");
            $query = "select goal_price from today_goal where time = (select max(time) from today_goal where time like '".$time."%');";
            $result1 = mysqli_query($conn, $query);
            $row1 = mysqli_fetch_assoc($result1);
            if($row1['goal_price']==null)
                echo 0;
            else
                echo $row1['goal_price'];
        ?>;

        let now_price = <?php
            $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
            if(mysqli_connect_errno()){
                echo 'MySQL 접속 실패 : '.mysqli_connect_error();
                exit();
            }
            $today = date("Y-m-d");
            $query = "select now_price from today_goal where time = (select max(time) from today_goal where time like '".$time."%');";
            $result1 = mysqli_query($conn, $query);
            $row1 = mysqli_fetch_assoc($result1);
            if($row1['now_price']==null)
                echo 0;
            else
                echo $row1['now_price'];
        ?>;

        let bonus;
        if(now_price >= 400000){
            bonus = (now_price-400000)/100000+1;

            bonus = Math.floor(bonus);
            document.getElementById("bonus").innerHTML = bonus * 10000 + "원";
        }
        else{
            document.getElementById("bonus").innerHTML = 0 + "원";
        }

        document.getElementById("goal").innerHTML = goal_price + "원";
        document.getElementById("now").innerHTML = now_price + "원";
        
        
        let result1 = <?php
            $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
            if(mysqli_connect_errno()){
                echo 'MySQL 접속 실패 : '.mysqli_connect_error();
                exit();
            }
            $query = "select count(*) as total from open;";
            $result1 = mysqli_query($conn, $query);
            $row1 = mysqli_fetch_assoc($result1);
            $count1 = $row1['total'];

            $query = "select count(*) as total from open where doit = '1';";
            $result2 = mysqli_query($conn,$query);
            $row2 = mysqli_fetch_assoc($result2);
            $count2 = $row2['total'];

            if($count1 > 0)
                $percentage = ($count2*100) / $count1;
            else
                $percentage = 0;

            echo round($percentage);
        ?>;
        document.getElementById('open').innerHTML = result1+"%";

        let result2 = <?php
            $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
            if(mysqli_connect_errno()){
                echo 'MySQL 접속 실패 : '.mysqli_connect_error();
                exit();
            }
            $query = "select count(*) as total from mission;";
            $result1 = mysqli_query($conn, $query);
            $row1 = mysqli_fetch_assoc($result1);
            $count1 = $row1['total'];

            $query = "select count(*) as total from mission where doit = '1';";
            $result2 = mysqli_query($conn,$query);
            $row2 = mysqli_fetch_assoc($result2);
            $count2 = $row2['total'];

            if($count1 > 0)
                $percentage = ($count2*100) / $count1;
            else
                $percentage = 0;

            echo round($percentage);
        ?>;
        document.getElementById('mission').innerHTML = result2+"%";

        let result3 = <?php
            $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
            if(mysqli_connect_errno()){
                echo 'MySQL 접속 실패 : '.mysqli_connect_error();
                exit();
            }
            $query = "select count(*) as total from close;";
            $result1 = mysqli_query($conn, $query);
            $row1 = mysqli_fetch_assoc($result1);
            $count1 = $row1['total'];

            $query = "select count(*) as total from close where doit = '1';";
            $result2 = mysqli_query($conn,$query);
            $row2 = mysqli_fetch_assoc($result2);
            $count2 = $row2['total'];

            if($count1 > 0)
                $percentage = ($count2*100) / $count1;
            else
                $percentage = 0;

            echo round($percentage);
        ?>;
        document.getElementById('close').innerHTML = result3+"%";
    </script>
</body>
</html>