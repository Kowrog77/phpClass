<?php

include "datab.php";

function listStuff(){
    global $db;
    $form ="categories";
    $sql = "SELECT * FROM $form ORDER BY categoryName ASC ";
    $myQuery = mysqli_query($db,$sql);

        while ($row = mysqli_fetch_assoc($myQuery)){
        // echo($row['categoryName']) ."<br>";
        extract($row);
        echo($categoryName."<br>");
    }
}
listStuff();

echo"<h4>Inseting Stuff</h4>";

$aThing = "'Strings'";
$sqlInsert = "INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES (NULL,$aThing)";
//echo($sqlInsert);
$rsInsert = mysqli_query($db,$sqlInsert);
listStuff();

echo"<h4> Deleting Stuff</h4>";
$sqlDelete ="DELETE FROM categories WHERE categoryName <> 'Guitars' and categoryName <>'Basses' and categoryName <>'Drums'";
//echo($sqlDelete);
$rsDelete = mysqli_query($db,$sqlDelete);
listStuff();


?>