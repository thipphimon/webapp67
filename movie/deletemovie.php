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

$mvid = $_GET['mvid'];

$sql = "DELETE FROM movie WHERE mvid = '$mvid'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("refresh: 1; url=mainmovie.php"); 
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 


</body>
</html>