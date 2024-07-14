<?php
    $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
    if(mysqli_connect_errno()){
        echo 'MySQL 접속 실패 : '.mysqli_connect_error();
        exit();
    }
    $query = "update close set doit = '".$_POST['doit']."' where id = ".$_POST['id'].";";
    $result = mysqli_query($conn, $query);
    echo "<script>location.href='employee.php'</script>"
?>