<meta charset ="utf-8">

<?php
    $No = $_GET["No"];
    echo $No;

    //連接資料庫
    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '00000000',  // 密碼
        'student');  // 預設使用的資料庫名稱

    //SQL語法
    $SQL = "DELETE FROM student WHERE No = '$No'";

    //送出查詢
    if($result = mysqli_query($link, $SQL)){
        echo "<br/>刪除成功";
    }
    echo "<br/><a href = 'index.php'>查看資料庫資料</a>"
?>
