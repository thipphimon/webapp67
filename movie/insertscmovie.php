<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show insert data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql_update="INSERT INTO movie(mvid,mvname,mvyear,mvacount,mvtime) VALUES ('$_POST[mvid]','$_POST[mvname]','$_POST[mvyear]','$_POST[mvacount]','$_POST[mvtime]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Insert Success <br>";
    header("refresh: 1; url=mainmovie.php");
    }

?> 

</body>
</html>