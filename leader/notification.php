<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/notification.css"> -->
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
        /*여기까지가 nav*/

        .notification_box{
            margin: 0 auto;
            height: auto;
            width: 850px;
            padding-bottom: 80px;
        }
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

        .notification_box h1{
            margin-left: 40px;
            margin-top: 35px;
        }
        form textarea{
            margin-top: 10px;
            margin-left: 20px;
            padding: 15px;
            width: 724px;
            height: 350px;
            background-color: #F0ECEC;
            border: none;
            border-radius: 10px;
        }

        form .upload{
            float: right;
            margin-right: 44px;
            margin-top: 20px;
            width: 45px;
            background-color: white;
            border: solid 1px black;
            color: #000;
            font-weight: bold;
            font-size: 13px;
            border-radius: 10px;
        }
        label{
            width: 100px;
        }
        .input-file-button div{
            margin-top: 20px;
            font-weight : 500;
            font-size: 13px;
            width: 100px;
            border: solid 1px black;
            border-radius: 10px;
            color: black;
            cursor: pointer;
            display: flex;
            justify-content: space-around;
        }
        #file{
            width: 19px;
        }
        #check1 div{
            background-color: #FD0;
            border: solid 0.4px black;
        }
        #check1 a{
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
    </style>
</head>
<body>
    <nav>
        <div class="board">
            <a href="https://www.instagram.com/yeohaenggil_souvenir_shop"  style="margin-top: 5px;"><div class="logo"><img src="../image/메인_로고-배경제거.png"></div></a>
            <a href="notification.php" style="margin-left: -50px;"><span class="notification">공지사항</span></a>
            <a href="open/open.php"><span class="open">오픈</span></a>
            <a href="mission/mission.php"><span class="mission">오늘의 미션</span></a>
            <a href="close/close.php"><span class="close">마감</span></a>
            <a href="significant/significant_time.html"><span class="significant">특이사항</span></a>
            <a href="../login.html" class="logout_a">
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
                <a href="notification.php">공지사항</a>
            </div>
            <div class="navs" id="check2">
                <div class="check"></div>
                <a href="open/open.php">오픈</a><span id="open"></span>
            </div>
            <div class="navs" id="check3">
                <div class="check"></div>
                <a href="mission/mission.php">오늘의 미션</a><span id="mission"></span>
            </div>
            <div class="navs" id="check4">
                <div class="check"></div>
                <a href="close/close.php">마감</a><span id="close"></span>
            </div>
            <div class="navs" id="check5">
                <div class="check"></div>
                <a href="significant/significant.php">특이사항</a>
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
            <div id="imgbox"><img src="../image/메인_로고-배경제거.png"></div>
        </aside>
        
        <div class="notification_box">
            <h1>공지사항</h1>
            <form method="post" action="notification_post.php">
                <textarea placeholder="텍스트 입력" name="notification_text"></textarea>
                <input type="submit" value="게시" class="upload">
                <div style="width: 100px; margin-left: 50px;" class="di">
                    <label class="input-file-button" for="input-file">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" id="file">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.2934 4.87867C25.0148 4.60009 24.6841 4.37911 24.3201 4.22834C23.9561 4.07758 23.566 3.99998 23.1721 3.99998C22.7781 3.99998 22.388 4.07758 22.024 4.22834C21.66 4.37911 21.3293 4.60009 21.0507 4.87867L6.46406 19.4653C5.52643 20.4031 4.99975 21.675 4.99988 23.0011C5 24.3273 5.52692 25.599 6.46473 26.5367C7.40253 27.4743 8.6744 28.001 10.0005 28.0009C11.3267 28.0007 12.5984 27.4738 13.5361 26.536L23.7934 16.2787C23.983 16.102 24.2337 16.0059 24.4928 16.0104C24.7518 16.015 24.999 16.12 25.1822 16.3032C25.3654 16.4864 25.4704 16.7336 25.475 16.9926C25.4795 17.2517 25.3834 17.5024 25.2067 17.692L14.9494 27.9493C14.3025 28.6132 13.5303 29.1419 12.6774 29.5049C11.8246 29.8679 10.9082 30.0579 9.98131 30.0639C9.05446 30.0699 8.13564 29.8917 7.27818 29.5398C6.42072 29.1879 5.64169 28.6692 4.98629 28.0138C4.33089 27.3584 3.81218 26.5793 3.46025 25.7219C3.10832 24.8644 2.93019 23.9456 2.93618 23.0188C2.94218 22.0919 3.13218 21.1755 3.49517 20.3226C3.85816 19.4698 4.38691 18.6975 5.05073 18.0507L19.6361 3.464C20.5739 2.52638 21.8457 1.99969 23.1719 1.99982C24.498 1.99994 25.7698 2.52687 26.7074 3.46467C27.645 4.40248 28.1717 5.67434 28.1716 7.00048C28.1715 8.32661 27.6445 9.59838 26.7067 10.536L12.1294 25.1133L12.1187 25.124L12.1094 25.1333L12.1067 25.136L12.1027 25.1387C11.5325 25.6709 10.7775 25.9601 9.9977 25.945C9.21789 25.9299 8.47461 25.6117 7.92544 25.0578C7.37627 24.504 7.06439 23.758 7.05592 22.9781C7.04745 22.1982 7.34305 21.4457 7.88006 20.88L18.2934 10.4667C18.4819 10.2844 18.7345 10.1835 18.9967 10.1857C19.2589 10.1878 19.5097 10.2929 19.6952 10.4782C19.8807 10.6635 19.986 10.9143 19.9884 11.1765C19.9908 11.4387 19.8901 11.6913 19.7081 11.88L9.29473 22.2933C9.1059 22.4797 8.99883 22.7334 8.99708 22.9987C8.99533 23.264 9.09904 23.5192 9.2854 23.708C9.47176 23.8968 9.7255 24.0039 9.9908 24.0057C10.2561 24.0074 10.5112 23.9037 10.7001 23.7173L25.2934 9.12C25.572 8.84143 25.793 8.51071 25.9437 8.14673C26.0945 7.78275 26.1721 7.39264 26.1721 6.99867C26.1721 6.6047 26.0945 6.21459 25.9437 5.85061C25.793 5.48663 25.572 5.15725 25.2934 4.87867Z" fill="black"/>
                            </svg>
                            <span style="margin: 10px 15px 0 0;">파일첨부</span>
                        </div>
                    </label>
                </div>
                <input type="file" name="notification_file" id="input-file" style="display: none;"> <!--기존의 input file 태그 숨김-->
                <input type="hidden" name="NowTime" id="time">
            </form>
        </div>
        
    </div>
    <script>
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
        

        var today = new Date();

        var year = today.getFullYear();
        var month = ('0' + (today.getMonth() + 1)).slice(-2);
        var day = ('0' + today.getDate()).slice(-2);

        var dateString = year + '-' + month  + '-' + day;

        var hours = ('0' + today.getHours()).slice(-2); 
        var minutes = ('0' + today.getMinutes()).slice(-2);
        var seconds = ('0' + today.getSeconds()).slice(-2); 

        var timeString = hours + ':' + minutes  + ':' + seconds;

        let post_time = dateString + "," + timeString;
        document.getElementById('time').value = post_time;


        let goal_price = <?php
            $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
            if(mysqli_connect_errno()){
                echo 'MySQL 접속 실패 : '.mysqli_connect_error();
                exit();
            }
            $today = date("Y-m-d");
            $query = "select goal_price from today_goal where time='".$today."';";
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
            $query = "select now_price from today_goal where time='".$today."';";
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