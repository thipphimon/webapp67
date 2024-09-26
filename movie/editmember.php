<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>this is webpage for edit data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
        if(!isset($_GET['mid'])){
            header("refresh: 0; url=mainmember.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM member WHERE mid='$_GET[mid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form method="post" action="editscmovie.php">
        <p>

            <label>รหัสผู้ใช้</label>
            <input type="text" name="mid" id="mid" value="<?=$row['mid'];?>" hidden>
            <input type="text" name="mid" id="mid" value="<?=$row['mid'];?>" />

        </p>
        <p>

            <label>ชื่อ</label>
            <input type="text" name="mid" id="mid" value="<?=$row['mid'];?>" hidden>
            <input type="text" name="mname" id="mname" value="<?=$row['mname'];?>" />

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="mlastname" id="mlastname" value="<?=$row['mlastname'];?>" />

        </p>

        <p>

            <label>ที่อยู่</label>

            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />

        </p>

        <p>

            <label>เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />

        </p>
        <input id="bun" type="submit" value="บันทึก">
        <a href='mainmember.php'><button> Mainmenu</button></a>
    </form>

</body>
</html>