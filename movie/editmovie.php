<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>this is webpage for edit data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
        if(!isset($_GET['mvid'])){
            header("refresh: 0; url=mainmovie.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM movie WHERE mvid='$_GET[mvid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form method="post" action="editscmovie.php">
        <p>

            <label>รหัสภาพยนตร์</label>
            <input type="text" name="mvid" id="mvid" value="<?=$row['mvid'];?>" hidden>
            <input type="text" name="mvid" id="mvid" value="<?=$row['mvid'];?>" />

        </p>
        <p>

            <label>ชื่อภาพยนตร์</label>
            <input type="text" name="mvid" id="mvid" value="<?=$row['mvid'];?>" hidden>
            <input type="text" name="mvname" id="mvname" value="<?=$row['mvname'];?>" />

        </p>

        <p>

            <label>ปีที่ฉาย</label>

            <input type="text" name="mvyear" id="mvyear" value="<?=$row['mvyear'];?>" />

        </p>

        <p>

            <label>นักแสดงนำ</label>

            <input type="text" name="mvacount" id="mvacount" value="<?=$row['mvacount'];?>" />

        </p>

        <p>

            <label>ความยาวภาพยนตร์</label>

            <input type="text" name="mvtime" id="mvtime" value="<?=$row['mvtime'];?>" />

        </p>
        <input id="save" type="submit" value="บันทึก">
        <a href='mainmovie.php'><button> Home</button></a>
    </form>

</body>
</html>