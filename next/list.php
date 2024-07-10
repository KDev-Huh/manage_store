<?php
    $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
    if(mysqli_connect_errno()){
        echo 'MySQL 접속 실패 : '.mysqli_connect_error();
        exit();
    }

    //로그인 확인
    $query = "select member_id,member_password from member where member_id='".$_POST['member_id']."' and member_password='".$_POST['member_password']."';";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['member_id']==$_POST['member_id'] && $row['member_password']==$_POST['member_password']){
        echo "$row[member_id]","$row[member_password]";
    }
    else{
        echo "<script>alert('아이디나 비밀번호가 잘못되었습니다.')</script>";
        echo "<script>history.back();</script>";
    }
?>
<input type="button" value="달력">