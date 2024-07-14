<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1;
            width: 500px;
        }
        #notification{
            margin-bottom: 50px;
            width: 500px;
            border: solid 1px black;
            height: auto;
            padding: 10px;
        }
        #opens{
            margin-bottom: 50px;
            display: flex;
            justify-content:space-around;
        }
        .open{
            border: solid 1px black;
            margin-top: 10px;
            width: 300px;
            padding: 10px;
            height: auto;
        }
        #missions{
            margin-bottom: 50px;
            display: flex;
            justify-content:space-around;
        }
        .mission{
            border: solid 1px black;
            margin-top: 10px;
            width: 300px;
            padding: 10px;
            height: auto;
        }
        #closes{
            margin-bottom: 50px;
            display: flex;
            justify-content:space-around;
        }
        .close{
            border: solid 1px black;
            margin-top: 10px;
            width: 300px;
            padding: 10px;
            height: auto;
        }
        #significant_box{
            border: solid 1px black;
            margin-top: 10px;
            margin: 0 auto;
            width: 800px;
            padding: 10px;
            height: auto;
        }
        textarea{
            width: 500px;
            height: 200px;
        }
    </style>
</head>
<body>
    <?php
        // 데이터베이스 연결
        $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
        if(mysqli_connect_errno()){
            echo 'MySQL 접속 실패 : '.mysqli_connect_error();
            exit();
        }

        // 공지 사항 
        $time=date('Y-m-d');
        $query = "select post from notification where time = (select max(time) from notification where time like '".$time."%');";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        echo "<h1>공지사항</h1>";
        if($row){
            echo "제일 최신에 올라온 데이터";
            echo "<div id='notification'>".$time." : ".$row['post']."</div>";
        }
        else
            echo "아직 공지사항이 올라오지 않음";

        // 오픈준비
        $query = "select id,open_work,detail,doit from open";
        $result = mysqli_query($conn, $query);
        echo "<h1>오픈준비</h1><div id='opens'>";
        while($row = mysqli_fetch_assoc($result)){
            if($row['doit']==1)
                $doit = '임무완수';
            else
                $doit = '아직 완료 못함';
            echo "<div id='open".$row['id']."' class='open'>
                <h4>".$row['open_work']."</h4>
                <p>".$row['detail']."</p>
                <form action='open.php' method='post'>
                    <button type='submit' value='1' name='doit'>완료</button>
                    <button type='submit' value='0' name='doit'>취소</button>
                    <input type='hidden' value='".$row['id']."' name='id'>
                </form>
                <h4>".$doit."</h4>
            </div>";
        }
        echo "</div>";

        // 오늘의 미션
        $query = "select id,mission_work,detail,doit from mission";
        $result = mysqli_query($conn, $query);
        echo "<h1>오늘의 미션</h1><div id='missions'>";
        while($row = mysqli_fetch_assoc($result)){
            if($row['doit']==1)
                $doit = '임무완수';
            else
                $doit = '아직 완료 못함';
            echo "<div id='mission".$row['id']."' class='mission'>
                <h4>".$row['mission_work']."</h4>
                <p>".$row['detail']."</p>
                <form action='mission.php' method='post'>
                    <button type='submit' value='1' name='doit'>완료</button>
                    <button type='submit' value='0' name='doit'>취소</button>
                    <input type='hidden' value='".$row['id']."' name='id'>
                </form>
                <h4>".$doit."</h4>
            </div>";
        }
        echo "</div>";

        // 마감
        $query = "select id,close_work,detail,doit from close";
        $result = mysqli_query($conn, $query);
        echo "<h1>오늘의 미션</h1><div id='closes'>";
        while($row = mysqli_fetch_assoc($result)){
            if($row['doit']==1)
                $doit = '임무완수';
            else
                $doit = '아직 완료 못함';
            echo "<div id='close".$row['id']."' class='close'>
                <h4>".$row['close_work']."</h4>
                <p>".$row['detail']."</p>
                <form action='close.php' method='post'>
                    <button type='submit' value='1' name='doit'>완료</button>
                    <button type='submit' value='0' name='doit'>취소</button>
                    <input type='hidden' value='".$row['id']."' name='id'>
                </form>
                <h4>".$doit."</h4>
            </div>";
        }
        echo "</div>";
    ?>
    <!-- 특이사항 -->
    <div id="significant_box">
        <h1>특이사항 입력</h1>
        <form action="significant.php" method="post">
            <textarea name="receive" placeholder="텍스트 입력"></textarea>
            <input type="submit" value="확인">
        </form>
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
            if(mysqli_connect_errno()){
                echo 'MySQL 접속 실패 : '.mysqli_connect_error();
                exit();
            }
            $now_date = date('Y-m-d');
            $query = "select * from significant where time like '".$now_date."';";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            if($row){
                echo "<h1>특이사항 보기</h1><p>".$row['receive']."</p>";
                if($row['answer'])
                    echo "<h4>특이사항 보기</h4><p>".$row['answer']."</p>";
            }
        ?>  
    </div>
</body>
</html>