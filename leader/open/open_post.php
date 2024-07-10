<?php
    $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
    if(mysqli_connect_errno()){
        echo 'MySQL 접속 실패 : '.mysqli_connect_error();
        exit();
    }
    $query = "select id, open_work, doit, detail from open;";
    $result1 = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result1)+1; //튜플 갯수

    if($_POST['addText']!=""){
        $query = "insert into open values(".$count.", '".$_POST['addText']."', '0', '".$_POST['moreText']."');";
        $result = mysqli_query($conn, $query); 
        if($result) {
            echo "<script>alert('데이터 삽입 성공!!!');</script>";
        }
        else{
            echo "<script>alert('데이터 삽입 실패!!!');</script>";
        }
    }
   echo "<script>location.href='open.php'</script>"
?>