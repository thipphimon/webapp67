<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show editing data</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
require 'conn.php';

$mid = $_GET['mid'];

$sql = "DELETE FROM member WHERE mid = '$mid'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("refresh: 1; url=mainmember.php"); 
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 


</body>
</html>