<?php

    $userName ="mgs_user";
    $passwrod = "pa55word";
    $database = "my_guitar_shop1";
    $host = "localhost";

    //host,user,password,database
    $connectString = mysqli_connect($host, $userName, $passwrod, $database);

    $sql = "SELECT * FROM products";

    $myRecords = mysqli_query($connectString,$sql);

    //print_r($myRecords)
    While($row = mysqli_fetch_assoc($myRecords)){
        echo $row['productName'] . " $" . $row['listPrice']. "<br>";
    }



?>