<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this show student information webpage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="01">
<?php
   require 'conn.php';
   $sql = "SELECT * FROM studentbio";
   $result = $conn->query($sql);
   if(!$result){
       die("Error : ". $conn->$conn_error);
   }
?>
<h1>Student Bio</h1><br> 
       <table>
           <thead>
               <tr class="name">
                   <th>รหัสนักศึกษา</th>
                   <th>ชื่อ-นามสกุล</th>
                   <th>ที่อยู่</th>
                   <th>เบอร์โทร</th>
                   <th> ธุรกรรม </th>
               </tr>
           </thead>
           <tbody>
               <?php // show data by fetch from database
                   if ($result->num_rows > 0) {
                       while($row = $result->fetch_assoc()) {
                           echo"<tr><td>".$row["sid"]."</td>"."<td>".$row["sname"]." ".$row["slastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["telephone"]."</td>"."<td>"."<a href='editbio.php?sid=".$row["sid"]."'><button> Edit </button></a>"."</td>";
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
       <a href='insertbio.php'><button class="in"> Insert Student</button></a>
</body>
</html>