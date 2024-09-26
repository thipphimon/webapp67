<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this page show inserting</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="insertscactor.php">
        <p>

            <label>รหัสผู้ใช้</label>
            <input type="text" name="aid" id="aid">

        </p>
        <p>

            <label>ชื่อ</label>
            <input type="text" name="aname" id="aname">

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="alastname" id="alastname">

        </p>

        <p>

            <label>เพศ</label>

            <input type="text" name="gender" id="gender">
            

        </p>

        <p>

            <label>จำนวนหนังที่แสดง</label>

            <input type="text" name="acount" id="acount">

        </p>
    
        <input id="save"type="submit" value="บันทึก">
        
    </form>
        <a href='mainactor.php'><button> Home</button></a>

</body>
</html>