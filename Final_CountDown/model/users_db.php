<?php
function getAllUsers($userName){
    global $connect;
    $sql = "SELECT * FROM users Where userName ='$userName'";
    // $records = mysqli_query($connect,$sql);
   
    //  $arrayCat =mysqli_fetch_all($records, MYSQLI_ASSOC);
    $pdoStatement = $connect->query($sql);
    $Users=$pdoStatement->fetch();
    return $Users;//returns array of categories
}