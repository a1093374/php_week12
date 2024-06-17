<meta charset = "utf-8">

<?php
    session_start();
?>

<?php
    
    $link = @mysqli_connect( 
                'localhost',  
                'root',       
                '00000000', 
                'student'); 
    if(!$link)
        die("無法開啟資料庫!<br/>");
    else
        echo "資料庫開啟成功!";
    
  
    $SQL = "SELECT * FROM student";

    
    $result = mysqli_query($link, $SQL);

  
    echo "<table border = '1'>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["No"]."</td><td>".$row["sNo"]."</td><td>".$row["sName"]."</td><td>".$row["Dept"]."</td><td>".$row["Address"]."</td>";
        echo "<td><img src='{$row['sImg']}'></td><td><a href = 'del.php?No=".$row["No"]."'>刪除</a></td><td><a href = 'update.php?No=".$row["No"]."'>修改</a></td><br/>";

        echo "</tr>";
    }
    echo "</table>";
    
    mysqli_close($link);
?>
