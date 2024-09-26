<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainmenu for Actor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql = "SELECT * FROM actor";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<h1 class=main>Movie</h1><br>
        <a class=actor href='mainactor.php'><button> Main Actor</button></a>
        <a href='mainmovie.php'><button> Main Movie</button></a>
        <a href='mainmember.php'><button> Main Member</button></a>
</html>