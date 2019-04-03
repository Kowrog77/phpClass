<?php
$host = "localhost";
$userName = "mgs_user";
$password = "pa55word";
$database = "studentsdb";
$connetString  = mysqli_connect($host, $userName,$password,$database);
data("student","FirstName","LastName");
data( "degrees","Degree",NULL);
data("districts","Zip","City");
function data($datatype,$typeOne,$typeTwo){
    $sql ="SELECT * FROM $datatype";
    $myRecord = mysqli_query($connetString,$sql);
    while($row = mysqli_fetch_assoc($myRecord)){
        if(empty($typeTwo)){
            echo( $row[$typeOne]."<br>");
        }
        else{
            echo($row[$typeOne] . " " . $row[$typeTwo] . "<br>");
        }
}
}
?>