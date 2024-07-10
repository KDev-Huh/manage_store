<?php
// 데이터베이스 연결
    $conn = mysqli_connect('localhost', 'root', '', 'manage_store');
    if(mysqli_connect_errno()){
        echo 'MySQL 접속 실패 : '.mysqli_connect_error();
        exit();
    }
    $query = "select * from notification where time='".$_GET['time']."';";
    $result = mysqli_query($conn, $query);
    $notification_text = '';
    if ($result){
        $row = mysqli_fetch_assoc($result);
        if($row){
            $notification_text = addslashes($row['post']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="textbox"></div>
    <script>
        document.getElementById("textbox").innerHTML=("<?php echo $notification_text;?>");
    </script>
</body>
</html>


<!-- 
if ($result) {
    // 쿼리 실행 결과가 성공적으로 반환됐을 때 실행됩니다.
    $row = mysqli_fetch_assoc($result); // 데이터베이스에서 한 행(row)을 연관 배열(associative array)로 가져옵니다.
    if ($row) {
        // 데이터베이스에서 파일 데이터와 파일 이름을 가져왔을 때 실행됩니다.
        $file_data = $row['file_data']; // 가져온 파일 데이터 (바이너리 형식)
        $file_name = $row['file_name']; // 가져온 파일 이름

        // 파일 다운로드 헤더 설정
        header('Content-Description: File Transfer'); // 파일 전송 설명
        header('Content-Type: application/octet-stream'); // 다운로드할 파일의 MIME 타입을 지정합니다. 여기서는 일반적인 바이너리 파일을 의미하는 application/octet-stream을 사용합니다.
        header('Content-Disposition: attachment; filename="' . $file_name . '"'); // 다운로드할 파일의 이름을 지정합니다.
        header('Expires: 0'); // 캐시 제어: 파일 다운로드가 더 이상 유효하지 않음을 명시합니다.
        header('Cache-Control: must-revalidate'); // 캐시 제어: 파일이 다운로드될 때마다 캐시를 다시 검증해야 함을 명시합니다.
        header('Pragma: public'); // 캐시 제어: HTTP 1.0과 호환성을 유지하기 위해 필요한 헤더입니다.
        header('Content-Length: ' . strlen($file_data)); // 다운로드할 파일의 크기를 지정합니다.

        // 파일 데이터 출력
        echo $file_data; // 데이터베이스에서 가져온 파일 데이터를 출력하여 클라이언트에 전송합니다.
        exit; // 파일 다운로드 후 스크립트 실행을 종료합니다.
    } else {
        // 파일 데이터를 가져오지 못했을 때 실행됩니다.
        echo '파일을 찾을 수 없습니다.';
    }
} else {
    // 쿼리가 실패했을 때 실행됩니다.
    echo '쿼리 실행 실패!';
} -->
