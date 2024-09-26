<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titlหe>this webpage show editing data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
            require 'conn.php';
$sql_update="UPDATE movie SET mvname='$_POST[mvname]',mvyear='$_POST[mvyear]' ,mvacount='$_POST[mvacount]' ,mvtime='$_POST[mvtime]' WHERE mvid='$_POST[mvid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=mainmovie.php");
            }

        ?>

</body>
</html>