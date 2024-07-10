<?php
    $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
    if(mysqli_connect_errno()){
        echo 'MySQL 접속 실패 : '.mysqli_connect_error();
        exit();
    }

    $query = "insert into notification values('".$_POST['NowTime']."', '".$_POST['notification_text']."', '".$_POST['notification_file']."');";
    $result = mysqli_query($conn, $query);
    if($result) {
        echo "<script>alert('데이터 삽입 성공!!!');</script>";
        echo '<script>location.href="../employee/employee.php?time='.$_POST['NowTime'].'";</script>';
    }
    else{
        echo "<script>alert('데이터 삽입 실패!!!');</script>";
    }
   
?>