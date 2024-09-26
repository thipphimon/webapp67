<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>this is webpage for edit data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
        if(!isset($_GET['aid'])){
            header("refresh: 0; url=mainactor.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM actor WHERE aid='$_GET[aid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form method="post" action="editscactor.php">
        <p>

            <label>รหัสผู้ใช้</label>
            <input type="text" name="aid" id="aid" value="<?=$row['aid'];?>" hidden>
            <input type="text" name="aid" id="aid" value="<?=$row['aid'];?>" />

        </p>
        <p>

            <label>ชื่อ</label>
            <input type="text" name="aid" id="aid" value="<?=$row['aid'];?>" hidden>
            <input type="text" name="aname" id="aname" value="<?=$row['aname'];?>" />

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="alastname" id="alastname" value="<?=$row['alastname'];?>" />

        </p>

        <p>

            <label>เพศ</label>

            <input type="text" name="gender" id="gender" value="<?=$row['gender'];?>" />

        </p>

        <p>

            <label>จำนวนหนังที่แสดง</label>

            <input type="text" name="acount" id="acount" value="<?=$row['acount'];?>" />

        </p>
        <input id="save" type="submit" value="บันทึก">
        <a href='mainactor.php'><button> Home</button></a>
    </form>

</body>
</html>