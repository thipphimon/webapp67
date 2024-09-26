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

$aid = $_GET['aid'];

$sql = "DELETE FROM actor WHERE aid = '$aid'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("refresh: 1; url=mainactor.php"); 
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 


</body>
</html>