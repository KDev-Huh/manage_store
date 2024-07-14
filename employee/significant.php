<?php
    $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
    if(mysqli_connect_errno()){
        echo 'MySQL 접속 실패 : '.mysqli_connect_error();
        exit();
    }
    $now_date = date('Y-m-d');
    $query = "select * from significant where time like ".$now_date."";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if($row)
        echo "<script>alert('이미 특이사항이 작성되었습니다.');</script>";
    else{
        $query = "insert into significant values('".$now_date."', '".$_POST['receive']."', '');";
        $result = mysqli_query($conn, $query);
        echo "<script>alert('작성이 성공되었습니다.');</script>";
    }
    echo "<script>location.href='employee.php'</script>";
?>