<meta charset = "utf-8">

<?php
    session_start();
?>

<?php
    $sName = $_POST["sName"];
    $sDept = $_POST["sDept"];
    $inputFile = $_FILES["inputFile"];

  
    $link = @mysqli_connect( 
        'localhost',  
        'root',        
        '00000000',  
        'student'); 

    $ext = pathinfo($_FILES["inputFile"]["name"], PATHINFO_EXTENSION);
    $_SESSION["upname"] = time().".".$ext;
    echo $_SESSION["upname"];


    $SQL = "INSERT INTO student(sName, Dept, sImg) VALUES('$sName','$sDept','{$_SESSION['upname']}')";

   
    if($result = mysqli_query($link, $SQL)){
        echo "<br/>新增成功";
    }
    echo "<br/><a href='index.php'>查看資料庫資料</a><br/>";
?>

<?php
    echo "檔案名稱: ".$_FILES["inputFile"]["name"]."<br/>";
    echo "暫存檔名: ".$_FILES["inputFile"]["tmp_name"]."<br/>";
    echo "檔案尺寸: ".$_FILES["inputFile"]["size"]."<br/>";
    echo "檔案種類: ".$_FILES["inputFile"]["type"]."<hr/>";



    if(copy($_FILES["inputFile"]["tmp_name"],$_SESSION["upname"])){
        echo "檔案上傳成功";
        unlink($_FILES["inputFile"]["tmp_name"]);
    }
?>
