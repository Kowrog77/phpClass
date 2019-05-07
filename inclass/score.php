<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Janaury 28</title>
    <style>
        .wrong{color:red;}
    </style>
</head>
<body>
<form method ="get">
<!-- <input type ="text" name ="age" placeholder = "Age"> -->
<select name = "age">
    
    <?php
        for($i =1; $i < 101; $i++){
            echo("<option value ='$i'> $i </option> ");
        }
    ?>
    <p>hello</p>
</select>
<input type = "score" name ="score" placeholder = "Score"> 

<input type ="submit" value  ="Apply">

</form>

<?php
    
    if(isset($_GET['age'])){
        $age = $_GET['age'];
        $score = $_GET['score'];

        //if statments
        if($age < 18 || $score < 680)
        {
        echo("<p class='wrong'>Yu are not eligible to get a a loan</p>");
        // } else if ($score < 680){
        //     echo("Your score is too low"); 

        }else{
        echo("<p>Yay! You can go into debt!!!!!!!!!!!!!!</p>");
        }
    }


?>
<!-- for loops  -->
</body>
</html>