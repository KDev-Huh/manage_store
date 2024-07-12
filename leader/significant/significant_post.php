<?php
    $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
    if(mysqli_connect_errno()){
        echo "MYSQL 접속 실패".mysqli_connect_errno();
        exit();
    }
    $query = "update significant set answer='".$_POST['answer']."' where time='".$_POST['time']."';";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('답변 전송 성공')</script>";
        echo "<script>location.href='significant_time.html'</script>";
    }
?>