<meta charset = "utf-8">

<?php
    $No = $_POST["uNo"];
    $Name = $_POST["uName"];
    $Department = $_POST["uDept"];

    //連接資料庫
    $link = @mysqli_connect( 
        'localhost',  
        'root',       
        '00000000',  
        'student');  

    //SQL語法
    $SQL = "UPDATE student SET sName='$Name', Dept='$Department' WHERE No='$No'";
    
    if($result = mysqli_query($link, $SQL)){
        echo "更新成功";
    }
    echo "<br/><a href = 'index.php'>查看資料庫資料</a>"
?>
