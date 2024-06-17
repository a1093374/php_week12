<meta charset = "utf-8">

<?php
    $No=$_GET["No"];
  
    $link = @mysqli_connect( 
        'localhost',  
        'root',       
        '00000000',  
        'student');  

    
    $SQL = "SELECT * FROM student WHERE No = '$No'";
    
    if($result = mysqli_query($link, $SQL)){
        $row = mysqli_fetch_assoc($result);
        $Name = $row["sName"];
        $Department = $row["Dept"];
    }
?>

<form action = "updatecheck.php" method = "post">

    編號:<?php echo $No ?><input type = "hidden" name = "uNo" value = "<?php echo $No ?>"><br/>
    姓名:<input type = "text" name = "uName" value = "<?php echo $Name ?>"><br/>
    系所:<input type = "text" name = "uDept" value = "<?php echo $Department ?>"><br/>

    <input type = "submit">

</form>
