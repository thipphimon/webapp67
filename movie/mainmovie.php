<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainmenu for movie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql = "SELECT * FROM movie";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<h1>Movie Information</h1><br>
        <table>
            <thead>
                <tr>
                    <th>รหัสภาพยนตร์</th>
                    <th>ชื่อภาพยนตร์</th>
                    <th>ปีที่ฉายภาพยนต์</th>
                    <th>นักแสดงนำ</th>
                    <th>ความยาวภาพยนตร์/นาที</th>
                    <th>แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["mvid"]."</td>"."<td>".$row["mvname"]."</td> "."<td>".$row["mvyear"]."</td>"."<td>".$row["mvacount"]."</td>"."<td>".$row["mvtime"]."</td>"."<td>"."<a href='editmovie.php?mvid=".$row["mvid"]."'><button> Edit </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table> 
        <br>
        <a href='insertmovie.php'><button> Insert Movie</button></a>
        <a href='mainmember.php'><button>Membership Information</button></a>
</html>