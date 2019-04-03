<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include "datab.php";
    

    $sqlInsert=" INSERT into customers(firstName,lastName) Values ('D','J')";
    // echo($sqlInsert);
    $qryInsert = mysqli_query($db, $sqlInsert);

    //this has to be the next step if you need id!!!
    $theID = mysqli_insert_id($db);







    ?>
</body>
</html>